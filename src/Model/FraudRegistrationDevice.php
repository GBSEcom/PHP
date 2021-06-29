<?php
/**
 * FraudRegistrationDevice
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
 * FraudRegistrationDevice Class Doc Comment
 *
 * @category Class
 * @description The device where this transaction originated.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FraudRegistrationDevice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FraudRegistrationDevice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'deviceType' => 'string',
        'deviceId' => 'string',
        'networks' => '\FirstData\FirstApi\Client\Model\FraudRegistrationDeviceItems[]',
        'latitude' => 'float',
        'longitude' => 'float',
        'imei' => 'string',
        'model' => 'string',
        'manufacturer' => 'string',
        'timezoneOffset' => 'string',
        'rooted' => 'bool',
        'malwareDetected' => 'bool',
        'userDefined' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'deviceType' => null,
        'deviceId' => null,
        'networks' => null,
        'latitude' => null,
        'longitude' => null,
        'imei' => null,
        'model' => null,
        'manufacturer' => null,
        'timezoneOffset' => null,
        'rooted' => null,
        'malwareDetected' => null,
        'userDefined' => null
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
        'deviceType' => 'deviceType',
        'deviceId' => 'deviceId',
        'networks' => 'networks',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'imei' => 'imei',
        'model' => 'model',
        'manufacturer' => 'manufacturer',
        'timezoneOffset' => 'timezoneOffset',
        'rooted' => 'rooted',
        'malwareDetected' => 'malwareDetected',
        'userDefined' => 'userDefined'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deviceType' => 'setDeviceType',
        'deviceId' => 'setDeviceId',
        'networks' => 'setNetworks',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'imei' => 'setImei',
        'model' => 'setModel',
        'manufacturer' => 'setManufacturer',
        'timezoneOffset' => 'setTimezoneOffset',
        'rooted' => 'setRooted',
        'malwareDetected' => 'setMalwareDetected',
        'userDefined' => 'setUserDefined'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deviceType' => 'getDeviceType',
        'deviceId' => 'getDeviceId',
        'networks' => 'getNetworks',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'imei' => 'getImei',
        'model' => 'getModel',
        'manufacturer' => 'getManufacturer',
        'timezoneOffset' => 'getTimezoneOffset',
        'rooted' => 'getRooted',
        'malwareDetected' => 'getMalwareDetected',
        'userDefined' => 'getUserDefined'
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

    const DEVICE_TYPE_POS = 'device/pos';
    const DEVICE_TYPE_MOBILE = 'device/mobile';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeviceTypeAllowableValues()
    {
        return [
            self::DEVICE_TYPE_POS,
            self::DEVICE_TYPE_MOBILE,
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
        $this->container['deviceType'] = isset($data['deviceType']) ? $data['deviceType'] : null;
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['networks'] = isset($data['networks']) ? $data['networks'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['imei'] = isset($data['imei']) ? $data['imei'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['manufacturer'] = isset($data['manufacturer']) ? $data['manufacturer'] : null;
        $this->container['timezoneOffset'] = isset($data['timezoneOffset']) ? $data['timezoneOffset'] : null;
        $this->container['rooted'] = isset($data['rooted']) ? $data['rooted'] : null;
        $this->container['malwareDetected'] = isset($data['malwareDetected']) ? $data['malwareDetected'] : null;
        $this->container['userDefined'] = isset($data['userDefined']) ? $data['userDefined'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['deviceType'] === null) {
            $invalidProperties[] = "'deviceType' can't be null";
        }
        $allowedValues = $this->getDeviceTypeAllowableValues();
        if (!is_null($this->container['deviceType']) && !in_array($this->container['deviceType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'deviceType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['deviceId'] === null) {
            $invalidProperties[] = "'deviceId' can't be null";
        }
        if (!preg_match("/^(?!\\s*$).+/", $this->container['deviceId'])) {
            $invalidProperties[] = "invalid value for 'deviceId', must be conform to the pattern /^(?!\\s*$).+/.";
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
     * Gets deviceType
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->container['deviceType'];
    }

    /**
     * Sets deviceType
     *
     * @param string $deviceType Defines the type of this object.
     *
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $allowedValues = $this->getDeviceTypeAllowableValues();
        if (!in_array($deviceType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'deviceType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['deviceType'] = $deviceType;

        return $this;
    }

    /**
     * Gets deviceId
     *
     * @return string
     */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
     * Sets deviceId
     *
     * @param string $deviceId The unique ID of the device. Must be unique for the entire system (not just within a specific merchant or industry).
     *
     * @return $this
     */
    public function setDeviceId($deviceId)
    {

        if ((!preg_match("/^(?!\\s*$).+/", $deviceId))) {
            throw new \InvalidArgumentException("invalid value for $deviceId when calling FraudRegistrationDevice., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['deviceId'] = $deviceId;

        return $this;
    }

    /**
     * Gets networks
     *
     * @return \FirstData\FirstApi\Client\Model\FraudRegistrationDeviceItems[]|null
     */
    public function getNetworks()
    {
        return $this->container['networks'];
    }

    /**
     * Sets networks
     *
     * @param \FirstData\FirstApi\Client\Model\FraudRegistrationDeviceItems[]|null $networks Information about the networks associated with the device.
     *
     * @return $this
     */
    public function setNetworks($networks)
    {
        $this->container['networks'] = $networks;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param float|null $latitude The GPS decimal latitude, ranging from (-90.0 to 90.0) where positive numbers indicate locations North of the equator.
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param float|null $longitude The GPS decimal longitude, ranging from (-180.0 to 180.0) where positive numbers indicate locations East of the IERS Reference Meridian.
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets imei
     *
     * @return string|null
     */
    public function getImei()
    {
        return $this->container['imei'];
    }

    /**
     * Sets imei
     *
     * @param string|null $imei The device's International Mobile Equipment Identity (IMEI) as described in IETF RFC7254.
     *
     * @return $this
     */
    public function setImei($imei)
    {
        $this->container['imei'] = $imei;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string|null
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string|null $model The device's model name.
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return string|null
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string|null $manufacturer The device's manufacturer.
     *
     * @return $this
     */
    public function setManufacturer($manufacturer)
    {
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets timezoneOffset
     *
     * @return string|null
     */
    public function getTimezoneOffset()
    {
        return $this->container['timezoneOffset'];
    }

    /**
     * Sets timezoneOffset
     *
     * @param string|null $timezoneOffset The timezone offset from UTC to the devices timezone configuration, specified in the format +hh:mm.
     *
     * @return $this
     */
    public function setTimezoneOffset($timezoneOffset)
    {
        $this->container['timezoneOffset'] = $timezoneOffset;

        return $this;
    }

    /**
     * Gets rooted
     *
     * @return bool|null
     */
    public function getRooted()
    {
        return $this->container['rooted'];
    }

    /**
     * Sets rooted
     *
     * @param bool|null $rooted A flag indicating that the device has been altered to allow privileged access to users. This flag should only be set to false if a test was performed and the result was negative. Leave unset otherwise.
     *
     * @return $this
     */
    public function setRooted($rooted)
    {
        $this->container['rooted'] = $rooted;

        return $this;
    }

    /**
     * Gets malwareDetected
     *
     * @return bool|null
     */
    public function getMalwareDetected()
    {
        return $this->container['malwareDetected'];
    }

    /**
     * Sets malwareDetected
     *
     * @param bool|null $malwareDetected A flag indicating that malware was detected on the mobile phone. This flag should only be set to false if a test was performed and the result was negative. Leave unset otherwise.
     *
     * @return $this
     */
    public function setMalwareDetected($malwareDetected)
    {
        $this->container['malwareDetected'] = $malwareDetected;

        return $this;
    }

    /**
     * Gets userDefined
     *
     * @return object|null
     */
    public function getUserDefined()
    {
        return $this->container['userDefined'];
    }

    /**
     * Sets userDefined
     *
     * @param object|null $userDefined A JSON object that can carry any additional information about the device that might be helpful for fraud detection.
     *
     * @return $this
     */
    public function setUserDefined($userDefined)
    {
        $this->container['userDefined'] = $userDefined;

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


