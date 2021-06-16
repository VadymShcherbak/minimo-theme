<?php
/**
 * Get New Post Type
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\inc;

use MINIMO_THEME_VADYM\Inc\Traits\Singleton;

/**
 * Merak theme.
 */
class Post_Type {
	use Singleton;

	/**
	 * Construct.
	 */
	protected function __construct() {
		$this->setup_hooks();
	}

	/**
	 * Setup hooks.
	 */
	protected function setup_hooks() {
		add_action( 'init', array( $this, 'va_create_taxonomy' ), 11 );
		add_action( 'init', array( $this, 'va_post_type' ), 20 );
	}

	/**
	 * Create Taxonomy Hotel Category
	 */
	public function va_create_taxonomy() {
		register_taxonomy(
			'taxonomy',
			array( 'hotel' ),
			array(
				'label'             => '', // определяется параметром $labels->name.
				'labels'            => array(
					'name'              => 'Hotel category',
					'singular_name'     => 'Hotel category',
					'search_items'      => 'Search hotel category',
					'all_items'         => 'All hotel categories',
					'view_item '        => 'View hotel category',
					'parent_item'       => 'Parent hotel category',
					'parent_item_colon' => 'Parent hotel category:',
					'edit_item'         => 'Edit hotel category',
					'update_item'       => 'Update hotel category',
					'add_new_item'      => 'Add New hotel category',
					'new_item_name'     => 'New hotel category Name',
					'menu_name'         => 'Hotel category',
				),
				'description'       => '', // описание таксономии.
				'public'            => true,
				'hierarchical'      => false,

				'rewrite'           => true,
				'capabilities'      => array(),
				'meta_box_cb'       => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
				'show_admin_column' => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5).
				'show_in_rest'      => null, // добавить в REST API.
				'rest_base'         => null, // $taxonomy
			)
		);
	}

	/**
	 * Register New Post Type
	 */
	public function va_post_type() {
		register_post_type(
			'hotel',
			array(
				'labels'             => array(
					'name'               => 'Hotel', // Основное название типа записи.
					'singular_name'      => 'Hotel', // отдельное название записи типа Hotel.
					'add_new'            => 'Add new',
					'add_new_item'       => 'Add new hotel',
					'edit_item'          => 'Edit hotel',
					'new_item'           => 'New hotel',
					'view_item'          => 'View hotel',
					'search_items'       => 'Find hotels',
					'not_found'          => 'Hotels not found',
					'not_found_in_trash' => 'No hotels found in the basket',
					'parent_item_colon'  => '',
					'menu_name'          => 'Hotels',

				),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => true,
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
			)
		);
	}
}
