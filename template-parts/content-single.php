<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- First Blog Post -->
      <h2 class="text-center">
        <?php the_title(); ?>
      </h2>
      <p class="lead text-center">
        <?php _e('Author:', 'xtra-starter') ?>   <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author(); ?></a> |
          <?php the_tags(); ?> |
        <span class="glyphicon glyphicon-time"></span> <?php _e('Added:', 'xtra-starter') ?> <?php the_time('j F, Y'); ?>
      </p>
          <?php if (has_post_thumbnail() ) : ?>
            <!-- <img class="img-responsive" src="http://placehold.it/900x300" alt=""> -->
             <a href="<?php the_post_thumbnail_url('full'); ?>" target="_blank"><?php the_post_thumbnail('full',array('class'=>'img-responsive')); ?></a>
      <hr>
    <?php endif; ?>
        <?php the_content(); ?>
<hr>
<?php
if(function_exists('CFS')) :

$switch_text = CFS()->get( 'switch_entire_text' );
  $t_related = CFS()->get( 'entire_text' );
  $p_related = CFS()->get( 'related_posts' );

      if($p_related != '') : ?>
<div class="row">
  <div class="col-lg-12">
    <h3 class='text-center'>
      <?php
         if($switch_text && $t_related != '') {
            echo $t_related; } else {
                 _e('Entire Posts', 'xtra-starter'); } ?>
    </h3>
    <div id="owl-post" class="owl-carousel">
<?php
foreach ($p_related as $rel) {
  $the_post = get_post( $rel );
  $id = $the_post->ID;
  $url = $the_post->guid;
  $img_url = get_the_post_thumbnail_url( $id, 'medium' );
  ?>
  <div class="item">
    <a href="<?= $url ?>">
       <img class="lazyOwl" data-src="<?= $img_url ?>" alt="Lazy Owl Image">
    </a>
  </div>
<?php } ?>
           </div>
       </div>
    </div>
   <?php endif; //End/ if($p_related != '')  ?>
<?php endif; //End/ if(function_exists('CFS'))  ?>

</div>

<br>
<?php edit_post_link(); ?>
<br>
<div class="pager">
<?php previous_post_link('<span class="prev-link">%link</span>', __('&larr; Previous','xtra-starter')); ?>
<?php next_post_link('<span class="next-link">%link</span>', __('Next &rarr;','xtra-starter')); ?>
</div>
