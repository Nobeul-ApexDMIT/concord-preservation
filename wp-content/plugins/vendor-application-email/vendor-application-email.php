<?php
/**
 * Plugin Name: Vendor Application Email
 * Description: Sends an email when the vendor application form is submitted.
 * Version: 1.0
 * Author: Jules
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

add_action( 'elementor_pro/forms/new_record', function( $record, $handler ) {
    //make sure its the right form
    $form_name = $record->get_form_settings('form_name');

    // FOR DEBUGGING
    error_log('Form submitted: ' . $form_name);

    if ( 'Vendor Application' !== $form_name ) {
        return;
    }

    // Send the email
    $to = 'test@example.com'; // Replace with the recipient's email address
    $subject = 'New Vendor Application';

    $fields = $record->get( 'fields' );

    $body = '<h1>New Vendor Application</h1>';
    $body .= '<ul>';
    foreach ( $fields as $field ) {
        $body .= '<li><strong>' . $field['title'] . ':</strong> ' . $field['value'] . '</li>';
    }
    $body .= '</ul>';

    $headers = array('Content-Type: text/html; charset=UTF-8');

    wp_mail( $to, $subject, $body, $headers );
}, 10, 2 );
