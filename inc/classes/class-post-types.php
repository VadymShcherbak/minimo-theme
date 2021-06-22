<?php
/**
 * Get New Post Type
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\inc;

use MINIMO_THEME_VADYM\Inc\Traits\Singleton;

/**
 * Minimo post types.
 */
class Post_Types {
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
		add_action( 'init', array( $this, 'create_hotel_post_type' ), 10 );
	}

	/**
	 * Create Taxonomy and post types
	 */
	public function create_hotel_post_type() {
		register_taxonomy(
			'hotel_category',
			array( 'hotel' ),
			array(
				'label'             => '',
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
				'description'       => '',
				'public'            => true,
				'hierarchical'      => false,

				'rewrite'           => true,
				'capabilities'      => array(),
				'meta_box_cb'       => null,
				'show_admin_column' => false,
				'show_in_rest'      => null,
				'rest_base'         => null,
			)
		);

		register_post_type(
			'hotel',
			array(
				'labels'             => array(
					'name'               => 'Hotel',
					'singular_name'      => 'Hotel',
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
