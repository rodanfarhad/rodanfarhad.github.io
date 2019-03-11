<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package eyepress
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses eyepress_header_style()
 */
if ( ! function_exists( 'eyepress_custom_header_setup' ) ) :
function eyepress_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'eyepress_custom_header_args', array(
		'default-image'          => get_template_directory_uri().'/assets/img/bg/1.jpg',
		'default-text-color'     => 'ffffff',
		'width'                  => 1900,
		'height'                 => 950,
		'flex-height'            => true,
	) ) );
}
endif;
add_action( 'after_setup_theme', 'eyepress_custom_header_setup' );
