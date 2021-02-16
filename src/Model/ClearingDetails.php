<?php
/**
 * ClearingDetails
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
 * ClearingDetails Class Doc Comment
 *
 * @category Class
 * @description Contains clearing related response information.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ClearingDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClearingDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'clearingElements' => '\FirstData\FirstApi\Client\Model\ClearingElement[]',
        'batchTimeStamp' => 'string',
        'receiptNumberFrom' => 'int',
        'receiptNumberTo' => 'int',
        'traceNumber' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'clearingElements' => null,
        'batchTimeStamp' => null,
        'receiptNumberFrom' => 'int32',
        'receiptNumberTo' => 'int32',
        'traceNumber' => 'int32'
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
        'clearingElements' => 'clearingElements',
        'batchTimeStamp' => 'batchTimeStamp',
        'receiptNumberFrom' => 'receiptNumberFrom',
        'receiptNumberTo' => 'receiptNumberTo',
        'traceNumber' => 'traceNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clearingElements' => 'setClearingElements',
        'batchTimeStamp' => 'setBatchTimeStamp',
        'receiptNumberFrom' => 'setReceiptNumberFrom',
        'receiptNumberTo' => 'setReceiptNumberTo',
        'traceNumber' => 'setTraceNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clearingElements' => 'getClearingElements',
        'batchTimeStamp' => 'getBatchTimeStamp',
        'receiptNumberFrom' => 'getReceiptNumberFrom',
        'receiptNumberTo' => 'getReceiptNumberTo',
        'traceNumber' => 'getTraceNumber'
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
        $this->container['clearingElements'] = isset($data['clearingElements']) ? $data['clearingElements'] : null;
        $this->container['batchTimeStamp'] = isset($data['batchTimeStamp']) ? $data['batchTimeStamp'] : null;
        $this->container['receiptNumberFrom'] = isset($data['receiptNumberFrom']) ? $data['receiptNumberFrom'] : null;
        $this->container['receiptNumberTo'] = isset($data['receiptNumberTo']) ? $data['receiptNumberTo'] : null;
        $this->container['traceNumber'] = isset($data['traceNumber']) ? $data['traceNumber'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['batchTimeStamp']) && !preg_match("/[0-9]{14}/", $this->container['batchTimeStamp'])) {
            $invalidProperties[] = "invalid value for 'batchTimeStamp', must be conform to the pattern /[0-9]{14}/.";
        }

        if (!is_null($this->container['receiptNumberFrom']) && ($this->container['receiptNumberFrom'] > 9999)) {
            $invalidProperties[] = "invalid value for 'receiptNumberFrom', must be smaller than or equal to 9999.";
        }

        if (!is_null($this->container['receiptNumberFrom']) && ($this->container['receiptNumberFrom'] < 1)) {
            $invalidProperties[] = "invalid value for 'receiptNumberFrom', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['receiptNumberTo']) && ($this->container['receiptNumberTo'] > 9999)) {
            $invalidProperties[] = "invalid value for 'receiptNumberTo', must be smaller than or equal to 9999.";
        }

        if (!is_null($this->container['receiptNumberTo']) && ($this->container['receiptNumberTo'] < 1)) {
            $invalidProperties[] = "invalid value for 'receiptNumberTo', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['traceNumber']) && ($this->container['traceNumber'] > 999999)) {
            $invalidProperties[] = "invalid value for 'traceNumber', must be smaller than or equal to 999999.";
        }

        if (!is_null($this->container['traceNumber']) && ($this->container['traceNumber'] < 0)) {
            $invalidProperties[] = "invalid value for 'traceNumber', must be bigger than or equal to 0.";
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
     * Gets clearingElements
     *
     * @return \FirstData\FirstApi\Client\Model\ClearingElement[]|null
     */
    public function getClearingElements()
    {
        return $this->container['clearingElements'];
    }

    /**
     * Sets clearingElements
     *
     * @param \FirstData\FirstApi\Client\Model\ClearingElement[]|null $clearingElements The array contains information about the clearing elements.
     *
     * @return $this
     */
    public function setClearingElements($clearingElements)
    {
        $this->container['clearingElements'] = $clearingElements;

        return $this;
    }

    /**
     * Gets batchTimeStamp
     *
     * @return string|null
     */
    public function getBatchTimeStamp()
    {
        return $this->container['batchTimeStamp'];
    }

    /**
     * Sets batchTimeStamp
     *
     * @param string|null $batchTimeStamp Timestamp when the clearing has been processed. The used format is \"YYYYMMDDhhmmss\".
     *
     * @return $this
     */
    public function setBatchTimeStamp($batchTimeStamp)
    {

        if (!is_null($batchTimeStamp) && (!preg_match("/[0-9]{14}/", $batchTimeStamp))) {
            throw new \InvalidArgumentException("invalid value for $batchTimeStamp when calling ClearingDetails., must conform to the pattern /[0-9]{14}/.");
        }

        $this->container['batchTimeStamp'] = $batchTimeStamp;

        return $this;
    }

    /**
     * Gets receiptNumberFrom
     *
     * @return int|null
     */
    public function getReceiptNumberFrom()
    {
        return $this->container['receiptNumberFrom'];
    }

    /**
     * Sets receiptNumberFrom
     *
     * @param int|null $receiptNumberFrom Start receipt number for the clearing process.
     *
     * @return $this
     */
    public function setReceiptNumberFrom($receiptNumberFrom)
    {

        if (!is_null($receiptNumberFrom) && ($receiptNumberFrom > 9999)) {
            throw new \InvalidArgumentException('invalid value for $receiptNumberFrom when calling ClearingDetails., must be smaller than or equal to 9999.');
        }
        if (!is_null($receiptNumberFrom) && ($receiptNumberFrom < 1)) {
            throw new \InvalidArgumentException('invalid value for $receiptNumberFrom when calling ClearingDetails., must be bigger than or equal to 1.');
        }

        $this->container['receiptNumberFrom'] = $receiptNumberFrom;

        return $this;
    }

    /**
     * Gets receiptNumberTo
     *
     * @return int|null
     */
    public function getReceiptNumberTo()
    {
        return $this->container['receiptNumberTo'];
    }

    /**
     * Sets receiptNumberTo
     *
     * @param int|null $receiptNumberTo End receipt number for the clearing process.
     *
     * @return $this
     */
    public function setReceiptNumberTo($receiptNumberTo)
    {

        if (!is_null($receiptNumberTo) && ($receiptNumberTo > 9999)) {
            throw new \InvalidArgumentException('invalid value for $receiptNumberTo when calling ClearingDetails., must be smaller than or equal to 9999.');
        }
        if (!is_null($receiptNumberTo) && ($receiptNumberTo < 1)) {
            throw new \InvalidArgumentException('invalid value for $receiptNumberTo when calling ClearingDetails., must be bigger than or equal to 1.');
        }

        $this->container['receiptNumberTo'] = $receiptNumberTo;

        return $this;
    }

    /**
     * Gets traceNumber
     *
     * @return int|null
     */
    public function getTraceNumber()
    {
        return $this->container['traceNumber'];
    }

    /**
     * Sets traceNumber
     *
     * @param int|null $traceNumber Trace number for the clearing process.
     *
     * @return $this
     */
    public function setTraceNumber($traceNumber)
    {

        if (!is_null($traceNumber) && ($traceNumber > 999999)) {
            throw new \InvalidArgumentException('invalid value for $traceNumber when calling ClearingDetails., must be smaller than or equal to 999999.');
        }
        if (!is_null($traceNumber) && ($traceNumber < 0)) {
            throw new \InvalidArgumentException('invalid value for $traceNumber when calling ClearingDetails., must be bigger than or equal to 0.');
        }

        $this->container['traceNumber'] = $traceNumber;

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


