# # CreateSingleTransactionRequestFromAddressWithoutFeePriorityRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**classic_address** | **string** | Represents the public address, which is a compressed and shortened form of a public key. The classic address is shown when the source address is an x-Address. | [optional]
**note** | **string** | Represents an optional note to add a free text in, explaining or providing additional detail on the transaction request. | [optional]
**recipient** | [**\kocetestpack\Model\CreateSingleTransactionRequestFromAddressWithoutFeePriorityRIRecipientInner[]**](CreateSingleTransactionRequestFromAddressWithoutFeePriorityRIRecipientInner.md) | Defines the destination for the transaction, i.e. the recipient(s). |
**sender** | [**\kocetestpack\Model\CreateSingleTransactionRequestFromAddressWithoutFeePriorityRISender**](CreateSingleTransactionRequestFromAddressWithoutFeePriorityRISender.md) |  |
**transaction_request_id** | **string** | Represents a unique identifier of the transaction request (the request sent to make a transaction), which helps in identifying which callback and which &#x60;referenceId&#x60; concern that specific transaction request. |
**transaction_request_status** | **string** | Defines the status of the transaction, e.g. \&quot;created, \&quot;await_approval\&quot;, \&quot;pending\&quot;, \&quot;prepared\&quot;, \&quot;signed\&quot;, \&quot;broadcasted\&quot;, \&quot;success\&quot;, \&quot;failed\&quot;, \&quot;rejected\&quot;, mined\&quot;. |
**total_amount** | [**\kocetestpack\Model\CreateSingleTransactionRequestFromAddressWithoutFeePriorityRITotalAmount**](CreateSingleTransactionRequestFromAddressWithoutFeePriorityRITotalAmount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
