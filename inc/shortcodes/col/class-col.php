<?php
/**
 * Register shortcode Col
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\Inc\Shortcodes;

use MINIMO_THEME_VADYM\Inc\Shortcodes;
use MINIMO_THEME_VADYM\Inc\Traits\Singleton;

/**
 * Class Row.
 */
class Col {
	use Singleton;

	/**
	 * Row constructor.
	 */
	protected function __construct() {
		add_shortcode( 'col', array( $this, 'render_col' ) );
	}

	/**
	 * Render row.
	 *
	 * @param array  $args Row parameters.
	 * @param string $content Shortcode content.
	 */
	public function render_col( $args, $content ) {
		$args = shortcode_atts(
			array(
				'width' => 'lg-12',
			),
			$args,
			'col'
		);

		$args['content'] = $content;

		ob_start();

		Shortcodes::get_shortcodes( $args, 'col' );

		return ob_get_clean();
	}
}
