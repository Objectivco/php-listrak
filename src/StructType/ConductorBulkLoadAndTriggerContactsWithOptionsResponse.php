<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConductorBulkLoadAndTriggerContactsWithOptionsResponse
 * StructType
 * @subpackage Structs
 */
class ConductorBulkLoadAndTriggerContactsWithOptionsResponse extends AbstractStructBase
{
    /**
     * The ConductorBulkLoadAndTriggerContactsWithOptionsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ConductorBulkLoadAndTriggerContactsWithOptionsResult;
    /**
     * Constructor method for ConductorBulkLoadAndTriggerContactsWithOptionsResponse
     * @uses ConductorBulkLoadAndTriggerContactsWithOptionsResponse::setConductorBulkLoadAndTriggerContactsWithOptionsResult()
     * @param int $conductorBulkLoadAndTriggerContactsWithOptionsResult
     */
    public function __construct($conductorBulkLoadAndTriggerContactsWithOptionsResult = null)
    {
        $this
            ->setConductorBulkLoadAndTriggerContactsWithOptionsResult($conductorBulkLoadAndTriggerContactsWithOptionsResult);
    }
    /**
     * Get ConductorBulkLoadAndTriggerContactsWithOptionsResult value
     * @return int
     */
    public function getConductorBulkLoadAndTriggerContactsWithOptionsResult()
    {
        return $this->ConductorBulkLoadAndTriggerContactsWithOptionsResult;
    }
    /**
     * Set ConductorBulkLoadAndTriggerContactsWithOptionsResult value
     * @param int $conductorBulkLoadAndTriggerContactsWithOptionsResult
     * @return \StructType\ConductorBulkLoadAndTriggerContactsWithOptionsResponse
     */
    public function setConductorBulkLoadAndTriggerContactsWithOptionsResult($conductorBulkLoadAndTriggerContactsWithOptionsResult = null)
    {
        // validation for constraint: int
        if (!is_null($conductorBulkLoadAndTriggerContactsWithOptionsResult) && !is_numeric($conductorBulkLoadAndTriggerContactsWithOptionsResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($conductorBulkLoadAndTriggerContactsWithOptionsResult)), __LINE__);
        }
        $this->ConductorBulkLoadAndTriggerContactsWithOptionsResult = $conductorBulkLoadAndTriggerContactsWithOptionsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ConductorBulkLoadAndTriggerContactsWithOptionsResponse
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
