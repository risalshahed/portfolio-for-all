<?php
include_once( 'inc/default.php' );
include_once( 'inc/enqueue.php' );

// Add Color Settings in Customizer
function pfa_mytheme_customize_register( $wp_customize ) {
    // Theme Colors
    $wp_customize->add_section('pfa_colors', array(
        'title' => __( 'Custom Theme Colors', 'portfolio-for-all' ),
        'description' => __( 'Change theme color here', 'portfolio-for-all' )
    ));

    // Colors to be added
    $color_vars = array(
        'custom_bgcolor'       => '#0d0714',
        'color_primary'        => '#FF014F',
        'color_body'           => '#9f9f9f',
        'color_heading'        => '#ffffff',
        'color_gray'           => '#9F9F9F',
        'footer_background'    => '#141414',
    );

    /* $wp_customize->add_setting('color_primary', array(
        'default' => $color_vars['color_primary'],
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize,
        'color_primary',
        array(
            'label' => __( 'Primary Color', 'portfolio-for-all' ),
            'section' => 'pfa_colors',
            'settings' => 'color_primary'
        )
    ) ); */

    foreach($color_vars as $color_key) {
        switch($color_key) {
            case 'custom_bgcolor':
                $label = 'Background Color';
                break;
            case 'color_primary':
                $label = 'Primary Color';
                break;
            case 'color_body':
                $label = 'Secondary Color';
                break;
            case 'color_heading':
                $label = 'Headers Color';
                break;
            case 'color_gray':
                $label = 'Text Color';
                break;
            case 'footer_background':
                $label = 'Footer Background Color';
                break;
            default:
                $label = __( ucwords( str_replace('_', ' ', $color_key) ) );
        }
    }

    // Loop through color variables and add settings & controls
    foreach ( $color_vars as $color_key => $default_color ) {
        switch($color_key) {
            case 'custom_bgcolor':
                $label = 'Background Color';
                break;
            case 'color_primary':
                $label = 'Primary Color';
                break;
            case 'color_body':
                $label = 'Secondary Color';
                break;
            case 'color_heading':
                $label = 'Headers Color';
                break;
            case 'color_gray':
                $label = 'Text Color';
                break;
            case 'footer_background':
                $label = 'Footer Background Color';
                break;
            default:
                $label = __( ucwords( str_replace('_', ' ', $color_key) ) );
        }
        
        $wp_customize->add_setting( $color_key, array(
            'default'           => $default_color,
            'transport'         => 'postMessage',  // For live preview
            'sanitize_callback' => 'sanitize_hex_color',
        ));

        $wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            $color_key,
            array(
                'label'    => $label,
                'section'  => 'pfa_colors',
                'settings' => $color_key,
            )
        ));
    }
}

add_action( 'customize_register', 'pfa_mytheme_customize_register' );

function pfa_customize_css() {
    $color_vars = array(
        'custom_bgcolor',
        'color_primary',
        'color_body',
        'color_heading',
        'color_gray',
        'footer_background'
    );
    ?>
    <style>
        :root {
            <?php
            foreach ( $color_vars as $color_key ) {
                $color_value = get_theme_mod( $color_key );
                if ( $color_value ) {
                    $css_var_name = '--' . str_replace( '_', '-', $color_key );
                    echo esc_html( $css_var_name ) . ': ' . esc_html( $color_value ) . ';';
                }
            }
            ?>
        }
    </style>
    <?php
}

add_action( 'wp_head', 'pfa_customize_css' );

// Live Preview
function pfa_mytheme_customize_live_preview() {
    wp_enqueue_script( 'mytheme-customizer', get_template_directory_uri() . '/js/customizer.js', ['jquery','customize-preview'], '', true );
}

add_action( 'customize_preview_init', 'pfa_mytheme_customize_live_preview' );

/* -------------------------------
Dynamic Experience Year Calculator
------------------------------- */
function pfa_get_experience_in_years() {
    $base_year = 2014;
    $base_experience = 0;

    // আজকের তারিখ ও 8th March
    $current_year = date('Y');
    $today = strtotime(date('Y-m-d'));
    $target_date = strtotime("$current_year-03-08");

    // কয় বছর পার হয়েছে তা হিসাব করো
    $years_passed = $current_year - $base_year;

    // যদি আজ 8 March বা তার পরে হয়, তাহলে +1 করো
    if ($today >= $target_date) {
        $years_passed += 1;
    }

    // Final experience হিসাব করো
    $total_experience = $base_experience + $years_passed;

    return $total_experience;
}


/* ===============================
HANDLE CONTACT FORM SUBMISSION
=============================== */
function pfa_handle_form_submit() {
    ob_start(); // prevent accidental output

    // Sanitize incoming fields
    $name    = sanitize_text_field($_POST['name'] ?? '');
    $phone   = sanitize_text_field($_POST['phone'] ?? '');
    $email   = sanitize_email($_POST['email'] ?? '');
    $subject = sanitize_text_field($_POST['subject'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    // =======================
    // EMAIL RECEIVER (EDIT THIS)
    // =======================
    $to = "brand@marketeryusuf.com"; 
    // TODO: Replace with your real domain email

    $headers = [
        "From: Your Website <brand@marketeryusuf.com>",
        "Reply-To: $email"
    ];

    $email_subject = $subject ?: "New Contact Form Submission";

    wp_mail($to, $email_subject, $email_body, $headers);

    // build safe redirect
    $redirect_url = remove_query_arg('form_status', wp_get_referer());
    $redirect_url = add_query_arg('form_status', 'success', $redirect_url);

    ob_end_clean(); // clear accidental echoes

    wp_safe_redirect($redirect_url);
    exit;

    // Build Email Subject & Body
    /* $email_subject = !empty($subject) ? $subject : "New Contact Form Submission";
    $email_body  = "Name: $name\n";
    $email_body .= "Phone: $phone\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Message:\n$message\n";

    // Headers
    $headers = [
        "From: Your Website <brand@marketeryusuf.com>",  // EDIT THIS if needed
        "Reply-To: $email"
    ];

    // Send Email
    wp_mail($to, $email_subject, $email_body, $headers);

    // =======================
    // REDIRECT WITH SUCCESS FLAG
    // =======================
    $redirect_url = wp_get_referer() . "?form_status=success";

    wp_redirect($redirect_url);
    exit; */
}

add_action('admin_post_nopriv_send_contact_form', 'pfa_handle_form_submit');
add_action('admin_post_send_contact_form', 'pfa_handle_form_submit');