<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConductorBulkLoadAndTriggerContactsResponse StructType
 * @subpackage Structs
 */
class ConductorBulkLoadAndTriggerContactsResponse extends AbstractStructBase
{
    /**
     * The ConductorBulkLoadAndTriggerContactsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ConductorBulkLoadAndTriggerContactsResult;
    /**
     * Constructor method for ConductorBulkLoadAndTriggerContactsResponse
     * @uses ConductorBulkLoadAndTriggerContactsResponse::setConductorBulkLoadAndTriggerContactsResult()
     * @param int $conductorBulkLoadAndTriggerContactsResult
     */
    public function __construct($conductorBulkLoadAndTriggerContactsResult = null)
    {
        $this
            ->setConductorBulkLoadAndTriggerContactsResult($conductorBulkLoadAndTriggerContactsResult);
    }
    /**
     * Get ConductorBulkLoadAndTriggerContactsResult value
     * @return int
     */
    public function getConductorBulkLoadAndTriggerContactsResult()
    {
        return $this->ConductorBulkLoadAndTriggerContactsResult;
    }
    /**
     * Set ConductorBulkLoadAndTriggerContactsResult value
     * @param int $conductorBulkLoadAndTriggerContactsResult
     * @return \StructType\ConductorBulkLoadAndTriggerContactsResponse
     */
    public function setConductorBulkLoadAndTriggerContactsResult($conductorBulkLoadAndTriggerContactsResult = null)
    {
        // validation for constraint: int
        if (!is_null($conductorBulkLoadAndTriggerContactsResult) && !is_numeric($conductorBulkLoadAndTriggerContactsResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($conductorBulkLoadAndTriggerContactsResult)), __LINE__);
        }
        $this->ConductorBulkLoadAndTriggerContactsResult = $conductorBulkLoadAndTriggerContactsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ConductorBulkLoadAndTriggerContactsResponse
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
