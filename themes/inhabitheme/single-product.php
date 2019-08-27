<?php

/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class='single-product-container'>
			<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class='single-product-flexbox'>
					<div class='single-product-thumbnail'>
						<?php if (has_post_thumbnail()) : ?>
						<?php the_post_thumbnail('large'); ?>
						<?php endif; ?>
					</div>
					<div class='single-product-text'>
						<?php
							the_title('<h1 class="entry-title">', '</h1>'); ?>
						<div class='single-product-price'>
							$<?php echo CFS()->get('product_price'); ?>
						</div>
						<div class="entry-content">
							<?php the_content(); ?>
							<?php
								wp_link_pages(array(
									'before' => '<div class="page-links">' . esc_html('Pages:'),
									'after' => '</div>',
								));
								?>
						</div><!-- .entry-content -->
						<div class="single-product-links-container">
							<div class="social-buttons">
								<button type="button" class="black-btn"><i class="fab fa-facebook"></i>Like</button>
								<button type="button" class="black-btn"><i class="fab fa-twitter"></i>Tweet</button>
								<button type="button" class="black-btn"><i class="fab fa-pinterest"></i>Pin</button>
							</div>
						</div>
					</div>
				</div>
			</article><!-- #post-## -->

			<?php endwhile; ?>

		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>