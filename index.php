<?php
/**
 * Blog posts page
 *
 * @package Minimo
 */

get_header();
?>

<section class="va-blog-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-12">
				<?php
				if ( have_posts() ) :
					?>
					<div class="row spacing-col-1">
						<?php
						while ( have_posts() ) :
							?>
							<?php the_post(); ?>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<?php get_template_part( '/template-parts/blog', 'content' ); ?>
							</div>
						<?php endwhile; ?>
						<div class="va-blog-pagination col-lg-12">
							<?php
							the_posts_pagination(
								array(
									'prev_text' => '<i class="fal fa-angle-left"></i>',
									'next_text' => '<i class="fal fa-angle-right"></i>',
								)
							);
							?>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php
get_footer();
