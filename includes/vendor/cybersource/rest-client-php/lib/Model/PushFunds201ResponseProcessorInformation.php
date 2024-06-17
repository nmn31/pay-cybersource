<?php
/**
 * PushFunds201ResponseProcessorInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
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

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * PushFunds201ResponseProcessorInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PushFunds201ResponseProcessorInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'pushFunds201Response_processorInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transactionId' => 'int',
        'responseCode' => 'string',
        'approvalCode' => 'string',
        'systemTraceAuditNumber' => 'string',
        'responseCodeSource' => 'string',
        'retrievalReferenceNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transactionId' => null,
        'responseCode' => null,
        'approvalCode' => null,
        'systemTraceAuditNumber' => null,
        'responseCodeSource' => null,
        'retrievalReferenceNumber' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'transactionId' => 'transactionId',
        'responseCode' => 'responseCode',
        'approvalCode' => 'approvalCode',
        'systemTraceAuditNumber' => 'systemTraceAuditNumber',
        'responseCodeSource' => 'responseCodeSource',
        'retrievalReferenceNumber' => 'retrievalReferenceNumber'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'transactionId' => 'setTransactionId',
        'responseCode' => 'setResponseCode',
        'approvalCode' => 'setApprovalCode',
        'systemTraceAuditNumber' => 'setSystemTraceAuditNumber',
        'responseCodeSource' => 'setResponseCodeSource',
        'retrievalReferenceNumber' => 'setRetrievalReferenceNumber'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'transactionId' => 'getTransactionId',
        'responseCode' => 'getResponseCode',
        'approvalCode' => 'getApprovalCode',
        'systemTraceAuditNumber' => 'getSystemTraceAuditNumber',
        'responseCodeSource' => 'getResponseCodeSource',
        'retrievalReferenceNumber' => 'getRetrievalReferenceNumber'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['responseCode'] = isset($data['responseCode']) ? $data['responseCode'] : null;
        $this->container['approvalCode'] = isset($data['approvalCode']) ? $data['approvalCode'] : null;
        $this->container['systemTraceAuditNumber'] = isset($data['systemTraceAuditNumber']) ? $data['systemTraceAuditNumber'] : null;
        $this->container['responseCodeSource'] = isset($data['responseCodeSource']) ? $data['responseCodeSource'] : null;
        $this->container['retrievalReferenceNumber'] = isset($data['retrievalReferenceNumber']) ? $data['retrievalReferenceNumber'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets transactionId
     * @return int
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     * @param int $transactionId Network transaction identifier (TID). This value can be used to identify a specific transaction when you are discussing the transaction with your processor.
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets responseCode
     * @return string
     */
    public function getResponseCode()
    {
        return $this->container['responseCode'];
    }

    /**
     * Sets responseCode
     * @param string $responseCode Transaction status from the processor.
     * @return $this
     */
    public function setResponseCode($responseCode)
    {
        $this->container['responseCode'] = $responseCode;

        return $this;
    }

    /**
     * Gets approvalCode
     * @return string
     */
    public function getApprovalCode()
    {
        return $this->container['approvalCode'];
    }

    /**
     * Sets approvalCode
     * @param string $approvalCode Issuer-generated approval code for the transaction.
     * @return $this
     */
    public function setApprovalCode($approvalCode)
    {
        $this->container['approvalCode'] = $approvalCode;

        return $this;
    }

    /**
     * Gets systemTraceAuditNumber
     * @return string
     */
    public function getSystemTraceAuditNumber()
    {
        return $this->container['systemTraceAuditNumber'];
    }

    /**
     * Sets systemTraceAuditNumber
     * @param string $systemTraceAuditNumber System audit number. Returned by authorization and incremental authorization services.  Visa Platform Connect  System trace number that must be printed on the customer's receipt.
     * @return $this
     */
    public function setSystemTraceAuditNumber($systemTraceAuditNumber)
    {
        $this->container['systemTraceAuditNumber'] = $systemTraceAuditNumber;

        return $this;
    }

    /**
     * Gets responseCodeSource
     * @return string
     */
    public function getResponseCodeSource()
    {
        return $this->container['responseCodeSource'];
    }

    /**
     * Sets responseCodeSource
     * @param string $responseCodeSource Used by Visa only and contains the response source/reason code that identifies the source of the response decision.
     * @return $this
     */
    public function setResponseCodeSource($responseCodeSource)
    {
        $this->container['responseCodeSource'] = $responseCodeSource;

        return $this;
    }

    /**
     * Gets retrievalReferenceNumber
     * @return string
     */
    public function getRetrievalReferenceNumber()
    {
        return $this->container['retrievalReferenceNumber'];
    }

    /**
     * Sets retrievalReferenceNumber
     * @param string $retrievalReferenceNumber Unique reference number returned by the processor that identifies the transaction at the network.  Supported by Mastercard Send
     * @return $this
     */
    public function setRetrievalReferenceNumber($retrievalReferenceNumber)
    {
        $this->container['retrievalReferenceNumber'] = $retrievalReferenceNumber;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


