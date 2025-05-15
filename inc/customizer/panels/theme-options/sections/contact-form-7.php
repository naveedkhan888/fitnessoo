<?php

$priority = 1;

Kirki::add_field(
	'xpoint',
	array(
		'type'     => 'switch',
		'settings' => 'enable_cf_7_modals',
		'label'    => esc_html__( 'Enable Custom Modal Windows on Forms Submit', 'themename' ),
		'section'  => 'contact_form_7',
		'default'  => true,
		'priority' => $priority++,
	)
);
