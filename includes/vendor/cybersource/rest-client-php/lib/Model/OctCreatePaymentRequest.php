<?php
/**
 * OctCreatePaymentRequest
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
 * OctCreatePaymentRequest Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OctCreatePaymentRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'octCreatePaymentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'clientReferenceInformation' => '\CyberSource\Model\Ptsv2payoutsClientReferenceInformation',
        'orderInformation' => '\CyberSource\Model\Ptsv2payoutsOrderInformation',
        'merchantInformation' => '\CyberSource\Model\Ptsv2payoutsMerchantInformation',
        'recipientInformation' => '\CyberSource\Model\Ptsv2payoutsRecipientInformation',
        'senderInformation' => '\CyberSource\Model\Ptsv2payoutsSenderInformation',
        'processingInformation' => '\CyberSource\Model\Ptsv2payoutsProcessingInformation',
        'paymentInformation' => '\CyberSource\Model\Ptsv2payoutsPaymentInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'clientReferenceInformation' => null,
        'orderInformation' => null,
        'merchantInformation' => null,
        'recipientInformation' => null,
        'senderInformation' => null,
        'processingInformation' => null,
        'paymentInformation' => null
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
        'clientReferenceInformation' => 'clientReferenceInformation',
        'orderInformation' => 'orderInformation',
        'merchantInformation' => 'merchantInformation',
        'recipientInformation' => 'recipientInformation',
        'senderInformation' => 'senderInformation',
        'processingInformation' => 'processingInformation',
        'paymentInformation' => 'paymentInformation'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'clientReferenceInformation' => 'setClientReferenceInformation',
        'orderInformation' => 'setOrderInformation',
        'merchantInformation' => 'setMerchantInformation',
        'recipientInformation' => 'setRecipientInformation',
        'senderInformation' => 'setSenderInformation',
        'processingInformation' => 'setProcessingInformation',
        'paymentInformation' => 'setPaymentInformation'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'clientReferenceInformation' => 'getClientReferenceInformation',
        'orderInformation' => 'getOrderInformation',
        'merchantInformation' => 'getMerchantInformation',
        'recipientInformation' => 'getRecipientInformation',
        'senderInformation' => 'getSenderInformation',
        'processingInformation' => 'getProcessingInformation',
        'paymentInformation' => 'getPaymentInformation'
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
        $this->container['clientReferenceInformation'] = isset($data['clientReferenceInformation']) ? $data['clientReferenceInformation'] : null;
        $this->container['orderInformation'] = isset($data['orderInformation']) ? $data['orderInformation'] : null;
        $this->container['merchantInformation'] = isset($data['merchantInformation']) ? $data['merchantInformation'] : null;
        $this->container['recipientInformation'] = isset($data['recipientInformation']) ? $data['recipientInformation'] : null;
        $this->container['senderInformation'] = isset($data['senderInformation']) ? $data['senderInformation'] : null;
        $this->container['processingInformation'] = isset($data['processingInformation']) ? $data['processingInformation'] : null;
        $this->container['paymentInformation'] = isset($data['paymentInformation']) ? $data['paymentInformation'] : null;
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
     * Gets clientReferenceInformation
     * @return \CyberSource\Model\Ptsv2payoutsClientReferenceInformation
     */
    public function getClientReferenceInformation()
    {
        return $this->container['clientReferenceInformation'];
    }

    /**
     * Sets clientReferenceInformation
     * @param \CyberSource\Model\Ptsv2payoutsClientReferenceInformation $clientReferenceInformation
     * @return $this
     */
    public function setClientReferenceInformation($clientReferenceInformation)
    {
        $this->container['clientReferenceInformation'] = $clientReferenceInformation;

        return $this;
    }

    /**
     * Gets orderInformation
     * @return \CyberSource\Model\Ptsv2payoutsOrderInformation
     */
    public function getOrderInformation()
    {
        return $this->container['orderInformation'];
    }

    /**
     * Sets orderInformation
     * @param \CyberSource\Model\Ptsv2payoutsOrderInformation $orderInformation
     * @return $this
     */
    public function setOrderInformation($orderInformation)
    {
        $this->container['orderInformation'] = $orderInformation;

        return $this;
    }

    /**
     * Gets merchantInformation
     * @return \CyberSource\Model\Ptsv2payoutsMerchantInformation
     */
    public function getMerchantInformation()
    {
        return $this->container['merchantInformation'];
    }

    /**
     * Sets merchantInformation
     * @param \CyberSource\Model\Ptsv2payoutsMerchantInformation $merchantInformation
     * @return $this
     */
    public function setMerchantInformation($merchantInformation)
    {
        $this->container['merchantInformation'] = $merchantInformation;

        return $this;
    }

    /**
     * Gets recipientInformation
     * @return \CyberSource\Model\Ptsv2payoutsRecipientInformation
     */
    public function getRecipientInformation()
    {
        return $this->container['recipientInformation'];
    }

    /**
     * Sets recipientInformation
     * @param \CyberSource\Model\Ptsv2payoutsRecipientInformation $recipientInformation
     * @return $this
     */
    public function setRecipientInformation($recipientInformation)
    {
        $this->container['recipientInformation'] = $recipientInformation;

        return $this;
    }

    /**
     * Gets senderInformation
     * @return \CyberSource\Model\Ptsv2payoutsSenderInformation
     */
    public function getSenderInformation()
    {
        return $this->container['senderInformation'];
    }

    /**
     * Sets senderInformation
     * @param \CyberSource\Model\Ptsv2payoutsSenderInformation $senderInformation
     * @return $this
     */
    public function setSenderInformation($senderInformation)
    {
        $this->container['senderInformation'] = $senderInformation;

        return $this;
    }

    /**
     * Gets processingInformation
     * @return \CyberSource\Model\Ptsv2payoutsProcessingInformation
     */
    public function getProcessingInformation()
    {
        return $this->container['processingInformation'];
    }

    /**
     * Sets processingInformation
     * @param \CyberSource\Model\Ptsv2payoutsProcessingInformation $processingInformation
     * @return $this
     */
    public function setProcessingInformation($processingInformation)
    {
        $this->container['processingInformation'] = $processingInformation;

        return $this;
    }

    /**
     * Gets paymentInformation
     * @return \CyberSource\Model\Ptsv2payoutsPaymentInformation
     */
    public function getPaymentInformation()
    {
        return $this->container['paymentInformation'];
    }

    /**
     * Sets paymentInformation
     * @param \CyberSource\Model\Ptsv2payoutsPaymentInformation $paymentInformation
     * @return $this
     */
    public function setPaymentInformation($paymentInformation)
    {
        $this->container['paymentInformation'] = $paymentInformation;

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

