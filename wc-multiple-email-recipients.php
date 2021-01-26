<?php
/*
Plugin Name: WC Multiple Email Recipients
Plugin URI: http://conschneider.de/plugin-woocommerce-multiple-email-recipients/
Description: Allows for multiple recipients for WooCommerce E-Mails. Supports WooCommerce Bookings and WooCommerce Subscriptions.
Author: Con Schneider
Author URI: http://conschneider.de/
Version: 1.4.0
*/

/******************************
* global variables
******************************/

// retrieve our plugin settings from the options table
$wcme_options = get_option('wcme_settings');

/******************************
* includes
******************************/

include('includes/functions.php'); // display functions
include('includes/admin-page.php'); // the plugin options page HTML and save functions

/******************************
* useful settings link
******************************/
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'wcme_plugin_settings_link' );

function wcme_plugin_settings_link( $links ) {
   $links[] = '<a href="'. esc_url( get_admin_url(null, 'options-general.php?page=wcme-options') ) .'">Settings</a>';
   return $links;
}