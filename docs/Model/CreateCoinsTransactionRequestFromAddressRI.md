# # CreateCoinsTransactionRequestFromAddressRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_tag** | **int** | Defines a specific Tag that is an additional XRP address feature. It helps identify a transaction recipient beyond a wallet address. The tag that was encoded into the x-Address along with the Source Classic Address. | [optional]
**classic_address** | **string** | Represents the public address, which is a compressed and shortened form of a public key. The classic address is shown when the source address is an x-Address. | [optional]
**fee_priority** | **string** | Represents the fee priority of the automation, whether it is \&quot;slow\&quot;, \&quot;standard\&quot; or \&quot;fast\&quot;. |
**note** | **string** | Represents an optional note to add a free text in, explaining or providing additional detail on the transaction request. | [optional]
**recipients** | [**\kocetestpack\Model\CreateCoinsTransactionRequestFromAddressRIRecipientsInner[]**](CreateCoinsTransactionRequestFromAddressRIRecipientsInner.md) | Defines the destination for the transaction, i.e. the recipient(s). |
**senders** | [**\kocetestpack\Model\CreateCoinsTransactionRequestFromAddressRISenders**](CreateCoinsTransactionRequestFromAddressRISenders.md) |  |
**transaction_request_id** | **string** | Represents a unique identifier of the transaction request (the request sent to make a transaction), which helps in identifying which callback and which &#x60;referenceId&#x60; concern that specific transaction request. |
**transaction_request_status** | **string** | Defines the status of the transaction request, e.g. \&quot;created, \&quot;await_approval\&quot;, \&quot;pending\&quot;, \&quot;prepared\&quot;, \&quot;signed\&quot;, \&quot;broadcasted\&quot;, \&quot;success\&quot;, \&quot;failed\&quot;, \&quot;rejected\&quot;, mined\&quot;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
