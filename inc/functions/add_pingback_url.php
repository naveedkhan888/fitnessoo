<?php

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
add_action( 'wp_head', 'xpoint_add_pingback_url' );
function xpoint_add_pingback_url() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
