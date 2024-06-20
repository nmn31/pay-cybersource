<?php
// Template for displaying credit card fields on checkout page


		$cyber_options = get_option('woocommerce_cybersource_settings');
		
		if(isset($cyber_options["sanbox"]) && $cyber_options["sanbox"] == "yes" ){
			
			?>
		
			<fieldset id="cybersource-cc-form">
			<legend>Credit Card Details</legend>
			<p class="form-row form-row-wide">
				<label for="cybersource-card-number"><?php _e('Card Number', 'woocommerce'); ?> <span class="required">*</span></label>
				<input type="text" class="input-text" id="cybersource-card-number" maxlength = "17"  value = "4111111111111111" name="cybersource_card_number" autocomplete="off" />
			</p>
			<p class="form-row form-row-first">
				<label for="cybersource-card-expiry"><?php _e('Expiry Date (MM/YYYY)', 'woocommerce'); ?> <span class="required">*</span></label>
				<input style = "width:150px; float;left" maxlength = "2" min="1" max="12"  type="text" class="input-text" maxlength = "2"  id="expiry_month" name="expiry_month" value = "12" placeholder = "MM" autocomplete="off" />
				<input style = "width:150px" type="text" class="input-text" id="expiry_year" name="expiry_year" maxlength = "4" value = "2031" placeholder = "YYYY" autocomplete="off" />
			</p>
			<p class="form-row form-row-last">
				<label for="cybersource-card-cvc"><?php _e('Card Code (CVC)', 'woocommerce'); ?> <span class="required">*</span></label>
				<input maxlength = "3" type="text" placeholder = "123" class="input-text" id="cybersource-card-cvc" name="cybersource_card_cvc" autocomplete="off" />
			</p>
			<div class="clear"></div>
		</fieldset>

<?php			
		}else{?>
	
		<fieldset id="cybersource-cc-form">
		<legend>Credit Card Details</legend>
		<p class="form-row form-row-wide">
			<label for="cybersource-card-number"><?php _e('Card Number', 'woocommerce'); ?> <span class="required">*</span></label>
			<input type="text" placeholder = "4587459685475213" class="input-text"  maxlength = "16" id="cybersource-card-number" name="cybersource_card_number" autocomplete="off" />
		</p>
		<p class="form-row form-row-first">
			<label for="cybersource-card-expiry"><?php _e('Expiry Date (MM/YYYY)', 'woocommerce'); ?> <span class="required">*</span></label>
			<input style = "width:100px; float;left" maxlength = "2" min="1" max="12"  type="text" class="input-text" id="expiry_month" name="expiry_month" placeholder = "MM" autocomplete="off" />
			<input style = "width:100px" maxlength = "4" type="text" class="input-text" id="expiry_year" name="expiry_year" placeholder = "YYYY" autocomplete="off" />
		</p>
		<p class="form-row form-row-last">
			<label for="cybersource-card-cvc"><?php _e('Card Code (CVC)', 'woocommerce'); ?> <span class="required">*</span></label>
			<input  maxlength = "3" type="text" class="input-text" id="cybersource-card-cvc" placeholder = "123" name="cybersource_card_cvc" autocomplete="off" />
		</p>
		<div class="clear"></div>
	</fieldset>
	
	<?php		
			
		}
		?>
		
		
	<script>
    // jQuery to append HTML after another element on button click
    jQuery(document).ready(function() {
        
            var htmlToAppend = '<label for="payment_method_cybersource">Cybersource</label>';
            jQuery('#payment_method_cybersource').after(htmlToAppend);
      
    });
</script>
			
		

