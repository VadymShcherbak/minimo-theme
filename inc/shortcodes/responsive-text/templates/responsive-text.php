<?php
/**
 * Responsive text template
 *
 * @var $args - Shortcode parameters
 *
 * @package Minimo
 */

$responsive_text_id = uniqid( 'id-' );
?>

<style>
	#<?php echo esc_attr( $responsive_text_id ); ?>.va-responsive-text p {
		color: <?php echo esc_attr( $args['color'] ); ?>;
		font-size: <?php echo esc_attr( $args['desktop-size'] ); ?>;
	}
	@media (max-width: 768px) {
		#<?php echo esc_attr( $responsive_text_id ); ?>.va-responsive-text p {
			font-size: <?php echo esc_attr( $args['tablet-size'] ); ?>;
		}
	}
	@media (max-width: 414px) {
		#<?php echo esc_attr( $responsive_text_id ); ?>.va-responsive-text p {
			font-size: <?php echo esc_attr( $args['mobile-size'] ); ?>;
		}
	}
</style>
<div class="va-responsive-text" id="<?php echo esc_attr( $responsive_text_id ); ?>">
	<p>
		<?php echo esc_html( $args['text'] ); ?>
	</p>
</div>
