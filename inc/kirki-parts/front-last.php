<?php
// Heading Last Section
 Kirki::add_field('my_config',array(
   'type'     => 'text',
   'settings' => 'frlast_heading',
   'section'  => 'front_section_last',
   'label'    => __('Add Heading Text', 'xtra-starter'),
   'help'     => __('Add your  Text', 'xtra-starter'),
   'default'  => __('Add Heading Text', 'xtra-starter'),
   'priority' => 10,
 ));

// Left IMG
Kirki::add_field('my_config', array(
'type'     => 'image',
'settings' => 'l_left_img',
'section'  => 'front_section_last',
'label'    => __('Add your Left Image','xtra-starter'),
'help'     => __('Add Image', 'xtra-starter'),
'default'  => get_template_directory_uri() . '/assets/img/balon.jpg',
'priority' => 20
));


Kirki::add_field('my_config', array(
'type'     => 'text',
'settings' => 'l_img_url',
'section'  => 'front_section_last',
'label'    => __('Add Your Left Img Url', 'xtra-starter'),
'help'     => __('Add URL' ,'xtra-starter'),
'default'  => 'https://xtras.pl/',
'priority' => 30
));

// Center IMG
Kirki::add_field('my_config', array(
'type'     => 'image',
'settings' => 'l_center_img',
'section'  => 'front_section_last',
'label'    => __('Add your Center Image','xtra-starter'),
'help'     => __('Add Image', 'xtra-starter'),
'default'  => get_template_directory_uri() . '/assets/img/dock.jpg',
'priority' => 40
));


Kirki::add_field('my_config', array(
'type'     => 'text',
'settings' => 'c_img_url',
'section'  => 'front_section_last',
'label'    => __('Add Your Center Img Url', 'xtra-starter'),
'help'     => __('Add URL' ,'xtra-starter'),
'default'  => 'https://xtras.pl/',
'priority' => 50
));

// Right IMG
Kirki::add_field('my_config', array(
'type'     => 'image',
'settings' => 'l_right_img',
'section'  => 'front_section_last',
'label'    => __('Add your Right Image','xtra-starter'),
'help'     => __('Add Image', 'xtra-starter'),
'default'  => get_template_directory_uri() . '/assets/img/duck.jpg',
'priority' => 60
));

Kirki::add_field('my_config', array(
'type'     => 'text',
'settings' => 'r_img_url',
'section'  => 'front_section_last',
'label'    => __('Add Your Right Img Url', 'xtra-starter'),
'help'     => __('Add URL' ,'xtra-starter'),
'default'  => 'https://xtras.pl/',
'priority' => 70
));
