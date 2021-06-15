<?php
/**
 * Main functions theme
 *
 * @package Minimo
 */

if ( ! defined( 'VA_MINIMO_DIR_PATH' ) ) {
	define( 'VA_MINIMO_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'VA_MINIMO_DIR_URI' ) ) {
	define( 'VA_MINIMO_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once VA_MINIMO_DIR_PATH . '/inc/traits/trait-singleton.php';
require_once VA_MINIMO_DIR_PATH . '/inc/classes/class-minimo-theme.php';
require_once VA_MINIMO_DIR_PATH . '/inc/classes/class-assets.php';
require_once VA_MINIMO_DIR_PATH . '/inc/classes/class-menus.php';


\MINIMO_THEME\Inc\MINIMO_THEME::get_instance();
