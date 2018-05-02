<?php
/**
 * ChannelGroup
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SUPLA Cloud API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ChannelGroup Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChannelGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'hidden' => 'bool',
        'caption' => 'string',
        'function' => '\Swagger\Client\Model\ChannelFunction',
        'functionId' => 'int',
        'locationId' => 'int',
        'location' => '\Swagger\Client\Model\Location',
        'channelIds' => 'int[]',
        'channels' => '\Swagger\Client\Model\Channel[]',
        'altIcon' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'hidden' => null,
        'caption' => null,
        'function' => null,
        'functionId' => null,
        'locationId' => null,
        'location' => null,
        'channelIds' => null,
        'channels' => null,
        'altIcon' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'hidden' => 'hidden',
        'caption' => 'caption',
        'function' => 'function',
        'functionId' => 'functionId',
        'locationId' => 'locationId',
        'location' => 'location',
        'channelIds' => 'channelIds',
        'channels' => 'channels',
        'altIcon' => 'altIcon'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'hidden' => 'setHidden',
        'caption' => 'setCaption',
        'function' => 'setFunction',
        'functionId' => 'setFunctionId',
        'locationId' => 'setLocationId',
        'location' => 'setLocation',
        'channelIds' => 'setChannelIds',
        'channels' => 'setChannels',
        'altIcon' => 'setAltIcon'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'hidden' => 'getHidden',
        'caption' => 'getCaption',
        'function' => 'getFunction',
        'functionId' => 'getFunctionId',
        'locationId' => 'getLocationId',
        'location' => 'getLocation',
        'channelIds' => 'getChannelIds',
        'channels' => 'getChannels',
        'altIcon' => 'getAltIcon'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['hidden'] = isset($data['hidden']) ? $data['hidden'] : null;
        $this->container['caption'] = isset($data['caption']) ? $data['caption'] : null;
        $this->container['function'] = isset($data['function']) ? $data['function'] : null;
        $this->container['functionId'] = isset($data['functionId']) ? $data['functionId'] : null;
        $this->container['locationId'] = isset($data['locationId']) ? $data['locationId'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['channelIds'] = isset($data['channelIds']) ? $data['channelIds'] : null;
        $this->container['channels'] = isset($data['channels']) ? $data['channels'] : null;
        $this->container['altIcon'] = isset($data['altIcon']) ? $data['altIcon'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Channel group identifier
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets hidden
     *
     * @return bool
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     *
     * @param bool $hidden Whether this channel group is shown on client apps or not
     *
     * @return $this
     */
    public function setHidden($hidden)
    {
        $this->container['hidden'] = $hidden;

        return $this;
    }

    /**
     * Gets caption
     *
     * @return string
     */
    public function getCaption()
    {
        return $this->container['caption'];
    }

    /**
     * Sets caption
     *
     * @param string $caption Channel caption
     *
     * @return $this
     */
    public function setCaption($caption)
    {
        $this->container['caption'] = $caption;

        return $this;
    }

    /**
     * Gets function
     *
     * @return \Swagger\Client\Model\ChannelFunction
     */
    public function getFunction()
    {
        return $this->container['function'];
    }

    /**
     * Sets function
     *
     * @param \Swagger\Client\Model\ChannelFunction $function function
     *
     * @return $this
     */
    public function setFunction($function)
    {
        $this->container['function'] = $function;

        return $this;
    }

    /**
     * Gets functionId
     *
     * @return int
     */
    public function getFunctionId()
    {
        return $this->container['functionId'];
    }

    /**
     * Sets functionId
     *
     * @param int $functionId functionId
     *
     * @return $this
     */
    public function setFunctionId($functionId)
    {
        $this->container['functionId'] = $functionId;

        return $this;
    }

    /**
     * Gets locationId
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['locationId'];
    }

    /**
     * Sets locationId
     *
     * @param int $locationId locationId
     *
     * @return $this
     */
    public function setLocationId($locationId)
    {
        $this->container['locationId'] = $locationId;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Swagger\Client\Model\Location
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Swagger\Client\Model\Location $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets channelIds
     *
     * @return int[]
     */
    public function getChannelIds()
    {
        return $this->container['channelIds'];
    }

    /**
     * Sets channelIds
     *
     * @param int[] $channelIds channelIds
     *
     * @return $this
     */
    public function setChannelIds($channelIds)
    {
        $this->container['channelIds'] = $channelIds;

        return $this;
    }

    /**
     * Gets channels
     *
     * @return \Swagger\Client\Model\Channel[]
     */
    public function getChannels()
    {
        return $this->container['channels'];
    }

    /**
     * Sets channels
     *
     * @param \Swagger\Client\Model\Channel[] $channels Returned only if requested by the `include` parameter.
     *
     * @return $this
     */
    public function setChannels($channels)
    {
        $this->container['channels'] = $channels;

        return $this;
    }

    /**
     * Gets altIcon
     *
     * @return int
     */
    public function getAltIcon()
    {
        return $this->container['altIcon'];
    }

    /**
     * Sets altIcon
     *
     * @param int $altIcon Chosen alternative icon idenifier. Should not be greater than `funciton.maxAlternativeIconIndex`
     *
     * @return $this
     */
    public function setAltIcon($altIcon)
    {
        $this->container['altIcon'] = $altIcon;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

