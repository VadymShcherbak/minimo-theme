<?php
/**
 * Register shortcode Infobox
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\Inc\Shortcodes;

use MINIMO_THEME_VADYM\Inc\Shortcodes;
use MINIMO_THEME_VADYM\Inc\Traits\Singleton;

/**
 * Register Class Title.
 */
class Infobox {
	use Singleton;

	/**
	 * Title constructor.
	 */
	protected function __construct() {
		add_shortcode( 'infobox', array( $this, 'render_infobox' ) );
	}


	/**
	 * Render infobox.
	 *
	 * @param array $args Infobox parameters.
	 */
	public function render_infobox( $args ) {
		$args = shortcode_atts(
			array(
				'icon'           => 'fad fa-star',
				'title'          => 'Title',
				'text'           => 'text',
				'button-text'    => 'button text',
				'button-link'    => '#',
				'background'     => 'white',
				'bg-color-hover' => '',
				'text-color'     => '#626262',
				'text-hover'     => '',
			),
			$args,
			'infobox'
		);

		ob_start();

		Shortcodes::get_shortcodes( $args, 'infobox' );

		return ob_get_clean();
	}
}
