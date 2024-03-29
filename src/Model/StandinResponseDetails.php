<?php
/**
 * StandinResponseDetails
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
 * StandinResponseDetails Class Doc Comment
 *
 * @category Class
 * @description Contains Standin response details.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StandinResponseDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StandinResponseDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'secure3DEnrolmentStatus' => 'string',
        'secure3DECI' => 'string',
        'secure3DAuthenticationResponse' => 'string',
        'authenticationValue' => 'string',
        'xid' => 'string',
        'authenticationAlgorithm' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'secure3DEnrolmentStatus' => null,
        'secure3DECI' => null,
        'secure3DAuthenticationResponse' => null,
        'authenticationValue' => null,
        'xid' => null,
        'authenticationAlgorithm' => null
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
        'secure3DEnrolmentStatus' => 'secure3DEnrolmentStatus',
        'secure3DECI' => 'secure3DECI',
        'secure3DAuthenticationResponse' => 'secure3DAuthenticationResponse',
        'authenticationValue' => 'authenticationValue',
        'xid' => 'xid',
        'authenticationAlgorithm' => 'authenticationAlgorithm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'secure3DEnrolmentStatus' => 'setSecure3DEnrolmentStatus',
        'secure3DECI' => 'setSecure3DECI',
        'secure3DAuthenticationResponse' => 'setSecure3DAuthenticationResponse',
        'authenticationValue' => 'setAuthenticationValue',
        'xid' => 'setXid',
        'authenticationAlgorithm' => 'setAuthenticationAlgorithm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'secure3DEnrolmentStatus' => 'getSecure3DEnrolmentStatus',
        'secure3DECI' => 'getSecure3DECI',
        'secure3DAuthenticationResponse' => 'getSecure3DAuthenticationResponse',
        'authenticationValue' => 'getAuthenticationValue',
        'xid' => 'getXid',
        'authenticationAlgorithm' => 'getAuthenticationAlgorithm'
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
        $this->container['secure3DEnrolmentStatus'] = isset($data['secure3DEnrolmentStatus']) ? $data['secure3DEnrolmentStatus'] : null;
        $this->container['secure3DECI'] = isset($data['secure3DECI']) ? $data['secure3DECI'] : null;
        $this->container['secure3DAuthenticationResponse'] = isset($data['secure3DAuthenticationResponse']) ? $data['secure3DAuthenticationResponse'] : null;
        $this->container['authenticationValue'] = isset($data['authenticationValue']) ? $data['authenticationValue'] : null;
        $this->container['xid'] = isset($data['xid']) ? $data['xid'] : null;
        $this->container['authenticationAlgorithm'] = isset($data['authenticationAlgorithm']) ? $data['authenticationAlgorithm'] : null;
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
     * Gets secure3DEnrolmentStatus
     *
     * @return string|null
     */
    public function getSecure3DEnrolmentStatus()
    {
        return $this->container['secure3DEnrolmentStatus'];
    }

    /**
     * Sets secure3DEnrolmentStatus
     *
     * @param string|null $secure3DEnrolmentStatus Secure 3D Enrolment Status.
     *
     * @return $this
     */
    public function setSecure3DEnrolmentStatus($secure3DEnrolmentStatus)
    {
        $this->container['secure3DEnrolmentStatus'] = $secure3DEnrolmentStatus;

        return $this;
    }

    /**
     * Gets secure3DECI
     *
     * @return string|null
     */
    public function getSecure3DECI()
    {
        return $this->container['secure3DECI'];
    }

    /**
     * Sets secure3DECI
     *
     * @param string|null $secure3DECI Secure 3D ECI.
     *
     * @return $this
     */
    public function setSecure3DECI($secure3DECI)
    {
        $this->container['secure3DECI'] = $secure3DECI;

        return $this;
    }

    /**
     * Gets secure3DAuthenticationResponse
     *
     * @return string|null
     */
    public function getSecure3DAuthenticationResponse()
    {
        return $this->container['secure3DAuthenticationResponse'];
    }

    /**
     * Sets secure3DAuthenticationResponse
     *
     * @param string|null $secure3DAuthenticationResponse Secure 3D Authentication Response.
     *
     * @return $this
     */
    public function setSecure3DAuthenticationResponse($secure3DAuthenticationResponse)
    {
        $this->container['secure3DAuthenticationResponse'] = $secure3DAuthenticationResponse;

        return $this;
    }

    /**
     * Gets authenticationValue
     *
     * @return string|null
     */
    public function getAuthenticationValue()
    {
        return $this->container['authenticationValue'];
    }

    /**
     * Sets authenticationValue
     *
     * @param string|null $authenticationValue Secure 3D Authentication Value.
     *
     * @return $this
     */
    public function setAuthenticationValue($authenticationValue)
    {
        $this->container['authenticationValue'] = $authenticationValue;

        return $this;
    }

    /**
     * Gets xid
     *
     * @return string|null
     */
    public function getXid()
    {
        return $this->container['xid'];
    }

    /**
     * Sets xid
     *
     * @param string|null $xid Secure 3D XID.
     *
     * @return $this
     */
    public function setXid($xid)
    {
        $this->container['xid'] = $xid;

        return $this;
    }

    /**
     * Gets authenticationAlgorithm
     *
     * @return string|null
     */
    public function getAuthenticationAlgorithm()
    {
        return $this->container['authenticationAlgorithm'];
    }

    /**
     * Sets authenticationAlgorithm
     *
     * @param string|null $authenticationAlgorithm Secure 3D Authentication Algorithm.
     *
     * @return $this
     */
    public function setAuthenticationAlgorithm($authenticationAlgorithm)
    {
        $this->container['authenticationAlgorithm'] = $authenticationAlgorithm;

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


