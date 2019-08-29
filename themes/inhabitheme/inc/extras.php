<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes($classes)
{
    // Adds a class of group-blog to blogs with more than 1 published author.
    if (is_multi_author()) {
        $classes[] = 'group-blog';
    }

    //inhabitente_debug($classes);
    if (is_singular('page')) {
        global $post;
        // inhabitente_debug($post);
        $classes[] = 'page-' . $post->post_name;
    }
    // inhabitente_debug($classes);

    return $classes;
}
add_filter('body_class', 'red_starter_body_classes');

function inhabitent_remove_submenus()
{
    remove_submenu_page('themes.php', 'theme-editor.php');
    remove_submenu_page('plugins.php', 'plugin-editor.php');
}
add_action('admin_menu', 'inhabitent_remove_submenus', 110);

function inhabitente_debug($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}


// custom login for theme
function custom_login()
{
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/customlogin.css" />';
}

add_action('login_head', 'custom_login');

function my_custom_login_logo()
{
    echo '<style type="text/css">
		#login h1 a { background-image:url(' . get_stylesheet_directory_uri() . '/images/logos/inhabitent-logo-text-dark.svg);
		height: 53px; width: 300px; background-size: cover;}
	</style>';
}
add_action('login_head', 'my_custom_login_logo');

function my_custom_login_url($url)
{
    return get_bloginfo('url');
}
add_filter('login_headerurl', 'my_custom_login_url');



add_filter( 'body_class', 'addBodyClass' );

function addBodyClass( $classes ) {

  if( is_front_page() || is_page( 'About' ) || is_singular( 'adventure_type' ) ) {
    $classes[] = 'large-image';
  }elseif(is_front_page()){
    $classes[] = 'front-page-scroll';
  }else{
    $classes[] = 'no-large-image'; 
  }

  return $classes;
}



add_filter( 'get_the_archive_title', function ( $title ) {

    if( is_tax('product-type') ) {

        $title = single_term_title( '', false );

    }
    elseif( is_post_type_archive('product') ) {

        $title = 'Shop Stuff';
    }
    return $title;

});



add_filter( 'the_archive_title', function ( $title ) {

    if( is_tag() ) {

        $title = single_tag_title( '', false );

    }

    return $title;

});

// window.onscroll = function() {scrollFunction()};
// function scrollFunction() {
//     if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
//      $("#header").addClass = "30px";
//     } else {
//       document.getElementById("header").style.fontSize = "90px";
//     }
//   }

  
//   add_filter( 'body_class', 'addBodyClass' );