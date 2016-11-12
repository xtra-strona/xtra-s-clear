<?php
Kirki::add_field( 'my_config', array(
  'type' => 'text',
  'settings' => 'fr_next_heading',
  'section' => 'front_section_next',
  'label' => __('Add Heading', 'xtra-starter' ),
  'default' => __('Your Heading Text', 'xtra-starter' ),
  'priority' => 10,
) );

Kirki::add_field( 'my_config', array(
	'type'        => 'image',
	'settings'    => 'f_parralax_img',
	'label'       => __( 'Add Image', 'xtra-starter' ),
	'description' => __( 'Add Parallax Image', 'xtra-starter' ),
	'help'        => __( 'Simple Upload Image', 'xtra-starter' ),
	'section'     => 'front_section_next',
	'default'     => get_template_directory_uri() . '/assets/img/dock.jpg',
	'priority'    => 20,
) );

Kirki::add_field( 'my_config', array(
	'type'        => 'color-alpha',
	'settings'    => 'color_next_s',
	'label'       => __( 'Change Color', 'xtra-starter' ),
	'section'     => 'front_section_next',
	'default'     => 'rgba(14, 9, 60, 0.88)',
	'priority'    => 25,
	'alpha'       => true,
) );


Kirki::add_field( 'my_config', array(
	'type'        => 'color-alpha',
	'settings'    => 'color_next_h',
	'label'       => __( 'Change Heading Text Color', 'xtra-starter' ),
	'section'     => 'front_section_next',
	'default'     => '#e97616',
	'priority'    => 26,
	'alpha'       => true,
) );


Kirki::add_field('my_config', array(
  'type'        => 'repeater',
  'settings'    => 'repeater_fr_next',
  'section'     => 'front_section_next',
  'label'       => __('Add Next Section', 'xtra-starter'),
  'priority'    => 30,
  'default' => array(

array(
  'image_fr_next' => get_template_directory_uri() . '/assets/img/frog.jpg',
  'fa_facebook' => 'https://www.facebook.com/',
  'fa_youtobe' => 'https://www.youtube.com/',
  'fa_twitter' => 'https://twitter.com/',
  'fa_linkedin' => 'https://www.linkedin.com/',
  'fr_heading' => __('Add Heading', 'xtra-starter'),
  'fr_heading_next' => __('Add Heading Next Text','xtra-starter'),
  'fr_content' => __('Add Content Text','xtra-starter'),
  'aos_effect_next' => 'fade-right',
  ),

array(
    'image_fr_next' => get_template_directory_uri() . '/assets/img/beautiful.jpg',
    'fa_facebook' => 'https://www.facebook.com/',
    'fa_youtobe' => 'https://www.youtube.com/',
    'fa_twitter' => 'https://twitter.com/',
    'fa_linkedin' => 'https://www.linkedin.com/',
    'fr_heading' => __('Add Heading', 'xtra-starter'),
    'fr_heading_next' => __('Add Heading Next Text','starter'),
    'fr_content' => __('Add Content Text','xtra-starter'),
    'aos_effect_next' => 'fade-down',
    ),

  array(
      'image_fr_next' => get_template_directory_uri() . '/assets/img/panther.jpg',
      'fa_facebook' => 'https://www.facebook.com/',
      'fa_youtobe' => 'https://www.youtube.com/',
      'fa_twitter' => 'https://twitter.com/',
      'fa_linkedin' => 'https://www.linkedin.com/',
      'fr_heading' => __('Add Heading', 'xtra-starter'),
      'fr_heading_next' => __('Add Heading Next Text','xtra-starter'),
      'fr_content' => __('Add Content Text','xtra-starter'),
      'aos_effect_next' => 'fade-up',
      ),

  array(
      'image_fr_next' => get_template_directory_uri() . '/assets/img/sheep.jpg',
      'fa_facebook' => 'https://www.facebook.com/',
      'fa_youtobe' => 'https://www.youtube.com/',
      'fa_twitter' => 'https://twitter.com/',
      'fa_linkedin' => 'https://www.linkedin.com/',
      'fr_heading' => __('Add Heading', 'xtra-starter'),
      'fr_heading_next' => __('Add Heading Next Text','xtra-starter'),
      'fr_content' => __('Add Content Text','xtra-starter'),
      'aos_effect_next' => 'fade-left',
      ),

),

'fields' => array(

'image_fr_next' => array(
  'type' => 'image',
  'label' => __('Add Your Image', 'xtra-starter'),
  'description' => __('Add Image', 'xtra-starter'),
),

'fa_facebook' => array(
  'type' => 'text',
  'label' => __('Add Your Adress Url Facebook', 'xtra-starter'),
  'description' => __('Add URL', 'xtra-starter'),
),

'fa_youtobe' => array(
  'type' => 'text',
  'label' => __('Add Your Adress Url Youtobe', 'xtra-starter'),
  'description' => __('Add URL', 'xtra-starter'),
),

'fa_twitter' => array(
  'type' => 'text',
  'label' => __('Add Your Adress Url Twitter', 'xtra-starter'),
  'description' => __('Add URL', 'xtra-starter'),
),

'fa_linkedin' => array(
  'type' => 'text',
  'label' => __('Add Your Adress Url LinkedIn', 'xtra-starter'),
  'description' => __('Add URL', 'xtra-starter'),
),

'fr_heading' => array(
  'type' => 'text',
  'label' => __('Add Your Heading Text', 'xtra-starter'),
  'description' => __('Add Text', 'xtra-starter'),
),

'fr_heading_next' => array(
  'type' => 'text',
  'label' => __('Add Your Heading Next Text', 'xtra-starter'),
  'description' => __('Add Text', 'xtra-starter'),
),

'fr_content' => array(
  'type' => 'textarea',
  'label' => __('Add Your Content Text', 'xtra-starter'),
  'description' => __('Add Text', 'xtra-starter'),
),

'aos_effect_next' => array(
  'type'        => 'select',
  'label'       => __( 'Add Custom Effect', 'xtra-starter' ),
  'multiple'    => 1,
  'choices'     => array(
        'fade-left' => esc_attr__( 'Fade Left', 'xtra-starter' ),
        'fade-right' => esc_attr__( 'Fade Right', 'xtra-starter' ),
        'fade-up' => esc_attr__( 'Fade Up', 'xtra-starter' ),
        'fade-down' => esc_attr__( 'Fade Down', 'xtra-starter' ),
        'zoom-in' => esc_attr__( 'Zoom In', 'xtra-starter' ),
        'zoom-out' => esc_attr__( 'Zoom Out', 'xtra-starter' ),
        'slide-up' => esc_attr__( 'Slide Up', 'xtra-starter' ),
        'flip-up' => esc_attr__( 'Flip Up', 'xtra-starter' ),
        'flip-down' => esc_attr__( 'Flip Down', 'xtra-starter' ),
        'flip-right' => esc_attr__( 'Flip Right', 'xtra-starter' ),
        'flip-left' => esc_attr__( 'Flip Left', 'xtra-starter' ),
),
),

),
));
