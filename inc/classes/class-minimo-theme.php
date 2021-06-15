<?php
/**
 * Main Theme Class
 *
 * @package Minimo
 */

namespace MINIMO_THEME\Inc;

use MINIMO_THEME\Inc\Traits\Singleton;

/**
 * Minimo theme
 */
class MINIMO_THEME {
	use Singleton;

	/**
	 * Construct.
	 */
	protected function __construct() {
		// load class.
		Assets::get_instance();
		Menus::get_instance();

		$this->setup_hooks();
	}

	/**
	 * Setup hooks.
	 */
	protected function setup_hooks() {
		// actions and filters.

		add_action( 'after_setup_theme', array( $this, 'setup_theme' ) );
	}

	/**
	 * Setup theme components.
	 */
	public function setup_theme() {
		add_theme_support( 'post-thumbnails' );
	}
}
