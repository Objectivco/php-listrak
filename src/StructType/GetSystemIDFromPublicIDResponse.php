<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSystemIDFromPublicIDResponse StructType
 * @subpackage Structs
 */
class GetSystemIDFromPublicIDResponse extends AbstractStructBase
{
    /**
     * The GetSystemIDFromPublicIDResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $GetSystemIDFromPublicIDResult;
    /**
     * Constructor method for GetSystemIDFromPublicIDResponse
     * @uses GetSystemIDFromPublicIDResponse::setGetSystemIDFromPublicIDResult()
     * @param int $getSystemIDFromPublicIDResult
     */
    public function __construct($getSystemIDFromPublicIDResult = null)
    {
        $this
            ->setGetSystemIDFromPublicIDResult($getSystemIDFromPublicIDResult);
    }
    /**
     * Get GetSystemIDFromPublicIDResult value
     * @return int
     */
    public function getGetSystemIDFromPublicIDResult()
    {
        return $this->GetSystemIDFromPublicIDResult;
    }
    /**
     * Set GetSystemIDFromPublicIDResult value
     * @param int $getSystemIDFromPublicIDResult
     * @return \StructType\GetSystemIDFromPublicIDResponse
     */
    public function setGetSystemIDFromPublicIDResult($getSystemIDFromPublicIDResult = null)
    {
        // validation for constraint: int
        if (!is_null($getSystemIDFromPublicIDResult) && !is_numeric($getSystemIDFromPublicIDResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($getSystemIDFromPublicIDResult)), __LINE__);
        }
        $this->GetSystemIDFromPublicIDResult = $getSystemIDFromPublicIDResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetSystemIDFromPublicIDResponse
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
