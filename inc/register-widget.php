<?php
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {

    register_sidebar( array(

        'name' => __( 'Prawy Sidebar', 'theme-slug' ),
        'id' => 'sidebar-prawy',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<section id="%1$s" class="well %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );

		register_sidebar( array(
        'name' => __( 'Sidebar Strony', 'theme-slug' ),
        'id' => 'sidebar-strony',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<section id="%1$s" class="well %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}
