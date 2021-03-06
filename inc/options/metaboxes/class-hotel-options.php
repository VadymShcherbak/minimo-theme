<?php
/**
 * Register Meta Boxes
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\Inc\Meta_Boxes;

use MINIMO_THEME_VADYM\inc\Meta_Boxes;
use MINIMO_THEME_VADYM\Inc\Traits\Singleton;

/**
 * Merak theme
 */
class Hotel_Options {
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
		add_action( 'add_meta_boxes', array( $this, 'add_custom_meta_boxes' ), 10 );
		add_action( 'save_post', array( $this, 'save_address_meta_data' ), 10 );
	}

	/**
	 * Create custom meta-boxes
	 */
	public function add_custom_meta_boxes() {
		add_meta_box(
			'Hotel-option',
			esc_html__( 'Hotel Option', 'minimo' ),
			array( $this, 'address_meta_box_html' ),
			'hotel',
			'side'
		);
	}

	/**
	 * Create form for hotel address.
	 */
	public function address_meta_box_html() {
		$price         = get_post_meta( get_the_ID(), '_hotel_price', true );
		$hotel_address = get_post_meta( get_the_ID(), '_hotel_address', true );
		$hotel_country = get_post_meta( get_the_ID(), '_hotel_country', true );
		$id_images     = get_post_meta( get_the_ID(), '_hotel_gallery', true );

		wp_nonce_field( plugin_basename( __FILE__ ), 'hotel-option' );

		Meta_Boxes::va_show_template_meta_box(
			array(
				'id'    => 'hotel_price',
				'title' => esc_html__( 'Price', 'minimo' ),
				'name'  => 'hotel_price',
				'value' => $price,
			),
			'text'
		);
		Meta_Boxes::va_show_template_meta_box(
			array(
				'id'    => 'hotel_address',
				'title' => esc_html__( 'Address', 'minimo' ),
				'name'  => 'hotel_address',
				'value' => $hotel_address,
			),
			'text'
		);
		Meta_Boxes::va_show_template_meta_box(
			array(
				'id'    => 'hotel_country',
				'title' => esc_html__( 'Country', 'minimo' ),
				'name'  => 'hotel_country',
				'value' => $hotel_country,
			),
			'text'
		);
		Meta_Boxes::va_show_template_meta_box(
			array(
				'id'       => '_hotel_gallery',
				'title'    => esc_html__( 'Gallery', 'minimo' ),
				'value'    => $id_images,
				'multiple' => true,
			),
			'gallery'
		);
	}

	/**
	 * Save hotel address.
	 *
	 * @param int $post_id Post id.
	 */
	public function save_address_meta_data( $post_id ) {
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}

		if ( ! isset( $_POST['hotel-option'] ) || ! wp_verify_nonce( wp_unslash( $_POST['hotel-option'] ), plugin_basename( __FILE__ ) ) ) {
			return;
		}

		if ( isset( $_POST['hotel_price'] ) && is_numeric( $_POST['hotel_price'] ) ) {
			update_post_meta(
				$post_id,
				'_hotel_price',
				esc_html( wp_unslash( $_POST['hotel_price'] ) )
			);
		}
		if ( isset( $_POST['hotel_address'] ) ) {
			update_post_meta(
				$post_id,
				'_hotel_address',
				esc_html( wp_unslash( $_POST['hotel_address'] ) )
			);
		}
		if ( isset( $_POST['hotel_country'] ) ) {
			update_post_meta(
				$post_id,
				'_hotel_country',
				esc_html( wp_unslash( $_POST['hotel_country'] ) )
			);
		}
		if ( isset( $_POST['_hotel_gallery'] ) ) {
			$id_photos = '';

			if ( ! empty( $_POST['_hotel_gallery'] ) ) {
				$id_photos = explode( ',', wp_unslash( $_POST['_hotel_gallery'] ) );
			}

			update_post_meta(
				$post_id,
				'_hotel_gallery',
				$id_photos,
			);
		}
	}
}
