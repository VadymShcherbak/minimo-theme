<?php
/**
 * Register Menus
 *
 * @package Minimo
 */

namespace MINIMO_THEME\inc;

use MINIMO_THEME\Inc\Traits\Singleton;

/**
 * Merak theme.
 */
class Menus {
	use Singleton;

	/**
	 * Construct.
	 */
	protected function __construct() {
		// load class.
		$this->setup_hooks();
	}

	/**
	 * Setup hooks.
	 */
	protected function setup_hooks() {
		// actions and filters.

		add_action( 'init', array( $this, 'register_menus' ) );
	}

	/**
	 * Register menus.
	 */
	public function register_menus() {
		register_nav_menus(
			array(
				'minimo-header-menu' => esc_html__( 'Header Menu', 'minimo' ),
				'minimo-footer-menu' => esc_html__( 'Footer Menu', 'minimo' ),
			)
		);
	}
}
