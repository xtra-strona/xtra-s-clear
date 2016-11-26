<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
     <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<?php get_template_part('inc/header-style'); ?>
<?php wp_head(); ?>
<style media="screen">
<?php
      $css_sw = get_theme_mod('css_switch');
      $c_css = get_theme_mod('cust_css',
      '.fr-head h2 {
      background-color: #011232;
      color: red !important;
      padding: 20px;
      border-top: 4px solid;
      border-bottom: 4px solid #a29e82;
    }'
);
if ($css_sw) {
echo esc_html($c_css);
 }  ?>
</style>
</head>
<body id="body" <?php body_class(); ?> data-spy="scroll" data-target=".navbar-fixed-top">
  <!-- Navigation -->
<?php  get_template_part('inc/navigation'); ?>
