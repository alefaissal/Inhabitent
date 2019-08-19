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
			<!-- <div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php //echo esc_url( home_url( '/' ) ); 
																		?>" rel="home"><?php //bloginfo( 'name' ); 
																						?></a></h1>
					<p class="site-description"><?php //bloginfo( 'description' ); 
												?></p>
				</div> -->
			<!-- .site-branding -->

<?php
// var_dump(get_page_template());
// var_dump(is_page_template('page-about.php'));
// if(is_page_template('page-about.php')){
// 	echo 'yup';
// 	die();
// }
?>


			<div class='nav-back-color'>
				<div class='nav-header-flexbox'>
					<div>
						<a href="<?php echo get_home_url(); ?>">
						<img >
							<!-- <img src="<?php //echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-tent-white.svg" alt="inhabitent logo"> -->
						</a>
					</div>

					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html('Primary Menu'); ?></button>
						<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
					</nav><!-- #site-navigation -->
				</div>
			</div>

		</header><!-- #masthead -->

		<div id="content" class="site-content">

			<?php  ?>