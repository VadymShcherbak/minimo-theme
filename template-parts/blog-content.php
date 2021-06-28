<?php
/**
 * Blog content
 *
 * @package Minimo
 */

?>

<article class="va_post">
	<div class="va-post-img">
		<a href="<?php echo esc_url( get_permalink() ); ?>">
			<?php echo get_the_post_thumbnail(); ?>
		</a>
	</div>
	<div class="va-category">
		<?php foreach ( get_the_category() as $category ) : ?>
			<a href="<?php echo esc_url( get_category_link( $category ) ); ?>">
				<?php echo esc_html( $category->name ); ?>
			</a>
		<?php endforeach; ?>
	</div>
	<div class="va-post-title">
		<h4>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h4>
	</div>
	<div class="va-post-content">
		<?php the_excerpt(); ?>
	</div>
</article>
