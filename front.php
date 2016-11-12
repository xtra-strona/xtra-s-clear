<?php get_header();
/*
Template Name: Front Page (Strona Frontowa)
*/
?>
<div id='front-wrapper' class="fr-wrap">

  <!-- KIRKI SORTABLE CONTENT  -->
      <?php $sortable_front = maybe_unserialize( get_theme_mod( 'my_fr_sort', array( 'heading', 'first', 'next', 'last', 'portfolio', 'finally' ) ) ); ?>
    			<?php if ( ! empty( $sortable_front ) ) : ?>
    <?php foreach ( $sortable_front as $sort_fr ) : ?>
            <?php get_template_part('front-parts/front', $sort_fr ); ?>
    <?php endforeach; ?>
    		<?php endif; ?>

<?php //Ręczne Dodanie Bez Pętli
// get_template_part('front-parts/front','content' ); // Content Section
//   get_template_part('front-parts/front', 'first'); // First Section
//      get_template_part('front-parts/front', 'next');  // Next Section
//         get_template_part('front-parts/front', 'last'); // Last Section
//           get_template_part('front-parts/front','portfolio' ); // Content Section
//             get_template_part('front-parts/front', 'finally'); // Finally Section
//                get_template_part('front-parts/front', 'contact'); // 4 sekcja Kontaktu
?>

</div>
    <!-- /#front-wrapper -->
        <?php edit_post_link(); ?>
<?php get_footer(); ?>
