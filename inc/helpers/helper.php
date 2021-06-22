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
 * @param array $data Attribute.
 */
function va_show_template_meta_box( $data ) {
	get_template_part(
		'inc/meta-boxes/hotels/templates/hotel-option',
		$data['type'],
		$data
	);
}
