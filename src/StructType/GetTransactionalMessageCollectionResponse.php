<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTransactionalMessageCollectionResponse StructType
 * @subpackage Structs
 */
class GetTransactionalMessageCollectionResponse extends AbstractStructBase
{
    /**
     * The GetTransactionalMessageCollectionResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSTransactionalMessage
     */
    public $GetTransactionalMessageCollectionResult;
    /**
     * Constructor method for GetTransactionalMessageCollectionResponse
     * @uses GetTransactionalMessageCollectionResponse::setGetTransactionalMessageCollectionResult()
     * @param \ArrayType\ArrayOfWSTransactionalMessage $getTransactionalMessageCollectionResult
     */
    public function __construct(\ArrayType\ArrayOfWSTransactionalMessage $getTransactionalMessageCollectionResult = null)
    {
        $this
            ->setGetTransactionalMessageCollectionResult($getTransactionalMessageCollectionResult);
    }
    /**
     * Get GetTransactionalMessageCollectionResult value
     * @return \ArrayType\ArrayOfWSTransactionalMessage|null
     */
    public function getGetTransactionalMessageCollectionResult()
    {
        return $this->GetTransactionalMessageCollectionResult;
    }
    /**
     * Set GetTransactionalMessageCollectionResult value
     * @param \ArrayType\ArrayOfWSTransactionalMessage $getTransactionalMessageCollectionResult
     * @return \StructType\GetTransactionalMessageCollectionResponse
     */
    public function setGetTransactionalMessageCollectionResult(\ArrayType\ArrayOfWSTransactionalMessage $getTransactionalMessageCollectionResult = null)
    {
        $this->GetTransactionalMessageCollectionResult = $getTransactionalMessageCollectionResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetTransactionalMessageCollectionResponse
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
