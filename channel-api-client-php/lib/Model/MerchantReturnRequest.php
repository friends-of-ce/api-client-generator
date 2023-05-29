<?php
/**
 * MerchantReturnRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  FriendsOfCE\Channel\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ChannelEngine Merchant API
 *
 * ChannelEngine API for merchants
 *
 * The version of the OpenAPI document: 2.13.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FriendsOfCE\Channel\ApiClient\Model;

use \ArrayAccess;
use \FriendsOfCE\Channel\ApiClient\ObjectSerializer;

/**
 * MerchantReturnRequest Class Doc Comment
 *
 * @category Class
 * @package  FriendsOfCE\Channel\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MerchantReturnRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MerchantReturnRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchantOrderNo' => 'string',
        'merchantReturnNo' => 'string',
        'lines' => '\FriendsOfCE\Channel\ApiClient\Model\MerchantReturnLineRequest[]',
        'id' => 'int',
        'reason' => '\FriendsOfCE\Channel\ApiClient\Model\ReturnReason',
        'customerComment' => 'string',
        'merchantComment' => 'string',
        'refundInclVat' => 'float',
        'refundExclVat' => 'float',
        'returnDate' => '\DateTime',
        'extraData' => 'array<string,string>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'merchantOrderNo' => null,
        'merchantReturnNo' => null,
        'lines' => null,
        'id' => 'int32',
        'reason' => null,
        'customerComment' => null,
        'merchantComment' => null,
        'refundInclVat' => 'decimal',
        'refundExclVat' => 'decimal',
        'returnDate' => 'date-time',
        'extraData' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'merchantOrderNo' => false,
		'merchantReturnNo' => false,
		'lines' => false,
		'id' => false,
		'reason' => false,
		'customerComment' => true,
		'merchantComment' => true,
		'refundInclVat' => false,
		'refundExclVat' => false,
		'returnDate' => true,
		'extraData' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'merchantOrderNo' => 'MerchantOrderNo',
        'merchantReturnNo' => 'MerchantReturnNo',
        'lines' => 'Lines',
        'id' => 'Id',
        'reason' => 'Reason',
        'customerComment' => 'CustomerComment',
        'merchantComment' => 'MerchantComment',
        'refundInclVat' => 'RefundInclVat',
        'refundExclVat' => 'RefundExclVat',
        'returnDate' => 'ReturnDate',
        'extraData' => 'ExtraData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchantOrderNo' => 'setMerchantOrderNo',
        'merchantReturnNo' => 'setMerchantReturnNo',
        'lines' => 'setLines',
        'id' => 'setId',
        'reason' => 'setReason',
        'customerComment' => 'setCustomerComment',
        'merchantComment' => 'setMerchantComment',
        'refundInclVat' => 'setRefundInclVat',
        'refundExclVat' => 'setRefundExclVat',
        'returnDate' => 'setReturnDate',
        'extraData' => 'setExtraData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchantOrderNo' => 'getMerchantOrderNo',
        'merchantReturnNo' => 'getMerchantReturnNo',
        'lines' => 'getLines',
        'id' => 'getId',
        'reason' => 'getReason',
        'customerComment' => 'getCustomerComment',
        'merchantComment' => 'getMerchantComment',
        'refundInclVat' => 'getRefundInclVat',
        'refundExclVat' => 'getRefundExclVat',
        'returnDate' => 'getReturnDate',
        'extraData' => 'getExtraData'
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
        $this->setIfExists('merchantOrderNo', $data ?? [], null);
        $this->setIfExists('merchantReturnNo', $data ?? [], null);
        $this->setIfExists('lines', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('customerComment', $data ?? [], null);
        $this->setIfExists('merchantComment', $data ?? [], null);
        $this->setIfExists('refundInclVat', $data ?? [], null);
        $this->setIfExists('refundExclVat', $data ?? [], null);
        $this->setIfExists('returnDate', $data ?? [], null);
        $this->setIfExists('extraData', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['merchantOrderNo'] === null) {
            $invalidProperties[] = "'merchantOrderNo' can't be null";
        }
        if ((mb_strlen($this->container['merchantOrderNo']) > 50)) {
            $invalidProperties[] = "invalid value for 'merchantOrderNo', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['merchantOrderNo']) < 0)) {
            $invalidProperties[] = "invalid value for 'merchantOrderNo', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['merchantReturnNo'] === null) {
            $invalidProperties[] = "'merchantReturnNo' can't be null";
        }
        if ((mb_strlen($this->container['merchantReturnNo']) > 50)) {
            $invalidProperties[] = "invalid value for 'merchantReturnNo', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['merchantReturnNo']) < 0)) {
            $invalidProperties[] = "invalid value for 'merchantReturnNo', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['lines'] === null) {
            $invalidProperties[] = "'lines' can't be null";
        }
        if ((count($this->container['lines']) < 1)) {
            $invalidProperties[] = "invalid value for 'lines', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['customerComment']) && (mb_strlen($this->container['customerComment']) > 4001)) {
            $invalidProperties[] = "invalid value for 'customerComment', the character length must be smaller than or equal to 4001.";
        }

        if (!is_null($this->container['customerComment']) && (mb_strlen($this->container['customerComment']) < 0)) {
            $invalidProperties[] = "invalid value for 'customerComment', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['merchantComment']) && (mb_strlen($this->container['merchantComment']) > 4001)) {
            $invalidProperties[] = "invalid value for 'merchantComment', the character length must be smaller than or equal to 4001.";
        }

        if (!is_null($this->container['merchantComment']) && (mb_strlen($this->container['merchantComment']) < 0)) {
            $invalidProperties[] = "invalid value for 'merchantComment', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['refundInclVat']) && ($this->container['refundInclVat'] < 0)) {
            $invalidProperties[] = "invalid value for 'refundInclVat', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['refundExclVat']) && ($this->container['refundExclVat'] < 0)) {
            $invalidProperties[] = "invalid value for 'refundExclVat', must be bigger than or equal to 0.";
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
     * Gets merchantOrderNo
     *
     * @return string
     */
    public function getMerchantOrderNo()
    {
        return $this->container['merchantOrderNo'];
    }

    /**
     * Sets merchantOrderNo
     *
     * @param string $merchantOrderNo The unique order reference used by the Merchant (sku).
     *
     * @return self
     */
    public function setMerchantOrderNo($merchantOrderNo)
    {
        if (is_null($merchantOrderNo)) {
            throw new \InvalidArgumentException('non-nullable merchantOrderNo cannot be null');
        }
        if ((mb_strlen($merchantOrderNo) > 50)) {
            throw new \InvalidArgumentException('invalid length for $merchantOrderNo when calling MerchantReturnRequest., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($merchantOrderNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchantOrderNo when calling MerchantReturnRequest., must be bigger than or equal to 0.');
        }

        $this->container['merchantOrderNo'] = $merchantOrderNo;

        return $this;
    }

    /**
     * Gets merchantReturnNo
     *
     * @return string
     */
    public function getMerchantReturnNo()
    {
        return $this->container['merchantReturnNo'];
    }

    /**
     * Sets merchantReturnNo
     *
     * @param string $merchantReturnNo The unique return reference used by the Merchant (sku).
     *
     * @return self
     */
    public function setMerchantReturnNo($merchantReturnNo)
    {
        if (is_null($merchantReturnNo)) {
            throw new \InvalidArgumentException('non-nullable merchantReturnNo cannot be null');
        }
        if ((mb_strlen($merchantReturnNo) > 50)) {
            throw new \InvalidArgumentException('invalid length for $merchantReturnNo when calling MerchantReturnRequest., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($merchantReturnNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchantReturnNo when calling MerchantReturnRequest., must be bigger than or equal to 0.');
        }

        $this->container['merchantReturnNo'] = $merchantReturnNo;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \FriendsOfCE\Channel\ApiClient\Model\MerchantReturnLineRequest[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \FriendsOfCE\Channel\ApiClient\Model\MerchantReturnLineRequest[] $lines lines
     *
     * @return self
     */
    public function setLines($lines)
    {
        if (is_null($lines)) {
            throw new \InvalidArgumentException('non-nullable lines cannot be null');
        }


        if ((count($lines) < 1)) {
            throw new \InvalidArgumentException('invalid length for $lines when calling MerchantReturnRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['lines'] = $lines;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id The unique return reference used by ChannelEngine.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return \FriendsOfCE\Channel\ApiClient\Model\ReturnReason|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param \FriendsOfCE\Channel\ApiClient\Model\ReturnReason|null $reason reason
     *
     * @return self
     */
    public function setReason($reason)
    {
        if (is_null($reason)) {
            throw new \InvalidArgumentException('non-nullable reason cannot be null');
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets customerComment
     *
     * @return string|null
     */
    public function getCustomerComment()
    {
        return $this->container['customerComment'];
    }

    /**
     * Sets customerComment
     *
     * @param string|null $customerComment Optional. Comment of customer on the (reason of) the return.
     *
     * @return self
     */
    public function setCustomerComment($customerComment)
    {
        if (is_null($customerComment)) {
            array_push($this->openAPINullablesSetToNull, 'customerComment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customerComment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($customerComment) && (mb_strlen($customerComment) > 4001)) {
            throw new \InvalidArgumentException('invalid length for $customerComment when calling MerchantReturnRequest., must be smaller than or equal to 4001.');
        }
        if (!is_null($customerComment) && (mb_strlen($customerComment) < 0)) {
            throw new \InvalidArgumentException('invalid length for $customerComment when calling MerchantReturnRequest., must be bigger than or equal to 0.');
        }

        $this->container['customerComment'] = $customerComment;

        return $this;
    }

    /**
     * Gets merchantComment
     *
     * @return string|null
     */
    public function getMerchantComment()
    {
        return $this->container['merchantComment'];
    }

    /**
     * Sets merchantComment
     *
     * @param string|null $merchantComment Optional. Comment of merchant on the return.
     *
     * @return self
     */
    public function setMerchantComment($merchantComment)
    {
        if (is_null($merchantComment)) {
            array_push($this->openAPINullablesSetToNull, 'merchantComment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('merchantComment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($merchantComment) && (mb_strlen($merchantComment) > 4001)) {
            throw new \InvalidArgumentException('invalid length for $merchantComment when calling MerchantReturnRequest., must be smaller than or equal to 4001.');
        }
        if (!is_null($merchantComment) && (mb_strlen($merchantComment) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchantComment when calling MerchantReturnRequest., must be bigger than or equal to 0.');
        }

        $this->container['merchantComment'] = $merchantComment;

        return $this;
    }

    /**
     * Gets refundInclVat
     *
     * @return float|null
     */
    public function getRefundInclVat()
    {
        return $this->container['refundInclVat'];
    }

    /**
     * Sets refundInclVat
     *
     * @param float|null $refundInclVat Refund amount incl. VAT.
     *
     * @return self
     */
    public function setRefundInclVat($refundInclVat)
    {
        if (is_null($refundInclVat)) {
            throw new \InvalidArgumentException('non-nullable refundInclVat cannot be null');
        }

        if (($refundInclVat < 0)) {
            throw new \InvalidArgumentException('invalid value for $refundInclVat when calling MerchantReturnRequest., must be bigger than or equal to 0.');
        }

        $this->container['refundInclVat'] = $refundInclVat;

        return $this;
    }

    /**
     * Gets refundExclVat
     *
     * @return float|null
     */
    public function getRefundExclVat()
    {
        return $this->container['refundExclVat'];
    }

    /**
     * Sets refundExclVat
     *
     * @param float|null $refundExclVat Refund amount excl. VAT.
     *
     * @return self
     */
    public function setRefundExclVat($refundExclVat)
    {
        if (is_null($refundExclVat)) {
            throw new \InvalidArgumentException('non-nullable refundExclVat cannot be null');
        }

        if (($refundExclVat < 0)) {
            throw new \InvalidArgumentException('invalid value for $refundExclVat when calling MerchantReturnRequest., must be bigger than or equal to 0.');
        }

        $this->container['refundExclVat'] = $refundExclVat;

        return $this;
    }

    /**
     * Gets returnDate
     *
     * @return \DateTime|null
     */
    public function getReturnDate()
    {
        return $this->container['returnDate'];
    }

    /**
     * Sets returnDate
     *
     * @param \DateTime|null $returnDate The date at which the return was originally created in the source system (if available).
     *
     * @return self
     */
    public function setReturnDate($returnDate)
    {
        if (is_null($returnDate)) {
            array_push($this->openAPINullablesSetToNull, 'returnDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('returnDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['returnDate'] = $returnDate;

        return $this;
    }

    /**
     * Gets extraData
     *
     * @return array<string,string>|null
     */
    public function getExtraData()
    {
        return $this->container['extraData'];
    }

    /**
     * Sets extraData
     *
     * @param array<string,string>|null $extraData Extra data on the return. Each item must have an unqiue key
     *
     * @return self
     */
    public function setExtraData($extraData)
    {
        if (is_null($extraData)) {
            array_push($this->openAPINullablesSetToNull, 'extraData');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('extraData', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['extraData'] = $extraData;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


