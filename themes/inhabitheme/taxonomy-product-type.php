<?php

/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
 
<div id="primary" class="content-area">
	<main id="main" class="site-main archive-page-main" role="main">
		<div class='archive-page-title'>
			<?php
				the_archive_title('<h1 class="page-title">', '</h1>');
				?>
			<?php
				the_archive_description('<div class="taxonomy-description archive-single-category-description">', '</div>');
				?>
			
		</div>
		<div class='archive-product-grid'>
		<?php if (have_posts()) : ?>
		<?php /* Start the Loop */ ?>
		<?php while (have_posts()) : the_post(); ?>
		<div class='archive-product-grid-item'>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header">
						<?php if (has_post_thumbnail()) : ?>
						<a href=" <?php echo get_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
						<?php endif; ?>
						<div class='grid-item-text'>
							<p><?php the_title(); ?></p>
							<div class='dots'></div>
							<span class='archive-product-grid-price'>$<?php echo CFS()->get('product_price'); ?></span>

						</div>

					</header><!-- .entry-header -->


				</article><!-- #post-## -->
			</div>
		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

		<?php else : ?>

		<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>
</div>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>