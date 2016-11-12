<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="container-fluid">
  <div class="row center-block">

  <!-- Brand and toggle get grouped for better mobile display -->

  <div class="navbar-header col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  <a class="navbar-brand" href="<?php echo home_url(); ?>">

<?php
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ($image == true): ?>
<img src="<?php echo $image[0]; ?>" alt="logo-witryny" width="100" height="50" />
<?php else: ?>
<span class="blog-name"><?php  bloginfo('name'); ?></span>
<?php endif; ?>

  </a>

  </div>

      <?php
          wp_nav_menu( array(
              'menu'              => 'primary',
              'theme_location'    => 'primary',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse col-lg-6 col-md-6 col-sm-6 col-xs-12',
             'container_id'      => 'bs-example-navbar-collapse-1',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
          );
      ?>

      <div class="center-block col-lg-3 col-md-3 col-sm-5 col-xs-12 nav navbar-nav navbar-right">
    <?php get_search_form(); ?>
      </div>

        </div>

  </div>
</nav>
