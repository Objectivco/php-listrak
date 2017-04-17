<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProfileHeaderCollectionResponse StructType
 * @subpackage Structs
 */
class GetProfileHeaderCollectionResponse extends AbstractStructBase
{
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
     * The GetProfileHeaderCollectionResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSProfileHeader
     */
    public $GetProfileHeaderCollectionResult;
    /**
     * Constructor method for GetProfileHeaderCollectionResponse
     * @uses GetProfileHeaderCollectionResponse::setWSException()
     * @uses GetProfileHeaderCollectionResponse::setGetProfileHeaderCollectionResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSProfileHeader $getProfileHeaderCollectionResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSProfileHeader $getProfileHeaderCollectionResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setGetProfileHeaderCollectionResult($getProfileHeaderCollectionResult);
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
     * @return \StructType\GetProfileHeaderCollectionResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get GetProfileHeaderCollectionResult value
     * @return \ArrayType\ArrayOfWSProfileHeader|null
     */
    public function getGetProfileHeaderCollectionResult()
    {
        return $this->GetProfileHeaderCollectionResult;
    }
    /**
     * Set GetProfileHeaderCollectionResult value
     * @param \ArrayType\ArrayOfWSProfileHeader $getProfileHeaderCollectionResult
     * @return \StructType\GetProfileHeaderCollectionResponse
     */
    public function setGetProfileHeaderCollectionResult(\ArrayType\ArrayOfWSProfileHeader $getProfileHeaderCollectionResult = null)
    {
        $this->GetProfileHeaderCollectionResult = $getProfileHeaderCollectionResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetProfileHeaderCollectionResponse
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
