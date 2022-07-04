<?php

// Copyright (c) 2016 Interfacelab LLC. All rights reserved.
//
// Released under the GPLv3 license
// http://www.gnu.org/licenses/gpl-3.0.html
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// **********************************************************************

namespace MediaCloud\Plugin\Tools\Video\Player;

use Elementor\Elements_Manager;
use Elementor\Plugin;
use MediaCloud\Plugin\Tools\ToolsManager;
use MediaCloud\Plugin\Tools\Video\Driver\Mux\Data\MuxDatabase;
use MediaCloud\Plugin\Tools\Video\Driver\Mux\Elementor\MuxVideoWidget;
use MediaCloud\Plugin\Tools\Tool;
use MediaCloud\Plugin\Tools\Video\Driver\Mux\Models\MuxAsset;
use MediaCloud\Plugin\Utilities\View;
use function MediaCloud\Plugin\Utilities\arrayPath;
use function MediaCloud\Plugin\Utilities\gen_uuid;
use function MediaCloud\Plugin\Utilities\postIdExists;

class VideoPlayerTool extends Tool {
	/** @var null|VideoPlayerToolSettings|VideoPlayerToolProSettings */
	protected $settings = null;

	/** @var null|VideoPlayerShortcode */
	protected $shortCode = null;

	public function __construct($toolName, $toolInfo, $toolManager) {
		if (media_cloud_licensing()->is_plan__premium_only('pro')) {
			$this->settings = VideoPlayerToolProSettings::instance();
		} else {
			$this->settings = VideoPlayerToolSettings::instance();
		}

		parent::__construct($toolName, $toolInfo, $toolManager);
	}

	//region Tool Overrides
	public function hasSettings() {
		return true;
	}

	public function setup() {
		if ($this->enabled()) {
			MuxDatabase::init();

			$this->shortCode = new VideoPlayerShortcode();

			add_filter('render_block', [$this, 'filterBlocks'], PHP_INT_MAX - 1, 2);

			static::enqueuePlayer(is_admin());

			if (is_admin()) {
				add_action('admin_enqueue_scripts', function(){
					wp_enqueue_script('mux-admin-js', ILAB_PUB_JS_URL.'/mux-admin.js', null, null, true);
					wp_enqueue_style('mux-admin-css', ILAB_PUB_CSS_URL . '/mux-admin.css' );
				});


				$this->integrateWithAdmin();
			}

			$this->initBlocks();
		}
	}
	//endregion

	//region UI
	private function integrateWithAdmin() {
		if (media_cloud_licensing()->is_plan__premium_only('pro')) {
			if(current_user_can('manage_options')) {
				add_action('wp_ajax_video-upload-subtitle', function() {
					$this->actionCaptionUpload();
				});

				add_action('wp_ajax_video-delete-subtitle', function() {
					$this->actionCaptionDelete();
				});

				add_action('wp_ajax_video-set-default-subtitle', function() {
					$this->actionSetDefaultCaption();
				});
			}
		}

		add_action('add_meta_boxes_attachment', function($post) {

			if (media_cloud_licensing()->is_plan__premium_only('pro')) {
				$asset = null;
				if (ToolsManager::instance()->toolEnabled('video-encoding')) {
					$asset = MuxAsset::assetForAttachment($post->ID);
				}

				if (empty($asset)) {
					add_meta_box('mcloud-subtitles-manager', 'Subtitles', function($post) use ($asset) {
						/** @var \WP_Post $post */
						echo View::render_view('admin.video.subtitles-manager', [
							'asset' => $asset,
							'post' => $post
						]);
					}, 'attachment', 'side', 'low');
				}
			}

			add_meta_box('mcloud-video-filmstrip', 'Filmstrip', function($post) {
				/** @var \WP_Post $post */
				echo View::render_view('admin.video.filmstrip', [
					'post' => $post
				]);
			}, 'attachment', 'side', 'low');
		});
	}
	//endregion

	//region Subtitle actions
	private function actionCaptionUpload() {

	}

	private function actionCaptionDelete() {

	}

	private function actionSetDefaultCaption() {

	}
	//endregion

