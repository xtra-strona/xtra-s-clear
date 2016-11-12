<?php get_header(); ?>
<?php if(has_header_image()) : ?>
<br>
    <div class="parallax-window-header">
      <div class="parallax-window">
        <!-- First Blog Post -->
        <?php if (is_home() || is_front_page()): ?>
          <br>
          <br>
          <h1 data-aos="flip-up" class="name-desc" style="color:#<?php header_textcolor(); ?>">
          <?php bloginfo('name'); ?>
              <small><?php bloginfo('description'); ?></small>
          </h1>
        <?php endif; ?>
      </div>


    </div>
<br>
<?php else : ?>
  <h1 class="text-center blog-heading" style="color:#<?php header_textcolor(); ?>">
      <?php bloginfo('name'); ?>
      <small><?php bloginfo('description'); ?></small>
  </h1>
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

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

get_template_part('template-parts/content', get_post_format());

edit_post_link();
 endwhile;

 the_posts_pagination( array(
 	'mid_size'  => 2,
 	'prev_text' => __( '&larr; Previous', 'xtra-starter' ),
 	'next_text' => __( 'Next &rarr;', 'xtra-starter' ),
 ) );

 else : ?>
	<h1><?php _e( 'Sorry No Specified Entry.', 'xtra-starter' ); ?></h1>
<?php endif; ?>
  </div>
  <br>
<?php if(is_active_sidebar('sidebar-prawy')) : ?>
            <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4 sidebar-strony">
              <?php get_sidebar(); ?>
        </div>
<?php endif; ?>
        </div>
        <!-- /.row -->
<?php get_footer(); ?>
