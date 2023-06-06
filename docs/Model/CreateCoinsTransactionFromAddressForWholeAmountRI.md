# # CreateCoinsTransactionFromAddressForWholeAmountRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fee_priority** | **string** | Represents the fee priority of the automation, whether it is \&quot;slow\&quot;, \&quot;standard\&quot; or \&quot;fast\&quot;. |
**note** | **string** | Represents an optional note to add a free text in, explaining or providing additional detail on the transaction request.Optional Transaction note with additional details | [optional]
**recipients** | [**\kocetestpack\Model\CreateCoinsTransactionFromAddressForWholeAmountRIRecipientsInner[]**](CreateCoinsTransactionFromAddressForWholeAmountRIRecipientsInner.md) | Defines the destination for the transaction, i.e. the recipient(s). |
**senders** | [**\kocetestpack\Model\CreateCoinsTransactionFromAddressForWholeAmountRISenders**](CreateCoinsTransactionFromAddressForWholeAmountRISenders.md) |  |
**transaction_request_id** | **string** | Represents a unique identifier of the transaction request (the request sent to make a transaction), which helps in identifying which callback and which &#x60;referenceId&#x60; concern that specific transaction request. |
**transaction_request_status** | **string** | Defines the status of the transaction, e.g. \&quot;created, \&quot;await_approval\&quot;, \&quot;pending\&quot;, \&quot;prepared\&quot;, \&quot;signed\&quot;, \&quot;broadcasted\&quot;, \&quot;success\&quot;, \&quot;failed\&quot;, \&quot;rejected\&quot;, mined\&quot;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
