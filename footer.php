<?php if(is_front_page() && !is_home()) : ?>

<?php else: ?>
    </div>
<?php endif; ?>
<!-- /.container -->
<!-- Footer -->
<div id="footer-container">

    <footer>

        <div class="row">

            <div class="col-lg-12 footer-flex">

                  <?php if(get_theme_mod( 'footer_copy')) : ?>
                    <p class="copy"><?php _e('Copyright', 'xtra-starter') ?> &copy; <?php echo esc_html( get_theme_mod( 'footer_copy', esc_attr__( get_bloginfo('name') ) ) ); ?> <?php echo date('Y'); ?></p>
                  <?php else : ?>
                    <p class="copy"><?php _e('Copyright', 'xtra-starter') ?> &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>
                  <?php endif; ?>

                            <?php if(get_theme_mod('footer_facebook') || get_theme_mod('footer_tweeter') || get_theme_mod('footer_youtobe') || get_theme_mod('footer_google') ) : ?>
                                    <ul class="list-inline footer-social">
                                        <?php if(get_theme_mod('footer_facebook')) : ?><li><a href="<?php echo esc_html( get_theme_mod( 'footer_facebook', esc_attr__( 'https://pl-pl.facebook.com/', 'starter' ) ) ); ?>" target="_blank"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></li><?php endif; ?>
                                        <?php if(get_theme_mod('footer_tweeter')) : ?><li><a href="<?php echo esc_html( get_theme_mod( 'footer_tweeter', esc_attr__( 'https://twitter.com/', 'starter' ) ) ); ?>" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li><?php endif; ?>
                                        <?php if(get_theme_mod('footer_google')) : ?><li><a class="google-plus" href="<?php echo esc_html( get_theme_mod( 'footer_google', esc_attr__( 'https://plus.google.com/', 'starter' ) ) ); ?>" target="_blank"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a></li><?php endif; ?>
                                        <?php if(get_theme_mod('footer_youtobe')) : ?><li><a href="<?php echo esc_html( get_theme_mod( 'footer_youtobe', esc_attr__( 'https://www.youtube.com/', 'starter' ) ) ); ?>" target="_blank"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a></li><?php endif; ?>
                                      </ul>
                            <?php endif; ?>

                  <?php
                  if ( has_nav_menu( 'footer-menu' ) ) {
                       wp_nav_menu( array( 'theme_location' => 'footer-menu', 'items_wrap' => '<ul class="list-inline footer-menu">%3$s</ul>' ) );
                  } ?>
            </div><!-- /.col-lg-12 -->

        </div> <!-- /.row -->

          <div class="scroll-top-wrapper ">
            <span class="scroll-top-inner">
            <a class="page-scroll" href="html"><i class="fa fa-2x fa-arrow-circle-up"></i></a>
            </span>
          </div>

    </footer>

</div><!-- /#footer-container -->

  <div class="info-cookies"></div>

<?php  wp_footer(); ?>

<?php if ( true == get_theme_mod( '1_foot_cookie', true ) ) : ?>
<script src="<?php bloginfo('template_directory') ?>/assets/jquery-cookiebar/jquery-cookiebar-min.js" type="text/javascript"></script>
<?php endif; ?>

<?php get_template_part('inc/footer-script'); ?>

</body>
</html>
