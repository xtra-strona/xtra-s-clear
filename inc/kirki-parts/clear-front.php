<?php
$cl_front = '_clear_fr';

Kirki::add_field( 'my_config', array(
	'type'        => 'color',
	'settings'    => '1' . $cl_front,
	'label'       => __( 'Change Background Color', 'xtra-starter' ),
	'section'     => 'template_clear_fr',
	'default'     => '#3b3c44',
	'priority'    => 10,
	'alpha'       => true,
) );


Kirki::add_field( 'my_config', array(
	'type'        => 'slider',
	'settings'    => '2' . $cl_front,
	'label'       => esc_attr__( 'Change Padding Top', 'xtra-starter' ),
	'section'     => 'template_clear_fr',
	'default'     => 9,
	'choices'     => array(
		'min'  => '-10',
		'max'  => '100',
		'step' => '1',
	),
) );
