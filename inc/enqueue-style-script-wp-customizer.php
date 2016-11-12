<?php
function custom_customize_enqueue() {

wp_enqueue_style( 'fonticonpicker-css', get_template_directory_uri() . '/assets/fonticonpicker/css/jquery.fonticonpicker.min.css' );

wp_enqueue_style( 'fonticonpicker-grey', get_template_directory_uri() . '/assets/fonticonpicker/themes/grey-theme/jquery.fonticonpicker.grey.css' );

// wp_enqueue_style( 'fonticonpicker-fontello', get_template_directory_uri() . '/assets/fonticonpicker/demo/fontello-7275ca86/css/fontello.css' );

 // wp_enqueue_style( 'fonticonpicker-icomoon', get_template_directory_uri() . '/assets/fonticonpicker/demo/icomoon/style.css' );

 wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/bower_components/font-awesome/css/font-awesome.css' );

 wp_enqueue_script( 'fonticonpicker-js', get_template_directory_uri() . '/assets/fonticonpicker/jquery.fonticonpicker.min.js', array( 'jquery', 'customize-controls' ), false, true  );


}
add_action( 'customize_controls_enqueue_scripts', 'custom_customize_enqueue' );
