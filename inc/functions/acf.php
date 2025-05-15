<?php



/**
 * ACF Fields
 */
if ( function_exists( 'acf_add_local_field_group' ) ) {
	acf_add_local_field_group(
		array(
			'key'                   => 'group_5cd5a9f03a2a8',
			'title'                 => esc_html__( 'Additional Content', 'themename' ),
			'fields'                => array(
				array(
					'key'               => 'field_5cde3e8ff776c',
					'label'             => esc_html__( 'Subheading', 'themename' ),
					'name'              => 'subheading',
					'type'              => 'textarea',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'placeholder'       => '',
					'maxlength'         => '',
					'rows'              => '',
					'new_lines'         => '',
				),
				array(
					'key'               => 'field_5cd5aa039713f',
					'label'             => esc_html__( 'Properties', 'themename' ),
					'name'              => 'properties',
					'type'              => 'repeater',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'collapsed'         => '',
					'min'               => 0,
					'max'               => 0,
					'layout'            => 'table',
					'button_label'      => '',
					'sub_fields'        => array(
						array(
							'key'               => 'field_5cd5aa1697140',
							'label'             => esc_html__( 'Name', 'themename' ),
							'name'              => 'name',
							'type'              => 'text',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'placeholder'       => '',
							'prepend'           => '',
							'append'            => '',
							'maxlength'         => '',
						),
						array(
							'key'               => 'field_5cd5ad1e97141',
							'label'             => esc_html__( 'List', 'themename' ),
							'name'              => 'list',
							'type'              => 'repeater',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'collapsed'         => '',
							'min'               => 0,
							'max'               => 0,
							'layout'            => 'table',
							'button_label'      => '',
							'sub_fields'        => array(
								array(
									'key'               => 'field_5cd5ad4a97143',
									'label'             => esc_html__( 'Value', 'themename' ),
									'name'              => 'value',
									'type'              => 'text',
									'instructions'      => '',
									'required'          => 0,
									'conditional_logic' => 0,
									'wrapper'           => array(
										'width' => '',
										'class' => '',
										'id'    => '',
									),
									'default_value'     => '',
									'placeholder'       => '',
									'prepend'           => '',
									'append'            => '',
									'maxlength'         => '',
								),
							),
						),
					),
				),
				array(
					'key'               => 'field_5d55449378eb9',
					'label'             => 'Text',
					'name'              => 'text',
					'type'              => 'textarea',
					'instructions'      => 'Shown in fullscreen sliders',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'placeholder'       => '',
					'maxlength'         => '',
					'rows'              => '',
					'new_lines'         => '',
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'page',
					),
				),
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'xpoint_portfolio_item',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'acf_after_title',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => '',
			'active'                => true,
			'description'           => '',
		)
	);

	// custom fonts fields
	acf_add_local_field_group(
		array(
			'key'                   => 'group_5da01c79399ce',
			'title'                 => esc_html__( 'Custom Fonts', 'themename' ),
			'fields'                => array(
				array(
					'key'               => 'field_5da01caa50c9a',
					'label'             => '',
					'name'              => 'custom_fonts',
					'type'              => 'repeater',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'collapsed'         => 'field_5da01cfa50c9b',
					'min'               => 0,
					'max'               => 0,
					'layout'            => 'block',
					'button_label'      => esc_html__( 'Add Custom Font', 'themename' ),
					'sub_fields'        => array(
						array(
							'key'               => 'field_5da01cfa50c9b',
							'label'             => esc_html__( 'Font Family Name', 'themename' ),
							'name'              => 'font_name',
							'type'              => 'text',
							'instructions'      => '',
							'required'          => 1,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'placeholder'       => '',
							'prepend'           => '',
							'append'            => '',
							'maxlength'         => '',
						),
						array(
							'key'               => 'field_5da3c469ba39d',
							'label'             => esc_html__( 'Font Display', 'themename' ),
							'name'              => 'font_display',
							'type'              => 'select',
							'instructions'      => sprintf(
								'<a href="https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display" target="_blank">%1s</a> %2s',
								esc_html__( 'More information', 'themename' ),
								esc_html__( 'related to "font-display" descriptor.', 'themename' )
							),
							'required'          => 1,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'choices'           => array(
								'auto'     => 'auto',
								'block'    => 'block',
								'swap'     => 'swap',
								'fallback' => 'fallback',
								'optional' => 'optional',
							),
							'default_value'     => array(
								0 => 'auto',
							),
							'allow_null'        => 0,
							'multiple'          => 0,
							'ui'                => 0,
							'return_format'     => 'value',
							'ajax'              => 0,
							'placeholder'       => '',
						),
						array(
							'key'               => 'field_5da01d3550c9c',
							'label'             => esc_html__( 'Font Files', 'themename' ),
							'name'              => 'font_files',
							'type'              => 'repeater',
							'instructions'      => '',
							'required'          => 1,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'collapsed'         => 'field_5da01e9550c9e',
							'min'               => 0,
							'max'               => 0,
							'layout'            => 'block',
							'button_label'      => esc_html__( 'Add Font File', 'themename' ),
							'sub_fields'        => array(
								array(
									'key'               => 'field_5da01d7250c9d',
									'label'             => 'Font File',
									'name'              => 'font_file',
									'type'              => 'file',
									'instructions'      => esc_html__( 'Upload .woff or .woff2 font file', 'themename' ),
									'required'          => 1,
									'conditional_logic' => 0,
									'wrapper'           => array(
										'width' => '',
										'class' => '',
										'id'    => '',
									),
									'return_format'     => 'array',
									'library'           => 'all',
									'min_size'          => '',
									'max_size'          => '',
									'mime_types'        => 'woff, woff2',
								),
								array(
									'key'               => 'field_5da01e9550c9e',
									'label'             => esc_html__( 'Font Weight', 'themename' ),
									'name'              => 'font_weight',
									'type'              => 'select',
									'instructions'      => esc_html__( 'Select a font weight of the uploaded font file', 'themename' ),
									'required'          => 1,
									'conditional_logic' => 0,
									'wrapper'           => array(
										'width' => '',
										'class' => '',
										'id'    => '',
									),
									'choices'           => array(
										100         => esc_html__( '100 (Thin)', 'themename' ),
										'100italic' => esc_html__( '100i (Thin Italic)', 'themename' ),
										200         => esc_html__( ' 200 (Ultra Light)', 'themename' ),
										'200italic' => esc_html__( '200i (Ultra Light Italic)', 'themename' ),
										300         => esc_html__( ' 300 (Light)', 'themename' ),
										'300italic' => esc_html__( '300i (Light Italic)', 'themename' ),
										400         => esc_html__( '400 (Regular)', 'themename' ),
										'400italic' => esc_html__( '400i (Regular Italic)', 'themename' ),
										500         => esc_html__( '500 (Medium)', 'themename' ),
										'500italic' => esc_html__( '500i (Medium Italic)', 'themename' ),
										600         => esc_html__( '600 (Semi Bold)', 'themename' ),
										'600italic' => esc_html__( '600i (Semi Bold Italic)', 'themename' ),
										700         => esc_html__( '700 (Bold)', 'themename' ),
										'700italic' => esc_html__( '700i (Bold Italic)', 'themename' ),
										800         => esc_html__( '800 (Extra Bold)', 'themename' ),
										'800italic' => esc_html__( '800i (Extra Bold Italic)', 'themename' ),
										900         => esc_html__( '900 (Black)', 'themename' ),
										'900italic' => esc_html__( '900i (Black Italic)', 'themename' ),
									),
									'default_value'     => array(),
									'allow_null'        => 0,
									'multiple'          => 0,
									'ui'                => 0,
									'return_format'     => 'value',
									'ajax'              => 0,
									'placeholder'       => '',
								),
							),
						),
					),
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'options_page',
						'operator' => '==',
						'value'    => 'custom-fonts-settings',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => '',
			'active'                => true,
			'description'           => '',
		)
	);
}

/**
 * Custom Fonts Admin Page
 */
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page(
		array(
			'page_title'      => 'Custom Fonts',
			'menu_title'      => 'Custom Fonts',
			'menu_slug'       => 'custom-fonts-settings',
			'capability'      => 'customize',
			'icon_url'        => 'dashicons-editor-textcolor',
			'update_button'   => esc_html__( 'Save Changes', 'themename' ),
			'updated_message' => sprintf(
				'%1s <a href="%2s" target="_blank">%3s</a>',
				esc_html__( 'Fonts are saved and ready to use from', 'themename' ),
				admin_url( 'customize.php' ),
				esc_html__( 'WordPress Customizer.', 'themename' )
			),
		)
	);
}
