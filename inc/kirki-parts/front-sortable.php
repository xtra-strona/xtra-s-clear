<?php
Kirki::add_field( 'my_config', array(
	'type'        => 'sortable',
	'settings'    => 'my_fr_sort',
	'label'       => __( 'Sort Your All Front Sections', 'xtra-starter' ),
	'section'     => 'front_sortable',
	'default'     => array(

    'heading',
		'first',
		'next',
		'last',
		'portfolio',
		'finally',
  	'contact'
 // 'content',

	),
	'choices'     => array(

		'heading'   => esc_attr__( 'Front Heading', 'xtra-starter' ),
		'first'     => esc_attr__( 'Front First', 'xtra-starter' ),
		'next'      => esc_attr__( 'Front Next', 'xtra-starter' ),
		'last'      => esc_attr__( 'Front Last', 'xtra-starter' ),
		'portfolio' => esc_attr__( 'Front Portfolio', 'xtra-starter' ),
		'finally'   => esc_attr__( 'Front Finally', 'xtra-starter' ),
		'contact'   => esc_attr__( 'Front Contact', 'xtra-starter' ),
		'content'   => esc_attr__( 'Content', 'xtra-starter' ),

	),
	'priority'    => 10,
) );
