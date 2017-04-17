<?php

namespace EnumType;

/**
 * This class stands for SubscribeContactResult EnumType
 * @subpackage Enumerations
 */
class SubscribeContactResult
{
    /**
     * Constant for value 'SuccessContactSubscribed'
     * @return string 'SuccessContactSubscribed'
     */
    const VALUE_SUCCESS_CONTACT_SUBSCRIBED = 'SuccessContactSubscribed';
    /**
     * Constant for value 'FailedContactBanned'
     * @return string 'FailedContactBanned'
     */
    const VALUE_FAILED_CONTACT_BANNED = 'FailedContactBanned';
    /**
     * Constant for value 'FailedContactSuppressed'
     * @return string 'FailedContactSuppressed'
     */
    const VALUE_FAILED_CONTACT_SUPPRESSED = 'FailedContactSuppressed';
    /**
     * Constant for value 'FailedContactAlreadySubscribed'
     * @return string 'FailedContactAlreadySubscribed'
     */
    const VALUE_FAILED_CONTACT_ALREADY_SUBSCRIBED = 'FailedContactAlreadySubscribed';
    /**
     * Constant for value 'FailedContactUnSubscribed'
     * @return string 'FailedContactUnSubscribed'
     */
    const VALUE_FAILED_CONTACT_UN_SUBSCRIBED = 'FailedContactUnSubscribed';
    /**
     * Constant for value 'FailedContactPendingConfirmation'
     * @return string 'FailedContactPendingConfirmation'
     */
    const VALUE_FAILED_CONTACT_PENDING_CONFIRMATION = 'FailedContactPendingConfirmation';
    /**
     * Constant for value 'FailedContactRequiresConfirmation'
     * @return string 'FailedContactRequiresConfirmation'
     */
    const VALUE_FAILED_CONTACT_REQUIRES_CONFIRMATION = 'FailedContactRequiresConfirmation';
    /**
     * Constant for value 'FailedContactInvalidEmailAddress'
     * @return string 'FailedContactInvalidEmailAddress'
     */
    const VALUE_FAILED_CONTACT_INVALID_EMAIL_ADDRESS = 'FailedContactInvalidEmailAddress';
    /**
     * Constant for value 'ContactAlreadySubscribedProfileUpdated'
     * @return string 'ContactAlreadySubscribedProfileUpdated'
     */
    const VALUE_CONTACT_ALREADY_SUBSCRIBED_PROFILE_UPDATED = 'ContactAlreadySubscribedProfileUpdated';
    /**
     * Constant for value 'FailedContactNotSubscribedProfileNotUpdated'
     * @return string 'FailedContactNotSubscribedProfileNotUpdated'
     */
    const VALUE_FAILED_CONTACT_NOT_SUBSCRIBED_PROFILE_NOT_UPDATED = 'FailedContactNotSubscribedProfileNotUpdated';
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
     * @uses self::VALUE_SUCCESS_CONTACT_SUBSCRIBED
     * @uses self::VALUE_FAILED_CONTACT_BANNED
     * @uses self::VALUE_FAILED_CONTACT_SUPPRESSED
     * @uses self::VALUE_FAILED_CONTACT_ALREADY_SUBSCRIBED
     * @uses self::VALUE_FAILED_CONTACT_UN_SUBSCRIBED
     * @uses self::VALUE_FAILED_CONTACT_PENDING_CONFIRMATION
     * @uses self::VALUE_FAILED_CONTACT_REQUIRES_CONFIRMATION
     * @uses self::VALUE_FAILED_CONTACT_INVALID_EMAIL_ADDRESS
     * @uses self::VALUE_CONTACT_ALREADY_SUBSCRIBED_PROFILE_UPDATED
     * @uses self::VALUE_FAILED_CONTACT_NOT_SUBSCRIBED_PROFILE_NOT_UPDATED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SUCCESS_CONTACT_SUBSCRIBED,
            self::VALUE_FAILED_CONTACT_BANNED,
            self::VALUE_FAILED_CONTACT_SUPPRESSED,
            self::VALUE_FAILED_CONTACT_ALREADY_SUBSCRIBED,
            self::VALUE_FAILED_CONTACT_UN_SUBSCRIBED,
            self::VALUE_FAILED_CONTACT_PENDING_CONFIRMATION,
            self::VALUE_FAILED_CONTACT_REQUIRES_CONFIRMATION,
            self::VALUE_FAILED_CONTACT_INVALID_EMAIL_ADDRESS,
            self::VALUE_CONTACT_ALREADY_SUBSCRIBED_PROFILE_UPDATED,
            self::VALUE_FAILED_CONTACT_NOT_SUBSCRIBED_PROFILE_NOT_UPDATED,
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
