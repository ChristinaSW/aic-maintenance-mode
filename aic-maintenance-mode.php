<?php

/*
 * Plugin Name: AIC Maintenance Mode
 * Plugin URI: https://anioncreative.com
 * Description: Displays a maintenance mode page for anyone who's not logged in.
 * Version: 1.2.3
 * Author: An Ion Creative
 * Author URI: https://anioncreative.com
 *
 * @package aic-maintenance-mode
*/

// Add updater so we can update plugin from github

    if( ! class_exists( 'Smashing_Updater' ) ){
        include_once( plugin_dir_path( __FILE__ ) . 'includes/updater.php' );
    }

    $updater = new Smashing_Updater( __FILE__ );
    $updater->set_username( 'ChristinaSW' );
    $updater->set_repository( 'aic-maintenance-mode' );
    $updater->initialize();

// Check if ACF plugin is already installed and use it instead

    if ( in_array( 'advanced-custom-fields-pro/acf.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
        // do stuff only if ACF is installed and active
        // Define path and URL to the ACF plugin.
        define( 'MY_ACF_PATH', plugin_dir_path(__DIR__) . 'advanced-custom-fields-pro/' );
        define( 'MY_ACF_URL', plugin_dir_path(__DIR__) . 'advanced-custom-fields-pro/' );
    }else{
    // Define path and URL to the ACF plugin.
    define( 'MY_ACF_PATH', plugin_dir_path(__FILE__) . '/lib/acf/' );
    define( 'MY_ACF_URL', plugin_dir_path(__FILE__) . '/lib/acf/' );

    }

// Include the ACF plugin.
    include_once( MY_ACF_PATH . 'acf.php' );

// Add our custom fields

    include_once( plugin_dir_path(__FILE__) . '/includes/maintenance-fields.php' );

// Customize the url setting to fix incorrect asset URLs.
    // add_filter('acf/settings/url', 'my_acf_settings_url');
    function my_acf_settings_url( $url ) {
        return MY_ACF_URL;
    }

// (Optional) Hide the ACF admin menu item.
    add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
    function my_acf_settings_show_admin( $show_admin ) {
        return true;
    }
    
// Create the option page in the admin

	if( function_exists('acf_add_options_page') ) {
			
		acf_add_options_page( array(
				'page_title' 	=> 'AIC Maintence Mode',
				'menu_title'	=> 'Maintenance Mode',
				'menu_slug' 	=> 'maintenance-mode',
				'position' 		=> '6',
				'update_button' => __('Save Settings', 'acf'),
				'updated_message' => __("Settings Saved", 'acf'),
			)
		);
		
	}

// Add admin styling

    add_action( 'admin_enqueue_scripts', 'aic_emm_admin_styles' );
    function aic_emm_admin_styles(){
        wp_enqueue_style( 'admin-styles', plugin_dir_url(__FILE__) . '/assets/aic-mm-admin-styles.css');
    }
?>
