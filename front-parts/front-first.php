<section class='first-section' id='first'>
<?php $fir_h = esc_html( get_theme_mod( 'fir_heading_h1', esc_attr__( 'Add Heading Text', 'xtra-starter' ) ) ) ?>
  <?php if ($fir_h): ?>
    <h3 data-aos="fade-left" class="first-heading text-center"><?= $fir_h ?></h3>
  <?php endif; ?>
<div class="container-fluid">
        <div class="row first-row">
            <div data-aos="fade-up" class="col-md-7">
            <?php $left_h = esc_html( get_theme_mod( 'left_heading_h3', esc_attr__( 'Add Left Heading Text', 'xtra-starter' ) ) ) ?>
            <?php if ($left_h): ?>
              <h3 class="text-center color-h3"><?= $left_h ?></h3>
            <?php endif; ?>
            <?php $left_txt_p = esc_html( get_theme_mod( 'left_heading_p', esc_attr__( lorem_ipsum(450), 'xtra-starter' ) ) ); ?>
                    <?php if ($left_txt_p): ?>
                      <p class="cont-text text-center">
                        <?= $left_txt_p ?>
                      </p>
                    <?php endif; ?>
                      <?php $img_top = get_theme_mod( 'left_f_img', get_template_directory_uri() . '/assets/img/pociag.jpg'); ?>
                    <?php if ($img_top): ?>
                      <img class='lazy img-fluid center-block' data-original="<?php echo $img_top ?>"  alt="image-first" />
                    <?php endif; ?>
              <?php $head_nx = esc_html( get_theme_mod( 'left_bottom_h3', esc_attr__( 'Add Heading Text', 'xtra-starter' ) ) ) ?>
                <?php if ($head_nx): ?>
                    <h3 class='text-center color-h3'>
                      <?= $head_nx ?>
                    </h3>
                <?php endif; ?>
     <?php $l_boot = esc_html( get_theme_mod( 'left_bottom_p', esc_attr__( lorem_ipsum(450), 'xtra-starter' ) ) ) ?>
        <?php if ($l_boot): ?>
          <p class='last cont-text'>
            <?= $l_boot ?>
          </p>
        <?php endif; ?>
            </div>
                      <div data-aos="fade-down" class="col-md-5 first-heading">
                        <?php $r_he = esc_html( get_theme_mod( 'fr_right_h3', esc_attr__( 'Add Right Heading Text', 'xtra-starter' ) ) ) ?>
                                  <?php if ($r_he): ?>
                                    <h3 class="text-center next color-h3"><?= $r_he ?></h3>
                                  <?php endif; ?>
                            <?php $r_he_p = esc_html( get_theme_mod( 'right_heading_p', esc_attr__( lorem_ipsum(600), 'xtra-starter' ) ) ) ?>
                                  <?php if ($r_he_p): ?>
                                    <blockquote>
                                      <p class='cont-text'>
                                        <?= $r_he_p ?>
                                      </p>
                                    </blockquote>
                                  <?php endif; ?>
<?php $youtobe_first = esc_html( get_theme_mod('fr_right_youtobe', 'kpA-PcP80Lk') );
              // $you_special = htmlspecialchars_decode($youtobe_first);
if ($youtobe_first): ?>
                  <div class="embed-responsive embed-responsive-16by9">
                    <div class="lazyYT" data-youtube-id="<?= $youtobe_first ?>" data-ratio="16:9"><?php _e('loading...') ?></div>
                  </div>
<?php endif; ?>
                            <br>
                              <?php $image = get_theme_mod( 'fr_image_demo', '' ); ?>
                              <?php if ($image): ?>
                                <img class='lazy img-fluid center-block' data-original="<?php echo esc_url( $image ); ?>" alt="image-4" />
                              <?php endif; ?>
                      </div>
         </div>
</div>

</section>
