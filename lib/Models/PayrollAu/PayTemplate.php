<?php
/**
 * PayTemplate
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll AU
 *
 * This is the Xero Payroll API for orgs in Australia region.
 *
 * OpenAPI spec version: 2.2.1
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\PayrollAu;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * PayTemplate Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'earnings_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\EarningsLine[]',
        'deduction_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\DeductionLine[]',
        'super_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\SuperLine[]',
        'reimbursement_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\ReimbursementLine[]',
        'leave_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\LeaveLine[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'earnings_lines' => null,
        'deduction_lines' => null,
        'super_lines' => null,
        'reimbursement_lines' => null,
        'leave_lines' => null
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
        'earnings_lines' => 'EarningsLines',
        'deduction_lines' => 'DeductionLines',
        'super_lines' => 'SuperLines',
        'reimbursement_lines' => 'ReimbursementLines',
        'leave_lines' => 'LeaveLines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'earnings_lines' => 'setEarningsLines',
        'deduction_lines' => 'setDeductionLines',
        'super_lines' => 'setSuperLines',
        'reimbursement_lines' => 'setReimbursementLines',
        'leave_lines' => 'setLeaveLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'earnings_lines' => 'getEarningsLines',
        'deduction_lines' => 'getDeductionLines',
        'super_lines' => 'getSuperLines',
        'reimbursement_lines' => 'getReimbursementLines',
        'leave_lines' => 'getLeaveLines'
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
        $this->container['earnings_lines'] = isset($data['earnings_lines']) ? $data['earnings_lines'] : null;
        $this->container['deduction_lines'] = isset($data['deduction_lines']) ? $data['deduction_lines'] : null;
        $this->container['super_lines'] = isset($data['super_lines']) ? $data['super_lines'] : null;
        $this->container['reimbursement_lines'] = isset($data['reimbursement_lines']) ? $data['reimbursement_lines'] : null;
        $this->container['leave_lines'] = isset($data['leave_lines']) ? $data['leave_lines'] : null;
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
     * Gets earnings_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\EarningsLine[]|null
     */
    public function getEarningsLines()
    {
        return $this->container['earnings_lines'];
    }

    /**
     * Sets earnings_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\EarningsLine[]|null $earnings_lines earnings_lines
     *
     * @return $this
     */
    public function setEarningsLines($earnings_lines)
    {

        $this->container['earnings_lines'] = $earnings_lines;

        return $this;
    }



    /**
     * Gets deduction_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\DeductionLine[]|null
     */
    public function getDeductionLines()
    {
        return $this->container['deduction_lines'];
    }

    /**
     * Sets deduction_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\DeductionLine[]|null $deduction_lines deduction_lines
     *
     * @return $this
     */
    public function setDeductionLines($deduction_lines)
    {

        $this->container['deduction_lines'] = $deduction_lines;

        return $this;
    }



    /**
     * Gets super_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\SuperLine[]|null
     */
    public function getSuperLines()
    {
        return $this->container['super_lines'];
    }

    /**
     * Sets super_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\SuperLine[]|null $super_lines super_lines
     *
     * @return $this
     */
    public function setSuperLines($super_lines)
    {

        $this->container['super_lines'] = $super_lines;

        return $this;
    }



    /**
     * Gets reimbursement_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\ReimbursementLine[]|null
     */
    public function getReimbursementLines()
    {
        return $this->container['reimbursement_lines'];
    }

    /**
     * Sets reimbursement_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\ReimbursementLine[]|null $reimbursement_lines reimbursement_lines
     *
     * @return $this
     */
    public function setReimbursementLines($reimbursement_lines)
    {

        $this->container['reimbursement_lines'] = $reimbursement_lines;

        return $this;
    }



    /**
     * Gets leave_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\LeaveLine[]|null
     */
    public function getLeaveLines()
    {
        return $this->container['leave_lines'];
    }

    /**
     * Sets leave_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\LeaveLine[]|null $leave_lines leave_lines
     *
     * @return $this
     */
    public function setLeaveLines($leave_lines)
    {

        $this->container['leave_lines'] = $leave_lines;

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
            PayrollAuObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


