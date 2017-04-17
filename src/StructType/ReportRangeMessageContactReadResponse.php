<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportRangeMessageContactReadResponse StructType
 * @subpackage Structs
 */
class ReportRangeMessageContactReadResponse extends AbstractStructBase
{
    /**
     * The ReportRangeMessageContactReadResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSContactRead
     */
    public $ReportRangeMessageContactReadResult;
    /**
     * Constructor method for ReportRangeMessageContactReadResponse
     * @uses ReportRangeMessageContactReadResponse::setReportRangeMessageContactReadResult()
     * @param \ArrayType\ArrayOfWSContactRead $reportRangeMessageContactReadResult
     */
    public function __construct(\ArrayType\ArrayOfWSContactRead $reportRangeMessageContactReadResult = null)
    {
        $this
            ->setReportRangeMessageContactReadResult($reportRangeMessageContactReadResult);
    }
    /**
     * Get ReportRangeMessageContactReadResult value
     * @return \ArrayType\ArrayOfWSContactRead|null
     */
    public function getReportRangeMessageContactReadResult()
    {
        return $this->ReportRangeMessageContactReadResult;
    }
    /**
     * Set ReportRangeMessageContactReadResult value
     * @param \ArrayType\ArrayOfWSContactRead $reportRangeMessageContactReadResult
     * @return \StructType\ReportRangeMessageContactReadResponse
     */
    public function setReportRangeMessageContactReadResult(\ArrayType\ArrayOfWSContactRead $reportRangeMessageContactReadResult = null)
    {
        $this->ReportRangeMessageContactReadResult = $reportRangeMessageContactReadResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportRangeMessageContactReadResponse
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
