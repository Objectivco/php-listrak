<?php

namespace EnumType;

/**
 * This class stands for SendTransactionalMessageToContactResult EnumType
 * @subpackage Enumerations
 */
class SendTransactionalMessageToContactResult
{
    /**
     * Constant for value 'Success'
     * @return string 'Success'
     */
    const VALUE_SUCCESS = 'Success';
    /**
     * Constant for value 'FailedInvalidEmailAddress'
     * @return string 'FailedInvalidEmailAddress'
     */
    const VALUE_FAILED_INVALID_EMAIL_ADDRESS = 'FailedInvalidEmailAddress';
    /**
     * Constant for value 'FailedInvalidProfileData: SystemLink'
     * @return string 'FailedInvalidProfileData: SystemLink'
     */
    const VALUE_FAILED_INVALID_PROFILE_DATA_SYSTEM_LINK = 'FailedInvalidProfileData: SystemLink';
    /**
     * Constant for value 'FailedInvalidProfileData: ExternalContent'
     * @return string 'FailedInvalidProfileData: ExternalContent'
     */
    const VALUE_FAILED_INVALID_PROFILE_DATA_EXTERNAL_CONTENT = 'FailedInvalidProfileData: ExternalContent';
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
     * @uses self::VALUE_SUCCESS
     * @uses self::VALUE_FAILED_INVALID_EMAIL_ADDRESS
     * @uses self::VALUE_FAILED_INVALID_PROFILE_DATA_SYSTEM_LINK
     * @uses self::VALUE_FAILED_INVALID_PROFILE_DATA_EXTERNAL_CONTENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SUCCESS,
            self::VALUE_FAILED_INVALID_EMAIL_ADDRESS,
            self::VALUE_FAILED_INVALID_PROFILE_DATA_SYSTEM_LINK,
            self::VALUE_FAILED_INVALID_PROFILE_DATA_EXTERNAL_CONTENT,
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
