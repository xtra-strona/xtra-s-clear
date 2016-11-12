<?php
$usage_cf = 'usage_custom_fields';
Kirki::add_field( 'my_config', array(
	'type'     => 'textarea',
	'settings' => '1' . $usage_cf,
	'label'    => __( 'Related Post => Import Field To custom_field_suite', 'xtra-starter' ),
	'section'  => 'usage_cf',
	'default'  => '[{"post_title":"Related Entries","post_name":"1-petla","cfs_fields":[{"id":"22","name":"related_posts","label":"Show Related Entries","type":"relationship","notes":"Add Custom Related Post","parent_id":0,"weight":0,"options":{"post_types":["post"],"limit_min":"","limit_max":""}},{"id":"26","name":"switch_entire_text","label":"Turn On Your Own Text","type":"true_false","notes":"Switch Your Custom Entire Text To ON","parent_id":0,"weight":1,"options":{"message":"","required":"0"}},{"id":"24","name":"entire_text","label":"Related Entries Text","type":"text","notes":"","parent_id":0,"weight":2,"options":{"default_value":"Show Related Entries","required":"0"}}],"cfs_rules":{"post_types":{"operator":"==","values":["post"]}},"cfs_extras":{"order":"0","context":"normal","hide_editor":"0"}}]',
	'priority' => 10,
) );
