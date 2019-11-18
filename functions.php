<?php
//---
function login_redirect(){
	return home_url('/');
}
add_filter( 'login_redirect', 'login_redirect' );

// function logout_redirect(){
// 	return home_url('/');
// }
// add_filter( 'logout_redirect', 'logout_redirect' );
//--- Enqueue Styles & Scripts 
function WP_scripted_styles()
{
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'header', get_template_directory_uri().'/CSS/header.css' );
	wp_enqueue_style( 'index', get_template_directory_uri().'/CSS/index.css' );
	wp_enqueue_style( 'Font-Awsome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css"', '5.5.0', $media = 'all' );
	wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri().'/bootstrap-4.3.1/css/bootstrap-grid.css' );
	wp_enqueue_style( 'bootstrap-grid.min', get_template_directory_uri().'/bootstrap-4.3.1/css/bootstrap-grid.min.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/bootstrap-4.3.1/css/bootstrap.css' );
	wp_enqueue_style( 'bootstrap.min', get_template_directory_uri().'/bootstrap-4.3.1/css/bootstrap.min.css' );
	wp_enqueue_script( 'bootstrap.bundle', get_template_directory_uri().'/bootstrap-4.3.1/js/bootstrap.bundle.js' );
	wp_enqueue_script( 'bootstrap.bundle.min', get_template_directory_uri().'/bootstrap-4.3.1/js/bootstrap.bundle.min.js' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/bootstrap-4.3.1/js/bootstrap.js' );
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri().'/bootstrap-4.3.1/js/bootstrap.min.js' );
	wp_enqueue_script( 'F-Awsome', 'https://kit.fontawesome.com/aa2d2c14de.js');
}
add_action( 'wp_enqueue_scripts', 'WP_scripted_styles');

//---
function WP_after_setup_register()
{
	register_nav_menus( array(
		'main-menu-logged-in'  => __('main-menu-1-logged-in'),
		'main-menu-logged-out' => __('main-menu-1-logged-out'),
	));

	$shared_args = array(
		'before_widget' => '<div id="%2$s" class="widget-container %1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>'
	);
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'id' => 'sidebar-left-1',
				'name'=> __( 'Sidebar Left 1', 'textdomain' ),
				'description' => __( 'The primary widget area'),
		)
	));

	register_sidebar(
		array_merge(
			$shared_args,
			array(
			'id' => 'sidebar-right-2',
			'name'=> __( 'Sidebar Right 2', 'textdomain' ),
			'description' => __( 'The primary widget area'),
		)
	));

}
add_action( 'after_setup_theme', 'WP_after_setup_register' );



//  retreive comments 

function retreive_comments() { // My Function to retreive comments
	
	global $wpdb;
	global $post;
	//$args = wp_parse_args( $args, $defaults );

	$where = $wpdb->prepare("comment_post_ID=33");


	$results = $wpdb->get_results( "SELECT comment_content FROM $wpdb->comments WHERE comment_post_ID=".$post->ID." ", ARRAY_A );
	// debug the results with print_r($results); 
	$meta = array();
	if ( ! empty( $results ) ) {
		foreach ( $results as $row ) {
			$meta[] = $row['comment_content'];
		}
	}
	
	return $meta;
}
