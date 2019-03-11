<?php 
/*This file is part of eyepress child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/
function personal_eye_fonts_url() {
	$fonts_url = '';

		$font_families = array();

		$font_families[] = 'ource+Sans+Pro:400,600';
		$font_families[] = 'Oswald:400,600,700';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );


	return esc_url_raw( $fonts_url );
}


function personal_eye_enqueue_child_styles() {
	wp_enqueue_style( 'eyepersonal-font', personal_eye_fonts_url(), array(), null );
	wp_enqueue_style( 'eyepersonal-parent-style', get_template_directory_uri() . '/style.css',array('bootstrap','eyepress-google-font','slick.min', 'eyepress-default'), '', 'all');
   wp_enqueue_style( 'eyepersonal-main',get_stylesheet_directory_uri() . '/assets/css/main.css',array(), '', 'all');
  
}
add_action( 'wp_enqueue_scripts', 'personal_eye_enqueue_child_styles');


/**
 * Customizer additions.
 */
require get_stylesheet_directory() . '/inc/customizer.php';
