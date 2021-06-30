<?php
/**
 * Register shortcode Gallery
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\Inc\Shortcodes;

use MINIMO_THEME_VADYM\Inc\Shortcodes;
use MINIMO_THEME_VADYM\Inc\Traits\Singleton;

/**
 * Register Class Title.
 */
class Title {
	use Singleton;

	/**
	 * Title constructor.
	 */
	protected function __construct() {
		add_shortcode( 'title', array( $this, 'show_title' ) );
	}


	/**
	 * Show title.
	 *
	 * @param array $args Shortcode parameters.
	 */
	public function show_title( $args ) {
		$args = shortcode_atts(
			array(
				'title'        => '',
				'before_title' => '',
				'after_title'  => '',
			),
			$args,
			'title'
		);

		ob_start();

		Shortcodes::get_shortcodes( $args, 'title' );

		return ob_get_clean();
	}
}
