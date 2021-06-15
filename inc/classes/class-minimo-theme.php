<?php
/**
 * Main Theme Class
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\Inc;

use MINIMO_THEME_VADYM\Inc\Traits\Singleton;

/**
 * Minimo theme
 */
class MINIMO_THEME_VADYM {
	use Singleton;

	/**
	 * Construct.
	 */
	protected function __construct() {
		Assets::get_instance();
		Menu::get_instance();

		$this->setup_hooks();
	}

	/**
	 * Setup hooks.
	 */
	protected function setup_hooks() {
		add_action( 'after_setup_theme', array( $this, 'setup_theme' ), 10 );
	}

	/**
	 * Setup theme components.
	 */
	public function setup_theme() {
		add_theme_support( 'post-thumbnails' );
	}
}
