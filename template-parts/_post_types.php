<?php

add_action( 'init', 'register_post_types', 0 );

function register_post_types() {
	codex_Offer_init();
	codex_Library_init();
	codex_news_events_init();
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

?>