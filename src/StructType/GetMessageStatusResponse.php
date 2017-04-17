<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMessageStatusResponse StructType
 * @subpackage Structs
 */
class GetMessageStatusResponse extends AbstractStructBase
{
    /**
     * The WSMessageStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSMessageStatus
     */
    public $WSMessageStatus;
    /**
     * Constructor method for GetMessageStatusResponse
     * @uses GetMessageStatusResponse::setWSMessageStatus()
     * @param \StructType\WSMessageStatus $wSMessageStatus
     */
    public function __construct(\StructType\WSMessageStatus $wSMessageStatus = null)
    {
        $this
            ->setWSMessageStatus($wSMessageStatus);
    }
    /**
     * Get WSMessageStatus value
     * @return \StructType\WSMessageStatus
     */
    public function getWSMessageStatus()
    {
        return $this->WSMessageStatus;
    }
    /**
     * Set WSMessageStatus value
     * @param \StructType\WSMessageStatus $wSMessageStatus
     * @return \StructType\GetMessageStatusResponse
     */
    public function setWSMessageStatus(\StructType\WSMessageStatus $wSMessageStatus = null)
    {
        $this->WSMessageStatus = $wSMessageStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetMessageStatusResponse
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
