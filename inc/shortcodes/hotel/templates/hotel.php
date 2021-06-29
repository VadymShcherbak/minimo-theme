<?php
/**
 * Last hotels
 *
 * @package Minimo
 * @var array $args Args data.
 */

?>

<h3 class="last-hotels">Last Hotels</h3>
<?php if ( isset( $args['hotel'] ) && ! empty( $args['hotel'] ) ) : ?>
	<div class="<?php echo esc_attr( $args['class_wrapper'] ); ?>" <?php echo 'carousel' === $args['view'] ? esc_attr( 'data-columns=' . $args['columns'] ) : ''; ?>>
		<?php while ( $args['hotel']->have_posts() ) : ?>
			<?php $args['hotel']->the_post(); ?>

			<div class="<?php echo esc_attr( $args['class_item'] ); ?>">
				<div class="post-preview">
					<?php get_template_part( '/template-parts/hotel', 'content' ); ?>
				</div>
			</div>

		<?php endwhile; ?>
	</div>
<?php endif; ?>
