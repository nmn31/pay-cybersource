<?php
/**
 * RiskV1AddressVerificationsPost201ResponseAddressVerificationInformationStandardAddress
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
 * RiskV1AddressVerificationsPost201ResponseAddressVerificationInformationStandardAddress Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RiskV1AddressVerificationsPost201ResponseAddressVerificationInformationStandardAddress implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskV1AddressVerificationsPost201Response_addressVerificationInformation_standardAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address1' => '\CyberSource\Model\RiskV1AddressVerificationsPost201ResponseAddressVerificationInformationStandardAddressAddress1',
        'address2' => 'string',
        'address3' => 'string',
        'address4' => 'string',
        'locality' => 'string',
        'county' => 'string',
        'country' => 'string',
        'csz' => 'string',
        'isoCountry' => 'string',
        'administrativeArea' => 'string',
        'postalCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address1' => null,
        'address2' => null,
        'address3' => null,
        'address4' => null,
        'locality' => null,
        'county' => null,
        'country' => null,
        'csz' => null,
        'isoCountry' => null,
        'administrativeArea' => null,
        'postalCode' => null
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
        'address1' => 'address1',
        'address2' => 'address2',
        'address3' => 'address3',
        'address4' => 'address4',
        'locality' => 'locality',
        'county' => 'county',
        'country' => 'country',
        'csz' => 'csz',
        'isoCountry' => 'isoCountry',
        'administrativeArea' => 'administrativeArea',
        'postalCode' => 'postalCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'address3' => 'setAddress3',
        'address4' => 'setAddress4',
        'locality' => 'setLocality',
        'county' => 'setCounty',
        'country' => 'setCountry',
        'csz' => 'setCsz',
        'isoCountry' => 'setIsoCountry',
        'administrativeArea' => 'setAdministrativeArea',
        'postalCode' => 'setPostalCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'address3' => 'getAddress3',
        'address4' => 'getAddress4',
        'locality' => 'getLocality',
        'county' => 'getCounty',
        'country' => 'getCountry',
        'csz' => 'getCsz',
        'isoCountry' => 'getIsoCountry',
        'administrativeArea' => 'getAdministrativeArea',
        'postalCode' => 'getPostalCode'
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
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['address2'] = isset($data['address2']) ? $data['address2'] : null;
        $this->container['address3'] = isset($data['address3']) ? $data['address3'] : null;
        $this->container['address4'] = isset($data['address4']) ? $data['address4'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['county'] = isset($data['county']) ? $data['county'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['csz'] = isset($data['csz']) ? $data['csz'] : null;
        $this->container['isoCountry'] = isset($data['isoCountry']) ? $data['isoCountry'] : null;
        $this->container['administrativeArea'] = isset($data['administrativeArea']) ? $data['administrativeArea'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
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
     * Gets address1
     * @return \CyberSource\Model\RiskV1AddressVerificationsPost201ResponseAddressVerificationInformationStandardAddressAddress1
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     * @param \CyberSource\Model\RiskV1AddressVerificationsPost201ResponseAddressVerificationInformationStandardAddressAddress1 $address1
     * @return $this
     */
    public function setAddress1($address1)
    {
        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     * @return string
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     * @param string $address2 Second line of the standardized address.
     * @return $this
     */
    public function setAddress2($address2)
    {
        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets address3
     * @return string
     */
    public function getAddress3()
    {
        return $this->container['address3'];
    }

    /**
     * Sets address3
     * @param string $address3 Third line of the standardized address.
     * @return $this
     */
    public function setAddress3($address3)
    {
        $this->container['address3'] = $address3;

        return $this;
    }

    /**
     * Gets address4
     * @return string
     */
    public function getAddress4()
    {
        return $this->container['address4'];
    }

    /**
     * Sets address4
     * @param string $address4 Fourth line of the standardized address.
     * @return $this
     */
    public function setAddress4($address4)
    {
        $this->container['address4'] = $address4;

        return $this;
    }

    /**
     * Gets locality
     * @return string
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     * @param string $locality Standardized city name.
     * @return $this
     */
    public function setLocality($locality)
    {
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets county
     * @return string
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     * @param string $county U.S. county if available.
     * @return $this
     */
    public function setCounty($county)
    {
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country Standardized country name.
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets csz
     * @return string
     */
    public function getCsz()
    {
        return $this->container['csz'];
    }

    /**
     * Sets csz
     * @param string $csz Standardized city, state or province, and ZIP +4 code or postal code line.
     * @return $this
     */
    public function setCsz($csz)
    {
        $this->container['csz'] = $csz;

        return $this;
    }

    /**
     * Gets isoCountry
     * @return string
     */
    public function getIsoCountry()
    {
        return $this->container['isoCountry'];
    }

    /**
     * Sets isoCountry
     * @param string $isoCountry Standardized two-character ISO country code.
     * @return $this
     */
    public function setIsoCountry($isoCountry)
    {
        $this->container['isoCountry'] = $isoCountry;

        return $this;
    }

    /**
     * Gets administrativeArea
     * @return string
     */
    public function getAdministrativeArea()
    {
        return $this->container['administrativeArea'];
    }

    /**
     * Sets administrativeArea
     * @param string $administrativeArea U.S.P.S. standardized state or province abbreviation.
     * @return $this
     */
    public function setAdministrativeArea($administrativeArea)
    {
        $this->container['administrativeArea'] = $administrativeArea;

        return $this;
    }

    /**
     * Gets postalCode
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     * @param string $postalCode Standardized U.S. ZIP + 4 postal code.
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->container['postalCode'] = $postalCode;

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


