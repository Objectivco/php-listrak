<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BulkLoadContactsWithOptionsResponse StructType
 * @subpackage Structs
 */
class BulkLoadContactsWithOptionsResponse extends AbstractStructBase
{
    /**
     * The BulkLoadContactsWithOptionsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $BulkLoadContactsWithOptionsResult;
    /**
     * Constructor method for BulkLoadContactsWithOptionsResponse
     * @uses BulkLoadContactsWithOptionsResponse::setBulkLoadContactsWithOptionsResult()
     * @param int $bulkLoadContactsWithOptionsResult
     */
    public function __construct($bulkLoadContactsWithOptionsResult = null)
    {
        $this
            ->setBulkLoadContactsWithOptionsResult($bulkLoadContactsWithOptionsResult);
    }
    /**
     * Get BulkLoadContactsWithOptionsResult value
     * @return int
     */
    public function getBulkLoadContactsWithOptionsResult()
    {
        return $this->BulkLoadContactsWithOptionsResult;
    }
    /**
     * Set BulkLoadContactsWithOptionsResult value
     * @param int $bulkLoadContactsWithOptionsResult
     * @return \StructType\BulkLoadContactsWithOptionsResponse
     */
    public function setBulkLoadContactsWithOptionsResult($bulkLoadContactsWithOptionsResult = null)
    {
        // validation for constraint: int
        if (!is_null($bulkLoadContactsWithOptionsResult) && !is_numeric($bulkLoadContactsWithOptionsResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bulkLoadContactsWithOptionsResult)), __LINE__);
        }
        $this->BulkLoadContactsWithOptionsResult = $bulkLoadContactsWithOptionsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BulkLoadContactsWithOptionsResponse
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
