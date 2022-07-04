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
            register_activation_hook(__FILE__, [$this, 'install']);
            register_activation_hook(__FILE__, [$this, 'setConfig']);
            add_action('the_content', [$this, 'my_thank_you_text']);
            add_action('admin_menu', [$this, 'add_menu']);
            add_action('admin_post_react_ka_ching_form_response', [$this, 'updateConfig']);
        }

        function wpdb()
        {
            global $wpdb;
            return $wpdb;
        }
        function tableName()
        {
            return $this->wpdb()->prefix . "react_ka_ching";
        }

        function install()
        {
            $this->setupDatabase();
        }

        function setupDatabase()
        {
            $charset_collate = $this->wpdb()->get_charset_collate();

            $sql = "CREATE TABLE $this->tableName() (
                        key tinytext NOT NULL UNIQUE,
                        value text NOT NULL
                        PRIMARY KEY (key)
                        ) $charset_collate;";

            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            dbDelta($sql);
        }

        function setConfig()
        {
            $this->wpdb()->insert(
                $this->tableName(),
                array(
                    'key' => "config",
                    'value' => "{}",
                )
            );
        }

        function updateConfig()
        {
            if (isset($_POST['react_ka_ching_settings_form_nonce']) && wp_verify_nonce($_POST['react_ka_ching_settings_form_nonce'], 'react_ka_ching_settings_form_nonce')) {

                // sanitize the input
                // $nds_user_meta_key = sanitize_key($_POST['nds']['user_meta_key']);
                // $nds_user_meta_value = sanitize_text_field($_POST['nds']['user_meta_value']);
                // $nds_user =  get_user_by('login',  $_POST['nds']['user_select']);
                // $nds_user_id = absint($nds_user->ID);

                // // do the processing

                // // add the admin notice
                // $admin_notice = "success";

                // redirect the user to the appropriate page
                wp_redirect(admin_url('admin.php') . "?page=" . $this->plugin_name());
                exit;
            }
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
                add_menu_page("React Ka-Ching App", "React Ka-Ching", 'edit_posts', $this->plugin_name(), [$this, 'render_admin_panel'], 'https://storage.googleapis.com/lumotive-web-storage/favicon-16x16.png', '30');
            }
        }

        function plugin_name()
        {
            return "react-ka-ching-wp-plugin";
        }
    }

    return new ReactKaChingWPPlugin();
}
