<?php
/**
 * Custom button template
 *
 * @var $args - Shortcode parameter
 *
 * @package Minimo
 */

$custom_btn_id = uniqid( 'id-' );
?>

<style>
	#<?php echo esc_attr( $custom_btn_id ); ?>.va-custom-btn-wrapper a {
		background-color: <?php echo esc_attr( $args['color-button'] ); ?>;
		color: <?php echo esc_attr( $args['text-color'] ); ?>;
		transition: all .4s ease;
	}
	#<?php echo esc_attr( $custom_btn_id ); ?>.va-custom-btn-wrapper a:hover {
		background-color: <?php echo esc_attr( $args['button-hover-color'] ); ?>;
		color: <?php echo esc_attr( $args['text-color-hover'] ); ?>;
	}
</style>
<div class="va-custom-btn-wrapper" id="<?php echo esc_attr( $custom_btn_id ); ?>">
	<a href="<?php echo esc_attr( $args['link'] ); ?>">
		<i class="<?php echo esc_attr( $args['icon'] ); ?>"></i>
		<?php echo esc_html( $args['text'] ); ?>
	</a>
</div>
