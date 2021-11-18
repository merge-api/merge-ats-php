<?php
/**
 * ScheduledInterview
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
 * ScheduledInterview Class Doc Comment
 *
 * @category Class
 * @description # The ScheduledInterview Object ### Description The &#x60;ScheduledInterview&#x60; object is used to represent an interview  ### Usage Example Fetch from the &#x60;LIST ScheduledInterviews&#x60; endpoint and filter by &#x60;interviewers&#x60; to show all office locations.
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ScheduledInterview implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ScheduledInterview';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'remote_id' => 'string',
        'application' => 'string',
        'job_interview_stage' => 'string',
        'organizer' => 'string',
        'interviewers' => 'string[]',
        'location' => 'string',
        'start_at' => '\DateTime',
        'end_at' => '\DateTime',
        'remote_created_at' => '\DateTime',
        'remote_updated_at' => '\DateTime',
        'status' => 'string',
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
        'application' => 'uuid',
        'job_interview_stage' => 'uuid',
        'organizer' => 'uuid',
        'interviewers' => 'uuid',
        'location' => null,
        'start_at' => 'date-time',
        'end_at' => 'date-time',
        'remote_created_at' => 'date-time',
        'remote_updated_at' => 'date-time',
        'status' => null,
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
        'application' => 'application',
        'job_interview_stage' => 'job_interview_stage',
        'organizer' => 'organizer',
        'interviewers' => 'interviewers',
        'location' => 'location',
        'start_at' => 'start_at',
        'end_at' => 'end_at',
        'remote_created_at' => 'remote_created_at',
        'remote_updated_at' => 'remote_updated_at',
        'status' => 'status',
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
        'application' => 'setApplication',
        'job_interview_stage' => 'setJobInterviewStage',
        'organizer' => 'setOrganizer',
        'interviewers' => 'setInterviewers',
        'location' => 'setLocation',
        'start_at' => 'setStartAt',
        'end_at' => 'setEndAt',
        'remote_created_at' => 'setRemoteCreatedAt',
        'remote_updated_at' => 'setRemoteUpdatedAt',
        'status' => 'setStatus',
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
        'application' => 'getApplication',
        'job_interview_stage' => 'getJobInterviewStage',
        'organizer' => 'getOrganizer',
        'interviewers' => 'getInterviewers',
        'location' => 'getLocation',
        'start_at' => 'getStartAt',
        'end_at' => 'getEndAt',
        'remote_created_at' => 'getRemoteCreatedAt',
        'remote_updated_at' => 'getRemoteUpdatedAt',
        'status' => 'getStatus',
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
        $this->container['application'] = $data['application'] ?? null;
        $this->container['job_interview_stage'] = $data['job_interview_stage'] ?? null;
        $this->container['organizer'] = $data['organizer'] ?? null;
        $this->container['interviewers'] = $data['interviewers'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['start_at'] = $data['start_at'] ?? null;
        $this->container['end_at'] = $data['end_at'] ?? null;
        $this->container['remote_created_at'] = $data['remote_created_at'] ?? null;
        $this->container['remote_updated_at'] = $data['remote_updated_at'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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
     * Gets application
     *
     * @return string|null
     */
    public function getApplication()
    {
        return $this->container['application'];
    }

    /**
     * Sets application
     *
     * @param string|null $application The application being interviewed.
     *
     * @return self
     */
    public function setApplication($application)
    {
        $this->container['application'] = $application;

        return $this;
    }

    /**
     * Gets job_interview_stage
     *
     * @return string|null
     */
    public function getJobInterviewStage()
    {
        return $this->container['job_interview_stage'];
    }

    /**
     * Sets job_interview_stage
     *
     * @param string|null $job_interview_stage The stage of the interview.
     *
     * @return self
     */
    public function setJobInterviewStage($job_interview_stage)
    {
        $this->container['job_interview_stage'] = $job_interview_stage;

        return $this;
    }

    /**
     * Gets organizer
     *
     * @return string|null
     */
    public function getOrganizer()
    {
        return $this->container['organizer'];
    }

    /**
     * Sets organizer
     *
     * @param string|null $organizer The user organizing the interview.
     *
     * @return self
     */
    public function setOrganizer($organizer)
    {
        $this->container['organizer'] = $organizer;

        return $this;
    }

    /**
     * Gets interviewers
     *
     * @return string[]|null
     */
    public function getInterviewers()
    {
        return $this->container['interviewers'];
    }

    /**
     * Sets interviewers
     *
     * @param string[]|null $interviewers Array of `RemoteUser` IDs.
     *
     * @return self
     */
    public function setInterviewers($interviewers)
    {
        $this->container['interviewers'] = $interviewers;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location The interview's location.
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets start_at
     *
     * @return \DateTime|null
     */
    public function getStartAt()
    {
        return $this->container['start_at'];
    }

    /**
     * Sets start_at
     *
     * @param \DateTime|null $start_at When the interview was started.
     *
     * @return self
     */
    public function setStartAt($start_at)
    {
        $this->container['start_at'] = $start_at;

        return $this;
    }

    /**
     * Gets end_at
     *
     * @return \DateTime|null
     */
    public function getEndAt()
    {
        return $this->container['end_at'];
    }

    /**
     * Sets end_at
     *
     * @param \DateTime|null $end_at When the interview was ended.
     *
     * @return self
     */
    public function setEndAt($end_at)
    {
        $this->container['end_at'] = $end_at;

        return $this;
    }

    /**
     * Gets remote_created_at
     *
     * @return \DateTime|null
     */
    public function getRemoteCreatedAt()
    {
        return $this->container['remote_created_at'];
    }

    /**
     * Sets remote_created_at
     *
     * @param \DateTime|null $remote_created_at When the third party's interview was created.
     *
     * @return self
     */
    public function setRemoteCreatedAt($remote_created_at)
    {
        $this->container['remote_created_at'] = $remote_created_at;

        return $this;
    }

    /**
     * Gets remote_updated_at
     *
     * @return \DateTime|null
     */
    public function getRemoteUpdatedAt()
    {
        return $this->container['remote_updated_at'];
    }

    /**
     * Sets remote_updated_at
     *
     * @param \DateTime|null $remote_updated_at When the third party's interview was updated.
     *
     * @return self
     */
    public function setRemoteUpdatedAt($remote_updated_at)
    {
        $this->container['remote_updated_at'] = $remote_updated_at;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


