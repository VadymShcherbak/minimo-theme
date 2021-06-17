<?php
/**
 * Single Hotel Page
 *
 * @package Minimo
 */

get_header();
?>

	<section class="va-single-post-wrapper">
		<div class="container">
			<?php
			if ( have_posts() ) :
				?>
					<?php
					while ( have_posts() ) :
						?>
						<?php the_post(); ?>
							<article class="va_post">
								<div class="va-post-img">
									<?php echo get_the_post_thumbnail(); ?>
								</div>
								<div class="va-category">
									<?php echo get_the_term_list( get_the_ID(), 'taxonomy' ); ?>
								</div>
								<div class="va-post-title">
									<h4>
										<?php the_title(); ?>
									</h4>
								</div>
								<div class="va-post-content va-single-post-content">
									<?php the_content(); ?>
								</div>
							</article>
					<?php endwhile; ?>
			<?php endif; ?>
			<div class="va-post-comments">
				<?php comments_template(); ?>
			</div>
		</div>
	</section>

<?php
get_footer();
