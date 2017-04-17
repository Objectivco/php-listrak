<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProcessStatus StructType
 * @subpackage Structs
 */
class GetProcessStatus extends AbstractStructBase
{
    /**
     * The ProcessID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ProcessID;
    /**
     * Constructor method for GetProcessStatus
     * @uses GetProcessStatus::setProcessID()
     * @param int $processID
     */
    public function __construct($processID = null)
    {
        $this
            ->setProcessID($processID);
    }
    /**
     * Get ProcessID value
     * @return int
     */
    public function getProcessID()
    {
        return $this->ProcessID;
    }
    /**
     * Set ProcessID value
     * @param int $processID
     * @return \StructType\GetProcessStatus
     */
    public function setProcessID($processID = null)
    {
        // validation for constraint: int
        if (!is_null($processID) && !is_numeric($processID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($processID)), __LINE__);
        }
        $this->ProcessID = $processID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetProcessStatus
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
