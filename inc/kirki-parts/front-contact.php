<?php
Kirki::add_field( 'my_config', array(
  'type'        => 'text',
  'settings'    => 'kirki_form_heading',
  'label'       => esc_attr__( 'Add Heading Text', 'xtra-starter' ),
  'help'        => esc_attr__( 'Add Heading Text', 'xtra-starter' ),
  'default'     => esc_attr__( 'Add Form [pirate_forms]', 'xtra-starter' ),
  'section'     => 'front_section_contact',
  'default'     => esc_attr__( 'Add Heading Text', 'xtra-starter' ),
  'priority'    => 10,
) );

Kirki::add_field( 'my_config', array(
  'type'        => 'text',
  'settings'    => 'form_heading_txt',
  'label'       => esc_attr__( 'Add Text', 'xtra-starter' ),
  'help'        => esc_attr__( 'Add Heading Text', 'xtra-starter' ),
  'default'     => esc_attr__( 'Add Heading Text', 'xtra-starter' ),
  'section'     => 'contact_form_heading',
  'default'     => esc_attr__( 'Add Heading Text', 'xtra-starter' ),
  'priority'    => 20,
) );


Kirki::add_field( 'my_config', array(
  'type'        => 'text',
  'settings'    => 'fr_form',
  'label'       => esc_attr__( 'Add Pirate Forms', 'xtra-starter' ),
  'help'        => esc_attr__( 'Add Shortcode Contact Form', 'xtra-starter' ),
  'default'     => esc_attr__( 'Add Form [pirate_forms]', 'xtra-starter' ),
  'section'     => 'front_section_contact',
  'default'     => '[pirate_forms]',
  'priority'    => 30,
) );

Kirki::add_field( 'my_config', array(
  'type'        => 'text',
  'settings'    => 'fr_map',
  'label'       => esc_attr__( 'Add Google Map', 'xtra-starter' ),
  'help'        => esc_attr__( 'Add Google Map Iframe', 'xtra-starter' ),
  'default'     => esc_attr__( 'Add Iframe Maps<iframe>Your Map</iframe>', 'xtra-starter' ),
  'section'     => 'front_section_contact',
  'default'     => 'Add Map',
  'priority'    => 40,
) );
