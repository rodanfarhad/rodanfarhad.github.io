<?php
/**
 * Add inline css 
 *
 * 
 */
if ( ! function_exists( 'eyepress_header_inline_css' ) ) :
function eyepress_header_inline_css() {
    
 $eyepress_header_slider = get_theme_mod('eyepress_header_slider','banner');
 $eyepress_slider_img1 = get_theme_mod('eyepress_slider_img1','');
 $eyepress_slider_img2 = get_theme_mod('eyepress_slider_img2','');
 if($eyepress_slider_img1){
$meats_sliderimg1_url = wp_get_attachment_image_url( $eyepress_slider_img1, 'full');
}else{
$meats_sliderimg1_url = get_template_directory_uri().'/assets/img/bg/1.jpg)';
}
	
 if($eyepress_slider_img2){
$meats_sliderimg2_url = wp_get_attachment_image_url( $eyepress_slider_img2, 'full');
}else{
$meats_sliderimg2_url = '';
}
	
    
        $style = '';
   
		// Has the text been hidden?
		if (has_header_image()){
		$style .= 'body .bg-img-1{background-image:url("'.esc_url(get_header_image()).'")}';
         }else{
         $style .= 'body .bg-img-1{background-image:url('.get_template_directory_uri().'/assets/img/bg/1.jpg)}';
         }

        if($eyepress_header_slider == 'slider'){
        	if ($meats_sliderimg1_url) {
         	$style .= 'body .bg-img-2{background-image:url("'.esc_url($meats_sliderimg1_url).'")}';
         	}
        	if ($meats_sliderimg2_url) {
         	$style .= 'body .bg-img-3{background-image:url("'.esc_url($meats_sliderimg2_url).'")}';
         	}


         }


   
        wp_add_inline_style( 'eyepress-style', $style );
}
add_action( 'wp_enqueue_scripts', 'eyepress_header_inline_css' );
endif;
