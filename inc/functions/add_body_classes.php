<?php

/**
 * Add additional classes for <body>
 */
add_filter( 'body_class', 'xpoint_add_body_classes' );
function xpoint_add_body_classes( $classes ) {
	$page_ajax_to_enabled   = xpoint_get_document_option( 'page_ajax_to_enabled' );
	$page_ajax_from_enabled = xpoint_get_document_option( 'page_ajax_from_enabled' );
	$body_classes           = array(
		xpoint_get_document_option( 'page_main_color_theme' ),
		'cursor-progress',
	);

	// Disable AJAX transitions TO this page
	if ( ! $page_ajax_to_enabled ) {
		$body_classes[] = 'page-no-ajax';
	}

	// Disable AJAX transitions FROM this page
	if ( ! $page_ajax_from_enabled ) {
		$body_classes[] = 'no-ajax';
	}

	$classes = array_merge( $classes, $body_classes );

	return $classes;
}
