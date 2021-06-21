<?php
/**
 * Register shortcodes.
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\inc;

use MINIMO_THEME_VADYM\Inc\Traits\Singleton;
use MINIMO_THEME_VADYM\inc\shortcodes\Last_Hotels;

/**
 * Merak theme
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
		require_once VA_MINIMO_DIR_PATH . '/inc/shortcodes/class-last-hotels.php';
	}

	/**
	 * Init meta boxes.
	 */
	public function init_shortcodes() {
		Last_Hotels::get_instance();
	}
}
