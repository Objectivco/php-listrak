<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountVmtaCollectionResponse StructType
 * @subpackage Structs
 */
class GetAccountVmtaCollectionResponse extends AbstractStructBase
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
     * The GetAccountVmtaCollectionResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSVmta
     */
    public $GetAccountVmtaCollectionResult;
    /**
     * Constructor method for GetAccountVmtaCollectionResponse
     * @uses GetAccountVmtaCollectionResponse::setWSException()
     * @uses GetAccountVmtaCollectionResponse::setGetAccountVmtaCollectionResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSVmta $getAccountVmtaCollectionResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSVmta $getAccountVmtaCollectionResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setGetAccountVmtaCollectionResult($getAccountVmtaCollectionResult);
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
     * @return \StructType\GetAccountVmtaCollectionResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get GetAccountVmtaCollectionResult value
     * @return \ArrayType\ArrayOfWSVmta|null
     */
    public function getGetAccountVmtaCollectionResult()
    {
        return $this->GetAccountVmtaCollectionResult;
    }
    /**
     * Set GetAccountVmtaCollectionResult value
     * @param \ArrayType\ArrayOfWSVmta $getAccountVmtaCollectionResult
     * @return \StructType\GetAccountVmtaCollectionResponse
     */
    public function setGetAccountVmtaCollectionResult(\ArrayType\ArrayOfWSVmta $getAccountVmtaCollectionResult = null)
    {
        $this->GetAccountVmtaCollectionResult = $getAccountVmtaCollectionResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetAccountVmtaCollectionResponse
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
