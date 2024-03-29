# # RemoteUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**first_name** | **string** | The user&#39;s first name. | [optional]
**last_name** | **string** | The user&#39;s last name. | [optional]
**email** | **string** | The user&#39;s email. | [optional]
**disabled** | **bool** | Whether the user&#39;s account had been disabled. | [optional]
**remote_created_at** | [**\DateTime**](\DateTime.md) | When the third party&#39;s user was created. | [optional]
**access_role** | [**AccessRoleEnum**](AccessRoleEnum.md) | The user&#39;s role. | [optional]
**remote_data** | [**\MergeATSClient\Model\RemoteData[]**](RemoteData.md) |  | [optional] [readonly]
**remote_was_deleted** | **bool** | Indicates whether or not this object has been deleted by third party webhooks. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
