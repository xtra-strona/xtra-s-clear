<?php
Kirki::add_field( 'my_config', array(
	'type'        => 'switch',
	'settings'    => 'css_switch',
	'label'       => __( 'Enable Custom CSS', 'xtra-starter' ),
	'section'     => 'custom_css',
	'default'     => '2',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_attr__( 'Enable', 'xtra-starter' ),
		'off' => esc_attr__( 'Disable', 'xtra-starter' ),
	),
) );

Kirki::add_field( 'my_config', array(
	'type'        => 'code',
	'settings'    => 'cust_css',
	'label'       => __( 'Add Custom Css Code', 'xtra-starter' ),
	'section'     => 'custom_css',

	'default'     => '
	 .fr-head h2 {
		background-color: #011232;
		color: red !important;
		padding: 20px;
		border-top: 4px solid;
		border-bottom: 4px solid #a29e82;
	}',

	'priority'    => 20,
	'choices'     => array(
		'language' => 'css',
		'theme'    => 'monokai',
		'height'   => 250,
	),
) );
