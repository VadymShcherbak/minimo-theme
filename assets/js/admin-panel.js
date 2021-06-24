(function($) {
	function vaAddPhotoGallery() {
		let $metaBoxWrapper = $ ( '#gallery-minimo' );

		if ( ! $metaBoxWrapper.length ) {
			return;
		}

		$metaBoxWrapper.each(
			function() {
				let frame;
				let $metaBox    = $ ( this );
				let $addImgLink = $metaBox.find( '.va-custom-img' );
				let $imgWrapper = $metaBox.find( 'va-custom-img-wrapper' );
				let $imgIdInput = $metaBox.find( 'va-custom-img-id' );
			}
		);
	}
})(jQuery);