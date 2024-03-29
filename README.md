# MergeATSClient

The unified API for building rich integrations with multiple Applicant Tracking System platforms.

For more information, please visit [https://www.merge.dev/](https://www.merge.dev/).

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/merge-api/merge-ats-php.git"
    }
  ],
  "require": {
    "merge-api/merge-ats-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/MergeATSClient/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: tokenAuth
$config = MergeATSClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeATSClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeATSClient\Api\AccountDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.

try {
    $result = $apiInstance->accountDetailsRetrieve($x_account_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDetailsApi->accountDetailsRetrieve: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.merge.dev/api/ats/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountDetailsApi* | [**accountDetailsRetrieve**](docs/Api/AccountDetailsApi.md#accountdetailsretrieve) | **GET** /account-details | 
*AccountTokenApi* | [**accountTokenRetrieve**](docs/Api/AccountTokenApi.md#accounttokenretrieve) | **GET** /account-token/{public_token} | 
*ActivitiesApi* | [**activitiesList**](docs/Api/ActivitiesApi.md#activitieslist) | **GET** /activities | 
*ActivitiesApi* | [**activitiesRetrieve**](docs/Api/ActivitiesApi.md#activitiesretrieve) | **GET** /activities/{id} | 
*ApplicationsApi* | [**applicationsChangeStageCreate**](docs/Api/ApplicationsApi.md#applicationschangestagecreate) | **POST** /applications/{id}/change-stage | 
*ApplicationsApi* | [**applicationsCreate**](docs/Api/ApplicationsApi.md#applicationscreate) | **POST** /applications | 
*ApplicationsApi* | [**applicationsList**](docs/Api/ApplicationsApi.md#applicationslist) | **GET** /applications | 
*ApplicationsApi* | [**applicationsMetaPostRetrieve**](docs/Api/ApplicationsApi.md#applicationsmetapostretrieve) | **GET** /applications/meta/post | 
*ApplicationsApi* | [**applicationsRetrieve**](docs/Api/ApplicationsApi.md#applicationsretrieve) | **GET** /applications/{id} | 
*AttachmentsApi* | [**attachmentsCreate**](docs/Api/AttachmentsApi.md#attachmentscreate) | **POST** /attachments | 
*AttachmentsApi* | [**attachmentsList**](docs/Api/AttachmentsApi.md#attachmentslist) | **GET** /attachments | 
*AttachmentsApi* | [**attachmentsMetaPostRetrieve**](docs/Api/AttachmentsApi.md#attachmentsmetapostretrieve) | **GET** /attachments/meta/post | 
*AttachmentsApi* | [**attachmentsRetrieve**](docs/Api/AttachmentsApi.md#attachmentsretrieve) | **GET** /attachments/{id} | 
*AvailableActionsApi* | [**availableActionsRetrieve**](docs/Api/AvailableActionsApi.md#availableactionsretrieve) | **GET** /available-actions | 
*CandidatesApi* | [**candidatesCreate**](docs/Api/CandidatesApi.md#candidatescreate) | **POST** /candidates | 
*CandidatesApi* | [**candidatesIgnoreCreate**](docs/Api/CandidatesApi.md#candidatesignorecreate) | **POST** /candidates/ignore/{model_id} | 
*CandidatesApi* | [**candidatesList**](docs/Api/CandidatesApi.md#candidateslist) | **GET** /candidates | 
*CandidatesApi* | [**candidatesMetaPostRetrieve**](docs/Api/CandidatesApi.md#candidatesmetapostretrieve) | **GET** /candidates/meta/post | 
*CandidatesApi* | [**candidatesRetrieve**](docs/Api/CandidatesApi.md#candidatesretrieve) | **GET** /candidates/{id} | 
*DeleteAccountApi* | [**deleteAccountCreate**](docs/Api/DeleteAccountApi.md#deleteaccountcreate) | **POST** /delete-account | 
*DepartmentsApi* | [**departmentsList**](docs/Api/DepartmentsApi.md#departmentslist) | **GET** /departments | 
*DepartmentsApi* | [**departmentsRetrieve**](docs/Api/DepartmentsApi.md#departmentsretrieve) | **GET** /departments/{id} | 
*EeocsApi* | [**eeocsList**](docs/Api/EeocsApi.md#eeocslist) | **GET** /eeocs | 
*EeocsApi* | [**eeocsRetrieve**](docs/Api/EeocsApi.md#eeocsretrieve) | **GET** /eeocs/{id} | 
*ForceResyncApi* | [**syncStatusResyncCreate**](docs/Api/ForceResyncApi.md#syncstatusresynccreate) | **POST** /sync-status/resync | 
*GenerateKeyApi* | [**generateKeyCreate**](docs/Api/GenerateKeyApi.md#generatekeycreate) | **POST** /generate-key | 
*InterviewsApi* | [**interviewsList**](docs/Api/InterviewsApi.md#interviewslist) | **GET** /interviews | 
*InterviewsApi* | [**interviewsRetrieve**](docs/Api/InterviewsApi.md#interviewsretrieve) | **GET** /interviews/{id} | 
*IssuesApi* | [**issuesList**](docs/Api/IssuesApi.md#issueslist) | **GET** /issues | 
*IssuesApi* | [**issuesRetrieve**](docs/Api/IssuesApi.md#issuesretrieve) | **GET** /issues/{id} | 
*JobInterviewStagesApi* | [**jobInterviewStagesList**](docs/Api/JobInterviewStagesApi.md#jobinterviewstageslist) | **GET** /job-interview-stages | 
*JobInterviewStagesApi* | [**jobInterviewStagesRetrieve**](docs/Api/JobInterviewStagesApi.md#jobinterviewstagesretrieve) | **GET** /job-interview-stages/{id} | 
*JobsApi* | [**jobsList**](docs/Api/JobsApi.md#jobslist) | **GET** /jobs | 
*JobsApi* | [**jobsRetrieve**](docs/Api/JobsApi.md#jobsretrieve) | **GET** /jobs/{id} | 
*LinkTokenApi* | [**linkTokenCreate**](docs/Api/LinkTokenApi.md#linktokencreate) | **POST** /link-token | 
*LinkedAccountsApi* | [**linkedAccountsList**](docs/Api/LinkedAccountsApi.md#linkedaccountslist) | **GET** /linked-accounts | 
*OffersApi* | [**offersList**](docs/Api/OffersApi.md#offerslist) | **GET** /offers | 
*OffersApi* | [**offersRetrieve**](docs/Api/OffersApi.md#offersretrieve) | **GET** /offers/{id} | 
*OfficesApi* | [**officesList**](docs/Api/OfficesApi.md#officeslist) | **GET** /offices | 
*OfficesApi* | [**officesRetrieve**](docs/Api/OfficesApi.md#officesretrieve) | **GET** /offices/{id} | 
*PassthroughApi* | [**passthroughCreate**](docs/Api/PassthroughApi.md#passthroughcreate) | **POST** /passthrough | 
*RegenerateKeyApi* | [**regenerateKeyCreate**](docs/Api/RegenerateKeyApi.md#regeneratekeycreate) | **POST** /regenerate-key | 
*RejectReasonsApi* | [**rejectReasonsList**](docs/Api/RejectReasonsApi.md#rejectreasonslist) | **GET** /reject-reasons | 
*RejectReasonsApi* | [**rejectReasonsRetrieve**](docs/Api/RejectReasonsApi.md#rejectreasonsretrieve) | **GET** /reject-reasons/{id} | 
*ScorecardsApi* | [**scorecardsList**](docs/Api/ScorecardsApi.md#scorecardslist) | **GET** /scorecards | 
*ScorecardsApi* | [**scorecardsRetrieve**](docs/Api/ScorecardsApi.md#scorecardsretrieve) | **GET** /scorecards/{id} | 
*SelectiveSyncApi* | [**selectiveSyncConfigurationsList**](docs/Api/SelectiveSyncApi.md#selectivesyncconfigurationslist) | **GET** /selective-sync/configurations | 
*SelectiveSyncApi* | [**selectiveSyncConfigurationsUpdate**](docs/Api/SelectiveSyncApi.md#selectivesyncconfigurationsupdate) | **PUT** /selective-sync/configurations | 
*SelectiveSyncApi* | [**selectiveSyncMetaList**](docs/Api/SelectiveSyncApi.md#selectivesyncmetalist) | **GET** /selective-sync/meta | 
*SyncStatusApi* | [**syncStatusList**](docs/Api/SyncStatusApi.md#syncstatuslist) | **GET** /sync-status | 
*TagsApi* | [**tagsList**](docs/Api/TagsApi.md#tagslist) | **GET** /tags | 
*UsersApi* | [**usersList**](docs/Api/UsersApi.md#userslist) | **GET** /users | 
*UsersApi* | [**usersRetrieve**](docs/Api/UsersApi.md#usersretrieve) | **GET** /users/{id} | 
*WebhookReceiversApi* | [**webhookReceiversCreate**](docs/Api/WebhookReceiversApi.md#webhookreceiverscreate) | **POST** /webhook-receivers | 
*WebhookReceiversApi* | [**webhookReceiversList**](docs/Api/WebhookReceiversApi.md#webhookreceiverslist) | **GET** /webhook-receivers | 

## Models

- [AccessRoleEnum](docs/Model/AccessRoleEnum.md)
- [AccountDetails](docs/Model/AccountDetails.md)
- [AccountDetailsAndActions](docs/Model/AccountDetailsAndActions.md)
- [AccountDetailsAndActionsIntegration](docs/Model/AccountDetailsAndActionsIntegration.md)
- [AccountDetailsAndActionsStatusEnum](docs/Model/AccountDetailsAndActionsStatusEnum.md)
- [AccountIntegration](docs/Model/AccountIntegration.md)
- [AccountToken](docs/Model/AccountToken.md)
- [Activity](docs/Model/Activity.md)
- [ActivityTypeEnum](docs/Model/ActivityTypeEnum.md)
- [Application](docs/Model/Application.md)
- [ApplicationEndpointRequest](docs/Model/ApplicationEndpointRequest.md)
- [ApplicationRequest](docs/Model/ApplicationRequest.md)
- [ApplicationResponse](docs/Model/ApplicationResponse.md)
- [Attachment](docs/Model/Attachment.md)
- [AttachmentEndpointRequest](docs/Model/AttachmentEndpointRequest.md)
- [AttachmentRequest](docs/Model/AttachmentRequest.md)
- [AttachmentResponse](docs/Model/AttachmentResponse.md)
- [AttachmentTypeEnum](docs/Model/AttachmentTypeEnum.md)
- [AvailableActions](docs/Model/AvailableActions.md)
- [Candidate](docs/Model/Candidate.md)
- [CandidateEndpointRequest](docs/Model/CandidateEndpointRequest.md)
- [CandidateRequest](docs/Model/CandidateRequest.md)
- [CandidateResponse](docs/Model/CandidateResponse.md)
- [CategoriesEnum](docs/Model/CategoriesEnum.md)
- [CategoryEnum](docs/Model/CategoryEnum.md)
- [ConditionSchema](docs/Model/ConditionSchema.md)
- [ConditionTypeEnum](docs/Model/ConditionTypeEnum.md)
- [DataPassthroughRequest](docs/Model/DataPassthroughRequest.md)
- [DebugModeLog](docs/Model/DebugModeLog.md)
- [DebugModelLogSummary](docs/Model/DebugModelLogSummary.md)
- [Department](docs/Model/Department.md)
- [DisabilityStatusEnum](docs/Model/DisabilityStatusEnum.md)
- [EEOC](docs/Model/EEOC.md)
- [EmailAddress](docs/Model/EmailAddress.md)
- [EmailAddressRequest](docs/Model/EmailAddressRequest.md)
- [EmailAddressTypeEnum](docs/Model/EmailAddressTypeEnum.md)
- [EncodingEnum](docs/Model/EncodingEnum.md)
- [EndUserDetailsRequest](docs/Model/EndUserDetailsRequest.md)
- [ErrorValidationProblem](docs/Model/ErrorValidationProblem.md)
- [GenderEnum](docs/Model/GenderEnum.md)
- [GenerateRemoteKeyRequest](docs/Model/GenerateRemoteKeyRequest.md)
- [IgnoreCommonModel](docs/Model/IgnoreCommonModel.md)
- [IgnoreCommonModelRequest](docs/Model/IgnoreCommonModelRequest.md)
- [Issue](docs/Model/Issue.md)
- [IssueStatusEnum](docs/Model/IssueStatusEnum.md)
- [Job](docs/Model/Job.md)
- [JobInterviewStage](docs/Model/JobInterviewStage.md)
- [JobStatusEnum](docs/Model/JobStatusEnum.md)
- [LinkToken](docs/Model/LinkToken.md)
- [LinkedAccountCondition](docs/Model/LinkedAccountCondition.md)
- [LinkedAccountConditionRequest](docs/Model/LinkedAccountConditionRequest.md)
- [LinkedAccountSelectiveSyncConfiguration](docs/Model/LinkedAccountSelectiveSyncConfiguration.md)
- [LinkedAccountSelectiveSyncConfigurationListRequest](docs/Model/LinkedAccountSelectiveSyncConfigurationListRequest.md)
- [LinkedAccountSelectiveSyncConfigurationRequest](docs/Model/LinkedAccountSelectiveSyncConfigurationRequest.md)
- [LinkedAccountStatus](docs/Model/LinkedAccountStatus.md)
- [MetaResponse](docs/Model/MetaResponse.md)
- [MethodEnum](docs/Model/MethodEnum.md)
- [ModelOperation](docs/Model/ModelOperation.md)
- [MultipartFormFieldRequest](docs/Model/MultipartFormFieldRequest.md)
- [Offer](docs/Model/Offer.md)
- [OfferStatusEnum](docs/Model/OfferStatusEnum.md)
- [Office](docs/Model/Office.md)
- [OperatorSchema](docs/Model/OperatorSchema.md)
- [OverallRecommendationEnum](docs/Model/OverallRecommendationEnum.md)
- [PaginatedAccountDetailsAndActionsList](docs/Model/PaginatedAccountDetailsAndActionsList.md)
- [PaginatedActivityList](docs/Model/PaginatedActivityList.md)
- [PaginatedApplicationList](docs/Model/PaginatedApplicationList.md)
- [PaginatedAttachmentList](docs/Model/PaginatedAttachmentList.md)
- [PaginatedCandidateList](docs/Model/PaginatedCandidateList.md)
- [PaginatedConditionSchemaList](docs/Model/PaginatedConditionSchemaList.md)
- [PaginatedDepartmentList](docs/Model/PaginatedDepartmentList.md)
- [PaginatedEEOCList](docs/Model/PaginatedEEOCList.md)
- [PaginatedIssueList](docs/Model/PaginatedIssueList.md)
- [PaginatedJobInterviewStageList](docs/Model/PaginatedJobInterviewStageList.md)
- [PaginatedJobList](docs/Model/PaginatedJobList.md)
- [PaginatedOfferList](docs/Model/PaginatedOfferList.md)
- [PaginatedOfficeList](docs/Model/PaginatedOfficeList.md)
- [PaginatedRejectReasonList](docs/Model/PaginatedRejectReasonList.md)
- [PaginatedRemoteUserList](docs/Model/PaginatedRemoteUserList.md)
- [PaginatedScheduledInterviewList](docs/Model/PaginatedScheduledInterviewList.md)
- [PaginatedScorecardList](docs/Model/PaginatedScorecardList.md)
- [PaginatedSyncStatusList](docs/Model/PaginatedSyncStatusList.md)
- [PaginatedTagList](docs/Model/PaginatedTagList.md)
- [PhoneNumber](docs/Model/PhoneNumber.md)
- [PhoneNumberRequest](docs/Model/PhoneNumberRequest.md)
- [PhoneNumberTypeEnum](docs/Model/PhoneNumberTypeEnum.md)
- [RaceEnum](docs/Model/RaceEnum.md)
- [ReasonEnum](docs/Model/ReasonEnum.md)
- [RejectReason](docs/Model/RejectReason.md)
- [RemoteData](docs/Model/RemoteData.md)
- [RemoteKey](docs/Model/RemoteKey.md)
- [RemoteKeyForRegenerationRequest](docs/Model/RemoteKeyForRegenerationRequest.md)
- [RemoteResponse](docs/Model/RemoteResponse.md)
- [RemoteUser](docs/Model/RemoteUser.md)
- [RequestFormatEnum](docs/Model/RequestFormatEnum.md)
- [ResponseTypeEnum](docs/Model/ResponseTypeEnum.md)
- [ScheduledInterview](docs/Model/ScheduledInterview.md)
- [ScheduledInterviewStatusEnum](docs/Model/ScheduledInterviewStatusEnum.md)
- [Scorecard](docs/Model/Scorecard.md)
- [SyncStatus](docs/Model/SyncStatus.md)
- [SyncStatusStatusEnum](docs/Model/SyncStatusStatusEnum.md)
- [Tag](docs/Model/Tag.md)
- [UpdateApplicationStageRequest](docs/Model/UpdateApplicationStageRequest.md)
- [Url](docs/Model/Url.md)
- [UrlRequest](docs/Model/UrlRequest.md)
- [UrlTypeEnum](docs/Model/UrlTypeEnum.md)
- [ValidationProblemSource](docs/Model/ValidationProblemSource.md)
- [VeteranStatusEnum](docs/Model/VeteranStatusEnum.md)
- [VisibilityEnum](docs/Model/VisibilityEnum.md)
- [WarningValidationProblem](docs/Model/WarningValidationProblem.md)
- [WebhookReceiver](docs/Model/WebhookReceiver.md)
- [WebhookReceiverRequest](docs/Model/WebhookReceiverRequest.md)

## Authorization

### tokenAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

hello@merge.dev

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
    - Package version: `1.0.2`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
