<?php
/**
 * Register shortcode last hotel
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\inc\shortcodes;

use MINIMO_THEME_VADYM\Inc\Traits\Singleton;

/**
 * Minimo theme
 */
class Last_Hotels {
	use Singleton;

	/**
	 * Construct
	 */
	protected function __construct() {
		add_shortcode( 'last_hotels', array( $this, 'get_last_hotels' ) );
	}

	/**
	 * Get 5 last hotels.
	 */
	public function get_last_hotels() {
		$last_hotels = get_posts(
			array(
				'numberposts' => 5,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'post_type'   => 'hotel',
			)
		);

		ob_start();

		get_template_part(
			'inc/shortcodes/templates/last',
			'hotels',
			array(
				'last_hotels' => $last_hotels,
			)
		);

		return ob_get_clean();
	}
}