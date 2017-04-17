<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateProfileHeaderResponse StructType
 * @subpackage Structs
 */
class UpdateProfileHeaderResponse extends AbstractStructBase
{
    /**
     * The UpdateProfileHeaderResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $UpdateProfileHeaderResult;
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
     * Constructor method for UpdateProfileHeaderResponse
     * @uses UpdateProfileHeaderResponse::setUpdateProfileHeaderResult()
     * @uses UpdateProfileHeaderResponse::setWSProfileHeader()
     * @uses UpdateProfileHeaderResponse::setWSException()
     * @param bool $updateProfileHeaderResult
     * @param \StructType\WSProfileHeader $wSProfileHeader
     * @param \StructType\WSException $wSException
     */
    public function __construct($updateProfileHeaderResult = null, \StructType\WSProfileHeader $wSProfileHeader = null, \StructType\WSException $wSException = null)
    {
        $this
            ->setUpdateProfileHeaderResult($updateProfileHeaderResult)
            ->setWSProfileHeader($wSProfileHeader)
            ->setWSException($wSException);
    }
    /**
     * Get UpdateProfileHeaderResult value
     * @return bool
     */
    public function getUpdateProfileHeaderResult()
    {
        return $this->UpdateProfileHeaderResult;
    }
    /**
     * Set UpdateProfileHeaderResult value
     * @param bool $updateProfileHeaderResult
     * @return \StructType\UpdateProfileHeaderResponse
     */
    public function setUpdateProfileHeaderResult($updateProfileHeaderResult = null)
    {
        $this->UpdateProfileHeaderResult = $updateProfileHeaderResult;
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
     * @return \StructType\UpdateProfileHeaderResponse
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
     * @return \StructType\UpdateProfileHeaderResponse
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
     * @return \StructType\UpdateProfileHeaderResponse
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
