<?php get_header(); ?>
  <br>
<?php if(has_header_image()) : ?>
      <div class="parallax-window" data-parallax="scroll" data-image-src="<?php header_image(); ?>">
        <!-- First Blog Post -->
          <br>
          <br>
          <h1>
              <?php bloginfo('name'); ?>
              <small><?php bloginfo('description'); ?></small>
          </h1>
    <h2 class="error"><?php _e('404 Brak Strony', 'starter'); ?></h2>
      </div>
      <br>
<?php endif; ?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
<?php if(is_active_sidebar('sidebar-prawy')) : ?>
            <!-- Blog Entries Column -->
            <div class="col-md-8">
<?php else : ?>
      <div class="col-md-12">
<?php endif; ?>
<?php if(!has_header_image()) : ?>
      <h1 class="my-page-header">
          <?php bloginfo('name'); ?>
          <small><?php bloginfo('description'); ?></small>
      </h1>
   <h2 class="error"><?php _e('404 Brak Strony', 'starter'); ?></h2>
<?php else : ?>
    <h2 class="error"><?php _e('404 Brak Strony', 'starter'); ?></h2>
<?php endif; ?>

<h2><?php _e('Moze tutaj cos znajdziesz:', 'starter'); ?></h2>
<?php get_search_form(); ?>
<br>
<hr>
<h2><?php _e('Zobacz Nasze Archiwa', 'starter') ?></h2>
  <div class="all-well">
        <select class="well" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
          <option value=""><?php echo esc_attr( __( 'Wybierz Dzień', 'starter' ) ); ?></option>
          <?php wp_get_archives( array( 'type' => 'daily', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
        </select>

        <select class="well" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
          <option value=""><?php echo esc_attr( __( 'Wybierz Miesiac', 'starter' ) ); ?></option>
          <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
        </select>

        <select class="well" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
          <option value=""><?php echo esc_attr( __( 'Wybierz Rok', 'starter' ) ); ?></option>
          <?php wp_get_archives( array( 'type' => 'yearly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
        </select>
  </div>
</div>
<?php if(is_active_sidebar('sidebar-prawy')) : ?>
            <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4 sidebar-strony">
              <?php get_sidebar(); ?>
        </div>
<?php endif; ?>
        </div>
        <!-- /.row -->
        <hr>
<?php get_footer(); ?>
