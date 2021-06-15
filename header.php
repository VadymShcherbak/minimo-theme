<?php
/**
 * Header Theme
 *
 * @package Minimo
 */

?>

<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
	<title>Minimo</title>
</head>
<body <?php body_class(); ?>>

<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>
<header class="va-main-header">
	<div class="container">
		<div class="va-header-wrapper">
			<div class="va-header-logo">
				<img src="<?php echo VA_MINIMO_DIR_URI . '/assets/img/minimo-logo.jpg'; ?>" alt="logo">
			</div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'minimo-header-menu',
					'menu'           => 'Header Menu',
					'container'      => false,
					'menu_class'     => 'va-main-menu',
				)
			);
			?>
		</div>
	</div>
</header>
