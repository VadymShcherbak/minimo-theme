( function($) {
	function vaAddPhotoGallery() {
		let $metaBoxWrapper = $ ( '#gallery-minimo' );

		if ( ! $metaBoxWrapper.length ) {
			return;
		}

		$metaBoxWrapper.each(
			function() {
				let frame;
				let $metaBox    = $( this );
				let $addImgLink = $metaBox.find( '.va-custom-img' );
				let $imgWrapper = $metaBox.find( '.va-custom-img-wrapper' );
				let $imgIdInput = $metaBox.find( '.va-custom-img-id' );


				$addImgLink.on(
					'click',
					function (event) {
						event.preventDefault();

						if (frame) {
							frame.open();
							return;
						}

						frame = wp.media(
							{
								title: 'Add image icon for category',
								button: {
									text: 'Add image photo'
								},
								multiple: true,
							}
						);

						frame.on(
							'select',
							function () {
								let attachment   = frame.state().get( 'selection' ).toJSON();
								let idPhoto      = [];
								let idPhotoInput = $imgIdInput.val() ? $imgIdInput.val() + ',' : $imgIdInput.val();

								for ( let i = 0; i < attachment.length; i++ ) {
									idPhoto[i] = attachment[i]['id'];console.log( idPhotoInput );
									$imgWrapper.append(
										`<div class="va-custom-img-gallery" data-id="${attachment[i]['id']}">
											<img src="${attachment[i]['url']}" alt="photo hotel">
											<button class="va-remove-img">
												<i class="fas fa-times"></i>
											</button>
										</div>`
									);
								}
								$imgIdInput.val( idPhotoInput + idPhoto );
							}
						);
						frame.open();
					}
				);
			}
		)
	}

	function vaRemovePhoto() {
		$( document ).on(
			'click',
			'.va-remove-img',
			function ( event ) {
				event.preventDefault();

				let $this       = $( this );
				let $idPhoto    = $this.parent().data( 'id' ).toString();
				let $input      = $this.parents( '#gallery-minimo' ).find( '.va-custom-img-id' );
				let $inputValue = $input.val().split( ',' );

				$inputValue.splice( $.inArray( $idPhoto, $inputValue ), 1 );
				$input.val( $inputValue.join() );
				$this.parent().slideUp();
			}
		);
	}

	$( document ).ready(
		function() {
			vaAddPhotoGallery();
			vaRemovePhoto();
		}
	);

})( jQuery );
