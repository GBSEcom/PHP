<?php
/**
 * Secure3DAuthenticationUpdateRequest
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
 * Secure3DAuthenticationUpdateRequest Class Doc Comment
 *
 * @category Class
 * @description Authentication update request specific to 3DSecure 2.x transactions.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Secure3DAuthenticationUpdateRequest extends AuthenticationUpdateRequest 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Secure3DAuthenticationUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'methodNotificationStatus' => 'string',
        'acsResponse' => '\FirstData\FirstApi\Client\Model\ACSResponse'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'methodNotificationStatus' => null,
        'acsResponse' => null
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
        'methodNotificationStatus' => 'methodNotificationStatus',
        'acsResponse' => 'acsResponse'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'methodNotificationStatus' => 'setMethodNotificationStatus',
        'acsResponse' => 'setAcsResponse'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'methodNotificationStatus' => 'getMethodNotificationStatus',
        'acsResponse' => 'getAcsResponse'
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

    const METHOD_NOTIFICATION_STATUS_RECEIVED = 'RECEIVED';
    const METHOD_NOTIFICATION_STATUS_EXPECTED_BUT_NOT_RECEIVED = 'EXPECTED_BUT_NOT_RECEIVED';
    const METHOD_NOTIFICATION_STATUS_NOT_EXPECTED = 'NOT_EXPECTED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMethodNotificationStatusAllowableValues()
    {
        return [
            self::METHOD_NOTIFICATION_STATUS_RECEIVED,
            self::METHOD_NOTIFICATION_STATUS_EXPECTED_BUT_NOT_RECEIVED,
            self::METHOD_NOTIFICATION_STATUS_NOT_EXPECTED,
        ];
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

        $this->container['methodNotificationStatus'] = isset($data['methodNotificationStatus']) ? $data['methodNotificationStatus'] : null;
        $this->container['acsResponse'] = isset($data['acsResponse']) ? $data['acsResponse'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getMethodNotificationStatusAllowableValues();
        if (!is_null($this->container['methodNotificationStatus']) && !in_array($this->container['methodNotificationStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'methodNotificationStatus', must be one of '%s'",
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
     * Gets methodNotificationStatus
     *
     * @return string|null
     */
    public function getMethodNotificationStatus()
    {
        return $this->container['methodNotificationStatus'];
    }

    /**
     * Sets methodNotificationStatus
     *
     * @param string|null $methodNotificationStatus Indicates how the merchant received the 3DS method.
     *
     * @return $this
     */
    public function setMethodNotificationStatus($methodNotificationStatus)
    {
        $allowedValues = $this->getMethodNotificationStatusAllowableValues();
        if (!is_null($methodNotificationStatus) && !in_array($methodNotificationStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'methodNotificationStatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['methodNotificationStatus'] = $methodNotificationStatus;

        return $this;
    }

    /**
     * Gets acsResponse
     *
     * @return \FirstData\FirstApi\Client\Model\ACSResponse|null
     */
    public function getAcsResponse()
    {
        return $this->container['acsResponse'];
    }

    /**
     * Sets acsResponse
     *
     * @param \FirstData\FirstApi\Client\Model\ACSResponse|null $acsResponse acsResponse
     *
     * @return $this
     */
    public function setAcsResponse($acsResponse)
    {
        $this->container['acsResponse'] = $acsResponse;

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


