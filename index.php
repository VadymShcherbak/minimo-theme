<?php
/**
 * WP lesson
 *
 * @package Merak
 */

get_header();
?>

<section class="va-blog-wrapper">
	<div class="container">
		<?php
		if ( have_posts() ) :
			?>
		<div class="row spacing-col-1">
			<?php
			while ( have_posts() ) :
					the_post();
				?>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="va_post">
					<div class="va-post-img">
					<?php echo get_the_post_thumbnail(); ?>
					</div>
					<div class="va-category">
						<?php foreach ( get_the_category() as $category ) : ?>
							<a href="<?php echo esc_url( get_category_link( $category ) ); ?>">
								<?php echo esc_html( $category->name ); ?>
							</a>
						<?php endforeach; ?>
					</div>
					<div class="va-post-title">
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>
					<div class="va-post-content">
						<?php the_excerpt(); ?>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
