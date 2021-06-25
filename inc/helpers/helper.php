<?php
/**
 * Helper Function
 *
 * @package Minimo
 */

/**
 * Ar.
 *
 * @param  mixed $data Data.
 */
function ar( $data ) {
	echo '<pre>';
	print_r( $data );
	echo '</pre>';
}

/**
 * Show template meta boxes.
 *
 * @param array $args Attribute.
 */
function va_show_template_meta_box( $args ) {
	get_template_part(
		'inc/meta-boxes/hotels/templates/hotel-option',
		$args['type'],
		$args
	);
}
