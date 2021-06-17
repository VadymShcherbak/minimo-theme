<?php
/**
 * Hotel posts page
 *
 * @package Minimo
 */

get_header();
?>

	<section class="va-blog-wrapper">
		<div class="container">
					<?php
					if ( have_posts() ) :
						?>
						<div class="row spacing-col-1">
							<?php
							while ( have_posts() ) :
								?>
								<?php the_post(); ?>
								<div class="col-lg-6 col-md-6 col-sm-12">
									<div class="va_post">
										<div class="va-post-img">
											<a href="<?php echo esc_url( get_permalink() ); ?>">
												<?php echo get_the_post_thumbnail(); ?>
											</a>
										</div>
										<div class="va-category">
											<?php echo get_the_term_list( get_the_ID(), 'taxonomy' ); ?>
										</div>
										<div class="va-post-title">
											<h4>
												<a href="<?php the_permalink(); ?>">
													<?php the_title(); ?>
												</a>
											</h4>
										</div>
										<div class="va-post-content">
											<?php the_excerpt(); ?>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
							<div class="va-blog-pagination col-lg-12">
								<?php
								the_posts_pagination(
									array(
										'prev_text' => '<i class="fal fa-angle-left"></i>',
										'next_text' => '<i class="fal fa-angle-right"></i>',
									)
								);
								?>
							</div>
						</div>
					<?php endif; ?>
		</div>
	</section>

<?php
get_footer();
