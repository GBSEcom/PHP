# # Secure3DAuthenticationResultAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cavv** | **string** | The Cardholder Authentication Verification Value (CAVV) is a cryptographic value derived by the issuer during payment authentication that can provide evidence of the results of payment authentication during an online purchase. | [optional] 
**xid** | **string** | The transaction identifier (XID) is a unique tracking number set by the merchant. | [optional] 
**dsTransactionId** | **string** | The response transaction UUID from the DS (directory server) | [optional] 
**authenticationResponse** | **string** | The result of authentication attempt returned by the 3D Secure authentication process (ARes). | [optional] 
**transactionStatus** | **string** | The transaction status as returned by the 3D Secure authentication process. (CRes) | [optional] 
**messageCategory** | **string** | Indicates the message category of 3d secure authentication version 2.X. 01 &#x3D; Payment Authentication 02 &#x3D; Non-Payment Authentication 80 &#x3D; Mastercard Data Only | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


