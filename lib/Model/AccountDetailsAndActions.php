<?php
/**
 * AccountDetailsAndActions
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
 * AccountDetailsAndActions Class Doc Comment
 *
 * @category Class
 * @description # The LinkedAccount Object ### Description The &#x60;LinkedAccount&#x60; object is used to represent an end user&#39;s link with a specific integration.  ### Usage Example View a list of your organization&#39;s &#x60;LinkedAccount&#x60; objects.
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AccountDetailsAndActions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountDetailsAndActions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'category' => 'CategoryEnum',
        'status' => 'AccountDetailsAndActionsStatusEnum',
        'end_user_origin_id' => 'string',
        'end_user_organization_name' => 'string',
        'end_user_email_address' => 'string',
        'integration' => '\MergeHRISClient\Model\AccountDetailsAndActionsIntegration'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'category' => null,
        'status' => null,
        'end_user_origin_id' => null,
        'end_user_organization_name' => null,
        'end_user_email_address' => null,
        'integration' => null
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
        'id' => 'id',
        'category' => 'category',
        'status' => 'status',
        'end_user_origin_id' => 'end_user_origin_id',
        'end_user_organization_name' => 'end_user_organization_name',
        'end_user_email_address' => 'end_user_email_address',
        'integration' => 'integration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'category' => 'setCategory',
        'status' => 'setStatus',
        'end_user_origin_id' => 'setEndUserOriginId',
        'end_user_organization_name' => 'setEndUserOrganizationName',
        'end_user_email_address' => 'setEndUserEmailAddress',
        'integration' => 'setIntegration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'category' => 'getCategory',
        'status' => 'getStatus',
        'end_user_origin_id' => 'getEndUserOriginId',
        'end_user_organization_name' => 'getEndUserOrganizationName',
        'end_user_email_address' => 'getEndUserEmailAddress',
        'integration' => 'getIntegration'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['end_user_origin_id'] = $data['end_user_origin_id'] ?? null;
        $this->container['end_user_organization_name'] = $data['end_user_organization_name'] ?? null;
        $this->container['end_user_email_address'] = $data['end_user_email_address'] ?? null;
        $this->container['integration'] = $data['integration'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['end_user_organization_name'] === null) {
            $invalidProperties[] = "'end_user_organization_name' can't be null";
        }
        if ($this->container['end_user_email_address'] === null) {
            $invalidProperties[] = "'end_user_email_address' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets category
     *
     * @return CategoryEnum|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param CategoryEnum|null $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets status
     *
     * @return AccountDetailsAndActionsStatusEnum
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param AccountDetailsAndActionsStatusEnum $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets end_user_origin_id
     *
     * @return string|null
     */
    public function getEndUserOriginId()
    {
        return $this->container['end_user_origin_id'];
    }

    /**
     * Sets end_user_origin_id
     *
     * @param string|null $end_user_origin_id end_user_origin_id
     *
     * @return self
     */
    public function setEndUserOriginId($end_user_origin_id)
    {
        $this->container['end_user_origin_id'] = $end_user_origin_id;

        return $this;
    }

    /**
     * Gets end_user_organization_name
     *
     * @return string
     */
    public function getEndUserOrganizationName()
    {
        return $this->container['end_user_organization_name'];
    }

    /**
     * Sets end_user_organization_name
     *
     * @param string $end_user_organization_name end_user_organization_name
     *
     * @return self
     */
    public function setEndUserOrganizationName($end_user_organization_name)
    {
        $this->container['end_user_organization_name'] = $end_user_organization_name;

        return $this;
    }

    /**
     * Gets end_user_email_address
     *
     * @return string
     */
    public function getEndUserEmailAddress()
    {
        return $this->container['end_user_email_address'];
    }

    /**
     * Sets end_user_email_address
     *
     * @param string $end_user_email_address end_user_email_address
     *
     * @return self
     */
    public function setEndUserEmailAddress($end_user_email_address)
    {
        $this->container['end_user_email_address'] = $end_user_email_address;

        return $this;
    }

    /**
     * Gets integration
     *
     * @return \MergeHRISClient\Model\AccountDetailsAndActionsIntegration|null
     */
    public function getIntegration()
    {
        return $this->container['integration'];
    }

    /**
     * Sets integration
     *
     * @param \MergeHRISClient\Model\AccountDetailsAndActionsIntegration|null $integration integration
     *
     * @return self
     */
    public function setIntegration($integration)
    {
        $this->container['integration'] = $integration;

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


