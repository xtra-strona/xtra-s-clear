<?php get_header(); ?>
<br>
<?php if(has_post_thumbnail()) : ?>

  <div class="parallax-window-page">
    <div class="parallax-window">
      <!-- First Blog Post -->
<br>
            <h2>
              <?php the_title(); ?>
            </h2>
    </div>
  </div>


<br>
                         <?php endif; ?>
<?php if(is_front_page()) : ?>
      <?php else: ?>
          <!-- Page Content -->
            <div class="container">
      <?php endif; ?>
               <div class="row">
          <?php if(is_active_sidebar('sidebar-strony')) : ?>
                      <!-- Blog Entries Column -->
                      <div class="col-md-8">
          <?php else : ?>
                <div class="col-md-12">
          <?php endif; ?>
  <?php if(!has_post_thumbnail()) : ?>
    <h2 class="text-center">
      <?php the_title(); ?>
    </h2>
      <?php endif; ?>
  <?php while (have_posts()) : the_post();
     get_template_part('template-parts/content','page' );
          if(comments_open()) :
              comments_template();
                 endif;
                      endwhile;
                        ?>
</div>
<?php if(is_active_sidebar('sidebar-strony')) : ?>
            <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4 sidebar-page">
              <?php get_sidebar('new'); ?>
        </div>
<?php endif; ?>
        </div>
        <!-- /.row -->
<?php get_footer(); ?>
