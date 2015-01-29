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
    
    if ( is_page( 'home' ) ) {
        wp_register_style( 'home_css', get_template_directory_uri().'/css/pages/home.css' );
        wp_enqueue_style( 'home_css' );
    }

    if ( is_page( 'about' ) ) {
        wp_register_style( 'about_css', get_template_directory_uri().'/css/pages/about.css' );
        wp_enqueue_style( 'about_css' );
    }

    if ( is_page( 'contact-us' ) ) {
        wp_register_style( 'contact_css', get_template_directory_uri().'/css/pages/contact.css' );
        wp_enqueue_style( 'contact_css' );
    }

    if ( is_page( 'testimonials' ) ) {
        wp_register_style( 'testimonials_css', get_template_directory_uri().'/css/pages/testimonials.css' );
        wp_enqueue_style( 'testimonials_css' );
    }
    
    if ( is_page( 'vending-solutions' ) ) {
        wp_register_style( 'vendingsolutions_css', get_template_directory_uri().'/css/pages/solutions.css' );
        wp_enqueue_style( 'vendingsolutions_css' );
    }
    
    if ( is_page( 'who-we-serve' ) ) {
        wp_register_style( 'whoweserve_css', get_template_directory_uri().'/css/pages/serve.css' );
        wp_enqueue_style( 'whoweserve_css' );
    }

}
add_action( 'wp_enqueue_scripts', 'page_specific_css' );