<?php get_header();
/*
Template Name: Clear Front Page
*/
 ?>

<?php if(has_post_thumbnail()) : ?>
      <div class="parallax-window-page">
            <div class="parallax-window">

              <h1><?php echo bloginfo('name'); ?></h1>
          <h2><?php echo bloginfo('description'); ?></h2>

            </div>
      </div>
    <br>
<?php endif; ?>

<div class="clear-front container-fluid">

    <?php while (have_posts()) : the_post(); ?>

      <?php the_content(); ?>

    <?php endwhile; ?>
</div>
        <!-- /.row -->
<?php get_footer(); ?>
