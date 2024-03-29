<?php
/**
 * PrimaryTransaction
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
 * PrimaryTransaction Class Doc Comment
 *
 * @category Class
 * @description Provides shared fields for all PrimaryTransaction request types. Abstract class, do not use this class directly, use one of its children.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PrimaryTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = 'requestType';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PrimaryTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'requestType' => 'string',
        'transactionAmount' => '\FirstData\FirstApi\Client\Model\Amount',
        'storeId' => 'string',
        'merchantTransactionId' => 'string',
        'transactionOrigin' => '\FirstData\FirstApi\Client\Model\TransactionOrigin',
        'order' => '\FirstData\FirstApi\Client\Model\Order',
        'ipgTransactionId' => 'int',
        'allowPartialApproval' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'requestType' => null,
        'transactionAmount' => null,
        'storeId' => null,
        'merchantTransactionId' => null,
        'transactionOrigin' => null,
        'order' => null,
        'ipgTransactionId' => 'int64',
        'allowPartialApproval' => null
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
        'requestType' => 'requestType',
        'transactionAmount' => 'transactionAmount',
        'storeId' => 'storeId',
        'merchantTransactionId' => 'merchantTransactionId',
        'transactionOrigin' => 'transactionOrigin',
        'order' => 'order',
        'ipgTransactionId' => 'ipgTransactionId',
        'allowPartialApproval' => 'allowPartialApproval'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'requestType' => 'setRequestType',
        'transactionAmount' => 'setTransactionAmount',
        'storeId' => 'setStoreId',
        'merchantTransactionId' => 'setMerchantTransactionId',
        'transactionOrigin' => 'setTransactionOrigin',
        'order' => 'setOrder',
        'ipgTransactionId' => 'setIpgTransactionId',
        'allowPartialApproval' => 'setAllowPartialApproval'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'requestType' => 'getRequestType',
        'transactionAmount' => 'getTransactionAmount',
        'storeId' => 'getStoreId',
        'merchantTransactionId' => 'getMerchantTransactionId',
        'transactionOrigin' => 'getTransactionOrigin',
        'order' => 'getOrder',
        'ipgTransactionId' => 'getIpgTransactionId',
        'allowPartialApproval' => 'getAllowPartialApproval'
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
        $this->container['requestType'] = isset($data['requestType']) ? $data['requestType'] : null;
        $this->container['transactionAmount'] = isset($data['transactionAmount']) ? $data['transactionAmount'] : null;
        $this->container['storeId'] = isset($data['storeId']) ? $data['storeId'] : null;
        $this->container['merchantTransactionId'] = isset($data['merchantTransactionId']) ? $data['merchantTransactionId'] : null;
        $this->container['transactionOrigin'] = isset($data['transactionOrigin']) ? $data['transactionOrigin'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['ipgTransactionId'] = isset($data['ipgTransactionId']) ? $data['ipgTransactionId'] : null;
        $this->container['allowPartialApproval'] = isset($data['allowPartialApproval']) ? $data['allowPartialApproval'] : null;

        // Initialize discriminator property with the model name.
        $this->container['requestType'] = static::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['requestType'] === null) {
            $invalidProperties[] = "'requestType' can't be null";
        }
        if ($this->container['transactionAmount'] === null) {
            $invalidProperties[] = "'transactionAmount' can't be null";
        }
        if (!is_null($this->container['storeId']) && (mb_strlen($this->container['storeId']) > 20)) {
            $invalidProperties[] = "invalid value for 'storeId', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['merchantTransactionId']) && (mb_strlen($this->container['merchantTransactionId']) > 40)) {
            $invalidProperties[] = "invalid value for 'merchantTransactionId', the character length must be smaller than or equal to 40.";
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
     * Gets requestType
     *
     * @return string
     */
    public function getRequestType()
    {
        return $this->container['requestType'];
    }

    /**
     * Sets requestType
     *
     * @param string $requestType Object name of the primary transaction request.
     *
     * @return $this
     */
    public function setRequestType($requestType)
    {
        $this->container['requestType'] = $requestType;

        return $this;
    }

    /**
     * Gets transactionAmount
     *
     * @return \FirstData\FirstApi\Client\Model\Amount
     */
    public function getTransactionAmount()
    {
        return $this->container['transactionAmount'];
    }

    /**
     * Sets transactionAmount
     *
     * @param \FirstData\FirstApi\Client\Model\Amount $transactionAmount transactionAmount
     *
     * @return $this
     */
    public function setTransactionAmount($transactionAmount)
    {
        $this->container['transactionAmount'] = $transactionAmount;

        return $this;
    }

    /**
     * Gets storeId
     *
     * @return string|null
     */
    public function getStoreId()
    {
        return $this->container['storeId'];
    }

    /**
     * Sets storeId
     *
     * @param string|null $storeId An optional outlet ID for clients that support multiple stores in the same app.
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        if (!is_null($storeId) && (mb_strlen($storeId) > 20)) {
            throw new \InvalidArgumentException('invalid length for $storeId when calling PrimaryTransaction., must be smaller than or equal to 20.');
        }

        $this->container['storeId'] = $storeId;

        return $this;
    }

    /**
     * Gets merchantTransactionId
     *
     * @return string|null
     */
    public function getMerchantTransactionId()
    {
        return $this->container['merchantTransactionId'];
    }

    /**
     * Sets merchantTransactionId
     *
     * @param string|null $merchantTransactionId The unique merchant transaction ID from the request header, if supplied.
     *
     * @return $this
     */
    public function setMerchantTransactionId($merchantTransactionId)
    {
        if (!is_null($merchantTransactionId) && (mb_strlen($merchantTransactionId) > 40)) {
            throw new \InvalidArgumentException('invalid length for $merchantTransactionId when calling PrimaryTransaction., must be smaller than or equal to 40.');
        }

        $this->container['merchantTransactionId'] = $merchantTransactionId;

        return $this;
    }

    /**
     * Gets transactionOrigin
     *
     * @return \FirstData\FirstApi\Client\Model\TransactionOrigin|null
     */
    public function getTransactionOrigin()
    {
        return $this->container['transactionOrigin'];
    }

    /**
     * Sets transactionOrigin
     *
     * @param \FirstData\FirstApi\Client\Model\TransactionOrigin|null $transactionOrigin transactionOrigin
     *
     * @return $this
     */
    public function setTransactionOrigin($transactionOrigin)
    {
        $this->container['transactionOrigin'] = $transactionOrigin;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \FirstData\FirstApi\Client\Model\Order|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \FirstData\FirstApi\Client\Model\Order|null $order order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets ipgTransactionId
     *
     * @return int|null
     */
    public function getIpgTransactionId()
    {
        return $this->container['ipgTransactionId'];
    }

    /**
     * Sets ipgTransactionId
     *
     * @param int|null $ipgTransactionId The IPG transactionId to reference a payerauth for example.
     *
     * @return $this
     */
    public function setIpgTransactionId($ipgTransactionId)
    {
        $this->container['ipgTransactionId'] = $ipgTransactionId;

        return $this;
    }

    /**
     * Gets allowPartialApproval
     *
     * @return bool|null
     */
    public function getAllowPartialApproval()
    {
        return $this->container['allowPartialApproval'];
    }

    /**
     * Sets allowPartialApproval
     *
     * @param bool|null $allowPartialApproval Indicates if the particular transaction is a partial approval transaction, if supplied.
     *
     * @return $this
     */
    public function setAllowPartialApproval($allowPartialApproval)
    {
        $this->container['allowPartialApproval'] = $allowPartialApproval;

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


