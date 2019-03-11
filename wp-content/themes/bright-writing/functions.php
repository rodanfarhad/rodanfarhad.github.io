<?php 

/* New design */
add_action( 'wp_enqueue_scripts', 'bright_writing_enqueue_styles' );
function bright_writing_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
} 

/** New fonts **/
function bright_writing_google_fonts() {
	wp_enqueue_style( 'bright-writing-google-fonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700', false ); 
}
add_action( 'wp_enqueue_scripts', 'bright_writing_google_fonts' );

/**
 * Implement the Custom Header feature.
 */
require_once( get_stylesheet_directory() . '/inc/custom-header.php' );

/* New customizer features */
function bright_writing_customizer_color_settings( $wp_customize ) {

	$wp_customize->add_setting( 'navigation_background_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navigation_background_color', array(
		'label'       => __( 'Background Color', 'bright-writing' ),
		'section'     => 'elegantwriting_navigation',
		'settings'    => 'navigation_background_color',
		) ) );
	$wp_customize->add_setting( 'navigation_link_color', array(
		'default'           => '##333',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navigation_link_color', array(
		'label'       => __( 'Link Color', 'bright-writing' ),
		'section'     => 'elegantwriting_navigation',
		'settings'    => 'navigation_link_color',
		) ) );
	$wp_customize->add_setting( 'navigation_social_link_color', array(
		'default'           => '#c69c6d',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navigation_social_link_color', array(
		'label'       => __( 'Social Media Icon Color', 'bright-writing' ),
		'section'     => 'elegantwriting_navigation',
		'settings'    => 'navigation_social_link_color',
		) ) );
}
add_action( 'customize_register', 'bright_writing_customizer_color_settings' );



if(! function_exists('bright_writing_customizer_css' ) ):
	function bright_writing_customizer_css(){
		?>
		<style type="text/css">
			#site-navigation .menu li, #site-navigation .menu .sub-menu, #site-navigation .menu .children, nav#site-navigation{ background: <?php echo esc_attr(get_theme_mod( 'navigation_background_color')); ?>; }
			#site-navigation .menu li a, #site-navigation .menu li a:hover, #site-navigation .menu li a:active, #site-navigation .menu > li.menu-item-has-children > a:after, #site-navigation ul.menu ul a, #site-navigation .menu ul ul a, #site-navigation ul.menu ul a:hover, #site-navigation .menu ul ul a:hover, div#top-search a, div#top-search a:hover { color: <?php echo esc_attr(get_theme_mod( 'navigation_link_color')); ?>; }
			.m_menu_icon { background-color: <?php echo esc_attr(get_theme_mod( 'navigation_link_color')); ?>; }
			#top-social a, #top-social a:hover, #top-social a:active, #top-social a:focus, #top-social a:visited{ color: <?php echo esc_attr(get_theme_mod( 'navigation_social_link_color')); ?>; }  
		</style>
		<?php }
		add_action( 'wp_head', 'bright_writing_customizer_css' );
		endif;
