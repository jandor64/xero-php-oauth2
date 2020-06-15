<?php
/**
 * AllowanceType
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
use \XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * AllowanceType Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AllowanceType
{
    /**
     * Possible values of this enum
     */
    const CAR = 'CAR';
    const TRANSPORT = 'TRANSPORT';
    const TRAVEL = 'TRAVEL';
    const LAUNDRY = 'LAUNDRY';
    const MEALS = 'MEALS';
    const JOBKEEPER = 'JOBKEEPER';
    const OTHER = 'OTHER';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CAR,
            self::TRANSPORT,
            self::TRAVEL,
            self::LAUNDRY,
            self::MEALS,
            self::JOBKEEPER,
            self::OTHER,
        ];
    }
}


