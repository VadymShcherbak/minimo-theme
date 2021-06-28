<?php
/**
 * Hotel content
 *
 * @package Minimo
 */

$price         = get_post_meta( get_the_ID(), '_hotel_price', true );
$hotel_address = get_post_meta( get_the_ID(), '_hotel_address', true );
$hotel_country = get_post_meta( get_the_ID(), '_hotel_country', true );
?>

<article class="va_post">
	<div class="va-post-img">
		<a href="<?php echo esc_url( get_permalink() ); ?>">
			<?php echo get_the_post_thumbnail(); ?>
		</a>
	</div>
	<div class="va-category">
		<?php echo get_the_term_list( get_the_ID(), 'hotel_category' ); ?>
	</div>
	<?php if ( $price ) : ?>
		<div class="hotel-price">
			<?php esc_html_e( 'Price:' ); ?>
			<span>
											<?php echo esc_html( $price ); ?>$
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
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h4>
	</div>
</article>
