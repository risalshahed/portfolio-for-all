<?php
// Load WordPress environment (3 levels up from theme folder)
require_once( dirname( __FILE__, 3 ) . '/wp-load.php' );

// Check if form is submitted
if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

    // Sanitize form data
    $name    = sanitize_text_field( $_POST['name'] );
    $email   = sanitize_email( $_POST['email'] );
    $subject = sanitize_text_field( $_POST['subject'] );
    $message = sanitize_textarea_field( $_POST['message'] );

    // Set email receiver (site admin email)
    $to = get_option( 'admin_email' );

    // Email headers
    $headers = [
        'Content-Type: text/html; charset=UTF-8',
        "Reply-To: $name <$email>"
    ];

    // Email body
    $body = "<strong>Name:</strong> $name<br>";
    $body .= "<strong>Email:</strong> $email<br>";
    $body .= "<strong>Subject:</strong> $subject<br>";
    $body .= "<strong>Message:</strong><br>" . nl2br( $message );

    // Send email using wp_mail
    $mail_sent = wp_mail( $to, $subject, $body, $headers );

    // Return JSON response (for AJAX success message)
    if ( $mail_sent ) {
        echo json_encode( [
            'status'  => 'success',
            'message' => 'Mail Sent Successfully!'
        ] );
    } else {
        echo json_encode( [
            'status'  => 'error',
            'message' => 'Failed to send message. Please try again.'
        ] );
    }

    exit;
}
?>