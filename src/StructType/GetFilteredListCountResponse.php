<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFilteredListCountResponse StructType
 * @subpackage Structs
 */
class GetFilteredListCountResponse extends AbstractStructBase
{
    /**
     * The GetFilteredListCountResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $GetFilteredListCountResult;
    /**
     * Constructor method for GetFilteredListCountResponse
     * @uses GetFilteredListCountResponse::setGetFilteredListCountResult()
     * @param int $getFilteredListCountResult
     */
    public function __construct($getFilteredListCountResult = null)
    {
        $this
            ->setGetFilteredListCountResult($getFilteredListCountResult);
    }
    /**
     * Get GetFilteredListCountResult value
     * @return int
     */
    public function getGetFilteredListCountResult()
    {
        return $this->GetFilteredListCountResult;
    }
    /**
     * Set GetFilteredListCountResult value
     * @param int $getFilteredListCountResult
     * @return \StructType\GetFilteredListCountResponse
     */
    public function setGetFilteredListCountResult($getFilteredListCountResult = null)
    {
        // validation for constraint: int
        if (!is_null($getFilteredListCountResult) && !is_numeric($getFilteredListCountResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($getFilteredListCountResult)), __LINE__);
        }
        $this->GetFilteredListCountResult = $getFilteredListCountResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetFilteredListCountResponse
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
