<?php
/**
 * Register shortcode Social icon
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\Inc\Shortcodes;

use MINIMO_THEME_VADYM\Inc\Shortcodes;
use MINIMO_THEME_VADYM\Inc\Traits\Singleton;

/**
 * Register Class Title.
 */
class Social_Icon {
	use Singleton;

	/**
	 * Title constructor.
	 */
	protected function __construct() {
		add_shortcode( 'social-icon', array( $this, 'render_social_icon' ) );
	}


	/**
	 * Render responsive text.
	 *
	 * @param array $args Shortcode parameters.
	 */
	public function render_social_icon( $args ) {
		$args = shortcode_atts(
			array(
				'icon'        => 'fab fa-facebook-square',
				'size'        => 'medium',
				'colored'     => 'colored',
				'social-link' => '#',

			),
			$args,
			'social-icon'
		);

		ob_start();

		Shortcodes::get_shortcodes( $args, 'social-icon' );

		return ob_get_clean();
	}
}
