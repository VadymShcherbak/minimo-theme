<?php
/**
 * Social icon template
 *
 * @var $args - Shortcode parameter
 *
 * @package Minimo
 */

?>

<a href="<?php echo esc_attr( $args['social-link'] ); ?>" class="va-social-icon <?php echo esc_attr( $args['size'] ); ?>">
	<span class="<?php echo esc_attr( $args['color-style'] ); ?>">
		<i class="<?php echo esc_attr( $args['icon'] ); ?>"></i>
	</span>
</a>
