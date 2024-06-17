<?php
/**
 * BillingAgreementsApi
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Api;

use \CyberSource\ApiClient;
use \CyberSource\ApiException;
use \CyberSource\Configuration;
use \CyberSource\ObjectSerializer;
use \CyberSource\Logging\LogFactory as LogFactory;

/**
 * BillingAgreementsApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BillingAgreementsApi
{
    private static $logger = null;
    
    /**
     * API Client
     *
     * @var \CyberSource\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \CyberSource\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\CyberSource\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;

        if (self::$logger === null) {
            self::$logger = (new LogFactory())->getLogger(\CyberSource\Utilities\Helpers\ClassHelper::getClassName(get_class()), $apiClient->merchantConfig->getLogConfiguration());
        }
    }

    /**
     * Get API client
     *
     * @return \CyberSource\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \CyberSource\ApiClient $apiClient set the API client
     *
     * @return BillingAgreementsApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation billingAgreementsDeRegistration
     *
     * Modify a Billing Agreement
     *
     * @param \CyberSource\Model\ModifyBillingAgreement $modifyBillingAgreement  (required)
     * @param string $id ID for de-registration or cancellation of Billing Agreement (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2ModifyBillingAgreementPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function billingAgreementsDeRegistration($modifyBillingAgreement, $id)
    {
        self::$logger->info('CALL TO METHOD billingAgreementsDeRegistration STARTED');
        list($response, $statusCode, $httpHeader) = $this->billingAgreementsDeRegistrationWithHttpInfo($modifyBillingAgreement, $id);
        self::$logger->info('CALL TO METHOD billingAgreementsDeRegistration ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation billingAgreementsDeRegistrationWithHttpInfo
     *
     * Modify a Billing Agreement
     *
     * @param \CyberSource\Model\ModifyBillingAgreement $modifyBillingAgreement  (required)
     * @param string $id ID for de-registration or cancellation of Billing Agreement (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2ModifyBillingAgreementPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function billingAgreementsDeRegistrationWithHttpInfo($modifyBillingAgreement, $id)
    {
        // verify the required parameter 'modifyBillingAgreement' is set
        if ($modifyBillingAgreement === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $modifyBillingAgreement when calling billingAgreementsDeRegistration");
            throw new \InvalidArgumentException('Missing the required parameter $modifyBillingAgreement when calling billingAgreementsDeRegistration');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $id when calling billingAgreementsDeRegistration");
            throw new \InvalidArgumentException('Missing the required parameter $id when calling billingAgreementsDeRegistration');
        }
        // parse inputs
        $resourcePath = "/pts/v2/billing-agreements/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($modifyBillingAgreement)) {
            $_tempBody = $modifyBillingAgreement;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\ModifyBillingAgreement');

        $_tempBody = $sdkTracker->insertDeveloperIdTracker($_tempBody, end($modelClassLocation), $this->apiClient->merchantConfig->getRunEnvironment());

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : PATCH $resourcePath");
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\PtsV2ModifyBillingAgreementPost201Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PtsV2ModifyBillingAgreementPost201Response',
                '/pts/v2/billing-agreements/{id}'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PtsV2ModifyBillingAgreementPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2ModifyBillingAgreementPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2CreateBillingAgreementPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2CreateBillingAgreementPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation billingAgreementsIntimation
     *
     * Standing Instruction intimation
     *
     * @param \CyberSource\Model\IntimateBillingAgreement $intimateBillingAgreement  (required)
     * @param string $id ID for intimation of Billing Agreement (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2CreditsPost201Response1, HTTP status code, HTTP response headers (array of strings)
     */
    public function billingAgreementsIntimation($intimateBillingAgreement, $id)
    {
        self::$logger->info('CALL TO METHOD billingAgreementsIntimation STARTED');
        list($response, $statusCode, $httpHeader) = $this->billingAgreementsIntimationWithHttpInfo($intimateBillingAgreement, $id);
        self::$logger->info('CALL TO METHOD billingAgreementsIntimation ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation billingAgreementsIntimationWithHttpInfo
     *
     * Standing Instruction intimation
     *
     * @param \CyberSource\Model\IntimateBillingAgreement $intimateBillingAgreement  (required)
     * @param string $id ID for intimation of Billing Agreement (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2CreditsPost201Response1, HTTP status code, HTTP response headers (array of strings)
     */
    public function billingAgreementsIntimationWithHttpInfo($intimateBillingAgreement, $id)
    {
        // verify the required parameter 'intimateBillingAgreement' is set
        if ($intimateBillingAgreement === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $intimateBillingAgreement when calling billingAgreementsIntimation");
            throw new \InvalidArgumentException('Missing the required parameter $intimateBillingAgreement when calling billingAgreementsIntimation');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $id when calling billingAgreementsIntimation");
            throw new \InvalidArgumentException('Missing the required parameter $id when calling billingAgreementsIntimation');
        }
        // parse inputs
        $resourcePath = "/pts/v2/billing-agreements/{id}/intimations";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($intimateBillingAgreement)) {
            $_tempBody = $intimateBillingAgreement;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\IntimateBillingAgreement');

        $_tempBody = $sdkTracker->insertDeveloperIdTracker($_tempBody, end($modelClassLocation), $this->apiClient->merchantConfig->getRunEnvironment());

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : POST $resourcePath");
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\PtsV2CreditsPost201Response1");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PtsV2CreditsPost201Response1',
                '/pts/v2/billing-agreements/{id}/intimations'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PtsV2CreditsPost201Response1', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2CreditsPost201Response1', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2CreateBillingAgreementPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2CreateBillingAgreementPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation billingAgreementsRegistration
     *
     * Create a Billing Agreement
     *
     * @param \CyberSource\Model\CreateBillingAgreement $createBillingAgreement  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2CreateBillingAgreementPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function billingAgreementsRegistration($createBillingAgreement)
    {
        self::$logger->info('CALL TO METHOD billingAgreementsRegistration STARTED');
        list($response, $statusCode, $httpHeader) = $this->billingAgreementsRegistrationWithHttpInfo($createBillingAgreement);
        self::$logger->info('CALL TO METHOD billingAgreementsRegistration ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation billingAgreementsRegistrationWithHttpInfo
     *
     * Create a Billing Agreement
     *
     * @param \CyberSource\Model\CreateBillingAgreement $createBillingAgreement  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2CreateBillingAgreementPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function billingAgreementsRegistrationWithHttpInfo($createBillingAgreement)
    {
        // verify the required parameter 'createBillingAgreement' is set
        if ($createBillingAgreement === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $createBillingAgreement when calling billingAgreementsRegistration");
            throw new \InvalidArgumentException('Missing the required parameter $createBillingAgreement when calling billingAgreementsRegistration');
        }
        // parse inputs
        $resourcePath = "/pts/v2/billing-agreements";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // body params
        $_tempBody = null;
        if (isset($createBillingAgreement)) {
            $_tempBody = $createBillingAgreement;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\CreateBillingAgreement');

        $_tempBody = $sdkTracker->insertDeveloperIdTracker($_tempBody, end($modelClassLocation), $this->apiClient->merchantConfig->getRunEnvironment());

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : POST $resourcePath");
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\PtsV2CreateBillingAgreementPost201Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PtsV2CreateBillingAgreementPost201Response',
                '/pts/v2/billing-agreements'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PtsV2CreateBillingAgreementPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2CreateBillingAgreementPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2CreateBillingAgreementPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2CreateBillingAgreementPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }
}
