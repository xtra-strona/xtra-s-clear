<?php

Kirki::add_field( 'my_config', array(
    'type'        => 'multicolor',
    'settings'    => 'fr_f_bckg',
    'label'       => esc_attr__( 'Change Color', 'xtra-starter' ),
    'section'     => 'front_section_first',
    'priority'    => 8,
    'choices'     => array(
        'background'    => esc_attr__( 'Backg-C', 'xtra-starter' ),
        'border-t'   => esc_attr__( 'Border-T', 'xtra-starter' ),
    ),
    'default'     => array(
        'background'    => '#0a0630',
        'border-t'   => '#056c44',
    ),
) );

Kirki::add_field( 'my_config', array(
    'type'        => 'multicolor',
    'settings'    => 'f_f_t_c',
    'label'       => esc_attr__( 'Change Text Color', 'xtra-starter' ),
    'section'     => 'front_section_first',
    'priority'    => 9,
    'choices'     => array(
        'fir_h'    => esc_attr__( 'F-H', 'xtra-starter' ),
        'text_h'   => esc_attr__( 'T-H', 'xtra-starter' ),
        'cont_txt'  => esc_attr__( 'A-P', 'xtra-starter' ),
    ),
    'default'     => array(
        'fir_h'    => '#f23212',
        'text_h'   => '#0292fc',
        'cont_txt'  => '#eda906',
    ),
) );


Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 'fir_heading_h1',
	'label'    => __( 'Add Sectionn Name', 'xtra-starter' ),
  'help'        => esc_attr__( 'Add Some Text', 'xtra-starter' ),
	'section'  => 'front_section_first',
  'default'     => 'Hello First',
	'priority' => 10,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 'left_heading_h3',
	'label'    => __( 'Ad Left Heading', 'xtra-starter' ),
  'help'        => esc_attr__( 'Add Some Text', 'xtra-starter' ),
	'section'  => 'front_section_first',
  'default'     => __('Left Heading', 'xtra-starter'),
	'priority' => 20,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'textarea',
	'settings' => 'left_heading_p',
	'label'    => __( 'Add Left Paragraph', 'xtra-starter' ),
  'help'        => esc_attr__( 'Add Some Text', 'xtra-starter' ),
	'section'  => 'front_section_first',
  'default'     => lorem_ipsum(400),
	'priority' => 30,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'image',
	'settings' => 'left_f_img',
	'label'    => __( 'Add Left Image', 'xtra-starter' ),
  'help'        => esc_attr__( 'Upload Image', 'xtra-starter' ),
	'section'  => 'front_section_first',
  'default'     => get_template_directory_uri() . '/assets/img/pociag.jpg',
	'priority' => 40,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 'left_bottom_h3',
	'label'    => __( 'Add Left Bottom Heading', 'xtra-starter' ),
  'help'        => esc_attr__( 'Add Some Text', 'xtra-starter' ),
	'section'  => 'front_section_first',
  'default'     => __('Add Heading', 'xtra-starter'),
	'priority' => 50,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'textarea',
	'settings' => 'left_bottom_p',
	'label'    => __( 'Add Left Bottom Paragraph', 'xtra-starter' ),
  'help'        => esc_attr__( 'Add Some Text', 'xtra-starter' ),
	'section'  => 'front_section_first',
  'default'     => lorem_ipsum(400),
	'priority' => 60,
) );


//Front First Right
Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 'fr_right_h3',
	'label'    => __( 'Add Heading Name', 'xtra-starter' ),
  'help'        => esc_attr__( 'Add Some Text', 'xtra-starter' ),
	'section'  => 'front_section_first',
  'default'     => __('Hello First', 'xtra-starter'),
	'priority' => 70,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'textarea',
	'settings' => 'right_heading_p',
	'label'    => __( 'Add Right Paragraph', 'xtra-starter' ),
  'help'        => esc_attr__( 'Add Some Text', 'xtra-starter' ),
	'section'  => 'front_section_first',
  'default'     => lorem_ipsum(500),
	'priority' => 80,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 'fr_right_youtobe',
	'label'    => __( 'Add youtobe Video', 'xtra-starter' ),
  'help'        => esc_attr__( 'Add Wideo', 'xtra-starter' ),
	'section'  => 'front_section_first',
  'default'     => 'kpA-PcP80Lk',
	'priority' => 90,
) );

Kirki::add_field( 'my_config', array(
	'type'        => 'image',
	'settings'    => 'fr_image_demo',
	'label'       => __( 'This is the label', 'xtra-starter' ),
	'description' => __( 'This is the control description', 'xtra-starter' ),
	'help'        => __( 'This is some extra help text.', 'xtra-starter' ),
	'section'     => 'front_section_first',
	'default'     => '',
	'priority'    => 100,
) );
