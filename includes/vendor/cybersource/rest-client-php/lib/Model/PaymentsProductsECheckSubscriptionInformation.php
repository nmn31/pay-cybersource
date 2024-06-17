<?php
/**
 * PaymentsProductsECheckSubscriptionInformation
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
 * PaymentsProductsECheckSubscriptionInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentsProductsECheckSubscriptionInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'paymentsProducts_eCheck_subscriptionInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enabled' => 'bool',
        'selfServiceability' => 'string',
        'mode' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enabled' => null,
        'selfServiceability' => null,
        'mode' => null
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
        'enabled' => 'enabled',
        'selfServiceability' => 'selfServiceability',
        'mode' => 'mode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'selfServiceability' => 'setSelfServiceability',
        'mode' => 'setMode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'selfServiceability' => 'getSelfServiceability',
        'mode' => 'getMode'
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

    const SELF_SERVICEABILITY_SELF_SERVICEABLE = 'SELF_SERVICEABLE';
    const SELF_SERVICEABILITY_NOT_SELF_SERVICEABLE = 'NOT_SELF_SERVICEABLE';
    const SELF_SERVICEABILITY_SELF_SERVICE_ONLY = 'SELF_SERVICE_ONLY';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSelfServiceabilityAllowableValues()
    {
        return [
            self::SELF_SERVICEABILITY_SELF_SERVICEABLE,
            self::SELF_SERVICEABILITY_NOT_SELF_SERVICEABLE,
            self::SELF_SERVICEABILITY_SELF_SERVICE_ONLY,
        ];
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['selfServiceability'] = isset($data['selfServiceability']) ? $data['selfServiceability'] : 'NOT_SELF_SERVICEABLE';
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getSelfServiceabilityAllowableValues();
        if (!in_array($this->container['selfServiceability'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'selfServiceability', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

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

        $allowed_values = $this->getSelfServiceabilityAllowableValues();
        if (!in_array($this->container['selfServiceability'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets enabled
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets selfServiceability
     * @return string
     */
    public function getSelfServiceability()
    {
        return $this->container['selfServiceability'];
    }

    /**
     * Sets selfServiceability
     * @param string $selfServiceability Indicates if the organization can enable this product using self service.
     * @return $this
     */
    public function setSelfServiceability($selfServiceability)
    {
        $allowed_values = $this->getSelfServiceabilityAllowableValues();
        if (!is_null($selfServiceability) && !in_array($selfServiceability, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'selfServiceability', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['selfServiceability'] = $selfServiceability;

        return $this;
    }

    /**
     * Gets mode
     * @return string[]
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     * @param string[] $mode Indicates what mode the product is expected to behave at boarding and transaction flows. Ex, Acquirer/Gateway/Other.
     * @return $this
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

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


