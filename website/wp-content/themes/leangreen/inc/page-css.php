<?php
/**
 * Page CSS for Lean Green
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/**
 * JSG
 *
 * Creates a list of CSS files to only display on the pages needed.
 */
function page_specific_css() {
    
    /* Homepage CSS */
    if ( is_page( 'home' ) ) {
        wp_register_style( 'home_css', get_template_directory_uri().'/css/pages/home.css' );
        wp_enqueue_style( 'home_css' );
    }
    
    /* Homepage CSS */
    if ( is_page( 'about' ) ) {
        wp_register_style( 'about_css', get_template_directory_uri().'/css/pages/about.css' );
        wp_enqueue_style( 'about_css' );
    }
    
    /* Homepage CSS */
    if ( is_page( 'contact-us' ) ) {
        wp_register_style( 'contact_css', get_template_directory_uri().'/css/pages/contact-us.css' );
        wp_enqueue_style( 'contact_css' );
    }

}
add_action( 'wp_enqueue_scripts', 'page_specific_css' );