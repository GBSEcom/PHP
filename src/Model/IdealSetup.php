<?php
/**
 * IdealSetup
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
 * The version of the OpenAPI document: 21.1.0.20210122.001
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
 * IdealSetup Class Doc Comment
 *
 * @category Class
 * @description Ideal setup.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IdealSetup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IdealSetup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchantId' => 'string',
        'subID' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'merchantId' => null,
        'subID' => 'string'
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
        'merchantId' => 'merchantId',
        'subID' => 'subID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchantId' => 'setMerchantId',
        'subID' => 'setSubID'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchantId' => 'getMerchantId',
        'subID' => 'getSubID'
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
        $this->container['merchantId'] = isset($data['merchantId']) ? $data['merchantId'] : null;
        $this->container['subID'] = isset($data['subID']) ? $data['subID'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['merchantId'] === null) {
            $invalidProperties[] = "'merchantId' can't be null";
        }
        if ((mb_strlen($this->container['merchantId']) > 30)) {
            $invalidProperties[] = "invalid value for 'merchantId', the character length must be smaller than or equal to 30.";
        }

        if (!preg_match("/^[0-9]+$/", $this->container['merchantId'])) {
            $invalidProperties[] = "invalid value for 'merchantId', must be conform to the pattern /^[0-9]+$/.";
        }

        if ($this->container['subID'] === null) {
            $invalidProperties[] = "'subID' can't be null";
        }
        if ((mb_strlen($this->container['subID']) > 30)) {
            $invalidProperties[] = "invalid value for 'subID', the character length must be smaller than or equal to 30.";
        }

        if (!preg_match("/^[0-9]+$/", $this->container['subID'])) {
            $invalidProperties[] = "invalid value for 'subID', must be conform to the pattern /^[0-9]+$/.";
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
     * Gets merchantId
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchantId'];
    }

    /**
     * Sets merchantId
     *
     * @param string $merchantId Ideal Merchant identifier.
     *
     * @return $this
     */
    public function setMerchantId($merchantId)
    {
        if ((mb_strlen($merchantId) > 30)) {
            throw new \InvalidArgumentException('invalid length for $merchantId when calling IdealSetup., must be smaller than or equal to 30.');
        }
        if ((!preg_match("/^[0-9]+$/", $merchantId))) {
            throw new \InvalidArgumentException("invalid value for $merchantId when calling IdealSetup., must conform to the pattern /^[0-9]+$/.");
        }

        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    /**
     * Gets subID
     *
     * @return string
     */
    public function getSubID()
    {
        return $this->container['subID'];
    }

    /**
     * Sets subID
     *
     * @param string $subID Ideal Sub identifier.
     *
     * @return $this
     */
    public function setSubID($subID)
    {
        if ((mb_strlen($subID) > 30)) {
            throw new \InvalidArgumentException('invalid length for $subID when calling IdealSetup., must be smaller than or equal to 30.');
        }
        if ((!preg_match("/^[0-9]+$/", $subID))) {
            throw new \InvalidArgumentException("invalid value for $subID when calling IdealSetup., must conform to the pattern /^[0-9]+$/.");
        }

        $this->container['subID'] = $subID;

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


