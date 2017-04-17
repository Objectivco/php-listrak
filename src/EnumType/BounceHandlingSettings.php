<?php

namespace EnumType;

/**
 * This class stands for BounceHandlingSettings EnumType
 * @subpackage Enumerations
 */
class BounceHandlingSettings
{
    /**
     * Constant for value 'DoNotHandle'
     * @return string 'DoNotHandle'
     */
    const VALUE_DO_NOT_HANDLE = 'DoNotHandle';
    /**
     * Constant for value 'StandardHandling'
     * @return string 'StandardHandling'
     */
    const VALUE_STANDARD_HANDLING = 'StandardHandling';
    /**
     * Constant for value 'AggressiveHandling'
     * @return string 'AggressiveHandling'
     */
    const VALUE_AGGRESSIVE_HANDLING = 'AggressiveHandling';
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
     * @uses self::VALUE_DO_NOT_HANDLE
     * @uses self::VALUE_STANDARD_HANDLING
     * @uses self::VALUE_AGGRESSIVE_HANDLING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DO_NOT_HANDLE,
            self::VALUE_STANDARD_HANDLING,
            self::VALUE_AGGRESSIVE_HANDLING,
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
