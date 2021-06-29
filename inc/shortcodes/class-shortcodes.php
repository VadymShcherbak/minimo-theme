<?php
/**
 * Register shortcodes.
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\Inc;

use MINIMO_THEME_VADYM\Inc\Shortcodes\Hotel;
use MINIMO_THEME_VADYM\Inc\Shortcodes\Images_Gallery;
use MINIMO_THEME_VADYM\Inc\Traits\Singleton;

/**
 * Minimo theme
 */
class Shortcodes {
	use Singleton;

	/**
	 * Construct
	 */
	protected function __construct() {
		$this->require_shortcodes();
		$this->init_shortcodes();
	}

	/**
	 * Require shortcodes.
	 */
	public function require_shortcodes() {
		require_once VA_MINIMO_DIR_PATH . '/inc/shortcodes/hotel/class-hotel.php';
		require_once VA_MINIMO_DIR_PATH . '/inc/shortcodes/images-gallery/class-images-gallery.php';
	}

	/**
	 * Init meta boxes.
	 */
	public function init_shortcodes() {
		Hotel::get_instance();
		Images_Gallery::get_instance();
	}

	/**
	 * Intended for output of arrays.
	 *
	 * @param array  $args Array parameters.
	 *
	 * @param string $template_type Template type.
	 */
	public static function get_shortcodes( $args, $template_type ) {
		get_template_part(
			'inc/shortcodes/' . $template_type . '/templates/' . $template_type,
			'',
			$args,
		);
	}
}
