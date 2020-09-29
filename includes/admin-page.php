<?php

function wcme_options_page() {

	global $wcme_options;

	ob_start(); ?>
	<div class="wrap">
		<h2>WC Multiple Recipients for E-Mail</h2>
		
		<form method="post" action="options.php">
		
			<?php settings_fields('wcme_settings_group'); ?>
		

			<h4><?php _e('Enter your additional E-Mail recipients. <br><p>Enter one E-Mail per field i.e. woo@sendtome.com</p>', 'wcme_domain'); ?></h4>
			<p>
				<input size="70" id="wcme_settings[email_1]" name="wcme_settings[email_1]" type="text" value="<?php echo $wcme_options['email_1']; ?>"/><br>
				<label class="description" for="wcme_settings[email_1]"><?php _e('', 'wcme_domain'); ?></label>
			</p>

			<p>
				<input size="70" id="wcme_settings[email_2]" name="wcme_settings[email_2]" type="text" value="<?php echo $wcme_options['email_2']; ?>"/><br>
				<label class="description" for="wcme_settings[email_1]"><?php _e('', 'wcme_domain'); ?></label>
			</p>

			<p>
				<input size="70" id="wcme_settings[email_3]" name="wcme_settings[email_3]" type="text" value="<?php echo $wcme_options['email_3']; ?>"/><br>
				<label class="description" for="wcme_settings[email_1]"><?php _e('', 'wcme_domain'); ?></label>
			</p>

			<p>
				<input size="70" id="wcme_settings[email_4]" name="wcme_settings[email_4]" type="text" value="<?php echo $wcme_options['email_4']; ?>"/><br>
				<label class="description" for="wcme_settings[email_1]"><?php _e('', 'wcme_domain'); ?></label>
			</p>

			<p>
				<input size="70" id="wcme_settings[email_5]" name="wcme_settings[email_5]" type="text" value="<?php echo $wcme_options['email_5']; ?>"/><br>
				<label class="description" for="wcme_settings[email_1]"><?php _e('', 'wcme_domain'); ?></label>
			</p>
			

			<h4><?php _e('Select the WooCommerce Mails you want to have multiple recipients', 'wcme_domain'); ?></h4>
			<h5><?php _e('WooCommerce Core', 'wcme_domain'); ?></h5>
			<p> 
				<input name="wcme_settings[enable_new]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_new]" value="1"<?php checked( 1 == $wcme_options['enable_new'] ); ?> />
				<label class="description" for="wcme_settings[enable_new]"><?php _e('WooCommerce New Order Mail', 'wcme_domain'); ?></label>				
			</p>

			<p> 
				<input name="wcme_settings[enable_cancelled]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_cancelled]" value="1"<?php checked( 1 == $wcme_options['enable_cancelled'] ); ?> />
				<label class="description" for="wcme_settings[enable_cancelled]"><?php _e('WooCommerce Cancelled Order Mail', 'wcme_domain'); ?></label>				
			</p>

			<p> 
				<input name="wcme_settings[enable_processing]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_processing]" value="1"<?php checked( 1 == $wcme_options['enable_processing'] ); ?> />
				<label class="description" for="wcme_settings[enable_processing]"><?php _e('WooCommerce Processing Order Mail', 'wcme_domain'); ?></label>				
			</p>


			<p> 
				<input name="wcme_settings[enable_completed]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_completed]" value="1"<?php checked( 1 == $wcme_options['enable_completed'] ); ?> />
				<label class="description" for="wcme_settings[enable_completed]"><?php _e('WooCommerce Completed Order Mail', 'wcme_domain'); ?></label>				
			</p>


			<p> 
				
				<input name="wcme_settings[enable_invoice]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_invoice]" value="1"<?php checked( 1 == $wcme_options['enable_invoice'] ); ?> />
				<label class="description" for="wcme_settings[enable_invoice]"><?php _e('WooCommerce Order Invoice Mail', 'wcme_domain'); ?></label>				
			</p>
			
			<input name="wcme_settings[enable_on_hold]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_on_hold]" value="1"<?php checked( 1 == $wcme_options['enable_on_hold'] ); ?> />
				<label class="description" for="wcme_settings[enable_on_hold]"><?php _e('WooCommerce On Hold Mail <i>(This email only gets triggered when the order gets set from pending or failed to on-hold)</i>', 'wcme_domain'); ?></label>				
			</p>



			<p> 
				
				<input name="wcme_settings[enable_refunded]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_refunded]" value="1"<?php checked( 1 == $wcme_options['enable_refunded'] ); ?> />
				<label class="description" for="wcme_settings[enable_refunded]"><?php _e('WooCommerce Refunded Order Mail', 'wcme_domain'); ?></label>				
			</p>
			
			<!-- Start WooCommerce Bookings Mails -->
			<h5><?php _e('WooCommerce Bookings', 'wcme_domain'); ?></h5>
			<p> 
				
				<input name="wcme_settings[enable_booking_cancelled]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_booking_cancelled]" value="1"<?php checked( 1 ==  ($wcme_options['enable_booking_cancelled']) ); ?> />
				<label class="description" for="wcme_settings[enable_booking_cancelled]"><?php _e('WooCommerce Bookings Cancelled Mail', 'wcme_domain'); ?></label>				
			</p>
			
			<p> 
			
				<input name="wcme_settings[enable_booking_confirmed]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_booking_confirmed]" value="1"<?php checked(  1 == ( $wcme_options['enable_booking_confirmed'] ) ); 
					//checked( 1 == $wcme_options['enable_booking_confirmed'] ); ?> />
				<label class="description" for="wcme_settings[enable_booking_confirmed]"><?php _e('WooCommerce Bookings Confirmed Mail', 'wcme_domain'); ?></label>				
			</p>
			
			
			<p> 
				
				<input name="wcme_settings[enable_booking_notification]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_booking_notification]" value="1"<?php checked(  1 == ( $wcme_options['enable_booking_notification'] )); ?> />
				<label class="description" for="wcme_settings[enable_booking_notification]"><?php _e('WooCommerce Bookings Manual Notification Mail', 'wcme_domain'); ?></label>				
			</p>
			
			
			<p> 
				
				<input name="wcme_settings[enable_booking_reminder]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_booking_reminder]" value="1"<?php checked(  1 == ( $wcme_options['enable_booking_reminder'] )); ?> />
				<label class="description" for="wcme_settings[enable_booking_reminder]"><?php _e('WooCommerce Bookings Reminder Mail', 'wcme_domain'); ?></label>				
			</p>
			
			
			<p> 
				
				<input name="wcme_settings[enable_new_booking]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_new_booking]" value="1"<?php checked(  1 ==  ( $wcme_options['enable_new_booking'] )); ?> />
				<label class="description" for="wcme_settings[enable_new_booking]"><?php _e('WooCommerce Bookings New Booking Mail', 'wcme_domain'); ?></label>				
			</p>
			<!-- Start WooCommerce Subscriptions -->
			<h5><?php _e('WooCommerce Subscriptions', 'wcme_domain'); ?></h5>
			<p> 
				
				<input name="wcme_settings[enable_customer_completed_renewal_order]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_customer_completed_renewal_order]" value="1"<?php checked(  1 ==  ( $wcme_options['enable_customer_completed_renewal_order'] )); ?> />
				<label class="description" for="wcme_settings[enable_customer_completed_renewal_order]"><?php _e('WooCommerce Subscriptions Completed Renewal Order Mail', 'wcme_domain'); ?></label>				
			</p>
			
			<p> 
				
				<input name="wcme_settings[enable_customer_completed_switch_order]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_customer_completed_switch_order]" value="1"<?php checked(  1 ==  ( $wcme_options['enable_customer_completed_switch_order'] )); ?> />
				<label class="description" for="wcme_settings[enable_customer_completed_switch_order]"><?php _e('WooCommerce Subscriptions Completed Switch Order Mail', 'wcme_domain'); ?></label>				
			</p>
			
			<p> 
				
				<input name="wcme_settings[enable_customer_payment_retry]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_customer_payment_retry]" value="1"<?php checked(  1 ==  ( $wcme_options['enable_customer_payment_retry'] )); ?> />
				<label class="description" for="wcme_settings[enable_customer_payment_retry]"><?php _e('WooCommerce Subscriptions Customer Payment Retry Mail', 'wcme_domain'); ?></label>				
			</p>
			
			<p> 
				
				<input name="wcme_settings[customer_processing_renewal_order]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[customer_processing_renewal_order]" value="1"<?php checked(  1 ==  ( $wcme_options['customer_processing_renewal_order'] )); ?> />
				<label class="description" for="wcme_settings[customer_processing_renewal_order]"><?php _e('WooCommerce Subscriptions Customer Processing Renewal Order Mail', 'wcme_domain'); ?></label>				
			</p>
			
			<p> 
				
				<input name="wcme_settings[enable_customer_renewal_invoice]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_customer_renewal_invoice]" value="1"<?php checked(  1 ==  ( $wcme_options['enable_customer_renewal_invoice'] )); ?> />
				<label class="description" for="wcme_settings[enable_customer_renewal_invoice]"><?php _e('WooCommerce Subscriptions Customer Renewal Invoice Mail', 'wcme_domain'); ?></label>				
			</p>
			
			
			<p> 
				
				<input name="wcme_settings[expired_subscription]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[expired_subscription]" value="1"<?php checked(  1 ==  ( $wcme_options['expired_subscription'] )); ?> />
				<label class="description" for="wcme_settings[expired_subscription]"><?php _e('WooCommerce Subscriptions Expired Subscription Mail', 'wcme_domain'); ?></label>				
			</p>
			
			<p> 
				
				<input name="wcme_settings[enable_new_renewal_order]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_new_renewal_order]" value="1"<?php checked(  1 ==  ( $wcme_options['enable_new_renewal_order'] )); ?> />
				<label class="description" for="wcme_settings[enable_new_renewal_order]"><?php _e('WooCommerce Subscriptions New Renewal Order Mail', 'wcme_domain'); ?></label>				
			</p>
			
			<p> 
				
				<input name="wcme_settings[enable_new_switch_order]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_new_switch_order]" value="1"<?php checked(  1 ==  ( $wcme_options['enable_new_switch_order'] )); ?> />
				<label class="description" for="wcme_settings[enable_new_switch_order]"><?php _e('WooCommerce Subscriptions New Switch Order Mail', 'wcme_domain'); ?></label>				
			</p>
			
			<p> 
				
				<input name="wcme_settings[enable_suspended_subscription]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_suspended_subscription]" value="1"<?php checked(  1 ==  ( $wcme_options['enable_suspended_subscription'] )); ?> />
				<label class="description" for="wcme_settings[enable_suspended_subscription]"><?php _e('WooCommerce Subscriptions Suspended Subscription Mail', 'wcme_domain'); ?></label>				
			</p>
			
			<p> 
				
				<input name="wcme_settings[enable_payment_retry]" value="0" type="hidden">
				<input type="checkbox" name="wcme_settings[enable_payment_retry]" value="1"<?php checked(  1 ==  ( $wcme_options['enable_payment_retry'] )); ?> />
				<label class="description" for="wcme_settings[enable_payment_retry]"><?php _e('WooCommerce Subscriptions Payment Retry Mail', 'wcme_domain'); ?></label>				
			</p>
		
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Save Options', 'wcme_domain'); ?>" />

			</p>
		
		</form>
		
	</div>
	<?php
	echo ob_get_clean();
}





function wcme_add_options_link() {
	add_options_page('WC Multiple Recipients for Email', 'WC Multiple Email Recipients', 'manage_options', 'wcme-options', 'wcme_options_page');
}
add_action('admin_menu', 'wcme_add_options_link');

function wcme_register_settings() {
	// creates our settings in the options table
	register_setting('wcme_settings_group', 'wcme_settings');
}
add_action('admin_init', 'wcme_register_settings');