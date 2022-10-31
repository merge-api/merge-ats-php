# MergeATSClient\SelectiveSyncApi

All URIs are relative to https://api.merge.dev/api/ats/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**selectiveSyncConfigurationsList()**](SelectiveSyncApi.md#selectiveSyncConfigurationsList) | **GET** /selective-sync/configurations | 
[**selectiveSyncConfigurationsUpdate()**](SelectiveSyncApi.md#selectiveSyncConfigurationsUpdate) | **PUT** /selective-sync/configurations | 
[**selectiveSyncMetaList()**](SelectiveSyncApi.md#selectiveSyncMetaList) | **GET** /selective-sync/meta | 


## `selectiveSyncConfigurationsList()`

```php
selectiveSyncConfigurationsList($x_account_token): \MergeATSClient\Model\LinkedAccountSelectiveSyncConfiguration[]
```



Get a linked account's selective syncs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeATSClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeATSClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeATSClient\Api\SelectiveSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.

try {
    $result = $apiInstance->selectiveSyncConfigurationsList($x_account_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelectiveSyncApi->selectiveSyncConfigurationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |

### Return type

[**\MergeATSClient\Model\LinkedAccountSelectiveSyncConfiguration[]**](../Model/LinkedAccountSelectiveSyncConfiguration.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `selectiveSyncConfigurationsUpdate()`

```php
selectiveSyncConfigurationsUpdate($x_account_token, $linked_account_selective_sync_configuration_list_request): \MergeATSClient\Model\LinkedAccountSelectiveSyncConfiguration[]
```



Replace a linked account's selective syncs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeATSClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeATSClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeATSClient\Api\SelectiveSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$linked_account_selective_sync_configuration_list_request = {"linked_account_conditons":[{"condition_schema_id":"123e4567-e89b-12d3-a456-426655440000","operator":"GREATER_THAN_OR_EQUAL","value":"2022-01-01T00:00:00Z"}]}; // \MergeATSClient\Model\LinkedAccountSelectiveSyncConfigurationListRequest

try {
    $result = $apiInstance->selectiveSyncConfigurationsUpdate($x_account_token, $linked_account_selective_sync_configuration_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelectiveSyncApi->selectiveSyncConfigurationsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **linked_account_selective_sync_configuration_list_request** | [**\MergeATSClient\Model\LinkedAccountSelectiveSyncConfigurationListRequest**](../Model/LinkedAccountSelectiveSyncConfigurationListRequest.md)|  |

### Return type

[**\MergeATSClient\Model\LinkedAccountSelectiveSyncConfiguration[]**](../Model/LinkedAccountSelectiveSyncConfiguration.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `selectiveSyncMetaList()`

```php
selectiveSyncMetaList($x_account_token, $common_model, $cursor, $page_size): \MergeATSClient\Model\PaginatedConditionSchemaList
```



Get metadata for the conditions available to a linked account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeATSClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeATSClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeATSClient\Api\SelectiveSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$common_model = 'common_model_example'; // string
$cursor = 56; // int | The pagination cursor value.
$page_size = 56; // int | Number of results to return per page.

try {
    $result = $apiInstance->selectiveSyncMetaList($x_account_token, $common_model, $cursor, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelectiveSyncApi->selectiveSyncMetaList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **common_model** | **string**|  | [optional]
 **cursor** | **int**| The pagination cursor value. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]

### Return type

[**\MergeATSClient\Model\PaginatedConditionSchemaList**](../Model/PaginatedConditionSchemaList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
