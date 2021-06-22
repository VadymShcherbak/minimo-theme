<?php
/**
 * Register Menus
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\inc;

use MINIMO_THEME_VADYM\Inc\Traits\Singleton;

/**
 * Merak theme.
 */
class Menu {
	use Singleton;

	/**
	 * Construct.
	 */
	protected function __construct() {
		$this->setup_hooks();
	}

	/**
	 * Setup hooks.
	 */
	protected function setup_hooks() {
		add_action( 'init', array( $this, 'register_menus' ), 10 );
	}

	/**
	 * Register menus.
	 */
	public function register_menus() {
		register_nav_menus(
			array(
				'va-minimo-header-menu' => esc_html__( 'Header Menu', 'minimo' ),
				'va-minimo-footer-menu' => esc_html__( 'Footer Menu', 'minimo' ),
			)
		);
	}
}
