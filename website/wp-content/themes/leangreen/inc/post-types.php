<?php
/**
 * Custom Post Types for Lean Green
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/*
 * Creates Custom Post Type Testimonials
 */
function my_custom_post_testimonialspost() {
	$labels = array(
		'name'               => _x( 'Testimonials', 'post type general name' ),
		'singular_name'      => _x( 'Testimonial', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'Testimonial' ),
		'add_new_item'       => __( 'Add New Testimonial' ),
		'edit_item'          => __( 'Edit Testimonial' ),
		'new_item'           => __( 'New Testimonial' ),
		'all_items'          => __( 'All Testimonials' ),
		'view_item'          => __( 'View Testimonial' ),
		'search_items'       => __( 'Search Testimonials' ),
		'not_found'          => __( 'No Testimonials Found' ),
		'not_found_in_trash' => __( 'No Testimonials Found In The Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Testimonials'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Holds our Testimonials and Testimonial specific data',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
	);
	register_post_type( 'testimonialspost', $args );	
}
add_action( 'init', 'my_custom_post_testimonialspost' );


/*
 * Creates Category Taxonomy for Testimonials
 */
function my_taxonomies_testimonialspost() {
	$labels = array(
		'name'              => _x( 'Testimonials Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Testimonials Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Testimonials Categories' ),
		'all_items'         => __( 'All Testimonials Categories' ),
		'parent_item'       => __( 'Parent Testimonials Category' ),
		'parent_item_colon' => __( 'Parent Testimonials Category:' ),
		'edit_item'         => __( 'Edit Testimonials Category' ), 
		'update_item'       => __( 'Update Testimonials Category' ),
		'add_new_item'      => __( 'Add New Testimonials Category' ),
		'new_item_name'     => __( 'New Testimonials Category' ),
		'menu_name'         => __( 'Testimonials Categories' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'testimonialspost_category', 'testimonialspost', $args );
}
add_action( 'init', 'my_taxonomies_testimonialspost', 0 );



/*
 * Creates Custom Post Type Clients
 */
function my_custom_post_clients() {
	$labels = array(
		'name'               => _x( 'Clients', 'post type general name' ),
		'singular_name'      => _x( 'Client', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'Client' ),
		'add_new_item'       => __( 'Add New Client' ),
		'edit_item'          => __( 'Edit Client' ),
		'new_item'           => __( 'New Client' ),
		'all_items'          => __( 'All Clients' ),
		'view_item'          => __( 'View Client' ),
		'search_items'       => __( 'Search Clients' ),
		'not_found'          => __( 'No Clients Found' ),
		'not_found_in_trash' => __( 'No Clients Found In The Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Clients'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Holds our Clients and Client specific data',
		'public'        => true,
		'menu_position' => 5,
		'hierarchical' => true,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'page-attributes' ),
		'has_archive'   => true,
	);
	register_post_type( 'clients', $args );	
}
add_action( 'init', 'my_custom_post_clients' );


/*
 * Creates Category Taxonomy for Clients
 */
function my_taxonomies_clients() {
	$labels = array(
		'name'              => _x( 'Clients Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Clients Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Clients Categories' ),
		'all_items'         => __( 'All Clients Categories' ),
		'parent_item'       => __( 'Parent Clients Category' ),
		'parent_item_colon' => __( 'Parent Clients Category:' ),
		'edit_item'         => __( 'Edit Clients Category' ), 
		'update_item'       => __( 'Update Clients Category' ),
		'add_new_item'      => __( 'Add New Clients Category' ),
		'new_item_name'     => __( 'New Clients Category' ),
		'menu_name'         => __( 'Clients Categories' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'clients_category', 'clients', $args );
}
add_action( 'init', 'my_taxonomies_clients', 0 );



/*
 * Creates Custom Post Type Vending Solutions
 */
function my_custom_post_vendingsolutions() {
	$labels = array(
		'name'               => _x( 'Vending Solutions', 'post type general name' ),
		'singular_name'      => _x( 'Vending Solution', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'Vending Solution' ),
		'add_new_item'       => __( 'Add New Vending Solution' ),
		'edit_item'          => __( 'Edit Vending Solution' ),
		'new_item'           => __( 'New Vending Solution' ),
		'all_items'          => __( 'All Vending Solutions' ),
		'view_item'          => __( 'View Vending Solution' ),
		'search_items'       => __( 'Search Vending Solutions' ),
		'not_found'          => __( 'No Vending Solutions Found' ),
		'not_found_in_trash' => __( 'No Vending Solutions Found In The Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Vending Solutions'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Holds our Vending Solutions and Vending Solution specific data',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
	);
	register_post_type( 'vendingsolutions', $args );	
}
add_action( 'init', 'my_custom_post_vendingsolutions' );


/*
 * Creates Category Taxonomy for Vending Solutions
 */
function my_taxonomies_vendingsolutions() {
	$labels = array(
		'name'              => _x( 'Vending Solutions Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Vending Solutions Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Vending Solutions Categories' ),
		'all_items'         => __( 'All Vending Solutions Categories' ),
		'parent_item'       => __( 'Parent Vending Solutions Category' ),
		'parent_item_colon' => __( 'Parent Vending Solutions Category:' ),
		'edit_item'         => __( 'Edit Vending Solutions Category' ), 
		'update_item'       => __( 'Update Vending Solutions Category' ),
		'add_new_item'      => __( 'Add New Vending Solutions Category' ),
		'new_item_name'     => __( 'New Vending Solutions Category' ),
		'menu_name'         => __( 'Vending Solutions Categories' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'vendingsolutions_category', 'vendingsolutions', $args );
}
add_action( 'init', 'my_taxonomies_vendingsolutions', 0 );



/*
 * Creates Custom Post Type Business Types
 */
function my_custom_post_serve() {
	$labels = array(
		'name'               => _x( 'Business Types', 'post type general name' ),
		'singular_name'      => _x( 'Business Type', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'Business Type' ),
		'add_new_item'       => __( 'Add New Business Type' ),
		'edit_item'          => __( 'Edit Business Type' ),
		'new_item'           => __( 'New Business Type' ),
		'all_items'          => __( 'All Business Types' ),
		'view_item'          => __( 'View Business Type' ),
		'search_items'       => __( 'Search Business Types' ),
		'not_found'          => __( 'No Business Types Found' ),
		'not_found_in_trash' => __( 'No Business Types Found In The Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Business Types'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Holds our Business Types and Business Type specific data',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
	);
	register_post_type( 'serve', $args );	
}
add_action( 'init', 'my_custom_post_serve' );


/*
 * Creates Category Taxonomy for Business Types
 */
function my_taxonomies_serve() {
	$labels = array(
		'name'              => _x( 'Business Types Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Business Types Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Business Types Categories' ),
		'all_items'         => __( 'All Business Types Categories' ),
		'parent_item'       => __( 'Parent Business Types Category' ),
		'parent_item_colon' => __( 'Parent Business Types Category:' ),
		'edit_item'         => __( 'Edit Business Types Category' ), 
		'update_item'       => __( 'Update Business Types Category' ),
		'add_new_item'      => __( 'Add New Business Types Category' ),
		'new_item_name'     => __( 'New Business Types Category' ),
		'menu_name'         => __( 'Business Types Categories' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'serve_category', 'serve', $args );
}
add_action( 'init', 'my_taxonomies_serve', 0 );