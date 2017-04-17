<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteProfileHeader StructType
 * @subpackage Structs
 */
class DeleteProfileHeader extends AbstractStructBase
{
    /**
     * The HeaderID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $HeaderID;
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
     * Constructor method for DeleteProfileHeader
     * @uses DeleteProfileHeader::setHeaderID()
     * @uses DeleteProfileHeader::setWSException()
     * @param int $headerID
     * @param \StructType\WSException $wSException
     */
    public function __construct($headerID = null, \StructType\WSException $wSException = null)
    {
        $this
            ->setHeaderID($headerID)
            ->setWSException($wSException);
    }
    /**
     * Get HeaderID value
     * @return int
     */
    public function getHeaderID()
    {
        return $this->HeaderID;
    }
    /**
     * Set HeaderID value
     * @param int $headerID
     * @return \StructType\DeleteProfileHeader
     */
    public function setHeaderID($headerID = null)
    {
        // validation for constraint: int
        if (!is_null($headerID) && !is_numeric($headerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($headerID)), __LINE__);
        }
        $this->HeaderID = $headerID;
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
     * @return \StructType\DeleteProfileHeader
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
     * @return \StructType\DeleteProfileHeader
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
