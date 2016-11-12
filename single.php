<?php get_header(); ?>
    <!-- Page Content -->
    <div class="container single">
        <div class="row">
          <?php if(is_active_sidebar('sidebar-prawy')) : ?>
                      <!-- Blog Entries Column -->
<div class="col-md-8">
                   <?php else : ?>
    <div class="col-md-12">
                    <?php endif; ?>
    <?php while (have_posts()) : the_post();
       get_template_part('template-parts/content','single' );
            if(comments_open()) :
                comments_template();
                   endif;
                        endwhile;
                                   ?>
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
