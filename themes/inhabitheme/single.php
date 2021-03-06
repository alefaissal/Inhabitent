<?php

/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while (have_posts()) : the_post(); ?>
		<div class='single-journal-container'>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header single-journal-header">
					<?php if (has_post_thumbnail()) : ?>
					<?php the_post_thumbnail('large'); ?>
					<?php endif; ?>
					<div class='single-journal-title'>
						<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
					</div>
					<div class="entry-meta single-journal-meta">
						<?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
					</div><!-- .entry-meta -->
				</header><!-- .entry-header -->

				<div class="entry-content single-journal-para">
					<?php the_content(); ?>
					<?php
						wp_link_pages(array(
							'before' => '<div class="page-links">' . esc_html('Pages:'),
							'after'  => '</div>',
						));
						?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php red_starter_entry_footer(); ?>

				</footer><!-- .entry-footer -->
			</article><!-- #post-## -->
		</div>
		<?php //the_post_navigation(); ?>
		<div class='single-journal-comments-container'>
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;
				?>
		</div>
		<?php endwhile; // End of the loop. 
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>