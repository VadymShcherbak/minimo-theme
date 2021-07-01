<?php
/**
 * Infobox template
 *
 * @var $args - Shortcode parameters
 *
 * @package Minimo
 */

$uniq_id = uniqid( 'id-' );
?>
<style>
	#<?php echo esc_attr( $uniq_id ); ?> .va-infobox-content h5,
	#<?php echo esc_attr( $uniq_id ); ?> .va-infobox-content p,
	#<?php echo esc_attr( $uniq_id ); ?> .va-infobox-icon i {
		color: <?php echo esc_attr( $args['text-color'] ); ?>;
		transition: all .4s ease;
	}
	#<?php echo esc_attr( $uniq_id ); ?>.va-infobox {
		background-color: <?php echo esc_attr( $args['background'] ); ?>;
		transition: all .4s ease;
	}
	#<?php echo esc_attr( $uniq_id ); ?>.va-infobox:hover{
		background-color: <?php echo esc_attr( $args['bg-color-hover'] ); ?>;
	}
	#<?php echo esc_attr( $uniq_id ); ?>.va-infobox:hover .va-infobox-content h5,
	#<?php echo esc_attr( $uniq_id ); ?>.va-infobox:hover .va-infobox-content p,
	#<?php echo esc_attr( $uniq_id ); ?>.va-infobox:hover .va-infobox-icon i,{
		color: <?php echo esc_attr( $args['text-hover'] ); ?>;
	}
</style>
<div class="va-infobox" id="<?php echo esc_attr( $uniq_id ); ?>">
	<div class="va-infobox-icon">
		<i class="<?php echo esc_attr( $args['icon'] ); ?>"></i>
	</div>
	<div class="va-infobox-content">
		<h5>
			<?php echo esc_html( $args['title'] ); ?>
		</h5>
		<p>
			<?php echo esc_html( $args['text'] ); ?>
		</p>
	</div>
	<div class="va-infobox-btn">
		<a href="<?php echo esc_url( $args['button']['link'] ); ?>">
			<?php echo esc_html( $args['button']['text'] ); ?>
		</a>
	</div>
</div>
