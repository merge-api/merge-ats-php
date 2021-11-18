<?php
/**
 * EEOC
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
 * EEOC Class Doc Comment
 *
 * @category Class
 * @description # The EEOC Object ### Description The &#x60;EEOC&#x60; object is used to represent the Equal Employment Opportunity Commission information for a candidate.  ### Usage Example Fetch from the &#x60;LIST EEOCs&#x60; endpoint and filter by &#x60;candidate&#x60; to show all EEOC information for a candidate.
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EEOC implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EEOC';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'remote_id' => 'string',
        'candidate' => 'string',
        'submitted_at' => '\DateTime',
        'race' => 'RaceEnum',
        'gender' => 'GenderEnum',
        'veteran_status' => 'VeteranStatusEnum',
        'disability_status' => 'DisabilityStatusEnum',
        'remote_data' => '\MergeHRISClient\Model\RemoteData[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'remote_id' => null,
        'candidate' => 'uuid',
        'submitted_at' => 'date-time',
        'race' => null,
        'gender' => null,
        'veteran_status' => null,
        'disability_status' => null,
        'remote_data' => null
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
        'remote_id' => 'remote_id',
        'candidate' => 'candidate',
        'submitted_at' => 'submitted_at',
        'race' => 'race',
        'gender' => 'gender',
        'veteran_status' => 'veteran_status',
        'disability_status' => 'disability_status',
        'remote_data' => 'remote_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'remote_id' => 'setRemoteId',
        'candidate' => 'setCandidate',
        'submitted_at' => 'setSubmittedAt',
        'race' => 'setRace',
        'gender' => 'setGender',
        'veteran_status' => 'setVeteranStatus',
        'disability_status' => 'setDisabilityStatus',
        'remote_data' => 'setRemoteData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'remote_id' => 'getRemoteId',
        'candidate' => 'getCandidate',
        'submitted_at' => 'getSubmittedAt',
        'race' => 'getRace',
        'gender' => 'getGender',
        'veteran_status' => 'getVeteranStatus',
        'disability_status' => 'getDisabilityStatus',
        'remote_data' => 'getRemoteData'
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
        $this->container['remote_id'] = $data['remote_id'] ?? null;
        $this->container['candidate'] = $data['candidate'] ?? null;
        $this->container['submitted_at'] = $data['submitted_at'] ?? null;
        $this->container['race'] = $data['race'] ?? null;
        $this->container['gender'] = $data['gender'] ?? null;
        $this->container['veteran_status'] = $data['veteran_status'] ?? null;
        $this->container['disability_status'] = $data['disability_status'] ?? null;
        $this->container['remote_data'] = $data['remote_data'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets remote_id
     *
     * @return string|null
     */
    public function getRemoteId()
    {
        return $this->container['remote_id'];
    }

    /**
     * Sets remote_id
     *
     * @param string|null $remote_id The third-party API ID of the matching object.
     *
     * @return self
     */
    public function setRemoteId($remote_id)
    {
        $this->container['remote_id'] = $remote_id;

        return $this;
    }

    /**
     * Gets candidate
     *
     * @return string|null
     */
    public function getCandidate()
    {
        return $this->container['candidate'];
    }

    /**
     * Sets candidate
     *
     * @param string|null $candidate The candidate being represented.
     *
     * @return self
     */
    public function setCandidate($candidate)
    {
        $this->container['candidate'] = $candidate;

        return $this;
    }

    /**
     * Gets submitted_at
     *
     * @return \DateTime|null
     */
    public function getSubmittedAt()
    {
        return $this->container['submitted_at'];
    }

    /**
     * Sets submitted_at
     *
     * @param \DateTime|null $submitted_at When the information was submitted.
     *
     * @return self
     */
    public function setSubmittedAt($submitted_at)
    {
        $this->container['submitted_at'] = $submitted_at;

        return $this;
    }

    /**
     * Gets race
     *
     * @return RaceEnum|null
     */
    public function getRace()
    {
        return $this->container['race'];
    }

    /**
     * Sets race
     *
     * @param RaceEnum|null $race The candidate's race.
     *
     * @return self
     */
    public function setRace($race)
    {
        $this->container['race'] = $race;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return GenderEnum|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param GenderEnum|null $gender The candidate's gender.
     *
     * @return self
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets veteran_status
     *
     * @return VeteranStatusEnum|null
     */
    public function getVeteranStatus()
    {
        return $this->container['veteran_status'];
    }

    /**
     * Sets veteran_status
     *
     * @param VeteranStatusEnum|null $veteran_status The candidate's veteran status.
     *
     * @return self
     */
    public function setVeteranStatus($veteran_status)
    {
        $this->container['veteran_status'] = $veteran_status;

        return $this;
    }

    /**
     * Gets disability_status
     *
     * @return DisabilityStatusEnum|null
     */
    public function getDisabilityStatus()
    {
        return $this->container['disability_status'];
    }

    /**
     * Sets disability_status
     *
     * @param DisabilityStatusEnum|null $disability_status The candidate's disability status.
     *
     * @return self
     */
    public function setDisabilityStatus($disability_status)
    {
        $this->container['disability_status'] = $disability_status;

        return $this;
    }

    /**
     * Gets remote_data
     *
     * @return \MergeHRISClient\Model\RemoteData[]|null
     */
    public function getRemoteData()
    {
        return $this->container['remote_data'];
    }

    /**
     * Sets remote_data
     *
     * @param \MergeHRISClient\Model\RemoteData[]|null $remote_data remote_data
     *
     * @return self
     */
    public function setRemoteData($remote_data)
    {
        $this->container['remote_data'] = $remote_data;

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


