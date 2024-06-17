<?php
/**
 * PtsV2PaymentsPost201ResponseProcessorInformationMerchantAdvice
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
 * PtsV2PaymentsPost201ResponseProcessorInformationMerchantAdvice Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsPost201ResponseProcessorInformationMerchantAdvice implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsPost201Response_processorInformation_merchantAdvice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'codeRaw' => 'string',
        'nameMatch' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'codeRaw' => null,
        'nameMatch' => null
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
        'code' => 'code',
        'codeRaw' => 'codeRaw',
        'nameMatch' => 'nameMatch'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'codeRaw' => 'setCodeRaw',
        'nameMatch' => 'setNameMatch'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'codeRaw' => 'getCodeRaw',
        'nameMatch' => 'getNameMatch'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['codeRaw'] = isset($data['codeRaw']) ? $data['codeRaw'] : null;
        $this->container['nameMatch'] = isset($data['nameMatch']) ? $data['nameMatch'] : null;
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
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code - Merchant should update their retry logic to ensure retry is not attempted for the cards for which Issuer won't approve the transactions and where the retry is allowed. - Card Processing Associations provides this data which is being passed through in the following data element irrespective of the Card Associations.   Usage of this data must be always associated with the Card Associations card types for merchant processing retry logic. - In additions to the Merchant Advice code, Associations also provides the decline response codes which provides the reason for decline.  Association response code will be a pass-through value.  #### Processors supported:   - HSBC   - Barclays   - FDC Nash   - FDI Global   - Elavon America   - VPC   - Rede   - Payment tech Salem   #### Possible values: | Card Type   | Advice Code   |  Description                                | | ----------- | ------------- | ------------------------------------------- | | VISA        | 1             | Issuer never approves                       | | VISA        | 2             | Issuer cannot approve at this time          | | VISA        | 3             | Data quality/revalidate payment information | | MasterCard  | 01            | New account information available           | | MasterCard  | 02            | Try Again Later                             | | MasterCard  | 03            | Do Not Try Again                            | | MasterCard  | 04            | Token not supported                         | | MasterCard  | 21            | Do not honor                                | | MasterCard  | 22            | Merchant does not qualify for product code  | | MasterCard  | 24            | Retry after 1 hour                          | | MasterCard  | 25            | Retry after 24 hours                        | | MasterCard  | 26            | Retry after 2 days                          | | MasterCard  | 27            | Retry after 4 days                          | | MasterCard  | 28            | Retry after 6 days                          | | MasterCard  | 29            | Retry after 8 days                          | | MasterCard  | 30            | Retry after 10 days                         | | MasterCard  | 40            | Consumer non-reloadable prepaid card        | | MasterCard  | 41            | Consumer single-use virtual card number     | | MasterCard  | 42            | Sanctions score exceeds threshold value     | | MasterCard  | 99            | Do Not Try Again                            |  For processor-specific information, see the `auth_merchant_advice_code` field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets codeRaw
     * @return string
     */
    public function getCodeRaw()
    {
        return $this->container['codeRaw'];
    }

    /**
     * Sets codeRaw
     * @param string $codeRaw Raw merchant advice code sent directly from the processor. This field is used only for Mastercard.  #### CyberSource through VisaNet The value for this field corresponds to the following data in the TC 33 capture file1: - Record: CP01 TCR7 - Position: 96-99 - Field: Response Data-Merchant Advice Code   For processor-specific information, see the `auth_merchant_advice_code_raw` field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setCodeRaw($codeRaw)
    {
        $this->container['codeRaw'] = $codeRaw;

        return $this;
    }

    /**
     * Gets nameMatch
     * @return string
     */
    public function getNameMatch()
    {
        return $this->container['nameMatch'];
    }

    /**
     * Sets nameMatch
     * @param string $nameMatch #### Visa Platform Connect The field contains will contain the Account Name Request Result for zero amount Authorization request. Valid values are:  00 = Name Match Performed 01 = Name Match not Performed 02 = Name Match not supported
     * @return $this
     */
    public function setNameMatch($nameMatch)
    {
        $this->container['nameMatch'] = $nameMatch;

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

