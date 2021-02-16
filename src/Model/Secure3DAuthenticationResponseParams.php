<?php
/**
 * Secure3DAuthenticationResponseParams
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
 * Secure3DAuthenticationResponseParams Class Doc Comment
 *
 * @category Class
 * @description Additional parameters for authentication redirect.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Secure3DAuthenticationResponseParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Secure3DAuthenticationResponse_params';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payerAuthenticationRequest' => 'string',
        'termURL' => 'string',
        'merchantData' => 'string',
        'acsURL' => 'string',
        'cReq' => 'string',
        'sessionData' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'payerAuthenticationRequest' => null,
        'termURL' => null,
        'merchantData' => null,
        'acsURL' => null,
        'cReq' => null,
        'sessionData' => null
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
        'payerAuthenticationRequest' => 'payerAuthenticationRequest',
        'termURL' => 'termURL',
        'merchantData' => 'merchantData',
        'acsURL' => 'acsURL',
        'cReq' => 'cReq',
        'sessionData' => 'sessionData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payerAuthenticationRequest' => 'setPayerAuthenticationRequest',
        'termURL' => 'setTermURL',
        'merchantData' => 'setMerchantData',
        'acsURL' => 'setAcsURL',
        'cReq' => 'setCReq',
        'sessionData' => 'setSessionData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payerAuthenticationRequest' => 'getPayerAuthenticationRequest',
        'termURL' => 'getTermURL',
        'merchantData' => 'getMerchantData',
        'acsURL' => 'getAcsURL',
        'cReq' => 'getCReq',
        'sessionData' => 'getSessionData'
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
        $this->container['payerAuthenticationRequest'] = isset($data['payerAuthenticationRequest']) ? $data['payerAuthenticationRequest'] : null;
        $this->container['termURL'] = isset($data['termURL']) ? $data['termURL'] : null;
        $this->container['merchantData'] = isset($data['merchantData']) ? $data['merchantData'] : null;
        $this->container['acsURL'] = isset($data['acsURL']) ? $data['acsURL'] : null;
        $this->container['cReq'] = isset($data['cReq']) ? $data['cReq'] : null;
        $this->container['sessionData'] = isset($data['sessionData']) ? $data['sessionData'] : null;
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
     * Gets payerAuthenticationRequest
     *
     * @return string|null
     */
    public function getPayerAuthenticationRequest()
    {
        return $this->container['payerAuthenticationRequest'];
    }

    /**
     * Sets payerAuthenticationRequest
     *
     * @param string|null $payerAuthenticationRequest Message sent from merchant server to authenticate the cardholder.
     *
     * @return $this
     */
    public function setPayerAuthenticationRequest($payerAuthenticationRequest)
    {
        $this->container['payerAuthenticationRequest'] = $payerAuthenticationRequest;

        return $this;
    }

    /**
     * Gets termURL
     *
     * @return string|null
     */
    public function getTermURL()
    {
        return $this->container['termURL'];
    }

    /**
     * Sets termURL
     *
     * @param string|null $termURL Terminal URL for processing request.
     *
     * @return $this
     */
    public function setTermURL($termURL)
    {
        $this->container['termURL'] = $termURL;

        return $this;
    }

    /**
     * Gets merchantData
     *
     * @return string|null
     */
    public function getMerchantData()
    {
        return $this->container['merchantData'];
    }

    /**
     * Sets merchantData
     *
     * @param string|null $merchantData Formatted string encoding transaction time, order ID, and return URL data.
     *
     * @return $this
     */
    public function setMerchantData($merchantData)
    {
        $this->container['merchantData'] = $merchantData;

        return $this;
    }

    /**
     * Gets acsURL
     *
     * @return string|null
     */
    public function getAcsURL()
    {
        return $this->container['acsURL'];
    }

    /**
     * Sets acsURL
     *
     * @param string|null $acsURL The URL for the authentication redirect for the merchant.
     *
     * @return $this
     */
    public function setAcsURL($acsURL)
    {
        $this->container['acsURL'] = $acsURL;

        return $this;
    }

    /**
     * Gets cReq
     *
     * @return string|null
     */
    public function getCReq()
    {
        return $this->container['cReq'];
    }

    /**
     * Sets cReq
     *
     * @param string|null $cReq The CReq message initiates cardholder interaction in a 3DS 2.x challenge flow and carries authentication data from the cardholder.
     *
     * @return $this
     */
    public function setCReq($cReq)
    {
        $this->container['cReq'] = $cReq;

        return $this;
    }

    /**
     * Gets sessionData
     *
     * @return string|null
     */
    public function getSessionData()
    {
        return $this->container['sessionData'];
    }

    /**
     * Sets sessionData
     *
     * @param string|null $sessionData Customer web browser session data.
     *
     * @return $this
     */
    public function setSessionData($sessionData)
    {
        $this->container['sessionData'] = $sessionData;

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


