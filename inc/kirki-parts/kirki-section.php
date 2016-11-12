<?php

//FRONT SORTABLE
Kirki::add_section( 'front_sortable', array(
    'title'          => __( 'Front Sortable', 'xtra-starter' ),
    'description'    => __( 'Sort Your Section', 'xtra-starter' ),
    'panel'          => 'front_options', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_section( 'front_colors', array(
    'title'          => __( 'Front Colors', 'xtra-starter' ),
    'description'    => __( 'Change Colors', 'xtra-starter' ),
    'panel'          => 'front_options', // Not typically needed.
    'priority'       => 11,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

//SECTION HEAD
Kirki::add_section( 'front_section_head', array(
    'title'          => __( 'Head Section', 'xtra-starter' ),
    'description'    => __( 'Add Option', 'xtra-starter' ),
    'panel'          => 'front_options', // Not typically needed.
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

//1 SECTION
Kirki::add_section( 'front_section_first', array(
    'title'          => __( 'First Section', 'xtra-starter' ),
    'description'    => __( 'Add Option', 'xtra-starter' ),
    'panel'          => 'front_options', // Not typically needed.
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

//2 SECTION
Kirki::add_section( 'front_section_next', array(
    'title'          => __( 'Next Section', 'xtra-starter' ),
    'description'    => __( 'Add Option', 'xtra-starter' ),
    'panel'          => 'front_options', // Not typically needed.
    'priority'       => 40,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

//3 SECTION
Kirki::add_section( 'front_section_last', array(
    'title'          => __( 'Last Section', 'xtra-starter' ),
    'description'    => __( 'Add Option', 'xtra-starter' ),
    'panel'          => 'front_options', // Not typically needed.
    'priority'       => 50,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

//SECTION PORTFOLIO
Kirki::add_section( 'front_section_portfolio', array(
    'title'          => __( 'Portfolio Section', 'xtra-starter' ),
    'description'    => __( 'Add Option', 'xtra-starter' ),
    'panel'          => 'front_options', // Not typically needed.
    'priority'       => 60,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

//4 SECTION
Kirki::add_section( 'front_section_finally', array(
    'title'          => __( 'Finally Section', 'xtra-starter' ),
    'description'    => __( 'Add Option', 'xtra-starter' ),
    'panel'          => 'front_options', // Not typically needed.
    'priority'       => 80,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );



//SECTION CONTACT
Kirki::add_section( 'front_section_contact', array(
    'title'          => __( 'Contact Options', 'xtra-starter' ),
    'description'    => __( 'Add Option', 'xtra-starter' ),
    'panel'          => 'front_options', // Not typically needed.
    'priority'       => 91,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

//TEMPLATE CLEAR FRONT
Kirki::add_section( 'template_clear_fr', array(
    'title'          => __( 'Template Clear Front Options', 'xtra-starter' ),
    'description'    => __( 'Add Option', 'xtra-starter' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 92,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


//OPTIONS FOOTER
Kirki::add_section( 'footer_options', array(
    'title'          => __( 'Options Footer', 'xtra-starter' ),
    'description'    => __( 'Add Option', 'xtra-starter' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 93,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

//COOKIE BAR OPTIONS
Kirki::add_section( 'cookiebar_options', array(
    'title'          => __( 'Options Cookie', 'xtra-starter' ),
    'description'    => __( 'Edit Option', 'xtra-starter' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 94,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


//CUSTOM CSS
Kirki::add_section( 'custom_css', array(
    'title'          => __( 'Custom CSS', 'xtra-starter' ),
    'description'    => __( 'Add Custom CSS', 'xtra-starter' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 95,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

//USAGE CF
Kirki::add_section( 'usage_cf', array(
    'title'          => __( 'Usage Custom Fields', 'xtra-starter' ),
    'description'    => __( 'Add Custom Fields', 'xtra-starter' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );
