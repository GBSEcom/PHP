# FirstData\FirstApi\Client\CurrencyConversionApi

All URIs are relative to *https://cert.api.firstdata.com/gateway/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getExchangeRate**](CurrencyConversionApi.md#getExchangeRate) | **POST** /exchange-rates | Generate dynamic currency conversion transactions.



## getExchangeRate

> \FirstData\FirstApi\Client\Model\ExchangeRateResponse getExchangeRate($contentType, $clientRequestId, $apiKey, $timestamp, $exchangeRateRequest, $messageSignature, $region)

Generate dynamic currency conversion transactions.

Sale, return and lookup exchange rate with dynamic currency conversion option.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new FirstData\FirstApi\Client\Api\CurrencyConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = 'application/json'; // string | Content type.
$clientRequestId = 'clientRequestId_example'; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = 'apiKey_example'; // string | Key given to merchant after boarding associating their requests with the appropriate app in Apigee.
$timestamp = 56; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$exchangeRateRequest = new \FirstData\FirstApi\Client\Model\ExchangeRateRequest(); // \FirstData\FirstApi\Client\Model\ExchangeRateRequest | Accepted request types: DCCExchangeRateRequest and DynamicPricingExchangeRateRequest.
$messageSignature = 'messageSignature_example'; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256 algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$region = 'region_example'; // string | Indicates the region where the client wants the transaction to be processed. This will override the default processing region identified for the client. Available options are argentina, brazil, germany, india and northamerica. Region specific store setup and APIGEE boarding is required in order to use an alternate region for processing.

try {
    $result = $apiInstance->getExchangeRate($contentType, $clientRequestId, $apiKey, $timestamp, $exchangeRateRequest, $messageSignature, $region);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyConversionApi->getExchangeRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**| Content type. | [default to &#39;application/json&#39;]
 **clientRequestId** | **string**| A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format. |
 **apiKey** | **string**| Key given to merchant after boarding associating their requests with the appropriate app in Apigee. |
 **timestamp** | **int**| Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins). |
 **exchangeRateRequest** | [**\FirstData\FirstApi\Client\Model\ExchangeRateRequest**](../Model/ExchangeRateRequest.md)| Accepted request types: DCCExchangeRateRequest and DynamicPricingExchangeRateRequest. |
 **messageSignature** | **string**| Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256 algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. | [optional]
 **region** | **string**| Indicates the region where the client wants the transaction to be processed. This will override the default processing region identified for the client. Available options are argentina, brazil, germany, india and northamerica. Region specific store setup and APIGEE boarding is required in order to use an alternate region for processing. | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\ExchangeRateResponse**](../Model/ExchangeRateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

