<?php

/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main archive-page-main " role="main">
		<div class='archive-page-title'>
			<?php the_archive_title('<h1 class="month-title">', '</h1>'); ?>
		</div>
		<?php if (have_posts()) : ?>

		<?php if (is_home() && !is_front_page()) : ?>
		<header>
			<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			<h1>Lateste Adventures</h1>
		</header>
		<?php endif; ?>

		<?php /* Start the Loop */ ?>
		<?php while (have_posts()) : the_post(); ?>

		<article class="article-journal" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header journal-header">
				<?php if (has_post_thumbnail()) : ?>
				<?php the_post_thumbnail('large'); ?>
				<?php endif; ?>

				<?php the_title(sprintf('<h2 class="entry-title journal-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

				<?php if ('post' === get_post_type()) : ?>
				<div class="entry-meta journal-meta">
					<?php red_starter_posted_on(); ?> / <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?> / <?php red_starter_posted_by(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content journal-content">
				<?php the_excerpt(); ?>
			</div><!-- .entry-content -->

			<div class='journal-page-read-more'>
				<a href=" <?php echo get_permalink(); ?>">Read more</a>
			</div>

		</article><!-- #post-## -->


		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

		<?php else : ?>

		<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>