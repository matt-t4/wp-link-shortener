<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Handle redirects for /to/{code} URLs and similar prefixes
 */
function als_handle_redirect() {
    // Get the current request URI path
    $request_uri = isset( $_SERVER['REQUEST_URI'] ) ? parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ) : '';
    
    // Check if the URI matches /t*/{code} (e.g., /to/, /t/, /too/)
    if ( preg_match( '#^/t[o]{0,2}/([^/]+)#', $request_uri, $matches ) ) {
        $short_code = $matches[1];
        
        // Validate short code: must be 5 alphanumeric characters
        if ( preg_match( '/^[a-zA-Z0-9]{5}$/', $short_code ) ) {
            // Search for the short code in urls.txt
            $original_url = als_search_short_code( $short_code );
            
            // If a valid URL is found and the prefix is exactly /to/, redirect
            if ( $original_url && filter_var( $original_url, FILTER_VALIDATE_URL ) && strpos( $request_uri, '/to/' ) === 0 ) {
                wp_redirect( $original_url, 301 );
                exit;
            }
        }
        
        // If invalid short code, invalid URL, or incorrect prefix (e.g., /t/, /too/), show error page
        als_display_error_page();
    }
}
add_action( 'template_redirect', 'als_handle_redirect' );

/**
 * Search for a short code in urls.txt and return the original URL
 *
 * @param string $short_code The 5-digit alphanumeric short code
 * @return string|null The original URL or null if not found
 */
function als_search_short_code( $short_code ) {
    // Path to urls.txt
    $urls_file = ALS_PLUGIN_DIR . 'data/urls.txt';
    
    // Check if urls.txt exists
    if ( file_exists( $urls_file ) ) {
        // Read urls.txt
        $lines = file( $urls_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES );
        
        // Search for the short code
        foreach ( $lines as $line ) {
            // Ensure the line has a valid format
            if ( strpos( $line, ';' ) !== false ) {
                list( $original_url, $code ) = explode( ';', $line, 2 );
                $original_url = trim( $original_url );
                $code = trim( $code );
                
                // Return the original URL if the code matches
                if ( $code === $short_code ) {
                    return $original_url;
                }
            }
        }
    }
    
    // Return null if no match is found
    return null;
}