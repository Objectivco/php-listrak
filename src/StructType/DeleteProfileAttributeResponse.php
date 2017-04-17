<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteProfileAttributeResponse StructType
 * @subpackage Structs
 */
class DeleteProfileAttributeResponse extends AbstractStructBase
{
    /**
     * The DeleteProfileAttributeResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $DeleteProfileAttributeResult;
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
     * Constructor method for DeleteProfileAttributeResponse
     * @uses DeleteProfileAttributeResponse::setDeleteProfileAttributeResult()
     * @uses DeleteProfileAttributeResponse::setWSException()
     * @param bool $deleteProfileAttributeResult
     * @param \StructType\WSException $wSException
     */
    public function __construct($deleteProfileAttributeResult = null, \StructType\WSException $wSException = null)
    {
        $this
            ->setDeleteProfileAttributeResult($deleteProfileAttributeResult)
            ->setWSException($wSException);
    }
    /**
     * Get DeleteProfileAttributeResult value
     * @return bool
     */
    public function getDeleteProfileAttributeResult()
    {
        return $this->DeleteProfileAttributeResult;
    }
    /**
     * Set DeleteProfileAttributeResult value
     * @param bool $deleteProfileAttributeResult
     * @return \StructType\DeleteProfileAttributeResponse
     */
    public function setDeleteProfileAttributeResult($deleteProfileAttributeResult = null)
    {
        $this->DeleteProfileAttributeResult = $deleteProfileAttributeResult;
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
     * @return \StructType\DeleteProfileAttributeResponse
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
     * @return \StructType\DeleteProfileAttributeResponse
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
