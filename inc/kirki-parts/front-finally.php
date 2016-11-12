<?php
Kirki::add_field('my_configmy_config',array(
	'type' => 'text',
	'settings' => 'fin_t_h',
	'section' => 'front_section_finally',
	'label' => __('Add Text', 'xtra-starter'),
	'help' => __('Add Your Heading Text'),
	'default' => __('Your Heading Text','xtra-starter'),
	'priority' => 10,
));

Kirki::add_field( 'my_configmy_config', array(
	'type'        => 'image',
	'settings'    => 'fin_parallax_img',
	'label'       => __( 'Add Image', 'xtra-starter' ),
	'description' => __( 'Add Some Image', 'xtra-starter' ),
	'help'        => __( 'Add Your Iamge Parallax Background.', 'xtra-starter' ),
	'section'     => 'front_section_finally',
	'default'     => get_template_directory_uri() . '/assets/img/photo-manipulation.jpg',
	'priority'    => 20,
) );

Kirki::add_field( 'my_configmy_config', array(
    'type'        => 'multicolor',
    'settings'    => 'fr_fin_c',
    'label'       => esc_attr__( 'Change color', 'xtra-starter' ),
    'section'     => 'front_section_finally',
    'priority'    => 25,
    'choices'     => array(
        'background'    => esc_attr__( 'B-C', 'xtra-starter' ),
				'border-t' => esc_attr__( 'B-T ', 'xtra-starter' ),
        'text'   => esc_attr__( 'Text', 'xtra-starter' ),
    ),
    'default'     => array(
        'background'    => 'rgba(0,0,0,0.83)',
				'border-t' => '#fff',
        'text'   => '#d8a105',
    ),
) );

Kirki::add_field( 'my_config', array(
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Repeater Control', 'xtra-starter' ),
	'section'     => 'front_section_finally',
	'priority'    => 30,
	'settings'    => 'set_fin_fr',
	'default'     => array(

		array(
			'font_awesome' => 'fa fa-thumbs-o-up',
			'heading_text' => esc_attr__( 'Add Heading Text', 'xtra-starter' ),
			'content_text' => lorem_ipsum(300),
			'link_text' => __( 'Read More', 'xtra-starter' ),
			'link_url'  => 'https://github.com/aristath/kirki',
			'aos_effect' => 'fade-right',
		),
		array(
			'font_awesome' => 'fa fa-flag',
			'heading_text' => __( 'Add Heading Text', 'xtra-starter' ),
			'content_text' => lorem_ipsum(300),
			'link_text' => __( 'Read More', 'xtra-starter' ),
			'link_url'  => 'https://github.com/aristath/kirki',
			'aos_effect' => 'fade-down',
		),

		array(
			'font_awesome' => 'fa fa-desktop',
			'heading_text' => esc_attr__( 'Add Heading Text', 'xtra-starter' ),
			'content_text' => lorem_ipsum(300),
			'link_text' => __( 'Read More', 'xtra-starter' ),
			'link_url'  => 'https://github.com/aristath/kirki',
			'aos_effect' => 'fade-up',
		),
		array(
			'font_awesome' => 'fa fa-rocket',
			'heading_text' => __( 'Add Heading Text', 'xtra-starter' ),
			'content_text' => lorem_ipsum(300),
			'link_text' => __( 'Read More', 'xtra-starter' ),
			'link_url'  => 'https://github.com/aristath/kirki',
			'aos_effect' => 'fade-left',
		),

	),
	'fields' => array(

'font_awesome' => array(
	'type'        => 'select',
	'label'       => __( 'This is the label', 'xtra-starterxtra-starterxtra-starterxtra-starter' ),
	'multiple'    => 1,
	'choices'     => smk_font_awesome(),
),

'heading_text' => array(
	'type'        => 'text',
	'label'       => __( 'Add Some Text', 'xtra-starterxtra-starterxtra-starter' ),
	'description' => __( 'Add Heading Text', 'xtra-starterxtra-starterxtra-starter' ),
),

'content_text' => array(
	'type'        => 'textarea',
	'label'       => __( 'Add Some Text', 'xtra-starterxtra-starterxtra-starter' ),
	'description' => __( 'Add Heading Text', 'xtra-starterxtra-starterxtra-starter' ),
),

		'link_text' => array(
			'type'        => 'text',
			'label'       => __( 'Link Text', 'xtra-starterxtra-starter' ),
			'description' => __( 'This will be the label for your link', 'xtra-starterxtra-starter' ),
		),


		'link_url' => array(
			'type'        => 'text',
			'label'       => __( 'Link URL', 'xtra-starter' ),
			'description' => __( 'This will be the link URL', 'xtra-starter' ),
		),

		'aos_effect' => array(
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
	)
) );
