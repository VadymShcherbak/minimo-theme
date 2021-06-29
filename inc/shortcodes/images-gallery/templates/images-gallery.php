<?php
/**
 * Images gallery
 *
 * @package Minimo
 */

?>

<h3 class="last-hotels">Images Gallery</h3>
<?php if ( isset( $args['images'] ) && ! empty( $args['images'] ) ) : ?>
	<div class="<?php echo esc_attr( $args['class_wrapper'] ); ?>" <?php echo 'grid' === $args['view'] || 'carousel' === $args['view'] ? esc_attr( 'data-columns=' . $args['columns'] ) : ''; ?>>
		<?php foreach ( $args['images'] as $id_images ) : ?>

			<div class="<?php echo esc_attr( $args['class_item'] ); ?>">
				<div class="post-preview">
					<?php echo wp_get_attachment_image( $id_images, $args['image_size'] ); ?>
				</div>
			</div>

		<?php endforeach; ?>
	</div>
<?php endif; ?>
