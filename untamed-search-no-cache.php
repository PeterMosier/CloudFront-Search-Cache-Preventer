<?php
/*
Plugin Name: CloudFront Search Cache Preventer
Description: Sends HTTP headers to force CloudFront and browsers NOT to cache search results. Prevents SEO spam cache poisoning.
Version: 1.0
 * Author: Peter Mosier 2025-Nov 24
*/

// Prevent direct access to this file
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Hook into WordPress headers
function untamed_prevent_search_caching() {
    if ( is_search() ) {
        // Tell CloudFront and Browsers: "Do not save this page."
        header( 'Cache-Control: no-store, no-cache, must-revalidate, max-age=0' );
        header( 'Pragma: no-cache' );
    }
}
add_action( 'send_headers', 'untamed_prevent_search_caching' );