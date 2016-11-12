<?php
Kirki::add_field( 'my_config', array(
	'type'        => 'color-alpha',
	'settings'    => 'color_head',
	'label'       => __( 'Change Color', 'xtra-starter' ),
	'section'     => 'front_section_head',
	'default'     => 'rgba(18,16,15,0.83)',
	'priority'    => 5,
	'alpha'       => true,
) );

Kirki::add_field( 'my_config', array(
	'type'        => 'color-alpha',
	'settings'    => 'color_text_head',
	'label'       => __( 'Change Text Color', 'xtra-starter' ),
	'section'     => 'front_section_head',
	'default'     => '#ff0',
	'priority'    => 6,
	'alpha'       => true,
) );

Kirki::add_field( 'my_config', array(
    'type'        => 'multicolor',
    'settings'    => 'c_t_e',
    'label'       => esc_attr__( 'Change Effect Color', 'xtra-starter' ),
    'section'     => 'front_section_head',
    'priority'    => 7,
    'choices'     => array(
        'first'    => esc_attr__( 'First Color', 'xtra-starter' ),
        'next'   => esc_attr__( 'Next Color', 'xtra-starter' ),
				'last'  => esc_attr__( 'Last Color', 'xtra-starter' ),
    ),
    'default'     => array(
        'first'    => '#ff00c6',
        'next'   => '#ff0',
				'last'  => 'rgba(30,24,5,0.5)',
    ),
) );

Kirki::add_field( 'my_config', array(
	'type'        => 'color-alpha',
	'settings'    => 'color_desc_head',
	'label'       => __( 'Change Description Text Color', 'xtra-starter' ),
	'section'     => 'front_section_head',
	'default'     => '#FF6C00',
	'priority'    => 8,
	'alpha'       => true,
) );


Kirki::add_field( 'my_config', array(
    'type'        => 'multicolor',
    'settings'    => 'sc_col',
    'label'       => esc_attr__( 'Change Scrool Color', 'xtra-starter' ),
    'section'     => 'front_section_head',
    'priority'    => 9,
    'choices'     => array(
        'b_c'    => esc_attr__( 'B-C', 'xtra-starter' ),
        'b_h'   => esc_attr__( 'B-H', 'xtra-starter' ),
				'r_c'  => esc_attr__( 'R-C', 'xtra-starter' ),
				'r_h'  => esc_attr__( 'R-H', 'xtra-starter' ),
				'i_c'  => esc_attr__( 'I-C', 'xtra-starter' ),
				'i_h'  => esc_attr__( 'I-H', 'xtra-starter' ),
    ),
    'default'     => array(
        'b_c'    => 'rgba(7, 34, 41, 0.5)',
        'b_h'   => 'rgba(9, 79, 117, 0.28)',
				'r_c'  => 'rgba(9, 77, 76, 0.5)',
				'r_h'    => '#ff00c6',
				'i_c'   => '#ff0',
				'i_h'  => '#e26711',
    ),

) );

Kirki::add_field( 'my_config', array(
	'type'        => 'select',
	'settings'    => 'fr_head_id',
	'label'       => __( 'Choose Section To Scrool Down', 'xtra-starter' ),
	'section'     => 'front_section_head',
	'default'     => '#first',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'#first' => esc_attr__( 'First Section', 'xtra-starter' ),
		'#next' => esc_attr__( 'Next Section', 'xtra-starter' ),
		'#last' => esc_attr__( 'Last Section', 'xtra-starter' ),
		'#my-portfolio' => esc_attr__( 'Portfolio Section', 'xtra-starter' ),
    '#finally' => esc_attr__( 'Finally Section', 'xtra-starter' ),
    '#contact' => esc_attr__( 'Contact Section', 'xtra-starter' ),
	),
) );
