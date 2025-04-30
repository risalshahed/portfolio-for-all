<?php
include_once( 'inc/default.php' );
include_once( 'inc/enqueue.php' );
function pfa_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'menus' );
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-width'  => true,
        'flex-height' => true
    ) );
    add_theme_support( 'custom-background', apply_filters( 'my_custom_theme_custom_background_args', array(
        'default-color' => 'fff',
        'default-image' => ''
    ) ) );
    add_theme_support( 'front-page-panels' );
    add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'pfa_theme_setup' );
function pfa_customize_header( $wp_customize ) {
    $wp_customize->add_section( 'pfa_header_area', array(
        'title' => __('Header Area', 'pfa'),
        'description' => 'You can update your header area here'
    ) );

    $wp_customize->add_setting( 'pfa_logo', array(
        'default' => get_stylesheet_directory_uri() . '/assets/images/logo/white-logo-reeni.png'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pfa_logo', array(
        'label' => 'Logo Upload',
        'description' => 'You can update your logo here',
        'setting' => 'pfa_logo',
        'section' => 'pfa_header_area'
    ) ) );
}

add_action( 'customize_register', 'pfa_customize_header' );