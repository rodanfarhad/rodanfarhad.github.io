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


function personal_eye_customize_register( $wp_customize ) {

	$wp_customize->remove_control( 'eyepress_blog_style_control' );
	$wp_customize->remove_control( 'eyepress_sidebar_post_control' );
	$wp_customize->remove_control( 'eyepress_footer_position_control' );

    $wp_customize->add_setting('eyepress_blog_style', array(
        'default'       => 'normal',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'eyepress_sanitize_blog_style',
        'transport' => 'refresh',

    ));
    $wp_customize->add_control('eyepress_blog_style', array(
        'label'      => __('Blog style new', 'personal-eye'),
        'section'    => 'eyepress_blog_section',
        'settings'   => 'eyepress_blog_style',
        'type'       => 'select',
        'choices'    => array(
            'grid' => __('Grid view', 'personal-eye'),
            'normal' => __('Normal vew', 'personal-eye'),
        ),


    ));
    $wp_customize->add_setting('eyepress_sidebar_post', array(
        'default'        => 'right-sidebar',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'eyepress_sanitize_sidebar_post',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_sidebar_post', array(
        'label'      => __('Post sidebar position', 'personal-eye'),
        'description'     => __('Select post sidebar position.', 'personal-eye'),
        'section'    => 'eyepress_blog_section',
        'settings'   => 'eyepress_sidebar_post',
        'type'       => 'select',
        'choices'    => array(
            'no-sidebar' => __('Full width', 'personal-eye'),
            'left-sidebar' => __('Left sidebar', 'personal-eye'),
            'right-sidebar' => __('Right sidebar', 'personal-eye'),
        ),
    ));

    $wp_customize->add_setting('eyepress_footer_position', array(
        'default'        => 'center',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'eyepress_sanitize_theme_footer_style',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('eyepress_footer_position_control', array(
        'label'      => __('Footer style', 'personal-eye'),
        'description'     => __('Select site footer style.', 'personal-eye'),
        'section'    => 'eyepress_footer',
        'settings'   => 'eyepress_footer_position',
        'type'       => 'select',
        'choices'    => array(
            'default' => __('Default Footer', 'personal-eye'),
            'center' => __('Center Footer', 'personal-eye'),
        ),
    ));


}
add_action( 'customize_register', 'personal_eye_customize_register',99 );
