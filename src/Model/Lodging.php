<?php
/**
 * Lodging
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
 * Lodging Class Doc Comment
 *
 * @category Class
 * @description Additional data specific to the lodging/hotel industry.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Lodging implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Lodging';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'arrivalDate' => '\DateTime',
        'departureDate' => '\DateTime',
        'folioNumber' => 'string',
        'extraCharges' => '\FirstData\FirstApi\Client\Model\LodgingExtraCharges[]',
        'noShowIndicator' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'arrivalDate' => 'date',
        'departureDate' => 'date',
        'folioNumber' => null,
        'extraCharges' => null,
        'noShowIndicator' => null
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
        'arrivalDate' => 'arrivalDate',
        'departureDate' => 'departureDate',
        'folioNumber' => 'folioNumber',
        'extraCharges' => 'extraCharges',
        'noShowIndicator' => 'noShowIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'arrivalDate' => 'setArrivalDate',
        'departureDate' => 'setDepartureDate',
        'folioNumber' => 'setFolioNumber',
        'extraCharges' => 'setExtraCharges',
        'noShowIndicator' => 'setNoShowIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'arrivalDate' => 'getArrivalDate',
        'departureDate' => 'getDepartureDate',
        'folioNumber' => 'getFolioNumber',
        'extraCharges' => 'getExtraCharges',
        'noShowIndicator' => 'getNoShowIndicator'
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
        $this->container['arrivalDate'] = isset($data['arrivalDate']) ? $data['arrivalDate'] : null;
        $this->container['departureDate'] = isset($data['departureDate']) ? $data['departureDate'] : null;
        $this->container['folioNumber'] = isset($data['folioNumber']) ? $data['folioNumber'] : null;
        $this->container['extraCharges'] = isset($data['extraCharges']) ? $data['extraCharges'] : null;
        $this->container['noShowIndicator'] = isset($data['noShowIndicator']) ? $data['noShowIndicator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['folioNumber']) && (mb_strlen($this->container['folioNumber']) > 20)) {
            $invalidProperties[] = "invalid value for 'folioNumber', the character length must be smaller than or equal to 20.";
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
     * Gets arrivalDate
     *
     * @return \DateTime|null
     */
    public function getArrivalDate()
    {
        return $this->container['arrivalDate'];
    }

    /**
     * Sets arrivalDate
     *
     * @param \DateTime|null $arrivalDate Date of arrival.
     *
     * @return $this
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->container['arrivalDate'] = $arrivalDate;

        return $this;
    }

    /**
     * Gets departureDate
     *
     * @return \DateTime|null
     */
    public function getDepartureDate()
    {
        return $this->container['departureDate'];
    }

    /**
     * Sets departureDate
     *
     * @param \DateTime|null $departureDate Date of departure.
     *
     * @return $this
     */
    public function setDepartureDate($departureDate)
    {
        $this->container['departureDate'] = $departureDate;

        return $this;
    }

    /**
     * Gets folioNumber
     *
     * @return string|null
     */
    public function getFolioNumber()
    {
        return $this->container['folioNumber'];
    }

    /**
     * Sets folioNumber
     *
     * @param string|null $folioNumber Portfolio number.
     *
     * @return $this
     */
    public function setFolioNumber($folioNumber)
    {
        if (!is_null($folioNumber) && (mb_strlen($folioNumber) > 20)) {
            throw new \InvalidArgumentException('invalid length for $folioNumber when calling Lodging., must be smaller than or equal to 20.');
        }

        $this->container['folioNumber'] = $folioNumber;

        return $this;
    }

    /**
     * Gets extraCharges
     *
     * @return \FirstData\FirstApi\Client\Model\LodgingExtraCharges[]|null
     */
    public function getExtraCharges()
    {
        return $this->container['extraCharges'];
    }

    /**
     * Sets extraCharges
     *
     * @param \FirstData\FirstApi\Client\Model\LodgingExtraCharges[]|null $extraCharges Information about charges other than base lodging.
     *
     * @return $this
     */
    public function setExtraCharges($extraCharges)
    {
        $this->container['extraCharges'] = $extraCharges;

        return $this;
    }

    /**
     * Gets noShowIndicator
     *
     * @return bool|null
     */
    public function getNoShowIndicator()
    {
        return $this->container['noShowIndicator'];
    }

    /**
     * Sets noShowIndicator
     *
     * @param bool|null $noShowIndicator Indicates if the transaction is associated with a delayed or no-show penalty.
     *
     * @return $this
     */
    public function setNoShowIndicator($noShowIndicator)
    {
        $this->container['noShowIndicator'] = $noShowIndicator;

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


