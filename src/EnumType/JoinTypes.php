<?php

namespace EnumType;

/**
 * This class stands for JoinTypes EnumType
 * @subpackage Enumerations
 */
class JoinTypes
{
    /**
     * Constant for value 'AND'
     * @return string 'AND'
     */
    const VALUE_AND = 'AND';
    /**
     * Constant for value 'ANDNOT'
     * @return string 'ANDNOT'
     */
    const VALUE_ANDNOT = 'ANDNOT';
    /**
     * Constant for value 'OR'
     * @return string 'OR'
     */
    const VALUE_OR = 'OR';
    /**
     * Constant for value 'ORNOT'
     * @return string 'ORNOT'
     */
    const VALUE_ORNOT = 'ORNOT';
    /**
     * Constant for value 'END'
     * @return string 'END'
     */
    const VALUE_END = 'END';
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
     * @uses self::VALUE_AND
     * @uses self::VALUE_ANDNOT
     * @uses self::VALUE_OR
     * @uses self::VALUE_ORNOT
     * @uses self::VALUE_END
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AND,
            self::VALUE_ANDNOT,
            self::VALUE_OR,
            self::VALUE_ORNOT,
            self::VALUE_END,
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
