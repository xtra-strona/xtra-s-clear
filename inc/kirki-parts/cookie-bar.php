<?php
$cookie = '_foot_cookie'; // Kirki Prefix (settings => )

Kirki::add_field( 'my_config', array(
	'type'        => 'switch',
	'settings' => '1' . $cookie,
	'label'       => __( 'This is the label', 'xtra-starter' ),
	'section'     => 'cookiebar_options',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_attr__( 'Enable', 'xtra-starter' ),
		'off' => esc_attr__( 'Disable', 'xtra-starter' ),
	),
) );

//Text
Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => '2' . $cookie,
	'label'    => __( 'Text Use Cookies', 'xtra-starter' ),
	'section'  => 'cookiebar_options',
	'default'  => esc_attr__('We use cookies to track usage and preferences', 'xtra-starter'),
	// 'priority' => 10,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => '3' . $cookie,
	'label'    => __( 'Text Understand Cookie', 'xtra-starter' ),
	'section'  => 'cookiebar_options',
	'default'  => esc_attr__('I Understand', 'xtra-starter'),
	// 'priority' => 10,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => '4' . $cookie,
	'label'    => __( 'Text Disable Cookies', 'xtra-starter' ),
	'section'  => 'cookiebar_options',
	'default'  => esc_attr__('Disable Cookies', 'xtra-starter'),
	// 'priority' => 10,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => '5' . $cookie,
	'label'    => __( 'Text Privacy Policy', 'xtra-starter' ),
	'section'  => 'cookiebar_options',
	'default'  => esc_attr__('Privacy Policy', 'xtra-starter'),
	// 'priority' => 10,
) );

Kirki::add_field( 'my_config', array(
	'type'        => 'dropdown-pages',
	'settings' => '6' . $cookie,
	'label'       => __( 'Choose Page To Cookie Info', 'xtra-starter' ),
	'section'     => 'cookiebar_options',
	'default'     => '',
	// 'priority'    => 10,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => '7' . $cookie,
	'label'    => __( 'Choose Page To Cookie Info URL', 'xtra-starter' ),
	'section'  => 'cookiebar_options',
	'default'  => '',
	// 'priority' => 10,
) );
