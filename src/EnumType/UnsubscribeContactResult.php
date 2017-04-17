<?php

namespace EnumType;

/**
 * This class stands for UnsubscribeContactResult EnumType
 * @subpackage Enumerations
 */
class UnsubscribeContactResult
{
    /**
     * Constant for value 'SuccessContactUnSubscribed'
     * @return string 'SuccessContactUnSubscribed'
     */
    const VALUE_SUCCESS_CONTACT_UN_SUBSCRIBED = 'SuccessContactUnSubscribed';
    /**
     * Constant for value 'ContactNotSubscribed'
     * @return string 'ContactNotSubscribed'
     */
    const VALUE_CONTACT_NOT_SUBSCRIBED = 'ContactNotSubscribed';
    /**
     * Constant for value 'ContactAlreadyUnSubscribed'
     * @return string 'ContactAlreadyUnSubscribed'
     */
    const VALUE_CONTACT_ALREADY_UN_SUBSCRIBED = 'ContactAlreadyUnSubscribed';
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
     * @uses self::VALUE_SUCCESS_CONTACT_UN_SUBSCRIBED
     * @uses self::VALUE_CONTACT_NOT_SUBSCRIBED
     * @uses self::VALUE_CONTACT_ALREADY_UN_SUBSCRIBED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SUCCESS_CONTACT_UN_SUBSCRIBED,
            self::VALUE_CONTACT_NOT_SUBSCRIBED,
            self::VALUE_CONTACT_ALREADY_UN_SUBSCRIBED,
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
