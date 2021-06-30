<?php
/**
 * Col shortcode template
 *
 * @var $args - Shortcode parameters
 *
 * @package Minimo
 */

?>

<div class="col-<?php echo esc_attr( $args['width'] ); ?>">
	<?php echo do_shortcode( $args['content'] ); ?>
</div>
