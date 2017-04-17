<?php

namespace EnumType;

/**
 * This class stands for DataTypeSettings EnumType
 * @subpackage Enumerations
 */
class DataTypeSettings
{
    /**
     * Constant for value 'RadioButton'
     * @return string 'RadioButton'
     */
    const VALUE_RADIO_BUTTON = 'RadioButton';
    /**
     * Constant for value 'CheckBox'
     * @return string 'CheckBox'
     */
    const VALUE_CHECK_BOX = 'CheckBox';
    /**
     * Constant for value 'TextArea'
     * @return string 'TextArea'
     */
    const VALUE_TEXT_AREA = 'TextArea';
    /**
     * Constant for value 'Numeric'
     * @return string 'Numeric'
     */
    const VALUE_NUMERIC = 'Numeric';
    /**
     * Constant for value 'Text'
     * @return string 'Text'
     */
    const VALUE_TEXT = 'Text';
    /**
     * Constant for value 'Date'
     * @return string 'Date'
     */
    const VALUE_DATE = 'Date';
    /**
     * Constant for value 'ContentBlock'
     * @return string 'ContentBlock'
     */
    const VALUE_CONTENT_BLOCK = 'ContentBlock';
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
     * @uses self::VALUE_RADIO_BUTTON
     * @uses self::VALUE_CHECK_BOX
     * @uses self::VALUE_TEXT_AREA
     * @uses self::VALUE_NUMERIC
     * @uses self::VALUE_TEXT
     * @uses self::VALUE_DATE
     * @uses self::VALUE_CONTENT_BLOCK
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RADIO_BUTTON,
            self::VALUE_CHECK_BOX,
            self::VALUE_TEXT_AREA,
            self::VALUE_NUMERIC,
            self::VALUE_TEXT,
            self::VALUE_DATE,
            self::VALUE_CONTENT_BLOCK,
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
