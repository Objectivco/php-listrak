<?php

namespace EnumType;

/**
 * This class stands for WSImportResultEnum EnumType
 * @subpackage Enumerations
 */
class WSImportResultEnum
{
    /**
     * Constant for value 'Invalid'
     * @return string 'Invalid'
     */
    const VALUE_INVALID = 'Invalid';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'Subscribed'
     * @return string 'Subscribed'
     */
    const VALUE_SUBSCRIBED = 'Subscribed';
    /**
     * Constant for value 'UnSubscribed'
     * @return string 'UnSubscribed'
     */
    const VALUE_UN_SUBSCRIBED = 'UnSubscribed';
    /**
     * Constant for value 'AlreadySubscribed'
     * @return string 'AlreadySubscribed'
     */
    const VALUE_ALREADY_SUBSCRIBED = 'AlreadySubscribed';
    /**
     * Constant for value 'AlreadyUnSubscribed'
     * @return string 'AlreadyUnSubscribed'
     */
    const VALUE_ALREADY_UN_SUBSCRIBED = 'AlreadyUnSubscribed';
    /**
     * Constant for value 'Suppressed'
     * @return string 'Suppressed'
     */
    const VALUE_SUPPRESSED = 'Suppressed';
    /**
     * Constant for value 'Banned'
     * @return string 'Banned'
     */
    const VALUE_BANNED = 'Banned';
    /**
     * Constant for value 'Skipped'
     * @return string 'Skipped'
     */
    const VALUE_SKIPPED = 'Skipped';
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
     * @uses self::VALUE_INVALID
     * @uses self::VALUE_ALL
     * @uses self::VALUE_SUBSCRIBED
     * @uses self::VALUE_UN_SUBSCRIBED
     * @uses self::VALUE_ALREADY_SUBSCRIBED
     * @uses self::VALUE_ALREADY_UN_SUBSCRIBED
     * @uses self::VALUE_SUPPRESSED
     * @uses self::VALUE_BANNED
     * @uses self::VALUE_SKIPPED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INVALID,
            self::VALUE_ALL,
            self::VALUE_SUBSCRIBED,
            self::VALUE_UN_SUBSCRIBED,
            self::VALUE_ALREADY_SUBSCRIBED,
            self::VALUE_ALREADY_UN_SUBSCRIBED,
            self::VALUE_SUPPRESSED,
            self::VALUE_BANNED,
            self::VALUE_SKIPPED,
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
