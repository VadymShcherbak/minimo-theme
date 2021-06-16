<?php
/**
 * Theme Footer
 *
 * @package Minimo
 */

?>

<footer class="va-main-footer">
	<div class="container">
		<div class="va-footer-wrapper">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'va-minimo-footer-menu',
					'menu'           => 'Footer Menu',
					'container'      => false,
					'menu_class'     => 'va-footer-menu',
				)
			);
			?>
			<div class="va-footer-widgets">
				<div class="va-footer-text">
					<p>Follow</p>
				</div>
				<div class="va-social-widgets">
					<?php dynamic_sidebar( 'va-footer-sidebar' ); ?>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
