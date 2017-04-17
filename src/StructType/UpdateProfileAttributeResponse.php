<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateProfileAttributeResponse StructType
 * @subpackage Structs
 */
class UpdateProfileAttributeResponse extends AbstractStructBase
{
    /**
     * The UpdateProfileAttributeResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $UpdateProfileAttributeResult;
    /**
     * The WSProfileAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSProfileAttribute
     */
    public $WSProfileAttribute;
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
     * Constructor method for UpdateProfileAttributeResponse
     * @uses UpdateProfileAttributeResponse::setUpdateProfileAttributeResult()
     * @uses UpdateProfileAttributeResponse::setWSProfileAttribute()
     * @uses UpdateProfileAttributeResponse::setWSException()
     * @param bool $updateProfileAttributeResult
     * @param \StructType\WSProfileAttribute $wSProfileAttribute
     * @param \StructType\WSException $wSException
     */
    public function __construct($updateProfileAttributeResult = null, \StructType\WSProfileAttribute $wSProfileAttribute = null, \StructType\WSException $wSException = null)
    {
        $this
            ->setUpdateProfileAttributeResult($updateProfileAttributeResult)
            ->setWSProfileAttribute($wSProfileAttribute)
            ->setWSException($wSException);
    }
    /**
     * Get UpdateProfileAttributeResult value
     * @return bool
     */
    public function getUpdateProfileAttributeResult()
    {
        return $this->UpdateProfileAttributeResult;
    }
    /**
     * Set UpdateProfileAttributeResult value
     * @param bool $updateProfileAttributeResult
     * @return \StructType\UpdateProfileAttributeResponse
     */
    public function setUpdateProfileAttributeResult($updateProfileAttributeResult = null)
    {
        $this->UpdateProfileAttributeResult = $updateProfileAttributeResult;
        return $this;
    }
    /**
     * Get WSProfileAttribute value
     * @return \StructType\WSProfileAttribute
     */
    public function getWSProfileAttribute()
    {
        return $this->WSProfileAttribute;
    }
    /**
     * Set WSProfileAttribute value
     * @param \StructType\WSProfileAttribute $wSProfileAttribute
     * @return \StructType\UpdateProfileAttributeResponse
     */
    public function setWSProfileAttribute(\StructType\WSProfileAttribute $wSProfileAttribute = null)
    {
        $this->WSProfileAttribute = $wSProfileAttribute;
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
     * @return \StructType\UpdateProfileAttributeResponse
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
     * @return \StructType\UpdateProfileAttributeResponse
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
