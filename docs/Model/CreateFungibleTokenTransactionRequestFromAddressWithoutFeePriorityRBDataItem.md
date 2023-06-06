# # CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRBDataItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | Represents the specific amount of the transaction. |
**fee_limit** | **string** | Fee limit of the smart contract. If \&quot;OUT_OF_ENERGY\&quot; error appears - It is necessary to check whether the address of the calling contract has TRX and whether it is enough to pay for the burning energy or bandwidth cost, otherwise the address needs to obtain enough TRX. If there is enough TRX, the feeLimit set by the transaction is smaller, and it needs to be increased. | [optional]
**note** | **string** | Represents an optional note to add a free text in, explaining or providing additional detail on the transaction request. | [optional]
**recipient_address** | **string** | Defines the specific recipient address for the transaction. |
**token_identifier** | **string** | Token identifier - for BITCOIN BASED should be property id e.g 31 for ETHEREUM BASED shoud be contract e.g 0xdac17f958d2ee523a2206206994597c13d831ec7 |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
