<?php
/**
 * Register sidebar
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\inc;

use MINIMO_THEME_VADYM\Inc\Traits\Singleton;

/**
 * Minimo sidebar.
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
				'name'          => esc_html__( 'Sidebar', 'minimo' ),
				'id'            => 'va-blog-sidebar',
				'description'   => esc_html__( 'Main sidebar', 'minimo' ),
				'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer', 'minimo' ),
				'id'            => 'va-footer-sidebar',
				'description'   => esc_html__( 'Footer sidebar', 'minimo' ),
				'before_widget' => '<div id="%1$s" class="widget widget-footer %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
	}
}

