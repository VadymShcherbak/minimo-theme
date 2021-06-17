<?php
/**
 * Main functions theme
 *
 * @package Minimo
 */

use MINIMO_THEME_VADYM\Inc\Minimo_Theme;

if ( ! defined( 'VA_MINIMO_VERSION' ) ) {
	$this_theme = wp_get_theme();
	define( 'VA_MINIMO_VERSION', $this_theme->get( 'Version' ) );
}

if ( ! defined( 'VA_MINIMO_DIR_PATH' ) ) {
	define( 'VA_MINIMO_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'VA_MINIMO_DIR_URI' ) ) {
	define( 'VA_MINIMO_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once VA_MINIMO_DIR_PATH . '/inc/traits/trait-singleton.php';
require_once VA_MINIMO_DIR_PATH . '/inc/classes/class-minimo-theme.php';
require_once VA_MINIMO_DIR_PATH . '/inc/classes/class-assets.php';
require_once VA_MINIMO_DIR_PATH . '/inc/classes/class-menu.php';
require_once VA_MINIMO_DIR_PATH . '/inc/helpers/helper.php';
require_once VA_MINIMO_DIR_PATH . '/inc/classes/class-sidebar.php';
require_once VA_MINIMO_DIR_PATH . '/inc/classes/class-post-type.php';
require_once VA_MINIMO_DIR_PATH . '/inc/classes/class-meta-boxes.php';

Minimo_Theme::get_instance();

/**
 * Meta box form.
 *
 * @param array $option Meta box form option.
 */
function va_meta_box_form( $option ) {
	?>
		<label for="<?php echo esc_html( $option['id'] ); ?>">
		<?php esc_html( $option['title'] . ': ' ); ?>
		</label>
		<input type="text" name="<?php echo esc_html( $option['name'] ); ?>" id="<?php echo esc_html( $option['id'] ); ?>" value="<?php echo esc_html( $option['value'] ); ?>">
		<?php
}
