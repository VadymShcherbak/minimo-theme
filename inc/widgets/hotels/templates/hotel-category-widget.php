<?php
/**
 * Hotel widget template
 *
 * @package Minimo
 */

?>

<section class="va-category-hotel-widget">
	<div class="va-hotel-widget-wrapper">
		<?php
		$terms = get_terms(
			array(
				'taxonomy' => 'hotel_category',
			)
		);
		if ( ! is_wp_error( $terms ) && ! empty( $terms ) ) :
			?>
		<ul>
			<?php foreach ( $terms as $term ) : ?>
				<li>
					<a href="<?php echo esc_url( get_term_link( $term->slug, 'hotel_category' ) ); ?>">
						<?php echo esc_html( $term->name ); ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>
	</div>
</section>
