<?php
/**
 * TssV2TransactionsPost201ResponseEmbeddedPaymentInformation
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
 * TssV2TransactionsPost201ResponseEmbeddedPaymentInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TssV2TransactionsPost201ResponseEmbeddedPaymentInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tssV2TransactionsPost201Response__embedded_paymentInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'paymentType' => '\CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedPaymentInformationPaymentType',
        'customer' => '\CyberSource\Model\Ptsv2refreshpaymentstatusidPaymentInformationCustomer',
        'card' => '\CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedPaymentInformationCard',
        'bank' => '\CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedPaymentInformationBank'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'paymentType' => null,
        'customer' => null,
        'card' => null,
        'bank' => null
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
        'paymentType' => 'paymentType',
        'customer' => 'customer',
        'card' => 'card',
        'bank' => 'bank'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'paymentType' => 'setPaymentType',
        'customer' => 'setCustomer',
        'card' => 'setCard',
        'bank' => 'setBank'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'paymentType' => 'getPaymentType',
        'customer' => 'getCustomer',
        'card' => 'getCard',
        'bank' => 'getBank'
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
        $this->container['paymentType'] = isset($data['paymentType']) ? $data['paymentType'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['bank'] = isset($data['bank']) ? $data['bank'] : null;
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
     * Gets paymentType
     * @return \CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedPaymentInformationPaymentType
     */
    public function getPaymentType()
    {
        return $this->container['paymentType'];
    }

    /**
     * Sets paymentType
     * @param \CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedPaymentInformationPaymentType $paymentType
     * @return $this
     */
    public function setPaymentType($paymentType)
    {
        $this->container['paymentType'] = $paymentType;

        return $this;
    }

    /**
     * Gets customer
     * @return \CyberSource\Model\Ptsv2refreshpaymentstatusidPaymentInformationCustomer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param \CyberSource\Model\Ptsv2refreshpaymentstatusidPaymentInformationCustomer $customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets card
     * @return \CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedPaymentInformationCard
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     * @param \CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedPaymentInformationCard $card
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets bank
     * @return \CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedPaymentInformationBank
     */
    public function getBank()
    {
        return $this->container['bank'];
    }

    /**
     * Sets bank
     * @param \CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedPaymentInformationBank $bank
     * @return $this
     */
    public function setBank($bank)
    {
        $this->container['bank'] = $bank;

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


