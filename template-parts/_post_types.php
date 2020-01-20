<?php

add_action( 'init', 'codex_Offer_init' );

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

?>