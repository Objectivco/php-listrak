<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSConductorBulkLoadOptions StructType
 * @subpackage Structs
 */
class WSConductorBulkLoadOptions extends AbstractStructBase
{
    /**
     * The SuppressEmailNotifications
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $SuppressEmailNotifications;
    /**
     * Constructor method for WSConductorBulkLoadOptions
     * @uses WSConductorBulkLoadOptions::setSuppressEmailNotifications()
     * @param bool $suppressEmailNotifications
     */
    public function __construct($suppressEmailNotifications = null)
    {
        $this
            ->setSuppressEmailNotifications($suppressEmailNotifications);
    }
    /**
     * Get SuppressEmailNotifications value
     * @return bool
     */
    public function getSuppressEmailNotifications()
    {
        return $this->SuppressEmailNotifications;
    }
    /**
     * Set SuppressEmailNotifications value
     * @param bool $suppressEmailNotifications
     * @return \StructType\WSConductorBulkLoadOptions
     */
    public function setSuppressEmailNotifications($suppressEmailNotifications = null)
    {
        $this->SuppressEmailNotifications = $suppressEmailNotifications;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSConductorBulkLoadOptions
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
