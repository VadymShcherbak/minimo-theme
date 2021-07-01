<?php
/**
 * Carousel shortcode template
 *
 * @var $args - Shortcode parameters
 *
 * @package Minimo
 */

?>

<div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true }'>
	<?php echo do_shortcode( $args['content'] ); ?>
</div>
