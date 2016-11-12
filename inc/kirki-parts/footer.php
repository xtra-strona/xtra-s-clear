<?php
Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 'footer_copy',
	'label'    => __( 'Add Copyright', 'xtra-starter' ),
  'help'        => esc_attr__( 'Add Page name', 'xtra-starter' ),
	'section'  => 'footer_options',
  'default'     => get_bloginfo('name'),
	'priority' => 10,
) );


Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 'footer_facebook',
	'label'    => __( 'Addres Facebook', 'xtra-starter' ),
  'help'        => esc_attr__( 'Enter Your Faceebok', 'xtra-starter' ),
	'section'  => 'footer_options',
  'default'     => 'https://pl-pl.facebook.com/',
	'priority' => 20,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 'footer_tweeter',
	'label'    => __( 'Addres Twitter', 'xtra-starter' ),
  'help'        => esc_attr__( 'Enter Your Twitter', 'xtra-starter' ),
	'section'  => 'footer_options',
  'default'     => 'https://twitter.com/',
	'priority' => 30,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 'footer_youtobe',
	'label'    => __( 'URL Youtobe', 'xtra-starter' ),
  'help'        => esc_attr__( 'Enter Your Youtobe', 'xtra-starter' ),
	'section'  => 'footer_options',
  'default'     => 'https://www.youtube.com/',
	'priority' => 40,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 'footer_google',
	'label'    => __( 'URL Google+', 'xtra-starter' ),
  'help'        => esc_attr__( 'Enter Your Google+', 'xtra-starter' ),
	'section'  => 'footer_options',
  'default'     => 'https://plus.google.com/',
	'priority' => 50,
) );
