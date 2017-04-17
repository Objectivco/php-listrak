<?php

namespace EnumType;

/**
 * This class stands for StatusEnum EnumType
 * @subpackage Enumerations
 */
class StatusEnum
{
    /**
     * Constant for value 'DataActivelyUploading'
     * @return string 'DataActivelyUploading'
     */
    const VALUE_DATA_ACTIVELY_UPLOADING = 'DataActivelyUploading';
    /**
     * Constant for value 'DataUploaded'
     * @return string 'DataUploaded'
     */
    const VALUE_DATA_UPLOADED = 'DataUploaded';
    /**
     * Constant for value 'DataReadyForProcessing'
     * @return string 'DataReadyForProcessing'
     */
    const VALUE_DATA_READY_FOR_PROCESSING = 'DataReadyForProcessing';
    /**
     * Constant for value 'ProcessingData'
     * @return string 'ProcessingData'
     */
    const VALUE_PROCESSING_DATA = 'ProcessingData';
    /**
     * Constant for value 'ProcessingCompleted'
     * @return string 'ProcessingCompleted'
     */
    const VALUE_PROCESSING_COMPLETED = 'ProcessingCompleted';
    /**
     * Constant for value 'ProcessingFailed'
     * @return string 'ProcessingFailed'
     */
    const VALUE_PROCESSING_FAILED = 'ProcessingFailed';
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
     * @uses self::VALUE_DATA_ACTIVELY_UPLOADING
     * @uses self::VALUE_DATA_UPLOADED
     * @uses self::VALUE_DATA_READY_FOR_PROCESSING
     * @uses self::VALUE_PROCESSING_DATA
     * @uses self::VALUE_PROCESSING_COMPLETED
     * @uses self::VALUE_PROCESSING_FAILED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DATA_ACTIVELY_UPLOADING,
            self::VALUE_DATA_UPLOADED,
            self::VALUE_DATA_READY_FOR_PROCESSING,
            self::VALUE_PROCESSING_DATA,
            self::VALUE_PROCESSING_COMPLETED,
            self::VALUE_PROCESSING_FAILED,
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
