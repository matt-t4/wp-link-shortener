<?php
/*
Plugin Name: link_shortener
Description: A simple WordPress plugin to create short URLs for affiliate links using a text file. Users manually edit urls.txt to map long URLs to 5-digit codes, and the plugin handles redirects for /to/{code} URLs.
Version: 1.0
Author: Matt
License: GPL2
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define plugin constants
define( 'ALS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'ALS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Include the redirect handler and error page
require_once ALS_PLUGIN_DIR . 'includes/redirect-handler.php';
require_once ALS_PLUGIN_DIR . 'includes/error-page.php';

// Enqueue frontend styles for error pages
function als_enqueue_styles() {
    // Only enqueue on frontend pages where needed
    if ( is_404() || ( isset( $_SERVER['REQUEST_URI'] ) && strpos( $_SERVER['REQUEST_URI'], '/to/' ) !== false ) ) {
        wp_enqueue_style(
            'als-frontend-styles',
            ALS_PLUGIN_URL . 'assets/css/frontend-styles.css',
            array(),
            '1.0'
        );
    }
}
add_action( 'wp_enqueue_scripts', 'als_enqueue_styles' );