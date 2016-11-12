<?php

/**
 * Configuration sample for the Kirki Customizer.
 * The function's argument is an array of existing config values
 * The function returns the array with the addition of our own arguments
 * and then that result is used in the kirki/config filter
 *
 * @param $config the configuration array
 *
 * @return array
 */
function kirki_demo_configuration_sample_styling( $config ) {
	return wp_parse_args( array(
		'logo_image'   => 'https://aristath.github.io/kirki/images/logo.png',
		'description'  => esc_html__( 'Eiting Options', 'xtra-starter' ),
		'color_accent' => '#0091EA',
		'color_back'   => '#FFFFFF',
	), $config );
}
add_filter( 'kirki/config', 'kirki_demo_configuration_sample_styling' );

Kirki::add_config( 'my_config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

include_once( dirname( __FILE__ ) . '/kirki-parts/kirki-custom-control.php' );


include_once( dirname( __FILE__ ) . '/kirki-parts/kirki-panels.php' );

include_once( dirname( __FILE__ ) . '/kirki-parts/kirki-section.php' );

// Customize Front Sortable
include_once( dirname( __FILE__ ) . '/kirki-parts/front-sortable.php' );

include_once( dirname( __FILE__ ) . '/kirki-parts/front-color.php' );

include_once( dirname( __FILE__ ) . '/kirki-parts/front-head.php' );

include_once( dirname( __FILE__ ) . '/kirki-parts/front-first.php' );

include_once( dirname( __FILE__ ) . '/kirki-parts/front-next.php' );

include_once( dirname( __FILE__ ) . '/kirki-parts/front-last.php' );

include_once( dirname( __FILE__ ) . '/kirki-parts/front-finally.php' );

include_once( dirname( __FILE__ ) . '/kirki-parts/front-portfolio.php' );

include_once( dirname( __FILE__ ) . '/kirki-parts/front-contact.php' );

include_once( dirname( __FILE__ ) . '/kirki-parts/clear-front.php' );


// Customize Sections Footer
include_once( dirname( __FILE__ ) . '/kirki-parts/footer.php' );

include_once( dirname( __FILE__ ) . '/kirki-parts/cookie-bar.php' );

// Customize Colors
include_once( dirname( __FILE__ ) . '/kirki-parts/custom-css.php' );

// Customize Colors
include_once( dirname( __FILE__ ) . '/kirki-parts/cfs.php' );


// include_once( dirname( __FILE__ ) . '/kirki-parts/kirki-colors.php' );
