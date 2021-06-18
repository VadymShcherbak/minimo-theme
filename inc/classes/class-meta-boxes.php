<?php
/**
 * Register Meta Boxes
 *
 * @package Minimo
 */

namespace MINIMO_THEME_VADYM\inc;

use MINIMO_THEME_VADYM\Inc\Traits\Singleton;

/**
 * Merak theme
 */
class Meta_Boxes {
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
		add_action( 'add_meta_boxes', array( $this, 'add_custom_meta_boxes' ) );
		add_action( 'save_post', array( $this, 'save_price_meta_data' ) );
		add_action( 'save_post', array( $this, 'save_address_meta_data' ) );
	}

	/**
	 * Create custom meta-boxes
	 */
	public function add_custom_meta_boxes() {
			add_meta_box(
				'price',
				__( 'Price', 'minimo' ),
				array( $this, 'price_meta_box_html' ),
				'hotel',
				'side'
			);
			add_meta_box(
				'address',
				__( 'Hotel Address', 'minimo' ),
				array( $this, 'address_meta_box_html' ),
				'hotel',
				'side'
			);
	}

	/**
	 * Price meta-box html.
	 *
	 * @param object $post  Hotel Post.
	 */
	public function price_meta_box_html( $post ) {
		$price = get_post_meta( $post->ID, '_hotel_price', true );

		wp_nonce_field( plugin_basename( __FILE__ ), 'price' );

		va_meta_box_form(
			array(
				'id'    => 'hotel-price',
				'title' => __( 'Price', 'minimo' ),
				'name'  => 'minimo_price',
				'value' => $price,
			)
		);
	}

	/**
	 * Save post.
	 *
	 * @param int $post_id Post id.
	 */
	public function save_price_meta_data( $post_id ) {
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}

		if ( ! isset( $_POST['price'] ) || ! is_numeric( floatval( $_POST['price'] ) ) || ! wp_verify_nonce( wp_unslash( $_POST['price'] ), plugin_basename( __FILE__ ) ) ) {
			return;
		}

		if ( array_key_exists( 'minimo_price', $_POST ) ) {
			update_post_meta(
				$post_id,
				'_hotel_price',
				esc_html( wp_unslash( $_POST['minimo_price'] ) ),
			);
		}
	}

	/**
	 * Create form for hotel address.
	 *
	 * @param object $post Hotel post.
	 */
	public function address_meta_box_html( $post ) {
		$hotel_address = get_post_meta( $post->ID, '_hotel_address', true );
		$hotel_country = get_post_meta( $post->ID, '_hotel_country', true );

		wp_nonce_field( plugin_basename( __FILE__ ), 'address' );

		va_meta_box_form(
			array(
				'id'    => 'hotel-address',
				'title' => __( 'Address', 'minimo' ),
				'name'  => 'hotel_address',
				'value' => $hotel_address,
			)
		);
		va_meta_box_form(
			array(
				'id'    => 'hotel-country',
				'title' => __( 'Country', 'minimo' ),
				'name'  => 'hotel_country',
				'value' => $hotel_country,
			)
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

		if ( ! isset( $_POST['address'] ) || ! wp_verify_nonce( wp_unslash( $_POST['address'] ), plugin_basename( __FILE__ ) ) ) {
			return;
		}

		if ( array_key_exists( 'hotel_address', $_POST ) && array_key_exists( 'hotel_country', $_POST ) ) {
			update_post_meta(
				$post_id,
				'_hotel_address',
				esc_html( wp_unslash( $_POST['hotel_address'] ) )
			);
			update_post_meta(
				$post_id,
				'_hotel_country',
				esc_html( wp_unslash( $_POST['hotel_country'] ) )
			);
		}
	}
}
