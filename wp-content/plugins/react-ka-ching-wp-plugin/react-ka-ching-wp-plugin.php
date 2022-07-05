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
            register_deactivation_hook(__FILE__, [$this, 'uninstall']);
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

        function uninstall()
        {
            $this->dropDatabase();
        }

        function dropDatabase()
        {
            $sql = "DROP TABLE " . $this->tableName();
            $this->wpdb()->query($sql);
        }

        function setupDatabase()
        {
            $charset_collate = $this->wpdb()->get_charset_collate();
            $tableName = $this->tableName();
            $sql = "CREATE TABLE $tableName (
                        key_name text NOT NULL,
                        key_value text NOT NULL,
                        CONSTRAINT rkc_key PRIMARY KEY (key_name(255))
                        ) $charset_collate;";

            $this->wpdb()->query($sql);
        }

        function setConfig()
        {
            $this->wpdb()->insert(
                $this->tableName(),
                array(
                    'key_name' => "config",
                    'key_value' => "{}",
                )
            );
        }

        function encode_decode($stringToHandle = "", $encrypt = true)
        {
            // Set default output value
            $output = null;
            // Set secret keys
            $secret_key = wp_salt();
            $key = hash('sha256', $secret_key);
            $iv = substr(hash('sha256', $secret_key), 0, 16);
            // Check whether encryption or decryption
            if ($encrypt) {
                // We are encrypting
                $output = base64_encode(openssl_encrypt($stringToHandle, "AES-256-CBC", $key, 0, $iv));
            } else {
                // We are decrypting
                $output = openssl_decrypt(base64_decode($stringToHandle), "AES-256-CBC", $key, 0, $iv);
            }
            // Return the final value
            return $output;
        }
        function updateConfig()
        {
            if (isset($_POST['react_ka_ching_settings_form_nonce']) && wp_verify_nonce($_POST['react_ka_ching_settings_form_nonce'], 'react_ka_ching_settings_form_nonce')) {
                $wpUser = sanitize_user($_POST["wpUser"]);
                $wpPass = sanitize_text_field($_POST["wpPass"]);
                $wpStatus = sanitize_text_field($_POST["wpStatus"]);
                $amazonAccessKey = sanitize_key($_POST["amazonAccessKey"]);
                $amazonSecretKey = sanitize_key($_POST["amazonSecretKey"]);
                $amazonPartnerTag = sanitize_text_field($_POST["amazonPartnerTag"]);
                $amazonHost = sanitize_text_field($_POST["amazonHost"]);
                $amazonRegion = sanitize_text_field($_POST["amazonRegion"]);

                $json = json_encode([
                    "wpUser" => $wpUser,
                    "wpPass" => $this->encode_decode($wpPass),
                    "wpStatus" => $wpStatus,
                    "amazonAccessKey" => $this->encode_decode($amazonAccessKey),
                    "amazonSecretKey" => $this->encode_decode($amazonSecretKey),
                    "amazonPartnerTag" => $amazonPartnerTag,
                    "amazonHost" => $amazonHost,
                    "amazonRegion" => $amazonRegion
                ]);

                $this->wpdb()->update(
                    $this->tableName(),
                    [
                        "key_value" => $json
                    ],
                    [
                        "key_name" => "config"
                    ]
                );

                wp_redirect(admin_url('admin.php') . "?page=" . $this->plugin_name());
                exit;
            } else {
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
            $row = $this->wpdb()->get_row("SELECT * FROM " . $this->tableName() . " WHERE key_name='config'");
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
