<?php
/**
 * Single Post Page
 *
 * @package Merak
 */

get_header();
?>

<section class="va-single-post-wrapper">
	<div class="container">
		<?php
		if ( have_posts() ) :
			?>
			<div class="row spacing-col-1">
				<?php
				while ( have_posts() ) :
					?>
					<?php the_post(); ?>
					<div class="col-lg-9 col-md-9 col-sm-12">
						<article class="va_post">
							<div class="va-post-img">
								<?php echo get_the_post_thumbnail(); ?>
							</div>
							<div class="va-category">
								<?php foreach ( get_the_category() as $category ) : ?>
									<?php echo esc_html( $category->name ); ?>
								<?php endforeach; ?>
							</div>
							<div class="va-post-title">
								<h4>
										<?php the_title(); ?>
								</h4>
							</div>
							<div class="va-post-content">
								<?php the_content(); ?>
							</div>
						</article>
					</div>
				<?php endwhile; ?>
				<div class="col-lg-3 col-md-3 col-sm-12 col-spacing-20">
					<?php dynamic_sidebar( 'va-blog-sidebar' ); ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="va-post-comments">
			<?php comments_template(); ?>
		</div>
	</div>
</section>

<?php
get_footer();
