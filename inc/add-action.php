<?php
   add_action('wp_head','hook_css');
function hook_css() { ?>
	<style media="screen">
<?php if( !has_header_image() && is_home() ) : ?>
body {
padding-top:70px;
}
		<?php endif; ?>
<?php if(!has_post_thumbnail() && !is_home() && !is_search() && !is_single() && !is_front_page() ) : ?>
body {
padding-top:70px;
}
<?php endif;  ?>
<?php if(!has_post_thumbnail() && is_single() ) : ?>
.single{
margin-top: 12rem;
}
<?php endif;  ?>
<?php if(has_header_image() && !is_page() ) : ?>
body{
padding-top:0px;
}
<?php endif; ?>
<?php if(!has_post_thumbnail() && is_page() && !is_front_page()) : ?>
body{
padding-top:90px;
}
<?php endif; ?>
<?php if(!has_header_image() && is_category()) : ?>
body{
padding-top:70px;
}
<?php endif;  ?>
<?php if(has_header_image() && is_search() ) : ?>
/*body{
padding-top:70px;
}*/
<?php endif; ?>
<?php
$bcolor_clfr = esc_attr(get_theme_mod('1_clear_fr','#3b3c44'));
$ptop_clfr = esc_attr(get_theme_mod('2_clear_fr','9'));

if(has_post_thumbnail() && is_page_template('clear-front.php') ) : ?>
body {
  background-color:<?php if ($bcolor_clfr != ''){ echo $bcolor_clfr; }?>;
  padding-top: 4rem;
}
.parallax-window h1 {
padding-top:70px;
}
<?php endif; ?>

<?php if(!has_post_thumbnail() && is_page_template('clear-front.php') ) : ?>
body {
background-color:<?php if ($bcolor_clfr != ''){ echo $bcolor_clfr; }?>;
padding-top:<?php if ($ptop_clfr != ''){ echo $ptop_clfr; } ?>rem;
}
<?php endif; ?>

<?php
$bc_fr = esc_attr(get_theme_mod('1_front_options','#3b3c44'));
if (is_front_page()){ ?>
  body {
  background-color:<?php if ($bc_fr != ''){ echo $bc_fr; }?>;
  }
<?php } ?>

	</style>
<?php } ?>
