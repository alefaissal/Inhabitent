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
			<h1>Latest Adventures</h1>
		</div>
		<article class="article-adventure-archive">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
					<div class='archive-adventures-flex-item'>
					<header class="entry-header adventure-header">
						<div class='adventure-archive-thumbnail'>
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('large'); ?>
							<?php endif; ?>
						</div>
						<?php the_title(sprintf('<h2 class="entry-title adventure-archive-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
					</header><!-- .entry-header -->
					<div class='journal-page-read-more adventure-page-read-more'>
						<a href=" <?php echo get_permalink(); ?>">Read more</a>
					</div>
			</div>
			<?php endwhile; ?>
			
		<?php endif; ?>
</article><!-- #post-## -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>