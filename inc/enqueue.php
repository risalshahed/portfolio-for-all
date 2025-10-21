<?php
function pfa_load_style_and_scripts() {
    wp_enqueue_style( 'pfa-style', get_stylesheet_uri() );
    
    // enqueue styles
    wp_register_style( 'pfa-css-style', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all' );
    wp_enqueue_style( 'pfa-css-style' );

    wp_register_style( 'pfa-font', get_template_directory_uri() . '/assets/css/vendor/fontawesome.css', array(), '6.0.0', 'all' );
    wp_enqueue_style( 'pfa-font' );

    wp_register_style( 'pfa-swiper', get_template_directory_uri() . '/assets/css/plugins/swiper.css', array(), '9.3.2', 'all' );
    wp_enqueue_style( 'pfa-swiper' );

    wp_register_style( 'pfa-bootstrap', get_template_directory_uri() . '/assets/css/vendor/bootstrap.min.css', array(), '5.0.2', 'all' );
    wp_enqueue_style( 'pfa-bootstrap' );
    
    wp_register_style( 'pfa-odometer', get_template_directory_uri() . '/assets/css/plugins/odometer.css', array(), 1, 'all' );
    wp_enqueue_style( 'pfa-odometer' );

    wp_register_style( 'pfa-animate', get_template_directory_uri() . '/assets/css/vendor/animate.min.css', array(), '3.7.2', 'all' );
    wp_enqueue_style( 'pfa-animate' );

    $pfa_theme_js_path = get_template_directory_uri() . '/assets/js/';

    // Vendor Scripts
    wp_enqueue_script('jquery-custom', $pfa_theme_js_path . 'vendor/jquery.js', array(), '3.6.0', true);
    wp_enqueue_script('jquery-ui', $pfa_theme_js_path . 'vendor/jquery-ui.min.js', array('jquery-custom'), '1.11.2', true);
    wp_enqueue_script('waypoints', $pfa_theme_js_path . 'vendor/waypoints.min.js', array(), '5.0.4', true);
    wp_enqueue_script('appear', $pfa_theme_js_path . 'vendor/appear.js', array(), null, true);
    wp_enqueue_script('jquery-one-page-nav', $pfa_theme_js_path . 'vendor/jquery-one-page-nav.js', array(), null, true);
    wp_enqueue_script('bootstrap', $pfa_theme_js_path . 'vendor/bootstrap.min.js', array(), '5.0.2', true);
    wp_enqueue_script('waw', $pfa_theme_js_path . 'vendor/waw.js', array(), '1.1.2', true);
    wp_enqueue_script('backtop', $pfa_theme_js_path . 'vendor/backtop.js', array(), null, true);

    // Plugin Scripts
    wp_enqueue_script('odometer', $pfa_theme_js_path . 'plugins/odometer.js', array(), '0.4.8', true);
    wp_enqueue_script('swiper', $pfa_theme_js_path . 'plugins/swiper.js', array(), '11.0.3', true);
    wp_enqueue_script('gsap', $pfa_theme_js_path . 'plugins/gsap.js', array(), '3.11.4', true);
    wp_enqueue_script('splittext', $pfa_theme_js_path . 'plugins/splittext.js', array(), '3.11.2', true);
    wp_enqueue_script('scrolltrigger', $pfa_theme_js_path . 'plugins/scrolltigger.js', array(), null, true);
    wp_enqueue_script('scrolltoplugins', $pfa_theme_js_path . 'plugins/scrolltoplugins.js', array(), '3.11.4', true);
    wp_enqueue_script('smoothscroll', $pfa_theme_js_path . 'plugins/smoothscroll.js', array(), null, true);
    wp_enqueue_script('isotop', $pfa_theme_js_path . 'plugins/isotop.js', array(), '3.0.6', true);
    wp_enqueue_script('animation', $pfa_theme_js_path . 'plugins/animation.js', array(), null, true);
    wp_enqueue_script('contact-form', $pfa_theme_js_path . 'plugins/contact.form.js', array(), null, true);
    wp_enqueue_script('text-type', $pfa_theme_js_path . 'plugins/text-type.js', array(), null, true);

    // Custom Script
    wp_enqueue_script('main-js', $pfa_theme_js_path . 'main.js', array(), null, true);
}

add_action( 'wp_enqueue_scripts', 'pfa_load_style_and_scripts' );