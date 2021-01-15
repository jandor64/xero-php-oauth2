<?php
/**
 * Payslip
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll UK
 *
 * This is the Xero Payroll API for orgs in the UK region.
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

namespace XeroAPI\XeroPHP\Models\PayrollUk;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollUkObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * Payslip Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Payslip implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Payslip';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pay_slip_id' => 'string',
        'employee_id' => 'string',
        'pay_run_id' => 'string',
        'last_edited' => '\DateTime',
        'first_name' => 'string',
        'last_name' => 'string',
        'total_earnings' => 'double',
        'gross_earnings' => 'double',
        'total_pay' => 'double',
        'total_employer_taxes' => 'double',
        'total_employee_taxes' => 'double',
        'total_deductions' => 'double',
        'total_reimbursements' => 'double',
        'total_court_orders' => 'double',
        'total_benefits' => 'double',
        'bacs_hash' => 'string',
        'payment_method' => 'string',
        'earnings_lines' => '\XeroAPI\XeroPHP\Models\PayrollUk\EarningsLine[]',
        'leave_earnings_lines' => '\XeroAPI\XeroPHP\Models\PayrollUk\LeaveEarningsLine[]',
        'timesheet_earnings_lines' => '\XeroAPI\XeroPHP\Models\PayrollUk\TimesheetEarningsLine[]',
        'deduction_lines' => '\XeroAPI\XeroPHP\Models\PayrollUk\DeductionLine[]',
        'reimbursement_lines' => '\XeroAPI\XeroPHP\Models\PayrollUk\ReimbursementLine[]',
        'leave_accrual_lines' => '\XeroAPI\XeroPHP\Models\PayrollUk\LeaveAccrualLine[]',
        'benefit_lines' => '\XeroAPI\XeroPHP\Models\PayrollUk\BenefitLine[]',
        'payment_lines' => '\XeroAPI\XeroPHP\Models\PayrollUk\PaymentLine[]',
        'employee_tax_lines' => '\XeroAPI\XeroPHP\Models\PayrollUk\TaxLine[]',
        'employer_tax_lines' => '\XeroAPI\XeroPHP\Models\PayrollUk\TaxLine[]',
        'court_order_lines' => '\XeroAPI\XeroPHP\Models\PayrollUk\CourtOrderLine[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'pay_slip_id' => 'uuid',
        'employee_id' => 'uuid',
        'pay_run_id' => 'uuid',
        'last_edited' => 'date',
        'first_name' => null,
        'last_name' => null,
        'total_earnings' => 'double',
        'gross_earnings' => 'double',
        'total_pay' => 'double',
        'total_employer_taxes' => 'double',
        'total_employee_taxes' => 'double',
        'total_deductions' => 'double',
        'total_reimbursements' => 'double',
        'total_court_orders' => 'double',
        'total_benefits' => 'double',
        'bacs_hash' => null,
        'payment_method' => null,
        'earnings_lines' => null,
        'leave_earnings_lines' => null,
        'timesheet_earnings_lines' => null,
        'deduction_lines' => null,
        'reimbursement_lines' => null,
        'leave_accrual_lines' => null,
        'benefit_lines' => null,
        'payment_lines' => null,
        'employee_tax_lines' => null,
        'employer_tax_lines' => null,
        'court_order_lines' => null
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
        'pay_slip_id' => 'paySlipID',
        'employee_id' => 'employeeID',
        'pay_run_id' => 'payRunID',
        'last_edited' => 'lastEdited',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'total_earnings' => 'totalEarnings',
        'gross_earnings' => 'grossEarnings',
        'total_pay' => 'totalPay',
        'total_employer_taxes' => 'totalEmployerTaxes',
        'total_employee_taxes' => 'totalEmployeeTaxes',
        'total_deductions' => 'totalDeductions',
        'total_reimbursements' => 'totalReimbursements',
        'total_court_orders' => 'totalCourtOrders',
        'total_benefits' => 'totalBenefits',
        'bacs_hash' => 'bacsHash',
        'payment_method' => 'paymentMethod',
        'earnings_lines' => 'earningsLines',
        'leave_earnings_lines' => 'leaveEarningsLines',
        'timesheet_earnings_lines' => 'timesheetEarningsLines',
        'deduction_lines' => 'deductionLines',
        'reimbursement_lines' => 'reimbursementLines',
        'leave_accrual_lines' => 'leaveAccrualLines',
        'benefit_lines' => 'benefitLines',
        'payment_lines' => 'paymentLines',
        'employee_tax_lines' => 'employeeTaxLines',
        'employer_tax_lines' => 'employerTaxLines',
        'court_order_lines' => 'courtOrderLines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pay_slip_id' => 'setPaySlipId',
        'employee_id' => 'setEmployeeId',
        'pay_run_id' => 'setPayRunId',
        'last_edited' => 'setLastEdited',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'total_earnings' => 'setTotalEarnings',
        'gross_earnings' => 'setGrossEarnings',
        'total_pay' => 'setTotalPay',
        'total_employer_taxes' => 'setTotalEmployerTaxes',
        'total_employee_taxes' => 'setTotalEmployeeTaxes',
        'total_deductions' => 'setTotalDeductions',
        'total_reimbursements' => 'setTotalReimbursements',
        'total_court_orders' => 'setTotalCourtOrders',
        'total_benefits' => 'setTotalBenefits',
        'bacs_hash' => 'setBacsHash',
        'payment_method' => 'setPaymentMethod',
        'earnings_lines' => 'setEarningsLines',
        'leave_earnings_lines' => 'setLeaveEarningsLines',
        'timesheet_earnings_lines' => 'setTimesheetEarningsLines',
        'deduction_lines' => 'setDeductionLines',
        'reimbursement_lines' => 'setReimbursementLines',
        'leave_accrual_lines' => 'setLeaveAccrualLines',
        'benefit_lines' => 'setBenefitLines',
        'payment_lines' => 'setPaymentLines',
        'employee_tax_lines' => 'setEmployeeTaxLines',
        'employer_tax_lines' => 'setEmployerTaxLines',
        'court_order_lines' => 'setCourtOrderLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pay_slip_id' => 'getPaySlipId',
        'employee_id' => 'getEmployeeId',
        'pay_run_id' => 'getPayRunId',
        'last_edited' => 'getLastEdited',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'total_earnings' => 'getTotalEarnings',
        'gross_earnings' => 'getGrossEarnings',
        'total_pay' => 'getTotalPay',
        'total_employer_taxes' => 'getTotalEmployerTaxes',
        'total_employee_taxes' => 'getTotalEmployeeTaxes',
        'total_deductions' => 'getTotalDeductions',
        'total_reimbursements' => 'getTotalReimbursements',
        'total_court_orders' => 'getTotalCourtOrders',
        'total_benefits' => 'getTotalBenefits',
        'bacs_hash' => 'getBacsHash',
        'payment_method' => 'getPaymentMethod',
        'earnings_lines' => 'getEarningsLines',
        'leave_earnings_lines' => 'getLeaveEarningsLines',
        'timesheet_earnings_lines' => 'getTimesheetEarningsLines',
        'deduction_lines' => 'getDeductionLines',
        'reimbursement_lines' => 'getReimbursementLines',
        'leave_accrual_lines' => 'getLeaveAccrualLines',
        'benefit_lines' => 'getBenefitLines',
        'payment_lines' => 'getPaymentLines',
        'employee_tax_lines' => 'getEmployeeTaxLines',
        'employer_tax_lines' => 'getEmployerTaxLines',
        'court_order_lines' => 'getCourtOrderLines'
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

    const PAYMENT_METHOD_CHEQUE = 'Cheque';
    const PAYMENT_METHOD_ELECTRONICALLY = 'Electronically';
    const PAYMENT_METHOD_MANUAL = 'Manual';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentMethodAllowableValues()
    {
        return [
            self::PAYMENT_METHOD_CHEQUE,
            self::PAYMENT_METHOD_ELECTRONICALLY,
            self::PAYMENT_METHOD_MANUAL,
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
        $this->container['pay_slip_id'] = isset($data['pay_slip_id']) ? $data['pay_slip_id'] : null;
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['pay_run_id'] = isset($data['pay_run_id']) ? $data['pay_run_id'] : null;
        $this->container['last_edited'] = isset($data['last_edited']) ? $data['last_edited'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['total_earnings'] = isset($data['total_earnings']) ? $data['total_earnings'] : null;
        $this->container['gross_earnings'] = isset($data['gross_earnings']) ? $data['gross_earnings'] : null;
        $this->container['total_pay'] = isset($data['total_pay']) ? $data['total_pay'] : null;
        $this->container['total_employer_taxes'] = isset($data['total_employer_taxes']) ? $data['total_employer_taxes'] : null;
        $this->container['total_employee_taxes'] = isset($data['total_employee_taxes']) ? $data['total_employee_taxes'] : null;
        $this->container['total_deductions'] = isset($data['total_deductions']) ? $data['total_deductions'] : null;
        $this->container['total_reimbursements'] = isset($data['total_reimbursements']) ? $data['total_reimbursements'] : null;
        $this->container['total_court_orders'] = isset($data['total_court_orders']) ? $data['total_court_orders'] : null;
        $this->container['total_benefits'] = isset($data['total_benefits']) ? $data['total_benefits'] : null;
        $this->container['bacs_hash'] = isset($data['bacs_hash']) ? $data['bacs_hash'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['earnings_lines'] = isset($data['earnings_lines']) ? $data['earnings_lines'] : null;
        $this->container['leave_earnings_lines'] = isset($data['leave_earnings_lines']) ? $data['leave_earnings_lines'] : null;
        $this->container['timesheet_earnings_lines'] = isset($data['timesheet_earnings_lines']) ? $data['timesheet_earnings_lines'] : null;
        $this->container['deduction_lines'] = isset($data['deduction_lines']) ? $data['deduction_lines'] : null;
        $this->container['reimbursement_lines'] = isset($data['reimbursement_lines']) ? $data['reimbursement_lines'] : null;
        $this->container['leave_accrual_lines'] = isset($data['leave_accrual_lines']) ? $data['leave_accrual_lines'] : null;
        $this->container['benefit_lines'] = isset($data['benefit_lines']) ? $data['benefit_lines'] : null;
        $this->container['payment_lines'] = isset($data['payment_lines']) ? $data['payment_lines'] : null;
        $this->container['employee_tax_lines'] = isset($data['employee_tax_lines']) ? $data['employee_tax_lines'] : null;
        $this->container['employer_tax_lines'] = isset($data['employer_tax_lines']) ? $data['employer_tax_lines'] : null;
        $this->container['court_order_lines'] = isset($data['court_order_lines']) ? $data['court_order_lines'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($this->container['payment_method']) && !in_array($this->container['payment_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_method', must be one of '%s'",
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
     * Gets pay_slip_id
     *
     * @return string|null
     */
    public function getPaySlipId()
    {
        return $this->container['pay_slip_id'];
    }

    /**
     * Sets pay_slip_id
     *
     * @param string|null $pay_slip_id The Xero identifier for a Payslip
     *
     * @return $this
     */
    public function setPaySlipId($pay_slip_id)
    {

        $this->container['pay_slip_id'] = $pay_slip_id;

        return $this;
    }



    /**
     * Gets employee_id
     *
     * @return string|null
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param string|null $employee_id The Xero identifier for payroll employee
     *
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {

        $this->container['employee_id'] = $employee_id;

        return $this;
    }



    /**
     * Gets pay_run_id
     *
     * @return string|null
     */
    public function getPayRunId()
    {
        return $this->container['pay_run_id'];
    }

    /**
     * Sets pay_run_id
     *
     * @param string|null $pay_run_id The Xero identifier for the associated payrun
     *
     * @return $this
     */
    public function setPayRunId($pay_run_id)
    {

        $this->container['pay_run_id'] = $pay_run_id;

        return $this;
    }



    /**
     * Gets last_edited
     *
     * @return \DateTime|null
     */
    public function getLastEdited()
    {
        return $this->container['last_edited'];
    }

    /**
     * Sets last_edited
     *
     * @param \DateTime|null $last_edited The date payslip was last updated
     *
     * @return $this
     */
    public function setLastEdited($last_edited)
    {

        $this->container['last_edited'] = $last_edited;

        return $this;
    }



    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name Employee first name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {

        $this->container['first_name'] = $first_name;

        return $this;
    }



    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name Employee last name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {

        $this->container['last_name'] = $last_name;

        return $this;
    }



    /**
     * Gets total_earnings
     *
     * @return double|null
     */
    public function getTotalEarnings()
    {
        return $this->container['total_earnings'];
    }

    /**
     * Sets total_earnings
     *
     * @param double|null $total_earnings Total earnings before any deductions. Same as gross earnings for UK.
     *
     * @return $this
     */
    public function setTotalEarnings($total_earnings)
    {

        $this->container['total_earnings'] = $total_earnings;

        return $this;
    }



    /**
     * Gets gross_earnings
     *
     * @return double|null
     */
    public function getGrossEarnings()
    {
        return $this->container['gross_earnings'];
    }

    /**
     * Sets gross_earnings
     *
     * @param double|null $gross_earnings Total earnings before any deductions. Same as total earnings for UK.
     *
     * @return $this
     */
    public function setGrossEarnings($gross_earnings)
    {

        $this->container['gross_earnings'] = $gross_earnings;

        return $this;
    }



    /**
     * Gets total_pay
     *
     * @return double|null
     */
    public function getTotalPay()
    {
        return $this->container['total_pay'];
    }

    /**
     * Sets total_pay
     *
     * @param double|null $total_pay The employee net pay
     *
     * @return $this
     */
    public function setTotalPay($total_pay)
    {

        $this->container['total_pay'] = $total_pay;

        return $this;
    }



    /**
     * Gets total_employer_taxes
     *
     * @return double|null
     */
    public function getTotalEmployerTaxes()
    {
        return $this->container['total_employer_taxes'];
    }

    /**
     * Sets total_employer_taxes
     *
     * @param double|null $total_employer_taxes The employer's tax obligation
     *
     * @return $this
     */
    public function setTotalEmployerTaxes($total_employer_taxes)
    {

        $this->container['total_employer_taxes'] = $total_employer_taxes;

        return $this;
    }



    /**
     * Gets total_employee_taxes
     *
     * @return double|null
     */
    public function getTotalEmployeeTaxes()
    {
        return $this->container['total_employee_taxes'];
    }

    /**
     * Sets total_employee_taxes
     *
     * @param double|null $total_employee_taxes The part of an employee's earnings that is deducted for tax purposes
     *
     * @return $this
     */
    public function setTotalEmployeeTaxes($total_employee_taxes)
    {

        $this->container['total_employee_taxes'] = $total_employee_taxes;

        return $this;
    }



    /**
     * Gets total_deductions
     *
     * @return double|null
     */
    public function getTotalDeductions()
    {
        return $this->container['total_deductions'];
    }

    /**
     * Sets total_deductions
     *
     * @param double|null $total_deductions Total amount subtracted from an employee's earnings to reach total pay
     *
     * @return $this
     */
    public function setTotalDeductions($total_deductions)
    {

        $this->container['total_deductions'] = $total_deductions;

        return $this;
    }



    /**
     * Gets total_reimbursements
     *
     * @return double|null
     */
    public function getTotalReimbursements()
    {
        return $this->container['total_reimbursements'];
    }

    /**
     * Sets total_reimbursements
     *
     * @param double|null $total_reimbursements Total reimbursements are nontaxable payments to an employee used to repay out-of-pocket expenses when the person incurs those expenses through employment
     *
     * @return $this
     */
    public function setTotalReimbursements($total_reimbursements)
    {

        $this->container['total_reimbursements'] = $total_reimbursements;

        return $this;
    }



    /**
     * Gets total_court_orders
     *
     * @return double|null
     */
    public function getTotalCourtOrders()
    {
        return $this->container['total_court_orders'];
    }

    /**
     * Sets total_court_orders
     *
     * @param double|null $total_court_orders Total amounts required by law to subtract from the employee's earnings
     *
     * @return $this
     */
    public function setTotalCourtOrders($total_court_orders)
    {

        $this->container['total_court_orders'] = $total_court_orders;

        return $this;
    }



    /**
     * Gets total_benefits
     *
     * @return double|null
     */
    public function getTotalBenefits()
    {
        return $this->container['total_benefits'];
    }

    /**
     * Sets total_benefits
     *
     * @param double|null $total_benefits Benefits (also called fringe benefits, perquisites or perks) are various non-earnings compensations provided to employees in addition to their normal earnings or salaries
     *
     * @return $this
     */
    public function setTotalBenefits($total_benefits)
    {

        $this->container['total_benefits'] = $total_benefits;

        return $this;
    }



    /**
     * Gets bacs_hash
     *
     * @return string|null
     */
    public function getBacsHash()
    {
        return $this->container['bacs_hash'];
    }

    /**
     * Sets bacs_hash
     *
     * @param string|null $bacs_hash BACS Service User Number
     *
     * @return $this
     */
    public function setBacsHash($bacs_hash)
    {

        $this->container['bacs_hash'] = $bacs_hash;

        return $this;
    }



    /**
     * Gets payment_method
     *
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string|null $payment_method The payment method code
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($payment_method) && !in_array($payment_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['payment_method'] = $payment_method;

        return $this;
    }



    /**
     * Gets earnings_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollUk\EarningsLine[]|null
     */
    public function getEarningsLines()
    {
        return $this->container['earnings_lines'];
    }

    /**
     * Sets earnings_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollUk\EarningsLine[]|null $earnings_lines earnings_lines
     *
     * @return $this
     */
    public function setEarningsLines($earnings_lines)
    {

        $this->container['earnings_lines'] = $earnings_lines;

        return $this;
    }



    /**
     * Gets leave_earnings_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollUk\LeaveEarningsLine[]|null
     */
    public function getLeaveEarningsLines()
    {
        return $this->container['leave_earnings_lines'];
    }

    /**
     * Sets leave_earnings_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollUk\LeaveEarningsLine[]|null $leave_earnings_lines leave_earnings_lines
     *
     * @return $this
     */
    public function setLeaveEarningsLines($leave_earnings_lines)
    {

        $this->container['leave_earnings_lines'] = $leave_earnings_lines;

        return $this;
    }



    /**
     * Gets timesheet_earnings_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollUk\TimesheetEarningsLine[]|null
     */
    public function getTimesheetEarningsLines()
    {
        return $this->container['timesheet_earnings_lines'];
    }

    /**
     * Sets timesheet_earnings_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollUk\TimesheetEarningsLine[]|null $timesheet_earnings_lines timesheet_earnings_lines
     *
     * @return $this
     */
    public function setTimesheetEarningsLines($timesheet_earnings_lines)
    {

        $this->container['timesheet_earnings_lines'] = $timesheet_earnings_lines;

        return $this;
    }



    /**
     * Gets deduction_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollUk\DeductionLine[]|null
     */
    public function getDeductionLines()
    {
        return $this->container['deduction_lines'];
    }

    /**
     * Sets deduction_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollUk\DeductionLine[]|null $deduction_lines deduction_lines
     *
     * @return $this
     */
    public function setDeductionLines($deduction_lines)
    {

        $this->container['deduction_lines'] = $deduction_lines;

        return $this;
    }



    /**
     * Gets reimbursement_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollUk\ReimbursementLine[]|null
     */
    public function getReimbursementLines()
    {
        return $this->container['reimbursement_lines'];
    }

    /**
     * Sets reimbursement_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollUk\ReimbursementLine[]|null $reimbursement_lines reimbursement_lines
     *
     * @return $this
     */
    public function setReimbursementLines($reimbursement_lines)
    {

        $this->container['reimbursement_lines'] = $reimbursement_lines;

        return $this;
    }



    /**
     * Gets leave_accrual_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollUk\LeaveAccrualLine[]|null
     */
    public function getLeaveAccrualLines()
    {
        return $this->container['leave_accrual_lines'];
    }

    /**
     * Sets leave_accrual_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollUk\LeaveAccrualLine[]|null $leave_accrual_lines leave_accrual_lines
     *
     * @return $this
     */
    public function setLeaveAccrualLines($leave_accrual_lines)
    {

        $this->container['leave_accrual_lines'] = $leave_accrual_lines;

        return $this;
    }



    /**
     * Gets benefit_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollUk\BenefitLine[]|null
     */
    public function getBenefitLines()
    {
        return $this->container['benefit_lines'];
    }

    /**
     * Sets benefit_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollUk\BenefitLine[]|null $benefit_lines benefit_lines
     *
     * @return $this
     */
    public function setBenefitLines($benefit_lines)
    {

        $this->container['benefit_lines'] = $benefit_lines;

        return $this;
    }



    /**
     * Gets payment_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollUk\PaymentLine[]|null
     */
    public function getPaymentLines()
    {
        return $this->container['payment_lines'];
    }

    /**
     * Sets payment_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollUk\PaymentLine[]|null $payment_lines payment_lines
     *
     * @return $this
     */
    public function setPaymentLines($payment_lines)
    {

        $this->container['payment_lines'] = $payment_lines;

        return $this;
    }



    /**
     * Gets employee_tax_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollUk\TaxLine[]|null
     */
    public function getEmployeeTaxLines()
    {
        return $this->container['employee_tax_lines'];
    }

    /**
     * Sets employee_tax_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollUk\TaxLine[]|null $employee_tax_lines employee_tax_lines
     *
     * @return $this
     */
    public function setEmployeeTaxLines($employee_tax_lines)
    {

        $this->container['employee_tax_lines'] = $employee_tax_lines;

        return $this;
    }



    /**
     * Gets employer_tax_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollUk\TaxLine[]|null
     */
    public function getEmployerTaxLines()
    {
        return $this->container['employer_tax_lines'];
    }

    /**
     * Sets employer_tax_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollUk\TaxLine[]|null $employer_tax_lines employer_tax_lines
     *
     * @return $this
     */
    public function setEmployerTaxLines($employer_tax_lines)
    {

        $this->container['employer_tax_lines'] = $employer_tax_lines;

        return $this;
    }



    /**
     * Gets court_order_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollUk\CourtOrderLine[]|null
     */
    public function getCourtOrderLines()
    {
        return $this->container['court_order_lines'];
    }

    /**
     * Sets court_order_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollUk\CourtOrderLine[]|null $court_order_lines court_order_lines
     *
     * @return $this
     */
    public function setCourtOrderLines($court_order_lines)
    {

        $this->container['court_order_lines'] = $court_order_lines;

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
            PayrollUkObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


