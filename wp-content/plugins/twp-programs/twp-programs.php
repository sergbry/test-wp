<?php
/**
 * Plugin Name:    TWP Programs
 * Description:    Plugin for Test WP theme
 * Version:        1.0.0
 * Author:         SergBry
 * Author URI:     https://github.com/sergbry
 * Text Domain:    twpp
 * Domain Path:    /languages
 */

/**
 * Register the "programs" custom post type
 */
function twpp_setup_post_type() {
	$labels = array(
		'name'                  => _x( 'Programs', 'Post type general name', 'twpp' ),
		'singular_name'         => _x( 'Program', 'Post type singular name', 'twpp' ),
		'menu_name'             => _x( 'Programs', 'Admin Menu text', 'twpp' ),
		'name_admin_bar'        => _x( 'Program', 'Add New on Toolbar', 'twpp' ),
		'add_new'               => __( 'Add New', 'twpp' ),
		'add_new_item'          => __( 'Add New Program', 'twpp' ),
		'new_item'              => __( 'New Program', 'twpp' ),
		'edit_item'             => __( 'Edit Program', 'twpp' ),
		'view_item'             => __( 'View Program', 'twpp' ),
		'all_items'             => __( 'All Programs', 'twpp' ),
		'search_items'          => __( 'Search Programs', 'twpp' ),
		'parent_item_colon'     => __( 'Parent Programs:', 'twpp' ),
		'not_found'             => __( 'No programs found.', 'twpp' ),
		'not_found_in_trash'    => __( 'No programs found in Trash.', 'twpp' ),
		'featured_image'        => _x( 'Program Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'twpp' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'twpp' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'twpp' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'twpp' ),
		'archives'              => _x( 'Program archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'twpp' ),
		'insert_into_item'      => _x( 'Insert into Program', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'twpp' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this program', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'twpp' ),
		'filter_items_list'     => _x( 'Filter program list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'twpp' ),
		'items_list_navigation' => _x( 'Programs list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'twpp' ),
		'items_list'            => _x( 'Programs list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'twpp' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'programs' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'menu_icon'          => 'dashicons-games',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'show_in_rest'       => true
	);

	register_post_type( 'programs', $args );
}
add_action( 'init', 'twpp_setup_post_type' );


/**
 * Activate the plugin.
 */
function twpp_activate() {
	// Trigger our function that registers the custom post type plugin.
	twpp_setup_post_type();
	// Clear the permalinks after the post type has been registered.
	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'twpp_activate' );

/**
 * Deactivation hook.
 */
function twpp_deactivate() {
	// Unregister the post type, so the rules are no longer in memory.
	unregister_post_type( 'programs' );
	// Clear the permalinks to remove our post type's rules from the database.
	flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'twpp_deactivate' );
