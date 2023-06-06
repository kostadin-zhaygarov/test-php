# kocetestpack

Vaultody

For more information, please visit [https://vaultody.com/](https://vaultody.com/).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/kocetestpack/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: ApiKey
$config = kocetestpack\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kocetestpack\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

// Configure API key authorization: ApiSign
$config = kocetestpack\Configuration::getDefaultConfiguration()->setApiKey('x-api-sign', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kocetestpack\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-sign', 'Bearer');

// Configure API key authorization: ApiPassphrase
$config = kocetestpack\Configuration::getDefaultConfiguration()->setApiKey('x-api-passphrase', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kocetestpack\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-passphrase', 'Bearer');

// Configure API key authorization: ApiTimestamp
$config = kocetestpack\Configuration::getDefaultConfiguration()->setApiKey('x-api-timestamp', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kocetestpack\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-timestamp', 'Bearer');


$apiInstance = new kocetestpack\Api\GeneratingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$create_new_master_wallet_rb = new \kocetestpack\Model\CreateNewMasterWalletRB(); // \kocetestpack\Model\CreateNewMasterWalletRB

try {
    $result = $apiInstance->createNewMasterWallet($context, $create_new_master_wallet_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneratingApi->createNewMasterWallet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://rest.vaultody.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*GeneratingApi* | [**createNewMasterWallet**](docs/Api/GeneratingApi.md#createnewmasterwallet) | **POST** /wallet-as-a-service/wallets/generate | Create New Master Wallet
*GeneratingApi* | [**generateDepositAddress**](docs/Api/GeneratingApi.md#generatedepositaddress) | **POST** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/addresses | Generate Deposit Address
*InformativeApi* | [**getTransactionRequestDetails**](docs/Api/InformativeApi.md#gettransactionrequestdetails) | **GET** /wallet-as-a-service/transactionRequests/{transactionRequestId} | Get Transaction Request Details
*InformativeApi* | [**getWalletAssetDetails**](docs/Api/InformativeApi.md#getwalletassetdetails) | **GET** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network} | Get Wallet Asset Details
*InformativeApi* | [**getWalletTransactionDetailsByTransactionID**](docs/Api/InformativeApi.md#getwallettransactiondetailsbytransactionid) | **GET** /wallet-as-a-service/wallets/{blockchain}/{network}/transactions/{transactionId} | Get Wallet Transaction Details By Transaction ID
*InformativeApi* | [**listAllAssetsByWalletID**](docs/Api/InformativeApi.md#listallassetsbywalletid) | **GET** /wallet-as-a-service/wallets/{walletId}/assets | List All Assets By Wallet ID
*InformativeApi* | [**listAllAssetsFromAllWallets**](docs/Api/InformativeApi.md#listallassetsfromallwallets) | **GET** /wallet-as-a-service/wallets/all-assets | List All Assets From All Wallets
*InformativeApi* | [**listDepositAddresses**](docs/Api/InformativeApi.md#listdepositaddresses) | **GET** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/addresses | List Deposit Addresses
*InformativeApi* | [**listSupportedTokens**](docs/Api/InformativeApi.md#listsupportedtokens) | **GET** /wallet-as-a-service/info/{blockchain}/{network}/supported-tokens | List Supported Tokens
*InformativeApi* | [**listWalletTransactions**](docs/Api/InformativeApi.md#listwallettransactions) | **GET** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/transactions | List Wallet Transactions
*TransactionsApi* | [**createCoinsTransactionFromAddressForWholeAmount**](docs/Api/TransactionsApi.md#createcoinstransactionfromaddressforwholeamount) | **POST** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/addresses/{address}/all-transaction-requests | Create Coins Transaction From Address For Whole Amount
*TransactionsApi* | [**createCoinsTransactionRequestFromAddress**](docs/Api/TransactionsApi.md#createcoinstransactionrequestfromaddress) | **POST** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/addresses/{address}/transaction-requests | Create Coins Transaction Request from Address
*TransactionsApi* | [**createCoinsTransactionRequestFromWallet**](docs/Api/TransactionsApi.md#createcoinstransactionrequestfromwallet) | **POST** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/transaction-requests | Create Coins Transaction Request from Wallet
*TransactionsApi* | [**createFungibleTokenTransactionRequestFromAddressWithoutFeePriority**](docs/Api/TransactionsApi.md#createfungibletokentransactionrequestfromaddresswithoutfeepriority) | **POST** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/addresses/{senderAddress}/feeless-token-transaction-requests | Create Fungible Token Transaction Request From Address Without Fee Priority
*TransactionsApi* | [**createFungibleTokensTransactionRequestFromAddress**](docs/Api/TransactionsApi.md#createfungibletokenstransactionrequestfromaddress) | **POST** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/addresses/{senderAddress}/token-transaction-requests | Create Fungible Tokens Transaction Request From Address
*TransactionsApi* | [**createSingleTransactionRequestFromAddressWithoutFeePriority**](docs/Api/TransactionsApi.md#createsingletransactionrequestfromaddresswithoutfeepriority) | **POST** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/addresses/{address}/feeless-transaction-requests | Create Single Transaction Request From Address Without Fee Priority

## Models

- [BannedIpAddress](docs/Model/BannedIpAddress.md)
- [BannedIpAddressDetailsInner](docs/Model/BannedIpAddressDetailsInner.md)
- [CreateCoinsTransactionFromAddressForWholeAmount400Response](docs/Model/CreateCoinsTransactionFromAddressForWholeAmount400Response.md)
- [CreateCoinsTransactionFromAddressForWholeAmount401Response](docs/Model/CreateCoinsTransactionFromAddressForWholeAmount401Response.md)
- [CreateCoinsTransactionFromAddressForWholeAmount403Response](docs/Model/CreateCoinsTransactionFromAddressForWholeAmount403Response.md)
- [CreateCoinsTransactionFromAddressForWholeAmount409Response](docs/Model/CreateCoinsTransactionFromAddressForWholeAmount409Response.md)
- [CreateCoinsTransactionFromAddressForWholeAmountE400](docs/Model/CreateCoinsTransactionFromAddressForWholeAmountE400.md)
- [CreateCoinsTransactionFromAddressForWholeAmountE401](docs/Model/CreateCoinsTransactionFromAddressForWholeAmountE401.md)
- [CreateCoinsTransactionFromAddressForWholeAmountE403](docs/Model/CreateCoinsTransactionFromAddressForWholeAmountE403.md)
- [CreateCoinsTransactionFromAddressForWholeAmountE409](docs/Model/CreateCoinsTransactionFromAddressForWholeAmountE409.md)
- [CreateCoinsTransactionFromAddressForWholeAmountR](docs/Model/CreateCoinsTransactionFromAddressForWholeAmountR.md)
- [CreateCoinsTransactionFromAddressForWholeAmountRB](docs/Model/CreateCoinsTransactionFromAddressForWholeAmountRB.md)
- [CreateCoinsTransactionFromAddressForWholeAmountRBData](docs/Model/CreateCoinsTransactionFromAddressForWholeAmountRBData.md)
- [CreateCoinsTransactionFromAddressForWholeAmountRBDataItem](docs/Model/CreateCoinsTransactionFromAddressForWholeAmountRBDataItem.md)
- [CreateCoinsTransactionFromAddressForWholeAmountRData](docs/Model/CreateCoinsTransactionFromAddressForWholeAmountRData.md)
- [CreateCoinsTransactionFromAddressForWholeAmountRI](docs/Model/CreateCoinsTransactionFromAddressForWholeAmountRI.md)
- [CreateCoinsTransactionFromAddressForWholeAmountRIRecipientsInner](docs/Model/CreateCoinsTransactionFromAddressForWholeAmountRIRecipientsInner.md)
- [CreateCoinsTransactionFromAddressForWholeAmountRISenders](docs/Model/CreateCoinsTransactionFromAddressForWholeAmountRISenders.md)
- [CreateCoinsTransactionRequestFromAddress400Response](docs/Model/CreateCoinsTransactionRequestFromAddress400Response.md)
- [CreateCoinsTransactionRequestFromAddress401Response](docs/Model/CreateCoinsTransactionRequestFromAddress401Response.md)
- [CreateCoinsTransactionRequestFromAddress403Response](docs/Model/CreateCoinsTransactionRequestFromAddress403Response.md)
- [CreateCoinsTransactionRequestFromAddress409Response](docs/Model/CreateCoinsTransactionRequestFromAddress409Response.md)
- [CreateCoinsTransactionRequestFromAddressE400](docs/Model/CreateCoinsTransactionRequestFromAddressE400.md)
- [CreateCoinsTransactionRequestFromAddressE401](docs/Model/CreateCoinsTransactionRequestFromAddressE401.md)
- [CreateCoinsTransactionRequestFromAddressE403](docs/Model/CreateCoinsTransactionRequestFromAddressE403.md)
- [CreateCoinsTransactionRequestFromAddressE409](docs/Model/CreateCoinsTransactionRequestFromAddressE409.md)
- [CreateCoinsTransactionRequestFromAddressR](docs/Model/CreateCoinsTransactionRequestFromAddressR.md)
- [CreateCoinsTransactionRequestFromAddressRB](docs/Model/CreateCoinsTransactionRequestFromAddressRB.md)
- [CreateCoinsTransactionRequestFromAddressRBData](docs/Model/CreateCoinsTransactionRequestFromAddressRBData.md)
- [CreateCoinsTransactionRequestFromAddressRBDataItem](docs/Model/CreateCoinsTransactionRequestFromAddressRBDataItem.md)
- [CreateCoinsTransactionRequestFromAddressRData](docs/Model/CreateCoinsTransactionRequestFromAddressRData.md)
- [CreateCoinsTransactionRequestFromAddressRI](docs/Model/CreateCoinsTransactionRequestFromAddressRI.md)
- [CreateCoinsTransactionRequestFromAddressRIRecipientsInner](docs/Model/CreateCoinsTransactionRequestFromAddressRIRecipientsInner.md)
- [CreateCoinsTransactionRequestFromAddressRISenders](docs/Model/CreateCoinsTransactionRequestFromAddressRISenders.md)
- [CreateCoinsTransactionRequestFromWallet400Response](docs/Model/CreateCoinsTransactionRequestFromWallet400Response.md)
- [CreateCoinsTransactionRequestFromWallet401Response](docs/Model/CreateCoinsTransactionRequestFromWallet401Response.md)
- [CreateCoinsTransactionRequestFromWallet403Response](docs/Model/CreateCoinsTransactionRequestFromWallet403Response.md)
- [CreateCoinsTransactionRequestFromWallet409Response](docs/Model/CreateCoinsTransactionRequestFromWallet409Response.md)
- [CreateCoinsTransactionRequestFromWalletE400](docs/Model/CreateCoinsTransactionRequestFromWalletE400.md)
- [CreateCoinsTransactionRequestFromWalletE401](docs/Model/CreateCoinsTransactionRequestFromWalletE401.md)
- [CreateCoinsTransactionRequestFromWalletE403](docs/Model/CreateCoinsTransactionRequestFromWalletE403.md)
- [CreateCoinsTransactionRequestFromWalletE409](docs/Model/CreateCoinsTransactionRequestFromWalletE409.md)
- [CreateCoinsTransactionRequestFromWalletR](docs/Model/CreateCoinsTransactionRequestFromWalletR.md)
- [CreateCoinsTransactionRequestFromWalletRB](docs/Model/CreateCoinsTransactionRequestFromWalletRB.md)
- [CreateCoinsTransactionRequestFromWalletRBData](docs/Model/CreateCoinsTransactionRequestFromWalletRBData.md)
- [CreateCoinsTransactionRequestFromWalletRBDataItem](docs/Model/CreateCoinsTransactionRequestFromWalletRBDataItem.md)
- [CreateCoinsTransactionRequestFromWalletRBDataItemRecipientsInner](docs/Model/CreateCoinsTransactionRequestFromWalletRBDataItemRecipientsInner.md)
- [CreateCoinsTransactionRequestFromWalletRData](docs/Model/CreateCoinsTransactionRequestFromWalletRData.md)
- [CreateCoinsTransactionRequestFromWalletRI](docs/Model/CreateCoinsTransactionRequestFromWalletRI.md)
- [CreateCoinsTransactionRequestFromWalletRIRecipientsInner](docs/Model/CreateCoinsTransactionRequestFromWalletRIRecipientsInner.md)
- [CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriority400Response](docs/Model/CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriority400Response.md)
- [CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriority401Response](docs/Model/CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriority401Response.md)
- [CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriority403Response](docs/Model/CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriority403Response.md)
- [CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriority409Response](docs/Model/CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriority409Response.md)
- [CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityE400](docs/Model/CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityE400.md)
- [CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityE401](docs/Model/CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityE401.md)
- [CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityE403](docs/Model/CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityE403.md)
- [CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityE409](docs/Model/CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityE409.md)
- [CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityR](docs/Model/CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityR.md)
- [CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRB](docs/Model/CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRB.md)
- [CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRBData](docs/Model/CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRBData.md)
- [CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRBDataItem](docs/Model/CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRBDataItem.md)
- [CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRData](docs/Model/CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRData.md)
- [CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRI](docs/Model/CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRI.md)
- [CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRIRecipientInner](docs/Model/CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRIRecipientInner.md)
- [CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRIS](docs/Model/CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRIS.md)
- [CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRIST](docs/Model/CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRIST.md)
- [CreateFungibleTokensTransactionRequestFromAddress400Response](docs/Model/CreateFungibleTokensTransactionRequestFromAddress400Response.md)
- [CreateFungibleTokensTransactionRequestFromAddress401Response](docs/Model/CreateFungibleTokensTransactionRequestFromAddress401Response.md)
- [CreateFungibleTokensTransactionRequestFromAddress403Response](docs/Model/CreateFungibleTokensTransactionRequestFromAddress403Response.md)
- [CreateFungibleTokensTransactionRequestFromAddress409Response](docs/Model/CreateFungibleTokensTransactionRequestFromAddress409Response.md)
- [CreateFungibleTokensTransactionRequestFromAddressE400](docs/Model/CreateFungibleTokensTransactionRequestFromAddressE400.md)
- [CreateFungibleTokensTransactionRequestFromAddressE401](docs/Model/CreateFungibleTokensTransactionRequestFromAddressE401.md)
- [CreateFungibleTokensTransactionRequestFromAddressE403](docs/Model/CreateFungibleTokensTransactionRequestFromAddressE403.md)
- [CreateFungibleTokensTransactionRequestFromAddressE409](docs/Model/CreateFungibleTokensTransactionRequestFromAddressE409.md)
- [CreateFungibleTokensTransactionRequestFromAddressR](docs/Model/CreateFungibleTokensTransactionRequestFromAddressR.md)
- [CreateFungibleTokensTransactionRequestFromAddressRB](docs/Model/CreateFungibleTokensTransactionRequestFromAddressRB.md)
- [CreateFungibleTokensTransactionRequestFromAddressRBData](docs/Model/CreateFungibleTokensTransactionRequestFromAddressRBData.md)
- [CreateFungibleTokensTransactionRequestFromAddressRBDataItem](docs/Model/CreateFungibleTokensTransactionRequestFromAddressRBDataItem.md)
- [CreateFungibleTokensTransactionRequestFromAddressRData](docs/Model/CreateFungibleTokensTransactionRequestFromAddressRData.md)
- [CreateFungibleTokensTransactionRequestFromAddressRI](docs/Model/CreateFungibleTokensTransactionRequestFromAddressRI.md)
- [CreateFungibleTokensTransactionRequestFromAddressRIRecipientsInner](docs/Model/CreateFungibleTokensTransactionRequestFromAddressRIRecipientsInner.md)
- [CreateFungibleTokensTransactionRequestFromAddressRIS](docs/Model/CreateFungibleTokensTransactionRequestFromAddressRIS.md)
- [CreateFungibleTokensTransactionRequestFromAddressRISE](docs/Model/CreateFungibleTokensTransactionRequestFromAddressRISE.md)
- [CreateNewMasterWallet400Response](docs/Model/CreateNewMasterWallet400Response.md)
- [CreateNewMasterWallet401Response](docs/Model/CreateNewMasterWallet401Response.md)
- [CreateNewMasterWallet402Response](docs/Model/CreateNewMasterWallet402Response.md)
- [CreateNewMasterWallet403Response](docs/Model/CreateNewMasterWallet403Response.md)
- [CreateNewMasterWallet409Response](docs/Model/CreateNewMasterWallet409Response.md)
- [CreateNewMasterWallet415Response](docs/Model/CreateNewMasterWallet415Response.md)
- [CreateNewMasterWallet422Response](docs/Model/CreateNewMasterWallet422Response.md)
- [CreateNewMasterWallet429Response](docs/Model/CreateNewMasterWallet429Response.md)
- [CreateNewMasterWallet500Response](docs/Model/CreateNewMasterWallet500Response.md)
- [CreateNewMasterWalletE400](docs/Model/CreateNewMasterWalletE400.md)
- [CreateNewMasterWalletE401](docs/Model/CreateNewMasterWalletE401.md)
- [CreateNewMasterWalletE403](docs/Model/CreateNewMasterWalletE403.md)
- [CreateNewMasterWalletR](docs/Model/CreateNewMasterWalletR.md)
- [CreateNewMasterWalletRB](docs/Model/CreateNewMasterWalletRB.md)
- [CreateNewMasterWalletRBData](docs/Model/CreateNewMasterWalletRBData.md)
- [CreateNewMasterWalletRBDataItem](docs/Model/CreateNewMasterWalletRBDataItem.md)
- [CreateNewMasterWalletRData](docs/Model/CreateNewMasterWalletRData.md)
- [CreateNewMasterWalletRI](docs/Model/CreateNewMasterWalletRI.md)
- [CreateSingleTransactionRequestFromAddressWithoutFeePriority400Response](docs/Model/CreateSingleTransactionRequestFromAddressWithoutFeePriority400Response.md)
- [CreateSingleTransactionRequestFromAddressWithoutFeePriority401Response](docs/Model/CreateSingleTransactionRequestFromAddressWithoutFeePriority401Response.md)
- [CreateSingleTransactionRequestFromAddressWithoutFeePriority403Response](docs/Model/CreateSingleTransactionRequestFromAddressWithoutFeePriority403Response.md)
- [CreateSingleTransactionRequestFromAddressWithoutFeePriority409Response](docs/Model/CreateSingleTransactionRequestFromAddressWithoutFeePriority409Response.md)
- [CreateSingleTransactionRequestFromAddressWithoutFeePriorityE400](docs/Model/CreateSingleTransactionRequestFromAddressWithoutFeePriorityE400.md)
- [CreateSingleTransactionRequestFromAddressWithoutFeePriorityE401](docs/Model/CreateSingleTransactionRequestFromAddressWithoutFeePriorityE401.md)
- [CreateSingleTransactionRequestFromAddressWithoutFeePriorityE403](docs/Model/CreateSingleTransactionRequestFromAddressWithoutFeePriorityE403.md)
- [CreateSingleTransactionRequestFromAddressWithoutFeePriorityE409](docs/Model/CreateSingleTransactionRequestFromAddressWithoutFeePriorityE409.md)
- [CreateSingleTransactionRequestFromAddressWithoutFeePriorityR](docs/Model/CreateSingleTransactionRequestFromAddressWithoutFeePriorityR.md)
- [CreateSingleTransactionRequestFromAddressWithoutFeePriorityRB](docs/Model/CreateSingleTransactionRequestFromAddressWithoutFeePriorityRB.md)
- [CreateSingleTransactionRequestFromAddressWithoutFeePriorityRBData](docs/Model/CreateSingleTransactionRequestFromAddressWithoutFeePriorityRBData.md)
- [CreateSingleTransactionRequestFromAddressWithoutFeePriorityRBDataItem](docs/Model/CreateSingleTransactionRequestFromAddressWithoutFeePriorityRBDataItem.md)
- [CreateSingleTransactionRequestFromAddressWithoutFeePriorityRData](docs/Model/CreateSingleTransactionRequestFromAddressWithoutFeePriorityRData.md)
- [CreateSingleTransactionRequestFromAddressWithoutFeePriorityRI](docs/Model/CreateSingleTransactionRequestFromAddressWithoutFeePriorityRI.md)
- [CreateSingleTransactionRequestFromAddressWithoutFeePriorityRIRecipientInner](docs/Model/CreateSingleTransactionRequestFromAddressWithoutFeePriorityRIRecipientInner.md)
- [CreateSingleTransactionRequestFromAddressWithoutFeePriorityRISender](docs/Model/CreateSingleTransactionRequestFromAddressWithoutFeePriorityRISender.md)
- [CreateSingleTransactionRequestFromAddressWithoutFeePriorityRITotalAmount](docs/Model/CreateSingleTransactionRequestFromAddressWithoutFeePriorityRITotalAmount.md)
- [EndpointNotAllowedForApiKey](docs/Model/EndpointNotAllowedForApiKey.md)
- [EndpointNotAllowedForPlan](docs/Model/EndpointNotAllowedForPlan.md)
- [FeatureMainnetsNotAllowedForPlan](docs/Model/FeatureMainnetsNotAllowedForPlan.md)
- [GenerateDepositAddress400Response](docs/Model/GenerateDepositAddress400Response.md)
- [GenerateDepositAddress401Response](docs/Model/GenerateDepositAddress401Response.md)
- [GenerateDepositAddress403Response](docs/Model/GenerateDepositAddress403Response.md)
- [GenerateDepositAddressE400](docs/Model/GenerateDepositAddressE400.md)
- [GenerateDepositAddressE401](docs/Model/GenerateDepositAddressE401.md)
- [GenerateDepositAddressE403](docs/Model/GenerateDepositAddressE403.md)
- [GenerateDepositAddressR](docs/Model/GenerateDepositAddressR.md)
- [GenerateDepositAddressRB](docs/Model/GenerateDepositAddressRB.md)
- [GenerateDepositAddressRBData](docs/Model/GenerateDepositAddressRBData.md)
- [GenerateDepositAddressRBDataItem](docs/Model/GenerateDepositAddressRBDataItem.md)
- [GenerateDepositAddressRData](docs/Model/GenerateDepositAddressRData.md)
- [GenerateDepositAddressRI](docs/Model/GenerateDepositAddressRI.md)
- [GetTransactionRequestDetails400Response](docs/Model/GetTransactionRequestDetails400Response.md)
- [GetTransactionRequestDetails401Response](docs/Model/GetTransactionRequestDetails401Response.md)
- [GetTransactionRequestDetails403Response](docs/Model/GetTransactionRequestDetails403Response.md)
- [GetTransactionRequestDetailsE400](docs/Model/GetTransactionRequestDetailsE400.md)
- [GetTransactionRequestDetailsE401](docs/Model/GetTransactionRequestDetailsE401.md)
- [GetTransactionRequestDetailsE403](docs/Model/GetTransactionRequestDetailsE403.md)
- [GetTransactionRequestDetailsR](docs/Model/GetTransactionRequestDetailsR.md)
- [GetTransactionRequestDetailsRData](docs/Model/GetTransactionRequestDetailsRData.md)
- [GetTransactionRequestDetailsRI](docs/Model/GetTransactionRequestDetailsRI.md)
- [GetTransactionRequestDetailsRIRecipientsInner](docs/Model/GetTransactionRequestDetailsRIRecipientsInner.md)
- [GetWalletAssetDetails400Response](docs/Model/GetWalletAssetDetails400Response.md)
- [GetWalletAssetDetails401Response](docs/Model/GetWalletAssetDetails401Response.md)
- [GetWalletAssetDetails403Response](docs/Model/GetWalletAssetDetails403Response.md)
- [GetWalletAssetDetailsE400](docs/Model/GetWalletAssetDetailsE400.md)
- [GetWalletAssetDetailsE401](docs/Model/GetWalletAssetDetailsE401.md)
- [GetWalletAssetDetailsE403](docs/Model/GetWalletAssetDetailsE403.md)
- [GetWalletAssetDetailsR](docs/Model/GetWalletAssetDetailsR.md)
- [GetWalletAssetDetailsRData](docs/Model/GetWalletAssetDetailsRData.md)
- [GetWalletAssetDetailsRI](docs/Model/GetWalletAssetDetailsRI.md)
- [GetWalletAssetDetailsRIConfirmedBalance](docs/Model/GetWalletAssetDetailsRIConfirmedBalance.md)
- [GetWalletAssetDetailsRIFungibleTokensInner](docs/Model/GetWalletAssetDetailsRIFungibleTokensInner.md)
- [GetWalletAssetDetailsRINonFungibleTokensInner](docs/Model/GetWalletAssetDetailsRINonFungibleTokensInner.md)
- [GetWalletAssetDetailsRIRecievedConfirmedAmount](docs/Model/GetWalletAssetDetailsRIRecievedConfirmedAmount.md)
- [GetWalletAssetDetailsRISentConfirmedAmount](docs/Model/GetWalletAssetDetailsRISentConfirmedAmount.md)
- [GetWalletTransactionDetailsByTransactionID400Response](docs/Model/GetWalletTransactionDetailsByTransactionID400Response.md)
- [GetWalletTransactionDetailsByTransactionID401Response](docs/Model/GetWalletTransactionDetailsByTransactionID401Response.md)
- [GetWalletTransactionDetailsByTransactionID403Response](docs/Model/GetWalletTransactionDetailsByTransactionID403Response.md)
- [GetWalletTransactionDetailsByTransactionIDE400](docs/Model/GetWalletTransactionDetailsByTransactionIDE400.md)
- [GetWalletTransactionDetailsByTransactionIDE401](docs/Model/GetWalletTransactionDetailsByTransactionIDE401.md)
- [GetWalletTransactionDetailsByTransactionIDE403](docs/Model/GetWalletTransactionDetailsByTransactionIDE403.md)
- [GetWalletTransactionDetailsByTransactionIDR](docs/Model/GetWalletTransactionDetailsByTransactionIDR.md)
- [GetWalletTransactionDetailsByTransactionIDRData](docs/Model/GetWalletTransactionDetailsByTransactionIDRData.md)
- [GetWalletTransactionDetailsByTransactionIDRI](docs/Model/GetWalletTransactionDetailsByTransactionIDRI.md)
- [GetWalletTransactionDetailsByTransactionIDRIBS](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBS.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSB](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSB.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSBC](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSBC.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSBCVinInner](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSBCVinInner.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSBCVinInnerScriptSig](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSBCVinInnerScriptSig.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSBCVoutInner](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSBCVoutInner.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSBCVoutInnerScriptPubKey](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSBCVoutInnerScriptPubKey.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSBSC](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSBSC.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSBSCGasPrice](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSBSCGasPrice.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSBVinInner](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSBVinInner.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSBVinInnerScriptSig](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSBVinInnerScriptSig.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSBVoutInner](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSBVoutInner.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSBVoutInnerScriptPubKey](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSBVoutInnerScriptPubKey.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSD](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSD.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSD2](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSD2.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSD2VinInner](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSD2VinInner.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSD2VinInnerScriptSig](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSD2VinInnerScriptSig.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSD2VoutInner](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSD2VoutInner.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSD2VoutInnerScriptPubKey](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSD2VoutInnerScriptPubKey.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSDVinInner](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSDVinInner.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSDVinInnerScriptSig](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSDVinInnerScriptSig.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSDVoutInner](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSDVoutInner.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSDVoutInnerScriptPubKey](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSDVoutInnerScriptPubKey.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSE](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSE.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSEC](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSEC.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSECGasPrice](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSECGasPrice.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSEGasPrice](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSEGasPrice.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSL](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSL.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSLVinInner](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSLVinInner.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSLVinInnerScriptSig](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSLVinInnerScriptSig.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSLVoutInner](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSLVoutInner.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSLVoutInnerScriptPubKey](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSLVoutInnerScriptPubKey.md)
- [GetWalletTransactionDetailsByTransactionIDRIBST](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBST.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSZ](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSZ.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSZVJoinSplitInner](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSZVJoinSplitInner.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSZVShieldedOutputInner](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSZVShieldedOutputInner.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSZVShieldedSpendInner](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSZVShieldedSpendInner.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSZVinInner](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSZVinInner.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSZVinInnerScriptSig](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSZVinInnerScriptSig.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSZVoutInner](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSZVoutInner.md)
- [GetWalletTransactionDetailsByTransactionIDRIBSZVoutInnerScriptPubKey](docs/Model/GetWalletTransactionDetailsByTransactionIDRIBSZVoutInnerScriptPubKey.md)
- [GetWalletTransactionDetailsByTransactionIDRIFee](docs/Model/GetWalletTransactionDetailsByTransactionIDRIFee.md)
- [GetWalletTransactionDetailsByTransactionIDRIRecipientsInner](docs/Model/GetWalletTransactionDetailsByTransactionIDRIRecipientsInner.md)
- [GetWalletTransactionDetailsByTransactionIDRISendersInner](docs/Model/GetWalletTransactionDetailsByTransactionIDRISendersInner.md)
- [InsufficientCredits](docs/Model/InsufficientCredits.md)
- [InvalidApiKey](docs/Model/InvalidApiKey.md)
- [InvalidData](docs/Model/InvalidData.md)
- [InvalidPagination](docs/Model/InvalidPagination.md)
- [InvalidRequestBodyStructure](docs/Model/InvalidRequestBodyStructure.md)
- [LimitGreaterThanAllowed](docs/Model/LimitGreaterThanAllowed.md)
- [ListAllAssetsByWalletID400Response](docs/Model/ListAllAssetsByWalletID400Response.md)
- [ListAllAssetsByWalletID401Response](docs/Model/ListAllAssetsByWalletID401Response.md)
- [ListAllAssetsByWalletID403Response](docs/Model/ListAllAssetsByWalletID403Response.md)
- [ListAllAssetsByWalletIDE400](docs/Model/ListAllAssetsByWalletIDE400.md)
- [ListAllAssetsByWalletIDE401](docs/Model/ListAllAssetsByWalletIDE401.md)
- [ListAllAssetsByWalletIDE403](docs/Model/ListAllAssetsByWalletIDE403.md)
- [ListAllAssetsByWalletIDR](docs/Model/ListAllAssetsByWalletIDR.md)
- [ListAllAssetsByWalletIDRData](docs/Model/ListAllAssetsByWalletIDRData.md)
- [ListAllAssetsByWalletIDRI](docs/Model/ListAllAssetsByWalletIDRI.md)
- [ListAllAssetsFromAllWallets400Response](docs/Model/ListAllAssetsFromAllWallets400Response.md)
- [ListAllAssetsFromAllWallets401Response](docs/Model/ListAllAssetsFromAllWallets401Response.md)
- [ListAllAssetsFromAllWallets403Response](docs/Model/ListAllAssetsFromAllWallets403Response.md)
- [ListAllAssetsFromAllWalletsE400](docs/Model/ListAllAssetsFromAllWalletsE400.md)
- [ListAllAssetsFromAllWalletsE401](docs/Model/ListAllAssetsFromAllWalletsE401.md)
- [ListAllAssetsFromAllWalletsE403](docs/Model/ListAllAssetsFromAllWalletsE403.md)
- [ListAllAssetsFromAllWalletsR](docs/Model/ListAllAssetsFromAllWalletsR.md)
- [ListAllAssetsFromAllWalletsRData](docs/Model/ListAllAssetsFromAllWalletsRData.md)
- [ListAllAssetsFromAllWalletsRI](docs/Model/ListAllAssetsFromAllWalletsRI.md)
- [ListAllAssetsFromAllWalletsRICoinsInner](docs/Model/ListAllAssetsFromAllWalletsRICoinsInner.md)
- [ListAllAssetsFromAllWalletsRIFungibleTokensInner](docs/Model/ListAllAssetsFromAllWalletsRIFungibleTokensInner.md)
- [ListAllAssetsFromAllWalletsRINonFungibleTokensInner](docs/Model/ListAllAssetsFromAllWalletsRINonFungibleTokensInner.md)
- [ListDepositAddresses400Response](docs/Model/ListDepositAddresses400Response.md)
- [ListDepositAddresses401Response](docs/Model/ListDepositAddresses401Response.md)
- [ListDepositAddresses403Response](docs/Model/ListDepositAddresses403Response.md)
- [ListDepositAddresses404Response](docs/Model/ListDepositAddresses404Response.md)
- [ListDepositAddressesE400](docs/Model/ListDepositAddressesE400.md)
- [ListDepositAddressesE401](docs/Model/ListDepositAddressesE401.md)
- [ListDepositAddressesE403](docs/Model/ListDepositAddressesE403.md)
- [ListDepositAddressesR](docs/Model/ListDepositAddressesR.md)
- [ListDepositAddressesRData](docs/Model/ListDepositAddressesRData.md)
- [ListDepositAddressesRI](docs/Model/ListDepositAddressesRI.md)
- [ListDepositAddressesRIConfirmedBalance](docs/Model/ListDepositAddressesRIConfirmedBalance.md)
- [ListDepositAddressesRIFungibleTokensInner](docs/Model/ListDepositAddressesRIFungibleTokensInner.md)
- [ListDepositAddressesRINonFungibleTokensInner](docs/Model/ListDepositAddressesRINonFungibleTokensInner.md)
- [ListSupportedTokens400Response](docs/Model/ListSupportedTokens400Response.md)
- [ListSupportedTokens401Response](docs/Model/ListSupportedTokens401Response.md)
- [ListSupportedTokens403Response](docs/Model/ListSupportedTokens403Response.md)
- [ListSupportedTokensE400](docs/Model/ListSupportedTokensE400.md)
- [ListSupportedTokensE401](docs/Model/ListSupportedTokensE401.md)
- [ListSupportedTokensE403](docs/Model/ListSupportedTokensE403.md)
- [ListSupportedTokensR](docs/Model/ListSupportedTokensR.md)
- [ListSupportedTokensRData](docs/Model/ListSupportedTokensRData.md)
- [ListSupportedTokensRI](docs/Model/ListSupportedTokensRI.md)
- [ListWalletTransactions400Response](docs/Model/ListWalletTransactions400Response.md)
- [ListWalletTransactions401Response](docs/Model/ListWalletTransactions401Response.md)
- [ListWalletTransactions403Response](docs/Model/ListWalletTransactions403Response.md)
- [ListWalletTransactionsE400](docs/Model/ListWalletTransactionsE400.md)
- [ListWalletTransactionsE401](docs/Model/ListWalletTransactionsE401.md)
- [ListWalletTransactionsE403](docs/Model/ListWalletTransactionsE403.md)
- [ListWalletTransactionsR](docs/Model/ListWalletTransactionsR.md)
- [ListWalletTransactionsRData](docs/Model/ListWalletTransactionsRData.md)
- [ListWalletTransactionsRI](docs/Model/ListWalletTransactionsRI.md)
- [ListWalletTransactionsRIFee](docs/Model/ListWalletTransactionsRIFee.md)
- [ListWalletTransactionsRIFungibleTokensInner](docs/Model/ListWalletTransactionsRIFungibleTokensInner.md)
- [ListWalletTransactionsRIInternalTransactionsInner](docs/Model/ListWalletTransactionsRIInternalTransactionsInner.md)
- [ListWalletTransactionsRINonFungibleTokensInner](docs/Model/ListWalletTransactionsRINonFungibleTokensInner.md)
- [ListWalletTransactionsRIRecipientsInner](docs/Model/ListWalletTransactionsRIRecipientsInner.md)
- [ListWalletTransactionsRISendersInner](docs/Model/ListWalletTransactionsRISendersInner.md)
- [ListWalletTransactionsRIValue](docs/Model/ListWalletTransactionsRIValue.md)
- [MissingApiKey](docs/Model/MissingApiKey.md)
- [RequestLimitReached](docs/Model/RequestLimitReached.md)
- [ResourceNotFound](docs/Model/ResourceNotFound.md)
- [UnexpectedServerError](docs/Model/UnexpectedServerError.md)
- [UnsupportedMediaType](docs/Model/UnsupportedMediaType.md)
- [UriNotFound](docs/Model/UriNotFound.md)
- [WalletAsAServiceAddressBalanceNotEnough](docs/Model/WalletAsAServiceAddressBalanceNotEnough.md)
- [WalletAsAServiceDepositAddressesLimitReached](docs/Model/WalletAsAServiceDepositAddressesLimitReached.md)
- [WalletAsAServiceNoDepositAddressesFound](docs/Model/WalletAsAServiceNoDepositAddressesFound.md)
- [WalletAsAServiceProvidedNetworkIsNotSuitableForThisWalletType](docs/Model/WalletAsAServiceProvidedNetworkIsNotSuitableForThisWalletType.md)
- [WalletAsAServiceTokenNotSupported](docs/Model/WalletAsAServiceTokenNotSupported.md)
- [WalletAsAServiceWalletBalanceNotEnough](docs/Model/WalletAsAServiceWalletBalanceNotEnough.md)
- [WalletAsAServiceWalletsLimitReached](docs/Model/WalletAsAServiceWalletsLimitReached.md)

## Authorization

### ApiKey

- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header



### ApiSign

- **Type**: API key
- **API key parameter name**: x-api-sign
- **Location**: HTTP header



### ApiTimestamp

- **Type**: API key
- **API key parameter name**: x-api-timestamp
- **Location**: HTTP header



### ApiPassphrase

- **Type**: API key
- **API key parameter name**: x-api-passphrase
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

developers@vaultody.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2023-04-20`
    - Package version: `1.0.2`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
