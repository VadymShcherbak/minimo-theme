<?php
/**
 * Widget hotel category
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\inc;

use MINIMO_THEME_VADYM\Inc\Traits\Singleton;

/**
 * Class minimo widgets
 */
class Widgets {
	use Singleton;

	/**
	 * Widgets constructor.
	 */
	protected function __construct() {
		$this->require_widgets();
		$this->setup_hooks();
	}

	/**
	 * Setup hooks.
	 */
	protected function setup_hooks() {
		add_action( 'widgets_init', array( $this, 'register_widgets' ), 10 );
	}

	/**
	 * Require widget.
	 */
	public function require_widgets() {
		require_once VA_MINIMO_DIR_PATH . '/inc/widget/class_category_hotel_widget';
	}

	/**
	 * Register widget.
	 */
	public function register_widgets() {
		register_widget( 'MINIMO_THEME_VADYM\Inc\Widget\Category_Hotel_Widget' );
	}
}
