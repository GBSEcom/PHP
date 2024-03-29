<?php
/**
 * PostAuthTransaction
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
use \FirstData\FirstApi\Client\ObjectSerializer;

/**
 * PostAuthTransaction Class Doc Comment
 *
 * @category Class
 * @description Request to perform post auth transaction.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PostAuthTransaction extends SecondaryTransaction 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PostAuthTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transactionAmount' => '\FirstData\FirstApi\Client\Model\Amount',
        'transactionOrigin' => '\FirstData\FirstApi\Client\Model\TransactionOrigin',
        'splitShipment' => '\FirstData\FirstApi\Client\Model\SplitShipment',
        'softDescriptor' => '\FirstData\FirstApi\Client\Model\SoftDescriptor'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'transactionAmount' => null,
        'transactionOrigin' => null,
        'splitShipment' => null,
        'softDescriptor' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'transactionAmount' => 'transactionAmount',
        'transactionOrigin' => 'transactionOrigin',
        'splitShipment' => 'splitShipment',
        'softDescriptor' => 'softDescriptor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transactionAmount' => 'setTransactionAmount',
        'transactionOrigin' => 'setTransactionOrigin',
        'splitShipment' => 'setSplitShipment',
        'softDescriptor' => 'setSoftDescriptor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transactionAmount' => 'getTransactionAmount',
        'transactionOrigin' => 'getTransactionOrigin',
        'splitShipment' => 'getSplitShipment',
        'softDescriptor' => 'getSoftDescriptor'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['transactionAmount'] = isset($data['transactionAmount']) ? $data['transactionAmount'] : null;
        $this->container['transactionOrigin'] = isset($data['transactionOrigin']) ? $data['transactionOrigin'] : null;
        $this->container['splitShipment'] = isset($data['splitShipment']) ? $data['splitShipment'] : null;
        $this->container['softDescriptor'] = isset($data['softDescriptor']) ? $data['softDescriptor'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['transactionAmount'] === null) {
            $invalidProperties[] = "'transactionAmount' can't be null";
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
     * Gets splitShipment
     *
     * @return \FirstData\FirstApi\Client\Model\SplitShipment|null
     */
    public function getSplitShipment()
    {
        return $this->container['splitShipment'];
    }

    /**
     * Sets splitShipment
     *
     * @param \FirstData\FirstApi\Client\Model\SplitShipment|null $splitShipment splitShipment
     *
     * @return $this
     */
    public function setSplitShipment($splitShipment)
    {
        $this->container['splitShipment'] = $splitShipment;

        return $this;
    }

    /**
     * Gets softDescriptor
     *
     * @return \FirstData\FirstApi\Client\Model\SoftDescriptor|null
     */
    public function getSoftDescriptor()
    {
        return $this->container['softDescriptor'];
    }

    /**
     * Sets softDescriptor
     *
     * @param \FirstData\FirstApi\Client\Model\SoftDescriptor|null $softDescriptor softDescriptor
     *
     * @return $this
     */
    public function setSoftDescriptor($softDescriptor)
    {
        $this->container['softDescriptor'] = $softDescriptor;

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


