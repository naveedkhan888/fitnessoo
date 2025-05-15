<?php

// Includes the files needed for the theme updater
if ( ! class_exists( 'Xpoint_Theme_Updater' ) ) {
	require_once XPOINT_THEME_PATH . '/inc/classes/class-theme-updater.php';
}

// Loads the updater classes
new Xpoint_Theme_Updater(
	// Config settings
	array(
		'remote_api_url' => 'https://xpertpoin8.com/wp-json/',
		'theme_slug'     => XPOINT_THEME_SLUG, // Theme slug
		'version'        => XPOINT_THEME_VERSION, // The current version of this theme
	),
	// Strings
	array(
		'theme-license'                                 => esc_html__( 'Theme License', 'themename' ),
		'enter-key'                                     => esc_html__( 'Please enter your product purchase code.', 'themename' ),
		'license-key'                                   => esc_html__( 'Purchase code', 'themename' ),
		'license-action'                                => esc_html__( 'License Action', 'themename' ),
		'deactivate-license'                            => esc_html__( 'Deactivate License', 'themename' ),
		'activate-license'                              => esc_html__( 'Activate License', 'themename' ),
		'refresh-license'                               => esc_html__( 'Refresh', 'themename' ),
		'status-unknown'                                => esc_html__( 'License status is unknown.', 'themename' ),
		'renew'                                         => esc_html__( 'Renew?', 'themename' ),
		'unlimited'                                     => esc_html__( 'unlimited', 'themename' ),
		'license-key-is-active'                         => esc_html__( 'License key is active', 'themename' ),
		'license-key-activated'                         => esc_html__( 'Activated', 'themename' ),
		/* translators: the license expiration date */
		'expires%s'                                     => esc_html__( 'Expires %s.', 'themename' ),
		'expires-never'                                 => esc_html__( 'Never', 'themename' ),
		/* translators: 1. the number of sites activated 2. the total number of activations allowed. */
		'%1$s/%2$-sites'                                => esc_html__( 'You have %1$s / %2$s sites activated.', 'themename' ),
		'activation-limit'                              => esc_html__( 'Your license key has reached its activation limit.', 'themename' ),
		/* translators: the license expiration date */
		'license-key-expired-%s'                        => esc_html__( 'License key expired %s.', 'themename' ),
		'license-key-expired'                           => esc_html__( 'License key has expired.', 'themename' ),
		/* translators: the license expiration date */
		'license-expired-on'                            => esc_html__( 'Your license key expired on %s.', 'themename' ),
		'license-keys-do-not-match'                     => esc_html__( 'License keys do not match.', 'themename' ),
		'license-is-inactive'                           => esc_html__( 'Not activated', 'themename' ),
		'license-key-is-disabled'                       => esc_html__( 'License key is disabled.', 'themename' ),
		'license-key-invalid'                           => esc_html__( 'Invalid license.', 'themename' ),
		'site-is-inactive'                              => esc_html__( 'Site is inactive.', 'themename' ),
		/* translators: the theme name */
		'item-mismatch'                                 => esc_html__( 'This appears to be an invalid license key for %s.', 'themename' ),
		'license-status-unknown'                        => esc_html__( 'License status is unknown.', 'themename' ),
		'update-notice'                                 => esc_html__( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'themename' ),
		'error-generic'                                 => esc_html__( 'An error occurred while validating this license key. Please try again later.', 'themename' ),
		'license-status'                                => esc_html__( 'Status', 'themename' ),
		'license-expiration-date'                       => esc_html__( 'Expiration Date', 'themename' ),
		'license-data-refreshed'                        => esc_html__( 'License data refreshed successfully.', 'themename' ),
		'license-supported-until'                       => esc_html__( 'Technical Support', 'themename' ),
		'license-updates-provided-until'                => esc_html__( 'Automatic Updates', 'themename' ),
		'license-lifetime-updates'                      => esc_html__( 'Available Lifetime', 'themename' ),
		'license-never-expires'                         => esc_html__( 'Lifetime', 'themename' ),
		'license-purchase-date'                         => esc_html__( 'Purchase Date', 'themename' ),
		'license-activations'                           => esc_html__( 'Activations', 'themename' ),
		'license-help-purchase-code'                    => esc_html__( 'Where is my purchase code?', 'themename' ),
		'license-help-purchase-code-url'                => esc_url( 'https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-' ),
		'license-help-no-purchase-code-heading'         => esc_html__( 'Don\'t have a purchase code?', 'themename' ),
		'license-help-no-purchase-code-text'            => esc_html__( 'Get one today from %1$s!', 'themename' ),
		'license-help-no-purchase-code-link'            => esc_html__( 'Envato Market', 'themename' ),
		'license-help-no-purchase-code-benefits-before' => esc_html__( 'Every license holder gets', 'themename' ),
		'license-help-no-purchase-code-benefit-1'       => esc_html__( '6 month of personalized technical support', 'themename' ),
		'license-help-no-purchase-code-benefit-2'       => esc_html__( 'Availability of the theme author to answer questions', 'themename' ),
		'license-help-no-purchase-code-benefit-3'       => esc_html__( 'Help with reported bugs and issues', 'themename' ),
		'license-help-no-purchase-code-benefit-4'       => esc_html__( 'Lifetime automatic theme updates', 'themename' ),
		'license-help-no-purchase-code-benefit-5'       => esc_html__( 'Lifetime automatic core plugin updates', 'themename' ),
		'license-local-info'                            => esc_html__( 'Local or staging installations don\'t count towards the license activation limit.', 'themename' ),
		'support-forum-url'                             => esc_url( 'https://xpertpoin8.ticksy.com/' ),
		'support-forum-link'                            => esc_html__( 'View Support Forum', 'themename' ),
		'support-supported-until'                       => esc_html__( 'Supported until', 'themename' ),
		'support-expired'                               => esc_html__( 'Expired on', 'themename' ),
		'item-page-url'                                 => esc_url( 'https://themeforest.net/item/themename-ajax-creative-portfolio-wordpress-theme/23887784?aid=xpertpoin8&aso=buyer_admin_panel&aca=theme_license_page' ),
		'item-checkout-url'                             => esc_url( 'https://themeforest.net/checkout/from_item/23887784?license=regular&support=bundle_6month&aid=xpertpoin8&aso=buyer_admin_panel&aca=theme_license_page' ),
		'item-checkout-link'                            => esc_html__( 'Buy Now', 'themename' ),
		'item-page-link'                                => esc_html__( 'View Pricing & Details', 'themename' ),
		'date-unknown'                                  => esc_html__( 'Unknown', 'themename' ),
		'license-cta-heading'                           => esc_html__( 'Action Required', 'themename' ),
		'license-cta-message-1'                         => esc_html__( 'Thank you for using Themename theme!', 'themename' ),
		'license-cta-message-2'                         => esc_html__( 'To enable remote updates, please activate your', 'themename' ),
		'license-cta-message-3'                         => esc_html__( 'Theme License', 'themename' ),
		'license-cta-message-4'                         => esc_html__( 'with a purchase code.', 'themename' ),
		'license-cta-link-text'                         => esc_html__( 'View More', 'themename' ),
	)
);
