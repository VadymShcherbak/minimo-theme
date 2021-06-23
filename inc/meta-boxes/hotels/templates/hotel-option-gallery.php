<?php
/**
 * Hotel option gallery
 *
 * @package Minimo
 * @var array $args Args data.
 */

?>

<div id="gallery-minimo">
	<label><?php echo esc_html( $args['title'] ); ?></label>
	<button class="button va-custom-img">
		<?php esc_html__( 'Add photo hotel', 'minimo' ); ?>
	</button>
	<input type="hidden" class="<?php echo esc_html( $args['class'] ); ?>" name="<?php echo esc_html( $args['name'] ); ?>" value="<?php echo esc_html( ( $args['id_images'] ) ? implode( ',', $args['id_images'] ) : '' ); ?>">
	<div class="va-custom-img-wrapper">
		<?php if ( $args['id_images'] ) : ?>
			<?php foreach ( $args['id_images'] as $id_image ) : ?>
				<div class="va-custom-img-gallery" data-id="<?php echo esc_html( $id_image ); ?>">
					<img src="<?php echo esc_url( wp_get_attachment_url( $id_image ) ); ?>" alt="hotel img">
					<button class="va-remove-img">
						<i class="fas fa-times"></i>
					</button>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
</div>
