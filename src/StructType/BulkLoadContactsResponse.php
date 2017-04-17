<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BulkLoadContactsResponse StructType
 * @subpackage Structs
 */
class BulkLoadContactsResponse extends AbstractStructBase
{
    /**
     * The BulkLoadContactsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $BulkLoadContactsResult;
    /**
     * Constructor method for BulkLoadContactsResponse
     * @uses BulkLoadContactsResponse::setBulkLoadContactsResult()
     * @param int $bulkLoadContactsResult
     */
    public function __construct($bulkLoadContactsResult = null)
    {
        $this
            ->setBulkLoadContactsResult($bulkLoadContactsResult);
    }
    /**
     * Get BulkLoadContactsResult value
     * @return int
     */
    public function getBulkLoadContactsResult()
    {
        return $this->BulkLoadContactsResult;
    }
    /**
     * Set BulkLoadContactsResult value
     * @param int $bulkLoadContactsResult
     * @return \StructType\BulkLoadContactsResponse
     */
    public function setBulkLoadContactsResult($bulkLoadContactsResult = null)
    {
        // validation for constraint: int
        if (!is_null($bulkLoadContactsResult) && !is_numeric($bulkLoadContactsResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bulkLoadContactsResult)), __LINE__);
        }
        $this->BulkLoadContactsResult = $bulkLoadContactsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BulkLoadContactsResponse
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
