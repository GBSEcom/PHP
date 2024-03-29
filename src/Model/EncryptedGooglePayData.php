<?php
/**
 * EncryptedGooglePayData
 *
 * PHP version 5
 *
 * @category Class
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payment Gateway API Specification.
 *
 * The documentation here is designed to provide all of the technical guidance required to consume and integrate with our APIs for payment processing. To learn more about our APIs please visit https://docs.firstdata.com/org/gateway.
 *
 * The version of the OpenAPI document: 21.5.0.20211029.001
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FirstData\FirstApi\Client\Model;

use \ArrayAccess;
use \FirstData\FirstApi\Client\ObjectSerializer;

/**
 * EncryptedGooglePayData Class Doc Comment
 *
 * @category Class
 * @description The encrypted wallet payload.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EncryptedGooglePayData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EncryptedGooglePay_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'encryptedMessage' => 'string',
        'ephemeralPublicKey' => 'string',
        'tag' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'encryptedMessage' => null,
        'ephemeralPublicKey' => null,
        'tag' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'encryptedMessage' => 'encryptedMessage',
        'ephemeralPublicKey' => 'ephemeralPublicKey',
        'tag' => 'tag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'encryptedMessage' => 'setEncryptedMessage',
        'ephemeralPublicKey' => 'setEphemeralPublicKey',
        'tag' => 'setTag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'encryptedMessage' => 'getEncryptedMessage',
        'ephemeralPublicKey' => 'getEphemeralPublicKey',
        'tag' => 'getTag'
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
        return self::$openAPIModelName;
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
        $this->container['encryptedMessage'] = isset($data['encryptedMessage']) ? $data['encryptedMessage'] : null;
        $this->container['ephemeralPublicKey'] = isset($data['ephemeralPublicKey']) ? $data['ephemeralPublicKey'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['encryptedMessage'] === null) {
            $invalidProperties[] = "'encryptedMessage' can't be null";
        }
        if (!preg_match("/^(?!\\s*$).+/", $this->container['encryptedMessage'])) {
            $invalidProperties[] = "invalid value for 'encryptedMessage', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        if ($this->container['ephemeralPublicKey'] === null) {
            $invalidProperties[] = "'ephemeralPublicKey' can't be null";
        }
        if (!preg_match("/^(?!\\s*$).+/", $this->container['ephemeralPublicKey'])) {
            $invalidProperties[] = "invalid value for 'ephemeralPublicKey', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        if ($this->container['tag'] === null) {
            $invalidProperties[] = "'tag' can't be null";
        }
        if (!preg_match("/^(?!\\s*$).+/", $this->container['tag'])) {
            $invalidProperties[] = "invalid value for 'tag', must be conform to the pattern /^(?!\\s*$).+/.";
        }

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
     * Gets encryptedMessage
     *
     * @return string
     */
    public function getEncryptedMessage()
    {
        return $this->container['encryptedMessage'];
    }

    /**
     * Sets encryptedMessage
     *
     * @param string $encryptedMessage The encrypted message containing the actual payment information as well as additional security fields.
     *
     * @return $this
     */
    public function setEncryptedMessage($encryptedMessage)
    {

        if ((!preg_match("/^(?!\\s*$).+/", $encryptedMessage))) {
            throw new \InvalidArgumentException("invalid value for $encryptedMessage when calling EncryptedGooglePayData., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['encryptedMessage'] = $encryptedMessage;

        return $this;
    }

    /**
     * Gets ephemeralPublicKey
     *
     * @return string
     */
    public function getEphemeralPublicKey()
    {
        return $this->container['ephemeralPublicKey'];
    }

    /**
     * Sets ephemeralPublicKey
     *
     * @param string $ephemeralPublicKey The ephemeral public key associated with the private key to encrypt the message in uncompressed point format.
     *
     * @return $this
     */
    public function setEphemeralPublicKey($ephemeralPublicKey)
    {

        if ((!preg_match("/^(?!\\s*$).+/", $ephemeralPublicKey))) {
            throw new \InvalidArgumentException("invalid value for $ephemeralPublicKey when calling EncryptedGooglePayData., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['ephemeralPublicKey'] = $ephemeralPublicKey;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string $tag MAC of the encryptedMessage.
     *
     * @return $this
     */
    public function setTag($tag)
    {

        if ((!preg_match("/^(?!\\s*$).+/", $tag))) {
            throw new \InvalidArgumentException("invalid value for $tag when calling EncryptedGooglePayData., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['tag'] = $tag;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


