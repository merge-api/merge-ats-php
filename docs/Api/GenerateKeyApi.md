# MergeATSClient\GenerateKeyApi

All URIs are relative to https://api.merge.dev/api/ats/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateKeyCreate()**](GenerateKeyApi.md#generateKeyCreate) | **POST** /generate-key | 


## `generateKeyCreate()`

```php
generateKeyCreate($generate_remote_key_request): \MergeATSClient\Model\RemoteKey
```



Create a remote key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeATSClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeATSClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeATSClient\Api\GenerateKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_remote_key_request = new \MergeATSClient\Model\GenerateRemoteKeyRequest(); // \MergeATSClient\Model\GenerateRemoteKeyRequest

try {
    $result = $apiInstance->generateKeyCreate($generate_remote_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenerateKeyApi->generateKeyCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generate_remote_key_request** | [**\MergeATSClient\Model\GenerateRemoteKeyRequest**](../Model/GenerateRemoteKeyRequest.md)|  |

### Return type

[**\MergeATSClient\Model\RemoteKey**](../Model/RemoteKey.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
