<?php
/**
 * Register sidebar.
 *
 * @package Merak
 */

namespace MINIMO_THEME_VADYM\inc;

use MINIMO_THEME_VADYM\Inc\Traits\Singleton;

/**
 * Merak theme
 */
class Sidebar {
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
		add_action( 'widgets_init', array( $this, 'register_sidebars' ), 10 );
	}

	/**
	 * Register Sidebars
	 */
	public function register_sidebars() {
		register_sidebar(
			array(
				'name'          => __( 'Sidebar', 'minimo' ),
				'id'            => 'va-blog-sidebar',
				'description'   => __( 'Main sidebar', 'minimo' ),
				'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Footer', 'minimo' ),
				'id'            => 'va-footer-sidebar',
				'description'   => __( 'Footer sidebar', 'minimo' ),
				'before_widget' => '<div id="%1$s" class="widget widget-footer %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
	}
}

