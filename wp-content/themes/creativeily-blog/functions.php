<?php 
//Dequeue JS
function creativeily_blog_dequeue_scripts() {
    wp_dequeue_script( 'creativeily-script' );
        wp_deregister_script( 'creativeily-script' );
}
add_action( 'wp_print_scripts', 'creativeily_blog_dequeue_scripts' ); 


//Enqueue JS & CSS
add_action( 'wp_enqueue_scripts', 'creativeily_blog_enqueue_styles' );
function creativeily_blog_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
	wp_enqueue_script('creativeily-child-script', get_stylesheet_directory_uri().'/assets/js/creativeily.js', array( 'jquery' ));
}


// New header 
require_once( get_stylesheet_directory() . '/inc/custom-header.php' );


// New fonts
function creativeily_blog_load_google_fonts() {
	wp_enqueue_style( 'creativeily-blog-google-fonts', 'http://fonts.googleapis.com/css?family=Merriweather:700i' ); 
}
add_action( 'wp_enqueue_scripts', 'creativeily_blog_load_google_fonts' ); 

