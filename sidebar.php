<?php
/**
 * Main sidebar
 *
 * @package Minimo
 */

?>
<?php if ( is_active_sidebar( 'va-blog-sidebar' ) ) : ?>
	<div class="col-lg-3 col-md-3 col-sm-12 col-spacing-20">
		<?php dynamic_sidebar( 'va-blog-sidebar' ); ?>
	</div>
<?php endif; ?>
