<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConductorGetExternalEventsResponse StructType
 * @subpackage Structs
 */
class ConductorGetExternalEventsResponse extends AbstractStructBase
{
    /**
     * The ConductorGetExternalEventsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSConductorExternalEvent
     */
    public $ConductorGetExternalEventsResult;
    /**
     * Constructor method for ConductorGetExternalEventsResponse
     * @uses ConductorGetExternalEventsResponse::setConductorGetExternalEventsResult()
     * @param \ArrayType\ArrayOfWSConductorExternalEvent $conductorGetExternalEventsResult
     */
    public function __construct(\ArrayType\ArrayOfWSConductorExternalEvent $conductorGetExternalEventsResult = null)
    {
        $this
            ->setConductorGetExternalEventsResult($conductorGetExternalEventsResult);
    }
    /**
     * Get ConductorGetExternalEventsResult value
     * @return \ArrayType\ArrayOfWSConductorExternalEvent|null
     */
    public function getConductorGetExternalEventsResult()
    {
        return $this->ConductorGetExternalEventsResult;
    }
    /**
     * Set ConductorGetExternalEventsResult value
     * @param \ArrayType\ArrayOfWSConductorExternalEvent $conductorGetExternalEventsResult
     * @return \StructType\ConductorGetExternalEventsResponse
     */
    public function setConductorGetExternalEventsResult(\ArrayType\ArrayOfWSConductorExternalEvent $conductorGetExternalEventsResult = null)
    {
        $this->ConductorGetExternalEventsResult = $conductorGetExternalEventsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ConductorGetExternalEventsResponse
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
