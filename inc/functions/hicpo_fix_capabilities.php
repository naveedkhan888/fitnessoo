<?php

// Addresses incorrect capabilities: https://github.com/hijiriworld/intuitive-custom-post-order/issues/66
add_action( 'admin_init', 'xpoint_hicpo_fix_capabilities' );
if ( ! function_exists( 'xpoint_hicpo_fix_capabilities' ) ) {
	function xpoint_hicpo_fix_capabilities() {
		$administrator = get_role( 'administrator' );
		if ( $administrator ) {
			$administrator->add_cap( 'hicpo_load_script_css' );
		}
		$editor = get_role( 'editor' );
		if ( $editor ) {
			$editor->add_cap( 'hicpo_load_script_css' );
		}
	}
}
