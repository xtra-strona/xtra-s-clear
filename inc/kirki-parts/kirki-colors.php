<?php
Kirki::add_field( 'my_config', array(
		'type'        => 'color-alpha',
		'settings'    => 'navbar_inverse',
		'label'       => esc_attr__( 'Color-Alpha Control', 'kirki' ),
		'description' => esc_attr__( 'Similar to the default Color control but with a teist: This one allows you to also select an opacity for the color and saves the value as HEX or RGBA depending on the alpha channel\'s value.', 'kirki-demo' ),
		'help'        => esc_attr__( 'This is a tooltip', 'kirki-demo' ),
		'section'     => 'colors',
		'default'     => '#222',
		'priority'    => 30,
		'output'      => array(
			array(
				'element'  => '.navbar-inverse',
				'property' => 'background-color',
			),
		),
		'transport'   => 'postMessage',
		'js_vars'     => array(
			array(
				'element'  => '.navbar-inverse',
				'function' => 'css',
				'property' => 'background-color',
			),
		),
	) );
