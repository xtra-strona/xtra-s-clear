<?php get_header(); ?>
<?php if(has_header_image()) : ?>
      <div class="parallax-window" data-parallax="scroll" data-image-src="<?php header_image(); ?>">
        <!-- First Blog Post -->
          <br>
          <br>
          <h2><?php _e('Author Entries: ', 'xtra-starter') ?><?php the_author(); ?></h2>
      </div>
      <br>
    <?php else: ?>
<div class="author-heading">
  <h2 class="text-center author-name"> <?php _e('Author Entries: ') . the_author(); ?></h2>
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
<h3 class="text-center"><?php _e('Choose Aauthor:', 'xtra-starter') ?></h3>
<ul class="list-auth">
  <?php wp_list_authors(); ?>
</ul>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
get_template_part('template-parts/content','author');
edit_post_link();
 endwhile;
 the_posts_pagination( array(
 	'mid_size'  => 2,
 	'prev_text' => __( '&larr; Previous', 'xtra-starter' ),
 	'next_text' => __( 'Next &rarr;', 'xtra-starter' ),
 ) );
 else : ?>
	<h1><?php _e( 'Sorry No Entry The specified Author.', 'xtra-satrter' ); ?></h1>
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
