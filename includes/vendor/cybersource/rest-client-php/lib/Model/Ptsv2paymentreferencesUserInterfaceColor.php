<?php
/**
 * Ptsv2paymentreferencesUserInterfaceColor
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
 * Ptsv2paymentreferencesUserInterfaceColor Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentreferencesUserInterfaceColor implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2paymentreferences_userInterface_color';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'border' => 'string',
        'borderSelected' => 'string',
        'button' => 'string',
        'buttonText' => 'string',
        'checkbox' => 'string',
        'checkboxCheckMark' => 'string',
        'header' => 'string',
        'link' => 'string',
        'text' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'border' => null,
        'borderSelected' => null,
        'button' => null,
        'buttonText' => null,
        'checkbox' => null,
        'checkboxCheckMark' => null,
        'header' => null,
        'link' => null,
        'text' => null
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
        'border' => 'border',
        'borderSelected' => 'borderSelected',
        'button' => 'button',
        'buttonText' => 'buttonText',
        'checkbox' => 'checkbox',
        'checkboxCheckMark' => 'checkboxCheckMark',
        'header' => 'header',
        'link' => 'link',
        'text' => 'text'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'border' => 'setBorder',
        'borderSelected' => 'setBorderSelected',
        'button' => 'setButton',
        'buttonText' => 'setButtonText',
        'checkbox' => 'setCheckbox',
        'checkboxCheckMark' => 'setCheckboxCheckMark',
        'header' => 'setHeader',
        'link' => 'setLink',
        'text' => 'setText'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'border' => 'getBorder',
        'borderSelected' => 'getBorderSelected',
        'button' => 'getButton',
        'buttonText' => 'getButtonText',
        'checkbox' => 'getCheckbox',
        'checkboxCheckMark' => 'getCheckboxCheckMark',
        'header' => 'getHeader',
        'link' => 'getLink',
        'text' => 'getText'
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
        $this->container['border'] = isset($data['border']) ? $data['border'] : null;
        $this->container['borderSelected'] = isset($data['borderSelected']) ? $data['borderSelected'] : null;
        $this->container['button'] = isset($data['button']) ? $data['button'] : null;
        $this->container['buttonText'] = isset($data['buttonText']) ? $data['buttonText'] : null;
        $this->container['checkbox'] = isset($data['checkbox']) ? $data['checkbox'] : null;
        $this->container['checkboxCheckMark'] = isset($data['checkboxCheckMark']) ? $data['checkboxCheckMark'] : null;
        $this->container['header'] = isset($data['header']) ? $data['header'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
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
     * Gets border
     * @return string
     */
    public function getBorder()
    {
        return $this->container['border'];
    }

    /**
     * Sets border
     * @param string $border Border Color
     * @return $this
     */
    public function setBorder($border)
    {
        $this->container['border'] = $border;

        return $this;
    }

    /**
     * Gets borderSelected
     * @return string
     */
    public function getBorderSelected()
    {
        return $this->container['borderSelected'];
    }

    /**
     * Sets borderSelected
     * @param string $borderSelected Selected Border Color
     * @return $this
     */
    public function setBorderSelected($borderSelected)
    {
        $this->container['borderSelected'] = $borderSelected;

        return $this;
    }

    /**
     * Gets button
     * @return string
     */
    public function getButton()
    {
        return $this->container['button'];
    }

    /**
     * Sets button
     * @param string $button Button Color
     * @return $this
     */
    public function setButton($button)
    {
        $this->container['button'] = $button;

        return $this;
    }

    /**
     * Gets buttonText
     * @return string
     */
    public function getButtonText()
    {
        return $this->container['buttonText'];
    }

    /**
     * Sets buttonText
     * @param string $buttonText Button Text Color
     * @return $this
     */
    public function setButtonText($buttonText)
    {
        $this->container['buttonText'] = $buttonText;

        return $this;
    }

    /**
     * Gets checkbox
     * @return string
     */
    public function getCheckbox()
    {
        return $this->container['checkbox'];
    }

    /**
     * Sets checkbox
     * @param string $checkbox Checkbox Color
     * @return $this
     */
    public function setCheckbox($checkbox)
    {
        $this->container['checkbox'] = $checkbox;

        return $this;
    }

    /**
     * Gets checkboxCheckMark
     * @return string
     */
    public function getCheckboxCheckMark()
    {
        return $this->container['checkboxCheckMark'];
    }

    /**
     * Sets checkboxCheckMark
     * @param string $checkboxCheckMark Checkbox Checkmark Color
     * @return $this
     */
    public function setCheckboxCheckMark($checkboxCheckMark)
    {
        $this->container['checkboxCheckMark'] = $checkboxCheckMark;

        return $this;
    }

    /**
     * Gets header
     * @return string
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     * @param string $header Header Color
     * @return $this
     */
    public function setHeader($header)
    {
        $this->container['header'] = $header;

        return $this;
    }

    /**
     * Gets link
     * @return string
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     * @param string $link Link Color
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets text
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     * @param string $text Text Color
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

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


