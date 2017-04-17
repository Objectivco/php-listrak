<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLegacyProcessStatusResponse StructType
 * @subpackage Structs
 */
class GetLegacyProcessStatusResponse extends AbstractStructBase
{
    /**
     * The GetLegacyProcessStatusResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSLegacyProcessStatus
     */
    public $GetLegacyProcessStatusResult;
    /**
     * Constructor method for GetLegacyProcessStatusResponse
     * @uses GetLegacyProcessStatusResponse::setGetLegacyProcessStatusResult()
     * @param \ArrayType\ArrayOfWSLegacyProcessStatus $getLegacyProcessStatusResult
     */
    public function __construct(\ArrayType\ArrayOfWSLegacyProcessStatus $getLegacyProcessStatusResult = null)
    {
        $this
            ->setGetLegacyProcessStatusResult($getLegacyProcessStatusResult);
    }
    /**
     * Get GetLegacyProcessStatusResult value
     * @return \ArrayType\ArrayOfWSLegacyProcessStatus|null
     */
    public function getGetLegacyProcessStatusResult()
    {
        return $this->GetLegacyProcessStatusResult;
    }
    /**
     * Set GetLegacyProcessStatusResult value
     * @param \ArrayType\ArrayOfWSLegacyProcessStatus $getLegacyProcessStatusResult
     * @return \StructType\GetLegacyProcessStatusResponse
     */
    public function setGetLegacyProcessStatusResult(\ArrayType\ArrayOfWSLegacyProcessStatus $getLegacyProcessStatusResult = null)
    {
        $this->GetLegacyProcessStatusResult = $getLegacyProcessStatusResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetLegacyProcessStatusResponse
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
