<?php
/**
 *  Class widget hotel category
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\Inc\Widgets;

use MINIMO_THEME_VADYM\Inc\WPH_Widget;

/**
 * Add category hotel widget.
 */
class Category_Hotel_Widget extends WPH_Widget {

	/**
	 * Register category hotel widget.
	 */
	public function __construct() {
		$args = array(
			'label'       => esc_html__( 'Category Hotel Widget', 'minimo' ),
			'description' => esc_html__( 'This widget show all hotel categories', 'minimo' ),
		);

		$args['fields'] = array(
			array(
				'name'     => esc_html__( 'Title', 'minimo' ),
				'desc'     => esc_html__( 'Enter the widget title', 'minimo' ),
				'id'       => 'title',
				'type'     => 'text',
				'class'    => 'widefat',
				'std'      => esc_html__( 'Hotel Category', 'minimo' ),
				'validate' => 'alpha_dash',
				'filter'   => 'strip_tags|esc_attr',
			),
		);

		$this->create_widget( $args );
	}

	/**
	 * Get widget hotel category.
	 *
	 * @param array $args Widget args.
	 * @param array $instance Saved values.
	 */
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );

		echo $args['before_widget'];

		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}

		get_template_part( 'inc/widgets/hotels/templates/hotel', 'category-widget' );

		echo $args['after_widget'];
	}
}
