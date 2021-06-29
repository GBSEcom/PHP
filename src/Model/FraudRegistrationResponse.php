<?php
/**
 * FraudRegistrationResponse
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
 * The version of the OpenAPI document: 21.3.0.20210608.001
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
 * FraudRegistrationResponse Class Doc Comment
 *
 * @category Class
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FraudRegistrationResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FraudRegistrationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'correlationId' => 'string',
        'transactionStatus' => 'string',
        'validationStatus' => 'string',
        'transactionType' => 'string',
        'fraudScore' => '\FirstData\FirstApi\Client\Model\FraudScore',
        'error' => '\FirstData\FirstApi\Client\Model\FraudRegistrationError'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'correlationId' => null,
        'transactionStatus' => null,
        'validationStatus' => null,
        'transactionType' => null,
        'fraudScore' => null,
        'error' => null
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
        'correlationId' => 'correlationId',
        'transactionStatus' => 'transactionStatus',
        'validationStatus' => 'validationStatus',
        'transactionType' => 'transactionType',
        'fraudScore' => 'fraudScore',
        'error' => 'Error'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'correlationId' => 'setCorrelationId',
        'transactionStatus' => 'setTransactionStatus',
        'validationStatus' => 'setValidationStatus',
        'transactionType' => 'setTransactionType',
        'fraudScore' => 'setFraudScore',
        'error' => 'setError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'correlationId' => 'getCorrelationId',
        'transactionStatus' => 'getTransactionStatus',
        'validationStatus' => 'getValidationStatus',
        'transactionType' => 'getTransactionType',
        'fraudScore' => 'getFraudScore',
        'error' => 'getError'
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

    const TRANSACTION_STATUS_SCORED_SUCCESSFULLY = 'Scored Successfully';
    const TRANSACTION_STATUS_NOT_PROCESSED = 'Not Processed';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionStatusAllowableValues()
    {
        return [
            self::TRANSACTION_STATUS_SCORED_SUCCESSFULLY,
            self::TRANSACTION_STATUS_NOT_PROCESSED,
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
        $this->container['correlationId'] = isset($data['correlationId']) ? $data['correlationId'] : null;
        $this->container['transactionStatus'] = isset($data['transactionStatus']) ? $data['transactionStatus'] : null;
        $this->container['validationStatus'] = isset($data['validationStatus']) ? $data['validationStatus'] : null;
        $this->container['transactionType'] = isset($data['transactionType']) ? $data['transactionType'] : null;
        $this->container['fraudScore'] = isset($data['fraudScore']) ? $data['fraudScore'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTransactionStatusAllowableValues();
        if (!is_null($this->container['transactionStatus']) && !in_array($this->container['transactionStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transactionStatus', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets correlationId
     *
     * @return string|null
     */
    public function getCorrelationId()
    {
        return $this->container['correlationId'];
    }

    /**
     * Sets correlationId
     *
     * @param string|null $correlationId The value used to track the transaction.
     *
     * @return $this
     */
    public function setCorrelationId($correlationId)
    {
        $this->container['correlationId'] = $correlationId;

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
     * @param string|null $transactionStatus Status of the transaction. Valid values are 'Not Processed' and 'Scored successfully'
     *
     * @return $this
     */
    public function setTransactionStatus($transactionStatus)
    {
        $allowedValues = $this->getTransactionStatusAllowableValues();
        if (!is_null($transactionStatus) && !in_array($transactionStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'transactionStatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transactionStatus'] = $transactionStatus;

        return $this;
    }

    /**
     * Gets validationStatus
     *
     * @return string|null
     */
    public function getValidationStatus()
    {
        return $this->container['validationStatus'];
    }

    /**
     * Sets validationStatus
     *
     * @param string|null $validationStatus If status returned is \"failure\", input validation errors occurred. Please refer to the \"Errors Section\" for more info. Valid values are 'success' and 'failed'.
     *
     * @return $this
     */
    public function setValidationStatus($validationStatus)
    {
        $this->container['validationStatus'] = $validationStatus;

        return $this;
    }

    /**
     * Gets transactionType
     *
     * @return string|null
     */
    public function getTransactionType()
    {
        return $this->container['transactionType'];
    }

    /**
     * Sets transactionType
     *
     * @param string|null $transactionType The transactionType provided in request.
     *
     * @return $this
     */
    public function setTransactionType($transactionType)
    {
        $this->container['transactionType'] = $transactionType;

        return $this;
    }

    /**
     * Gets fraudScore
     *
     * @return \FirstData\FirstApi\Client\Model\FraudScore|null
     */
    public function getFraudScore()
    {
        return $this->container['fraudScore'];
    }

    /**
     * Sets fraudScore
     *
     * @param \FirstData\FirstApi\Client\Model\FraudScore|null $fraudScore fraudScore
     *
     * @return $this
     */
    public function setFraudScore($fraudScore)
    {
        $this->container['fraudScore'] = $fraudScore;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \FirstData\FirstApi\Client\Model\FraudRegistrationError|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \FirstData\FirstApi\Client\Model\FraudRegistrationError|null $error error
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

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


