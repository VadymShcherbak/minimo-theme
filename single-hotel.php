<?php
/**
 * Single Hotel Page
 *
 * @package Minimo
 */

get_header();
?>

	<section class="va-single-post-wrapper">
		<div class="container">
			<?php
			if ( have_posts() ) :
				?>
					<?php
					while ( have_posts() ) :
						?>
						<?php
						the_post();
						$price         = get_post_meta( get_the_ID(), '_hotel_price', true );
						$hotel_address = get_post_meta( get_the_ID(), '_hotel_address', true );
						$hotel_country = get_post_meta( get_the_ID(), '_hotel_country', true );
						$hotel_gallery = get_post_meta( get_the_ID(), '_hotel_gallery', true );
						?>
						<article class="va_post">
							<div class="va-single-post-img">
								<?php echo get_the_post_thumbnail(); ?>
							</div>
							<div class="va-category">
								<?php echo get_the_term_list( get_the_ID(), 'hotel_category' ); ?>
							</div>
							<?php if ( $price ) : ?>
								<div class="hotel-price">
									<?php esc_html_e( 'Price:' ); ?>
									<span>
										<?php echo esc_html( $price ); ?>
									</span>
								</div>
							<?php endif; ?>
							<?php if ( $hotel_address || $hotel_country ) : ?>
								<div class="hotel-location">
									<?php echo esc_html( $hotel_country ); ?> <br>
									<?php echo esc_html( $hotel_address ); ?>
								</div>
							<?php endif; ?>
							<div class="va-post-title">
								<h4>
									<?php the_title(); ?>
								</h4>
							</div>
							<div class="va-post-content va-single-post-content">
								<?php the_content(); ?>
							</div>
							<?php if ( isset( $hotel_gallery ) && ! empty( $hotel_gallery ) ) : ?>
								<div class="main-carousel">
									<?php foreach ( $hotel_gallery as $hotel_img ) : ?>
										<div class="carousel-cell carousel-img-size">
											<img src="<?php echo esc_url( wp_get_attachment_url( $hotel_img ) ); ?>" alt="Hotel img">
										</div>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>
						</article>
					<?php endwhile; ?>
			<?php endif; ?>
			<div class="va-post-comments">
				<?php comments_template(); ?>
			</div>
		</div>
	</section>

<?php
get_footer();
