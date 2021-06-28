<?php
/**
 * Register Meta Boxes
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\inc;

use MINIMO_THEME_VADYM\Inc\Traits\Singleton;
use MINIMO_THEME_VADYM\inc\Meta_Boxes\Hotel_Options;
/**
 * Minimo theme
 */
class Meta_Boxes {
	use Singleton;

	/**
	 * Construct
	 */
	protected function __construct() {
		$this->require_meta_boxes();
		$this->init_meta_boxes();
	}

	/**
	 * Require class hotel options.
	 */
	public function require_meta_boxes() {
		require_once VA_MINIMO_DIR_PATH . '/inc/options/metaboxes/class-hotel-options.php';
	}

	/**
	 * Init meta boxes.
	 */
	public function init_meta_boxes() {
		Hotel_Options::get_instance();
	}

	/**
	 * Intended for output of arrays.
	 *
	 * @param array  $args Attribute.
	 * @param string $template_type Template type.
	 */
	public static function va_show_template_meta_box( $args, $template_type ) {
		get_template_part(
			'inc/options/fields/' . $template_type,
			'',
			$args
		);
	}
}
