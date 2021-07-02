<?php
/**
 * Register shortcodes.
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\Inc;

use MINIMO_THEME_VADYM\Inc\Shortcodes\Button;
use MINIMO_THEME_VADYM\Inc\Shortcodes\Carousel;
use MINIMO_THEME_VADYM\Inc\Shortcodes\Col;
use MINIMO_THEME_VADYM\Inc\Shortcodes\Custom_Button;
use MINIMO_THEME_VADYM\Inc\Shortcodes\Hotel;
use MINIMO_THEME_VADYM\Inc\Shortcodes\Images_Gallery;
use MINIMO_THEME_VADYM\Inc\Shortcodes\Infobox;
use MINIMO_THEME_VADYM\Inc\Shortcodes\Responsive_Text;
use MINIMO_THEME_VADYM\Inc\Shortcodes\Row;
use MINIMO_THEME_VADYM\Inc\Shortcodes\Title;
use MINIMO_THEME_VADYM\Inc\Traits\Singleton;

/**
 * Minimo theme
 */
class Shortcodes {
	use Singleton;

	/**
	 * Construct
	 */
	protected function __construct() {
		$this->require_shortcodes();
		$this->init_shortcodes();
	}

	/**
	 * Require shortcodes.
	 */
	public function require_shortcodes() {
		require_once VA_MINIMO_DIR_PATH . '/inc/shortcodes/hotel/class-hotel.php';
		require_once VA_MINIMO_DIR_PATH . '/inc/shortcodes/images-gallery/class-images-gallery.php';
		require_once VA_MINIMO_DIR_PATH . '/inc/shortcodes/title/class-title.php';
		require_once VA_MINIMO_DIR_PATH . '/inc/shortcodes/button/class-button.php';
		require_once VA_MINIMO_DIR_PATH . '/inc/shortcodes/row/class-row.php';
		require_once VA_MINIMO_DIR_PATH . '/inc/shortcodes/col/class-col.php';
		require_once VA_MINIMO_DIR_PATH . '/inc/shortcodes/carousel/class-carousel.php';
		require_once VA_MINIMO_DIR_PATH . '/inc/shortcodes/infobox/class-infobox.php';
		require_once VA_MINIMO_DIR_PATH . '/inc/shortcodes/responsive-text/class-responsive-text.php';
		require_once VA_MINIMO_DIR_PATH . '/inc/shortcodes/custom-button/class-custom-button.php';
	}

	/**
	 * Init meta boxes.
	 */
	public function init_shortcodes() {
		Hotel::get_instance();
		Images_Gallery::get_instance();
		Title::get_instance();
		Button::get_instance();
		Row::get_instance();
		Col::get_instance();
		Carousel::get_instance();
		Infobox::get_instance();
		Responsive_Text::get_instance();
		Custom_Button::get_instance();
	}

	/**
	 * Intended for output of arrays.
	 *
	 * @param array  $args Array parameters.
	 *
	 * @param string $template_type Template type.
	 */
	public static function get_shortcodes( $args, $template_type ) {
		get_template_part(
			'inc/shortcodes/' . $template_type . '/templates/' . $template_type,
			'',
			$args
		);
	}
}
