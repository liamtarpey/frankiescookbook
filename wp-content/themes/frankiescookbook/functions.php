<?php

// Load CSS
function theme_styles() {

	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );


// Custom Navigation Menu
add_theme_support( 'menus' );


// Widgets
function create_widget( $name, $id, $description ) {

	$args = array(
		'name'          => __( $name ),
		'id'            => $id,
		'description'   => $description,
		'before_widget' => '<div class="sidebar-cat">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>' ); 

	register_sidebar( $args );
}
create_widget( 'Sidebar', 'sidebar', 'Displays on the home page' );


// Custom Image JSON response
function add_image_to_posts_data($response) {

	if (isset($response['posts'])) {
		foreach ($response['posts'] as $post) {
			$image = get_field('image', $post->id);
			$post->image_url = $image['url'];
		}
	} else if (isset($response['post'])) {
		$image = get_field('image', $response['post']->id);
		$response['post']->image_url = $image['url'];
	}
	return $response;

}
add_filter('json_api_encode', 'add_image_to_posts_data');


?>