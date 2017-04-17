<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSVmta StructType
 * @subpackage Structs
 */
class WSVmta extends AbstractStructBase
{
    /**
     * The VmtaID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $VmtaID;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * Constructor method for WSVmta
     * @uses WSVmta::setVmtaID()
     * @uses WSVmta::setDescription()
     * @param int $vmtaID
     * @param string $description
     */
    public function __construct($vmtaID = null, $description = null)
    {
        $this
            ->setVmtaID($vmtaID)
            ->setDescription($description);
    }
    /**
     * Get VmtaID value
     * @return int
     */
    public function getVmtaID()
    {
        return $this->VmtaID;
    }
    /**
     * Set VmtaID value
     * @param int $vmtaID
     * @return \StructType\WSVmta
     */
    public function setVmtaID($vmtaID = null)
    {
        // validation for constraint: int
        if (!is_null($vmtaID) && !is_numeric($vmtaID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vmtaID)), __LINE__);
        }
        $this->VmtaID = $vmtaID;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\WSVmta
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSVmta
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
