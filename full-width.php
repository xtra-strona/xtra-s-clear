<?php get_header();
/*
Template Name: Full Width (Pełny Rozmiar)
*/
?>
<?php if(has_post_thumbnail()) : ?>
      <div class="parallax-window full-paralax" data-parallax="scroll" data-image-src="<?php the_post_thumbnail_url(); ?>">
        <!-- First Blog Post -->
              <h1 data-aos="zoom-in" class="full-title">
                <?php the_title(); ?>
              </h1>
     </div>
           <?php endif; ?>
<?php if(is_front_page()) : ?>
    <?php else: ?>
    <!-- Page Content -->
    <div class="container-full">
<?php endif; ?>
        <div class="row">
                <div class="col-md-12">
  <?php if(!has_post_thumbnail()) : ?>
    <h2 class="text-center">
      <?php the_title(); ?>
    </h2>
      <?php endif; ?>
  <?php while (have_posts()) : the_post();
     get_template_part('template-parts/content','full' );
          if(comments_open()) :
              comments_template();
                 endif;
                      endwhile;
               ?>
</div>
        </div>
        <!-- /.row -->
<?php get_footer(); ?>
