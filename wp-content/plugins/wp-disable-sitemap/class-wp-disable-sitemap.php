<?php

namespace JLTWDS;

// No, Direct access Sir !!!
if (!defined('ABSPATH')) exit;

if (!class_exists('JLT_WDS')) {

    class JLT_WDS
    {
        private static $instance = null;
        public function __construct()
        {
            add_filter('wp_sitemaps_enabled', '__return_false');
            add_action('init', [$this, 'jltwds_init'], 5);
        }

        public function jltwds_init()
        {
            remove_action('init', 'wp_sitemaps_get_server');
        }

        public static function get_instance()
        {
            if (!isset(self::$instance) && !(self::$instance instanceof JLT_WDS)) {
                self::$instance = new JLT_WDS();
            }

            return self::$instance;
        }
    }

    JLT_WDS::get_instance();
}
