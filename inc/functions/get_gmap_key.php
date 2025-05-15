<?php

/**
 * Get the Google Maps API Key
 */
if ( ! function_exists( 'xpoint_get_gmap_key' ) ) {
	function xpoint_get_gmap_key() {
		$gmap_key = get_option( 'elementor_google_maps_api_key' );

		if ( is_string( $gmap_key ) && ! empty( $gmap_key ) ) {
			return $gmap_key;
		}

		$gmap_key_legacy = get_option( 'xpoint_gmap' );

		if ( is_array( $gmap_key_legacy ) && array_key_exists( 'key', $gmap_key_legacy ) && is_string( $gmap_key_legacy['key'] ) && ! empty( $gmap_key_legacy['key'] ) ) {
			return $gmap_key_legacy['key'];
		}

		return '';
	}
}
