<?php
/**
 * Child-Theme functions and definitions
 */

function vision_prime_child_scripts() {
	wp_enqueue_style( 'vision-prime-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'starter-base' ) );
	wp_enqueue_style( 'vision-prime-child-blog', get_stylesheet_directory_uri() . '/assets/css/blog.css', array( 'starter-base' ), time() );
}
add_action( 'wp_enqueue_scripts', 'vision_prime_child_scripts' );