<?php
/**
 * DecisionManagerApi
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
 * DecisionManagerApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DecisionManagerApi
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
     * @return DecisionManagerApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation actionDecisionManagerCase
     *
     * Take action on a DM post-transactional case
     *
     * @param string $id An unique identification number generated by Cybersource to identify the submitted request. (required)
     * @param \CyberSource\Model\CaseManagementActionsRequest $caseManagementActionsRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function actionDecisionManagerCase($id, $caseManagementActionsRequest)
    {
        self::$logger->info('CALL TO METHOD actionDecisionManagerCase STARTED');
        list($response, $statusCode, $httpHeader) = $this->actionDecisionManagerCaseWithHttpInfo($id, $caseManagementActionsRequest);
        self::$logger->info('CALL TO METHOD actionDecisionManagerCase ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation actionDecisionManagerCaseWithHttpInfo
     *
     * Take action on a DM post-transactional case
     *
     * @param string $id An unique identification number generated by Cybersource to identify the submitted request. (required)
     * @param \CyberSource\Model\CaseManagementActionsRequest $caseManagementActionsRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function actionDecisionManagerCaseWithHttpInfo($id, $caseManagementActionsRequest)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $id when calling actionDecisionManagerCase");
            throw new \InvalidArgumentException('Missing the required parameter $id when calling actionDecisionManagerCase');
        }
        // verify the required parameter 'caseManagementActionsRequest' is set
        if ($caseManagementActionsRequest === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $caseManagementActionsRequest when calling actionDecisionManagerCase");
            throw new \InvalidArgumentException('Missing the required parameter $caseManagementActionsRequest when calling actionDecisionManagerCase');
        }
        // parse inputs
        $resourcePath = "/risk/v1/decisions/{id}/actions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

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
        if (isset($caseManagementActionsRequest)) {
            $_tempBody = $caseManagementActionsRequest;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\CaseManagementActionsRequest');

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

        self::$logger->debug("Return Type : \CyberSource\Model\InlineResponse200");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\InlineResponse200',
                '/risk/v1/decisions/{id}/actions'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\InlineResponse200', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse200', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4031', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse422', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse5001', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse502', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse503', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation addNegative
     *
     * List Management
     *
     * @param string $type The list to be updated. It can be &#39;positive&#39;, &#39;negative&#39; or &#39;review&#39;. (required)
     * @param \CyberSource\Model\AddNegativeListRequest $addNegativeListRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\RiskV1UpdatePost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function addNegative($type, $addNegativeListRequest)
    {
        self::$logger->info('CALL TO METHOD addNegative STARTED');
        list($response, $statusCode, $httpHeader) = $this->addNegativeWithHttpInfo($type, $addNegativeListRequest);
        self::$logger->info('CALL TO METHOD addNegative ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation addNegativeWithHttpInfo
     *
     * List Management
     *
     * @param string $type The list to be updated. It can be &#39;positive&#39;, &#39;negative&#39; or &#39;review&#39;. (required)
     * @param \CyberSource\Model\AddNegativeListRequest $addNegativeListRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\RiskV1UpdatePost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function addNegativeWithHttpInfo($type, $addNegativeListRequest)
    {
        // verify the required parameter 'type' is set
        if ($type === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $type when calling addNegative");
            throw new \InvalidArgumentException('Missing the required parameter $type when calling addNegative');
        }
        // verify the required parameter 'addNegativeListRequest' is set
        if ($addNegativeListRequest === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $addNegativeListRequest when calling addNegative");
            throw new \InvalidArgumentException('Missing the required parameter $addNegativeListRequest when calling addNegative');
        }
        // parse inputs
        $resourcePath = "/risk/v1/lists/{type}/entries";
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
        if ($type !== null) {
            $resourcePath = str_replace(
                "{" . "type" . "}",
                $this->apiClient->getSerializer()->toPathValue($type),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($addNegativeListRequest)) {
            $_tempBody = $addNegativeListRequest;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\AddNegativeListRequest');

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

        self::$logger->debug("Return Type : \CyberSource\Model\RiskV1UpdatePost201Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\RiskV1UpdatePost201Response',
                '/risk/v1/lists/{type}/entries'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\RiskV1UpdatePost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\RiskV1UpdatePost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\RiskV1DecisionsPost400Response1', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation commentDecisionManagerCase
     *
     * Add a comment to a DM post-transactional case
     *
     * @param string $id An unique identification number generated by Cybersource to identify the submitted request. (required)
     * @param \CyberSource\Model\CaseManagementCommentsRequest $caseManagementCommentsRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse201, HTTP status code, HTTP response headers (array of strings)
     */
    public function commentDecisionManagerCase($id, $caseManagementCommentsRequest)
    {
        self::$logger->info('CALL TO METHOD commentDecisionManagerCase STARTED');
        list($response, $statusCode, $httpHeader) = $this->commentDecisionManagerCaseWithHttpInfo($id, $caseManagementCommentsRequest);
        self::$logger->info('CALL TO METHOD commentDecisionManagerCase ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation commentDecisionManagerCaseWithHttpInfo
     *
     * Add a comment to a DM post-transactional case
     *
     * @param string $id An unique identification number generated by Cybersource to identify the submitted request. (required)
     * @param \CyberSource\Model\CaseManagementCommentsRequest $caseManagementCommentsRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse201, HTTP status code, HTTP response headers (array of strings)
     */
    public function commentDecisionManagerCaseWithHttpInfo($id, $caseManagementCommentsRequest)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $id when calling commentDecisionManagerCase");
            throw new \InvalidArgumentException('Missing the required parameter $id when calling commentDecisionManagerCase');
        }
        // verify the required parameter 'caseManagementCommentsRequest' is set
        if ($caseManagementCommentsRequest === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $caseManagementCommentsRequest when calling commentDecisionManagerCase");
            throw new \InvalidArgumentException('Missing the required parameter $caseManagementCommentsRequest when calling commentDecisionManagerCase');
        }
        // parse inputs
        $resourcePath = "/risk/v1/decisions/{id}/comments";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

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
        if (isset($caseManagementCommentsRequest)) {
            $_tempBody = $caseManagementCommentsRequest;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\CaseManagementCommentsRequest');

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

        self::$logger->debug("Return Type : \CyberSource\Model\InlineResponse201");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\InlineResponse201',
                '/risk/v1/decisions/{id}/comments'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\InlineResponse201', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse201', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4031', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse422', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse5001', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse502', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse503', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation createBundledDecisionManagerCase
     *
     * Create Decision Manager
     *
     * @param \CyberSource\Model\CreateBundledDecisionManagerCaseRequest $createBundledDecisionManagerCaseRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\RiskV1DecisionsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function createBundledDecisionManagerCase($createBundledDecisionManagerCaseRequest)
    {
        self::$logger->info('CALL TO METHOD createBundledDecisionManagerCase STARTED');
        list($response, $statusCode, $httpHeader) = $this->createBundledDecisionManagerCaseWithHttpInfo($createBundledDecisionManagerCaseRequest);
        self::$logger->info('CALL TO METHOD createBundledDecisionManagerCase ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation createBundledDecisionManagerCaseWithHttpInfo
     *
     * Create Decision Manager
     *
     * @param \CyberSource\Model\CreateBundledDecisionManagerCaseRequest $createBundledDecisionManagerCaseRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\RiskV1DecisionsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function createBundledDecisionManagerCaseWithHttpInfo($createBundledDecisionManagerCaseRequest)
    {
        // verify the required parameter 'createBundledDecisionManagerCaseRequest' is set
        if ($createBundledDecisionManagerCaseRequest === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $createBundledDecisionManagerCaseRequest when calling createBundledDecisionManagerCase");
            throw new \InvalidArgumentException('Missing the required parameter $createBundledDecisionManagerCaseRequest when calling createBundledDecisionManagerCase');
        }
        // parse inputs
        $resourcePath = "/risk/v1/decisions";
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
        if (isset($createBundledDecisionManagerCaseRequest)) {
            $_tempBody = $createBundledDecisionManagerCaseRequest;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\CreateBundledDecisionManagerCaseRequest');

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

        self::$logger->debug("Return Type : \CyberSource\Model\RiskV1DecisionsPost201Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\RiskV1DecisionsPost201Response',
                '/risk/v1/decisions'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\RiskV1DecisionsPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\RiskV1DecisionsPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\RiskV1DecisionsPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation fraudUpdate
     *
     * Fraud Marking
     *
     * @param string $id Request ID of the transaction that you want to mark as suspect or remove from history. (required)
     * @param \CyberSource\Model\FraudMarkingActionRequest $fraudMarkingActionRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\RiskV1UpdatePost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function fraudUpdate($id, $fraudMarkingActionRequest)
    {
        self::$logger->info('CALL TO METHOD fraudUpdate STARTED');
        list($response, $statusCode, $httpHeader) = $this->fraudUpdateWithHttpInfo($id, $fraudMarkingActionRequest);
        self::$logger->info('CALL TO METHOD fraudUpdate ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation fraudUpdateWithHttpInfo
     *
     * Fraud Marking
     *
     * @param string $id Request ID of the transaction that you want to mark as suspect or remove from history. (required)
     * @param \CyberSource\Model\FraudMarkingActionRequest $fraudMarkingActionRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\RiskV1UpdatePost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function fraudUpdateWithHttpInfo($id, $fraudMarkingActionRequest)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $id when calling fraudUpdate");
            throw new \InvalidArgumentException('Missing the required parameter $id when calling fraudUpdate');
        }
        // verify the required parameter 'fraudMarkingActionRequest' is set
        if ($fraudMarkingActionRequest === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $fraudMarkingActionRequest when calling fraudUpdate");
            throw new \InvalidArgumentException('Missing the required parameter $fraudMarkingActionRequest when calling fraudUpdate');
        }
        // parse inputs
        $resourcePath = "/risk/v1/decisions/{id}/marking";
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
        if (isset($fraudMarkingActionRequest)) {
            $_tempBody = $fraudMarkingActionRequest;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\FraudMarkingActionRequest');

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

        self::$logger->debug("Return Type : \CyberSource\Model\RiskV1UpdatePost201Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\RiskV1UpdatePost201Response',
                '/risk/v1/decisions/{id}/marking'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\RiskV1UpdatePost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\RiskV1UpdatePost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\RiskV1DecisionsPost400Response1', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }
}