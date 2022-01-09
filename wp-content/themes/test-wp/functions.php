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
	global $twp_version;
}

