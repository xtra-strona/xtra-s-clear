<?php
$fr_opt = '_front_options';

Kirki::add_field( 'my_config', array(
	'type'        => 'color',
	'settings'    => '1' . $fr_opt,
	'label'       => __( 'Change Background Color', 'xtra-starter' ),
	'section'     => 'front_colors',
	'default'     => '#3b3c44',
	'priority'    => 10,
	'alpha'       => true,
) );

Kirki::add_field( 'my_config', array(
	'type'        => 'color',
	'settings'    => '2' . $fr_opt,
	'label'       => __( 'Change Color', 'xtra-starter' ),
	'section'     => 'front_colors',
	'default'     => '#e1ccb4',
	'priority'    => 20,
	'alpha'       => true,
) );
