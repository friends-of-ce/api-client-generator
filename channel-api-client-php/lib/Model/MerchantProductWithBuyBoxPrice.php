<?php
/**
 * MerchantProductWithBuyBoxPrice
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
 * MerchantProductWithBuyBoxPrice Class Doc Comment
 *
 * @category Class
 * @package  FriendsOfCE\Channel\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MerchantProductWithBuyBoxPrice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MerchantProductWithBuyBoxPrice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sku' => 'string',
        'gtin' => 'string',
        'buyBoxPrice' => 'float',
        'buyBoxPriceInclShipping' => 'float',
        'isMerchantBuyBoxWinner' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sku' => null,
        'gtin' => null,
        'buyBoxPrice' => 'decimal',
        'buyBoxPriceInclShipping' => 'decimal',
        'isMerchantBuyBoxWinner' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sku' => true,
		'gtin' => true,
		'buyBoxPrice' => true,
		'buyBoxPriceInclShipping' => true,
		'isMerchantBuyBoxWinner' => false
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
        'sku' => 'Sku',
        'gtin' => 'Gtin',
        'buyBoxPrice' => 'BuyBoxPrice',
        'buyBoxPriceInclShipping' => 'BuyBoxPriceInclShipping',
        'isMerchantBuyBoxWinner' => 'IsMerchantBuyBoxWinner'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sku' => 'setSku',
        'gtin' => 'setGtin',
        'buyBoxPrice' => 'setBuyBoxPrice',
        'buyBoxPriceInclShipping' => 'setBuyBoxPriceInclShipping',
        'isMerchantBuyBoxWinner' => 'setIsMerchantBuyBoxWinner'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sku' => 'getSku',
        'gtin' => 'getGtin',
        'buyBoxPrice' => 'getBuyBoxPrice',
        'buyBoxPriceInclShipping' => 'getBuyBoxPriceInclShipping',
        'isMerchantBuyBoxWinner' => 'getIsMerchantBuyBoxWinner'
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
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('gtin', $data ?? [], null);
        $this->setIfExists('buyBoxPrice', $data ?? [], null);
        $this->setIfExists('buyBoxPriceInclShipping', $data ?? [], null);
        $this->setIfExists('isMerchantBuyBoxWinner', $data ?? [], null);
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
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku Product SKU number
     *
     * @return self
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            array_push($this->openAPINullablesSetToNull, 'sku');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sku', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets gtin
     *
     * @return string|null
     */
    public function getGtin()
    {
        return $this->container['gtin'];
    }

    /**
     * Sets gtin
     *
     * @param string|null $gtin Product GTIN
     *
     * @return self
     */
    public function setGtin($gtin)
    {
        if (is_null($gtin)) {
            array_push($this->openAPINullablesSetToNull, 'gtin');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gtin', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['gtin'] = $gtin;

        return $this;
    }

    /**
     * Gets buyBoxPrice
     *
     * @return float|null
     */
    public function getBuyBoxPrice()
    {
        return $this->container['buyBoxPrice'];
    }

    /**
     * Sets buyBoxPrice
     *
     * @param float|null $buyBoxPrice Price of Buy box winner (excl. shipping cost)  Note: not all channels have a separate shipping cost field (e.g. bol.com), so can be the same as BuyBoxPriceInclShipping
     *
     * @return self
     */
    public function setBuyBoxPrice($buyBoxPrice)
    {
        if (is_null($buyBoxPrice)) {
            array_push($this->openAPINullablesSetToNull, 'buyBoxPrice');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('buyBoxPrice', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['buyBoxPrice'] = $buyBoxPrice;

        return $this;
    }

    /**
     * Gets buyBoxPriceInclShipping
     *
     * @return float|null
     */
    public function getBuyBoxPriceInclShipping()
    {
        return $this->container['buyBoxPriceInclShipping'];
    }

    /**
     * Sets buyBoxPriceInclShipping
     *
     * @param float|null $buyBoxPriceInclShipping Price of Buy box winner (incl. shipping cost).  If null, then there is no data or no Buy box winner
     *
     * @return self
     */
    public function setBuyBoxPriceInclShipping($buyBoxPriceInclShipping)
    {
        if (is_null($buyBoxPriceInclShipping)) {
            array_push($this->openAPINullablesSetToNull, 'buyBoxPriceInclShipping');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('buyBoxPriceInclShipping', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['buyBoxPriceInclShipping'] = $buyBoxPriceInclShipping;

        return $this;
    }

    /**
     * Gets isMerchantBuyBoxWinner
     *
     * @return bool|null
     */
    public function getIsMerchantBuyBoxWinner()
    {
        return $this->container['isMerchantBuyBoxWinner'];
    }

    /**
     * Sets isMerchantBuyBoxWinner
     *
     * @param bool|null $isMerchantBuyBoxWinner Are you the Buy box winner or not?
     *
     * @return self
     */
    public function setIsMerchantBuyBoxWinner($isMerchantBuyBoxWinner)
    {
        if (is_null($isMerchantBuyBoxWinner)) {
            throw new \InvalidArgumentException('non-nullable isMerchantBuyBoxWinner cannot be null');
        }
        $this->container['isMerchantBuyBoxWinner'] = $isMerchantBuyBoxWinner;

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


