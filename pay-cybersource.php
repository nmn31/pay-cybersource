<?php
/*
Plugin Name: WooCommerce CyberSource Payment Gateway
Description: CyberSource Payment Gateway integration for WooCommerce.
Version: 1.0.0
Author: Shammy Chandel
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Include the main class file
require_once dirname(__FILE__) . '/includes/class-wc-cybersource.php';

// Register the gateway
add_filter('woocommerce_payment_gateways', 'add_cybersource_gateway');
function add_cybersource_gateway($gateways) {
    $gateways[] = 'WC_CyberSource';
    return $gateways;
}

add_filter('woocommerce_thankyou_order_received_text', 'custom_thankyou_order_received_text', 10, 2);

function custom_thankyou_order_received_text($text, $order) {
    // Customize the message here
	$order_status = $order->get_status();
	
	$new_text = 'Thank you! Your order (#' . $order->get_order_number() . ') has been successfully received.';

	if($order_status == "pending"){
		$new_text = '<span =class = "warning danger">Your Payment is under review (#' . $order->get_order_number() . ').</span>';
	}
    return $new_text;
}

// Initialize the plugin
add_action('plugins_loaded', 'init_cybersource_gateway');
function init_cybersource_gateway() {
    if (!class_exists('WC_Payment_Gateway')) {
        return;
    }

    // Include the CyberSource API class
    require_once dirname(__FILE__) . '/includes/cybersource-api.php';

    // Add the gateway to WooCommerce
    class WC_CyberSource extends WC_Payment_Gateway {
        
        public function __construct() {
            $this->id = 'cybersource';
            $this->icon = ''; // URL to gateway icon
            $this->has_fields = true;
            $this->method_title = 'CyberSource';
            $this->method_description = 'Pay securely with CyberSource using credit or debit card.';

            // Load settings
            $this->init_form_fields();
            $this->init_settings();
                 // Define client ID and secret key fields
            $this->client_id = $this->get_option('woocommerce_cybersource_settings');
            $this->apiKeyID = $this->get_option('apiKeyID');
			$this->secret_key = $this->get_option('secret_key');

            // Check if credentials are valid
			
			
			$cyber_options = get_option('woocommerce_cybersource_settings');
			//exit;
            

            // Define actions
            add_action('woocommerce_update_options_payment_gateways_' . $this->id, array($this, 'process_admin_options'));
        }

        // Define form fields for admin settings
        public function init_form_fields() {
            $this->form_fields = array(
                'enabled' => array(
                    'title' => __('Enable/Disable', 'woocommerce'),
                    'type' => 'checkbox',
                    'label' => __('Enable CyberSource Payment Gateway', 'woocommerce'),
                    'default' => 'yes',
                ),
                'title' => array(
                    'title' => __('Title', 'woocommerce'),
                    'type' => 'text',
                    'description' => __('This controls the title which the user sees during checkout.', 'woocommerce'),
                    'default' => __('CyberSource', 'woocommerce'),
                    'desc_tip' => true,
                ),
                 'client_id' => array(
                'title' => __('Organization ID', 'woocommerce'),
                'type' => 'text',
                'description' => __('Enter your Organization ID.', 'woocommerce'),
                'default' => '',
                'desc_tip' => true,
            ),
            'apiKeyID' => array(
                'title' => __('Api Key ID', 'woocommerce'),
                'type' => 'password',
                'description' => __('Enter your CyberSource Secret Key.', 'woocommerce'),
                'default' => '',
                'desc_tip' => true,
            ),
			  'secret_key' => array(
                'title' => __('Secret Key', 'woocommerce'),
                'type' => 'password',
                'description' => __('Enter your CyberSource Secret Key.', 'woocommerce'),
                'default' => '',
                'desc_tip' => true,
            ),
			
			'sanbox' => array(
                    'title' => __('Enable/Disable', 'woocommerce'),
                    'type' => 'checkbox',
                    'label' => __('Test Sandbox', 'woocommerce'),
                    'default' => 'yes',
                ),
                'titlesanbox' => array(
                    'title' => __('Sandbox Title', 'woocommerce'),
                    'type' => 'text',
                    'description' => __('Test Payments In sandbox mode.', 'woocommerce'),
                    'default' => __('CyberSource', 'woocommerce'),
                    'desc_tip' => true,
                ),
                 'client_idsanbox' => array(
                'title' => __('Sandbox Organization ID', 'woocommerce'),
                'type' => 'text',
                'description' => __('Enter your Organization ID.', 'woocommerce'),
                'default' => '',
                'desc_tip' => true,
            ),
            'apiKeyIDsanbox' => array(
                'title' => __('Sandbox Api Key ID', 'woocommerce'),
                'type' => 'password',
                'description' => __('Enter your CyberSource Secret Key.', 'woocommerce'),
                'default' => '',
                'desc_tip' => true,
            ),
			  'secret_keysanbox' => array(
                'title' => __('Sandbox Secret Key', 'woocommerce'),
                'type' => 'password',
                'description' => __('Enter your CyberSource Secret Key.', 'woocommerce'),
                'default' => '',
                'desc_tip' => true,
            ),
                // Add more settings fields as needed
            );
        } 

        // Display credit card fields on the checkout page
        public function payment_fields() {
            // Load the payment form template
            include dirname(__FILE__) . '/templates/payment-form.php';
        }

        // Process payment
		
        public function process_payment($order_id) {
			

            global $woocommerce;
			
			$cyber_options = get_option('woocommerce_cybersource_settings');
			if(isset($cyber_options["enabled"]) && $cyber_options["enabled"] == "yes" ){
				
				
				
				// Check if payment method is credit card

				
				// Retrieve order details
				$order = wc_get_order($order_id);

				// Process payment via CyberSource API (implement in cybersource-api.php)
				$payment_result = cybersource_process_payment($order);

				if ($payment_result['success']) {
					
					$data = $payment_result['cyber_response'];
					$payment_id = $data->id;
					$submitTimeUtc = $data->submitTimeUtc;
					$reconciliationId = $data->reconciliationId;
					$clientReferenceInformation = $data->clientReferenceInformation->code;
					$orderInformation = $data->orderInformation->amountDetails->authorizedAmount.''.$data->orderInformation->amountDetails->currency;
					$pointOfSaleInformation = $data->pointOfSaleInformation->terminalId;
					
					$order->add_order_note( 'payment_id:- '.$payment_id , 'Cybersource' );
					$order->add_order_note( 'submitTimeUtc:- '.$submitTimeUtc , 'Cybersource' );
					$order->add_order_note( 'reconciliationId:- '.$reconciliationId , 'Cybersource' );
					$order->add_order_note( 'pointOfSaleInformation:- '.$pointOfSaleInformation , 'Cybersource' );
					$order->add_order_note( 'orderInformation:- '.$orderInformation , 'Cybersource' );
					
					if(isset($payment_result['AUTHORIZED_PENDING_REVIEW'])){
						
						

						$order->add_order_note( 'AUTHORIZED_PENDING_REVIEW', 'Cybersource' );
					    $order->add_order_note(json_encode($payment_result['cyber_response']));
						wc_add_notice(__('Payment error: ', 'woocommerce') . json_encode($payment_result), 'error');
						return array(
						'result' => 'success',
						"message"=>"Your payment is under review",
						'redirect' => $this->get_return_url($order),
					    );
					}
					// Mark the order as paid
					
					$order->payment_complete();
					// Reduce stock levels
					$order->reduce_order_stock();
					// Redirect to thank you page
					$order->add_order_note( 'IPN payment AUTHORIZED', 'Cybersource' );
					//$order->add_order_note(json_encode($payment_result['cyber_response']));
					return array(
						'result' => 'success',
						'redirect' => $this->get_return_url($order),
					);
				} else {
					// Payment failed, display error message
					wc_add_notice(__('Payment error: ', 'woocommerce') . json_encode($payment_result), 'error');
					return;
				}
				
				
			}
		}
    }
	
	
}

