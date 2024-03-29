<?php
/**
 * InstallmentOptions
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
 * InstallmentOptions Class Doc Comment
 *
 * @category Class
 * @description Indicates that the total sum payable is divided for payment at successive fixed times.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InstallmentOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InstallmentOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'numberOfInstallments' => 'int',
        'installmentsInterest' => 'bool',
        'installmentDelayMonths' => 'int',
        'recurringType' => 'string',
        'merchantAdviceCodeSupported' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'numberOfInstallments' => 'int32',
        'installmentsInterest' => null,
        'installmentDelayMonths' => 'int32',
        'recurringType' => null,
        'merchantAdviceCodeSupported' => null
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
        'numberOfInstallments' => 'numberOfInstallments',
        'installmentsInterest' => 'installmentsInterest',
        'installmentDelayMonths' => 'installmentDelayMonths',
        'recurringType' => 'recurringType',
        'merchantAdviceCodeSupported' => 'merchantAdviceCodeSupported'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'numberOfInstallments' => 'setNumberOfInstallments',
        'installmentsInterest' => 'setInstallmentsInterest',
        'installmentDelayMonths' => 'setInstallmentDelayMonths',
        'recurringType' => 'setRecurringType',
        'merchantAdviceCodeSupported' => 'setMerchantAdviceCodeSupported'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'numberOfInstallments' => 'getNumberOfInstallments',
        'installmentsInterest' => 'getInstallmentsInterest',
        'installmentDelayMonths' => 'getInstallmentDelayMonths',
        'recurringType' => 'getRecurringType',
        'merchantAdviceCodeSupported' => 'getMerchantAdviceCodeSupported'
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

    const RECURRING_TYPE_FIRST = 'FIRST';
    const RECURRING_TYPE_REPEAT = 'REPEAT';
    const RECURRING_TYPE_STANDING_INSTRUCTION = 'STANDING_INSTRUCTION';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecurringTypeAllowableValues()
    {
        return [
            self::RECURRING_TYPE_FIRST,
            self::RECURRING_TYPE_REPEAT,
            self::RECURRING_TYPE_STANDING_INSTRUCTION,
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
        $this->container['numberOfInstallments'] = isset($data['numberOfInstallments']) ? $data['numberOfInstallments'] : null;
        $this->container['installmentsInterest'] = isset($data['installmentsInterest']) ? $data['installmentsInterest'] : null;
        $this->container['installmentDelayMonths'] = isset($data['installmentDelayMonths']) ? $data['installmentDelayMonths'] : null;
        $this->container['recurringType'] = isset($data['recurringType']) ? $data['recurringType'] : null;
        $this->container['merchantAdviceCodeSupported'] = isset($data['merchantAdviceCodeSupported']) ? $data['merchantAdviceCodeSupported'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['numberOfInstallments']) && ($this->container['numberOfInstallments'] > 99)) {
            $invalidProperties[] = "invalid value for 'numberOfInstallments', must be smaller than or equal to 99.";
        }

        if (!is_null($this->container['numberOfInstallments']) && ($this->container['numberOfInstallments'] < 1)) {
            $invalidProperties[] = "invalid value for 'numberOfInstallments', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['installmentDelayMonths']) && ($this->container['installmentDelayMonths'] > 99)) {
            $invalidProperties[] = "invalid value for 'installmentDelayMonths', must be smaller than or equal to 99.";
        }

        if (!is_null($this->container['installmentDelayMonths']) && ($this->container['installmentDelayMonths'] < 1)) {
            $invalidProperties[] = "invalid value for 'installmentDelayMonths', must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getRecurringTypeAllowableValues();
        if (!is_null($this->container['recurringType']) && !in_array($this->container['recurringType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'recurringType', must be one of '%s'",
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
     * Gets numberOfInstallments
     *
     * @return int|null
     */
    public function getNumberOfInstallments()
    {
        return $this->container['numberOfInstallments'];
    }

    /**
     * Sets numberOfInstallments
     *
     * @param int|null $numberOfInstallments Number of installments for a sale transaction if the customer pays the total amount in multiple transactions.
     *
     * @return $this
     */
    public function setNumberOfInstallments($numberOfInstallments)
    {

        if (!is_null($numberOfInstallments) && ($numberOfInstallments > 99)) {
            throw new \InvalidArgumentException('invalid value for $numberOfInstallments when calling InstallmentOptions., must be smaller than or equal to 99.');
        }
        if (!is_null($numberOfInstallments) && ($numberOfInstallments < 1)) {
            throw new \InvalidArgumentException('invalid value for $numberOfInstallments when calling InstallmentOptions., must be bigger than or equal to 1.');
        }

        $this->container['numberOfInstallments'] = $numberOfInstallments;

        return $this;
    }

    /**
     * Gets installmentsInterest
     *
     * @return bool|null
     */
    public function getInstallmentsInterest()
    {
        return $this->container['installmentsInterest'];
    }

    /**
     * Sets installmentsInterest
     *
     * @param bool|null $installmentsInterest Indicates whether the installment interest amount has been applied.
     *
     * @return $this
     */
    public function setInstallmentsInterest($installmentsInterest)
    {
        $this->container['installmentsInterest'] = $installmentsInterest;

        return $this;
    }

    /**
     * Gets installmentDelayMonths
     *
     * @return int|null
     */
    public function getInstallmentDelayMonths()
    {
        return $this->container['installmentDelayMonths'];
    }

    /**
     * Sets installmentDelayMonths
     *
     * @param int|null $installmentDelayMonths The number of months the first installment payment will be delayed.
     *
     * @return $this
     */
    public function setInstallmentDelayMonths($installmentDelayMonths)
    {

        if (!is_null($installmentDelayMonths) && ($installmentDelayMonths > 99)) {
            throw new \InvalidArgumentException('invalid value for $installmentDelayMonths when calling InstallmentOptions., must be smaller than or equal to 99.');
        }
        if (!is_null($installmentDelayMonths) && ($installmentDelayMonths < 1)) {
            throw new \InvalidArgumentException('invalid value for $installmentDelayMonths when calling InstallmentOptions., must be bigger than or equal to 1.');
        }

        $this->container['installmentDelayMonths'] = $installmentDelayMonths;

        return $this;
    }

    /**
     * Gets recurringType
     *
     * @return string|null
     */
    public function getRecurringType()
    {
        return $this->container['recurringType'];
    }

    /**
     * Sets recurringType
     *
     * @param string|null $recurringType The type of recurring payment.
     *
     * @return $this
     */
    public function setRecurringType($recurringType)
    {
        $allowedValues = $this->getRecurringTypeAllowableValues();
        if (!is_null($recurringType) && !in_array($recurringType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'recurringType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['recurringType'] = $recurringType;

        return $this;
    }

    /**
     * Gets merchantAdviceCodeSupported
     *
     * @return bool|null
     */
    public function getMerchantAdviceCodeSupported()
    {
        return $this->container['merchantAdviceCodeSupported'];
    }

    /**
     * Sets merchantAdviceCodeSupported
     *
     * @param bool|null $merchantAdviceCodeSupported Indicates if the merchant supports merchant advice code (MAC) in order to receive table 55 code for a declined recurring transaction.
     *
     * @return $this
     */
    public function setMerchantAdviceCodeSupported($merchantAdviceCodeSupported)
    {
        $this->container['merchantAdviceCodeSupported'] = $merchantAdviceCodeSupported;

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


