<?php

namespace EnumType;

/**
 * This class stands for ImportProfileTypeEnum EnumType
 * @subpackage Enumerations
 */
class ImportProfileTypeEnum
{
    /**
     * Constant for value 'NotDefined'
     * @return string 'NotDefined'
     */
    const VALUE_NOT_DEFINED = 'NotDefined';
    /**
     * Constant for value 'Update'
     * @return string 'Update'
     */
    const VALUE_UPDATE = 'Update';
    /**
     * Constant for value 'Append'
     * @return string 'Append'
     */
    const VALUE_APPEND = 'Append';
    /**
     * Constant for value 'Overwrite'
     * @return string 'Overwrite'
     */
    const VALUE_OVERWRITE = 'Overwrite';
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
     * @uses self::VALUE_NOT_DEFINED
     * @uses self::VALUE_UPDATE
     * @uses self::VALUE_APPEND
     * @uses self::VALUE_OVERWRITE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_DEFINED,
            self::VALUE_UPDATE,
            self::VALUE_APPEND,
            self::VALUE_OVERWRITE,
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
