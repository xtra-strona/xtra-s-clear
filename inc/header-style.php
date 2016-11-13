<style media="screen">

<?php
$defaults_f_first = array(
  'background'    => '#0a0630',
  'border-t'   => '#056c44',
);
$value_f_first = get_theme_mod( 'fr_f_bckg', $defaults_f_first );

$defaults_f_f = array(
  'fir_h'    => '#f23212',
  'text_h'   => '#0292fc',
  'cont_txt'  => '#eda906',
);
$value_f_f = get_theme_mod( 'f_f_t_c', $defaults_f_f );
 ?>

.first-section {
    background-color: <?= $value_f_first['background'] != '' ? $value_f_first['background'] : '' ?>;
    border-top: .2rem solid <?= $value_f_first['border-t'] != '' ? $value_f_first['border-t'] : '' ?>;
}

.first-section .first-heading {
  color: <?= $value_f_f['fir_h'] != '' ? $value_f_f['fir_h'] : '' ?>;
  /*margin-top: -2rem;*/
}

.first-section .color-h3 {
  color: <?= $value_f_f['text_h'] != '' ? $value_f_f['text_h'] : '' ?>;
}
.first-section .cont-text {
  color: <?= $value_f_f['cont_txt'] != '' ? $value_f_f['cont_txt'] : '' ?>;
  font-size: 1.5rem;
}

<?php if(has_post_thumbnail()) : ?>
 .parallax-window-page {
background-image:url("<?php the_post_thumbnail_url(); ?>");
background-repeat: no-repeat;
   background-size: cover;
   background-attachment: fixed;
   background-position: center top;
 }
 <?php endif ?>

<?php if(has_header_image()) : ?>
 .parallax-window-header {
background-image:url("<?php header_image(); ?>");
background-repeat: no-repeat;
   background-size: cover;
   background-attachment: fixed;
   background-position: center top;
 }
    <?php endif ?>

<?php
$parallax_w_fr = esc_url(get_the_post_thumbnail_url());
$fr_head = esc_attr(get_theme_mod('color_head', 'rgba(18,16,15,0.83)' ));
          if ($parallax_w_fr): ?>
.parallax-window-fr {
background-image:url("<?= $parallax_w_fr ?>");
background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  background-position: center top;
}
<?php endif;
if ($fr_head !=''): ?>
.fr-head {
  background-color: <?= esc_attr($fr_head) ?>;
  min-height: 100vh;
}
<?php endif;
$head_scrool = array(
  'b_c'    => 'rgba(7, 34, 41, 0.5)',
  'b_h'   => 'rgba(9, 79, 117, 0.28)',
  'r_c'  => 'rgba(9, 77, 76, 0.5)',
  'r_h'    => '#ff00c6',
  'i_c'   => '#ff0',
  'i_h'  => '#e26711',
);
$h_s = get_theme_mod( 'sc_col', $head_scrool );
if($h_s != '') : ?>
.parallax-window-fr  i {
  color: <?= $h_s['i_c'] ?>;
  border: 4px solid <?= $h_s['r_c'] ?>;
  background-color: <?= $h_s['b_c'] ?>;
}
.parallax-window-fr  i:hover {
  color: <?= $h_s['i_h'] ?>;
  border: 2px solid <?= $h_s['r_h'] ?>;
  background-color: <?= $h_s['b_h'] ?>;
}
<?php
     endif;
        $nex_sec_back = esc_url(get_theme_mod('f_parralax_img', get_template_directory_uri() . '/assets/img/dock.jpg'));
        $nex_bg_color = esc_attr(get_theme_mod('color_next_s', 'rgba(14, 9, 60, 0.88)' ));
        $nex_h_color = esc_attr(get_theme_mod('color_next_h', '#e97616' ));

        if ($nex_sec_back !=''): ?>
.next-section {
background-image:url("<?= $nex_sec_back ?>");
background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  background-position: center top;
}
<?php endif;
if ($nex_bg_color !=''): ?>
.next-team {
  background-color: <?= $nex_bg_color; ?>;
  border-top: 4px solid rgba(255, 255, 255, 0.63);
}
<?php endif;
if($nex_h_color !='') : ?>
.next-section .next-heading {
  color:<?= $nex_h_color; ?>;
  font-size: 4rem;
}
<?php endif; ?>

<?php $defaults_gead_c = array(
    'first'    => '#ff00c6',
    'next'   => '#ff0',
		'last'  => 'rgba(30,24,5,0.5)',
);
$value = get_theme_mod( 'c_t_e', $defaults_gead_c );
if($value != '') : ?>
.front-heading-color {
  padding: 6rem .3rem 1rem;
  font-size: 90px;
  color:<?= get_theme_mod('color_text_head','#ff0'); ?>;
  text-shadow: <?= $value['first']; ?> 0 -1px 4px,<?= $value['next']; ?> 0 -2px 10px, <?= $value['last']; ?> 0 -10px 20px;
}
<?php endif; ?>

<?php
$hed_desc_color = esc_attr(get_theme_mod('color_desc_head', '#FF6C00' ));
if($hed_desc_color != '') : ?>
.fr-desc-head {
  color: <?= $hed_desc_color; ?>;
  padding: 10px;
  font-size: 50px;
}
<?php endif; ?>
<?php $port_sec_back = get_theme_mod('fr_p_img', get_template_directory_uri() . '/assets/img/space.jpg' );
    if ($port_sec_back): ?>
.portfolio {
background-image:url("<?= $port_sec_back ?>");
background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  background-position: center top;
}
<?php endif;

$defaults_port = array(
  'background'    => 'rgba(3, 18, 30, 0.92)',
  'border'   => '#d8a105',
);
$value_port = get_theme_mod( 'fr_port_b', $defaults_port );
if($value_port != '') : ?>

.port-cont {
  background-color: <?= $value_port['background']; ?>;
  border-top: 6px solid <?= $value_port['border']; ?>;
  padding-bottom: 2rem;
}
<?php endif;
$defaults_port_t = array(
  'background'    => 'rgba(3, 18, 30, 0.92)',
  'border'   => '#d8a105',
);
$value_port_t = get_theme_mod( 'fr_port_t', $defaults_port_t );
if($defaults_port_t != '') : ?>

.fr-port-h3 {
color: <?= $value_port_t['color']; ?>;
font-size: 4rem;
background: <?= $value_port_t['background']; ?>;
padding: 10px;
margin-top: 0;
border-bottom: 2px solid <?= $value_port_t['border-b']; ?>;
  }
<?php endif; ?>
<?php $fin_sec_back = get_theme_mod('fin_parallax_img', get_template_directory_uri() . '/assets/img/photo-manipulation.jpg' );
if ($fin_sec_back !=''): ?>
  .finally-section {
background-image:url("<?= $fin_sec_back ?>");
background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center top;
  }
<?php endif;
$defaults_fin = array(
  'background'    => 'rgba(0,0,0,0.83)',
  'border-t' => '#fff',
  'text'   => '#d8a105',
);
$value_fin = get_theme_mod( 'fr_fin_c', $defaults_fin );
if($defaults_fin != '') : ?>
.finally-content {
  background-color: <?= $value_fin['background']; ?>;
  padding-top: 100px;
  border-top: 4px solid <?= $value_fin['border-t']; ?>;
  padding-bottom: 100px;
}
.finally-content .finally-heading {
  color: <?= $value_fin['text']; ?>;
  margin-top: -50px;
  padding-bottom: 50px;
  font-size: 4rem;
}
<?php endif; ?>

</style>
