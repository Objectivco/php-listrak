<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportRangeMessageContactBouncesResponse StructType
 * @subpackage Structs
 */
class ReportRangeMessageContactBouncesResponse extends AbstractStructBase
{
    /**
     * The ReportRangeMessageContactBouncesResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSContactBounce
     */
    public $ReportRangeMessageContactBouncesResult;
    /**
     * Constructor method for ReportRangeMessageContactBouncesResponse
     * @uses ReportRangeMessageContactBouncesResponse::setReportRangeMessageContactBouncesResult()
     * @param \ArrayType\ArrayOfWSContactBounce $reportRangeMessageContactBouncesResult
     */
    public function __construct(\ArrayType\ArrayOfWSContactBounce $reportRangeMessageContactBouncesResult = null)
    {
        $this
            ->setReportRangeMessageContactBouncesResult($reportRangeMessageContactBouncesResult);
    }
    /**
     * Get ReportRangeMessageContactBouncesResult value
     * @return \ArrayType\ArrayOfWSContactBounce|null
     */
    public function getReportRangeMessageContactBouncesResult()
    {
        return $this->ReportRangeMessageContactBouncesResult;
    }
    /**
     * Set ReportRangeMessageContactBouncesResult value
     * @param \ArrayType\ArrayOfWSContactBounce $reportRangeMessageContactBouncesResult
     * @return \StructType\ReportRangeMessageContactBouncesResponse
     */
    public function setReportRangeMessageContactBouncesResult(\ArrayType\ArrayOfWSContactBounce $reportRangeMessageContactBouncesResult = null)
    {
        $this->ReportRangeMessageContactBouncesResult = $reportRangeMessageContactBouncesResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportRangeMessageContactBouncesResponse
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
