<?php
/**
 * Register shortcode Button
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\Inc\Shortcodes;

use MINIMO_THEME_VADYM\Inc\Shortcodes;
use MINIMO_THEME_VADYM\Inc\Traits\Singleton;

/**
 * Register Class Button.
 */
class Button {
	use Singleton;

	/**
	 * Button constructor.
	 */
	protected function __construct() {
		add_shortcode( 'button', array( $this, 'render_button' ) );
	}

	/**
	 * Render button.
	 *
	 * @param array $args Button parameters.
	 */
	public function render_button( $args ) {
		$args = shortcode_atts(
			array(
				'text'  => 'Button',
				'link'  => '#',
				'style' => 'default',
			),
			$args,
			'button'
		);

		ob_start();

		Shortcodes::get_shortcodes( $args, 'button' );

		return ob_get_clean();
	}
}
