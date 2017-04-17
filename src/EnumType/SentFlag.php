<?php

namespace EnumType;

/**
 * This class stands for SentFlag EnumType
 * @subpackage Enumerations
 */
class SentFlag
{
    /**
     * Constant for value 'ToBeSent'
     * @return string 'ToBeSent'
     */
    const VALUE_TO_BE_SENT = 'ToBeSent';
    /**
     * Constant for value 'Sending'
     * @return string 'Sending'
     */
    const VALUE_SENDING = 'Sending';
    /**
     * Constant for value 'Sent'
     * @return string 'Sent'
     */
    const VALUE_SENT = 'Sent';
    /**
     * Constant for value 'RecurringSend'
     * @return string 'RecurringSend'
     */
    const VALUE_RECURRING_SEND = 'RecurringSend';
    /**
     * Constant for value 'NotReady'
     * @return string 'NotReady'
     */
    const VALUE_NOT_READY = 'NotReady';
    /**
     * Constant for value 'ErrorSetToRetry'
     * @return string 'ErrorSetToRetry'
     */
    const VALUE_ERROR_SET_TO_RETRY = 'ErrorSetToRetry';
    /**
     * Constant for value 'PendingApproval'
     * @return string 'PendingApproval'
     */
    const VALUE_PENDING_APPROVAL = 'PendingApproval';
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
     * @uses self::VALUE_TO_BE_SENT
     * @uses self::VALUE_SENDING
     * @uses self::VALUE_SENT
     * @uses self::VALUE_RECURRING_SEND
     * @uses self::VALUE_NOT_READY
     * @uses self::VALUE_ERROR_SET_TO_RETRY
     * @uses self::VALUE_PENDING_APPROVAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_TO_BE_SENT,
            self::VALUE_SENDING,
            self::VALUE_SENT,
            self::VALUE_RECURRING_SEND,
            self::VALUE_NOT_READY,
            self::VALUE_ERROR_SET_TO_RETRY,
            self::VALUE_PENDING_APPROVAL,
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
