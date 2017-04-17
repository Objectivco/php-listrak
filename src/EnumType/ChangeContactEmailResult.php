<?php

namespace EnumType;

/**
 * This class stands for ChangeContactEmailResult EnumType
 * @subpackage Enumerations
 */
class ChangeContactEmailResult
{
    /**
     * Constant for value 'SuccessContactEmailAddressChanged'
     * @return string 'SuccessContactEmailAddressChanged'
     */
    const VALUE_SUCCESS_CONTACT_EMAIL_ADDRESS_CHANGED = 'SuccessContactEmailAddressChanged';
    /**
     * Constant for value 'FailedNewEmailAddressIsBanned'
     * @return string 'FailedNewEmailAddressIsBanned'
     */
    const VALUE_FAILED_NEW_EMAIL_ADDRESS_IS_BANNED = 'FailedNewEmailAddressIsBanned';
    /**
     * Constant for value 'FailedNewEmailAddressIsSuppressed'
     * @return string 'FailedNewEmailAddressIsSuppressed'
     */
    const VALUE_FAILED_NEW_EMAIL_ADDRESS_IS_SUPPRESSED = 'FailedNewEmailAddressIsSuppressed';
    /**
     * Constant for value 'FailedNewEmailAddressIsAlreadySubscribed'
     * @return string 'FailedNewEmailAddressIsAlreadySubscribed'
     */
    const VALUE_FAILED_NEW_EMAIL_ADDRESS_IS_ALREADY_SUBSCRIBED = 'FailedNewEmailAddressIsAlreadySubscribed';
    /**
     * Constant for value 'FailedNewEmailAddressIsUnSubscribed'
     * @return string 'FailedNewEmailAddressIsUnSubscribed'
     */
    const VALUE_FAILED_NEW_EMAIL_ADDRESS_IS_UN_SUBSCRIBED = 'FailedNewEmailAddressIsUnSubscribed';
    /**
     * Constant for value 'FailedNewEmailAddressIsPendingConfirmation'
     * @return string 'FailedNewEmailAddressIsPendingConfirmation'
     */
    const VALUE_FAILED_NEW_EMAIL_ADDRESS_IS_PENDING_CONFIRMATION = 'FailedNewEmailAddressIsPendingConfirmation';
    /**
     * Constant for value 'FailedContactEmailAddressNotFound'
     * @return string 'FailedContactEmailAddressNotFound'
     */
    const VALUE_FAILED_CONTACT_EMAIL_ADDRESS_NOT_FOUND = 'FailedContactEmailAddressNotFound';
    /**
     * Constant for value 'FailedIdenticalEmailAddress'
     * @return string 'FailedIdenticalEmailAddress'
     */
    const VALUE_FAILED_IDENTICAL_EMAIL_ADDRESS = 'FailedIdenticalEmailAddress';
    /**
     * Constant for value 'FailedInvalidNewEmailAddress'
     * @return string 'FailedInvalidNewEmailAddress'
     */
    const VALUE_FAILED_INVALID_NEW_EMAIL_ADDRESS = 'FailedInvalidNewEmailAddress';
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
     * @uses self::VALUE_SUCCESS_CONTACT_EMAIL_ADDRESS_CHANGED
     * @uses self::VALUE_FAILED_NEW_EMAIL_ADDRESS_IS_BANNED
     * @uses self::VALUE_FAILED_NEW_EMAIL_ADDRESS_IS_SUPPRESSED
     * @uses self::VALUE_FAILED_NEW_EMAIL_ADDRESS_IS_ALREADY_SUBSCRIBED
     * @uses self::VALUE_FAILED_NEW_EMAIL_ADDRESS_IS_UN_SUBSCRIBED
     * @uses self::VALUE_FAILED_NEW_EMAIL_ADDRESS_IS_PENDING_CONFIRMATION
     * @uses self::VALUE_FAILED_CONTACT_EMAIL_ADDRESS_NOT_FOUND
     * @uses self::VALUE_FAILED_IDENTICAL_EMAIL_ADDRESS
     * @uses self::VALUE_FAILED_INVALID_NEW_EMAIL_ADDRESS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SUCCESS_CONTACT_EMAIL_ADDRESS_CHANGED,
            self::VALUE_FAILED_NEW_EMAIL_ADDRESS_IS_BANNED,
            self::VALUE_FAILED_NEW_EMAIL_ADDRESS_IS_SUPPRESSED,
            self::VALUE_FAILED_NEW_EMAIL_ADDRESS_IS_ALREADY_SUBSCRIBED,
            self::VALUE_FAILED_NEW_EMAIL_ADDRESS_IS_UN_SUBSCRIBED,
            self::VALUE_FAILED_NEW_EMAIL_ADDRESS_IS_PENDING_CONFIRMATION,
            self::VALUE_FAILED_CONTACT_EMAIL_ADDRESS_NOT_FOUND,
            self::VALUE_FAILED_IDENTICAL_EMAIL_ADDRESS,
            self::VALUE_FAILED_INVALID_NEW_EMAIL_ADDRESS,
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
