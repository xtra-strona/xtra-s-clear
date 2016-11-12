<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1 class='text-center'><?php the_title(); ?></h1>
      <div class="embed-responsive embed-responsive-16by9">
        <?php the_content(); ?>
      </div>
</article>
