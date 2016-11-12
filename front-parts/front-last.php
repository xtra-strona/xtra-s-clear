<?php
$f_he = get_theme_mod('frlast_heading', esc_attr__('Add Heading', 'xtra-starter') );
$img_l_u = get_theme_mod('l_img_url', 'https://xtras.pl/');
$img_l = get_theme_mod('l_left_img', get_template_directory_uri() . '/assets/img/balon.jpg' );

$img_c_url = get_theme_mod('c_img_url', 'https://xtras.pl/');
$img_l_c = get_theme_mod('l_center_img', get_template_directory_uri() . '/assets/img/dock.jpg' );

$img_r_url = get_theme_mod('r_img_url', 'https://xtras.pl/');
$img_r = get_theme_mod('l_right_img', get_template_directory_uri() . '/assets/img/duck.jpg' );
 ?>
<section id="last" class="last-section">
<div class="cont-back">
<?php if ($f_he): ?>
  <h3 data-aos="fade-top" class="last-heading text-center"><?php echo esc_html($f_he); ?></h3>
<?php endif; ?>
  <div class="container-fluid banner">
      <div class="row content-last">
<?php if ($img_l): ?>
  <div data-aos="flip-right" class="col-md-3 col-sm-3 col-xs-12 block-img-l">
      <a href="<?php echo $img_l_u ? esc_url_raw( $img_l_u ) : ''; ?>" target="_blank">
        <img class="lazy left-img animated fadeInLeft" data-original="<?php echo esc_attr($img_l); ?>" alt="first-image">
      </a>
  </div>
<?php endif; ?>

<?php if ($img_l_c): ?>
  <div data-aos="fade-up" class="col-md-6 col-sm-6 col-xs-12 block-img-c">
      <a href="<?php echo $img_c_url ? esc_url_raw($img_c_url) : ''; ?>" target="_blank">
        <img class="lazy center-img animated fadeInDown" data-original="<?php echo esc_attr($img_l_c); ?>" alt="next-image">
      </a>
  </div>
<?php endif; ?>

<?php if ($img_r): ?>
  <div data-aos="flip-left" class="col-md-3 col-sm-3 col-xs-12 block-img-r">
  <a href="<?php echo $img_r_url ? esc_url_raw($img_r_url) : ''; ?>" target="_blank">
    <img class="lazy right-img animated fadeInRight" data-original="<?php echo esc_attr($img_r); ?>" alt="last-image">
  </a>
  </div>
<?php endif; ?>

      </div>

    </div>

</div>
  </section>
