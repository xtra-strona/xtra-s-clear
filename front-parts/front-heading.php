<section class='<?php echo has_post_thumbnail() ? 'parallax-window-fr' : 'front-heading' ?>' id='front-head'>
  <?php if(has_post_thumbnail()) : ?>
    <div class="fr-head">
      <h1 data-aos="fade-up" class='text-center front-heading-color'>
                <?php bloginfo('name'); ?>
      </h1>
         <h2 data-aos="fade-down" class="fr-desc-head"><?php bloginfo('description'); ?></h2>
            <a data-scroll
   data-options='{
                    "speed": 900,
                    "easing": "easeInOutCubic",
                    "offset": 40
                }' href="<?= esc_html(get_theme_mod('fr_head_id', '#first')); ?>" class=""><i class="fa fa-angle-double-down see-more fa-5x text-center" aria-hidden="true"></i></a>
  </div>
        <br>
  <?php endif; ?>

      <!-- IF DONT HAS POST THUMBNAIL  -->
    <?php if(!has_post_thumbnail()) : ?>
      <h1 class='text-center front-heading-color'>
          <?php bloginfo('name'); ?>
          <small><?php bloginfo('description'); ?></small>
      </h1>
        <?php endif; ?>
</section>
