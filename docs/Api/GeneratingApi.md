# kocetestpack\GeneratingApi

All URIs are relative to https://rest.vaultody.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNewMasterWallet()**](GeneratingApi.md#createNewMasterWallet) | **POST** /wallet-as-a-service/wallets/generate | Create New Master Wallet |
| [**generateDepositAddress()**](GeneratingApi.md#generateDepositAddress) | **POST** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/addresses | Generate Deposit Address |


## `createNewMasterWallet()`

```php
createNewMasterWallet($context, $create_new_master_wallet_rb): \kocetestpack\Model\CreateNewMasterWalletR
```

Create New Master Wallet

Through this endpoint users can easily create a new Master Wallet through the API. The user provides the desired Wallet name and in return the response includes the `walletId`. That new Wallet can be additionally also backed up through the Vaultody Dashboard.

### Example

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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **create_new_master_wallet_rb** | [**\kocetestpack\Model\CreateNewMasterWalletRB**](../Model/CreateNewMasterWalletRB.md)|  | [optional] |

### Return type

[**\kocetestpack\Model\CreateNewMasterWalletR**](../Model/CreateNewMasterWalletR.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [ApiSign](../../README.md#ApiSign), [ApiPassphrase](../../README.md#ApiPassphrase), [ApiTimestamp](../../README.md#ApiTimestamp)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateDepositAddress()`

```php
generateDepositAddress($blockchain, $network, $wallet_id, $context, $generate_deposit_address_rb): \kocetestpack\Model\GenerateDepositAddressR
```

Generate Deposit Address

Through this endpoint customers can generate a new Receiving/Deposit Addresses into their Wallet.

### Example

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
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"goerli\" are test networks.
$wallet_id = 60c9d9921c38030006675ff6; // string | Represents the unique ID of the specific Wallet.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$generate_deposit_address_rb = new \kocetestpack\Model\GenerateDepositAddressRB(); // \kocetestpack\Model\GenerateDepositAddressRB

try {
    $result = $apiInstance->generateDepositAddress($blockchain, $network, $wallet_id, $context, $generate_deposit_address_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneratingApi->generateDepositAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;goerli\&quot; are test networks. | |
| **wallet_id** | **string**| Represents the unique ID of the specific Wallet. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **generate_deposit_address_rb** | [**\kocetestpack\Model\GenerateDepositAddressRB**](../Model/GenerateDepositAddressRB.md)|  | [optional] |

### Return type

[**\kocetestpack\Model\GenerateDepositAddressR**](../Model/GenerateDepositAddressR.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [ApiSign](../../README.md#ApiSign), [ApiPassphrase](../../README.md#ApiPassphrase), [ApiTimestamp](../../README.md#ApiTimestamp)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
