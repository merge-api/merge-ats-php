<?php
/**
 * SyncStatus
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  MergeHRISClient
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

namespace MergeHRISClient\Model;

use \ArrayAccess;
use \MergeHRISClient\ObjectSerializer;

/**
 * SyncStatus Class Doc Comment
 *
 * @category Class
 * @description # The SyncStatus Object ### Description The &#x60;SyncStatus&#x60; object is used to represent the syncing state of an account  ### Usage Example View the &#x60;SyncStatus&#x60; for an account to see how recently its models were synced.
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SyncStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SyncStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'model_name' => 'string',
        'model_id' => 'string',
        'last_sync_start' => '\DateTime',
        'next_sync_start' => '\DateTime',
        'status' => 'SyncStatusStatusEnum',
        'is_initial_sync' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'model_name' => null,
        'model_id' => null,
        'last_sync_start' => 'date-time',
        'next_sync_start' => 'date-time',
        'status' => null,
        'is_initial_sync' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'model_name' => 'model_name',
        'model_id' => 'model_id',
        'last_sync_start' => 'last_sync_start',
        'next_sync_start' => 'next_sync_start',
        'status' => 'status',
        'is_initial_sync' => 'is_initial_sync'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'model_name' => 'setModelName',
        'model_id' => 'setModelId',
        'last_sync_start' => 'setLastSyncStart',
        'next_sync_start' => 'setNextSyncStart',
        'status' => 'setStatus',
        'is_initial_sync' => 'setIsInitialSync'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'model_name' => 'getModelName',
        'model_id' => 'getModelId',
        'last_sync_start' => 'getLastSyncStart',
        'next_sync_start' => 'getNextSyncStart',
        'status' => 'getStatus',
        'is_initial_sync' => 'getIsInitialSync'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['model_name'] = $data['model_name'] ?? null;
        $this->container['model_id'] = $data['model_id'] ?? null;
        $this->container['last_sync_start'] = $data['last_sync_start'] ?? null;
        $this->container['next_sync_start'] = $data['next_sync_start'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['is_initial_sync'] = $data['is_initial_sync'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['model_name'] === null) {
            $invalidProperties[] = "'model_name' can't be null";
        }
        if ($this->container['model_id'] === null) {
            $invalidProperties[] = "'model_id' can't be null";
        }
        if ($this->container['last_sync_start'] === null) {
            $invalidProperties[] = "'last_sync_start' can't be null";
        }
        if ($this->container['next_sync_start'] === null) {
            $invalidProperties[] = "'next_sync_start' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['is_initial_sync'] === null) {
            $invalidProperties[] = "'is_initial_sync' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets model_name
     *
     * @return string
     */
    public function getModelName()
    {
        return $this->container['model_name'];
    }

    /**
     * Sets model_name
     *
     * @param string $model_name model_name
     *
     * @return self
     */
    public function setModelName($model_name)
    {
        $this->container['model_name'] = $model_name;

        return $this;
    }

    /**
     * Gets model_id
     *
     * @return string
     */
    public function getModelId()
    {
        return $this->container['model_id'];
    }

    /**
     * Sets model_id
     *
     * @param string $model_id model_id
     *
     * @return self
     */
    public function setModelId($model_id)
    {
        $this->container['model_id'] = $model_id;

        return $this;
    }

    /**
     * Gets last_sync_start
     *
     * @return \DateTime
     */
    public function getLastSyncStart()
    {
        return $this->container['last_sync_start'];
    }

    /**
     * Sets last_sync_start
     *
     * @param \DateTime $last_sync_start last_sync_start
     *
     * @return self
     */
    public function setLastSyncStart($last_sync_start)
    {
        $this->container['last_sync_start'] = $last_sync_start;

        return $this;
    }

    /**
     * Gets next_sync_start
     *
     * @return \DateTime
     */
    public function getNextSyncStart()
    {
        return $this->container['next_sync_start'];
    }

    /**
     * Sets next_sync_start
     *
     * @param \DateTime $next_sync_start next_sync_start
     *
     * @return self
     */
    public function setNextSyncStart($next_sync_start)
    {
        $this->container['next_sync_start'] = $next_sync_start;

        return $this;
    }

    /**
     * Gets status
     *
     * @return SyncStatusStatusEnum
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param SyncStatusStatusEnum $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets is_initial_sync
     *
     * @return bool
     */
    public function getIsInitialSync()
    {
        return $this->container['is_initial_sync'];
    }

    /**
     * Sets is_initial_sync
     *
     * @param bool $is_initial_sync is_initial_sync
     *
     * @return self
     */
    public function setIsInitialSync($is_initial_sync)
    {
        $this->container['is_initial_sync'] = $is_initial_sync;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


