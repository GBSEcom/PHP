<?php
/**
 * PaymentUrlRequest
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
 * PaymentUrlRequest Class Doc Comment
 *
 * @category Class
 * @description Request to generate an embedded payment link.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentUrlRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentUrlRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'storeId' => 'string',
        'clientLocale' => '\FirstData\FirstApi\Client\Model\ClientLocale',
        'transactionAmount' => '\FirstData\FirstApi\Client\Model\Amount',
        'transactionType' => '\FirstData\FirstApi\Client\Model\TransactionType',
        'orderId' => 'string',
        'billing' => '\FirstData\FirstApi\Client\Model\Billing',
        'shipping' => '\FirstData\FirstApi\Client\Model\Shipping',
        'transactionNotificationURL' => 'string',
        'expiration' => 'int',
        'authenticateTransaction' => 'bool',
        'dynamicMerchantName' => 'string',
        'invoiceNumber' => 'string',
        'purchaseOrderNumber' => 'string',
        'hostedPaymentPageText' => 'string',
        'ip' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'storeId' => null,
        'clientLocale' => null,
        'transactionAmount' => null,
        'transactionType' => null,
        'orderId' => null,
        'billing' => null,
        'shipping' => null,
        'transactionNotificationURL' => null,
        'expiration' => 'int64',
        'authenticateTransaction' => null,
        'dynamicMerchantName' => null,
        'invoiceNumber' => null,
        'purchaseOrderNumber' => null,
        'hostedPaymentPageText' => null,
        'ip' => null
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
        'storeId' => 'storeId',
        'clientLocale' => 'clientLocale',
        'transactionAmount' => 'transactionAmount',
        'transactionType' => 'transactionType',
        'orderId' => 'orderId',
        'billing' => 'billing',
        'shipping' => 'shipping',
        'transactionNotificationURL' => 'transactionNotificationURL',
        'expiration' => 'expiration',
        'authenticateTransaction' => 'authenticateTransaction',
        'dynamicMerchantName' => 'dynamicMerchantName',
        'invoiceNumber' => 'invoiceNumber',
        'purchaseOrderNumber' => 'purchaseOrderNumber',
        'hostedPaymentPageText' => 'hostedPaymentPageText',
        'ip' => 'ip'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'storeId' => 'setStoreId',
        'clientLocale' => 'setClientLocale',
        'transactionAmount' => 'setTransactionAmount',
        'transactionType' => 'setTransactionType',
        'orderId' => 'setOrderId',
        'billing' => 'setBilling',
        'shipping' => 'setShipping',
        'transactionNotificationURL' => 'setTransactionNotificationURL',
        'expiration' => 'setExpiration',
        'authenticateTransaction' => 'setAuthenticateTransaction',
        'dynamicMerchantName' => 'setDynamicMerchantName',
        'invoiceNumber' => 'setInvoiceNumber',
        'purchaseOrderNumber' => 'setPurchaseOrderNumber',
        'hostedPaymentPageText' => 'setHostedPaymentPageText',
        'ip' => 'setIp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'storeId' => 'getStoreId',
        'clientLocale' => 'getClientLocale',
        'transactionAmount' => 'getTransactionAmount',
        'transactionType' => 'getTransactionType',
        'orderId' => 'getOrderId',
        'billing' => 'getBilling',
        'shipping' => 'getShipping',
        'transactionNotificationURL' => 'getTransactionNotificationURL',
        'expiration' => 'getExpiration',
        'authenticateTransaction' => 'getAuthenticateTransaction',
        'dynamicMerchantName' => 'getDynamicMerchantName',
        'invoiceNumber' => 'getInvoiceNumber',
        'purchaseOrderNumber' => 'getPurchaseOrderNumber',
        'hostedPaymentPageText' => 'getHostedPaymentPageText',
        'ip' => 'getIp'
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
        $this->container['storeId'] = isset($data['storeId']) ? $data['storeId'] : null;
        $this->container['clientLocale'] = isset($data['clientLocale']) ? $data['clientLocale'] : null;
        $this->container['transactionAmount'] = isset($data['transactionAmount']) ? $data['transactionAmount'] : null;
        $this->container['transactionType'] = isset($data['transactionType']) ? $data['transactionType'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['transactionNotificationURL'] = isset($data['transactionNotificationURL']) ? $data['transactionNotificationURL'] : null;
        $this->container['expiration'] = isset($data['expiration']) ? $data['expiration'] : null;
        $this->container['authenticateTransaction'] = isset($data['authenticateTransaction']) ? $data['authenticateTransaction'] : null;
        $this->container['dynamicMerchantName'] = isset($data['dynamicMerchantName']) ? $data['dynamicMerchantName'] : null;
        $this->container['invoiceNumber'] = isset($data['invoiceNumber']) ? $data['invoiceNumber'] : null;
        $this->container['purchaseOrderNumber'] = isset($data['purchaseOrderNumber']) ? $data['purchaseOrderNumber'] : null;
        $this->container['hostedPaymentPageText'] = isset($data['hostedPaymentPageText']) ? $data['hostedPaymentPageText'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['storeId']) && (mb_strlen($this->container['storeId']) > 20)) {
            $invalidProperties[] = "invalid value for 'storeId', the character length must be smaller than or equal to 20.";
        }

        if ($this->container['transactionAmount'] === null) {
            $invalidProperties[] = "'transactionAmount' can't be null";
        }
        if ($this->container['transactionType'] === null) {
            $invalidProperties[] = "'transactionType' can't be null";
        }
        if (!is_null($this->container['hostedPaymentPageText']) && (mb_strlen($this->container['hostedPaymentPageText']) > 255)) {
            $invalidProperties[] = "invalid value for 'hostedPaymentPageText', the character length must be smaller than or equal to 255.";
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
     * @param string|null $storeId An optional Outlet ID for clients that support multiple stores in the same developer app.
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        if (!is_null($storeId) && (mb_strlen($storeId) > 20)) {
            throw new \InvalidArgumentException('invalid length for $storeId when calling PaymentUrlRequest., must be smaller than or equal to 20.');
        }

        $this->container['storeId'] = $storeId;

        return $this;
    }

    /**
     * Gets clientLocale
     *
     * @return \FirstData\FirstApi\Client\Model\ClientLocale|null
     */
    public function getClientLocale()
    {
        return $this->container['clientLocale'];
    }

    /**
     * Sets clientLocale
     *
     * @param \FirstData\FirstApi\Client\Model\ClientLocale|null $clientLocale clientLocale
     *
     * @return $this
     */
    public function setClientLocale($clientLocale)
    {
        $this->container['clientLocale'] = $clientLocale;

        return $this;
    }

    /**
     * Gets transactionAmount
     *
     * @return \FirstData\FirstApi\Client\Model\Amount
     */
    public function getTransactionAmount()
    {
        return $this->container['transactionAmount'];
    }

    /**
     * Sets transactionAmount
     *
     * @param \FirstData\FirstApi\Client\Model\Amount $transactionAmount transactionAmount
     *
     * @return $this
     */
    public function setTransactionAmount($transactionAmount)
    {
        $this->container['transactionAmount'] = $transactionAmount;

        return $this;
    }

    /**
     * Gets transactionType
     *
     * @return \FirstData\FirstApi\Client\Model\TransactionType
     */
    public function getTransactionType()
    {
        return $this->container['transactionType'];
    }

    /**
     * Sets transactionType
     *
     * @param \FirstData\FirstApi\Client\Model\TransactionType $transactionType transactionType
     *
     * @return $this
     */
    public function setTransactionType($transactionType)
    {
        $this->container['transactionType'] = $transactionType;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string|null $orderId Client order ID if supplied by client, otherwise the order ID.
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets billing
     *
     * @return \FirstData\FirstApi\Client\Model\Billing|null
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     *
     * @param \FirstData\FirstApi\Client\Model\Billing|null $billing billing
     *
     * @return $this
     */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \FirstData\FirstApi\Client\Model\Shipping|null
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \FirstData\FirstApi\Client\Model\Shipping|null $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets transactionNotificationURL
     *
     * @return string|null
     */
    public function getTransactionNotificationURL()
    {
        return $this->container['transactionNotificationURL'];
    }

    /**
     * Sets transactionNotificationURL
     *
     * @param string|null $transactionNotificationURL URL for notifying merchant of payment result.
     *
     * @return $this
     */
    public function setTransactionNotificationURL($transactionNotificationURL)
    {
        $this->container['transactionNotificationURL'] = $transactionNotificationURL;

        return $this;
    }

    /**
     * Gets expiration
     *
     * @return int|null
     */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration
     *
     * @param int|null $expiration Time until payment URL expires.
     *
     * @return $this
     */
    public function setExpiration($expiration)
    {
        $this->container['expiration'] = $expiration;

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
     * Gets dynamicMerchantName
     *
     * @return string|null
     */
    public function getDynamicMerchantName()
    {
        return $this->container['dynamicMerchantName'];
    }

    /**
     * Sets dynamicMerchantName
     *
     * @param string|null $dynamicMerchantName Dynamic merchant name for the cardholder's statement.
     *
     * @return $this
     */
    public function setDynamicMerchantName($dynamicMerchantName)
    {
        $this->container['dynamicMerchantName'] = $dynamicMerchantName;

        return $this;
    }

    /**
     * Gets invoiceNumber
     *
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoiceNumber'];
    }

    /**
     * Sets invoiceNumber
     *
     * @param string|null $invoiceNumber Invoice number.
     *
     * @return $this
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->container['invoiceNumber'] = $invoiceNumber;

        return $this;
    }

    /**
     * Gets purchaseOrderNumber
     *
     * @return string|null
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchaseOrderNumber'];
    }

    /**
     * Sets purchaseOrderNumber
     *
     * @param string|null $purchaseOrderNumber Purchase order number.
     *
     * @return $this
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        $this->container['purchaseOrderNumber'] = $purchaseOrderNumber;

        return $this;
    }

    /**
     * Gets hostedPaymentPageText
     *
     * @return string|null
     */
    public function getHostedPaymentPageText()
    {
        return $this->container['hostedPaymentPageText'];
    }

    /**
     * Sets hostedPaymentPageText
     *
     * @param string|null $hostedPaymentPageText The text to be displayed to the payer on the hosted payment page.
     *
     * @return $this
     */
    public function setHostedPaymentPageText($hostedPaymentPageText)
    {
        if (!is_null($hostedPaymentPageText) && (mb_strlen($hostedPaymentPageText) > 255)) {
            throw new \InvalidArgumentException('invalid length for $hostedPaymentPageText when calling PaymentUrlRequest., must be smaller than or equal to 255.');
        }

        $this->container['hostedPaymentPageText'] = $hostedPaymentPageText;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string|null
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string|null $ip IPv4 or IPv6 network address.
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

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


