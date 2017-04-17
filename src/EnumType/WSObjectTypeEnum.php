<?php

namespace EnumType;

/**
 * This class stands for WSObjectTypeEnum EnumType
 * @subpackage Enumerations
 */
class WSObjectTypeEnum
{
    /**
     * Constant for value 'Message'
     * @return string 'Message'
     */
    const VALUE_MESSAGE = 'Message';
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
     * @uses self::VALUE_MESSAGE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MESSAGE,
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
