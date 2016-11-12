<section id="finally" class="finally-section">
			<div class="container-fluid finally-content">
					<?php if (get_theme_mod('fin_t_h', 'Add Text Header', 'xtra-starter')): ?>
						<h3 data-aos="flip-up" class="finally-heading text-center">
							<?php echo esc_html(get_theme_mod('fin_t_h', __('Add Text Header', 'xtra-starter'))); ?>
						</h3>
				  <?php endif; ?>
			<div class="row">
					<?php $repeater_value = get_theme_mod( 'set_fin_fr', array(
						array(
							'font_awesome' => 'fa fa-thumbs-o-up',
							'heading_text' => esc_attr__( 'Add Text Header', 'xtra-starter' ),
							'content_text' => lorem_ipsum(300),
							'link_text' => __( 'Read More', 'xtra-starter' ),
							'link_url'  => 'https://xtras.pl/',
							'aos_effect' => 'fade-right',
						),
						array(
							'font_awesome' => 'fa fa-flag',
							'heading_text' => esc_attr__( 'Add Text Header', 'xtra-starter' ),
							'content_text' => lorem_ipsum(300),
							'link_text' => __( 'Read More', 'xtra-starter' ),
							'link_url'  => 'https://rafalolszewicz.pl/',
							'aos_effect' => 'fade-down',
						),

						array(
							'font_awesome' => 'fa fa-desktop',
							'heading_text' => esc_attr__( 'Add Text Header', 'xtra-starter' ),
							'content_text' => lorem_ipsum(300),
							'link_text' => __( 'Read More', 'xtra-starter' ),
							'link_url'  => 'https://xtras.pl/',
							'aos_effect' => 'fade-up',
						),
						array(
							'font_awesome' => 'fa fa-rocket',
							'heading_text' => __( 'Add Heading Text', 'xtra-starter' ),
							'content_text' => lorem_ipsum(300),
							'link_text' => __( 'Read More', 'xtra-starter' ),
							'link_url'  => 'https://rafalolszewicz.pl/',
							'aos_effect' => 'fade-left',
						),
								) ); ?>
								<?php foreach ( $repeater_value as $row ) : ?>
									<!-- Boxes de Acoes -->
					    	<div  data-aos="<?php echo $row['aos_effect'] ? esc_html($row['aos_effect']) : ''?>" class="col-xs-12 col-sm-6 col-lg-3">
								<div class="box">
		<div class="icon">
				<?php if ($row['font_awesome']): ?>
					<div class="image">
						<i class="fa <?php echo esc_html($row['font_awesome']); ?>"></i>
					</div>
				<?php endif; ?>
							<div class="info">
								<h3 class="title text-center"><?php echo esc_html($row['heading_text']); ?></h3>
								    <?php if ($row['content_text']): ?>
											<p>
											<?php echo esc_html($row['content_text']) ; ?>
											</p>
										<?php endif; ?>

									<div class="more">

											<?php if ($row['link_url'] !=''): ?>
												<a href="<?php echo $row['link_url'] ?  esc_url_raw( $row['link_url'] ) : ''?>" title="Title Link" target="_blank">
											<?php endif; ?>

											<?php if ($row['link_text'] !=''): ?>
													<?php echo $row['link_text'] ? esc_html($row['link_text']) : ''?> <i class="fa fa-angle-double-right"></i>
											<?php endif; ?>

											<?php if ($row['link_url'] !=''): ?>
												</a>
											<?php endif; ?>

									</div>


						 </div>
	</div>
							<div class="space"></div>
						</div>
					</div>
						<?php endforeach; ?>
		</div>
	</div>
</section>
