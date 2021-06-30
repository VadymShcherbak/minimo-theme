<?php
/**
 * Register shortcode Row
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\Inc\Shortcodes;

use MINIMO_THEME_VADYM\Inc\Shortcodes;
use MINIMO_THEME_VADYM\Inc\Traits\Singleton;

/**
 * Class Row.
 */
class Row {
	use Singleton;

	/**
	 * Row constructor.
	 */
	protected function __construct() {
		add_shortcode( 'row', array( $this, 'render_row' ) );
	}


	/**
	 * Render Row.
	 *
	 * @param array  $args Array parameter.
	 * @param string $content Shortcode content.
	 */
	public function render_row( $args, $content ) {
		$args['content'] = $content;

		ob_start();

		Shortcodes::get_shortcodes( $args, 'row' );

		return ob_get_clean();
	}
}
