<?php

namespace MediaCloud\Vendor\Aws\MediaTailor;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS MediaTailor** service.
 * @method \MediaCloud\Vendor\Aws\Result configureLogsForPlaybackConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise configureLogsForPlaybackConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createPrefetchSchedule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createPrefetchScheduleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createProgram(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createProgramAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createSourceLocation(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createSourceLocationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createVodSource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createVodSourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteChannelPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteChannelPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deletePlaybackConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deletePlaybackConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deletePrefetchSchedule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deletePrefetchScheduleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteProgram(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteProgramAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteSourceLocation(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteSourceLocationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteVodSource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteVodSourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeProgram(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeProgramAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeSourceLocation(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeSourceLocationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeVodSource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeVodSourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getChannelPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getChannelPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getChannelSchedule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getChannelScheduleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getPlaybackConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getPlaybackConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getPrefetchSchedule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getPrefetchScheduleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAlerts(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAlertsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listChannels(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listChannelsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listPlaybackConfigurations(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listPlaybackConfigurationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listPrefetchSchedules(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listPrefetchSchedulesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listSourceLocations(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listSourceLocationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listVodSources(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listVodSourcesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putChannelPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putChannelPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putPlaybackConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putPlaybackConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateSourceLocation(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateSourceLocationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateVodSource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateVodSourceAsync(array $args = [])
 */
class MediaTailorClient extends AwsClient {}
