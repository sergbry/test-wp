<?php
add_action( 'after_setup_theme', 'twp_setup' );
function twp_setup() {
	register_nav_menu( 'main', 'Main Menu' );
	add_theme_support( 'post-thumbnails' );
}

add_action( 'widgets_init', 'twp_register_sidebars' );
function twp_register_sidebars() {

	register_sidebar(
		array(
			'id'            => 'header_top_widgets',
			'name'          => __( 'Header top widgets' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

	register_sidebar(
		array(
			'id'            => 'homepage_widgets',
			'name'          => __( 'Homepage widgets' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

}

/**
 * Setup BE
 */
