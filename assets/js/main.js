( function( $ ) {
	function vaInitFlickity() {
		let $flickityMainCarousel = $( '.main-carousel' );

		$flickityMainCarousel.each(
			function() {
				let $this    = $( this );
				let $columns = $this.data( 'columns' );

				$this.flickity(
					{
						cellAlign: 'left',
						contain: true,
						freeScroll: true,
						// autoPlay: true,
						groupCells: $columns,
					}
				);
			}
		);
	}

	$( document ).ready(
		function() {
			vaInitFlickity();
		}
	);
})( jQuery );
