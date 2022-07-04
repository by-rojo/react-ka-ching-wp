<?php

/**
 * Plugin Name: WP Disable Sitemap
 * Description: Disable default sidebar from your WordPress site
 * Plugin URI: https://master-addons.com
 * Author: Jewel Theme
 * Version: 1.1.5
 * Author URI: https://github.com/litonarefin/wp-disable-sitemap
 * Text Domain: wp-disable
 */
// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

if ( !function_exists( 'jltwds_fs' ) ) {
    // Create a helper function for easy SDK access.
    function jltwds_fs()
    {
        global  $jltwds_fs ;
        
        if ( !isset( $jltwds_fs ) ) {
            // Include Freemius SDK.
            require_once dirname( __FILE__ ) . '/lib/start.php';
            $jltwds_fs = fs_dynamic_init( array(
                'id'             => '9810',
                'slug'           => 'wp-disable-sitemap',
                'type'           => 'plugin',
                'public_key'     => 'pk_41376e581386d62367da9cb2df222',
                'is_premium'     => false,
                'has_addons'     => false,
                'has_paid_plans' => false,
                'menu'           => array(
                'account' => false,
            ),
                'is_live'        => true,
            ) );
        }
        
        return $jltwds_fs;
    }
    
    // Init Freemius.
    jltwds_fs();
    // Signal that SDK was initiated.
    do_action( 'jltwds_fs_loaded' );
}

if ( !class_exists( '\\JLTWDS\\JLT_WDS' ) ) {
    // Instantiate WP Adminify Class
    require_once dirname( __FILE__ ) . '/class-wp-disable-sitemap.php';
}