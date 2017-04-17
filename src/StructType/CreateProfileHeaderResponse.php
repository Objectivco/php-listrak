<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateProfileHeaderResponse StructType
 * @subpackage Structs
 */
class CreateProfileHeaderResponse extends AbstractStructBase
{
    /**
     * The CreateProfileHeaderResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $CreateProfileHeaderResult;
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
     * Constructor method for CreateProfileHeaderResponse
     * @uses CreateProfileHeaderResponse::setCreateProfileHeaderResult()
     * @uses CreateProfileHeaderResponse::setWSProfileHeader()
     * @uses CreateProfileHeaderResponse::setWSException()
     * @param bool $createProfileHeaderResult
     * @param \StructType\WSProfileHeader $wSProfileHeader
     * @param \StructType\WSException $wSException
     */
    public function __construct($createProfileHeaderResult = null, \StructType\WSProfileHeader $wSProfileHeader = null, \StructType\WSException $wSException = null)
    {
        $this
            ->setCreateProfileHeaderResult($createProfileHeaderResult)
            ->setWSProfileHeader($wSProfileHeader)
            ->setWSException($wSException);
    }
    /**
     * Get CreateProfileHeaderResult value
     * @return bool
     */
    public function getCreateProfileHeaderResult()
    {
        return $this->CreateProfileHeaderResult;
    }
    /**
     * Set CreateProfileHeaderResult value
     * @param bool $createProfileHeaderResult
     * @return \StructType\CreateProfileHeaderResponse
     */
    public function setCreateProfileHeaderResult($createProfileHeaderResult = null)
    {
        $this->CreateProfileHeaderResult = $createProfileHeaderResult;
        return $this;
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
     * @return \StructType\CreateProfileHeaderResponse
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
     * @return \StructType\CreateProfileHeaderResponse
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
     * @return \StructType\CreateProfileHeaderResponse
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
