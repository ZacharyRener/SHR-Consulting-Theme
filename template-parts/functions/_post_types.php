<?php

add_action( 'init', 'register_post_types', 0 );

function register_post_types() {
	codex_Offer_init();
	codex_Library_init();
	codex_Leadership_init();
	codex_news_events_init();
	codex_Job_init();
}

function codex_Offer_init() {
	$labels = array(
		'name'               => _x( 'Offers', 'post type general name', '' ),
		'singular_name'      => _x( 'Offer', 'post type singular name', '' ),
		'menu_name'          => _x( 'Offers', 'admin menu', '' ),
		'name_admin_bar'     => _x( 'Offer', 'add new on admin bar', '' ),
		'add_new'            => _x( 'Add New', 'Offer', '' ),
		'add_new_item'       => __( 'Add New Offer', '' ),
		'new_item'           => __( 'New Offer', '' ),
		'edit_item'          => __( 'Edit Offer', '' ),
		'view_item'          => __( 'View Offer', '' ),
		'all_items'          => __( 'All Offers', '' ),
		'search_items'       => __( 'Search Offers', '' ),
		'parent_item_colon'  => __( 'Parent Offers:', '' ),
		'not_found'          => __( 'No Offers found.', '' ),
		'not_found_in_trash' => __( 'No Offers found in Trash.', '' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', '' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'offer' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title' )
	);

	register_post_type( 'Offer', $args );
}

function codex_Leadership_init() {
	$labels = array(
		'name'               => _x( 'Leadership', 'post type general name', '' ),
		'singular_name'      => _x( 'Leadership', 'post type singular name', '' ),
		'menu_name'          => _x( 'Leadership', 'admin menu', '' ),
		'name_admin_bar'     => _x( 'Leadership', 'add new on admin bar', '' ),
		'add_new'            => _x( 'Add New', 'Leadership', '' ),
		'add_new_item'       => __( 'Add New Leadership', '' ),
		'new_item'           => __( 'New Leadership', '' ),
		'edit_item'          => __( 'Edit Leadership', '' ),
		'view_item'          => __( 'View Leadership', '' ),
		'all_items'          => __( 'All Leadership', '' ),
		'search_items'       => __( 'Search Leadership', '' ),
		'parent_item_colon'  => __( 'Parent Leadership:', '' ),
		'not_found'          => __( 'No Leadership found.', '' ),
		'not_found_in_trash' => __( 'No Leadership found in Trash.', '' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', '' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'our-team' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title' )
	);

	register_post_type( 'Leadership', $args );
}

function codex_Library_init() {
	$labels = array(
		'name'               => _x( 'Library', 'post type general name', '' ),
		'singular_name'      => _x( 'Library', 'post type singular name', '' ),
		'menu_name'          => _x( 'Library', 'admin menu', '' ),
		'name_admin_bar'     => _x( 'Library', 'add new on admin bar', '' ),
		'add_new'            => _x( 'Add New', 'Library', '' ),
		'add_new_item'       => __( 'Add New Library Entry', '' ),
		'new_item'           => __( 'New Library', '' ),
		'edit_item'          => __( 'Edit Library', '' ),
		'view_item'          => __( 'View Library', '' ),
		'all_items'          => __( 'All Library', '' ),
		'search_items'       => __( 'Search Library', '' ),
		'parent_item_colon'  => __( 'Parent Library:', '' ),
		'not_found'          => __( 'No Library entries found.', '' ),
		'not_found_in_trash' => __( 'No Library entries found in Trash.', '' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', '' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'library' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt')
	);

	register_post_type( 'Library', $args );

	$args = array(
        'label'        => __( 'Library Type', 'textdomain' ),
        'rewrite'      => false,
        'hierarchical' => true
    );
     
    register_taxonomy( 'library-type', 'library', $args );

}

function codex_news_events_init() {
	$labels = array(
		'name'               => _x( 'News & Events', 'post type general name', '' ),
		'singular_name'      => _x( 'News & Events', 'post type singular name', '' ),
		'menu_name'          => _x( 'News & Events', 'admin menu', '' ),
		'name_admin_bar'     => _x( 'News & Events', 'add new on admin bar', '' ),
		'add_new'            => _x( 'Add New', 'News & Events', '' ),
		'add_new_item'       => __( 'Add New News & Events Entry', '' ),
		'new_item'           => __( 'New News & Events', '' ),
		'edit_item'          => __( 'Edit News & Events', '' ),
		'view_item'          => __( 'View News & Events', '' ),
		'all_items'          => __( 'All News & Events', '' ),
		'search_items'       => __( 'Search News & Events', '' ),
		'parent_item_colon'  => __( 'Parent News & Events:', '' ),
		'not_found'          => __( 'No News & Events entries found.', '' ),
		'not_found_in_trash' => __( 'No News & Events entries found in Trash.', '' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', '' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'news-events' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt')
	);

	register_post_type( 'News & Events', $args );

}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Global Settings',
		'menu_title'	=> 'Global Settings',
		'menu_slug' 	=> 'global-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

}

function codex_Job_init() {
	$labels = array(
		'name'               => _x( 'Jobs', 'post type general name', '' ),
		'singular_name'      => _x( 'Job', 'post type singular name', '' ),
		'menu_name'          => _x( 'Jobs', 'admin menu', '' ),
		'name_admin_bar'     => _x( 'Job', 'add new on admin bar', '' ),
		'add_new'            => _x( 'Add New', 'Job', '' ),
		'add_new_item'       => __( 'Add New Job', '' ),
		'new_item'           => __( 'New Job', '' ),
		'edit_item'          => __( 'Edit Job', '' ),
		'view_item'          => __( 'View Job', '' ),
		'all_items'          => __( 'All Jobs', '' ),
		'search_items'       => __( 'Search Jobs', '' ),
		'parent_item_colon'  => __( 'Parent Jobs:', '' ),
		'not_found'          => __( 'No Jobs found.', '' ),
		'not_found_in_trash' => __( 'No Jobs found in Trash.', '' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', '' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'job' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title' )
	);

	register_post_type( 'job', $args );
}

?>