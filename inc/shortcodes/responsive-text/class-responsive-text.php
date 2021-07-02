<?php
/**
 * Register shortcode Responsive text
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\Inc\Shortcodes;

use MINIMO_THEME_VADYM\Inc\Shortcodes;
use MINIMO_THEME_VADYM\Inc\Traits\Singleton;

/**
 * Register Class Title.
 */
class Responsive_Text {
	use Singleton;

	/**
	 * Title constructor.
	 */
	protected function __construct() {
		add_shortcode( 'responsive-text', array( $this, 'render_responsive_text' ) );
	}


	/**
	 * Render responsive text.
	 *
	 * @param array $args Shortcode parameters.
	 */
	public function render_responsive_text( $args ) {
		$args = shortcode_atts(
			array(
				'text'         => 'Some Text',
				'color'        => '#626262',
				'desktop-size' => '20px',
				'tablet-size'  => '16px',
				'mobile-size'  => '12px',
			),
			$args,
			'responsive-text'
		);

		ob_start();

		Shortcodes::get_shortcodes( $args, 'responsive-text' );

		return ob_get_clean();
	}
}
