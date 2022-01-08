<?php
add_action( 'wp_print_styles', 'twp_styles' );

function twp_styles() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
}
