<?php
/**
 * Riskv1decisionsOrderInformationShipTo
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
 * Riskv1decisionsOrderInformationShipTo Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Riskv1decisionsOrderInformationShipTo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskv1decisions_orderInformation_shipTo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address1' => 'string',
        'address2' => 'string',
        'address3' => 'string',
        'administrativeArea' => 'string',
        'country' => 'string',
        'destinationTypes' => 'string',
        'locality' => 'string',
        'firstName' => 'string',
        'lastName' => 'string',
        'middleName' => 'string',
        'phoneNumber' => 'string',
        'postalCode' => 'string',
        'destinationCode' => 'int',
        'method' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address1' => null,
        'address2' => null,
        'address3' => null,
        'administrativeArea' => null,
        'country' => null,
        'destinationTypes' => null,
        'locality' => null,
        'firstName' => null,
        'lastName' => null,
        'middleName' => null,
        'phoneNumber' => null,
        'postalCode' => null,
        'destinationCode' => null,
        'method' => null
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
        'administrativeArea' => 'administrativeArea',
        'country' => 'country',
        'destinationTypes' => 'destinationTypes',
        'locality' => 'locality',
        'firstName' => 'firstName',
        'lastName' => 'lastName',
        'middleName' => 'middleName',
        'phoneNumber' => 'phoneNumber',
        'postalCode' => 'postalCode',
        'destinationCode' => 'destinationCode',
        'method' => 'method'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'address3' => 'setAddress3',
        'administrativeArea' => 'setAdministrativeArea',
        'country' => 'setCountry',
        'destinationTypes' => 'setDestinationTypes',
        'locality' => 'setLocality',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'middleName' => 'setMiddleName',
        'phoneNumber' => 'setPhoneNumber',
        'postalCode' => 'setPostalCode',
        'destinationCode' => 'setDestinationCode',
        'method' => 'setMethod'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'address3' => 'getAddress3',
        'administrativeArea' => 'getAdministrativeArea',
        'country' => 'getCountry',
        'destinationTypes' => 'getDestinationTypes',
        'locality' => 'getLocality',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'middleName' => 'getMiddleName',
        'phoneNumber' => 'getPhoneNumber',
        'postalCode' => 'getPostalCode',
        'destinationCode' => 'getDestinationCode',
        'method' => 'getMethod'
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
        $this->container['administrativeArea'] = isset($data['administrativeArea']) ? $data['administrativeArea'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['destinationTypes'] = isset($data['destinationTypes']) ? $data['destinationTypes'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['middleName'] = isset($data['middleName']) ? $data['middleName'] : null;
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
        $this->container['destinationCode'] = isset($data['destinationCode']) ? $data['destinationCode'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
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
     * @return string
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     * @param string $address1 First line of the shipping address.  Required field for authorization if any shipping address information is included in the request; otherwise, optional.  #### Tax Calculation Optional field for U.S. and Canadian taxes. Not applicable to international and value added taxes. Billing address objects will be used to determine the cardholder's location when shipTo objects are not present.
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
     * @param string $address2 Second line of the shipping address.  Optional field.  #### Tax Calculation Optional field for U.S. and Canadian taxes. Not applicable to international and value added taxes. Billing address objects will be used to determine the cardholder's location when shipTo objects are not present.
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
     * @param string $address3 Third line of the shipping address.  #### Tax Calculation Optional field for U.S. and Canadian taxes. Not applicable to international and value added taxes. Billing address objects will be used to determine the cardholder's location when shipTo objects are not present.
     * @return $this
     */
    public function setAddress3($address3)
    {
        $this->container['address3'] = $address3;

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
     * @param string $administrativeArea State or province of the shipping address. Use the [State, Province, and Territory Codes for the United States and Canada](https://developer.cybersource.com/library/documentation/sbc/quickref/states_and_provinces.pdf) (maximum length: 2)   Required field for authorization if any shipping address information is included in the request and shipping to the U.S. or Canada; otherwise, optional.  #### Tax Calculation Optional field for U.S. and Canadian taxes. Not applicable to international and value added taxes. Billing address objects will be used to determine the cardholder's location when shipTo objects are not present.
     * @return $this
     */
    public function setAdministrativeArea($administrativeArea)
    {
        $this->container['administrativeArea'] = $administrativeArea;

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
     * @param string $country Country of the shipping address. Use the two-character [ISO Standard Country Codes.](http://apps.cybersource.com/library/documentation/sbc/quickref/countries_alpha_list.pdf)  Required field for authorization if any shipping address information is included in the request; otherwise, optional.  #### Tax Calculation Optional field for U.S., Canadian, international tax, and value added taxes. Billing address objects will be used to determine the cardholder's location when shipTo objects are not present.
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets destinationTypes
     * @return string
     */
    public function getDestinationTypes()
    {
        return $this->container['destinationTypes'];
    }

    /**
     * Sets destinationTypes
     * @param string $destinationTypes Shipping destination of item. Example: Commercial, Residential, Store
     * @return $this
     */
    public function setDestinationTypes($destinationTypes)
    {
        $this->container['destinationTypes'] = $destinationTypes;

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
     * @param string $locality City of the shipping address.  Required field for authorization if any shipping address information is included in the request and shipping to the U.S. or Canada; otherwise, optional.  #### Tax Calculation Optional field for U.S. and Canadian taxes. Not applicable to international and value added taxes. Billing address objects will be used to determine the cardholder's location when shipTo objects are not present.
     * @return $this
     */
    public function setLocality($locality)
    {
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets firstName
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     * @param string $firstName First name of the recipient.  #### Litle Maximum length: 25  #### All other processors Maximum length: 60  Optional field.
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     * @param string $lastName Last name of the recipient.  #### Litle Maximum length: 25  #### All other processors Maximum length: 60  Optional field.
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets middleName
     * @return string
     */
    public function getMiddleName()
    {
        return $this->container['middleName'];
    }

    /**
     * Sets middleName
     * @param string $middleName Middle name of the recipient.  #### Litle Maximum length: 25  #### All other processors Maximum length: 60  Optional field.
     * @return $this
     */
    public function setMiddleName($middleName)
    {
        $this->container['middleName'] = $middleName;

        return $this;
    }

    /**
     * Gets phoneNumber
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
     * Sets phoneNumber
     * @param string $phoneNumber Phone number associated with the shipping address.
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->container['phoneNumber'] = $phoneNumber;

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
     * @param string $postalCode Postal code for the shipping address. The postal code must consist of 5 to 9 digits.  Required field for authorization if any shipping address information is included in the request and shipping to the U.S. or Canada; otherwise, optional.  When the billing country is the U.S., the 9-digit postal code must follow this format: [5 digits][dash][4 digits]  Example 12345-6789  When the billing country is Canada, the 6-digit postal code must follow this format: [alpha][numeric][alpha][space][numeric][alpha][numeric]  Example A1B 2C3  #### American Express Direct Before sending the postal code to the processor, all nonalphanumeric characters are removed and, if the remaining value is longer than nine characters, the value is truncated starting from the right side. #### Tax Calculation Optional field for U.S. and Canadian taxes. Not applicable to international and value added taxes. Billing address objects will be used to determine the cardholder's location when shipTo objects are not present.
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->container['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * Gets destinationCode
     * @return int
     */
    public function getDestinationCode()
    {
        return $this->container['destinationCode'];
    }

    /**
     * Sets destinationCode
     * @param int $destinationCode Indicates destination chosen for the transaction. Possible values: - 01- Ship to cardholder billing address - 02- Ship to another verified address on file with merchant - 03- Ship to address that is different than billing address - 04- Ship to store (store address should be populated on request) - 05- Digital goods - 06- Travel and event tickets, not shipped - 07- Other
     * @return $this
     */
    public function setDestinationCode($destinationCode)
    {
        $this->container['destinationCode'] = $destinationCode;

        return $this;
    }

    /**
     * Gets method
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     * @param string $method Shipping method for the product. Possible values: - lowcost: Lowest-cost service - sameday: Courier or same-day service - oneday: Next-day or overnight service - twoday: Two-day service - threeday: Three-day service - pickup: Store pick-up - other: Other shipping method - none: No shipping method because product is a service or subscription Required for American Express SafeKey (U.S.).
     * @return $this
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

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


