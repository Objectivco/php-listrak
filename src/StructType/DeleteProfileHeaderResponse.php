<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteProfileHeaderResponse StructType
 * @subpackage Structs
 */
class DeleteProfileHeaderResponse extends AbstractStructBase
{
    /**
     * The DeleteProfileHeaderResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $DeleteProfileHeaderResult;
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
     * Constructor method for DeleteProfileHeaderResponse
     * @uses DeleteProfileHeaderResponse::setDeleteProfileHeaderResult()
     * @uses DeleteProfileHeaderResponse::setWSException()
     * @param bool $deleteProfileHeaderResult
     * @param \StructType\WSException $wSException
     */
    public function __construct($deleteProfileHeaderResult = null, \StructType\WSException $wSException = null)
    {
        $this
            ->setDeleteProfileHeaderResult($deleteProfileHeaderResult)
            ->setWSException($wSException);
    }
    /**
     * Get DeleteProfileHeaderResult value
     * @return bool
     */
    public function getDeleteProfileHeaderResult()
    {
        return $this->DeleteProfileHeaderResult;
    }
    /**
     * Set DeleteProfileHeaderResult value
     * @param bool $deleteProfileHeaderResult
     * @return \StructType\DeleteProfileHeaderResponse
     */
    public function setDeleteProfileHeaderResult($deleteProfileHeaderResult = null)
    {
        $this->DeleteProfileHeaderResult = $deleteProfileHeaderResult;
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
     * @return \StructType\DeleteProfileHeaderResponse
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
     * @return \StructType\DeleteProfileHeaderResponse
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
