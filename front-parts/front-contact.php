<?php
  $form = esc_html(get_theme_mod('fr_form','[pirate_forms]'));
  $contact = htmlspecialchars_decode($form);

        $map = esc_html(get_theme_mod('fr_map', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387145.8664619267!2d-74.25820176275165!3d40.705311021542094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNowy+Jork%2C+Stany+Zjednoczone!5e0!3m2!1spl!2spl!4v1475593021494" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'));
        $fr_map = htmlspecialchars_decode($map);
?>

<section id="contact" class="front-contact">
  <div class="container-fluid">
    <h3 class='text-center heading-contact'><?php echo esc_html(get_theme_mod('kirki_form_heading', __('Add Heading', 'xtra-starter'))); ?></h3>
<div class="row">
  <div data-aos="flip-up" class="col-md-6 front-form">
      <h3 class="heading-cf text-center"><?php echo esc_html(get_theme_mod('form_heading_txt', __('Contact Form', 'xtra-starter'))); ?></h3>
      <br>
      <?php if ($contact): ?>
        <?php echo do_shortcode( $contact ); ?>
          <span class="hyper-l"></span>
      <?php endif; ?>

  </div> <!-- End col-md-5 front-form -->

      <div data-aos="flip-right" class="col-md-6 front-map">
<?php if ($fr_map): ?>
  <!-- <iframe src="https://www.google.pl/maps/place/Psie+Pole,+Wa%C5%82brzych/@50.767" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
  <?php echo $fr_map; ?>

<?php endif; ?>

      </div>  <!-- End col-md-7 front-form -->
</div>

  </div>
</section>  <!-- End front-contact -->
