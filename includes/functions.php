<?php

/*our functions for controlling the mail sending*/

//Check if WooCommerce is active
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {


	// Hook me in!
	add_filter( 'woocommerce_email_headers', 'wcme_multiple_recipients', 10, 2);

	function wcme_multiple_recipients( $headers = '', $id = '') {
	//get our options
	$wcme_options = get_option('wcme_settings');
	// replace the emails below to your desire email
	$emails = array( $wcme_options['email_1'], $wcme_options['email_2'], $wcme_options['email_3'], $wcme_options['email_4'], $wcme_options['email_5'] );


	// WooCommerce core
    if ($id == 'new_order'  && $wcme_options['enable_new']) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;

	}

	if ($id == 'cancelled_order'  && $wcme_options['enable_cancelled']) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;

	}

	if ($id == 'customer_processing_order'  && $wcme_options['enable_processing']) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;

	}

	if ($id == 'customer_completed_order'  && $wcme_options['enable_completed']) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;

	}

	if ($id == 'customer_invoice'  && $wcme_options['enable_invoice']) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;

	}

	if ($id == 'customer_refunded_order'  && $wcme_options['enable_refunded']) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;

	}

	if ($id == 'customer_partially_refunded_order'  && $wcme_options['enable_refunded']) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;

	}

	if ($id == 'customer_on_hold_order' && $wcme_options['enable_on_hold']) {
	$headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
		//break;
	}

	if ($id == 'customer_note' && $wcme_options['enable_customer_note']) {
		$headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;
	}

	// WooCommerce Booking
	if ($id == 'booking_cancelled' && $wcme_options['enable_booking_cancelled']) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;
	}

	if ($id == 'booking_confirmed' && $wcme_options['enable_booking_confirmed']) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;

	}

	if ($id == 'booking_notification' && $wcme_options['enable_booking_notification']) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;

	}


	if ($id == 'booking_reminder' && $wcme_options['enable_booking_reminder']) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;

	}

	if ($id == 'new_booking' &&  $wcme_options['enable_new_booking']) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;

	}

	// WooCommerce Subscriptions

	if ($id == 'customer_completed_renewal_order' && $wcme_options['enable_customer_completed_renewal_order'] ) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;

	}

	if ($id == 'customer_completed_switch_order' && $wcme_options['enable_customer_completed_switch_order'] ) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;

	}

	if ($id == 'customer_payment_retry' && $wcme_options['enable_customer_payment_retry'] ) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;

	}

	if ($id == 'customer_processing_renewal_order' && $wcme_options['customer_processing_renewal_order'] ) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;

	}

	if ($id == 'customer_renewal_invoice' && $wcme_options['enable_customer_renewal_invoice'] ) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;

	}

	if ($id == 'expired_subscription' && $wcme_options['expired_subscription'] ) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;

	}


	if ($id == 'new_renewal_order' && $wcme_options['enable_new_renewal_order'] ) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;

	}


	if ($id == 'new_switch_order' && $wcme_options['enable_new_switch_order'] ) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;

	}

	if ($id == 'suspended_subscription' && $wcme_options['enable_suspended_subscription'] ) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;

	}

	if ($id == 'payment_retry' && $wcme_options['enable_payment_retry'] ) {
        $headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			//break;

	}


	return $headers;
}

}

else {return 'WooCommerce is not active, please install and activate it first';}