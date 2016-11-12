<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name') ?> | <?php echo is_home() || is_front_page() ? bloginfo('description') : wp_title(); ?></title>
<?php get_template_part('inc/header-style'); ?>
<?php wp_head(); ?>
</head>
<body id="body" <?php body_class(); ?> data-spy="scroll" data-target=".navbar-fixed-top">
  <!-- Navigation -->
<?php  get_template_part('inc/navigation'); ?>
