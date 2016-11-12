<div class="content-category">
<!-- First Blog Post -->
      <h2 class="text-center">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
      <p class="lead text-center">
        <?php _e('Author: ','xtra-starter') ?><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author(); ?></a> |
          <?php the_tags(); ?> |
        <span class="glyphicon glyphicon-time"></span><?php _e('Added: ','xtra-starter') ?> <?php the_time('j F, Y'); ?>
     </p>
      <?php if (has_post_thumbnail() ) : ?>
            <!-- <img class="img-responsive" src="http://placehold.it/900x300" alt=""> -->
            <?php the_post_thumbnail('large',array('class'=>'img-responsive img-circle')); ?>
        <hr>
     <?php endif; ?>
        <?php the_excerpt(); ?>
      <a class="btn btn-primary" href="<?php the_permalink(); ?>"><?php _e('Read More', 'xtra-starter')?>Czytaj Więcej <span class="glyphicon glyphicon-chevron-right"></span></a>
<hr>
</div>
<br>
