<?php
add_action( 'after_setup_theme', 'twp_register_nav_menu' );
function twp_register_nav_menu() {
	register_nav_menu( 'main', 'Main Menu' );
}
