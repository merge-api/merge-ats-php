<?php
/**
 * ModelOperation
 *
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

namespace MergeATSClient\Model;

use \ArrayAccess;
use \MergeATSClient\ObjectSerializer;

/**
 * ModelOperation Class Doc Comment
 *
 * @category Class
 * @description # The ModelOperation Object ### Description The &#x60;ModelOperation&#x60; object is used to represent the operations that are currently supported for a given model.  ### Usage Example View what operations are supported for the &#x60;Candidate&#x60; endpoint.
 * @package  MergeATSClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ModelOperation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ModelOperation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'model_name' => 'string',
        'available_operations' => 'string[]',
        'required_post_parameters' => 'string[]',
        'supported_fields' => 'string[]'
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
        'available_operations' => null,
        'required_post_parameters' => null,
        'supported_fields' => null
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
        'available_operations' => 'available_operations',
        'required_post_parameters' => 'required_post_parameters',
        'supported_fields' => 'supported_fields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'model_name' => 'setMergeModelName',
        'available_operations' => 'setAvailableOperations',
        'required_post_parameters' => 'setRequiredPostParameters',
        'supported_fields' => 'setSupportedFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'model_name' => 'getMergeModelName',
        'available_operations' => 'getAvailableOperations',
        'required_post_parameters' => 'getRequiredPostParameters',
        'supported_fields' => 'getSupportedFields'
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
        $this->container['available_operations'] = $data['available_operations'] ?? null;
        $this->container['required_post_parameters'] = $data['required_post_parameters'] ?? null;
        $this->container['supported_fields'] = $data['supported_fields'] ?? null;
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
        if ($this->container['available_operations'] === null) {
            $invalidProperties[] = "'available_operations' can't be null";
        }
        if ($this->container['required_post_parameters'] === null) {
            $invalidProperties[] = "'required_post_parameters' can't be null";
        }
        if ($this->container['supported_fields'] === null) {
            $invalidProperties[] = "'supported_fields' can't be null";
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
    public function getMergeModelName()
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
    public function setMergeModelName($model_name)
    {
        $this->container['model_name'] = $model_name;

        return $this;
    }

    /**
     * Gets available_operations
     *
     * @return string[]
     */
    public function getAvailableOperations()
    {
        return $this->container['available_operations'];
    }

    /**
     * Sets available_operations
     *
     * @param string[] $available_operations available_operations
     *
     * @return self
     */
    public function setAvailableOperations($available_operations)
    {
        $this->container['available_operations'] = $available_operations;

        return $this;
    }

    /**
     * Gets required_post_parameters
     *
     * @return string[]
     */
    public function getRequiredPostParameters()
    {
        return $this->container['required_post_parameters'];
    }

    /**
     * Sets required_post_parameters
     *
     * @param string[] $required_post_parameters required_post_parameters
     *
     * @return self
     */
    public function setRequiredPostParameters($required_post_parameters)
    {
        $this->container['required_post_parameters'] = $required_post_parameters;

        return $this;
    }

    /**
     * Gets supported_fields
     *
     * @return string[]
     */
    public function getSupportedFields()
    {
        return $this->container['supported_fields'];
    }

    /**
     * Sets supported_fields
     *
     * @param string[] $supported_fields supported_fields
     *
     * @return self
     */
    public function setSupportedFields($supported_fields)
    {
        $this->container['supported_fields'] = $supported_fields;

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


