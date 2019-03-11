<?php
/**
 *
 *
 * Please browse readme.txt for credits and forking information
 *
 * @package elegantwriting
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses elegantwriting_header_style()
 */
function elegantwriting_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'elegantwriting_custom_header_args', array(
		'default-image'          => '%s/img/default-bg.png',
		'default-text-color'     => 'fff',
		'width'                  => 1600,
		'height'                 => 500,
		'flex-height'            => true,
		'flex-width'	         => true,
		'wp-head-callback'       => 'elegantwriting_header_style',
		) ) );


	/*
	 * Default custom headers packaged with the theme.
	 * %s is a placeholder for the theme template directory URI.
	 */
	register_default_headers( array(
		'mountains' => array(
			'url'           => '%s/img/default-bg.png',
			'thumbnail_url' => '%s/img/default_thumbnail.png',
			'description'   => _x( 'Default', 'Default header image', 'elegantwriting' )
			),	
		) );
}
add_action( 'after_setup_theme', 'elegantwriting_custom_header_setup' );

if ( ! function_exists( 'elegantwriting_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see elegantwriting_custom_header_setup().
 */
function elegantwriting_header_style() {
	$header_image = get_header_image();
	$header_text_color   = get_header_textcolor();

	// If no custom options for text are set, let's bail.
	if ( empty( $header_image ) && $header_text_color == get_theme_support( 'custom-header', 'default-text-color' ) ){
		return;
	}

	// If we get this far, we have custom styles.
	?>
	<style type="text/css" id="elegantwriting-header-css">
	<?php
	if ( ! empty( $header_image ) ) :

	?>





	header#masthead {
		background-image: url(<?php header_image(); ?>);
	}		
	<?php endif; 
	?>


		
	<?php 
		if ( ! display_header_text() ) :

	?>
		.site-title,
		.site-description,
		.site-branding {
			position: absolute;
			clip: rect(1px 1px 1px 1px); /* IE7 */
			clip: rect(1px, 1px, 1px, 1px);
			display:none;
		}
	<?php
		endif;
		if ( empty( $header_image ) ) :
	?>
	<?php
		else:
	?>

	<?php endif; ?>


	</style>
	<?php
}
endif; 




