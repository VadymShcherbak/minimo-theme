<?php
/**
 * Register shortcode Carousel
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\Inc\Shortcodes;

use MINIMO_THEME_VADYM\Inc\Shortcodes;
use MINIMO_THEME_VADYM\Inc\Traits\Singleton;

/**
 * Class Carousel.
 */
class Carousel {
	use Singleton;

	/**
	 * Carousel constructor.
	 */
	protected function __construct() {
		add_shortcode( 'carousel', array( $this, 'render_carousel' ) );
	}


	/**
	 * Render carousel.
	 *
	 * @param array  $args Array parameter.
	 * @param string $content Shortcode content.
	 */
	public function render_carousel( $args, $content ) {
		$args = shortcode_atts(
			array(),
			$args
		);

		$args['content'] = $content;

		ob_start();

		Shortcodes::get_shortcodes( $args, 'carousel' );

		return ob_get_clean();
	}
}
