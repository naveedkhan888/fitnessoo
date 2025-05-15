<?php

$priority = 1;

Kirki::add_field(
	'xpoint',
	array(
		'type'     => 'switch',
		'settings' => 'enable_smooth_scroll',
		'label'    => esc_html__( 'Enable Page Smooth Scroll', 'themename' ),
		'section'  => 'smooth_scroll',
		'default'  => false,
		'priority' => $priority++,
	)
);

Kirki::add_field(
	'xpoint',
	array(
		'type'            => 'checkbox',
		'settings'        => 'smooth_scroll_elementor_canvas_template_enabled',
		'label'           => esc_html__( 'Enable on Elementor Canvas Pages ', 'themename' ),
		'section'         => 'smooth_scroll',
		'default'         => true,
		'priority'        => $priority++,
		'active_callback' => array(
			array(
				'setting'  => 'enable_smooth_scroll',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

Kirki::add_field(
	'xpoint',
	array(
		'type'            => 'switch',
		'settings'        => 'enable_smooth_scroll_mobile',
		'label'           => esc_html__( 'Enable Page Smooth Scroll on Touch Devices', 'themename' ),
		'description'     => esc_html__( 'This option is NOT recommended as it replaces native momentum scroll experience. Use with caution!', 'themename' ),
		'section'         => 'smooth_scroll',
		'default'         => false,
		'priority'        => $priority++,
		'active_callback' => array(
			array(
				'setting'  => 'enable_smooth_scroll',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

Kirki::add_field(
	'xpoint',
	array(
		'type'            => 'number',
		'settings'        => 'smooth_scroll_damping',
		'label'           => esc_html__( 'Damping', 'themename' ),
		'description'     => esc_html__( 'The lower the value is, the more smooth the scrolling will be.', 'themename' ),
		'tooltip'         => esc_html__( 'A float value between 0.0 and 1.0 defining the momentum reduction damping factor.', 'themename' ),
		'section'         => 'smooth_scroll',
		'default'         => 0.06,
		'priority'        => $priority++,
		'choices'         => array(
			'min'  => 0,
			'max'  => 1,
			'step' => 0.01,
		),
		'active_callback' => array(
			array(
				'setting'  => 'enable_smooth_scroll',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

Kirki::add_field(
	'xpoint',
	array(
		'type'            => 'switch',
		'settings'        => 'smooth_scroll_render_by_pixels',
		'label'           => esc_html__( 'Enable Render by Pixels', 'themename' ),
		'description'     => esc_html__( 'Render every frame in integer pixel values, set to true to improve scrolling performance.', 'themename' ),
		'section'         => 'smooth_scroll',
		'default'         => true,
		'priority'        => $priority++,
		'active_callback' => array(
			array(
				'setting'  => 'enable_smooth_scroll',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

Kirki::add_field(
	'xpoint',
	array(
		'type'            => 'switch',
		'settings'        => 'smooth_scroll_plugin_easing',
		'label'           => esc_html__( 'Enable Edge Easing', 'themename' ),
		'description'     => esc_html__( 'The scroll will slow down with ease when reaching the page edges.', 'themename' ),
		'section'         => 'smooth_scroll',
		'default'         => false,
		'priority'        => $priority++,
		'active_callback' => array(
			array(
				'setting'  => 'enable_smooth_scroll',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);
