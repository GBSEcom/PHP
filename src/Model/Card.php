<?php
/**
 * Card
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
 * Card Class Doc Comment
 *
 * @category Class
 * @description Properties for the payment method.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Card implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Card';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'taToken' => 'string',
        'taTokenKey' => 'string',
        'cardholderName' => 'string',
        'cardNumber' => 'string',
        'expDate' => 'string',
        'cvv' => 'string',
        'issuer' => 'string',
        'cardReissuedNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'taToken' => null,
        'taTokenKey' => null,
        'cardholderName' => null,
        'cardNumber' => null,
        'expDate' => null,
        'cvv' => null,
        'issuer' => null,
        'cardReissuedNumber' => null
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
        'taToken' => 'taToken',
        'taTokenKey' => 'taTokenKey',
        'cardholderName' => 'cardholderName',
        'cardNumber' => 'cardNumber',
        'expDate' => 'expDate',
        'cvv' => 'cvv',
        'issuer' => 'issuer',
        'cardReissuedNumber' => 'cardReissuedNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'taToken' => 'setTaToken',
        'taTokenKey' => 'setTaTokenKey',
        'cardholderName' => 'setCardholderName',
        'cardNumber' => 'setCardNumber',
        'expDate' => 'setExpDate',
        'cvv' => 'setCvv',
        'issuer' => 'setIssuer',
        'cardReissuedNumber' => 'setCardReissuedNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'taToken' => 'getTaToken',
        'taTokenKey' => 'getTaTokenKey',
        'cardholderName' => 'getCardholderName',
        'cardNumber' => 'getCardNumber',
        'expDate' => 'getExpDate',
        'cvv' => 'getCvv',
        'issuer' => 'getIssuer',
        'cardReissuedNumber' => 'getCardReissuedNumber'
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
        $this->container['taToken'] = isset($data['taToken']) ? $data['taToken'] : null;
        $this->container['taTokenKey'] = isset($data['taTokenKey']) ? $data['taTokenKey'] : null;
        $this->container['cardholderName'] = isset($data['cardholderName']) ? $data['cardholderName'] : null;
        $this->container['cardNumber'] = isset($data['cardNumber']) ? $data['cardNumber'] : null;
        $this->container['expDate'] = isset($data['expDate']) ? $data['expDate'] : null;
        $this->container['cvv'] = isset($data['cvv']) ? $data['cvv'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['cardReissuedNumber'] = isset($data['cardReissuedNumber']) ? $data['cardReissuedNumber'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets taToken
     *
     * @return string|null
     */
    public function getTaToken()
    {
        return $this->container['taToken'];
    }

    /**
     * Sets taToken
     *
     * @param string|null $taToken TransArmor token value. Either the token fields or card number field must contain a value.
     *
     * @return $this
     */
    public function setTaToken($taToken)
    {
        $this->container['taToken'] = $taToken;

        return $this;
    }

    /**
     * Gets taTokenKey
     *
     * @return string|null
     */
    public function getTaTokenKey()
    {
        return $this->container['taTokenKey'];
    }

    /**
     * Sets taTokenKey
     *
     * @param string|null $taTokenKey TransArmor token key to identify the merchant.
     *
     * @return $this
     */
    public function setTaTokenKey($taTokenKey)
    {
        $this->container['taTokenKey'] = $taTokenKey;

        return $this;
    }

    /**
     * Gets cardholderName
     *
     * @return string|null
     */
    public function getCardholderName()
    {
        return $this->container['cardholderName'];
    }

    /**
     * Sets cardholderName
     *
     * @param string|null $cardholderName The cardholder name as it appears on the card.
     *
     * @return $this
     */
    public function setCardholderName($cardholderName)
    {
        $this->container['cardholderName'] = $cardholderName;

        return $this;
    }

    /**
     * Gets cardNumber
     *
     * @return string|null
     */
    public function getCardNumber()
    {
        return $this->container['cardNumber'];
    }

    /**
     * Sets cardNumber
     *
     * @param string|null $cardNumber Use this field to send clear PAN or tokens other than TransArmor Token.
     *
     * @return $this
     */
    public function setCardNumber($cardNumber)
    {
        $this->container['cardNumber'] = $cardNumber;

        return $this;
    }

    /**
     * Gets expDate
     *
     * @return string|null
     */
    public function getExpDate()
    {
        return $this->container['expDate'];
    }

    /**
     * Sets expDate
     *
     * @param string|null $expDate Payment method expiration date. Format is MMYYYY.
     *
     * @return $this
     */
    public function setExpDate($expDate)
    {
        $this->container['expDate'] = $expDate;

        return $this;
    }

    /**
     * Gets cvv
     *
     * @return string|null
     */
    public function getCvv()
    {
        return $this->container['cvv'];
    }

    /**
     * Sets cvv
     *
     * @param string|null $cvv CVV present indicator.
     *
     * @return $this
     */
    public function setCvv($cvv)
    {
        $this->container['cvv'] = $cvv;

        return $this;
    }

    /**
     * Gets issuer
     *
     * @return string|null
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     *
     * @param string|null $issuer The company (usually a bank) that issued the card.
     *
     * @return $this
     */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;

        return $this;
    }

    /**
     * Gets cardReissuedNumber
     *
     * @return string|null
     */
    public function getCardReissuedNumber()
    {
        return $this->container['cardReissuedNumber'];
    }

    /**
     * Sets cardReissuedNumber
     *
     * @param string|null $cardReissuedNumber A number that distinguishes between two plastic cards with the same card number in the event of the card being re-issued.
     *
     * @return $this
     */
    public function setCardReissuedNumber($cardReissuedNumber)
    {
        $this->container['cardReissuedNumber'] = $cardReissuedNumber;

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


