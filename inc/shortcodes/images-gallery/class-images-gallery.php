<?php
/**
 * Register shortcode Gallery
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\Inc\Shortcodes;

use MINIMO_THEME_VADYM\Inc\Shortcodes;
use MINIMO_THEME_VADYM\Inc\Traits\Singleton;

/**
 * Minimo theme.
 */
class Images_Gallery {
	use Singleton;

	/**
	 * Construct.
	 */
	protected function __construct() {
		add_shortcode( 'images-gallery', array( $this, 'get_images_gallery' ) );
	}


	/**
	 * Render hotel shortcode.
	 *
	 * @param  array $args Shortcode parameters.
	 */
	public function get_images_gallery( $args ) {
		$args = shortcode_atts(
			array(
				'images'     => '',
				'view'       => 'grid',
				'columns'    => 3,
				'image_size' => '',
			),
			$args
		);

		$class_wrapper = 'row';
		$class_item    = 'col-md-12 col-lg-' . intval( 12 / $args['columns'] );
		$images        = explode( ',', $args['images'] );

		if ( 'grid' === $args['view'] ) {
			$class_item .= ' img-item';
		} elseif ( 'carousel' === $args['view'] ) {
			$class_wrapper = ' main-carousel';
			$class_item   .= ' carousel-cell';
		}

		ob_start();

		Shortcodes::get_shortcodes(
			array(
				'images'        => $images,
				'class_wrapper' => $class_wrapper,
				'class_item'    => $class_item,
				'image_size'    => $args['image_size'],
				'view'          => $args['view'],
				'columns'       => $args['columns'],
			),
			'images-gallery'
		);

		return ob_get_clean();
	}
}
