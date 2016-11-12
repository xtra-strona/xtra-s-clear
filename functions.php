<?php

 //Load Text Domain
	load_theme_textdomain( 'xtra-starter', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	// add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-background' );

	/*
	 * Enable support for custom header.
	 */
	 $args = array(
	 	'flex-width'    => true,
	 	'width'         => 980,
	 	'flex-height'    => true,
	 	'height'        => 300,
	 	'default-image' => get_template_directory_uri() . '/images/header.jpg',
		'default-text-color'     => '#fff',
	 );
	 add_theme_support( 'custom-header', $args );

   /*
 	 * Enable support for custom logo.
 	 */
	add_theme_support( 'custom-logo', array(
	'height'      => 50,
	'width'       => 50,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),

) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'starter' ),
	//	'social'  => __( 'Social Links Menu', 'twentysixteen' ),
		'footer-menu' => __( 'Footer Menu', 'starter' ),
) );

add_theme_support( 'post-formats', array( 'link', 'gallery' ,'video') );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );


//Tmg Plugin Activation
require get_template_directory() . '/inc/tmg-plugin-activation/example.php';

//Example Text
require get_template_directory() . '/inc/lorem-ipsum-text.php';

// Dodajemy Widgety
require get_template_directory() . '/inc/register-widget.php';

// Require Botstrap Menu NavWalker
require_once('inc/wp_bootstrap_navwalker.php');

// Requirec Bootstrap Comments Template
require get_template_directory() . '/inc/bootstrap-comments.php';

// Proper way to enqueue scripts and styles
require get_template_directory() . '/inc/enqueue-style-script.php';

// Proper way to enqueue scripts and styles in CUSTOMIZER
require get_template_directory() . '/inc/enqueue-style-script-wp-customizer.php';

// Add Action Hook
require get_template_directory() . '/inc/add-action.php';

// Remove Some Functions
 // require get_template_directory() . '/inc/remove.php';


// Manually Include Kirki Customizer
include_once( dirname( __FILE__ ) . '/inc/kirki/kirki.php' );

if ( ! function_exists( 'my_theme_kirki_update_url' ) ) {
    function my_theme_kirki_update_url( $config ) {
        $config['url_path'] = get_stylesheet_directory_uri() . '/inc/kirki/';
        return $config;
    }
}
add_filter( 'kirki/config', 'my_theme_kirki_update_url' );

include_once( dirname( __FILE__ ) . '/inc/font-awesome.php' );
include_once( dirname( __FILE__ ) . '/inc/kirki-master.php' );

//Include Kirki With tmg-plugin-activation
// if ( class_exists( 'Kirki' ) ) {
//
//   include_once( dirname( __FILE__ ) . '/inc/font-awesome.php' );
//   include_once( dirname( __FILE__ ) . '/inc/kirki-master.php' );
//
// }


//include_once( dirname( __FILE__ ) . '/inc/c-f-s/cfs.php' );
