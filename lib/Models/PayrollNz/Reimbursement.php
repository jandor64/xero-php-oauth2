<?php
/**
 * Reimbursement
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll NZ
 *
 * This is the Xero Payroll API for orgs in the NZ region.
 *
 * OpenAPI spec version: 2.8.2
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\PayrollNz;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollNzObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * Reimbursement Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Reimbursement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Reimbursement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reimbursement_id' => 'string',
        'name' => 'string',
        'account_id' => 'string',
        'current_record' => 'bool',
        'reimbursement_category' => 'string',
        'calculation_type' => 'string',
        'standard_amount' => 'string',
        'standard_type_of_units' => 'string',
        'standard_rate_per_unit' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'reimbursement_id' => 'uuid',
        'name' => null,
        'account_id' => 'uuid',
        'current_record' => null,
        'reimbursement_category' => null,
        'calculation_type' => null,
        'standard_amount' => null,
        'standard_type_of_units' => null,
        'standard_rate_per_unit' => 'double'
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
        'reimbursement_id' => 'reimbursementID',
        'name' => 'name',
        'account_id' => 'accountID',
        'current_record' => 'currentRecord',
        'reimbursement_category' => 'reimbursementCategory',
        'calculation_type' => 'calculationType',
        'standard_amount' => 'standardAmount',
        'standard_type_of_units' => 'standardTypeOfUnits',
        'standard_rate_per_unit' => 'standardRatePerUnit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reimbursement_id' => 'setReimbursementId',
        'name' => 'setName',
        'account_id' => 'setAccountId',
        'current_record' => 'setCurrentRecord',
        'reimbursement_category' => 'setReimbursementCategory',
        'calculation_type' => 'setCalculationType',
        'standard_amount' => 'setStandardAmount',
        'standard_type_of_units' => 'setStandardTypeOfUnits',
        'standard_rate_per_unit' => 'setStandardRatePerUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reimbursement_id' => 'getReimbursementId',
        'name' => 'getName',
        'account_id' => 'getAccountId',
        'current_record' => 'getCurrentRecord',
        'reimbursement_category' => 'getReimbursementCategory',
        'calculation_type' => 'getCalculationType',
        'standard_amount' => 'getStandardAmount',
        'standard_type_of_units' => 'getStandardTypeOfUnits',
        'standard_rate_per_unit' => 'getStandardRatePerUnit'
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

    const REIMBURSEMENT_CATEGORY_GST = 'GST';
    const REIMBURSEMENT_CATEGORY_NO_GST = 'NoGST';
    const REIMBURSEMENT_CATEGORY_GST_INCLUSIVE = 'GSTInclusive';
    const CALCULATION_TYPE_UNKNOWN = 'Unknown';
    const CALCULATION_TYPE_FIXED_AMOUNT = 'FixedAmount';
    const CALCULATION_TYPE_RATE_PER_UNIT = 'RatePerUnit';
    const STANDARD_TYPE_OF_UNITS_HOURS = 'Hours';
    const STANDARD_TYPE_OF_UNITS_KM = 'km';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReimbursementCategoryAllowableValues()
    {
        return [
            self::REIMBURSEMENT_CATEGORY_GST,
            self::REIMBURSEMENT_CATEGORY_NO_GST,
            self::REIMBURSEMENT_CATEGORY_GST_INCLUSIVE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCalculationTypeAllowableValues()
    {
        return [
            self::CALCULATION_TYPE_UNKNOWN,
            self::CALCULATION_TYPE_FIXED_AMOUNT,
            self::CALCULATION_TYPE_RATE_PER_UNIT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStandardTypeOfUnitsAllowableValues()
    {
        return [
            self::STANDARD_TYPE_OF_UNITS_HOURS,
            self::STANDARD_TYPE_OF_UNITS_KM,
        ];
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
        $this->container['reimbursement_id'] = isset($data['reimbursement_id']) ? $data['reimbursement_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['current_record'] = isset($data['current_record']) ? $data['current_record'] : null;
        $this->container['reimbursement_category'] = isset($data['reimbursement_category']) ? $data['reimbursement_category'] : null;
        $this->container['calculation_type'] = isset($data['calculation_type']) ? $data['calculation_type'] : null;
        $this->container['standard_amount'] = isset($data['standard_amount']) ? $data['standard_amount'] : null;
        $this->container['standard_type_of_units'] = isset($data['standard_type_of_units']) ? $data['standard_type_of_units'] : null;
        $this->container['standard_rate_per_unit'] = isset($data['standard_rate_per_unit']) ? $data['standard_rate_per_unit'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        $allowedValues = $this->getReimbursementCategoryAllowableValues();
        if (!is_null($this->container['reimbursement_category']) && !in_array($this->container['reimbursement_category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reimbursement_category', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCalculationTypeAllowableValues();
        if (!is_null($this->container['calculation_type']) && !in_array($this->container['calculation_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'calculation_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStandardTypeOfUnitsAllowableValues();
        if (!is_null($this->container['standard_type_of_units']) && !in_array($this->container['standard_type_of_units'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'standard_type_of_units', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets reimbursement_id
     *
     * @return string|null
     */
    public function getReimbursementId()
    {
        return $this->container['reimbursement_id'];
    }

    /**
     * Sets reimbursement_id
     *
     * @param string|null $reimbursement_id Xero unique identifier for a reimbursement
     *
     * @return $this
     */
    public function setReimbursementId($reimbursement_id)
    {

        $this->container['reimbursement_id'] = $reimbursement_id;

        return $this;
    }



    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the reimbursement
     *
     * @return $this
     */
    public function setName($name)
    {

        $this->container['name'] = $name;

        return $this;
    }



    /**
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id Xero unique identifier for the account used for the reimbursement
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {

        $this->container['account_id'] = $account_id;

        return $this;
    }



    /**
     * Gets current_record
     *
     * @return bool|null
     */
    public function getCurrentRecord()
    {
        return $this->container['current_record'];
    }

    /**
     * Sets current_record
     *
     * @param bool|null $current_record Indicates that whether the reimbursement is active
     *
     * @return $this
     */
    public function setCurrentRecord($current_record)
    {

        $this->container['current_record'] = $current_record;

        return $this;
    }



    /**
     * Gets reimbursement_category
     *
     * @return string|null
     */
    public function getReimbursementCategory()
    {
        return $this->container['reimbursement_category'];
    }

    /**
     * Sets reimbursement_category
     *
     * @param string|null $reimbursement_category See Reimbursement Categories
     *
     * @return $this
     */
    public function setReimbursementCategory($reimbursement_category)
    {
        $allowedValues = $this->getReimbursementCategoryAllowableValues();
        if (!is_null($reimbursement_category) && !in_array($reimbursement_category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reimbursement_category', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['reimbursement_category'] = $reimbursement_category;

        return $this;
    }



    /**
     * Gets calculation_type
     *
     * @return string|null
     */
    public function getCalculationType()
    {
        return $this->container['calculation_type'];
    }

    /**
     * Sets calculation_type
     *
     * @param string|null $calculation_type See Calculation Types
     *
     * @return $this
     */
    public function setCalculationType($calculation_type)
    {
        $allowedValues = $this->getCalculationTypeAllowableValues();
        if (!is_null($calculation_type) && !in_array($calculation_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'calculation_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['calculation_type'] = $calculation_type;

        return $this;
    }



    /**
     * Gets standard_amount
     *
     * @return string|null
     */
    public function getStandardAmount()
    {
        return $this->container['standard_amount'];
    }

    /**
     * Sets standard_amount
     *
     * @param string|null $standard_amount Optional Fixed Rate Amount. Applicable when calculation type is Fixed Amount
     *
     * @return $this
     */
    public function setStandardAmount($standard_amount)
    {

        $this->container['standard_amount'] = $standard_amount;

        return $this;
    }



    /**
     * Gets standard_type_of_units
     *
     * @return string|null
     */
    public function getStandardTypeOfUnits()
    {
        return $this->container['standard_type_of_units'];
    }

    /**
     * Sets standard_type_of_units
     *
     * @param string|null $standard_type_of_units Optional Type Of Units. Applicable when calculation type is Rate Per Unit
     *
     * @return $this
     */
    public function setStandardTypeOfUnits($standard_type_of_units)
    {
        $allowedValues = $this->getStandardTypeOfUnitsAllowableValues();
        if (!is_null($standard_type_of_units) && !in_array($standard_type_of_units, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'standard_type_of_units', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['standard_type_of_units'] = $standard_type_of_units;

        return $this;
    }



    /**
     * Gets standard_rate_per_unit
     *
     * @return double|null
     */
    public function getStandardRatePerUnit()
    {
        return $this->container['standard_rate_per_unit'];
    }

    /**
     * Sets standard_rate_per_unit
     *
     * @param double|null $standard_rate_per_unit Optional Rate Per Unit. Applicable when calculation type is Rate Per Unit
     *
     * @return $this
     */
    public function setStandardRatePerUnit($standard_rate_per_unit)
    {

        $this->container['standard_rate_per_unit'] = $standard_rate_per_unit;

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
        return json_encode(
            PayrollNzObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


