<?php
$args = [
    'label' => 'Medee',
    'labels' => 'Medeenuud',
    'description' => 'Medeenii post',
    'public' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
];

register_post_type('medee', $args);

register_post_type('members', array(
	'labels' => array(
		'name'	 => 'Members',
		'singular_name' => 'Member',
		'add_new' => __( 'Add Member' ),
		'add_new_item' => __( 'Add Member' ),
		'edit_item' => 'Edit Member',
	    'new_item' => __('New Member'),
	    'view_item' => __('View Member'),
	    'search_items' => __('Search Members'),
	    'not_found' =>  __('No Members found'),
	    'not_found_in_trash' => __('No Members found in Trash'),
	),
	'public' => false,
	'exclude_from_search' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => true,
	'menu_position' => 101,
	'_edit_link' =>  'post.php?post=%d',
	'query_var' => false,
	'supports' => array('title', 'page-attributes', 'editor', 'thumbnail'),
	'has_archive' => false,
));