<?php

require_once XPOINT_THEME_PATH . '/inc/classes/class-xpoint-walker-nav-menu-overlay.php';

/**
 * Register Theme Menus
 *
 * @return void
 */
add_action( 'after_setup_theme', 'xpoint_init_navigation' );
function xpoint_init_navigation() {
	if ( function_exists( 'register_nav_menus' ) ) {
		register_nav_menus(
			array(
				'main_menu' => esc_html__( 'Main Menu', 'themename' ),
			)
		);
	}
}
