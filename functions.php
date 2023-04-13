<?php

require_once(dirname(__File__).'/theme-config.php');

function wct_ciism_theme_setup () {

	//if(!isset($redux_demo)) {

	//}

	add_theme_support('post-thumbnails', array('post', 'page'));

	add_image_size('365x274', 365, 274, true);

}


add_action('after_theme_setup', 'wct_ciism_theme_setup');


function register_wct_ciism2021_menu() {
	register_nav_menu('header-top-menu', __( 'Header Top Menu', 'ciism2021' ));
	//register_nav_menu('footer-menu', __( 'Footer Menu', 'ciism2021' ));
}
add_action('init', 'register_wct_ciism2021_menu');


// Register Custom Post Type
function custom_post_service() {

	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'ciism 2021' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'ciism 2021' ),
		'menu_name'             => __( 'Services', 'ciism 2021' ),
		'name_admin_bar'        => __( 'Service', 'ciism 2021' ),
		'archives'              => __( 'Service Archives', 'ciism 2021' ),
		'attributes'            => __( 'Service Attributes', 'ciism 2021' ),
		'parent_item_colon'     => __( 'Parent Service:', 'ciism 2021' ),
		'all_items'             => __( 'All Services', 'ciism 2021' ),
		'add_new_item'          => __( 'Add New Service', 'ciism 2021' ),
		'add_new'               => __( 'Add New', 'Service', 'ciism 2021' ),
		'new_item'              => __( 'New Service', 'ciism 2021' ),
		'edit_item'             => __( 'Edit Service', 'ciism 2021' ),
		'update_item'           => __( 'Update Service', 'ciism 2021' ),
		'view_item'             => __( 'View Service', 'ciism 2021' ),
		'view_items'            => __( 'View Service', 'ciism 2021' ),
		'search_items'          => __( 'Search Team Service', 'ciism 2021' ),
		'not_found'             => __( 'No Team Service found', 'ciism 2021' ),
		'not_found_in_trash'    => __( 'No Service found in Trash', 'ciism 2021' ),
		'featured_image'        => __( 'Featured Image', 'ciism 2021' ),
		'set_featured_image'    => __( 'Set featured image', 'ciism 2021' ),
		'remove_featured_image' => __( 'Remove featured image', 'ciism 2021' ),
		'use_featured_image'    => __( 'Use as featured image', 'ciism 2021' ),
		'insert_into_item'      => __( 'Insert into Service', 'ciism 2021' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'ciism 2021' ),
		'items_list'            => __( 'Services list', 'ciism 2021' ),
		'items_list_navigation' => __( 'Services list navigation', 'ciism 2021' ),
		'filter_items_list'     => __( 'Filter Services list', 'ciism 2021' ),
	);
	$args = array(
		'label'                 => __( 'Service', 'ciism 2021' ),
		'description'           => __( 'Service Description', 'ciism 2021' ),
		'labels'                => $labels,
		'supports'              => false,
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'query_var' 			=> true,
		'rewrite' 				=> true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'supports' 				=> array('title', 'editor', 'thumbnail', 'thumbnail', 'page-attributes')
	);
	register_post_type( 'services', $args );
}
add_action( 'init', 'custom_post_service');
