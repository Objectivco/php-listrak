<?php

namespace EnumType;

/**
 * This class stands for ConversationStatus EnumType
 * @subpackage Enumerations
 */
class ConversationStatus
{
    /**
     * Constant for value 'Unpublished'
     * @return string 'Unpublished'
     */
    const VALUE_UNPUBLISHED = 'Unpublished';
    /**
     * Constant for value 'Publishing'
     * @return string 'Publishing'
     */
    const VALUE_PUBLISHING = 'Publishing';
    /**
     * Constant for value 'PublishPending'
     * @return string 'PublishPending'
     */
    const VALUE_PUBLISH_PENDING = 'PublishPending';
    /**
     * Constant for value 'Published'
     * @return string 'Published'
     */
    const VALUE_PUBLISHED = 'Published';
    /**
     * Constant for value 'Republishing'
     * @return string 'Republishing'
     */
    const VALUE_REPUBLISHING = 'Republishing';
    /**
     * Constant for value 'RepublishPending'
     * @return string 'RepublishPending'
     */
    const VALUE_REPUBLISH_PENDING = 'RepublishPending';
    /**
     * Constant for value 'Closed'
     * @return string 'Closed'
     */
    const VALUE_CLOSED = 'Closed';
    /**
     * Constant for value 'TerminationPending'
     * @return string 'TerminationPending'
     */
    const VALUE_TERMINATION_PENDING = 'TerminationPending';
    /**
     * Constant for value 'Terminated'
     * @return string 'Terminated'
     */
    const VALUE_TERMINATED = 'Terminated';
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
     * @uses self::VALUE_UNPUBLISHED
     * @uses self::VALUE_PUBLISHING
     * @uses self::VALUE_PUBLISH_PENDING
     * @uses self::VALUE_PUBLISHED
     * @uses self::VALUE_REPUBLISHING
     * @uses self::VALUE_REPUBLISH_PENDING
     * @uses self::VALUE_CLOSED
     * @uses self::VALUE_TERMINATION_PENDING
     * @uses self::VALUE_TERMINATED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNPUBLISHED,
            self::VALUE_PUBLISHING,
            self::VALUE_PUBLISH_PENDING,
            self::VALUE_PUBLISHED,
            self::VALUE_REPUBLISHING,
            self::VALUE_REPUBLISH_PENDING,
            self::VALUE_CLOSED,
            self::VALUE_TERMINATION_PENDING,
            self::VALUE_TERMINATED,
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
