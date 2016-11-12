<section id="next" class="next-section">
  <div class="container-fluid next-team">
    <h3 data-aos="flip-up" class="next-heading text-center">
      <?php echo esc_html(get_theme_mod('fr_next_heading', esc_attr__('Add Heading Text', 'xtra-starter'))); ?>
    </h3>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="col-lg-12">
            <div class="row pt-md">
<?php $fr_next = get_theme_mod('repeater_fr_next', array(
  array(
    'image_fr_next' => get_template_directory_uri() . '/assets/img/panther.jpg',
    'fa_facebook' => __('https://www.facebook.com/','starter'),
    'fa_youtobe' => __('https://www.youtube.com/','starter'),
    'fa_twitter' => __('https://twitter.com/','starter'),
    'fa_linkedin' => __('https://www.linkedin.com/','starter'),
    'fa_custom' => __('https://www.nasa','starter'),
    'fr_heading' => __('Add Heading','starter'),
    'fr_heading_next' => __('Add Heading Next Text','starter'),
    'fr_content' => __('Add Content Text','starter'),
    'aos_effect_next' => 'fade-right',
    ),

  array(
    'image_fr_next' => get_template_directory_uri() . '/assets/img/frog.jpg',
      'fa_facebook' => __('https://www.facebook.com/','starter'),
      'fa_youtobe' => __('https://www.youtube.com/','starter'),
      'fa_twitter' => __('https://twitter.com/','starter'),
      'fa_linkedin' => __('https://www.linkedin.com/','starter'),
      'fa_custom' => __('https://www.nasa','starter'),
      'fr_heading' => __('Add Heading','starter'),
      'fr_heading_next' => __('Add Heading Next Text','starter'),
      'fr_content' => __('Add Content Text','starter'),
      'aos_effect_next' => 'fade-down',
      ),

    array(
    'image_fr_next' => get_template_directory_uri() . '/assets/img/beautiful.jpg',
        'fa_facebook' => __('https://www.facebook.com/','starter'),
        'fa_youtobe' => __('https://www.youtube.com/','starter'),
        'fa_twitter' => __('https://twitter.com/','starter'),
        'fa_linkedin' => __('https://www.linkedin.com/','starter'),
        'fa_custom' => __('https://www.nasa','starter'),
        'fr_heading' => __('Add Heading','starter'),
        'fr_heading_next' => __('Add Heading Next Text','starter'),
        'fr_content' => __('Add Content Text','starter'),
        'aos_effect_next' => 'fade-up',
        ),

    array(
      'image_fr_next' => get_template_directory_uri() . '/assets/img/sheep.jpg',
        'fa_facebook' => __('https://www.facebook.com/','starter'),
        'fa_youtobe' => __('https://www.youtube.com/','starter'),
        'fa_twitter' => __('https://twitter.com/','starter'),
        'fa_linkedin' => __('https://www.linkedin.com/','starter'),
        'fr_heading' => __('Add Heading','starter'),
        'fr_heading_next' => __('Add Heading Next Text','starter'),
        'fr_content' => __('Add Content Text','starter'),
        'aos_effect_next' => 'fade-left',
        ),
)); ?>
<?php foreach ( $fr_next as $frnex ) : ?>
  <div data-aos="<?php echo esc_html($frnex['aos_effect_next']); ?>" class="col-lg-3 col-md-6 col-sm-6 col-xs-12 profile">
    <div class="img-box">
      <?php  ?>
    <?php
      $img_mod_fr = esc_html( $frnex['image_fr_next'] );
    // $im =   wp_get_attachment_image_url( $img_mod_fr , array('700', '600'), "", array( "class" => "img-responsive" ) );
     $feat_image_url = wp_get_attachment_url( $img_mod_fr );
  if ($feat_image_url) : ?>
<img class='lazy' data-original="<?php echo $feat_image_url ?>" alt="image-profile" />
<?php else : ?>
  <img class='lazy' data-original="<?php echo $img_mod_fr ?>" alt="image-profile" />
<?php endif; ?>
      <ul class="text-center">
      <?php if($frnex['fa_facebook']) : ?><a href="<?php echo esc_url_raw($frnex['fa_facebook']); ?>"><li><i class="fa fa-facebook"></i></li></a><?php endif; ?>
      <?php if($frnex['fa_youtobe']) : ?><a href="<?php echo esc_url_raw($frnex['fa_youtobe']); ?>"><li><i class="fa fa-youtube"></i></li></a><?php endif; ?>
      <?php if($frnex['fa_twitter']) : ?><a href="<?php echo esc_url_raw($frnex['fa_twitter']); ?>"><li><i class="fa fa-twitter"></i></li></a><?php endif; ?>
      <?php if($frnex['fa_linkedin']) : ?><a href="<?php echo esc_url_raw($frnex['fa_linkedin']); ?>"><li><i class="fa fa-linkedin"></i></li></a><?php endif; ?>
      </ul>
    </div>
    <?php if($frnex['fr_heading']) : ?>  <h1 class="text-center"><?php echo esc_html( $frnex['fr_heading']); ?></h1><?php endif ?>
    <?php if($frnex['fr_heading_next']) : ?><h2 class="text-center"><?php echo esc_html( $frnex['fr_heading_next']); ?></h2><?php endif ?>
    <?php if($frnex['fr_content']) : ?><p class="text-center"><?php echo esc_html(  $frnex['fr_content']); ?></p><?php endif ?>
  </div>
<?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
