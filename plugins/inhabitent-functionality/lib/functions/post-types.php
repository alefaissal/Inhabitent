<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function inhabitent_cpt_product()
{

    $labels = array(
        'name' => 'Products',
        'singular_name' => 'Product',
        'menu_name' => 'Products',
        'name_admin_bar' => 'Product',
        'archives' => 'Product Archives',
        'attributes' => 'Product Attributes',
        'parent_item_colon' => 'Parent Product:',
        'all_items' => 'All Products',
        'add_new_item' => 'Add New Product',
        'add_new' => 'Add New Product',
        'new_item' => 'New Product',
        'edit_item' => 'Edit Product',
        'update_item' => 'Update Product',
        'view_item' => 'View Product',
        'view_items' => 'View Products',
        'search_items' => 'Search Product',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in Trash',
        'featured_image' => 'Product Image',
        'set_featured_image' => 'Set Product image',
        'remove_featured_image' => 'Remove Product image',
        'use_featured_image' => 'Use as Product image',
        'insert_into_item' => 'Insert into Product',
        'uploaded_to_this_item' => 'Uploaded to this Product',
        'items_list' => 'Products list',
        'items_list_navigation' => 'Products list navigation',
        'filter_items_list' => 'Filter Products list',
    );
    $args = array(
        'label' => 'Product',
        'description' => 'Product type for inhabitent',
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-cart',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => 'products',
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'show_in_rest' => true,
        'template_lock' => 'all', //to lock all gutenberg from show in product page
        'template' => array(
            array('core/paragraph', array(
                'placeholder' => 'Add the product description here.',
            )),
        ),
    );
    register_post_type('product', $args);

}
add_action('init', 'inhabitent_cpt_product', 0);

function inhabitent_ctp_adventures() {

	$labels = array(
		'name'                  => _x( 'Adventure', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Adventures', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Adventures', 'text_domain' ),
		'name_admin_bar'        => __( 'Adventures', 'text_domain' ),
		'archives'              => __( 'Adventure Archives', 'text_domain' ),
		'attributes'            => __( 'Adventure Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Adventure:', 'text_domain' ),
		'all_items'             => __( 'All Adventures', 'text_domain' ),
		'add_new_item'          => __( 'Add New Adventure', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Adventure', 'text_domain' ),
		'edit_item'             => __( 'Edit Adventure', 'text_domain' ),
		'update_item'           => __( 'Update Adventure', 'text_domain' ),
		'view_item'             => __( 'View Adventure', 'text_domain' ),
		'view_items'            => __( 'View Adventures', 'text_domain' ),
		'search_items'          => __( 'Search Adventure', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Adventure', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Adventure', 'text_domain' ),
		'items_list'            => __( 'Adventures list', 'text_domain' ),
		'items_list_navigation' => __( 'Adventures list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Adventures list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Adventures', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments' ),
		// 'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-site-alt',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => 'adventures',
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'show_in_rest' => true,
        
	);
	register_post_type( 'adventure_type', $args );

}
add_action( 'init', 'inhabitent_ctp_adventures', 0 );
