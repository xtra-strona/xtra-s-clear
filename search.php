
<?php get_header(); ?>
<?php
      global $wp_query;
      $total_results = $wp_query->found_posts;
?>
<?php if(has_header_image()) : ?>
  <div class="parallax-window-header">
    <div class="parallax-window">
        <!-- First Blog Post -->
          <br>
          <br>

<h2><?php _e('Search Results For:', 'xtra-starter') ?> <?php the_search_query(); ?> </h2>
    </div>
  </div>
      <br>
    <?php else : ?>
      <div class="search-heading">
          <h1 class="text-center"><?php _e('Search Results For:', 'xtra-starter') ?> <?php the_search_query(); ?> </h1>
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

<h2><?php _e('Your Search Results Is:', 'xtra-starter') ?> <?php echo $total_results; ?></h2>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

get_template_part('template-parts/content','search');

edit_post_link();
 endwhile;

 the_posts_pagination( array(
 	'mid_size'  => 2,
 	'prev_text' => __( '&larr; Previous', 'xtra-starter' ),
 	'next_text' => __( 'Next &rarr;', 'xtra-starter' ),
 ) );

 else : ?>
	<h1 style="line-height: 60px;"><?php _e( 'Your Search Word ', 'xtra-starter' ); ?> <span class="search-res-h1"><?php the_search_query(); ?></span><?php _e( ' Does Not Exsist', 'xtra-starter' ); ?></h1>
  <div class="search-form">
      <?php get_search_form(); ?>
  </div>
<br>
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
