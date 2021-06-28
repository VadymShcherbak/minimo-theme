<?php
/**
 * Hotel option gallery
 *
 * @package Minimo
 * @var array $args Args data.
 */

$id_img_string = $args['value'] ? implode( ',', $args['value'] ) : '';
?>

<div id="gallery-minimo" class="hotel-gallery">
	<label>
		<?php echo esc_html( $args['title'] ); ?>
	</label><br>
	<button class="button va-custom-img">
		<?php echo esc_html__( 'Add photo hotel', 'minimo' ); ?>
	</button>
	<input type="hidden" class="va-custom-img-id" name="<?php echo esc_attr( $args['id'] ); ?>" value="<?php echo esc_attr( $id_img_string ); ?>">
	<div class="va-custom-img-wrapper">
		<?php if ( isset( $args['value'] ) && ! empty( $args['value'] ) ) : ?>
			<?php foreach ( $args['value'] as $id_image ) : ?>
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
