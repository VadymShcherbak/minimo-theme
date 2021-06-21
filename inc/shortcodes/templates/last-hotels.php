<?php
/**
 * Last hotels
 *
 * @package Minimo
 */

?>

<h4>Last Hotels</h4>
	<ul class="va-last-hotels">
		<?php foreach ( $args['last_hotels'] as $hotel ) : ?>
			<li>
				<a href="<?php echo esc_url( $hotel->guid ); ?>">
					<?php echo esc_html( $hotel->post_title ); ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>

