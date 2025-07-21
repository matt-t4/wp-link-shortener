<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Display a simple error page for invalid short codes
 */
function als_display_error_page() {
    // Set 404 status
    status_header( 404 );
    nocache_headers();
    
    // Output error HTML
    ?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php _e( 'aaaaaaaaaaaaaaaaaaa Invalid Short URL', 'link-shortener' ); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class( 'als-error-page' ); ?>>
        <div class="als-error-container">
            <h1><?php _e( 'Invalid Short URL', 'link-shortener' ); ?></h1>
            <p><?php _e( 'The short URL you entered does not exist. Please check the URL or return to the homepage.', 'link-shortener' ); ?></p>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="als-error-button"><?php _e( 'Go to Homepage', 'link-shortener' ); ?></a>
        </div>
        <?php wp_footer(); ?>
    </body>
    </html>
    <?php
    exit;
}