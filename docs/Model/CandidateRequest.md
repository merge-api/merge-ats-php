# # CandidateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**first_name** | **string** | The candidate&#39;s first name. | [optional]
**last_name** | **string** | The candidate&#39;s last name. | [optional]
**company** | **string** | The candidate&#39;s current company. | [optional]
**title** | **string** | The candidate&#39;s current title. | [optional]
**remote_created_at** | [**\DateTime**](\DateTime.md) | When the third party&#39;s candidate was created. | [optional]
**remote_updated_at** | [**\DateTime**](\DateTime.md) | When the third party&#39;s candidate was updated. | [optional]
**last_interaction_at** | [**\DateTime**](\DateTime.md) | When the most recent candidate interaction occurred. | [optional]
**is_private** | **bool** | Whether or not the candidate is private. | [optional]
**can_email** | **bool** | Whether or not the candidate can be emailed. | [optional]
**locations** | **string[]** | The candidate&#39;s locations. | [optional]
**phone_numbers** | [**\MergeATSClient\Model\PhoneNumberRequest[]**](PhoneNumberRequest.md) |  | [optional]
**email_addresses** | [**\MergeATSClient\Model\EmailAddressRequest[]**](EmailAddressRequest.md) |  | [optional]
**urls** | [**\MergeATSClient\Model\UrlRequest[]**](UrlRequest.md) |  | [optional]
**tags** | **string[]** | Array of &#x60;Tag&#x60; names as strings. | [optional]
**applications** | **string[]** | Array of &#x60;Application&#x60; object IDs. | [optional]
**attachments** | **string[]** | Array of &#x60;Attachment&#x60; object IDs. | [optional]
**custom_fields** | **array<string,mixed>** | Custom fields configured for a given model. | [optional]
**remote_template_id** | **string** |  | [optional]
**integration_params** | **array<string,mixed>** |  | [optional]
**linked_account_params** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
