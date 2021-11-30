<?php
/**
 * RegenerateKeyApi
 * PHP version 7.2
 *
 * @category Class
 * @package  MergeATSClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Merge ATS API
 *
 * The unified API for building rich integrations with multiple Applicant Tracking System platforms.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: hello@merge.dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MergeATSClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use MergeATSClient\ApiException;
use MergeATSClient\Configuration;
use MergeATSClient\HeaderSelector;
use MergeATSClient\ObjectSerializer;

/**
 * RegenerateKeyApi Class Doc Comment
 *
 * @category Class
 * @package  MergeATSClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RegenerateKeyApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation regenerateKeyCreate
     *
     * @param  \MergeATSClient\Model\RemoteKeyForRegenerationRequest $remote_key_for_regeneration_request remote_key_for_regeneration_request (required)
     *
     * @throws \MergeATSClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MergeATSClient\Model\RemoteKey
     */
    public function regenerateKeyCreate($remote_key_for_regeneration_request)
    {
        list($response) = $this->regenerateKeyCreateWithHttpInfo($remote_key_for_regeneration_request);
        return $response;
    }

    /**
     * Operation regenerateKeyCreateWithHttpInfo
     *
     * @param  \MergeATSClient\Model\RemoteKeyForRegenerationRequest $remote_key_for_regeneration_request (required)
     *
     * @throws \MergeATSClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MergeATSClient\Model\RemoteKey, HTTP status code, HTTP response headers (array of strings)
     */
    public function regenerateKeyCreateWithHttpInfo($remote_key_for_regeneration_request)
    {
        $request = $this->regenerateKeyCreateRequest($remote_key_for_regeneration_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\MergeATSClient\Model\RemoteKey' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MergeATSClient\Model\RemoteKey', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MergeATSClient\Model\RemoteKey';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\MergeATSClient\Model\RemoteKey',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation regenerateKeyCreateAsync
     *
     * @param  \MergeATSClient\Model\RemoteKeyForRegenerationRequest $remote_key_for_regeneration_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function regenerateKeyCreateAsync($remote_key_for_regeneration_request)
    {
        return $this->regenerateKeyCreateAsyncWithHttpInfo($remote_key_for_regeneration_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation regenerateKeyCreateAsyncWithHttpInfo
     *
     * @param  \MergeATSClient\Model\RemoteKeyForRegenerationRequest $remote_key_for_regeneration_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function regenerateKeyCreateAsyncWithHttpInfo($remote_key_for_regeneration_request)
    {
        $returnType = '\MergeATSClient\Model\RemoteKey';
        $request = $this->regenerateKeyCreateRequest($remote_key_for_regeneration_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'regenerateKeyCreate'
     *
     * @param  \MergeATSClient\Model\RemoteKeyForRegenerationRequest $remote_key_for_regeneration_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function regenerateKeyCreateRequest($remote_key_for_regeneration_request)
    {
        // verify the required parameter 'remote_key_for_regeneration_request' is set
        if ($remote_key_for_regeneration_request === null || (is_array($remote_key_for_regeneration_request) && count($remote_key_for_regeneration_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $remote_key_for_regeneration_request when calling regenerateKeyCreate'
            );
        }

        $resourcePath = '/regenerate-key';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json', 'application/x-www-form-urlencoded', 'multipart/form-data']
            );
        }

        // for model (json/xml)
        if (isset($remote_key_for_regeneration_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($remote_key_for_regeneration_request));
            } else {
                $httpBody = $remote_key_for_regeneration_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
