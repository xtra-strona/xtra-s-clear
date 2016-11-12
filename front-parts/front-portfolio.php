<section class='portfolio container-fluid' id='my-portfolio'>
  <div class="row port-cont">
    <h3 data-aos="zoom-out-up" class='text-center fr-port-h3'><?php echo get_theme_mod('fr_port_heading', __('Add Heading Text', 'xtra-starter')) ?></h3>

    <div class="col-lg-12">
<?php $cat = get_theme_mod('category_selection', 1);
$post_query = get_theme_mod('my_setting_port_slider', 6);
 if($cat) : ?>

  <div id="owl-demo">

   <?php
   // WP_Query arguments
   $args = array (
    'cat'                    => $cat,
   	'posts_per_page'         => $post_query,
   );

   // The Query
   $query = new WP_Query( $args );

   // The Loop
   if ( $query->have_posts() ) {
   	while ( $query->have_posts() ) {
   		$query->the_post(); ?>

  <div class="item">
    <h3 class='text-center'><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <a href="<?php the_permalink(); ?>">
    <img class='' src="<?php the_post_thumbnail_url('medium') ?>" alt="portfolio-<?php the_title() ?>" width='300' height='300'/>
    </a>
  </div>

   	<?php }
   } else {
   	// no posts found
   }

   // Restore original Post Data
   wp_reset_postdata();

endif;
  ?>
       </div>
   </div>
</div>
</section>
