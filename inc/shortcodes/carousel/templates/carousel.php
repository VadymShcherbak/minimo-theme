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
	<?php foreach ( $args['content'] as $content_item ) : ?>
		<div class="carousel-cell carousel-small">
			<?php echo do_shortcode( $content_item ); ?>
		</div>
	<?php endforeach; ?>
</div>
