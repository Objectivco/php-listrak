<?php

namespace EnumType;

/**
 * This class stands for SubscribeFormPassThroughResult EnumType
 * @subpackage Enumerations
 */
class SubscribeFormPassThroughResult
{
    /**
     * Constant for value 'ContactSubscribed'
     * @return string 'ContactSubscribed'
     */
    const VALUE_CONTACT_SUBSCRIBED = 'ContactSubscribed';
    /**
     * Constant for value 'ContactCurrentlyBanned'
     * @return string 'ContactCurrentlyBanned'
     */
    const VALUE_CONTACT_CURRENTLY_BANNED = 'ContactCurrentlyBanned';
    /**
     * Constant for value 'ContactCurrentlySuppressed'
     * @return string 'ContactCurrentlySuppressed'
     */
    const VALUE_CONTACT_CURRENTLY_SUPPRESSED = 'ContactCurrentlySuppressed';
    /**
     * Constant for value 'ContactCurrentlySubscribed'
     * @return string 'ContactCurrentlySubscribed'
     */
    const VALUE_CONTACT_CURRENTLY_SUBSCRIBED = 'ContactCurrentlySubscribed';
    /**
     * Constant for value 'ContactCurrentlyUnsubscribed'
     * @return string 'ContactCurrentlyUnsubscribed'
     */
    const VALUE_CONTACT_CURRENTLY_UNSUBSCRIBED = 'ContactCurrentlyUnsubscribed';
    /**
     * Constant for value 'ContactCurrentlyPendingConfirmation'
     * @return string 'ContactCurrentlyPendingConfirmation'
     */
    const VALUE_CONTACT_CURRENTLY_PENDING_CONFIRMATION = 'ContactCurrentlyPendingConfirmation';
    /**
     * Constant for value 'ContactConfirmationRequested'
     * @return string 'ContactConfirmationRequested'
     */
    const VALUE_CONTACT_CONFIRMATION_REQUESTED = 'ContactConfirmationRequested';
    /**
     * Constant for value 'InvalidEmailAddress'
     * @return string 'InvalidEmailAddress'
     */
    const VALUE_INVALID_EMAIL_ADDRESS = 'InvalidEmailAddress';
    /**
     * Constant for value 'ContactPreviouslySubscribedProfileUpdated'
     * @return string 'ContactPreviouslySubscribedProfileUpdated'
     */
    const VALUE_CONTACT_PREVIOUSLY_SUBSCRIBED_PROFILE_UPDATED = 'ContactPreviouslySubscribedProfileUpdated';
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
     * @uses self::VALUE_CONTACT_SUBSCRIBED
     * @uses self::VALUE_CONTACT_CURRENTLY_BANNED
     * @uses self::VALUE_CONTACT_CURRENTLY_SUPPRESSED
     * @uses self::VALUE_CONTACT_CURRENTLY_SUBSCRIBED
     * @uses self::VALUE_CONTACT_CURRENTLY_UNSUBSCRIBED
     * @uses self::VALUE_CONTACT_CURRENTLY_PENDING_CONFIRMATION
     * @uses self::VALUE_CONTACT_CONFIRMATION_REQUESTED
     * @uses self::VALUE_INVALID_EMAIL_ADDRESS
     * @uses self::VALUE_CONTACT_PREVIOUSLY_SUBSCRIBED_PROFILE_UPDATED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CONTACT_SUBSCRIBED,
            self::VALUE_CONTACT_CURRENTLY_BANNED,
            self::VALUE_CONTACT_CURRENTLY_SUPPRESSED,
            self::VALUE_CONTACT_CURRENTLY_SUBSCRIBED,
            self::VALUE_CONTACT_CURRENTLY_UNSUBSCRIBED,
            self::VALUE_CONTACT_CURRENTLY_PENDING_CONFIRMATION,
            self::VALUE_CONTACT_CONFIRMATION_REQUESTED,
            self::VALUE_INVALID_EMAIL_ADDRESS,
            self::VALUE_CONTACT_PREVIOUSLY_SUBSCRIBED_PROFILE_UPDATED,
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
