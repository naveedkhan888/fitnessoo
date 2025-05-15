<?php

require_once XPOINT_THEME_PATH . '/inc/classes/class-xpoint-add-custom-fonts.php';

/**
 * Create Instance
 */
function xpoint_add_custom_fonts() {
	return Xpoint_Add_Custom_Fonts::instance();
}
xpoint_add_custom_fonts();

/**
 * Add custom fonts choice
 */
function xpoint_add_custom_choice() {
	return array(
		'fonts' => apply_filters( 'xpoint/kirki_font_choices', array() ),
	);
}


/**
 * Force Load all fonts variations (Kirki)
 */
add_action( 'after_setup_theme', 'xpoint_font_add_all_variants', 100 );
function xpoint_font_add_all_variants() {
	$force_load_all_fonts_variations = get_theme_mod( 'force_load_all_fonts_variations', false );

	if ( class_exists( 'Kirki_Fonts_Google' ) && $force_load_all_fonts_variations ) {
		Kirki_Fonts_Google::$force_load_all_variants = true;
	}
}
