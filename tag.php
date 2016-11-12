<?php get_header(); ?>
<?php if(has_header_image()) : ?>
  <div class="parallax-window-header">
    <div class="parallax-window">
        <div class="page-tag">
          <h1 class="text-center"><?php _e('Choose from the available tags: ','xtra-starter') ?></h1>
              <ul class="tag-cloud text-center">
                <li><?php wp_tag_cloud(); ?></li>
              </ul>
      <h2 class="text-center"><?php _e('Selected Tag: ','xtra-starter') ?><span class="single-tag"> <?php single_tag_title(); ?> </span></h2>
        </div>
      </div>
    </div>
      <br>
    <?php else: ?>
      <div class="page-tag">
        <h1 class="text-center"><?php _e('Choose from the available tags: ','xtra-starter') ?></h1>
            <ul class="tag-cloud text-center">
              <li> <?php wp_tag_cloud(); ?> </li>
            </ul>
    <h2 class="text-center"><?php _e('Selected Tag: ','xtra-starter') ?><span class="single-tag"> <?php single_tag_title(); ?> </span></h2>
      </div>
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
get_template_part('template-parts/content','tags');
edit_post_link();
 endwhile;
 the_posts_pagination( array(
 	'mid_size'  => 2,
 	'prev_text' => __( '&larr; Previous', 'xtra-starter' ),
 	'next_text' => __( 'Next &rarr;', 'xtra-starter' ),
 ) );
 else : ?>
	<h1><?php _e( 'Sorry no specified Entry.','xtra-starter' ); ?></h1>
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
