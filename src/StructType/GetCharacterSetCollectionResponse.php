<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCharacterSetCollectionResponse StructType
 * @subpackage Structs
 */
class GetCharacterSetCollectionResponse extends AbstractStructBase
{
    /**
     * The GetCharacterSetCollectionResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSCharacterSet
     */
    public $GetCharacterSetCollectionResult;
    /**
     * Constructor method for GetCharacterSetCollectionResponse
     * @uses GetCharacterSetCollectionResponse::setGetCharacterSetCollectionResult()
     * @param \ArrayType\ArrayOfWSCharacterSet $getCharacterSetCollectionResult
     */
    public function __construct(\ArrayType\ArrayOfWSCharacterSet $getCharacterSetCollectionResult = null)
    {
        $this
            ->setGetCharacterSetCollectionResult($getCharacterSetCollectionResult);
    }
    /**
     * Get GetCharacterSetCollectionResult value
     * @return \ArrayType\ArrayOfWSCharacterSet|null
     */
    public function getGetCharacterSetCollectionResult()
    {
        return $this->GetCharacterSetCollectionResult;
    }
    /**
     * Set GetCharacterSetCollectionResult value
     * @param \ArrayType\ArrayOfWSCharacterSet $getCharacterSetCollectionResult
     * @return \StructType\GetCharacterSetCollectionResponse
     */
    public function setGetCharacterSetCollectionResult(\ArrayType\ArrayOfWSCharacterSet $getCharacterSetCollectionResult = null)
    {
        $this->GetCharacterSetCollectionResult = $getCharacterSetCollectionResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetCharacterSetCollectionResponse
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
