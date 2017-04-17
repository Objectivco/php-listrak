<?php

namespace EnumType;

/**
 * This class stands for MessageDeliveryType EnumType
 * @subpackage Enumerations
 */
class MessageDeliveryType
{
    /**
     * Constant for value 'List'
     * @return string 'List'
     */
    const VALUE_LIST = 'List';
    /**
     * Constant for value 'Test'
     * @return string 'Test'
     */
    const VALUE_TEST = 'Test';
    /**
     * Constant for value 'Review'
     * @return string 'Review'
     */
    const VALUE_REVIEW = 'Review';
    /**
     * Constant for value 'Forward'
     * @return string 'Forward'
     */
    const VALUE_FORWARD = 'Forward';
    /**
     * Constant for value 'Automated'
     * @return string 'Automated'
     */
    const VALUE_AUTOMATED = 'Automated';
    /**
     * Constant for value 'SoftBounce'
     * @return string 'SoftBounce'
     */
    const VALUE_SOFT_BOUNCE = 'SoftBounce';
    /**
     * Constant for value 'Triggered'
     * @return string 'Triggered'
     */
    const VALUE_TRIGGERED = 'Triggered';
    /**
     * Constant for value 'Preview'
     * @return string 'Preview'
     */
    const VALUE_PREVIEW = 'Preview';
    /**
     * Constant for value 'Browser'
     * @return string 'Browser'
     */
    const VALUE_BROWSER = 'Browser';
    /**
     * Constant for value 'SWYN'
     * @return string 'SWYN'
     */
    const VALUE_SWYN = 'SWYN';
    /**
     * Constant for value 'Transactional'
     * @return string 'Transactional'
     */
    const VALUE_TRANSACTIONAL = 'Transactional';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_LIST
     * @uses self::VALUE_TEST
     * @uses self::VALUE_REVIEW
     * @uses self::VALUE_FORWARD
     * @uses self::VALUE_AUTOMATED
     * @uses self::VALUE_SOFT_BOUNCE
     * @uses self::VALUE_TRIGGERED
     * @uses self::VALUE_PREVIEW
     * @uses self::VALUE_BROWSER
     * @uses self::VALUE_SWYN
     * @uses self::VALUE_TRANSACTIONAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LIST,
            self::VALUE_TEST,
            self::VALUE_REVIEW,
            self::VALUE_FORWARD,
            self::VALUE_AUTOMATED,
            self::VALUE_SOFT_BOUNCE,
            self::VALUE_TRIGGERED,
            self::VALUE_PREVIEW,
            self::VALUE_BROWSER,
            self::VALUE_SWYN,
            self::VALUE_TRANSACTIONAL,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
