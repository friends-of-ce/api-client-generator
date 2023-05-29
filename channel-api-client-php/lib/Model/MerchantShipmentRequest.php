<?php
/**
 * MerchantShipmentRequest
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
 * MerchantShipmentRequest Class Doc Comment
 *
 * @category Class
 * @package  FriendsOfCE\Channel\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MerchantShipmentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MerchantShipmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchantShipmentNo' => 'string',
        'merchantOrderNo' => 'string',
        'lines' => '\FriendsOfCE\Channel\ApiClient\Model\MerchantShipmentLineRequest[]',
        'extraData' => 'array<string,string>',
        'trackTraceNo' => 'string',
        'trackTraceUrl' => 'string',
        'returnTrackTraceNo' => 'string',
        'method' => 'string',
        'shippedFromCountryCode' => 'string',
        'shippedFromStockLocationId' => 'int',
        'shipmentDate' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'merchantShipmentNo' => null,
        'merchantOrderNo' => null,
        'lines' => null,
        'extraData' => null,
        'trackTraceNo' => null,
        'trackTraceUrl' => null,
        'returnTrackTraceNo' => null,
        'method' => null,
        'shippedFromCountryCode' => null,
        'shippedFromStockLocationId' => 'int32',
        'shipmentDate' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'merchantShipmentNo' => false,
		'merchantOrderNo' => false,
		'lines' => false,
		'extraData' => true,
		'trackTraceNo' => true,
		'trackTraceUrl' => true,
		'returnTrackTraceNo' => true,
		'method' => true,
		'shippedFromCountryCode' => true,
		'shippedFromStockLocationId' => true,
		'shipmentDate' => true
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
        'merchantShipmentNo' => 'MerchantShipmentNo',
        'merchantOrderNo' => 'MerchantOrderNo',
        'lines' => 'Lines',
        'extraData' => 'ExtraData',
        'trackTraceNo' => 'TrackTraceNo',
        'trackTraceUrl' => 'TrackTraceUrl',
        'returnTrackTraceNo' => 'ReturnTrackTraceNo',
        'method' => 'Method',
        'shippedFromCountryCode' => 'ShippedFromCountryCode',
        'shippedFromStockLocationId' => 'ShippedFromStockLocationId',
        'shipmentDate' => 'ShipmentDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchantShipmentNo' => 'setMerchantShipmentNo',
        'merchantOrderNo' => 'setMerchantOrderNo',
        'lines' => 'setLines',
        'extraData' => 'setExtraData',
        'trackTraceNo' => 'setTrackTraceNo',
        'trackTraceUrl' => 'setTrackTraceUrl',
        'returnTrackTraceNo' => 'setReturnTrackTraceNo',
        'method' => 'setMethod',
        'shippedFromCountryCode' => 'setShippedFromCountryCode',
        'shippedFromStockLocationId' => 'setShippedFromStockLocationId',
        'shipmentDate' => 'setShipmentDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchantShipmentNo' => 'getMerchantShipmentNo',
        'merchantOrderNo' => 'getMerchantOrderNo',
        'lines' => 'getLines',
        'extraData' => 'getExtraData',
        'trackTraceNo' => 'getTrackTraceNo',
        'trackTraceUrl' => 'getTrackTraceUrl',
        'returnTrackTraceNo' => 'getReturnTrackTraceNo',
        'method' => 'getMethod',
        'shippedFromCountryCode' => 'getShippedFromCountryCode',
        'shippedFromStockLocationId' => 'getShippedFromStockLocationId',
        'shipmentDate' => 'getShipmentDate'
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
        $this->setIfExists('merchantShipmentNo', $data ?? [], null);
        $this->setIfExists('merchantOrderNo', $data ?? [], null);
        $this->setIfExists('lines', $data ?? [], null);
        $this->setIfExists('extraData', $data ?? [], null);
        $this->setIfExists('trackTraceNo', $data ?? [], null);
        $this->setIfExists('trackTraceUrl', $data ?? [], null);
        $this->setIfExists('returnTrackTraceNo', $data ?? [], null);
        $this->setIfExists('method', $data ?? [], null);
        $this->setIfExists('shippedFromCountryCode', $data ?? [], null);
        $this->setIfExists('shippedFromStockLocationId', $data ?? [], null);
        $this->setIfExists('shipmentDate', $data ?? [], null);
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

        if ($this->container['merchantShipmentNo'] === null) {
            $invalidProperties[] = "'merchantShipmentNo' can't be null";
        }
        if ((mb_strlen($this->container['merchantShipmentNo']) > 250)) {
            $invalidProperties[] = "invalid value for 'merchantShipmentNo', the character length must be smaller than or equal to 250.";
        }

        if ((mb_strlen($this->container['merchantShipmentNo']) < 0)) {
            $invalidProperties[] = "invalid value for 'merchantShipmentNo', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['merchantOrderNo'] === null) {
            $invalidProperties[] = "'merchantOrderNo' can't be null";
        }
        if ((mb_strlen($this->container['merchantOrderNo']) > 50)) {
            $invalidProperties[] = "invalid value for 'merchantOrderNo', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['merchantOrderNo']) < 0)) {
            $invalidProperties[] = "invalid value for 'merchantOrderNo', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['lines'] === null) {
            $invalidProperties[] = "'lines' can't be null";
        }
        if ((count($this->container['lines']) < 1)) {
            $invalidProperties[] = "invalid value for 'lines', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['trackTraceNo']) && (mb_strlen($this->container['trackTraceNo']) > 50)) {
            $invalidProperties[] = "invalid value for 'trackTraceNo', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['trackTraceNo']) && (mb_strlen($this->container['trackTraceNo']) < 0)) {
            $invalidProperties[] = "invalid value for 'trackTraceNo', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['trackTraceUrl']) && (mb_strlen($this->container['trackTraceUrl']) > 250)) {
            $invalidProperties[] = "invalid value for 'trackTraceUrl', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['trackTraceUrl']) && (mb_strlen($this->container['trackTraceUrl']) < 0)) {
            $invalidProperties[] = "invalid value for 'trackTraceUrl', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['returnTrackTraceNo']) && (mb_strlen($this->container['returnTrackTraceNo']) > 50)) {
            $invalidProperties[] = "invalid value for 'returnTrackTraceNo', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['returnTrackTraceNo']) && (mb_strlen($this->container['returnTrackTraceNo']) < 0)) {
            $invalidProperties[] = "invalid value for 'returnTrackTraceNo', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['method']) && (mb_strlen($this->container['method']) > 50)) {
            $invalidProperties[] = "invalid value for 'method', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['method']) && (mb_strlen($this->container['method']) < 0)) {
            $invalidProperties[] = "invalid value for 'method', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['shippedFromCountryCode']) && (mb_strlen($this->container['shippedFromCountryCode']) > 3)) {
            $invalidProperties[] = "invalid value for 'shippedFromCountryCode', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['shippedFromCountryCode']) && (mb_strlen($this->container['shippedFromCountryCode']) < 0)) {
            $invalidProperties[] = "invalid value for 'shippedFromCountryCode', the character length must be bigger than or equal to 0.";
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
     * Gets merchantShipmentNo
     *
     * @return string
     */
    public function getMerchantShipmentNo()
    {
        return $this->container['merchantShipmentNo'];
    }

    /**
     * Sets merchantShipmentNo
     *
     * @param string $merchantShipmentNo The unique shipment reference used by the Merchant.
     *
     * @return self
     */
    public function setMerchantShipmentNo($merchantShipmentNo)
    {
        if (is_null($merchantShipmentNo)) {
            throw new \InvalidArgumentException('non-nullable merchantShipmentNo cannot be null');
        }
        if ((mb_strlen($merchantShipmentNo) > 250)) {
            throw new \InvalidArgumentException('invalid length for $merchantShipmentNo when calling MerchantShipmentRequest., must be smaller than or equal to 250.');
        }
        if ((mb_strlen($merchantShipmentNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchantShipmentNo when calling MerchantShipmentRequest., must be bigger than or equal to 0.');
        }

        $this->container['merchantShipmentNo'] = $merchantShipmentNo;

        return $this;
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
     * @param string $merchantOrderNo The unique order reference used by the Merchant.
     *
     * @return self
     */
    public function setMerchantOrderNo($merchantOrderNo)
    {
        if (is_null($merchantOrderNo)) {
            throw new \InvalidArgumentException('non-nullable merchantOrderNo cannot be null');
        }
        if ((mb_strlen($merchantOrderNo) > 50)) {
            throw new \InvalidArgumentException('invalid length for $merchantOrderNo when calling MerchantShipmentRequest., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($merchantOrderNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchantOrderNo when calling MerchantShipmentRequest., must be bigger than or equal to 0.');
        }

        $this->container['merchantOrderNo'] = $merchantOrderNo;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \FriendsOfCE\Channel\ApiClient\Model\MerchantShipmentLineRequest[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \FriendsOfCE\Channel\ApiClient\Model\MerchantShipmentLineRequest[] $lines lines
     *
     * @return self
     */
    public function setLines($lines)
    {
        if (is_null($lines)) {
            throw new \InvalidArgumentException('non-nullable lines cannot be null');
        }


        if ((count($lines) < 1)) {
            throw new \InvalidArgumentException('invalid length for $lines when calling MerchantShipmentRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['lines'] = $lines;

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
     * @param array<string,string>|null $extraData Extra data on the order. Each item must have an unqiue key
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
     * Gets trackTraceNo
     *
     * @return string|null
     */
    public function getTrackTraceNo()
    {
        return $this->container['trackTraceNo'];
    }

    /**
     * Sets trackTraceNo
     *
     * @param string|null $trackTraceNo The unique shipping reference used by the Shipping carrier (track&trace number).
     *
     * @return self
     */
    public function setTrackTraceNo($trackTraceNo)
    {
        if (is_null($trackTraceNo)) {
            array_push($this->openAPINullablesSetToNull, 'trackTraceNo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('trackTraceNo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($trackTraceNo) && (mb_strlen($trackTraceNo) > 50)) {
            throw new \InvalidArgumentException('invalid length for $trackTraceNo when calling MerchantShipmentRequest., must be smaller than or equal to 50.');
        }
        if (!is_null($trackTraceNo) && (mb_strlen($trackTraceNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $trackTraceNo when calling MerchantShipmentRequest., must be bigger than or equal to 0.');
        }

        $this->container['trackTraceNo'] = $trackTraceNo;

        return $this;
    }

    /**
     * Gets trackTraceUrl
     *
     * @return string|null
     */
    public function getTrackTraceUrl()
    {
        return $this->container['trackTraceUrl'];
    }

    /**
     * Sets trackTraceUrl
     *
     * @param string|null $trackTraceUrl A link to a page of the carrier where the customer can track the shipping of her package.
     *
     * @return self
     */
    public function setTrackTraceUrl($trackTraceUrl)
    {
        if (is_null($trackTraceUrl)) {
            array_push($this->openAPINullablesSetToNull, 'trackTraceUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('trackTraceUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($trackTraceUrl) && (mb_strlen($trackTraceUrl) > 250)) {
            throw new \InvalidArgumentException('invalid length for $trackTraceUrl when calling MerchantShipmentRequest., must be smaller than or equal to 250.');
        }
        if (!is_null($trackTraceUrl) && (mb_strlen($trackTraceUrl) < 0)) {
            throw new \InvalidArgumentException('invalid length for $trackTraceUrl when calling MerchantShipmentRequest., must be bigger than or equal to 0.');
        }

        $this->container['trackTraceUrl'] = $trackTraceUrl;

        return $this;
    }

    /**
     * Gets returnTrackTraceNo
     *
     * @return string|null
     */
    public function getReturnTrackTraceNo()
    {
        return $this->container['returnTrackTraceNo'];
    }

    /**
     * Sets returnTrackTraceNo
     *
     * @param string|null $returnTrackTraceNo The unique return shipping reference that may be used by the Shipping carrier (track & trace number) if the shipment is returned.
     *
     * @return self
     */
    public function setReturnTrackTraceNo($returnTrackTraceNo)
    {
        if (is_null($returnTrackTraceNo)) {
            array_push($this->openAPINullablesSetToNull, 'returnTrackTraceNo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('returnTrackTraceNo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($returnTrackTraceNo) && (mb_strlen($returnTrackTraceNo) > 50)) {
            throw new \InvalidArgumentException('invalid length for $returnTrackTraceNo when calling MerchantShipmentRequest., must be smaller than or equal to 50.');
        }
        if (!is_null($returnTrackTraceNo) && (mb_strlen($returnTrackTraceNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $returnTrackTraceNo when calling MerchantShipmentRequest., must be bigger than or equal to 0.');
        }

        $this->container['returnTrackTraceNo'] = $returnTrackTraceNo;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string|null $method Shipment method: the carrier used for shipping the package. E.g. DHL, postNL.
     *
     * @return self
     */
    public function setMethod($method)
    {
        if (is_null($method)) {
            array_push($this->openAPINullablesSetToNull, 'method');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('method', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($method) && (mb_strlen($method) > 50)) {
            throw new \InvalidArgumentException('invalid length for $method when calling MerchantShipmentRequest., must be smaller than or equal to 50.');
        }
        if (!is_null($method) && (mb_strlen($method) < 0)) {
            throw new \InvalidArgumentException('invalid length for $method when calling MerchantShipmentRequest., must be bigger than or equal to 0.');
        }

        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets shippedFromCountryCode
     *
     * @return string|null
     */
    public function getShippedFromCountryCode()
    {
        return $this->container['shippedFromCountryCode'];
    }

    /**
     * Sets shippedFromCountryCode
     *
     * @param string|null $shippedFromCountryCode The code of the country from where the package is being shipped.
     *
     * @return self
     */
    public function setShippedFromCountryCode($shippedFromCountryCode)
    {
        if (is_null($shippedFromCountryCode)) {
            array_push($this->openAPINullablesSetToNull, 'shippedFromCountryCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shippedFromCountryCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($shippedFromCountryCode) && (mb_strlen($shippedFromCountryCode) > 3)) {
            throw new \InvalidArgumentException('invalid length for $shippedFromCountryCode when calling MerchantShipmentRequest., must be smaller than or equal to 3.');
        }
        if (!is_null($shippedFromCountryCode) && (mb_strlen($shippedFromCountryCode) < 0)) {
            throw new \InvalidArgumentException('invalid length for $shippedFromCountryCode when calling MerchantShipmentRequest., must be bigger than or equal to 0.');
        }

        $this->container['shippedFromCountryCode'] = $shippedFromCountryCode;

        return $this;
    }

    /**
     * Gets shippedFromStockLocationId
     *
     * @return int|null
     */
    public function getShippedFromStockLocationId()
    {
        return $this->container['shippedFromStockLocationId'];
    }

    /**
     * Sets shippedFromStockLocationId
     *
     * @param int|null $shippedFromStockLocationId The id of the stock location where you ship the package from
     *
     * @return self
     */
    public function setShippedFromStockLocationId($shippedFromStockLocationId)
    {
        if (is_null($shippedFromStockLocationId)) {
            array_push($this->openAPINullablesSetToNull, 'shippedFromStockLocationId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shippedFromStockLocationId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shippedFromStockLocationId'] = $shippedFromStockLocationId;

        return $this;
    }

    /**
     * Gets shipmentDate
     *
     * @return \DateTime|null
     */
    public function getShipmentDate()
    {
        return $this->container['shipmentDate'];
    }

    /**
     * Sets shipmentDate
     *
     * @param \DateTime|null $shipmentDate The date at which the shipment was originally created in the source system (if available).
     *
     * @return self
     */
    public function setShipmentDate($shipmentDate)
    {
        if (is_null($shipmentDate)) {
            array_push($this->openAPINullablesSetToNull, 'shipmentDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipmentDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipmentDate'] = $shipmentDate;

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


