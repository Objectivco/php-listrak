<?php

namespace EnumType;

/**
 * This class stands for ProfileFitlerCompareTypes EnumType
 * @subpackage Enumerations
 */
class ProfileFitlerCompareTypes
{
    /**
     * Constant for value 'EQUALS'
     * @return string 'EQUALS'
     */
    const VALUE_EQUALS = 'EQUALS';
    /**
     * Constant for value 'NOTEQUALS'
     * @return string 'NOTEQUALS'
     */
    const VALUE_NOTEQUALS = 'NOTEQUALS';
    /**
     * Constant for value 'CONTAINS'
     * @return string 'CONTAINS'
     */
    const VALUE_CONTAINS = 'CONTAINS';
    /**
     * Constant for value 'NOTCONTAINS'
     * @return string 'NOTCONTAINS'
     */
    const VALUE_NOTCONTAINS = 'NOTCONTAINS';
    /**
     * Constant for value 'CHECKED'
     * @return string 'CHECKED'
     */
    const VALUE_CHECKED = 'CHECKED';
    /**
     * Constant for value 'NOTCHECKED'
     * @return string 'NOTCHECKED'
     */
    const VALUE_NOTCHECKED = 'NOTCHECKED';
    /**
     * Constant for value 'RADIOON'
     * @return string 'RADIOON'
     */
    const VALUE_RADIOON = 'RADIOON';
    /**
     * Constant for value 'RADIOOFF'
     * @return string 'RADIOOFF'
     */
    const VALUE_RADIOOFF = 'RADIOOFF';
    /**
     * Constant for value 'ABOVE'
     * @return string 'ABOVE'
     */
    const VALUE_ABOVE = 'ABOVE';
    /**
     * Constant for value 'ABOVEOREQUAL'
     * @return string 'ABOVEOREQUAL'
     */
    const VALUE_ABOVEOREQUAL = 'ABOVEOREQUAL';
    /**
     * Constant for value 'BELOW'
     * @return string 'BELOW'
     */
    const VALUE_BELOW = 'BELOW';
    /**
     * Constant for value 'BELOWOREQUAL'
     * @return string 'BELOWOREQUAL'
     */
    const VALUE_BELOWOREQUAL = 'BELOWOREQUAL';
    /**
     * Constant for value 'INCOMMALIST'
     * @return string 'INCOMMALIST'
     */
    const VALUE_INCOMMALIST = 'INCOMMALIST';
    /**
     * Constant for value 'NOTINCOMMALIST'
     * @return string 'NOTINCOMMALIST'
     */
    const VALUE_NOTINCOMMALIST = 'NOTINCOMMALIST';
    /**
     * Constant for value 'ISEMPTY'
     * @return string 'ISEMPTY'
     */
    const VALUE_ISEMPTY = 'ISEMPTY';
    /**
     * Constant for value 'ISNOTEMPTY'
     * @return string 'ISNOTEMPTY'
     */
    const VALUE_ISNOTEMPTY = 'ISNOTEMPTY';
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
     * @uses self::VALUE_EQUALS
     * @uses self::VALUE_NOTEQUALS
     * @uses self::VALUE_CONTAINS
     * @uses self::VALUE_NOTCONTAINS
     * @uses self::VALUE_CHECKED
     * @uses self::VALUE_NOTCHECKED
     * @uses self::VALUE_RADIOON
     * @uses self::VALUE_RADIOOFF
     * @uses self::VALUE_ABOVE
     * @uses self::VALUE_ABOVEOREQUAL
     * @uses self::VALUE_BELOW
     * @uses self::VALUE_BELOWOREQUAL
     * @uses self::VALUE_INCOMMALIST
     * @uses self::VALUE_NOTINCOMMALIST
     * @uses self::VALUE_ISEMPTY
     * @uses self::VALUE_ISNOTEMPTY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EQUALS,
            self::VALUE_NOTEQUALS,
            self::VALUE_CONTAINS,
            self::VALUE_NOTCONTAINS,
            self::VALUE_CHECKED,
            self::VALUE_NOTCHECKED,
            self::VALUE_RADIOON,
            self::VALUE_RADIOOFF,
            self::VALUE_ABOVE,
            self::VALUE_ABOVEOREQUAL,
            self::VALUE_BELOW,
            self::VALUE_BELOWOREQUAL,
            self::VALUE_INCOMMALIST,
            self::VALUE_NOTINCOMMALIST,
            self::VALUE_ISEMPTY,
            self::VALUE_ISNOTEMPTY,
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
