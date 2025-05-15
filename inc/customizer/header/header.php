<?php

$priority = 1;

Kirki::add_section(
	'header',
	array(
		'title'    => esc_html__( 'Header', 'themename' ),
		'priority' => $priority ++,
		'icon'     => 'dashicons-arrow-up-alt',
	)
);

Kirki::add_field(
	'themename',
	array(
		'type'      => 'radio-buttonset',
		'settings'  => 'header_container',
		'label'     => esc_html__( 'Container', 'themename' ),
		'section'   => 'header',
		'default'   => 'container-fluid',
		'priority'  => $priority++,
		'choices'   => array(
			'container-fluid' => esc_html__( 'Fullwidth', 'themename' ),
			'container'       => esc_html__( 'Boxed', 'themename' ),
		),
		'transport' => 'postMessage',
	)
);

Kirki::add_field(
	'arts',
	array(
		'type'     => 'radio-buttonset',
		'settings' => 'header_position',
		'label'    => esc_html__( 'Position', 'themename' ),
		'section'  => 'header',
		'default'  => 'header_fixed',
		'priority' => $priority++,
		'choices'  => array(
			'header_absolute' => esc_html__( 'Absolute', 'themename' ),
			'header_fixed'    => esc_html__( 'Fixed', 'themename' ),
		),
	)
);


Kirki::add_field(
	'arts',
	array(
		'type'        => 'radio-buttonset',
		'settings'    => 'menu_style',
		'label'       => esc_html__( 'Menu', 'themename' ),
		'description' => esc_html__( 'This option has an effect only on desktop. On mobile there is always a fullscreen overlay menu.', 'themename' ),
		'section'     => 'header',
		'default'     => 'classic',
		'priority'    => $priority++,
		'choices'     => array(
			'classic'    => esc_html__( 'Classic', 'themename' ),
			'fullscreen' => esc_html__( 'Fullscreen', 'themename' ),
		),
	)
);

Kirki::add_field(
	'arts',
	array(
		'type'        => 'switch',
		'settings'    => 'enhance_header_contrast',
		'label'       => esc_html__( 'Header Smart Contrast', 'themename' ),
		'description' => esc_html__( 'Not recommended for "Classic" menu style if you have submenus.', 'themename' ),
		'section'     => 'header',
		'default'     => true,
		'priority'    => $priority++,
	)
);
