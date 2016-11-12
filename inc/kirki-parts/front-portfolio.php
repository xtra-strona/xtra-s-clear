<?php
Kirki::add_field( 'my_config', array(
  'type' => 'text',
  'settings' => 'fr_port_heading',
  'section' => 'front_section_portfolio',
  'label' => __('Add Heading', 'xtra-starter' ),
  'default' => __('Your Heading Text', 'xtra-starter' ),
  'priority' => 10,
) );

Kirki::add_field( 'my_config', array(
	'type'        => 'image',
	'settings'    => 'fr_p_img',
	'label'       => __( 'Add Your Image', 'xtra-starter' ),
	'description' => __( 'Simple Add Image', 'xtra-starter' ),
	'help'        => __( 'Dont Wory Add Image.', 'xtra-starter' ),
	'section'     => 'front_section_portfolio',
	'default'     => get_template_directory_uri() . '/assets/img/space.jpg',
	'priority'    => 20,
) );

Kirki::add_field( 'my_config', array(
    'type'        => 'multicolor',
    'settings'    => 'fr_port_b',
    'label'       => esc_attr__( 'Label', 'xtra-starter' ),
    'section'     => 'front_section_portfolio',
    'priority'    => 21,
    'choices'     => array(
        'background'    => esc_attr__( 'B-C', 'xtra-starter' ),
        'border'   => esc_attr__( 'B-T', 'xtra-starter' ),
        // 'active'  => esc_attr__( 'Active', 'my_textdomain' ),
    ),
    'default'     => array(
        'background'    => 'rgba(3, 18, 30, 0.92)',
        'border'   => '#d8a105',
        // 'active'  => '#00ffff',
    ),
) );

Kirki::add_field( 'my_config', array(
    'type'        => 'multicolor',
    'settings'    => 'fr_port_t',
    'label'       => esc_attr__( 'Label', 'xtra-starter' ),
    'section'     => 'front_section_portfolio',
    'priority'    => 22,
    'choices'     => array(
        'color'    => esc_attr__( 'Text C', 'xtra-starter' ),
        'background'   => esc_attr__( 'Background', 'xtra-starter' ),
        'border-b'  => esc_attr__( 'Border', 'xtra-starter' ),
    ),
    'default'     => array(
        'color'    => '#fa4300',
        'background'   => 'rgba(139, 0, 0, 0.33)',
        'border-b'  => '#791e12',
    ),
) );

Kirki::add_field( 'my_config', array(
	'type'        => 'select',
	'settings'    => 'category_selection',
	'label'       => __( 'Choose Category', 'xtra-starter' ),
	'section'     => 'front_section_portfolio',
	'default'     => array('1'),
	'priority'    => 30,
	'multiple'    => 20,
	'choices'     => Kirki_Helper::get_terms( array('taxonomy' => 'category') ),
) );

Kirki::add_field( 'my_config', array(
	'type'        => 'slider',
	'settings'    => 'my_setting_port_slider',
	'label'       => esc_attr__( 'Set Minimum, Maximum => Max (100)', 'xtra-starter' ),
	'section'     => 'front_section_portfolio',
	'default'     => 6,
  'priority'    => 40,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );


// Kirki::add_field( 'ci_front', array(
//   'type' => 'custom_iconpicker',
//   'settings' => 'c_iconpicker',
//   'section' => 'front_section_portfolio',
//   'label' => __('Custom Icon Picker', 'starter' ),
//   'default' => '',
//   'priority' => 60,
// ) );
//
// Kirki::add_field( 'ci_frontnext', array(
//   'type' => 'custom_iconpicker',
//   'settings' => 'c_iconpickerss',
//   'section' => 'front_section_portfolio',
//   'label' => __('Custom Icon Picker', 'starter' ),
//   'default' => '',
//   'priority' => 70,
// ) );
