<?php
add_action( 'wpcf7_before_send_mail', function( $contact_form ) {
	$message = $_POST['your-message']; 
    $processed_message = apply_filters('the_content', $message);
    $_POST['your-message'] = $processed_message;
});
?>