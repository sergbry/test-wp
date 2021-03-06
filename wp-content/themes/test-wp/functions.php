<?php

add_action( 'init', 'twp_init' );
function twp_init() {
	global $twp_version;
	$twp_version = '0.1.1';
}

/**
 * Disable the emoji's
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

add_action( 'wp_print_styles', 'twp_styles' );
function twp_styles() {
	global $twp_version;
	wp_enqueue_style( 'main', get_stylesheet_uri(), array(), $twp_version );
}

add_action ( 'wp_print_scripts', 'twp_scripts' );
function twp_scripts() {

	if ( is_admin() )
		return;

	global $twp_version;
	wp_enqueue_script( 'main', get_stylesheet_directory_uri().'/assets/js/main.js', array(), $twp_version );
}

/**
 * include theme files
 */
foreach (glob(get_template_directory() . "/inc/*.php") as $filename) {
	include_once $filename;
}
