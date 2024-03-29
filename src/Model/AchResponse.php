<?php
/**
 * AchResponse
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
 * AchResponse Class Doc Comment
 *
 * @category Class
 * @description ACH TeleCheck response.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AchResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AchResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'responseCode' => 'string',
        'approvalCode' => 'string',
        'referenceNumber' => 'string',
        'preferredFlag' => 'string',
        'transactionStatus' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'responseCode' => null,
        'approvalCode' => null,
        'referenceNumber' => null,
        'preferredFlag' => null,
        'transactionStatus' => null
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
        'responseCode' => 'responseCode',
        'approvalCode' => 'approvalCode',
        'referenceNumber' => 'referenceNumber',
        'preferredFlag' => 'preferredFlag',
        'transactionStatus' => 'transactionStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'responseCode' => 'setResponseCode',
        'approvalCode' => 'setApprovalCode',
        'referenceNumber' => 'setReferenceNumber',
        'preferredFlag' => 'setPreferredFlag',
        'transactionStatus' => 'setTransactionStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'responseCode' => 'getResponseCode',
        'approvalCode' => 'getApprovalCode',
        'referenceNumber' => 'getReferenceNumber',
        'preferredFlag' => 'getPreferredFlag',
        'transactionStatus' => 'getTransactionStatus'
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
        $this->container['responseCode'] = isset($data['responseCode']) ? $data['responseCode'] : null;
        $this->container['approvalCode'] = isset($data['approvalCode']) ? $data['approvalCode'] : null;
        $this->container['referenceNumber'] = isset($data['referenceNumber']) ? $data['referenceNumber'] : null;
        $this->container['preferredFlag'] = isset($data['preferredFlag']) ? $data['preferredFlag'] : null;
        $this->container['transactionStatus'] = isset($data['transactionStatus']) ? $data['transactionStatus'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['responseCode']) && (mb_strlen($this->container['responseCode']) > 2)) {
            $invalidProperties[] = "invalid value for 'responseCode', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['approvalCode']) && (mb_strlen($this->container['approvalCode']) > 4)) {
            $invalidProperties[] = "invalid value for 'approvalCode', the character length must be smaller than or equal to 4.";
        }

        /*if (!is_null($this->container['preferredFlag']) && (mb_strlen($this->container['preferredFlag']) > 1)) {
            $invalidProperties[] = "invalid value for 'preferredFlag', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['transactionStatus']) && (mb_strlen($this->container['transactionStatus']) > 1)) {
            $invalidProperties[] = "invalid value for 'transactionStatus', the character length must be smaller than or equal to 1.";
        }*/

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
     * Gets responseCode
     *
     * @return string|null
     */
    public function getResponseCode()
    {
        return $this->container['responseCode'];
    }

    /**
     * Sets responseCode
     *
     * @param string|null $responseCode Response code for TeleCheck authentication decision in the sale response message.
     *
     * @return $this
     */
    public function setResponseCode($responseCode)
    {
        if (!is_null($responseCode) && (mb_strlen($responseCode) > 2)) {
            throw new \InvalidArgumentException('invalid length for $responseCode when calling AchResponse., must be smaller than or equal to 2.');
        }

        $this->container['responseCode'] = $responseCode;

        return $this;
    }

    /**
     * Gets approvalCode
     *
     * @return string|null
     */
    public function getApprovalCode()
    {
        return $this->container['approvalCode'];
    }

    /**
     * Sets approvalCode
     *
     * @param string|null $approvalCode Code provided if check is approved.
     *
     * @return $this
     */
    public function setApprovalCode($approvalCode)
    {
        if (!is_null($approvalCode) && (mb_strlen($approvalCode) > 4)) {
            throw new \InvalidArgumentException('invalid length for $approvalCode when calling AchResponse., must be smaller than or equal to 4.');
        }

        $this->container['approvalCode'] = $approvalCode;

        return $this;
    }

    /**
     * Gets referenceNumber
     *
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->container['referenceNumber'];
    }

    /**
     * Sets referenceNumber
     *
     * @param string|null $referenceNumber Reference number.
     *
     * @return $this
     */
    public function setReferenceNumber($referenceNumber)
    {
        $this->container['referenceNumber'] = $referenceNumber;

        return $this;
    }

    /**
     * Gets preferredFlag
     *
     * @return string|null
     */
    public function getPreferredFlag()
    {
        return $this->container['preferredFlag'];
    }

    /**
     * Sets preferredFlag
     *
     * @param string|null $preferredFlag Preferred flag.
     *
     * @return $this
     */
    public function setPreferredFlag($preferredFlag)
    {
        /*if (!is_null($preferredFlag) && (mb_strlen($preferredFlag) > 1)) {
            throw new \InvalidArgumentException('invalid length for $preferredFlag when calling AchResponse., must be smaller than or equal to 1.');
        }*/

        $this->container['preferredFlag'] = $preferredFlag;

        return $this;
    }

    /**
     * Gets transactionStatus
     *
     * @return string|null
     */
    public function getTransactionStatus()
    {
        return $this->container['transactionStatus'];
    }

    /**
     * Sets transactionStatus
     *
     * @param string|null $transactionStatus Indicates the result of the requested authorization and is returned in the sale response.
     *
     * @return $this
     */
    public function setTransactionStatus($transactionStatus)
    {
        /*if (!is_null($transactionStatus) && (mb_strlen($transactionStatus) > 1)) {
            throw new \InvalidArgumentException('invalid length for $transactionStatus when calling AchResponse., must be smaller than or equal to 1.');
        }*/

        $this->container['transactionStatus'] = $transactionStatus;

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


