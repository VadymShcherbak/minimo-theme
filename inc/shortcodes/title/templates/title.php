<?php
/**
 * Title Shortcode template
 *
 *  @var $args - Shortcode parameters
 *
 * @package Minimo
 */

?>

<?php if ( isset( $args['before_title'] ) && ! empty( $args['before_title'] ) ) : ?>
	<div class="va-before-title">
		<?php echo esc_html( $args['before_title'] ); ?>
	</div>
<?php endif; ?>

<?php if ( isset( $args['title'] ) && ! empty( $args['title'] ) ) : ?>
	<div class="va-title">
		<?php echo esc_html( $args['title'] ); ?>
	</div>
<?php endif; ?>

<?php if ( isset( $args['after_title'] ) && ! empty( $args['after_title'] ) ) : ?>
	<div class="va-after-title">
		<?php echo esc_html( $args['after_title'] ); ?>
	</div>
<?php endif; ?>
