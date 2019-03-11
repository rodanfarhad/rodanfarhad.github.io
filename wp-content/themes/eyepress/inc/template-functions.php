<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package eyepress
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
if ( ! function_exists( 'eyepress_body_classes' ) ) :
function eyepress_body_classes( $classes ) {
	$eyepress_theme_color = get_theme_mod('eyepress_theme_color','light');
	$eyepress_blog_header_sticky = get_theme_mod( 'eyepress_blog_header_sticky', 'fixed_sticky' );
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	if(is_front_page()){
		$classes[] = 'eyepress-front';
	}
	
	$eyepress_header_img_show = get_theme_mod('eyepress_header_img_show', 0);
	if (is_home() && $eyepress_header_img_show == 1) {
		$classes[] = 'home-banner-show';
	}elseif(is_home() && $eyepress_header_img_show == 0){
		$classes[] = 'home-banner-hide';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}
	if($eyepress_theme_color == 'dark'){
		$classes[] = 'eyepress-dark-version black-bg';
	}
	if($eyepress_theme_color == 'dark' && !is_front_page()){
		$classes[] = 'eyepress-dark-blog';
	}
	if($eyepress_blog_header_sticky == 'fixed'){
		$classes[] = 'eyepress-fixed-header';
	}
	if($eyepress_blog_header_sticky == 'scroll'){
		$classes[] = 'eyepress-scroll-header';
	}
	if($eyepress_blog_header_sticky == 'fixed_sticky'){
		$classes[] = 'eyepress-sticky-header';
	}

	return $classes;
}
endif;
add_filter( 'body_class', 'eyepress_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
if ( ! function_exists( 'eyepress_pingback_header' ) ) :
function eyepress_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
endif;
add_action( 'wp_head', 'eyepress_pingback_header' );
