<?php

/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */



?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="pingback" href="<?php bloginfo('pingback_url');
								?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>

		<header id="masthead" class="site-header" role="banner">
			
			<div class='nav-back-color'>
				<div class='nav-header-flexbox'>
					<div>
						<a href="<?php echo get_home_url(); ?>">
						<div class='header-logo-img'></div>
							
						</a>
					</div>

					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html('Primary Menu'); ?></button>
						<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
						
					</nav><!-- #site-navigation -->
					<div id='nave-search' class='header-search-bar'>
					    <?php get_search_form(); ?>
</div>
				</div>
			</div>

		</header><!-- #masthead -->

		<div id="content" class="site-content">

			<?php  ?>