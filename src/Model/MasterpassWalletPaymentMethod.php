<?php
/**
 * MasterpassWalletPaymentMethod
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
 * MasterpassWalletPaymentMethod Class Doc Comment
 *
 * @category Class
 * @description Masterpass Wallet payment method information.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MasterpassWalletPaymentMethod extends WalletPaymentMethod 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MasterpassWalletPaymentMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'walletId' => 'string',
        'paymentCard' => '\FirstData\FirstApi\Client\Model\PaymentCard'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'walletId' => null,
        'paymentCard' => null
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
        'walletId' => 'walletId',
        'paymentCard' => 'paymentCard'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'walletId' => 'setWalletId',
        'paymentCard' => 'setPaymentCard'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'walletId' => 'getWalletId',
        'paymentCard' => 'getPaymentCard'
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

        $this->container['walletId'] = isset($data['walletId']) ? $data['walletId'] : null;
        $this->container['paymentCard'] = isset($data['paymentCard']) ? $data['paymentCard'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['walletId'] === null) {
            $invalidProperties[] = "'walletId' can't be null";
        }
        if ((mb_strlen($this->container['walletId']) > 3)) {
            $invalidProperties[] = "invalid value for 'walletId', the character length must be smaller than or equal to 3.";
        }

        if (!preg_match("/^\\S$|^\\S.*\\S$/", $this->container['walletId'])) {
            $invalidProperties[] = "invalid value for 'walletId', must be conform to the pattern /^\\S$|^\\S.*\\S$/.";
        }

        if ($this->container['paymentCard'] === null) {
            $invalidProperties[] = "'paymentCard' can't be null";
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
     * Gets walletId
     *
     * @return string
     */
    public function getWalletId()
    {
        return $this->container['walletId'];
    }

    /**
     * Sets walletId
     *
     * @param string $walletId Masterpass Wallet ID.
     *
     * @return $this
     */
    public function setWalletId($walletId)
    {
        if ((mb_strlen($walletId) > 3)) {
            throw new \InvalidArgumentException('invalid length for $walletId when calling MasterpassWalletPaymentMethod., must be smaller than or equal to 3.');
        }
        if ((!preg_match("/^\\S$|^\\S.*\\S$/", $walletId))) {
            throw new \InvalidArgumentException("invalid value for $walletId when calling MasterpassWalletPaymentMethod., must conform to the pattern /^\\S$|^\\S.*\\S$/.");
        }

        $this->container['walletId'] = $walletId;

        return $this;
    }

    /**
     * Gets paymentCard
     *
     * @return \FirstData\FirstApi\Client\Model\PaymentCard
     */
    public function getPaymentCard()
    {
        return $this->container['paymentCard'];
    }

    /**
     * Sets paymentCard
     *
     * @param \FirstData\FirstApi\Client\Model\PaymentCard $paymentCard paymentCard
     *
     * @return $this
     */
    public function setPaymentCard($paymentCard)
    {
        $this->container['paymentCard'] = $paymentCard;

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


