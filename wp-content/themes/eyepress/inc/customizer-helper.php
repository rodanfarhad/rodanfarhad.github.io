<?php
/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
if ( ! function_exists( 'eyepress_customize_partial_blogname' ) ) :
function eyepress_customize_partial_blogname() {
	esc_html(bloginfo( 'name' ));
}
endif;
/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
if ( ! function_exists( 'eyepress_customize_partial_blogdescription' ) ) :
function eyepress_customize_partial_blogdescription() {
	esc_html(bloginfo( 'description' ));
}
endif;


//Sanitize footer text
if ( ! function_exists( 'eyepress_sanitize_footer_text' ) ) :
function eyepress_sanitize_footer_text($value){ 
    if(empty($value)){
        $value = '<a href="'.esc_url( __( 'https://wordpress.org/', 'eyepress' ) ).'">'.esc_html__( 'Proudly powered by WordPress', 'eyepress' ).'</a> <span class="sep"> | </span>'.esc_html__('Theme: EyePress by', 'eyepress').' <a href="'.esc_url('https://wpthemespace.com/').'">'.esc_html__('wp theme space','eyepress').'</a>';
    }
    return $value;
}
endif;
//Sanitize theme style
if ( ! function_exists( 'eyepress_sanitize_theme_style' ) ) :
function eyepress_sanitize_theme_style($value){ 
    if(!in_array($value, array('light','dark'))){
        $value = 'light';
    }
    return $value;
}
endif;

//Sanitize blog style
if ( ! function_exists( 'eyepress_sanitize_blog_title' ) ) :
function eyepress_sanitize_blog_title($value){ 
    if(!in_array($value, array('show','hide'))){
        $value = 'hide';
    }
    return $value;
}
endif;

//Sanitize blog style
if ( ! function_exists( 'eyepress_blog_text_show_hide' ) ) :
function eyepress_blog_text_show_hide($value){ 
    if(!in_array($value, array('grid','normal'))){
        $value = 'grid';
    }
    return $value;
}
endif;
//Sanitize blog style
if ( ! function_exists( 'eyepress_sanitize_blog_style' ) ) :
function eyepress_sanitize_blog_style($value){ 
    if(!in_array($value, array('grid','normal'))){
        $value = 'grid';
    }
    return $value;
}
endif;

//Sanitize blog style
if ( ! function_exists( 'eyepress_sanitize_grid_style' ) ) :
function eyepress_sanitize_grid_style($value){ 
    if(!in_array($value, array('mesonry','fixed'))){
        $value = 'fixed';
    }
    return $value;
}
endif;


//Sanitize footer style
if ( ! function_exists( 'eyepress_sanitize_theme_footer_style' ) ) :
function eyepress_sanitize_theme_footer_style($value){ 
    if(!in_array($value, array('default','center'))){
        $value = 'default';
    }
    return $value;
}
endif;

//Sanitize sidebar options
if ( ! function_exists( 'eyepress_sanitize_sidebar_post' ) ) :
function eyepress_sanitize_sidebar_post($value){ 
    if(!in_array($value, array('no-sidebar','left-sidebar','right-sidebar'))){
        $value = 'no-sidebar';
    }
    return $value;
}
endif;

//Sanitize sidebar options
if ( ! function_exists( 'eyepress_sanitize_sidebar_page' ) ) :
function eyepress_sanitize_sidebar_page($value){ 
    if(!in_array($value, array('no-sidebar','left-sidebar','right-sidebar'))){
        $value = 'no-sidebar';
    }
    return $value;
}
endif;

//Sanitize sidebar visibility
if ( ! function_exists( 'eyepress_sanitize_sidebar_visibility' ) ) :
function eyepress_sanitize_sidebar_visibility($value){ 
    if(!in_array($value, array('all','home-only','hide'))){
        $value = 'hide';
    }
    return $value;

}
endif;

if ( ! function_exists( 'eyepress_sanitize_blog_header_sticky' ) ) :
function eyepress_sanitize_blog_header_sticky($value){ 
    if(!in_array($value, array('fixed_sticky','fixed','scroll'))){
        $value = 'fixed_sticky';
    }
    return $value;

}
endif;

//Sanitize banner slider or banner
if ( ! function_exists( 'eyepress_sanitize_slider_onoff' ) ) :
function eyepress_sanitize_slider_onoff($value){ 
    if(!in_array($value, array('banner','slider'))){
        $value = 'banner';
    }
    return $value;
}
endif;

//Sanitize banner view
if ( ! function_exists( 'eyepress_sanitize_slider_view' ) ) :
function eyepress_sanitize_slider_view($value){ 
    if(!in_array($value, array('standard','poly'))){
        $value = 'standard';
    }
    return $value;
}
endif;

//Sanitize preloader options
if ( ! function_exists( 'eyepress_sanitize_preloader' ) ) :
function eyepress_sanitize_preloader($value){ 
    if(!in_array($value, array('yes','no'))){
        $value = 'yes';
    }
    return $value;
}
endif;

// adctive call back function for header slider
if ( ! function_exists( 'eyepress_slider_show_hide' ) ) :
function eyepress_slider_show_hide(){
    if (get_theme_mod('eyepress_header_slider') == 'slider') {
        return true;
    }else{
    return false;
    }

}
endif;

if ( ! function_exists( 'eyepress_blog_title_show_hide' ) ) :
function eyepress_blog_title_show_hide(){
    if (get_theme_mod('eyepress_blog_title_desc') == 'show') {
        return true;
    }else{
    return false;
    }

}
endif;

if ( ! function_exists( 'eyepress_style_type_grid' ) ) :
function eyepress_style_type_grid(){
	if (get_theme_mod('eyepress_blog_style') == 'grid') {
		return true;
	}else{
	return false;
	}

}
endif;

if ( ! function_exists( 'eyepress_img_fourzero_img_use' ) ) :
function eyepress_img_fourzero_img_use(){
    if (get_theme_mod('eyepress_fourzerofour_img_use') == 1) {
        return true;
    }else{
    return false;
    }

}
endif;

if ( ! function_exists( 'eyepress_sanitize_image' ) ) :
function eyepress_sanitize_image( $input ){
    /* default output */
    $output = '';
    /* check file type */
    $filetype = wp_check_filetype( $input );
    $mime_type = $filetype['type'];
    /* only mime type "image" allowed */
    if ( strpos( $mime_type, 'image' ) !== false ){
        $output = $input;
    }
    return $output;
}
endif;

// render callback function
if ( ! function_exists( 'eyepress_welcome_render' ) ) :
function eyepress_welcome_render() {
	$eyepress_welcome = get_theme_mod('eyepress_welcome_text',__('WELCOME! I\'M','eyepress'));

	return $eyepress_welcome;
}
endif;

if ( ! function_exists( 'eyepress_author_name_render' ) ) :
function eyepress_author_name_render() {
	$eyepress_author = get_theme_mod('eyepress_sidemenu_name', __('Arthur Brooks','eyepress'));
	return $eyepress_author;
}
endif;



/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */

if ( ! function_exists( 'eyepress_customize_preview_js' ) ) :
function eyepress_customize_preview_js() {
	wp_enqueue_script( 'eyepress-customizer', get_template_directory_uri() .'/assets/js/customizer.js', array( 'customize-preview' ), '1.0.0', true );
}
endif;
add_action( 'customize_preview_init', 'eyepress_customize_preview_js' );



