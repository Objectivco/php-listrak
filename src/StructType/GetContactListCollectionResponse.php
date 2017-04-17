<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetContactListCollectionResponse StructType
 * @subpackage Structs
 */
class GetContactListCollectionResponse extends AbstractStructBase
{
    /**
     * The GetContactListCollectionResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSContactList
     */
    public $GetContactListCollectionResult;
    /**
     * Constructor method for GetContactListCollectionResponse
     * @uses GetContactListCollectionResponse::setGetContactListCollectionResult()
     * @param \ArrayType\ArrayOfWSContactList $getContactListCollectionResult
     */
    public function __construct(\ArrayType\ArrayOfWSContactList $getContactListCollectionResult = null)
    {
        $this
            ->setGetContactListCollectionResult($getContactListCollectionResult);
    }
    /**
     * Get GetContactListCollectionResult value
     * @return \ArrayType\ArrayOfWSContactList|null
     */
    public function getGetContactListCollectionResult()
    {
        return $this->GetContactListCollectionResult;
    }
    /**
     * Set GetContactListCollectionResult value
     * @param \ArrayType\ArrayOfWSContactList $getContactListCollectionResult
     * @return \StructType\GetContactListCollectionResponse
     */
    public function setGetContactListCollectionResult(\ArrayType\ArrayOfWSContactList $getContactListCollectionResult = null)
    {
        $this->GetContactListCollectionResult = $getContactListCollectionResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetContactListCollectionResponse
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
