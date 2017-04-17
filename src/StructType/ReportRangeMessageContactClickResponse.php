<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportRangeMessageContactClickResponse StructType
 * @subpackage Structs
 */
class ReportRangeMessageContactClickResponse extends AbstractStructBase
{
    /**
     * The ReportRangeMessageContactClickResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSContactClick
     */
    public $ReportRangeMessageContactClickResult;
    /**
     * Constructor method for ReportRangeMessageContactClickResponse
     * @uses ReportRangeMessageContactClickResponse::setReportRangeMessageContactClickResult()
     * @param \ArrayType\ArrayOfWSContactClick $reportRangeMessageContactClickResult
     */
    public function __construct(\ArrayType\ArrayOfWSContactClick $reportRangeMessageContactClickResult = null)
    {
        $this
            ->setReportRangeMessageContactClickResult($reportRangeMessageContactClickResult);
    }
    /**
     * Get ReportRangeMessageContactClickResult value
     * @return \ArrayType\ArrayOfWSContactClick|null
     */
    public function getReportRangeMessageContactClickResult()
    {
        return $this->ReportRangeMessageContactClickResult;
    }
    /**
     * Set ReportRangeMessageContactClickResult value
     * @param \ArrayType\ArrayOfWSContactClick $reportRangeMessageContactClickResult
     * @return \StructType\ReportRangeMessageContactClickResponse
     */
    public function setReportRangeMessageContactClickResult(\ArrayType\ArrayOfWSContactClick $reportRangeMessageContactClickResult = null)
    {
        $this->ReportRangeMessageContactClickResult = $reportRangeMessageContactClickResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportRangeMessageContactClickResponse
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
