<?php
/**
 * ClientApp
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
 * ClientApp Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClientApp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ClientApp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'caption' => 'string',
        'enabled' => 'bool',
        'regIpv4' => 'int',
        'regDate' => '\DateTime',
        'lastAccessIpv4' => 'int',
        'lastAccessDate' => '\DateTime',
        'softwareVersion' => 'string',
        'protocolVersion' => 'int',
        'accessIdId' => 'int',
        'connected' => 'bool',
        'accessId' => '\Swagger\Client\Model\AccessID'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'caption' => null,
        'enabled' => null,
        'regIpv4' => null,
        'regDate' => 'date-time',
        'lastAccessIpv4' => null,
        'lastAccessDate' => 'date-time',
        'softwareVersion' => null,
        'protocolVersion' => null,
        'accessIdId' => null,
        'connected' => null,
        'accessId' => null
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
        'name' => 'name',
        'caption' => 'caption',
        'enabled' => 'enabled',
        'regIpv4' => 'regIpv4',
        'regDate' => 'regDate',
        'lastAccessIpv4' => 'lastAccessIpv4',
        'lastAccessDate' => 'lastAccessDate',
        'softwareVersion' => 'softwareVersion',
        'protocolVersion' => 'protocolVersion',
        'accessIdId' => 'accessIdId',
        'connected' => 'connected',
        'accessId' => 'accessId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'caption' => 'setCaption',
        'enabled' => 'setEnabled',
        'regIpv4' => 'setRegIpv4',
        'regDate' => 'setRegDate',
        'lastAccessIpv4' => 'setLastAccessIpv4',
        'lastAccessDate' => 'setLastAccessDate',
        'softwareVersion' => 'setSoftwareVersion',
        'protocolVersion' => 'setProtocolVersion',
        'accessIdId' => 'setAccessIdId',
        'connected' => 'setConnected',
        'accessId' => 'setAccessId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'caption' => 'getCaption',
        'enabled' => 'getEnabled',
        'regIpv4' => 'getRegIpv4',
        'regDate' => 'getRegDate',
        'lastAccessIpv4' => 'getLastAccessIpv4',
        'lastAccessDate' => 'getLastAccessDate',
        'softwareVersion' => 'getSoftwareVersion',
        'protocolVersion' => 'getProtocolVersion',
        'accessIdId' => 'getAccessIdId',
        'connected' => 'getConnected',
        'accessId' => 'getAccessId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['caption'] = isset($data['caption']) ? $data['caption'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['regIpv4'] = isset($data['regIpv4']) ? $data['regIpv4'] : null;
        $this->container['regDate'] = isset($data['regDate']) ? $data['regDate'] : null;
        $this->container['lastAccessIpv4'] = isset($data['lastAccessIpv4']) ? $data['lastAccessIpv4'] : null;
        $this->container['lastAccessDate'] = isset($data['lastAccessDate']) ? $data['lastAccessDate'] : null;
        $this->container['softwareVersion'] = isset($data['softwareVersion']) ? $data['softwareVersion'] : null;
        $this->container['protocolVersion'] = isset($data['protocolVersion']) ? $data['protocolVersion'] : null;
        $this->container['accessIdId'] = isset($data['accessIdId']) ? $data['accessIdId'] : null;
        $this->container['connected'] = isset($data['connected']) ? $data['connected'] : null;
        $this->container['accessId'] = isset($data['accessId']) ? $data['accessId'] : null;
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
     * @param int $id Client application identifier
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $caption caption
     *
     * @return $this
     */
    public function setCaption($caption)
    {
        $this->container['caption'] = $caption;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets regIpv4
     *
     * @return int
     */
    public function getRegIpv4()
    {
        return $this->container['regIpv4'];
    }

    /**
     * Sets regIpv4
     *
     * @param int $regIpv4 regIpv4
     *
     * @return $this
     */
    public function setRegIpv4($regIpv4)
    {
        $this->container['regIpv4'] = $regIpv4;

        return $this;
    }

    /**
     * Gets regDate
     *
     * @return \DateTime
     */
    public function getRegDate()
    {
        return $this->container['regDate'];
    }

    /**
     * Sets regDate
     *
     * @param \DateTime $regDate regDate
     *
     * @return $this
     */
    public function setRegDate($regDate)
    {
        $this->container['regDate'] = $regDate;

        return $this;
    }

    /**
     * Gets lastAccessIpv4
     *
     * @return int
     */
    public function getLastAccessIpv4()
    {
        return $this->container['lastAccessIpv4'];
    }

    /**
     * Sets lastAccessIpv4
     *
     * @param int $lastAccessIpv4 lastAccessIpv4
     *
     * @return $this
     */
    public function setLastAccessIpv4($lastAccessIpv4)
    {
        $this->container['lastAccessIpv4'] = $lastAccessIpv4;

        return $this;
    }

    /**
     * Gets lastAccessDate
     *
     * @return \DateTime
     */
    public function getLastAccessDate()
    {
        return $this->container['lastAccessDate'];
    }

    /**
     * Sets lastAccessDate
     *
     * @param \DateTime $lastAccessDate lastAccessDate
     *
     * @return $this
     */
    public function setLastAccessDate($lastAccessDate)
    {
        $this->container['lastAccessDate'] = $lastAccessDate;

        return $this;
    }

    /**
     * Gets softwareVersion
     *
     * @return string
     */
    public function getSoftwareVersion()
    {
        return $this->container['softwareVersion'];
    }

    /**
     * Sets softwareVersion
     *
     * @param string $softwareVersion softwareVersion
     *
     * @return $this
     */
    public function setSoftwareVersion($softwareVersion)
    {
        $this->container['softwareVersion'] = $softwareVersion;

        return $this;
    }

    /**
     * Gets protocolVersion
     *
     * @return int
     */
    public function getProtocolVersion()
    {
        return $this->container['protocolVersion'];
    }

    /**
     * Sets protocolVersion
     *
     * @param int $protocolVersion protocolVersion
     *
     * @return $this
     */
    public function setProtocolVersion($protocolVersion)
    {
        $this->container['protocolVersion'] = $protocolVersion;

        return $this;
    }

    /**
     * Gets accessIdId
     *
     * @return int
     */
    public function getAccessIdId()
    {
        return $this->container['accessIdId'];
    }

    /**
     * Sets accessIdId
     *
     * @param int $accessIdId accessIdId
     *
     * @return $this
     */
    public function setAccessIdId($accessIdId)
    {
        $this->container['accessIdId'] = $accessIdId;

        return $this;
    }

    /**
     * Gets connected
     *
     * @return bool
     */
    public function getConnected()
    {
        return $this->container['connected'];
    }

    /**
     * Sets connected
     *
     * @param bool $connected connected
     *
     * @return $this
     */
    public function setConnected($connected)
    {
        $this->container['connected'] = $connected;

        return $this;
    }

    /**
     * Gets accessId
     *
     * @return \Swagger\Client\Model\AccessID
     */
    public function getAccessId()
    {
        return $this->container['accessId'];
    }

    /**
     * Sets accessId
     *
     * @param \Swagger\Client\Model\AccessID $accessId accessId
     *
     * @return $this
     */
    public function setAccessId($accessId)
    {
        $this->container['accessId'] = $accessId;

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

