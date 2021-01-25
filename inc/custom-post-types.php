<?php
/**
 * Define the requires custom post types for the CAT site
 * 
 * @package CAT
 */

add_action( 'init', 'cat_register_action_cpts' );

/* Register the action CPT for the CAT site */
function cat_register_action_cpts() {
	$labels = array(
		'name'                  => _x( 'Actions', 'Post type general name', 'cat' ),
		'singular_name'         => _x( 'Action', 'Post type singular name', 'cat' ),
		'menu_name'             => _x( 'Actions', 'Admin Menu text', 'cat' ),
		'name_admin_bar'        => _x( 'Action', 'Add New on Toolbar', 'cat' ),
		'add_new'               => __( 'Add New', 'cat' ),
		'add_new_item'          => __( 'Add New Action', 'cat' ),
		'new_item'              => __( 'New Action', 'cat' ),
		'edit_item'             => __( 'Edit Action', 'cat' ),
		'view_item'             => __( 'View Action', 'cat' ),
		'all_items'             => __( 'All Actions', 'cat' ),
		'search_items'          => __( 'Search Actions', 'cat' ),
		'parent_item_colon'     => __( 'Parent Actions:', 'cat' ),
		'not_found'             => __( 'No Actions found.', 'cat' ),
		'not_found_in_trash'    => __( 'No Actions found in Trash.', 'cat' ),
		'featured_image'        => _x( 'Action Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'cat' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'cat' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'cat' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'Action' ),
		'archives'              => _x( 'Action Guides', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'Action' ),
		'insert_into_item'      => _x( 'Insert into Action', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'Action' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Action', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'Action' ),
		'filter_items_list'     => _x( 'Filter Actions list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'Action' ),
		'items_list_navigation' => _x( 'Actions list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'Action' ),
		'items_list'            => _x( 'Actions list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'Action' ),
	);

	$args = array(
		'labels'             => $labels,
		'description'        => 'Action custom post type.',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'actions' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'taxonomies'         => array( 'category', 'post_tag' ),
		'show_in_rest'       => true,
	);

	register_post_type( 'action', $args );
}
