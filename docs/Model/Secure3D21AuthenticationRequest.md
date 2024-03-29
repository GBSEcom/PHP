# # Secure3D21AuthenticationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**termURL** | **string** | The result of the authentication will be sent to this URL. If not provided, a term URL will be dynamically generated. Note this must be a valid URL (special characters should be URL-encoded). | [optional] 
**methodNotificationURL** | **string** | The 3DS method iframe and transaction ID will be sent here. Note this must be a valid URL (special characters should be URL-encoded). | [optional] 
**challengeIndicator** | **string** | Indicates whether or not a challenge should be performed. 01 &#x3D; No preference (You have no preference whether a challenge should be performed. This is the default value) 02 &#x3D; No challenge requested (You prefer that no challenge should be performed) 03 &#x3D; Challenge requested: 3DS Requestor Preference (You prefer that a challenge should be performed) 04 &#x3D; Challenge requested: Mandate (There are local or regional mandates that mean that a challenge must be performed) The following are applicable only for 3DS 2.2 protocol. 05 &#x3D; No challenge requested (transactional risk analysis is already performed) 06 &#x3D; No challenge requested (Data share only) 07 &#x3D; No challenge requested (strong consumer authentication is already performed) 08 &#x3D; No challenge requested (utilise whitelist exemption if no challenge required) 09 &#x3D; Challenge requested (whitelist prompt requested if challenge required) | [optional] [default to '01']
**challengeWindowSize** | **string** | Defines the size of the challenge window displayed to customers during authentication. 01 &#x3D; 250 x 400 02 &#x3D; 390 x 400 03 &#x3D; 500 x 600 04 &#x3D; 600 x 400 05 &#x3D; Full screen | [optional] 
**browserJavaScriptEnabled** | **bool** | Indicates if the browser issuing the request is capable of performing JavaScript. | [optional] 
**requestorAuthenticationIndicator** | **string** | Indicates whether or not a challenge should be performed. 01 &#x3D; Payment transaction 02 &#x3D; Recurring transaction 03 &#x3D; Installment transaction 04 &#x3D; Add card 05 &#x3D; Maintain card 06 &#x3D; Card holder verification as part of EMV token ID and Value | [optional] [default to '01']

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


