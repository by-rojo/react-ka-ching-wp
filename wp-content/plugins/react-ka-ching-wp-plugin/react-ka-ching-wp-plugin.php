<?php

/**
 * Plugin Name: React Ka-Ching WP Plugin
 * Plugin URI: https://byrojo.com/react-ka-ching-wp-plugin
 * Description: This plugin manages the react-ka-ching-app wp interface.
 * Version: 0.0.3
 * Author: By Rojo
 * Author URI: https://byrojo.com
 */

if (!class_exists('reactkachingwpplugin')) {

    class ReactKaChingWPPlugin
    {
        public function __construct()
        {
            $this->init();
        }

        function init()
        {
            add_action('the_content', [$this, 'my_thank_you_text']);
            add_action('admin_menu', [$this, 'add_menu']);
        }

        function my_thank_you_text($content)
        {
            return $content .= '<p>Thank you for reading!</p>';
        }

        function render_admin_panel()
        {
            include(sprintf("%s/views/admin.php", dirname(__FILE__)));
        }

        function add_menu()
        {
            if (current_user_can('editor') || current_user_can('administrator')) {
                add_menu_page("React Ka-Ching App", "React Ka-Ching", 'edit_posts', 'react-ka-ching-wp-plugin', [$this, 'render_admin_panel'], 'https://storage.googleapis.com/lumotive-web-storage/favicon-16x16.png', '30');
            }
        }
    }

    return new ReactKaChingWPPlugin();
}
