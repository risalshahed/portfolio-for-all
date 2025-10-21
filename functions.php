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

// Handle form for logged in & non-logged in users
add_action('admin_post_nopriv_send_contact_form', 'handle_contact_form');
add_action('admin_post_send_contact_form', 'handle_contact_form');

function handle_contact_form() {
    // Security check (optional nonce can be added)
    if ( ! isset( $_POST['email'] ) || ! is_email( $_POST['email'] ) ) {
        wp_die( 'Invalid form submission.' );
    }

    // Sanitize inputs
    $name    = sanitize_text_field( $_POST['name'] );
    $email   = sanitize_email( $_POST['email'] );
    $phone   = sanitize_text_field( $_POST['phone'] );
    $subject = sanitize_text_field( $_POST['subject'] );
    $message = sanitize_textarea_field( $_POST['message'] );

    // Email body
    $email_body  = "<strong>Name:</strong> $name<br>";
    $email_body .= "<strong>Email:</strong> $email<br>";
    $email_body .= "<strong>Phone:</strong> $phone<br>";
    $email_body .= "<strong>Subject:</strong> $subject<br>";
    $email_body .= "<strong>Message:</strong><br>" . nl2br( $message );

    // Send Email
    $to      = 'your-email@example.com'; // <-- Change to your receiving email
    $headers = array( 'Content-Type: text/html; charset=UTF-8' );

    $mail_sent = wp_mail( $to, "Contact Form: $subject", $email_body, $headers );

    if ( $mail_sent ) {
        echo 'Mail Sent Successfully';
        exit;
    } else {
        wp_die( 'Failed to send message. Please try again.' );
    }
}