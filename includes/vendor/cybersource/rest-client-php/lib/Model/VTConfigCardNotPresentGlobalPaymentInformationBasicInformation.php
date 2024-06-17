<?php
/**
 * VTConfigCardNotPresentGlobalPaymentInformationBasicInformation
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
 * VTConfigCardNotPresentGlobalPaymentInformationBasicInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class VTConfigCardNotPresentGlobalPaymentInformationBasicInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'VTConfig_cardNotPresent_globalPaymentInformation_basicInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'defaultStandardEntryClassCode' => 'string',
        'defaultCountryCode' => 'string',
        'defaultCurrencyCode' => 'string',
        'defaultTransactionType' => 'string',
        'defaultPaymentType' => 'string',
        'defaultTransactionSource' => 'string',
        'displayRetail' => 'bool',
        'displayMoto' => 'bool',
        'displayInternet' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'defaultStandardEntryClassCode' => null,
        'defaultCountryCode' => null,
        'defaultCurrencyCode' => null,
        'defaultTransactionType' => null,
        'defaultPaymentType' => null,
        'defaultTransactionSource' => null,
        'displayRetail' => null,
        'displayMoto' => null,
        'displayInternet' => null
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
        'defaultStandardEntryClassCode' => 'defaultStandardEntryClassCode',
        'defaultCountryCode' => 'defaultCountryCode',
        'defaultCurrencyCode' => 'defaultCurrencyCode',
        'defaultTransactionType' => 'defaultTransactionType',
        'defaultPaymentType' => 'defaultPaymentType',
        'defaultTransactionSource' => 'defaultTransactionSource',
        'displayRetail' => 'displayRetail',
        'displayMoto' => 'displayMoto',
        'displayInternet' => 'displayInternet'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'defaultStandardEntryClassCode' => 'setDefaultStandardEntryClassCode',
        'defaultCountryCode' => 'setDefaultCountryCode',
        'defaultCurrencyCode' => 'setDefaultCurrencyCode',
        'defaultTransactionType' => 'setDefaultTransactionType',
        'defaultPaymentType' => 'setDefaultPaymentType',
        'defaultTransactionSource' => 'setDefaultTransactionSource',
        'displayRetail' => 'setDisplayRetail',
        'displayMoto' => 'setDisplayMoto',
        'displayInternet' => 'setDisplayInternet'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'defaultStandardEntryClassCode' => 'getDefaultStandardEntryClassCode',
        'defaultCountryCode' => 'getDefaultCountryCode',
        'defaultCurrencyCode' => 'getDefaultCurrencyCode',
        'defaultTransactionType' => 'getDefaultTransactionType',
        'defaultPaymentType' => 'getDefaultPaymentType',
        'defaultTransactionSource' => 'getDefaultTransactionSource',
        'displayRetail' => 'getDisplayRetail',
        'displayMoto' => 'getDisplayMoto',
        'displayInternet' => 'getDisplayInternet'
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

    const DEFAULT_TRANSACTION_TYPE_AUTHORIZATION = 'AUTHORIZATION';
    const DEFAULT_TRANSACTION_TYPE_SALE = 'SALE';
    const DEFAULT_PAYMENT_TYPE_CREDIT_CARD = 'CREDIT_CARD';
    const DEFAULT_PAYMENT_TYPE_ECHECK = 'ECHECK';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDefaultTransactionTypeAllowableValues()
    {
        return [
            self::DEFAULT_TRANSACTION_TYPE_AUTHORIZATION,
            self::DEFAULT_TRANSACTION_TYPE_SALE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDefaultPaymentTypeAllowableValues()
    {
        return [
            self::DEFAULT_PAYMENT_TYPE_CREDIT_CARD,
            self::DEFAULT_PAYMENT_TYPE_ECHECK,
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
        $this->container['defaultStandardEntryClassCode'] = isset($data['defaultStandardEntryClassCode']) ? $data['defaultStandardEntryClassCode'] : null;
        $this->container['defaultCountryCode'] = isset($data['defaultCountryCode']) ? $data['defaultCountryCode'] : null;
        $this->container['defaultCurrencyCode'] = isset($data['defaultCurrencyCode']) ? $data['defaultCurrencyCode'] : null;
        $this->container['defaultTransactionType'] = isset($data['defaultTransactionType']) ? $data['defaultTransactionType'] : null;
        $this->container['defaultPaymentType'] = isset($data['defaultPaymentType']) ? $data['defaultPaymentType'] : null;
        $this->container['defaultTransactionSource'] = isset($data['defaultTransactionSource']) ? $data['defaultTransactionSource'] : null;
        $this->container['displayRetail'] = isset($data['displayRetail']) ? $data['displayRetail'] : null;
        $this->container['displayMoto'] = isset($data['displayMoto']) ? $data['displayMoto'] : null;
        $this->container['displayInternet'] = isset($data['displayInternet']) ? $data['displayInternet'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getDefaultTransactionTypeAllowableValues();
        if (!in_array($this->container['defaultTransactionType'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'defaultTransactionType', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getDefaultPaymentTypeAllowableValues();
        if (!in_array($this->container['defaultPaymentType'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'defaultPaymentType', must be one of '%s'",
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

        $allowed_values = $this->getDefaultTransactionTypeAllowableValues();
        if (!in_array($this->container['defaultTransactionType'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getDefaultPaymentTypeAllowableValues();
        if (!in_array($this->container['defaultPaymentType'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets defaultStandardEntryClassCode
     * @return string
     */
    public function getDefaultStandardEntryClassCode()
    {
        return $this->container['defaultStandardEntryClassCode'];
    }

    /**
     * Sets defaultStandardEntryClassCode
     * @param string $defaultStandardEntryClassCode
     * @return $this
     */
    public function setDefaultStandardEntryClassCode($defaultStandardEntryClassCode)
    {
        $this->container['defaultStandardEntryClassCode'] = $defaultStandardEntryClassCode;

        return $this;
    }

    /**
     * Gets defaultCountryCode
     * @return string
     */
    public function getDefaultCountryCode()
    {
        return $this->container['defaultCountryCode'];
    }

    /**
     * Sets defaultCountryCode
     * @param string $defaultCountryCode ISO 4217 format
     * @return $this
     */
    public function setDefaultCountryCode($defaultCountryCode)
    {
        $this->container['defaultCountryCode'] = $defaultCountryCode;

        return $this;
    }

    /**
     * Gets defaultCurrencyCode
     * @return string
     */
    public function getDefaultCurrencyCode()
    {
        return $this->container['defaultCurrencyCode'];
    }

    /**
     * Sets defaultCurrencyCode
     * @param string $defaultCurrencyCode Three-character [ISO Standard Currency Codes.](http://apps.cybersource.com/library/documentation/sbc/quickref/currencies.pdf)
     * @return $this
     */
    public function setDefaultCurrencyCode($defaultCurrencyCode)
    {
        $this->container['defaultCurrencyCode'] = $defaultCurrencyCode;

        return $this;
    }

    /**
     * Gets defaultTransactionType
     * @return string
     */
    public function getDefaultTransactionType()
    {
        return $this->container['defaultTransactionType'];
    }

    /**
     * Sets defaultTransactionType
     * @param string $defaultTransactionType
     * @return $this
     */
    public function setDefaultTransactionType($defaultTransactionType)
    {
        $allowed_values = $this->getDefaultTransactionTypeAllowableValues();
        if (!is_null($defaultTransactionType) && !in_array($defaultTransactionType, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'defaultTransactionType', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['defaultTransactionType'] = $defaultTransactionType;

        return $this;
    }

    /**
     * Gets defaultPaymentType
     * @return string
     */
    public function getDefaultPaymentType()
    {
        return $this->container['defaultPaymentType'];
    }

    /**
     * Sets defaultPaymentType
     * @param string $defaultPaymentType
     * @return $this
     */
    public function setDefaultPaymentType($defaultPaymentType)
    {
        $allowed_values = $this->getDefaultPaymentTypeAllowableValues();
        if (!is_null($defaultPaymentType) && !in_array($defaultPaymentType, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'defaultPaymentType', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['defaultPaymentType'] = $defaultPaymentType;

        return $this;
    }

    /**
     * Gets defaultTransactionSource
     * @return string
     */
    public function getDefaultTransactionSource()
    {
        return $this->container['defaultTransactionSource'];
    }

    /**
     * Sets defaultTransactionSource
     * @param string $defaultTransactionSource
     * @return $this
     */
    public function setDefaultTransactionSource($defaultTransactionSource)
    {
        $this->container['defaultTransactionSource'] = $defaultTransactionSource;

        return $this;
    }

    /**
     * Gets displayRetail
     * @return bool
     */
    public function getDisplayRetail()
    {
        return $this->container['displayRetail'];
    }

    /**
     * Sets displayRetail
     * @param bool $displayRetail
     * @return $this
     */
    public function setDisplayRetail($displayRetail)
    {
        $this->container['displayRetail'] = $displayRetail;

        return $this;
    }

    /**
     * Gets displayMoto
     * @return bool
     */
    public function getDisplayMoto()
    {
        return $this->container['displayMoto'];
    }

    /**
     * Sets displayMoto
     * @param bool $displayMoto
     * @return $this
     */
    public function setDisplayMoto($displayMoto)
    {
        $this->container['displayMoto'] = $displayMoto;

        return $this;
    }

    /**
     * Gets displayInternet
     * @return bool
     */
    public function getDisplayInternet()
    {
        return $this->container['displayInternet'];
    }

    /**
     * Sets displayInternet
     * @param bool $displayInternet
     * @return $this
     */
    public function setDisplayInternet($displayInternet)
    {
        $this->container['displayInternet'] = $displayInternet;

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


