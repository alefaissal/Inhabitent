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
			<h1>Shop Stuff</h1>
		</div>
		<div class='archive-page-nav'>
			<ul>
				<?php
				$category_id = get_cat_ID('Wear');
				// echo $category_id;
				get_category_link('Do');
				?>
				<li><a href="<?php echo get_home_url() . '/product-type/do'; ?>">Do</a></li>
				<li><a href="<?php echo get_home_url() . '/product-type/eat'; ?>">Eat</a></li>
				<li><a href="<?php echo get_home_url() . '/product-type/sleep'; ?>">Sleep</a></li>
				<li><a href="<?php echo get_home_url() . '/product-type/wear'; ?>">Wear</a></li>
			</ul>
		</div>
		<div class='archive-product-grid'>
			<?php if (have_posts()) : ?>
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

			<?php the_posts_navigation(); 
						?>

			<?php else : ?>

			<?php //get_template_part('template-parts/content', 'none'); 
				?>

			<?php endif; ?>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>