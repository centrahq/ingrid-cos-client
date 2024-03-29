<?php
/**
 * ShippingOption
 *
 * PHP version 5
 *
 * @category Class
 * @package  COS\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
* COS API
 *
* No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
* OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.4
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace COS\Swagger\Model;

use \ArrayAccess;
use \COS\Swagger\ObjectSerializer;

/**
 * ShippingOption Class Doc Comment
 *
 * @category Class
 * @package  COS\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShippingOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipping_method' => 'string',
'delivery_type' => 'string',
'carrier' => 'string',
'product' => 'string',
'price' => 'int',
'currency' => 'string',
'locations' => '\COS\Swagger\Model\PickupLocation[]',
'time_slots' => '\COS\Swagger\Model\TimeSlot[]',
'external_method_id' => 'string',
'default_addons' => '\COS\Swagger\Model\CarrierAddon[]',
'supports' => '\COS\Swagger\Model\Supports',
'meta' => 'map[string,string]',
'routes' => '\COS\Swagger\Model\Route[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipping_method' => null,
'delivery_type' => null,
'carrier' => null,
'product' => null,
'price' => 'int32',
'currency' => null,
'locations' => null,
'time_slots' => null,
'external_method_id' => null,
'default_addons' => null,
'supports' => null,
'meta' => null,
'routes' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'shipping_method' => 'shipping_method',
'delivery_type' => 'delivery_type',
'carrier' => 'carrier',
'product' => 'product',
'price' => 'price',
'currency' => 'currency',
'locations' => 'locations',
'time_slots' => 'time_slots',
'external_method_id' => 'external_method_id',
'default_addons' => 'default_addons',
'supports' => 'supports',
'meta' => 'meta',
'routes' => 'routes'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipping_method' => 'setShippingMethod',
'delivery_type' => 'setDeliveryType',
'carrier' => 'setCarrier',
'product' => 'setProduct',
'price' => 'setPrice',
'currency' => 'setCurrency',
'locations' => 'setLocations',
'time_slots' => 'setTimeSlots',
'external_method_id' => 'setExternalMethodId',
'default_addons' => 'setDefaultAddons',
'supports' => 'setSupports',
'meta' => 'setMeta',
'routes' => 'setRoutes'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipping_method' => 'getShippingMethod',
'delivery_type' => 'getDeliveryType',
'carrier' => 'getCarrier',
'product' => 'getProduct',
'price' => 'getPrice',
'currency' => 'getCurrency',
'locations' => 'getLocations',
'time_slots' => 'getTimeSlots',
'external_method_id' => 'getExternalMethodId',
'default_addons' => 'getDefaultAddons',
'supports' => 'getSupports',
'meta' => 'getMeta',
'routes' => 'getRoutes'    ];

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
        return self::$swaggerModelName;
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
        $this->container['shipping_method'] = isset($data['shipping_method']) ? $data['shipping_method'] : null;
        $this->container['delivery_type'] = isset($data['delivery_type']) ? $data['delivery_type'] : null;
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['locations'] = isset($data['locations']) ? $data['locations'] : null;
        $this->container['time_slots'] = isset($data['time_slots']) ? $data['time_slots'] : null;
        $this->container['external_method_id'] = isset($data['external_method_id']) ? $data['external_method_id'] : null;
        $this->container['default_addons'] = isset($data['default_addons']) ? $data['default_addons'] : null;
        $this->container['supports'] = isset($data['supports']) ? $data['supports'] : null;
        $this->container['meta'] = isset($data['meta']) ? $data['meta'] : null;
        $this->container['routes'] = isset($data['routes']) ? $data['routes'] : null;
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

        return true;
    }


    /**
     * Gets shipping_method
     *
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->container['shipping_method'];
    }

    /**
     * Sets shipping_method
     *
     * @param string $shipping_method shipping_method
     *
     * @return $this
     */
    public function setShippingMethod($shipping_method)
    {
        $this->container['shipping_method'] = $shipping_method;

        return $this;
    }

    /**
     * Gets delivery_type
     *
     * @return string
     */
    public function getDeliveryType()
    {
        return $this->container['delivery_type'];
    }

    /**
     * Sets delivery_type
     *
     * @param string $delivery_type delivery_type
     *
     * @return $this
     */
    public function setDeliveryType($delivery_type)
    {
        $this->container['delivery_type'] = $delivery_type;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string $carrier carrier
     *
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param int $price [deprecated] Use Prices on ShippingCategory.
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency [deprecated] Use Currency on ShippingCategory.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets locations
     *
     * @return \COS\Swagger\Model\PickupLocation[]
     */
    public function getLocations()
    {
        return $this->container['locations'];
    }

    /**
     * Sets locations
     *
     * @param \COS\Swagger\Model\PickupLocation[] $locations locations
     *
     * @return $this
     */
    public function setLocations($locations)
    {
        $this->container['locations'] = $locations;

        return $this;
    }

    /**
     * Gets time_slots
     *
     * @return \COS\Swagger\Model\TimeSlot[]
     */
    public function getTimeSlots()
    {
        return $this->container['time_slots'];
    }

    /**
     * Sets time_slots
     *
     * @param \COS\Swagger\Model\TimeSlot[] $time_slots time_slots
     *
     * @return $this
     */
    public function setTimeSlots($time_slots)
    {
        $this->container['time_slots'] = $time_slots;

        return $this;
    }

    /**
     * Gets external_method_id
     *
     * @return string
     */
    public function getExternalMethodId()
    {
        return $this->container['external_method_id'];
    }

    /**
     * Sets external_method_id
     *
     * @param string $external_method_id external_method_id
     *
     * @return $this
     */
    public function setExternalMethodId($external_method_id)
    {
        $this->container['external_method_id'] = $external_method_id;

        return $this;
    }

    /**
     * Gets default_addons
     *
     * @return \COS\Swagger\Model\CarrierAddon[]
     */
    public function getDefaultAddons()
    {
        return $this->container['default_addons'];
    }

    /**
     * Sets default_addons
     *
     * @param \COS\Swagger\Model\CarrierAddon[] $default_addons DefaultAddons are addons that are enabled by default.
     *
     * @return $this
     */
    public function setDefaultAddons($default_addons)
    {
        $this->container['default_addons'] = $default_addons;

        return $this;
    }

    /**
     * Gets supports
     *
     * @return \COS\Swagger\Model\Supports
     */
    public function getSupports()
    {
        return $this->container['supports'];
    }

    /**
     * Sets supports
     *
     * @param \COS\Swagger\Model\Supports $supports supports
     *
     * @return $this
     */
    public function setSupports($supports)
    {
        $this->container['supports'] = $supports;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return map[string,string]
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param map[string,string] $meta meta
     *
     * @return $this
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

        return $this;
    }

    /**
     * Gets routes
     *
     * @return \COS\Swagger\Model\Route[]
     */
    public function getRoutes()
    {
        return $this->container['routes'];
    }

    /**
     * Sets routes
     *
     * @param \COS\Swagger\Model\Route[] $routes Routes represent all possible combinations for delivery steps.
     *
     * @return $this
     */
    public function setRoutes($routes)
    {
        $this->container['routes'] = $routes;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
