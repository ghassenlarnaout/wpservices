<?php
/*
* Plugin Name: Service Post 
* Description: This plugin adds a Service Post Type to your WordPress website.
* Version: 1.0.0
* Author: ghassen larnaout
* Author URI: ghassenlarnaout.com/

/**
 * Registers a custom post type 'my_services'.
 *
 * @since 1.0.0
 *
 * @return void
 */
function services() : void {
	$labels = [
		'name' => _x( 'Services', 'Post Type General Name', 'services' ),
		'singular_name' => _x( 'Service', 'Post Type Singular Name', 'services' ),
		'menu_name' => __( 'Services', 'services' ),
		'name_admin_bar' => __( 'Services', 'services' ),
		'archives' => __( 'Services Archives', 'services' ),
		'attributes' => __( 'Services Attributes', 'services' ),
		'parent_item_colon' => __( 'Parent Service:', 'services' ),
		'all_items' => __( 'All Services', 'services' ),
		'add_new_item' => __( 'Add New Service', 'services' ),
		'add_new' => __( 'Add New', 'services' ),
		'new_item' => __( 'New Service', 'services' ),
		'edit_item' => __( 'Edit Service', 'services' ),
		'update_item' => __( 'Update Service', 'services' ),
		'view_item' => __( 'View Service', 'services' ),
		'view_items' => __( 'View Services', 'services' ),
		'search_items' => __( 'Search Services', 'services' ),
		'not_found' => __( 'Service Not Found', 'services' ),
		'not_found_in_trash' => __( 'Service Not Found in Trash', 'services' ),
		'featured_image' => __( 'Featured Image', 'services' ),
		'set_featured_image' => __( 'Set Featured Image', 'services' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'services' ),
		'use_featured_image' => __( 'Use as Featured Image', 'services' ),
		'insert_into_item' => __( 'Insert into Service', 'services' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'services' ),
		'items_list' => __( 'Services List', 'services' ),
		'items_list_navigation' => __( 'Services List Navigation', 'services' ),
		'filter_items_list' => __( 'Filter Services List', 'services' ),
	];
	$labels = apply_filters( 'my_services-labels', $labels );

	$args = [
		'label' => __( 'Service', 'services' ),
		'description' => __( 'Services listing plugin', 'services' ),
		'labels' => $labels,
		'supports' => [
			'title',
			'editor',
			'thumbnail',
		],
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-admin-post',
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'exclude_from_search' => false,
		'has_archive' => false,
		'can_export' => false,
		'capability_type' => 'page',
		'show_in_rest' => true,
	];
	$args = apply_filters( 'my_services-args', $args );

	register_post_type( 'my_services', $args );
}
add_action( 'init', 'services', 0 );