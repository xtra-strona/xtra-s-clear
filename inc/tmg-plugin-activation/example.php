<?php

require_once get_template_directory() . '/inc/tmg-plugin-activation/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'tmg_pl_register_required_plugins' );


function tmg_pl_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// array(
		// 	'name'      => 'Kirki Customizer',
		// 	'slug'      => 'kirki',
		// 	'required'  => true,
		// ),

array(
	'name'      => 'Custom Field Suite',
	'slug'      => 'custom-field-suite',
	'required'  => true,
),
		array(
			'name'      => 'Pirate Forms',
			'slug'      => 'pirate-forms',
			'required'  => true,
		),

	);


	$config = array(
		'id'           => 'starter',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}
