<?php
/**
 * FraudSettingsResponse
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
 * FraudSettingsResponse Class Doc Comment
 *
 * @category Class
 * @description Response from fraud settings request.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FraudSettingsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FraudSettingsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'clientRequestId' => 'string',
        'apiTraceId' => 'string',
        'responseType' => '\FirstData\FirstApi\Client\Model\ResponseType',
        'storeId' => 'string',
        'blockedCardNumbers' => '\FirstData\FirstApi\Client\Model\BlockedCardNumber[]',
        'blockedNames' => 'string[]',
        'blockedDomainNames' => 'string[]',
        'blockedIpOrClassCAddresses' => 'string[]',
        'maximumPurchaseAmount' => '\FirstData\FirstApi\Client\Model\MaximumPurchaseAmount[]',
        'lockoutTime' => '\FirstData\FirstApi\Client\Model\LockoutTime',
        'countryProfile' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'clientRequestId' => null,
        'apiTraceId' => null,
        'responseType' => null,
        'storeId' => null,
        'blockedCardNumbers' => null,
        'blockedNames' => null,
        'blockedDomainNames' => null,
        'blockedIpOrClassCAddresses' => null,
        'maximumPurchaseAmount' => null,
        'lockoutTime' => null,
        'countryProfile' => null
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
        'clientRequestId' => 'clientRequestId',
        'apiTraceId' => 'apiTraceId',
        'responseType' => 'responseType',
        'storeId' => 'storeId',
        'blockedCardNumbers' => 'blockedCardNumbers',
        'blockedNames' => 'blockedNames',
        'blockedDomainNames' => 'blockedDomainNames',
        'blockedIpOrClassCAddresses' => 'blockedIpOrClassCAddresses',
        'maximumPurchaseAmount' => 'maximumPurchaseAmount',
        'lockoutTime' => 'lockoutTime',
        'countryProfile' => 'countryProfile'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clientRequestId' => 'setClientRequestId',
        'apiTraceId' => 'setApiTraceId',
        'responseType' => 'setResponseType',
        'storeId' => 'setStoreId',
        'blockedCardNumbers' => 'setBlockedCardNumbers',
        'blockedNames' => 'setBlockedNames',
        'blockedDomainNames' => 'setBlockedDomainNames',
        'blockedIpOrClassCAddresses' => 'setBlockedIpOrClassCAddresses',
        'maximumPurchaseAmount' => 'setMaximumPurchaseAmount',
        'lockoutTime' => 'setLockoutTime',
        'countryProfile' => 'setCountryProfile'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clientRequestId' => 'getClientRequestId',
        'apiTraceId' => 'getApiTraceId',
        'responseType' => 'getResponseType',
        'storeId' => 'getStoreId',
        'blockedCardNumbers' => 'getBlockedCardNumbers',
        'blockedNames' => 'getBlockedNames',
        'blockedDomainNames' => 'getBlockedDomainNames',
        'blockedIpOrClassCAddresses' => 'getBlockedIpOrClassCAddresses',
        'maximumPurchaseAmount' => 'getMaximumPurchaseAmount',
        'lockoutTime' => 'getLockoutTime',
        'countryProfile' => 'getCountryProfile'
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
        $this->container['clientRequestId'] = isset($data['clientRequestId']) ? $data['clientRequestId'] : null;
        $this->container['apiTraceId'] = isset($data['apiTraceId']) ? $data['apiTraceId'] : null;
        $this->container['responseType'] = isset($data['responseType']) ? $data['responseType'] : null;
        $this->container['storeId'] = isset($data['storeId']) ? $data['storeId'] : null;
        $this->container['blockedCardNumbers'] = isset($data['blockedCardNumbers']) ? $data['blockedCardNumbers'] : null;
        $this->container['blockedNames'] = isset($data['blockedNames']) ? $data['blockedNames'] : null;
        $this->container['blockedDomainNames'] = isset($data['blockedDomainNames']) ? $data['blockedDomainNames'] : null;
        $this->container['blockedIpOrClassCAddresses'] = isset($data['blockedIpOrClassCAddresses']) ? $data['blockedIpOrClassCAddresses'] : null;
        $this->container['maximumPurchaseAmount'] = isset($data['maximumPurchaseAmount']) ? $data['maximumPurchaseAmount'] : null;
        $this->container['lockoutTime'] = isset($data['lockoutTime']) ? $data['lockoutTime'] : null;
        $this->container['countryProfile'] = isset($data['countryProfile']) ? $data['countryProfile'] : null;
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
     * Gets clientRequestId
     *
     * @return string|null
     */
    public function getClientRequestId()
    {
        return $this->container['clientRequestId'];
    }

    /**
     * Sets clientRequestId
     *
     * @param string|null $clientRequestId Echoes back the value in the request header for tracking.
     *
     * @return $this
     */
    public function setClientRequestId($clientRequestId)
    {
        $this->container['clientRequestId'] = $clientRequestId;

        return $this;
    }

    /**
     * Gets apiTraceId
     *
     * @return string|null
     */
    public function getApiTraceId()
    {
        return $this->container['apiTraceId'];
    }

    /**
     * Sets apiTraceId
     *
     * @param string|null $apiTraceId Request identifier in API, can be used to request logs from the support team.
     *
     * @return $this
     */
    public function setApiTraceId($apiTraceId)
    {
        $this->container['apiTraceId'] = $apiTraceId;

        return $this;
    }

    /**
     * Gets responseType
     *
     * @return \FirstData\FirstApi\Client\Model\ResponseType|null
     */
    public function getResponseType()
    {
        return $this->container['responseType'];
    }

    /**
     * Sets responseType
     *
     * @param \FirstData\FirstApi\Client\Model\ResponseType|null $responseType responseType
     *
     * @return $this
     */
    public function setResponseType($responseType)
    {
        $this->container['responseType'] = $responseType;

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
     * @param string|null $storeId The outlet ID.
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        $this->container['storeId'] = $storeId;

        return $this;
    }

    /**
     * Gets blockedCardNumbers
     *
     * @return \FirstData\FirstApi\Client\Model\BlockedCardNumber[]|null
     */
    public function getBlockedCardNumbers()
    {
        return $this->container['blockedCardNumbers'];
    }

    /**
     * Sets blockedCardNumbers
     *
     * @param \FirstData\FirstApi\Client\Model\BlockedCardNumber[]|null $blockedCardNumbers List of blocked card numbers.
     *
     * @return $this
     */
    public function setBlockedCardNumbers($blockedCardNumbers)
    {
        $this->container['blockedCardNumbers'] = $blockedCardNumbers;

        return $this;
    }

    /**
     * Gets blockedNames
     *
     * @return string[]|null
     */
    public function getBlockedNames()
    {
        return $this->container['blockedNames'];
    }

    /**
     * Sets blockedNames
     *
     * @param string[]|null $blockedNames List of blocked fraud names.
     *
     * @return $this
     */
    public function setBlockedNames($blockedNames)
    {
        $this->container['blockedNames'] = $blockedNames;

        return $this;
    }

    /**
     * Gets blockedDomainNames
     *
     * @return string[]|null
     */
    public function getBlockedDomainNames()
    {
        return $this->container['blockedDomainNames'];
    }

    /**
     * Sets blockedDomainNames
     *
     * @param string[]|null $blockedDomainNames List of blocked fraud domain names.
     *
     * @return $this
     */
    public function setBlockedDomainNames($blockedDomainNames)
    {
        $this->container['blockedDomainNames'] = $blockedDomainNames;

        return $this;
    }

    /**
     * Gets blockedIpOrClassCAddresses
     *
     * @return string[]|null
     */
    public function getBlockedIpOrClassCAddresses()
    {
        return $this->container['blockedIpOrClassCAddresses'];
    }

    /**
     * Sets blockedIpOrClassCAddresses
     *
     * @param string[]|null $blockedIpOrClassCAddresses List of blocked fraud IP address/Class C.
     *
     * @return $this
     */
    public function setBlockedIpOrClassCAddresses($blockedIpOrClassCAddresses)
    {
        $this->container['blockedIpOrClassCAddresses'] = $blockedIpOrClassCAddresses;

        return $this;
    }

    /**
     * Gets maximumPurchaseAmount
     *
     * @return \FirstData\FirstApi\Client\Model\MaximumPurchaseAmount[]|null
     */
    public function getMaximumPurchaseAmount()
    {
        return $this->container['maximumPurchaseAmount'];
    }

    /**
     * Sets maximumPurchaseAmount
     *
     * @param \FirstData\FirstApi\Client\Model\MaximumPurchaseAmount[]|null $maximumPurchaseAmount Maximum purchase amount limit.
     *
     * @return $this
     */
    public function setMaximumPurchaseAmount($maximumPurchaseAmount)
    {
        $this->container['maximumPurchaseAmount'] = $maximumPurchaseAmount;

        return $this;
    }

    /**
     * Gets lockoutTime
     *
     * @return \FirstData\FirstApi\Client\Model\LockoutTime|null
     */
    public function getLockoutTime()
    {
        return $this->container['lockoutTime'];
    }

    /**
     * Sets lockoutTime
     *
     * @param \FirstData\FirstApi\Client\Model\LockoutTime|null $lockoutTime lockoutTime
     *
     * @return $this
     */
    public function setLockoutTime($lockoutTime)
    {
        $this->container['lockoutTime'] = $lockoutTime;

        return $this;
    }

    /**
     * Gets countryProfile
     *
     * @return string|null
     */
    public function getCountryProfile()
    {
        return $this->container['countryProfile'];
    }

    /**
     * Sets countryProfile
     *
     * @param string|null $countryProfile Country profile.
     *
     * @return $this
     */
    public function setCountryProfile($countryProfile)
    {
        $this->container['countryProfile'] = $countryProfile;

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


