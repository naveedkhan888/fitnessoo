<?php

/**
 * Get the Google Maps API Key
 */
if ( ! function_exists( 'arts_get_gmap_key' ) ) {
	function arts_get_gmap_key() {
		$gmap_key = get_option( 'elementor_google_maps_api_key' );

		if ( is_string( $gmap_key ) && ! empty( $gmap_key ) ) {
			return $gmap_key;
		}

		$gmap_key_legacy = get_option( 'arts_gmap' );

		if ( is_array( $gmap_key_legacy ) && array_key_exists( 'key', $gmap_key_legacy ) && is_string( $gmap_key_legacy['key'] ) && ! empty( $gmap_key_legacy['key'] ) ) {
			return $gmap_key_legacy['key'];
		}

		return '';
	}
}
