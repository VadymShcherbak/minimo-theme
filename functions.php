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
require_once VA_MINIMO_DIR_PATH . '/inc/classes/class-minimo_theme.php';
require_once VA_MINIMO_DIR_PATH . '/inc/classes/class-assets.php';
require_once VA_MINIMO_DIR_PATH . '/inc/classes/class-menus.php';
require_once VA_MINIMO_DIR_PATH . '/inc/helpers/helper.php';
require_once VA_MINIMO_DIR_PATH . '/inc/classes/class-sidebar.php';

Minimo_Theme::get_instance();
