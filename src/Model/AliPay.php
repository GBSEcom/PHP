<?php
/**
 * AliPay
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
 * AliPay Class Doc Comment
 *
 * @category Class
 * @description The payment object for AliPay transactions. Use this to populate AliPay payment method details.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AliPay implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AliPay';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'paymentDataType' => 'string',
        'paymentData' => 'string',
        'orderTitle' => 'string',
        'orderDetails' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'paymentDataType' => null,
        'paymentData' => null,
        'orderTitle' => null,
        'orderDetails' => null
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
        'paymentDataType' => 'paymentDataType',
        'paymentData' => 'paymentData',
        'orderTitle' => 'orderTitle',
        'orderDetails' => 'orderDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'paymentDataType' => 'setPaymentDataType',
        'paymentData' => 'setPaymentData',
        'orderTitle' => 'setOrderTitle',
        'orderDetails' => 'setOrderDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'paymentDataType' => 'getPaymentDataType',
        'paymentData' => 'getPaymentData',
        'orderTitle' => 'getOrderTitle',
        'orderDetails' => 'getOrderDetails'
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

    const PAYMENT_DATA_TYPE_BARCODE = 'BARCODE';
    const PAYMENT_DATA_TYPE_QRCODE = 'QRCODE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentDataTypeAllowableValues()
    {
        return [
            self::PAYMENT_DATA_TYPE_BARCODE,
            self::PAYMENT_DATA_TYPE_QRCODE,
        ];
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
        $this->container['paymentDataType'] = isset($data['paymentDataType']) ? $data['paymentDataType'] : null;
        $this->container['paymentData'] = isset($data['paymentData']) ? $data['paymentData'] : null;
        $this->container['orderTitle'] = isset($data['orderTitle']) ? $data['orderTitle'] : null;
        $this->container['orderDetails'] = isset($data['orderDetails']) ? $data['orderDetails'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['paymentDataType'] === null) {
            $invalidProperties[] = "'paymentDataType' can't be null";
        }
        $allowedValues = $this->getPaymentDataTypeAllowableValues();
        if (!is_null($this->container['paymentDataType']) && !in_array($this->container['paymentDataType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'paymentDataType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['paymentData'] === null) {
            $invalidProperties[] = "'paymentData' can't be null";
        }
        if ((mb_strlen($this->container['paymentData']) > 100)) {
            $invalidProperties[] = "invalid value for 'paymentData', the character length must be smaller than or equal to 100.";
        }

        if (!preg_match("/^(?!\\s*$).+/", $this->container['paymentData'])) {
            $invalidProperties[] = "invalid value for 'paymentData', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        if ($this->container['orderTitle'] === null) {
            $invalidProperties[] = "'orderTitle' can't be null";
        }
        if ((mb_strlen($this->container['orderTitle']) > 100)) {
            $invalidProperties[] = "invalid value for 'orderTitle', the character length must be smaller than or equal to 100.";
        }

        if (!preg_match("/^(?!\\s*$).+/", $this->container['orderTitle'])) {
            $invalidProperties[] = "invalid value for 'orderTitle', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        if ($this->container['orderDetails'] === null) {
            $invalidProperties[] = "'orderDetails' can't be null";
        }
        if ((mb_strlen($this->container['orderDetails']) > 1024)) {
            $invalidProperties[] = "invalid value for 'orderDetails', the character length must be smaller than or equal to 1024.";
        }

        if (!preg_match("/^(?!\\s*$).+/", $this->container['orderDetails'])) {
            $invalidProperties[] = "invalid value for 'orderDetails', must be conform to the pattern /^(?!\\s*$).+/.";
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
     * Gets paymentDataType
     *
     * @return string
     */
    public function getPaymentDataType()
    {
        return $this->container['paymentDataType'];
    }

    /**
     * Sets paymentDataType
     *
     * @param string $paymentDataType Use this to indicate the type of machine-readable payment data for scanning.
     *
     * @return $this
     */
    public function setPaymentDataType($paymentDataType)
    {
        $allowedValues = $this->getPaymentDataTypeAllowableValues();
        if (!in_array($paymentDataType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'paymentDataType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['paymentDataType'] = $paymentDataType;

        return $this;
    }

    /**
     * Gets paymentData
     *
     * @return string
     */
    public function getPaymentData()
    {
        return $this->container['paymentData'];
    }

    /**
     * Sets paymentData
     *
     * @param string $paymentData Use this to send payment-related information, such as customer identity ID.
     *
     * @return $this
     */
    public function setPaymentData($paymentData)
    {
        if ((mb_strlen($paymentData) > 100)) {
            throw new \InvalidArgumentException('invalid length for $paymentData when calling AliPay., must be smaller than or equal to 100.');
        }
        if ((!preg_match("/^(?!\\s*$).+/", $paymentData))) {
            throw new \InvalidArgumentException("invalid value for $paymentData when calling AliPay., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['paymentData'] = $paymentData;

        return $this;
    }

    /**
     * Gets orderTitle
     *
     * @return string
     */
    public function getOrderTitle()
    {
        return $this->container['orderTitle'];
    }

    /**
     * Sets orderTitle
     *
     * @param string $orderTitle Use this to send an order title that shows up in the statement.
     *
     * @return $this
     */
    public function setOrderTitle($orderTitle)
    {
        if ((mb_strlen($orderTitle) > 100)) {
            throw new \InvalidArgumentException('invalid length for $orderTitle when calling AliPay., must be smaller than or equal to 100.');
        }
        if ((!preg_match("/^(?!\\s*$).+/", $orderTitle))) {
            throw new \InvalidArgumentException("invalid value for $orderTitle when calling AliPay., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['orderTitle'] = $orderTitle;

        return $this;
    }

    /**
     * Gets orderDetails
     *
     * @return string
     */
    public function getOrderDetails()
    {
        return $this->container['orderDetails'];
    }

    /**
     * Sets orderDetails
     *
     * @param string $orderDetails Use this to send order details that show up in the statement.
     *
     * @return $this
     */
    public function setOrderDetails($orderDetails)
    {
        if ((mb_strlen($orderDetails) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $orderDetails when calling AliPay., must be smaller than or equal to 1024.');
        }
        if ((!preg_match("/^(?!\\s*$).+/", $orderDetails))) {
            throw new \InvalidArgumentException("invalid value for $orderDetails when calling AliPay., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['orderDetails'] = $orderDetails;

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


