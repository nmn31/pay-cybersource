<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor/autoload.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'cybersource/Resources/ExternalConfiguration.php';

function SimpleAuthorizationInternet($flag ,$order )
{
    if (isset($flag) && $flag == "true") {
        $capture = true;
    } else {
        $capture = false;
    }
	
						if ($_POST['payment_method'] !== 'cybersource') {
						return;
					}

	// Validate credit card details
	$card_number = isset($_POST['cybersource_card_number']) ? sanitize_text_field($_POST['cybersource_card_number']) : '';
	$expiry_month = isset($_POST['expiry_month']) ? sanitize_text_field($_POST['expiry_month']) : '';
	$expiry_year = isset($_POST['expiry_year']) ? sanitize_text_field($_POST['expiry_year']) : '';
	$cvv = isset($_POST['cybersource_card_cvc']) ? sanitize_text_field($_POST['cybersource_card_cvc']) : '';

	// Perform validation
	if (empty($card_number) || !is_numeric($card_number)) {
		return wc_add_notice(__('Please enter a valid credit card number.', 'your-textdomain'), 'error');
	}

	if (empty($expiry_month) || !is_numeric($expiry_month) || $expiry_month < 1 || $expiry_month > 12) {
		return wc_add_notice(__('Please enter a valid expiry month (1-12).', 'your-textdomain'), 'error');
	}

	if (empty($expiry_year) || !is_numeric($expiry_year) || strlen($expiry_year) !== 4) {
		wc_add_notice(__('Please enter a valid expiry year (YYYY).', 'your-textdomain'), 'error');
	}

	if (empty($cvv) || !is_numeric($cvv)) {
		wc_add_notice(__('Please enter a valid CVV number.', 'your-textdomain'), 'error');
	}

	$order_total = $order->get_total();
	
	// Get specific billing address fields
	$billing_first_name = $order->get_billing_first_name();
	$billing_last_name = $order->get_billing_last_name();
	$billing_company = $order->get_billing_company();
	$billing_address_1 = $order->get_billing_address_1();
	$billing_address_2 = $order->get_billing_address_2();
	$billing_city = $order->get_billing_city();
	$billing_state = $order->get_billing_state();
	$billing_postcode = $order->get_billing_postcode();
	$billing_country = $order->get_billing_country();
	$billing_email = $order->get_billing_email();
	$billing_phone = $order->get_billing_phone();
    
	$clientReferenceInformationArr = [
            "code" => "TC50171_3"
    ];
    $clientReferenceInformation = new CyberSource\Model\Ptsv2paymentsClientReferenceInformation($clientReferenceInformationArr);

    $processingInformationArr = [
            "capture" => $capture
    ];
    $processingInformation = new CyberSource\Model\Ptsv2paymentsProcessingInformation($processingInformationArr);

    $paymentInformationCardArr = [
            "number" => $card_number,
            "expirationMonth" => $expiry_month,
            "expirationYear" =>  $expiry_year
    ];
    $paymentInformationCard = new CyberSource\Model\Ptsv2paymentsPaymentInformationCard($paymentInformationCardArr);

    $paymentInformationArr = [
            "card" => $paymentInformationCard
    ];
    $paymentInformation = new CyberSource\Model\Ptsv2paymentsPaymentInformation($paymentInformationArr);

    $orderInformationAmountDetailsArr = [
            "totalAmount" => $order_total,
            "currency" => "USD"
    ];
    $orderInformationAmountDetails = new CyberSource\Model\Ptsv2paymentsOrderInformationAmountDetails($orderInformationAmountDetailsArr);

    $orderInformationBillToArr = [
            "firstName" => $billing_first_name,
            "lastName" => $billing_last_name,
            "address1" => $billing_address_1,
            "locality" => $billing_address_2,
            "administrativeArea" => $billing_company,
            "postalCode" => $billing_postcode,
            "country" => $billing_country,
            "email" => $billing_email,
            "phoneNumber" => $billing_phone
    ];
    $orderInformationBillTo = new CyberSource\Model\Ptsv2paymentsOrderInformationBillTo($orderInformationBillToArr);

    $orderInformationArr = [
            "amountDetails" => $orderInformationAmountDetails,
            "billTo" => $orderInformationBillTo
    ];
    $orderInformation = new CyberSource\Model\Ptsv2paymentsOrderInformation($orderInformationArr);

    $requestObjArr = [
            "clientReferenceInformation" => $clientReferenceInformation,
            "processingInformation" => $processingInformation,
            "paymentInformation" => $paymentInformation,
            "orderInformation" => $orderInformation
    ];
    $requestObj = new CyberSource\Model\CreatePaymentRequest($requestObjArr);


    $commonElement = new CyberSource\ExternalConfiguration();
    $config = $commonElement->ConnectionHost();
    $merchantConfig = $commonElement->merchantConfigObject();

    $api_client = new CyberSource\ApiClient($config, $merchantConfig);
    $api_instance = new CyberSource\Api\PaymentsApi($api_client);

    try {
        $apiResponse = $api_instance->createPayment($requestObj);
       
        $data = json_decode(WriteLogAudit($apiResponse[0]));
		$status = $data->status;
		if ($data->status =="AUTHORIZED"){
			
			
			$payment_id = $data->id;
			$submitTimeUtc = $data->submitTimeUtc;
			$reconciliationId = $data->reconciliationId;
			$clientReferenceInformation = $data->clientReferenceInformation->code;
			$orderInformation = $data->orderInformation->amountDetails->authorizedAmount.''.$data->orderInformation->amountDetails->currency;
			$pointOfSaleInformation = $data->pointOfSaleInformation->terminalId;
			
			$payment_result = array(
					'success' => true, // Replace with actual API response handling
					'message' => 'Payment processed successfully.', // Replace with actual error handling
					'cyber_response'=>$data,
				);

			return $payment_result;
		
		}else{
			
			$payment_result = array(
					'success' => false, // Replace with actual API response handling
					'message' => $status.'Check Card Details', // Replace with actual error handling
					'cyber_response'=>$data,
				);

			return $payment_result;
			
		}
		
		
    } catch (Cybersource\ApiException $e) {
      
        $errorCode = $e->getCode();
		
		$payment_result = array(
					'success' => false, // Replace with actual API response handling
					'message' =>  $errorCode, // Replace with actual error handling
					'cyber_response'=>$errorCode,
				);
       WriteLogAudit($errorCode);
	   return $payment_result;
      
    }
}

if (!function_exists('WriteLogAudit')){
    function WriteLogAudit($status){
        $sampleCode = basename(__FILE__, '.php');
		//echo $sampleCode;
        return "$status";
    }
}




function cybersource_process_payment($order) {
    // Implement payment processing logic using CyberSource REST API
    // Example:
	return SimpleAuthorizationInternet('false' ,$order);

}
