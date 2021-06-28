<?php
/**
 * Register shortcode last hotel
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\Inc\Shortcodes;

use MINIMO_THEME_VADYM\Inc\Shortcodes;
use MINIMO_THEME_VADYM\Inc\Traits\Singleton;
use WP_Query;

/**
 * Minimo theme
 */
class Hotel {
	use Singleton;

	/**
	 * Construct
	 */
	protected function __construct() {
		add_shortcode( 'hotel', array( $this, 'get_last_hotels' ) );
	}


	/**
	 * Render hotel shortcode.
	 *
	 * @param  array $args Shortcode parameters.
	 */
	public function get_last_hotels( $args ) {
		$args = shortcode_atts(
			array(
				'post_per_page' => 5,
				'orderby'       => '',
				'order'         => 'DESC',
				'view'          => 'carousel',
				'columns'       => 3,
				'post_type'     => 'hotel',
			),
			$args,
			'hotel'
		);

		$hotel = new WP_Query( $args );

		$class_wrapper = 'row';
		$class_item    = 'col-md-12 col-lg-' . intval( 12 / $args['columns'] ) . ' ';

		if ( 'carousel' === $args['view'] ) {
			$class_wrapper = 'main-carousel';
			$class_item   .= 'carousel-cell';
		}

		ob_start();

		Shortcodes::get_shortcodes(
			array(
				'hotel'         => $hotel,
				'class_wrapper' => $class_wrapper,
				'class_item'    => $class_item,
				'view'          => $args['view'],
				'columns'       => $args['columns'],
			),
			'hotel'
		);

		return ob_get_clean();
	}
}
