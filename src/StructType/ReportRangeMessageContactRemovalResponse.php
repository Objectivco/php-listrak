<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportRangeMessageContactRemovalResponse StructType
 * @subpackage Structs
 */
class ReportRangeMessageContactRemovalResponse extends AbstractStructBase
{
    /**
     * The ReportRangeMessageContactRemovalResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSContactRemovalInfo
     */
    public $ReportRangeMessageContactRemovalResult;
    /**
     * Constructor method for ReportRangeMessageContactRemovalResponse
     * @uses ReportRangeMessageContactRemovalResponse::setReportRangeMessageContactRemovalResult()
     * @param \ArrayType\ArrayOfWSContactRemovalInfo $reportRangeMessageContactRemovalResult
     */
    public function __construct(\ArrayType\ArrayOfWSContactRemovalInfo $reportRangeMessageContactRemovalResult = null)
    {
        $this
            ->setReportRangeMessageContactRemovalResult($reportRangeMessageContactRemovalResult);
    }
    /**
     * Get ReportRangeMessageContactRemovalResult value
     * @return \ArrayType\ArrayOfWSContactRemovalInfo|null
     */
    public function getReportRangeMessageContactRemovalResult()
    {
        return $this->ReportRangeMessageContactRemovalResult;
    }
    /**
     * Set ReportRangeMessageContactRemovalResult value
     * @param \ArrayType\ArrayOfWSContactRemovalInfo $reportRangeMessageContactRemovalResult
     * @return \StructType\ReportRangeMessageContactRemovalResponse
     */
    public function setReportRangeMessageContactRemovalResult(\ArrayType\ArrayOfWSContactRemovalInfo $reportRangeMessageContactRemovalResult = null)
    {
        $this->ReportRangeMessageContactRemovalResult = $reportRangeMessageContactRemovalResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportRangeMessageContactRemovalResponse
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
