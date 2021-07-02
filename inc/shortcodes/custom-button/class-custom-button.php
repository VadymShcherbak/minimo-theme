<?php
/**
 * Register shortcode Custom button
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\Inc\Shortcodes;

use MINIMO_THEME_VADYM\Inc\Shortcodes;
use MINIMO_THEME_VADYM\Inc\Traits\Singleton;

/**
 * Register Class Title.
 */
class Custom_Button {
	use Singleton;

	/**
	 * Title constructor.
	 */
	protected function __construct() {
		add_shortcode( 'custom-button', array( $this, 'render_custom_button' ) );
	}


	/**
	 * Render responsive text.
	 *
	 * @param array $args Shortcode parameters.
	 */
	public function render_custom_button( $args ) {
		$args = shortcode_atts(
			array(
				'text'               => 'Button text',
				'text-color'         => '#626262',
				'text-color-hover'   => '#fff',
				'color-button'       => '#fedd7e',
				'button-hover-color' => '#ff6900a8',
				'icon'               => 'far fa-alien',
				'link'               => '#',
			),
			$args,
			'custom-button'
		);

		ob_start();

		Shortcodes::get_shortcodes( $args, 'custom-button' );

		return ob_get_clean();
	}
}
