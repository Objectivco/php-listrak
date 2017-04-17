<?php

namespace EnumType;

/**
 * This class stands for ImportTypeEnum EnumType
 * @subpackage Enumerations
 */
class ImportTypeEnum
{
    /**
     * Constant for value 'AddSubscribers'
     * @return string 'AddSubscribers'
     */
    const VALUE_ADD_SUBSCRIBERS = 'AddSubscribers';
    /**
     * Constant for value 'AddSubscribersAndProfileData'
     * @return string 'AddSubscribersAndProfileData'
     */
    const VALUE_ADD_SUBSCRIBERS_AND_PROFILE_DATA = 'AddSubscribersAndProfileData';
    /**
     * Constant for value 'RemoveSubscribers'
     * @return string 'RemoveSubscribers'
     */
    const VALUE_REMOVE_SUBSCRIBERS = 'RemoveSubscribers';
    /**
     * Constant for value 'UpdateSubscribers'
     * @return string 'UpdateSubscribers'
     */
    const VALUE_UPDATE_SUBSCRIBERS = 'UpdateSubscribers';
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
     * @uses self::VALUE_ADD_SUBSCRIBERS
     * @uses self::VALUE_ADD_SUBSCRIBERS_AND_PROFILE_DATA
     * @uses self::VALUE_REMOVE_SUBSCRIBERS
     * @uses self::VALUE_UPDATE_SUBSCRIBERS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADD_SUBSCRIBERS,
            self::VALUE_ADD_SUBSCRIBERS_AND_PROFILE_DATA,
            self::VALUE_REMOVE_SUBSCRIBERS,
            self::VALUE_UPDATE_SUBSCRIBERS,
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
