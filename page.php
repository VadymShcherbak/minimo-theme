<?php
/**
 * Page template minimo
 *
 * @package Minimo
 */

get_header();
?>

<section class="home-page">
	<div class="container">
		<?php the_content(); ?>
	</div>
</section>

<?php
get_footer();
