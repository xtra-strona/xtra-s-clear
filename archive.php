<?php get_header(); ?>
<?php if(has_header_image()) : ?>
  <div class="parallax-window-header">
    <div class="parallax-window">
        <!-- First Blog Post -->
          <br>
          <br>
          <h1><?php the_archive_title(); ?></h1>
      </div>
  </div>
      <br>
    <?php else: ?>
<div class="my-page-header-archive">
            <h1 class="text-center"><?php the_archive_title(); ?></h1>
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
<div class="all-well">
      <select class="well" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
        <option value=""><?php echo esc_attr( __( 'Choose Day', 'xtra-starter' ) ); ?></option>
        <?php wp_get_archives( array( 'type' => 'daily', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
      </select>

      <select class="well" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
        <option value=""><?php echo esc_attr( __( 'Choose Month', 'xtra-starter' ) ); ?></option>
        <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
      </select>

      <select class="well" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
        <option value=""><?php echo esc_attr( __( 'Choose Year', 'xtra-starter' ) ); ?></option>
        <?php wp_get_archives( array( 'type' => 'yearly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
      </select>
</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
get_template_part('template-parts/content','archive');
edit_post_link();
 endwhile;

 the_posts_pagination( array(
 	'mid_size'  => 2,
 	'prev_text' => __( '&larr; Previous', 'xtra-starter' ),
 	'next_text' => __( 'Next &rarr;', 'xtra-starter' ),
 ) );

 else : ?>

	<h1><?php _e( 'Sorry No Entry specified in Archive.', 'xtra-starter' ); ?></h1>
<?php endif; ?>

</div>

<?php if(is_active_sidebar('sidebar-prawy')) : ?>
            <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4 sidebar-strony">
              <?php get_sidebar(); ?>
        </div>
<?php endif; ?>
        </div>
        <!-- /.row -->
<?php get_footer(); ?>
