<?php
/**
 * Button shortcode template
 *
 * @var $args - Shortcode parameters
 *
 * @package Minimo
 */

?>

<div class="button-wrapper">
	<a href="<?php echo esc_url( $args['link'] ); ?>" class="<?php echo esc_html( $args['style'] ); ?>">
		<?php echo esc_html( $args['text'] ); ?>
	</a>
</div>
