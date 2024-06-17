<?php
/**
 * Ptsv2paymentsidcapturesAggregatorInformationSubMerchant
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
 * Ptsv2paymentsidcapturesAggregatorInformationSubMerchant Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsidcapturesAggregatorInformationSubMerchant implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2paymentsidcaptures_aggregatorInformation_subMerchant';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'address1' => 'string',
        'locality' => 'string',
        'administrativeArea' => 'string',
        'postalCode' => 'string',
        'country' => 'string',
        'email' => 'string',
        'phoneNumber' => 'string',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'address1' => null,
        'locality' => null,
        'administrativeArea' => null,
        'postalCode' => null,
        'country' => null,
        'email' => null,
        'phoneNumber' => null,
        'id' => null
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
        'name' => 'name',
        'address1' => 'address1',
        'locality' => 'locality',
        'administrativeArea' => 'administrativeArea',
        'postalCode' => 'postalCode',
        'country' => 'country',
        'email' => 'email',
        'phoneNumber' => 'phoneNumber',
        'id' => 'id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'address1' => 'setAddress1',
        'locality' => 'setLocality',
        'administrativeArea' => 'setAdministrativeArea',
        'postalCode' => 'setPostalCode',
        'country' => 'setCountry',
        'email' => 'setEmail',
        'phoneNumber' => 'setPhoneNumber',
        'id' => 'setId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'address1' => 'getAddress1',
        'locality' => 'getLocality',
        'administrativeArea' => 'getAdministrativeArea',
        'postalCode' => 'getPostalCode',
        'country' => 'getCountry',
        'email' => 'getEmail',
        'phoneNumber' => 'getPhoneNumber',
        'id' => 'getId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['administrativeArea'] = isset($data['administrativeArea']) ? $data['administrativeArea'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Sub-merchant's business name.  #### American Express Direct The maximum length of the sub-merchant name depends on the length of the aggregator name. The combined length for both values must not exceed 36 characters.  #### CyberSource through VisaNet With American Express, the maximum length of the sub-merchant name depends on the length of the aggregator name. The combined length for both values must not exceed 36 characters. The value for this field does not map to the TC 33 capture file5.  #### FDC Compass This value must consist of uppercase characters.  #### FDC Nashville Global With Mastercard, the maximum length of the sub-merchant name depends on the length of the aggregator name: - If aggregator name length is 1 through 3, maximum sub-merchant name length is 21. - If aggregator name length is 4 through 7, maximum sub-merchant name length is 17. - If aggregator name length is 8 through 12, maximum sub-merchant name length is 12.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
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
     * @param string $address1 First line of the sub-merchant's street address.  For processor-specific details, see `submerchant_street` field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  #### CyberSource through VisaNet The value for this field does not map to the TC 33 capture file5.  #### FDC Compass This value must consist of uppercase characters.
     * @return $this
     */
    public function setAddress1($address1)
    {
        $this->container['address1'] = $address1;

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
     * @param string $locality Sub-merchant's city.  For processor-specific details, see `submerchant_city` request field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  #### CyberSource through VisaNet The value for this field does not map to the TC 33 capture file5.  #### FDC Compass This value must consist of uppercase characters.
     * @return $this
     */
    public function setLocality($locality)
    {
        $this->container['locality'] = $locality;

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
     * @param string $administrativeArea Sub-merchant's state or province.  For possible values and also aggregator support, see `submerchant_state` request field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  #### CyberSource through VisaNet The value for this field does not map to the TC 33 capture file5.  #### FDC Compass This value must consist of uppercase characters.
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
     * @param string $postalCode Partial postal code for the sub-merchant's address.  For processor-specific details, see `submerchant_postal_code` request field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  #### CyberSource through VisaNet The value for this field does not map to the TC 33 capture file5.  #### FDC Compass This value must consist of uppercase characters.
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->container['postalCode'] = $postalCode;

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
     * @param string $country Sub-merchant's country. Use the [ISO Standard Country Codes](https://developer.cybersource.com/library/documentation/sbc/quickref/countries_alpha_list.pdf).  #### CyberSource through VisaNet The value for this field does not map to the TC 33 capture file.  #### FDC Compass This value must consist of uppercase characters.  For details, see the `submerchant_country` request-level field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email Sub-merchant's email address.  **Maximum length for processors**   - American Express Direct: 40  - CyberSource through VisaNet: 40  - FDC Compass: 40  - FDC Nashville Global: 19  #### CyberSource through VisaNet With American Express, the value for this field corresponds to the following data in the TC 33 capture file: - Record: CP01 TCRB - Position: 25-64 - Field: American Express Seller E-mail Address  **Note** The TC 33 Capture file contains information about the purchases and refunds that a merchant submits to CyberSource. CyberSource through VisaNet creates the TC 33 Capture file at the end of the day and sends it to the merchant's acquirer, who uses this information to facilitate end-of-day clearing processing with payment card companies.
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * @param string $phoneNumber Sub-merchant's telephone number.  **Maximum length for procesors**   - American Express Direct: 20  - CyberSource through VisaNet: 20  - FDC Compass: 13  - FDC Nashville Global: 10  #### CyberSource through VisaNet With American Express, the value for this field corresponds to the following data in the TC 33 capture file5: - Record: CP01 TCRB - Position: 5-24 - Field: American Express Seller Telephone Number  **FDC Compass**\\ This value must consist of uppercase characters. Use one of these recommended formats:\\ `NNN-NNN-NNNN`\\ `NNN-AAAAAAA`
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->container['phoneNumber'] = $phoneNumber;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id The ID you assigned to your sub-merchant. CyberSource through VisaNet: For American Express transaction, the value for this field corresponds to the following data in the TC 33 capture file: - Record: CP01 TCRB - Position: 65-84 - Field: American Express Seller ID For  Mastercard transactions, the value for this field corresponds to the following data in the TC 33 capture file: - Record: CP01 TCR6 - Position: 117-131 - Field: Sub-Merchant ID FDC Compass: This value must consist of uppercase characters.  American Express Direct: String (20) CyberSource through VisaNet with American Express: String (20) CyberSource through VisaNet with Visa,Mastercard and Discover: String (15) FDC Compass: String (20) FDC Nashville Global: String (14)
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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