	//region Player
	public static function enqueuePlayer($admin = false) {
		if (media_cloud_licensing()->is_plan__premium_only('pro')) {
			add_action((!empty($admin)) ? 'admin_enqueue_scripts' : 'wp_enqueue_scripts', function() {
				/** @var VideoPlayerToolProSettings $settings */
				$settings = VideoPlayerToolProSettings::instance();

				if($settings->playerType === 'videojs') {
					$lastDep = 'mux_videojs';
					if(!empty($settings->envKey)) {
						wp_enqueue_script('mux_videojs', ILAB_PUB_JS_URL . '/videojs-player-data.js', null, null, true);
					} else {
						wp_enqueue_script('mux_videojs', ILAB_PUB_JS_URL . '/videojs-player.js', null, null, true);
					}

					$playerSettings = ['plugins' => []];

					if($settings->playerAllowAirPlay) {
						$playerSettings['plugins']['airPlay'] = ['addButtonToControlBar' => true];
					}

					if($settings->playerAllowQualitySelect) {
						$playerSettings['plugins']['httpSourceSelector'] = ['default' => 'auto'];
					}

					$lastDep = apply_filters('media-cloud/video/videojs-enqueue-plugins', $lastDep);

					if (empty($settings->playerOverrideNative)) {
						$playerSettings['html5'] = [
							'vhs' => [
								'overrideNative' => false
							],
							'nativeAudioTracks' => true,
							'nativeVideoTracks' => true,
						];
					} else {
						$playerSettings['html5'] = [
							'vhs' => [
								'overrideNative' => true
							],
							'nativeAudioTracks' => false,
							'nativeVideoTracks' => false,
						];
					}

					$playerSettings = apply_filters('media-cloud/video/videojs-player-settings', $playerSettings);

					$deps = empty($lastDep) ? null: [$lastDep];
					wp_enqueue_script('mux_video_player_videojs', ILAB_PUB_JS_URL . '/mux-player.js', $deps, null, true);
					wp_localize_script('mux_video_player_videojs', 'muxPlayerSettings', $playerSettings);

					wp_enqueue_style('mux_video_player_style', ILAB_PUB_CSS_URL . '/mux-player.css', null, null);
					do_action('media-cloud/video/videojs-enqueue-style', 'mux_video_player_style');
				} else if($settings->playerType === 'hlsjs') {
					wp_enqueue_script('mux_video_player_hlsjs', ILAB_PUB_JS_URL . '/mux-hls.js', null, null, true);
				}
			});
		} else {
			add_action((!empty($admin)) ? 'admin_enqueue_scripts' : 'wp_enqueue_scripts', function() {
				wp_enqueue_script('mux_video_player_hlsjs', ILAB_PUB_JS_URL . '/mux-hls.js', null, null, true);
			});
		}
	}
	//endregion

	//region Blocks
	protected function initBlocks() {
		add_action('init', function() {
			register_block_type( ILAB_BLOCKS_DIR . '/mediacloud-video-block' );
//			register_block_type( ILAB_BLOCKS_DIR . '/mediacloud-video-block/build' );
		});

		add_filter('block_categories', function($categories, $post) {
			foreach($categories as $category) {
				if ($category['slug'] === 'mediacloud') {
					return $categories;
				}
			}

			$categories[] = [
				'slug' => 'mediacloud',
				'title' => 'Media Cloud',
				'icon' => null
			];

			return $categories;
		}, 10, 2);


		if (class_exists('Elementor\Plugin')) {
			add_action('elementor/widgets/widgets_registered', function() {
				Plugin::instance()->widgets_manager->register_widget_type(new MuxVideoWidget());
			});

			add_action('elementor/elements/categories_registered', function($elementsManager) {
				/** @var Elements_Manager $elementsManager */
				$elementsManager->add_category('media-cloud', [
					'title' => 'Media Cloud',
					'icon' => 'fa fa-plug'
				]);
			}, 10, 1);

			add_filter('the_content', function($content) {
				return MuxVideoWidget::filterContent($content);
			}, PHP_INT_MAX, 1);

			add_action('wp_enqueue_scripts', function() {
				wp_enqueue_style('mcloud-elementor', trailingslashit(ILAB_PUB_CSS_URL).'mcloud-elementor.css', [], MEDIA_CLOUD_VERSION);
			});
		}
	}
	//endregion

	//region Content Filters
	/**
	 * Filters the File block to include the goddamn attachment ID
	 *
	 * @param $block_content
	 * @param $block
	 *
	 * @return mixed
	 * @throws \Exception
	 */
	function filterBlocks($block_content, $block) {
		if (isset($block['blockName'])) {
			if ($block['blockName'] === 'media-cloud/mux-video-block') {
				return $this->filterVideoBlock($block_content, $block);
			}
		}

		return $block_content;
	}

