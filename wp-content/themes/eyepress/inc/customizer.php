<?php
/**
 * eyepress Theme Customizer
 *
 * @package eyepress
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

if ( ! function_exists( 'eyepress_customize_register' ) ) :
function eyepress_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

    $wp_customize->remove_section( 'colors' );

    // Header image text
     $wp_customize->add_setting('eyepress_header_img_show', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'default'       =>  0,
        'sanitize_callback' => 'absint',
         'transport' => 'refresh',

    ));
    $wp_customize->add_control('eyepress_header_img_show_control', array(
        'label'      => __('Display header banner', 'eyepress'),
        'section'    => 'header_image',
        'settings'   => 'eyepress_header_img_show',
        'type'       => 'checkbox',
    ));
     $wp_customize->add_setting('eyepress_welcome_text', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('eyepress_welcome_text_control', array(
        'label'      => __('Welcome text', 'eyepress'),
        'description'     => __('Enter header welcome text here.', 'eyepress'),
        'section'    => 'header_image',
        'settings'   => 'eyepress_welcome_text',
        'type'       => 'text',
    ));

     $wp_customize->add_setting('eyepress_author_name', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('eyepress_author_name_control', array(
        'label'      => __('Banner Title', 'eyepress'),
        'description'     => __('Enter author name here.', 'eyepress'),
        'section'    => 'header_image',
        'settings'   => 'eyepress_author_name',
        'type'       => 'text',
    ));
     $wp_customize->add_setting('eyepress_author_designation', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('eyepress_author_designation_control', array(
        'label'      => __('Banner Subtitle', 'eyepress'),
        'description'     => __('Enter author disignation here.', 'eyepress'),
        'section'    => 'header_image',
        'settings'   => 'eyepress_author_designation',
        'type'       => 'text',
    ));
     $wp_customize->add_setting('eyepress_header_text', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'wp_kses_post',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('eyepress_header_text_control', array(
        'label'      => __('Banner short description', 'eyepress'),
        'description'     => __('Enter your short description here .', 'eyepress'),
        'section'    => 'header_image',
        'settings'   => 'eyepress_header_text',
        'type'       => 'textarea',
    ));
     
     $wp_customize->add_setting('eyepress_btn_text_one', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('eyepress_btn_text_one_control', array(
        'label'      => __('Button one text', 'eyepress'),
        'section'    => 'header_image',
        'settings'   => 'eyepress_btn_text_one',
        'type'       => 'text',
    ));

     $wp_customize->add_setting('eyepress_btn_url_one', array(
        'default' => '#',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_btn_url_one_control', array(
        'label'      => __('Button one url', 'eyepress'),
        'section'    => 'header_image',
        'settings'   => 'eyepress_btn_url_one',
        'type'       => 'url',
    ));
     $wp_customize->add_setting('eyepress_btn_text_two', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('eyepress_btn_text_two_control', array(
        'label'      => __('Button two text', 'eyepress'),
        'section'    => 'header_image',
        'settings'   => 'eyepress_btn_text_two',
        'type'       => 'text',
    ));

     $wp_customize->add_setting('eyepress_btn_url_two', array(
        'default' => '#',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_btn_url_two_control', array(
        'label'      => __('Button two url', 'eyepress'),
        'section'    => 'header_image',
        'settings'   => 'eyepress_btn_url_two',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('eyepress_header_view', array(
        'default' => 'standard',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'eyepress_sanitize_slider_view',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_header_view_control', array(
        'label'      => __('Banner or Slider view type', 'eyepress'),
        'section'    => 'header_image',
        'settings'   => 'eyepress_header_view',
        'type'       => 'radio',
        'choices'    => array(
            'standard' => __('Standard view', 'eyepress'),
            'poly' => __('Poly angle view', 'eyepress'),
        ),
    ));
    $wp_customize->add_setting('eyepress_header_slider', array(
        'default' => 'banner',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'eyepress_sanitize_slider_onoff',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_header_slider_control', array(
        'label'      => __('Header image type', 'eyepress'),
        'section'    => 'header_image',
        'settings'   => 'eyepress_header_slider',
        'type'       => 'radio',
        'choices'    => array(
            'banner' => __('Header banner', 'eyepress'),
            'slider' => __('Header slider', 'eyepress'),
        ),
    ));
     // Side menu profile image
    $wp_customize->add_setting('eyepress_slider_img1', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => eyepress_sanitize_image('eyepress_slider_img1'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'eyepress_slider_img1_control', array(
        'label' => __( 'Slider image two', 'eyepress' ),
        'description' => __( 'First header image will be first slider image. This image will be second slider image. Image size is 1900*950', 'eyepress' ),
        'section'    => 'header_image',
        'settings'   => 'eyepress_slider_img1',
        'mime_type' => 'image',
        'active_callback' => 'eyepress_slider_show_hide',
    ) ) );
     // Side menu profile image
    $wp_customize->add_setting('eyepress_slider_img2', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => eyepress_sanitize_image( 'eyepress_slider_img2' ),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'eyepress_slider_img2_control', array(
        'label' => __( 'Slider image three', 'eyepress' ),
        'description' => __( 'You can upload third slider image by this upload field. You may skip the field if you only two.Image size is 1900*950', 'eyepress' ),
        'section'    => 'header_image',
        'settings'   => 'eyepress_slider_img2',
        'mime_type' => 'image',
        'active_callback' => 'eyepress_slider_show_hide',

    ) ) );



    // Add eyepress side menu section
    $wp_customize->add_section('eyepress_sidemenu_section', array(
        'title' => __('eyepress side menu profile', 'eyepress'),
        'capability'     => 'edit_theme_options',
        'description'     => __('You can add or edit side menu profile by this options.', 'eyepress'),
        'priority' => 70, 

    ));

    $wp_customize->add_setting('eyepress_sidebar_visibility', array(
        'default'        => 'hide',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'eyepress_sanitize_sidebar_visibility',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_sidebar_visibility_control', array(
        'label'      => __('Side menu visibility', 'eyepress'),
        'description'     => __('You can set side profile menu only homepage or you also set the side profile for all page.', 'eyepress'),
        'section'    => 'eyepress_sidemenu_section',
        'settings'   => 'eyepress_sidebar_visibility',
        'type'       => 'select',
        'choices'    => array(
            'all' => __('Show in all page', 'eyepress'),
            'home-only' => __('Show only home page', 'eyepress'),
            'hide' => __('Hide side menu', 'eyepress'),
        ),
    ));

    // Side menu profile image
    $wp_customize->add_setting('eyepress_sidemenu_img', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => eyepress_sanitize_image('eyepress_sidemenu_img'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'eyepress_sidemenu_img_control', array(
        'label' => __( 'Profile image', 'eyepress' ),
        'description'     => __('Upload your profile image. image size should be 240px*300px', 'eyepress'),
        'section'    => 'eyepress_sidemenu_section',
        'settings'   => 'eyepress_sidemenu_img',
        'mime_type' => 'image',
    ) ) );
    // profile name
    $wp_customize->add_setting('eyepress_sidemenu_name', array(
        'default' =>  __('Arthur Brooks','eyepress'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('eyepress_sidemenu_name_control', array(
        'label'      => __('Name', 'eyepress'),
        'description'     => __('Enter your name.', 'eyepress'),
        'section'    => 'eyepress_sidemenu_section',
        'settings'   => 'eyepress_sidemenu_name',
        'type'       => 'text',
    ));
    // Title name
    $wp_customize->add_setting('eyepress_sidemenu_title', array(
        'default' =>  __('Developer & UX Designer','eyepress'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('eyepress_sidemenu_title_control', array(
        'label'      => __('Title', 'eyepress'),
        'description'     => __('Enter your designation.', 'eyepress'),
        'section'    => 'eyepress_sidemenu_section',
        'settings'   => 'eyepress_sidemenu_title',
        'type'       => 'text',
    ));
    // phone number 
    $wp_customize->add_setting('eyepress_sidemenu_phone', array(
        'default' =>  __('+80 123 456 802','eyepress'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('eyepress_sidemenu_phone_control', array(
        'label'      => __('Phone number', 'eyepress'),
        'section'    => 'eyepress_sidemenu_section',
        'settings'   => 'eyepress_sidemenu_phone',
        'type'       => 'text',
    ));
    // email address
    $wp_customize->add_setting('eyepress_sidemenu_email', array(
        'default' =>  'arthurbrooks@example.com',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_email',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('eyepress_sidemenu_email_control', array(
        'label'      => __('Email address', 'eyepress'),
        'section'    => 'eyepress_sidemenu_section',
        'settings'   => 'eyepress_sidemenu_email',
        'type'       => 'text',
    ));
    // DATE OF BIRTH
    $wp_customize->add_setting('eyepress_sidemenu_birth_date', array(
        'default' =>  __('20 September 1980','eyepress'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('eyepress_sidemenu_birthdate_control', array(
        'label'      => __('Date of birth', 'eyepress'),
        'section'    => 'eyepress_sidemenu_section',
        'settings'   => 'eyepress_sidemenu_birth_date',
        'type'       => 'text',
    ));
    // AGE
    $wp_customize->add_setting('eyepress_sidemenu_age', array(
        'default' =>  __('28 Years','eyepress'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('eyepress_sidemenu_age_control', array(
        'label'      => __('Age', 'eyepress'),
        'section'    => 'eyepress_sidemenu_section',
        'settings'   => 'eyepress_sidemenu_age',
        'type'       => 'text',
    ));
    // RESIDENCE
    $wp_customize->add_setting('eyepress_sidemenu_residence', array(
        'default' =>  __('USA','eyepress'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('eyepress_sidemenu_residence_control', array(
        'label'      => __('Residence', 'eyepress'),
        'section'    => 'eyepress_sidemenu_section',
        'settings'   => 'eyepress_sidemenu_residence',
        'type'       => 'text',
    ));
    // FREELANCE WORK
    $wp_customize->add_setting('eyepress_sidemenu_work', array(
        'default' =>  __('Available','eyepress'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('eyepress_sidemenu_work_control', array(
        'label'      => __('Freelance work', 'eyepress'),
        'section'    => 'eyepress_sidemenu_section',
        'settings'   => 'eyepress_sidemenu_work',
        'type'       => 'text',
    ));
    // facebook url
    $wp_customize->add_setting('eyepress_sidemenu_facebook', array(
        'default' =>  '',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_sidemenu_facebook_control', array(
        'label'      => __('Facebook url', 'eyepress'),
        'section'    => 'eyepress_sidemenu_section',
        'settings'   => 'eyepress_sidemenu_facebook',
        'type'       => 'url',
    ));
    // twitter url
    $wp_customize->add_setting('eyepress_sidemenu_twitter', array(
        'default' =>  '',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_sidemenu_twitter_control', array(
        'label'      => __('Twitter url', 'eyepress'),
        'section'    => 'eyepress_sidemenu_section',
        'settings'   => 'eyepress_sidemenu_twitter',
        'type'       => 'url',
    ));
    // linkedin url
    $wp_customize->add_setting('eyepress_sidemenu_linkedin', array(
        'default' =>  '',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_sidemenu_linkedin_control', array(
        'label'      => __('Linkedin url', 'eyepress'),
        'section'    => 'eyepress_sidemenu_section',
        'settings'   => 'eyepress_sidemenu_linkedin',
        'type'       => 'url',
    ));
    // instagram url
    $wp_customize->add_setting('eyepress_sidemenu_instagram', array(
        'default' =>  '',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_sidemenu_instagram_control', array(
        'label'      => __('Instagram url', 'eyepress'),
        'section'    => 'eyepress_sidemenu_section',
        'settings'   => 'eyepress_sidemenu_instagram',
        'type'       => 'url',
    ));
    // pinterest url
    $wp_customize->add_setting('eyepress_sidemenu_pinterest', array(
        'default' =>  '',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_sidemenu_pinterest_control', array(
        'label'      => __('Pinterest url', 'eyepress'),
        'section'    => 'eyepress_sidemenu_section',
        'settings'   => 'eyepress_sidemenu_pinterest',
        'type'       => 'url',
    ));
 

    //General setting 
    $wp_customize->add_section('eyepress_general_section', array(
        'title' => __('General settings', 'eyepress'),
        'capability'     => 'edit_theme_options',
        'description'     => __('eyepress genetal settings section', 'eyepress'),
        'priority' => 90, 

    ));
    $wp_customize->add_setting('eyepress_theme_color', array(
        'default'       => 'light',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'eyepress_sanitize_theme_style',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_theme_color_control', array(
        'label'      => __('Theme style', 'eyepress'),
        'section'    => 'eyepress_general_section',
        'settings'   => 'eyepress_theme_color',
        'type'       => 'select',
        'choices'    => array(
            'light' => __('Light theme', 'eyepress'),
            'dark' => __('Dark theme', 'eyepress'),
        ),
    ));
    $wp_customize->add_setting('eyepress_show_preloader', array(
    	'default'       =>  'yes',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'eyepress_sanitize_preloader',
         'transport' => 'refresh',

    ));
    $wp_customize->add_control('eyepress_show_preloader_control', array(
        'label'      => __('Site preloader', 'eyepress'),
        'description'     => __('Warning: if you don\'t use preloader then some home page item show bad before load full page.', 'eyepress'),
        'section'    => 'eyepress_general_section',
        'settings'   => 'eyepress_show_preloader',
        'type'       => 'select',
        'choices'    => array(
            'yes' => __('Preloader active', 'eyepress'),
            'no' => __('Preloader hide', 'eyepress'),
        ),
    ));

    // Add eyepress sidebar section
    $wp_customize->add_section('eyepress_blog_section', array(
        'title' => __('Blog Settings', 'eyepress'),
        'capability'     => 'edit_theme_options',
        'description'     => __('Blog settings and page settings section', 'eyepress'),
        'priority' => 90, 

    ));
     /*
      * blog menu
       */
    $wp_customize->add_setting('eyepress_blog_header_sticky', array(
        'default'       => 'fixed_sticky',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'eyepress_sanitize_blog_header_sticky',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_blog_header_sticky_control', array(
        'label'      => __('Blog and other pages header style', 'eyepress'),
        'section'    => 'eyepress_blog_section',
        'settings'   => 'eyepress_blog_header_sticky',
        'type'       => 'select',
        'choices'    => array(
            'fixed_sticky' => __('Fixd with sticky header', 'eyepress'),
            'fixed' => __('Fixed header', 'eyepress'),
            'scroll' => __('scroll header', 'eyepress'),
        ),
    ));
    // blog home title and description 
    $wp_customize->add_setting('eyepress_blog_title_desc', array(
        'default'       => 'hide',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'eyepress_sanitize_blog_title',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_blog_title_desc_control', array(
        'label'      => __('Blog home title and description', 'eyepress'),
        'section'    => 'eyepress_blog_section',
        'settings'   => 'eyepress_blog_title_desc',
        'type'       => 'radio',
        'choices'    => array(
            'show' => __('Show', 'eyepress'),
            'hide' => __('Hide', 'eyepress'),
        ),
    ));
    // blog home title
    $wp_customize->add_setting('eyepress_blog_home_title', array(
        'default' =>  __('READ FORM BLOG','eyepress'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('eyepress_blog_home_title_control', array(
        'label'      => __('Blog home title', 'eyepress'),
        'section'    => 'eyepress_blog_section',
        'settings'   => 'eyepress_blog_home_title',
        'type'       => 'text',
        'active_callback' => 'eyepress_blog_title_show_hide',

    ));
    // blog home description
    $wp_customize->add_setting('eyepress_blog_home_desc', array(
        'default' =>  __('The namics of how users interact with interactive elements within a <br> user interface flow chart based on container proportion.','eyepress'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'wp_kses_post',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('eyepress_blog_home_desc_control', array(
        'label'      => __('Blog home description', 'eyepress'),
        'section'    => 'eyepress_blog_section',
        'settings'   => 'eyepress_blog_home_desc',
        'type'       => 'textarea',
        'active_callback' => 'eyepress_blog_title_show_hide',

    ));
    //blog style
     $wp_customize->add_setting('eyepress_blog_style', array(
        'default'       => 'grid',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'eyepress_sanitize_blog_style',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_blog_style_control', array(
        'label'      => __('Blog style', 'eyepress'),
        'section'    => 'eyepress_blog_section',
        'settings'   => 'eyepress_blog_style',
        'type'       => 'select',
        'choices'    => array(
            'grid' => __('Grid view', 'eyepress'),
            'normal' => __('Normal vew', 'eyepress'),
        ),

    ));
    //blog style
     $wp_customize->add_setting('eyepress_grid_type', array(
        'default'       => 'fixed',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'eyepress_sanitize_grid_style',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_masonry_type_control', array(
        'label'      => __('Grid type', 'eyepress'),
        'section'    => 'eyepress_blog_section',
        'settings'   => 'eyepress_grid_type',
        'type'       => 'select',
        'choices'    => array(
            'mesonry' => __('Mesonry', 'eyepress'),
            'fixed' => __('Fixed height', 'eyepress'),
        ),
        'active_callback' => 'eyepress_style_type_grid',

    ));
    $wp_customize->add_setting('eyepress_sidebar_post', array(
        'default'        => 'no-sidebar',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'eyepress_sanitize_sidebar_post',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_sidebar_post_control', array(
        'label'      => __('Post sidebar position', 'eyepress'),
        'description'     => __('Select post sidebar position.', 'eyepress'),
        'section'    => 'eyepress_blog_section',
        'settings'   => 'eyepress_sidebar_post',
        'type'       => 'select',
        'choices'    => array(
            'no-sidebar' => __('Full width', 'eyepress'),
            'left-sidebar' => __('Left sidebar', 'eyepress'),
            'right-sidebar' => __('Right sidebar', 'eyepress'),
        ),
    ));
     /*
      * Sidebar position 
       */
    $wp_customize->add_setting('eyepress_sidebar_page', array(
        'default'        => 'no-sidebar',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'eyepress_sanitize_sidebar_page',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_sidebar_page_control', array(
        'label'      => __('Page sidebar position', 'eyepress'),
        'description'     => __('Select page sidebar position. Custom template will not be effected by this option.', 'eyepress'),
        'section'    => 'eyepress_blog_section',
        'settings'   => 'eyepress_sidebar_page',
        'type'       => 'select',
        'choices'    => array(
            'no-sidebar' => __('Full width', 'eyepress'),
            'left-sidebar' => __('Left sidebar', 'eyepress'),
            'right-sidebar' => __('Right sidebar', 'eyepress'),
        ),
    ));
    // blog settings
     $wp_customize->add_setting('eyepress_post_date', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'default'       =>  1,
        'sanitize_callback' => 'absint',
         'transport' => 'refresh',

    ));
    $wp_customize->add_control('eyepress_post_meta_control', array(
        'label'      => __('Display post date', 'eyepress'),
        'section'    => 'eyepress_blog_section',
        'settings'   => 'eyepress_post_date',
        'type'       => 'checkbox',
    ));
     $wp_customize->add_setting('eyepress_post_author', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'default'       =>  1,
        'sanitize_callback' => 'absint',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_post_author_control', array(
        'label'      => __('Display post author', 'eyepress'),
        'section'    => 'eyepress_blog_section',
        'settings'   => 'eyepress_post_author',
        'type'       => 'checkbox',
    ));
    $wp_customize->add_setting('eyepress_post_cat', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'default'       =>  1,
        'sanitize_callback' => 'absint',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_post_cat_control', array(
        'label'      => __('Display post category', 'eyepress'),
        'section'    => 'eyepress_blog_section',
        'settings'   => 'eyepress_post_cat',
        'type'       => 'checkbox',
    ));
    $wp_customize->add_setting('eyepress_post_tag', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'default'       =>  1,
        'sanitize_callback' => 'absint',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_post_tag_control', array(
        'label'      => __('Display post tag', 'eyepress'),
        'description'     => __('Post tag only show in single post.', 'eyepress'),
        'section'    => 'eyepress_blog_section',
        'settings'   => 'eyepress_post_tag',
        'type'       => 'checkbox',
    ));

    $wp_customize->add_setting('eyepress_related_post', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'default'       =>  1,
        'sanitize_callback' => 'absint',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_related_post_control', array(
        'label'      => __('Display related post in single post', 'eyepress'),
        'section'    => 'eyepress_blog_section',
        'settings'   => 'eyepress_related_post',
        'type'       => 'checkbox',
    ));


    // Add eyepress 404 page section
    $wp_customize->add_section('eyepress_fourzerofour_page_section', array(
        'title' => __('Site 404 page', 'eyepress'),
        'capability'     => 'edit_theme_options',
        'description'    => __('eyepress 404 page options section', 'eyepress'),

    ));
    $wp_customize->add_setting('eyepress_fourzerofour_heading', array(
        'default' =>  __('page not founded.','eyepress'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('eyepress_fourzerofour_heading_control', array(
        'label'      => __('404 page heading', 'eyepress'),
        'description'    => __('Write 404 page headeing text', 'eyepress'),
        'section'    => 'eyepress_fourzerofour_page_section',
        'settings'   => 'eyepress_fourzerofour_heading',
        'type'       => 'text',
    ));
    
    $wp_customize->add_setting('eyepress_fourzerofour_desc', array(
        'default' =>  __('This page you are looking for could not be founded.','eyepress'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'wp_kses_post',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('eyepress_fourzerofour_desc_control', array(
        'label'      => __('404 page description', 'eyepress'),
        'description'    => __('Write 404 page description', 'eyepress'),
        'section'    => 'eyepress_fourzerofour_page_section',
        'settings'   => 'eyepress_fourzerofour_desc',
        'type'       => 'textarea',
    ));
    $wp_customize->add_setting('eyepress_fourzerofour_search', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'default'       =>  1,
        'sanitize_callback' => 'absint',
         'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_fourzerofour_search_control', array(
        'label'      => __('Display 404 page search field?', 'eyepress'),
        'section'    => 'eyepress_fourzerofour_page_section',
        'settings'   => 'eyepress_fourzerofour_search',
        'type'       => 'checkbox',
    ));
    
     $wp_customize->add_setting('eyepress_fourzerofour_img_use', array(
        'default'    => 0,
        'capability'  => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'absint',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_fourzerofour_img_use_control', array(
        'label'      => __('404 page custom image use?', 'eyepress'),
        'description'    => __('You can add your own image for 404 page.', 'eyepress'),
        'section'    => 'eyepress_fourzerofour_page_section',
        'settings'   => 'eyepress_fourzerofour_img_use',
        'type'       => 'checkbox',
        
    ));
    $wp_customize->add_setting('eyepress_fourzerofour_img', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => eyepress_sanitize_image('eyepress_fourzerofour_img'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'eyepress_fourzerofour_img_control', array(
        'label' => __( '404 page image', 'eyepress' ),
        'description' => __( 'Uplad 404 page image. Image size should be small.', 'eyepress' ),
        'section'    => 'eyepress_fourzerofour_page_section',
        'settings'   => 'eyepress_fourzerofour_img',
        'mime_type' => 'image',
        'active_callback' => 'eyepress_img_fourzero_img_use',
    ) ) );
  

	// Add eyepress options section
	$wp_customize->add_section('eyepress_footer', array(
		'title' => __('Site Footer settings', 'eyepress'),
		'capability'     => 'edit_theme_options',
		'description'     => __('EyePress Footer options section. Get pro version for change copyright text.', 'eyepress'),

	));



    $wp_customize->add_setting('eyepress_footer_position', array(
        'default'        => 'default',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'eyepress_sanitize_theme_footer_style',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_footer_position_control', array(
        'label'      => __('Footer style', 'eyepress'),
        'description'     => __('Select site footer style.', 'eyepress'),
        'section'    => 'eyepress_footer',
        'settings'   => 'eyepress_footer_position',
        'type'       => 'select',
        'choices'    => array(
            'default' => __('Default Footer', 'eyepress'),
            'center' => __('Center Footer', 'eyepress'),
        ),
    ));

	    // Footer facebook url
     $wp_customize->add_setting('eyepress_facebook_url', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_fburl_control', array(
        'label'      => __('Footer Facebook url', 'eyepress'),
        'section'    => 'eyepress_footer',
        'settings'   => 'eyepress_facebook_url',
        'type'       => 'url',
    ));
	    // Footer twitter url
     $wp_customize->add_setting('eyepress_twitter_url', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_twitterurl_control', array(
        'label'      => __('Footer Twitter url', 'eyepress'),
        'section'    => 'eyepress_footer',
        'settings'   => 'eyepress_twitter_url',
        'type'       => 'url',
    ));
	    // Footer linkedin url
     $wp_customize->add_setting('eyepress_linkedin_url', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_linkedin_url_control', array(
        'label'      => __('Footer Linkedin url', 'eyepress'),
        'section'    => 'eyepress_footer',
        'settings'   => 'eyepress_linkedin_url',
        'type'       => 'url',
    ));

	    // Footer instagram url
     $wp_customize->add_setting('eyepress_instagram_url', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_instagram_url_control', array(
        'label'      => __('Footer Instagram url', 'eyepress'),
        'section'    => 'eyepress_footer',
        'settings'   => 'eyepress_instagram_url',
        'type'       => 'url',
    ));
	    // Footer pinterest url
     $wp_customize->add_setting('eyepress_pinterest_url', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_pinterest_url_control', array(
        'label'      => __('Footer Pinterest url', 'eyepress'),
        'section'    => 'eyepress_footer',
        'settings'   => 'eyepress_pinterest_url',
        'type'       => 'url',
    ));




//selective refresh 
    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial( 'blogname', array(
            'selector'        => '.site-title a',
            'render_callback' => 'eyepress_customize_partial_blogname',
        ) );
        $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
            'selector'        => '.site-description',
            'render_callback' => 'eyepress_customize_partial_blogdescription',
        ) );
        $wp_customize->selective_refresh->add_partial( 'eyepress_welcome_text', array(
            'selector'        => 'h3.eyepress-welcome',
            'render_callback' => 'eyepress_welcome_render',
        ) );
        $wp_customize->selective_refresh->add_partial( 'eyepress_sidemenu_name', array(
            'selector'        => '.my-info h6.side-author',
            'render_callback' => 'eyepress_author_name_render',
        ) );
        
    }



}
endif;
add_action( 'customize_register', 'eyepress_customize_register' );
