<?php

$priority = 1;

Kirki::add_field(
	'arts',
	array(
		'type'        => 'switch',
		'settings'    => 'enable_cursor',
		'label'       => esc_html__( 'Enable Cursor Follower', 'themename' ),
		'description' => esc_html__( 'It won\'t appear on touch devices regardless of this setting.', 'themename' ),
		'section'     => 'cursor_follower',
		'default'     => false,
		'priority'    => $priority++,
	)
);

Kirki::add_field(
	'arts',
	array(
		'type'     => 'switch',
		'settings' => 'enable_loading_progress',
		'label'    => esc_html__( 'Enable System "Progress" Cursor', 'themename' ),
		'section'  => 'cursor_follower',
		'default'  => true,
		'priority' => $priority++,
	)
);
