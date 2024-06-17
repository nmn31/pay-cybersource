<?php
/**
 * PtsV2PaymentsPost201ResponseRiskInformationTravel
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
 * PtsV2PaymentsPost201ResponseRiskInformationTravel Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsPost201ResponseRiskInformationTravel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsPost201Response_riskInformation_travel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'actualFinalDestination' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseRiskInformationTravelActualFinalDestination',
        'firstDeparture' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseRiskInformationTravelFirstDeparture',
        'firstDestination' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseRiskInformationTravelFirstDestination',
        'lastDestination' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseRiskInformationTravelLastDestination'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'actualFinalDestination' => null,
        'firstDeparture' => null,
        'firstDestination' => null,
        'lastDestination' => null
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
        'actualFinalDestination' => 'actualFinalDestination',
        'firstDeparture' => 'firstDeparture',
        'firstDestination' => 'firstDestination',
        'lastDestination' => 'lastDestination'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'actualFinalDestination' => 'setActualFinalDestination',
        'firstDeparture' => 'setFirstDeparture',
        'firstDestination' => 'setFirstDestination',
        'lastDestination' => 'setLastDestination'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'actualFinalDestination' => 'getActualFinalDestination',
        'firstDeparture' => 'getFirstDeparture',
        'firstDestination' => 'getFirstDestination',
        'lastDestination' => 'getLastDestination'
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
        $this->container['actualFinalDestination'] = isset($data['actualFinalDestination']) ? $data['actualFinalDestination'] : null;
        $this->container['firstDeparture'] = isset($data['firstDeparture']) ? $data['firstDeparture'] : null;
        $this->container['firstDestination'] = isset($data['firstDestination']) ? $data['firstDestination'] : null;
        $this->container['lastDestination'] = isset($data['lastDestination']) ? $data['lastDestination'] : null;
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
     * Gets actualFinalDestination
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseRiskInformationTravelActualFinalDestination
     */
    public function getActualFinalDestination()
    {
        return $this->container['actualFinalDestination'];
    }

    /**
     * Sets actualFinalDestination
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseRiskInformationTravelActualFinalDestination $actualFinalDestination
     * @return $this
     */
    public function setActualFinalDestination($actualFinalDestination)
    {
        $this->container['actualFinalDestination'] = $actualFinalDestination;

        return $this;
    }

    /**
     * Gets firstDeparture
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseRiskInformationTravelFirstDeparture
     */
    public function getFirstDeparture()
    {
        return $this->container['firstDeparture'];
    }

    /**
     * Sets firstDeparture
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseRiskInformationTravelFirstDeparture $firstDeparture
     * @return $this
     */
    public function setFirstDeparture($firstDeparture)
    {
        $this->container['firstDeparture'] = $firstDeparture;

        return $this;
    }

    /**
     * Gets firstDestination
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseRiskInformationTravelFirstDestination
     */
    public function getFirstDestination()
    {
        return $this->container['firstDestination'];
    }

    /**
     * Sets firstDestination
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseRiskInformationTravelFirstDestination $firstDestination
     * @return $this
     */
    public function setFirstDestination($firstDestination)
    {
        $this->container['firstDestination'] = $firstDestination;

        return $this;
    }

    /**
     * Gets lastDestination
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseRiskInformationTravelLastDestination
     */
    public function getLastDestination()
    {
        return $this->container['lastDestination'];
    }

    /**
     * Sets lastDestination
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseRiskInformationTravelLastDestination $lastDestination
     * @return $this
     */
    public function setLastDestination($lastDestination)
    {
        $this->container['lastDestination'] = $lastDestination;

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

