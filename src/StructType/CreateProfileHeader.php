<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateProfileHeader StructType
 * @subpackage Structs
 */
class CreateProfileHeader extends AbstractStructBase
{
    /**
     * The WSProfileHeader
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSProfileHeader
     */
    public $WSProfileHeader;
    /**
     * The WSException
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSException
     */
    public $WSException;
    /**
     * Constructor method for CreateProfileHeader
     * @uses CreateProfileHeader::setWSProfileHeader()
     * @uses CreateProfileHeader::setWSException()
     * @param \StructType\WSProfileHeader $wSProfileHeader
     * @param \StructType\WSException $wSException
     */
    public function __construct(\StructType\WSProfileHeader $wSProfileHeader = null, \StructType\WSException $wSException = null)
    {
        $this
            ->setWSProfileHeader($wSProfileHeader)
            ->setWSException($wSException);
    }
    /**
     * Get WSProfileHeader value
     * @return \StructType\WSProfileHeader
     */
    public function getWSProfileHeader()
    {
        return $this->WSProfileHeader;
    }
    /**
     * Set WSProfileHeader value
     * @param \StructType\WSProfileHeader $wSProfileHeader
     * @return \StructType\CreateProfileHeader
     */
    public function setWSProfileHeader(\StructType\WSProfileHeader $wSProfileHeader = null)
    {
        $this->WSProfileHeader = $wSProfileHeader;
        return $this;
    }
    /**
     * Get WSException value
     * @return \StructType\WSException
     */
    public function getWSException()
    {
        return $this->WSException;
    }
    /**
     * Set WSException value
     * @param \StructType\WSException $wSException
     * @return \StructType\CreateProfileHeader
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CreateProfileHeader
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
