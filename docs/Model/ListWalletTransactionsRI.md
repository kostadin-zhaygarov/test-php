# # ListWalletTransactionsRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**direction** | **string** | Defines the direction of the transaction, e.g. incoming. |
**fee** | [**\kocetestpack\Model\ListWalletTransactionsRIFee**](ListWalletTransactionsRIFee.md) |  |
**fungible_tokens** | [**\kocetestpack\Model\ListWalletTransactionsRIFungibleTokensInner[]**](ListWalletTransactionsRIFungibleTokensInner.md) | Represents fungible tokens&#39;es detailed information | [optional]
**internal_transactions** | [**\kocetestpack\Model\ListWalletTransactionsRIInternalTransactionsInner[]**](ListWalletTransactionsRIInternalTransactionsInner.md) |  | [optional]
**non_fungible_tokens** | [**\kocetestpack\Model\ListWalletTransactionsRINonFungibleTokensInner[]**](ListWalletTransactionsRINonFungibleTokensInner.md) | Represents non-fungible tokens&#39;es detailed information. | [optional]
**recipients** | [**\kocetestpack\Model\ListWalletTransactionsRIRecipientsInner[]**](ListWalletTransactionsRIRecipientsInner.md) | Represents a list of recipient addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list. |
**senders** | [**\kocetestpack\Model\ListWalletTransactionsRISendersInner[]**](ListWalletTransactionsRISendersInner.md) | Represents a list of sender addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list. |
**status** | **string** | Defines the status of the transaction, if it is confirmed or unconfirmed. |
**timestamp** | **int** | Defines the exact date/time in Unix Timestamp when this transaction was mined, confirmed or first seen in Mempool, if it is unconfirmed. |
**transaction_id** | **string** | Represents the unique TD of the transaction. |
**value** | [**\kocetestpack\Model\ListWalletTransactionsRIValue**](ListWalletTransactionsRIValue.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
