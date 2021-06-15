<?php
/**
 * Bootstraps the Theme.
 *
 * @package Minimo
 */

namespace MINIMO_THEME\Inc;

use MINIMO_THEME\Inc\Traits\Singleton;

/**
 * Minimo theme styles
 */
class Assets {
	use Singleton;

	/**
	 * Construct
	 */
	protected function __construct() {
		// load class.
		$this->setup_hooks();
	}
	/**
	 * Setup hooks
	 */
	protected function setup_hooks() {
		// actions and filters.

		add_action( 'wp_enqueue_scripts', array( $this, 'register_styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'register_scripts' ) );
	}

	/**
	 * Register styles
	 */
	public function register_styles() {
		wp_enqueue_style( 'style', VA_MINIMO_DIR_URI . '/style.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'fontawesome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css', array(), '5.10.0', 'all' );
		wp_enqueue_style( 'font-ubuntu', 'https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap', array(), '1.0', 'all' );
		wp_enqueue_style( 'fonts-display', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap', array(), '1.0', 'all' );
	}


	/**
	 * Register scripts
	 */
	public function register_scripts() {
		wp_enqueue_script( 'main', VA_MINIMO_DIR_URI . '/assets/js/main.js', array(), '1.0', true );
	}
}