	protected function filterVideoBlock($block_content, $block) {
		$attachmentId = arrayPath($block, 'attrs/id', null);
		if (empty($attachmentId) || !postIdExists($attachmentId)) {
			return '';
		}

		$asset = null;
		$muxId = arrayPath($block, 'attrs/muxId', null);
		if (!empty($muxId)) {
			$asset = MuxAsset::asset($muxId);
		}

		$classes = "mux-player";
		$extras = "";
		$metadata = [];
		$metadataKey = sanitize_title(gen_uuid(12));

		$meta = wp_get_attachment_metadata($attachmentId);

		if (media_cloud_licensing()->is_plan__premium_only('pro')) {
				if($this->settings->playerType === 'videojs') {
					$classes .= ' video-js';
					if($this->settings->playerFilmstrips) {
						if (!empty($asset)) {
							$furl = $asset->filmstripUrl;
							if(!empty($furl)) {
								$extras = "data-filmstrip='{$furl}'";
								$frames = min(floor($asset->duration) + 1, 15);
								$interval = sprintf('%0.2f', $asset->duration / $frames);
								$extras .= " data-filmstrip-interval='{$interval}'";
							}
						} else {
							// TODO: look up filmstrip url
						}
					}

					if (!empty($asset)) {
						if(!empty($this->settings->envKey)) {
							$extras .= " data-metadata-key='{$metadataKey}'";
							$metadata = $asset->muxMetadata;
						}

						if (!empty($this->settings->playerAnalyticsMode) && ($this->settings->playerAnalyticsMode != 'none')) {
							$extras .= " data-analytics='{$this->settings->playerAnalyticsMode}'";
							$extras .= " data-analytics-asset='{$attachmentId}-{$asset->title}'";
						}
					}

					$playerAllowDownload = $this->settings->playerAllowDownload;
					$playerAllowOriginalDownload = $this->settings->playerAllowOriginalDownload;

					$allowDownload = arrayPath($block, 'attrs/allowDownload', 'inherit');
					$allowDownloadOriginal = arrayPath($block, 'attrs/allowDownloadOriginal', 'inherit');

					if ($allowDownload !== 'inherit') {
						if ($allowDownload === 'yes') {
							$playerAllowDownload = true;
						} else if ($allowDownload === 'no') {
							$playerAllowDownload = false;
						} else {
							$playerAllowDownload = 'logged-in';
						}
					}

					if ($allowDownloadOriginal !== 'inherit') {
						if ($allowDownloadOriginal === 'yes') {
							$playerAllowOriginalDownload = true;
						} else if ($allowDownload === 'no') {
							$playerAllowOriginalDownload = false;
						} else {
							$playerAllowOriginalDownload = 'logged-in';
						}
					}

					$downloadUrl = null;
					if (!empty($playerAllowDownload) || !empty($playerAllowOriginalDownload)) {
						if (!empty($asset)) {
							if (!empty($playerAllowDownload)) {
								if ($playerAllowDownload === 'logged-in') {
									if (is_user_logged_in()) {
										$downloadUrl = $asset->renditionUrl($this->settings->playerMP4Quality);
									}
								} else {
									$downloadUrl = $asset->renditionUrl($this->settings->playerMP4Quality);
								}
							} else {
								if ($playerAllowOriginalDownload === 'logged-in') {
									if (is_user_logged_in()) {
										$downloadUrl = wp_get_attachment_url($attachmentId);
									}
								} else {
									$downloadUrl = wp_get_attachment_url($attachmentId);
								}
							}
						} else {
							$downloadUrl = wp_get_attachment_url($attachmentId);
						}
					}

					if (!empty($downloadUrl)) {
						$extras .= " data-download-url='{$downloadUrl}'";
					}
				} else if ($this->settings->playerType === 'hlsjs') {
					if (!empty($asset) && !empty($this->settings->envKey)) {
						$extras .= " data-metadata-key='{$metadataKey}'";
						$metadata = $asset->muxMetadata;
					}
				}
		}

		if (!empty($this->settings->playerCSSClasses)) {
			$classes .= " {$this->settings->playerCSSClasses}";
		}

		$block_content = str_replace('<video ', "<video class='{$classes}' {$extras} ", $block_content);

		if (empty($asset)) {
			$url = wp_get_attachment_url($attachmentId);
			$mime = arrayPath($meta, 'mime_type', null);
			if ($mime === 'video/quicktime') {
				$fileformat = arrayPath($meta, 'fileformat', null);
				if (!empty($fileformat) && ($fileformat === 'mp4')) {
					$mime = 'video/mp4';
				}
			}
			if (!empty($mime)) {
				$source = "<source src='{$url}' type='{$mime}' />";
			} else {
				$source = "<source src='{$url}' />";
			}
		} else {
			$url = $asset->videoUrl();
			$source = "<source src='{$url}' type='application/x-mpegURL' />";
		}

		if (media_cloud_licensing()->is_plan__premium_only('pro')) {
			if (!empty($asset)) {
				if (!empty($this->settings->playerMP4Fallback) && !empty($asset->hasRendition($this->settings->playerMP4Quality))) {
					$renditionUrl = $asset->renditionUrl($this->settings->playerMP4Quality);
					$source .= "<source src='{$renditionUrl}' type='video/mp4' />";
				}
			}
		}

		$block_content = str_replace('<source/>', $source, $block_content);

		if (!empty($metadata)) {
			$metadataHTML = "<script id='mux-{$metadataKey}' type='application/json'>".json_encode($metadata, JSON_PRETTY_PRINT)."</script>";
			$block_content .= "\n".$metadataHTML;
		}

		return $block_content;
	}
	//endregion
}
