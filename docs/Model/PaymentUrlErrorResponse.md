# # PaymentUrlErrorResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clientRequestId** | **string** | Echoes back the value in the request header for tracking. | [optional] 
**apiTraceId** | **string** | Request identifier in API, can be used to request logs from the support team. | [optional] 
**responseType** | [**\FirstData\FirstApi\Client\Model\ResponseType**](ResponseType.md) |  | [optional] 
**requestStatus** | **string** | Request status. If it is anything other than &#39;SUCCESS&#39;, please refer to 400s HTTP error codes or decline. See Error object for details. | [optional] 
**orderId** | **string** | Note - Client Order ID if supplied by client. If not supplied by client, IPG will generate. The first 12 alphanumeric digits are passed down to Fiserv Enterprise reporting tool, Clientline and Data File Manager (DFM). | [optional] 
**paymentUrl** | **string** | URL for embedded payment link. | [optional] 
**transactionId** | **string** | ID code from the transaction. | [optional] 
**error** | [**\FirstData\FirstApi\Client\Model\Error**](Error.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


