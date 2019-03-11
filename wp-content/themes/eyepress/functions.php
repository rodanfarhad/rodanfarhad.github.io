<?php
/**
 * eyepress functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package eyepress
 */

if ( ! function_exists( 'eyepress_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function eyepress_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on eyepress, use a find and replace
		 * to change 'eyepress' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'eyepress', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'recent-blog',370, 288, true );


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'blog-menu' => esc_html__( 'Blog menu', 'eyepress' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 50,
			'width'       => 160,
			'flex-width'  => true,
			'flex-height' => true,
		) );

	add_editor_style( array( 'assets/css/bootstrap.css' ) );

	}
endif;
add_action( 'after_setup_theme', 'eyepress_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
if ( ! function_exists( 'eyepress_content_width' ) ) :
function eyepress_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'eyepress_content_width', 1170 );
}
endif;
add_action( 'after_setup_theme', 'eyepress_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
if ( ! function_exists( 'eyepress_widgets_init' ) ) :
function eyepress_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'eyepress' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'eyepress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
}
endif;
add_action( 'widgets_init', 'eyepress_widgets_init' );

/*
 * Register eyepress custom fonts.
 */
if ( ! function_exists( 'eyepress_fonts_url' ) ) :
function eyepress_fonts_url() {
	$fonts_url = '';

		$font_families = array();
		$font_families[] = 'Poppins:300,400,500,600,700,800';
		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );

	return esc_url_raw( $fonts_url );
}
endif;

/**
 * Enqueue scripts and styles.
 */
if ( ! function_exists( 'eyepress_scripts' ) ) :
function eyepress_scripts() {
	$eyepress_grid_type = get_theme_mod( 'eyepress_grid_type','fixed');

	//enqueue style
	wp_enqueue_style( 'eyepress-google-font', eyepress_fonts_url(), array(), null );
	wp_enqueue_style( 'et-lineicons', get_template_directory_uri() .'/assets/css/et-lineicons.css', array(),'1.0.0','all' );
	wp_enqueue_style( 'material-design-iconic-font', get_template_directory_uri() .'/assets/css/material-design-iconic-font.css', array(),'1.0.0','all' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css', array(),'3.3.5','all' );
	wp_enqueue_style( 'slick.min', get_template_directory_uri() .'/assets/css/slick.min.css', array(),'1.5.9','all' );
	wp_enqueue_style( 'eyepress-default', get_template_directory_uri() .'/assets/css/eyepress-default.css', array(),'1.1.0','all' );
	wp_enqueue_style( 'eyepress-style', get_stylesheet_uri() );
	wp_enqueue_style( 'eyepress-responsive', get_template_directory_uri() .'/assets/css/responsive.css', array('eyepress-style'),'1.1.0','all' );

	//enqueue scripts
	wp_enqueue_script( 'modernizr-js', get_template_directory_uri() .'/assets/js/vendor/modernizr-2.8.3.js', array(), '2.8.3', false );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() .'/assets/js/bootstrap.min.js', array('jquery'), '3.3.5', true );
	wp_enqueue_script( 'jquery.waypoints-js', get_template_directory_uri() .'/assets/js/jquery.waypoints.js', array('jquery'), '2.0.3', true );
	wp_enqueue_script( 'jquery.smooth.scrol-js', get_template_directory_uri() .'/assets/js/jquery.smooth.scrol.js', array('jquery'), '2.2.0', true );
	wp_enqueue_script( 'jquery.scrollup-js', get_template_directory_uri() .'/assets/js/jquery.scrollup.js', array('jquery'), '2.4.1', true );
	wp_enqueue_script( 'jquery.one.page.nav-js', get_template_directory_uri() .'/assets/js/jquery.one.page.nav.js', array('jquery'), '3.0.0', true );
	wp_enqueue_script( 'jquery.slick-js', get_template_directory_uri() .'/assets/js/jquery.slick.js', array('jquery'), '1.5.9', true );
	wp_enqueue_script( 'jquery-validation-plugin-js', get_template_directory_uri() .'/assets/js/jquery-validation-plugin.js', array('jquery'), '1.5.9', true );
	wp_enqueue_script( 'eyepress-main-js', get_template_directory_uri() .'/assets/js/main.js', array('jquery'), '1.1.0', true );
	if($eyepress_grid_type == 'mesonry'){
	wp_enqueue_script('masonry');
	wp_enqueue_script( 'eyepress-masonry-active', get_template_directory_uri() .'/assets/js/masonry-active.js', array('jquery'), '1.0.0', true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
endif;
add_action( 'wp_enqueue_scripts', 'eyepress_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Bootstrap navwalker class
 */
require get_template_directory() . '/inc/bootstrap-navwalker.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Customizer helper function file.
 */
require get_template_directory() . '/inc/customizer-helper.php';
/**
 * Customizer pro info .
 */
require get_template_directory() . '/inc/info/class-customize.php';
/**
 * tgm plugin activation
 */
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require get_template_directory() . '/inc/plugin-activation.php';

/**
 * Inline style and script 
 */
require get_template_directory() . '/inc/inline-style-script.php';


if ( ! function_exists( 'eyepress_comment_form_filed_change' ) ) :
function eyepress_comment_form_filed_change($fields){
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_fields','eyepress_comment_form_filed_change');
endif;

if ( ! function_exists( 'eyepress_pagination' ) ) :
function eyepress_pagination(){
	global $wp_query;
	$links = get_the_posts_pagination( array(
		'current' => max(1,get_query_var('paged')),
		'total' => $wp_query->max_num_pages,
		'type' =>'list',
		'mid_size' =>3,
		'prev_text'          => false,
    	'next_text'          => false,
	) );
	$links = str_replace("page-numbers", "pagination_num", $links);
	$links = str_replace("<ul class='pagination_num'>", "<ul>", $links);
	$links = str_replace("next pagination_num", "pagination_next", $links);
	$links = str_replace("prev pagination_num", "pagination_prev", $links);

	echo wp_kses_post($links);
}
endif;

/**
 * Load theme about section.
 */
if ( is_admin() ) {
    require_once trailingslashit( get_template_directory() ) . 'inc/about/class.about.php';
    require_once trailingslashit( get_template_directory() ) . 'inc/about/about.php';
}

