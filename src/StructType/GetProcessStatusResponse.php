<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProcessStatusResponse StructType
 * @subpackage Structs
 */
class GetProcessStatusResponse extends AbstractStructBase
{
    /**
     * The WSProcessStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSProcessStatus
     */
    public $WSProcessStatus;
    /**
     * Constructor method for GetProcessStatusResponse
     * @uses GetProcessStatusResponse::setWSProcessStatus()
     * @param \StructType\WSProcessStatus $wSProcessStatus
     */
    public function __construct(\StructType\WSProcessStatus $wSProcessStatus = null)
    {
        $this
            ->setWSProcessStatus($wSProcessStatus);
    }
    /**
     * Get WSProcessStatus value
     * @return \StructType\WSProcessStatus
     */
    public function getWSProcessStatus()
    {
        return $this->WSProcessStatus;
    }
    /**
     * Set WSProcessStatus value
     * @param \StructType\WSProcessStatus $wSProcessStatus
     * @return \StructType\GetProcessStatusResponse
     */
    public function setWSProcessStatus(\StructType\WSProcessStatus $wSProcessStatus = null)
    {
        $this->WSProcessStatus = $wSProcessStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetProcessStatusResponse
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
