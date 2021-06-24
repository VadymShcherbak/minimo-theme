<?php
/**
 * Bootstraps the Theme.
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\Inc;

use MINIMO_THEME_VADYM\Inc\Traits\Singleton;

/**
 * Minimo theme styles
 */
class Assets {
	use Singleton;

	/**
	 * Construct
	 */
	protected function __construct() {
		$this->setup_hooks();
	}

	/**
	 * Setup hooks
	 */
	protected function setup_hooks() {
		add_action( 'wp_enqueue_scripts', array( $this, 'register_styles' ), 10 );
		add_action( 'wp_enqueue_scripts', array( $this, 'register_scripts' ), 10 );
		add_action( 'admin_enqueue_scripts', array( $this, 'register_admin_scripts' ), 10 );
		add_action( 'admin_enqueue_styles', array( $this, 'register_admin_styles' ), 10 );
	}

	/**
	 * Register styles
	 */
	public function register_styles() {
		wp_enqueue_style( 'fontawesome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css', array(), 'VA_MINIMO_VERSION' );
		wp_enqueue_style( 'font-ubuntu', 'https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap', array(), 'VA_MINIMO_VERSION' );
		wp_enqueue_style( 'fonts-display', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap', array(), 'VA_MINIMO_VERSION' );
		wp_enqueue_style( 'style', VA_MINIMO_DIR_URI . '/style.css', array(), 'VA_MINIMO_VERSION' );
		wp_enqueue_style( 'style-flickity', VA_MINIMO_DIR_URI . '/assets/css/lib/flickity.css', array(), 'VA_MINIMO_VERSION' );
	}


	/**
	 * Register scripts
	 */
	public function register_scripts() {
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'main', VA_MINIMO_DIR_URI . '/assets/js/main.js', array(), 'VA_MINIMO_VERSION', true );
		wp_enqueue_script( 'flickity', VA_MINIMO_DIR_URI . '/assets/js/lib/flickity.pkgd.min.js', array( 'jquery' ), 'VA_MINIMO_VERSION', true );
	}

	/**
	 * Register admin panel style.
	 */
	public function register_admin_styles() {
		wp_enqueue_style( 'fontawesome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css', array(), 'VA_MINIMO_VERSION' );
		wp_enqueue_style( 'admin-panel-style', VA_MINIMO_DIR_URI . '/assets/css/admin-panel.css', array(), 'VA_MINIMO_VERSION' );
	}

	/**
	 * Register scripts for admin panel.
	 */
	public function register_admin_scripts() {
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'admin-panel', VA_MINIMO_DIR_URI . '/assets/js/admin-panel.js', array( 'jquery' ), 'VA_MINIMO_VERSION', true );
	}
}

