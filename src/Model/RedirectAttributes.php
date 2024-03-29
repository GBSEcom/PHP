<?php
/**
 * RedirectAttributes
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
 * RedirectAttributes Class Doc Comment
 *
 * @category Class
 * @description Attributes for controlling transactions with additional parameters like dccFlow, &#39;3ds&#39; flows.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RedirectAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RedirectAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'challengeIndicator' => 'string',
        'authenticateTransaction' => 'bool',
        'threeDSEmvCoMessageCategory' => 'string',
        'browserJavaScriptEnabled' => 'bool',
        'override3dsCountryExclusion' => 'bool',
        'threeDSTransactionType' => 'string',
        'skipTRA' => 'bool',
        'fullBypass' => 'bool',
        'mobileMode' => 'bool',
        'paymentMode' => 'string',
        'language' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'challengeIndicator' => null,
        'authenticateTransaction' => null,
        'threeDSEmvCoMessageCategory' => null,
        'browserJavaScriptEnabled' => null,
        'override3dsCountryExclusion' => null,
        'threeDSTransactionType' => null,
        'skipTRA' => null,
        'fullBypass' => null,
        'mobileMode' => null,
        'paymentMode' => null,
        'language' => null
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
        'challengeIndicator' => 'challengeIndicator',
        'authenticateTransaction' => 'authenticateTransaction',
        'threeDSEmvCoMessageCategory' => 'threeDSEmvCoMessageCategory',
        'browserJavaScriptEnabled' => 'browserJavaScriptEnabled',
        'override3dsCountryExclusion' => 'override3dsCountryExclusion',
        'threeDSTransactionType' => 'threeDSTransactionType',
        'skipTRA' => 'skipTRA',
        'fullBypass' => 'fullBypass',
        'mobileMode' => 'mobileMode',
        'paymentMode' => 'paymentMode',
        'language' => 'language'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'challengeIndicator' => 'setChallengeIndicator',
        'authenticateTransaction' => 'setAuthenticateTransaction',
        'threeDSEmvCoMessageCategory' => 'setThreeDSEmvCoMessageCategory',
        'browserJavaScriptEnabled' => 'setBrowserJavaScriptEnabled',
        'override3dsCountryExclusion' => 'setOverride3dsCountryExclusion',
        'threeDSTransactionType' => 'setThreeDSTransactionType',
        'skipTRA' => 'setSkipTRA',
        'fullBypass' => 'setFullBypass',
        'mobileMode' => 'setMobileMode',
        'paymentMode' => 'setPaymentMode',
        'language' => 'setLanguage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'challengeIndicator' => 'getChallengeIndicator',
        'authenticateTransaction' => 'getAuthenticateTransaction',
        'threeDSEmvCoMessageCategory' => 'getThreeDSEmvCoMessageCategory',
        'browserJavaScriptEnabled' => 'getBrowserJavaScriptEnabled',
        'override3dsCountryExclusion' => 'getOverride3dsCountryExclusion',
        'threeDSTransactionType' => 'getThreeDSTransactionType',
        'skipTRA' => 'getSkipTRA',
        'fullBypass' => 'getFullBypass',
        'mobileMode' => 'getMobileMode',
        'paymentMode' => 'getPaymentMode',
        'language' => 'getLanguage'
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

    const CHALLENGE_INDICATOR__01 = '01';
    const CHALLENGE_INDICATOR__02 = '02';
    const CHALLENGE_INDICATOR__03 = '03';
    const CHALLENGE_INDICATOR__04 = '04';
    const THREE_DS_EMV_CO_MESSAGE_CATEGORY__01 = '01';
    const THREE_DS_EMV_CO_MESSAGE_CATEGORY__02 = '02';
    const THREE_DS_EMV_CO_MESSAGE_CATEGORY__80 = '80';
    const THREE_DS_TRANSACTION_TYPE__01 = '01';
    const THREE_DS_TRANSACTION_TYPE__03 = '03';
    const THREE_DS_TRANSACTION_TYPE__10 = '10';
    const THREE_DS_TRANSACTION_TYPE__11 = '11';
    const THREE_DS_TRANSACTION_TYPE__28 = '28';
    const PAYMENT_MODE_FULLPAY = 'FULLPAY';
    const PAYMENT_MODE_PAYONLY = 'PAYONLY';
    const PAYMENT_MODE_PAYPLUS = 'PAYPLUS';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChallengeIndicatorAllowableValues()
    {
        return [
            self::CHALLENGE_INDICATOR__01,
            self::CHALLENGE_INDICATOR__02,
            self::CHALLENGE_INDICATOR__03,
            self::CHALLENGE_INDICATOR__04,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getThreeDSEmvCoMessageCategoryAllowableValues()
    {
        return [
            self::THREE_DS_EMV_CO_MESSAGE_CATEGORY__01,
            self::THREE_DS_EMV_CO_MESSAGE_CATEGORY__02,
            self::THREE_DS_EMV_CO_MESSAGE_CATEGORY__80,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getThreeDSTransactionTypeAllowableValues()
    {
        return [
            self::THREE_DS_TRANSACTION_TYPE__01,
            self::THREE_DS_TRANSACTION_TYPE__03,
            self::THREE_DS_TRANSACTION_TYPE__10,
            self::THREE_DS_TRANSACTION_TYPE__11,
            self::THREE_DS_TRANSACTION_TYPE__28,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentModeAllowableValues()
    {
        return [
            self::PAYMENT_MODE_FULLPAY,
            self::PAYMENT_MODE_PAYONLY,
            self::PAYMENT_MODE_PAYPLUS,
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
        $this->container['challengeIndicator'] = isset($data['challengeIndicator']) ? $data['challengeIndicator'] : '01';
        $this->container['authenticateTransaction'] = isset($data['authenticateTransaction']) ? $data['authenticateTransaction'] : null;
        $this->container['threeDSEmvCoMessageCategory'] = isset($data['threeDSEmvCoMessageCategory']) ? $data['threeDSEmvCoMessageCategory'] : null;
        $this->container['browserJavaScriptEnabled'] = isset($data['browserJavaScriptEnabled']) ? $data['browserJavaScriptEnabled'] : false;
        $this->container['override3dsCountryExclusion'] = isset($data['override3dsCountryExclusion']) ? $data['override3dsCountryExclusion'] : false;
        $this->container['threeDSTransactionType'] = isset($data['threeDSTransactionType']) ? $data['threeDSTransactionType'] : null;
        $this->container['skipTRA'] = isset($data['skipTRA']) ? $data['skipTRA'] : false;
        $this->container['fullBypass'] = isset($data['fullBypass']) ? $data['fullBypass'] : false;
        $this->container['mobileMode'] = isset($data['mobileMode']) ? $data['mobileMode'] : false;
        $this->container['paymentMode'] = isset($data['paymentMode']) ? $data['paymentMode'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getChallengeIndicatorAllowableValues();
        if (!is_null($this->container['challengeIndicator']) && !in_array($this->container['challengeIndicator'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'challengeIndicator', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getThreeDSEmvCoMessageCategoryAllowableValues();
        if (!is_null($this->container['threeDSEmvCoMessageCategory']) && !in_array($this->container['threeDSEmvCoMessageCategory'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'threeDSEmvCoMessageCategory', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getThreeDSTransactionTypeAllowableValues();
        if (!is_null($this->container['threeDSTransactionType']) && !in_array($this->container['threeDSTransactionType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'threeDSTransactionType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPaymentModeAllowableValues();
        if (!is_null($this->container['paymentMode']) && !in_array($this->container['paymentMode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'paymentMode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['language']) && !preg_match("/^(?!\\s*$).+/", $this->container['language'])) {
            $invalidProperties[] = "invalid value for 'language', must be conform to the pattern /^(?!\\s*$).+/.";
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
     * Gets challengeIndicator
     *
     * @return string|null
     */
    public function getChallengeIndicator()
    {
        return $this->container['challengeIndicator'];
    }

    /**
     * Sets challengeIndicator
     *
     * @param string|null $challengeIndicator Indicates whether or not a challenge should be performed. 01 = No preference (You have no preference whether a challenge should be performed. This is the default value) 02 = No challenge requested (You prefer that no challenge should be performed) 03 = Challenge requested: 3DS Requestor Preference (You prefer that a challenge should be performed) 04 = Challenge requested: Mandate (There are local or regional mandates that mean that a challenge must be performed)
     *
     * @return $this
     */
    public function setChallengeIndicator($challengeIndicator)
    {
        $allowedValues = $this->getChallengeIndicatorAllowableValues();
        if (!is_null($challengeIndicator) && !in_array($challengeIndicator, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'challengeIndicator', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['challengeIndicator'] = $challengeIndicator;

        return $this;
    }

    /**
     * Gets authenticateTransaction
     *
     * @return bool|null
     */
    public function getAuthenticateTransaction()
    {
        return $this->container['authenticateTransaction'];
    }

    /**
     * Sets authenticateTransaction
     *
     * @param bool|null $authenticateTransaction If 3D secure should be applied.
     *
     * @return $this
     */
    public function setAuthenticateTransaction($authenticateTransaction)
    {
        $this->container['authenticateTransaction'] = $authenticateTransaction;

        return $this;
    }

    /**
     * Gets threeDSEmvCoMessageCategory
     *
     * @return string|null
     */
    public function getThreeDSEmvCoMessageCategory()
    {
        return $this->container['threeDSEmvCoMessageCategory'];
    }

    /**
     * Sets threeDSEmvCoMessageCategory
     *
     * @param string|null $threeDSEmvCoMessageCategory EmvCo Messag Category
     *
     * @return $this
     */
    public function setThreeDSEmvCoMessageCategory($threeDSEmvCoMessageCategory)
    {
        $allowedValues = $this->getThreeDSEmvCoMessageCategoryAllowableValues();
        if (!is_null($threeDSEmvCoMessageCategory) && !in_array($threeDSEmvCoMessageCategory, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'threeDSEmvCoMessageCategory', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['threeDSEmvCoMessageCategory'] = $threeDSEmvCoMessageCategory;

        return $this;
    }

    /**
     * Gets browserJavaScriptEnabled
     *
     * @return bool|null
     */
    public function getBrowserJavaScriptEnabled()
    {
        return $this->container['browserJavaScriptEnabled'];
    }

    /**
     * Sets browserJavaScriptEnabled
     *
     * @param bool|null $browserJavaScriptEnabled Browser Java Script Enabled flag
     *
     * @return $this
     */
    public function setBrowserJavaScriptEnabled($browserJavaScriptEnabled)
    {
        $this->container['browserJavaScriptEnabled'] = $browserJavaScriptEnabled;

        return $this;
    }

    /**
     * Gets override3dsCountryExclusion
     *
     * @return bool|null
     */
    public function getOverride3dsCountryExclusion()
    {
        return $this->container['override3dsCountryExclusion'];
    }

    /**
     * Sets override3dsCountryExclusion
     *
     * @param bool|null $override3dsCountryExclusion Override 3ds Country Exclusion flag
     *
     * @return $this
     */
    public function setOverride3dsCountryExclusion($override3dsCountryExclusion)
    {
        $this->container['override3dsCountryExclusion'] = $override3dsCountryExclusion;

        return $this;
    }

    /**
     * Gets threeDSTransactionType
     *
     * @return string|null
     */
    public function getThreeDSTransactionType()
    {
        return $this->container['threeDSTransactionType'];
    }

    /**
     * Sets threeDSTransactionType
     *
     * @param string|null $threeDSTransactionType Secure 3D Transaction Type
     *
     * @return $this
     */
    public function setThreeDSTransactionType($threeDSTransactionType)
    {
        $allowedValues = $this->getThreeDSTransactionTypeAllowableValues();
        if (!is_null($threeDSTransactionType) && !in_array($threeDSTransactionType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'threeDSTransactionType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['threeDSTransactionType'] = $threeDSTransactionType;

        return $this;
    }

    /**
     * Gets skipTRA
     *
     * @return bool|null
     */
    public function getSkipTRA()
    {
        return $this->container['skipTRA'];
    }

    /**
     * Sets skipTRA
     *
     * @param bool|null $skipTRA skip TRA exemption for the transaction
     *
     * @return $this
     */
    public function setSkipTRA($skipTRA)
    {
        $this->container['skipTRA'] = $skipTRA;

        return $this;
    }

    /**
     * Gets fullBypass
     *
     * @return bool|null
     */
    public function getFullBypass()
    {
        return $this->container['fullBypass'];
    }

    /**
     * Sets fullBypass
     *
     * @param bool|null $fullBypass Full by pass flag
     *
     * @return $this
     */
    public function setFullBypass($fullBypass)
    {
        $this->container['fullBypass'] = $fullBypass;

        return $this;
    }

    /**
     * Gets mobileMode
     *
     * @return bool|null
     */
    public function getMobileMode()
    {
        return $this->container['mobileMode'];
    }

    /**
     * Sets mobileMode
     *
     * @param bool|null $mobileMode Mobile mode flag
     *
     * @return $this
     */
    public function setMobileMode($mobileMode)
    {
        $this->container['mobileMode'] = $mobileMode;

        return $this;
    }

    /**
     * Gets paymentMode
     *
     * @return string|null
     */
    public function getPaymentMode()
    {
        return $this->container['paymentMode'];
    }

    /**
     * Sets paymentMode
     *
     * @param string|null $paymentMode Payment Mode
     *
     * @return $this
     */
    public function setPaymentMode($paymentMode)
    {
        $allowedValues = $this->getPaymentModeAllowableValues();
        if (!is_null($paymentMode) && !in_array($paymentMode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'paymentMode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['paymentMode'] = $paymentMode;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language Language used by client.
     *
     * @return $this
     */
    public function setLanguage($language)
    {

        if (!is_null($language) && (!preg_match("/^(?!\\s*$).+/", $language))) {
            throw new \InvalidArgumentException("invalid value for $language when calling RedirectAttributes., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['language'] = $language;

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


