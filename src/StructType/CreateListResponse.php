<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateListResponse StructType
 * @subpackage Structs
 */
class CreateListResponse extends AbstractStructBase
{
    /**
     * The CreateListResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $CreateListResult;
    /**
     * The WSList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSList
     */
    public $WSList;
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
     * Constructor method for CreateListResponse
     * @uses CreateListResponse::setCreateListResult()
     * @uses CreateListResponse::setWSList()
     * @uses CreateListResponse::setWSException()
     * @param bool $createListResult
     * @param \StructType\WSList $wSList
     * @param \StructType\WSException $wSException
     */
    public function __construct($createListResult = null, \StructType\WSList $wSList = null, \StructType\WSException $wSException = null)
    {
        $this
            ->setCreateListResult($createListResult)
            ->setWSList($wSList)
            ->setWSException($wSException);
    }
    /**
     * Get CreateListResult value
     * @return bool
     */
    public function getCreateListResult()
    {
        return $this->CreateListResult;
    }
    /**
     * Set CreateListResult value
     * @param bool $createListResult
     * @return \StructType\CreateListResponse
     */
    public function setCreateListResult($createListResult = null)
    {
        $this->CreateListResult = $createListResult;
        return $this;
    }
    /**
     * Get WSList value
     * @return \StructType\WSList
     */
    public function getWSList()
    {
        return $this->WSList;
    }
    /**
     * Set WSList value
     * @param \StructType\WSList $wSList
     * @return \StructType\CreateListResponse
     */
    public function setWSList(\StructType\WSList $wSList = null)
    {
        $this->WSList = $wSList;
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
     * @return \StructType\CreateListResponse
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
     * @return \StructType\CreateListResponse
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
