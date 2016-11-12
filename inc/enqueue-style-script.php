<?php
function wpdocs_theme_name_scripts() {

 wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/assets/css-master/master.min.css', array(), '1.1.0', 'all' );
	wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/assets/css-master/master.css', array(), '1.1.0', 'all' );

 wp_deregister_style('pirate_forms_front_styles');
 wp_deregister_script('pirate_forms_scripts_general');
 wp_deregister_script('pirate_forms_scripts');

 wp_deregister_script('jquery');
 wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/jquery/jquery.min.js', array(), '3.1.1', false );

 wp_enqueue_script( 'master-js', get_template_directory_uri() . '/assets/js/vendors.min.js', array('jquery'), '3.2.1', true );

//wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.min.js', array('master-js'), '2.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts', 10);
//All Scripts In Footer
// function remove_head_scripts() {

  //  remove_action('wp_head', 'wp_print_scripts');
  //  remove_action('wp_head', 'wp_print_head_scripts', 9);
  //  remove_action('wp_head', 'wp_enqueue_scripts', 1);
   //
  //  add_action('wp_footer', 'wp_print_scripts', 5);
  //  add_action('wp_footer', 'wp_enqueue_scripts', 5);
  //  add_action('wp_footer', 'wp_print_head_scripts', 5);

// }
// add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );
