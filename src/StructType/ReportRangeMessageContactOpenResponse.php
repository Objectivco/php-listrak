<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportRangeMessageContactOpenResponse StructType
 * @subpackage Structs
 */
class ReportRangeMessageContactOpenResponse extends AbstractStructBase
{
    /**
     * The ReportRangeMessageContactOpenResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSContactOpen
     */
    public $ReportRangeMessageContactOpenResult;
    /**
     * Constructor method for ReportRangeMessageContactOpenResponse
     * @uses ReportRangeMessageContactOpenResponse::setReportRangeMessageContactOpenResult()
     * @param \ArrayType\ArrayOfWSContactOpen $reportRangeMessageContactOpenResult
     */
    public function __construct(\ArrayType\ArrayOfWSContactOpen $reportRangeMessageContactOpenResult = null)
    {
        $this
            ->setReportRangeMessageContactOpenResult($reportRangeMessageContactOpenResult);
    }
    /**
     * Get ReportRangeMessageContactOpenResult value
     * @return \ArrayType\ArrayOfWSContactOpen|null
     */
    public function getReportRangeMessageContactOpenResult()
    {
        return $this->ReportRangeMessageContactOpenResult;
    }
    /**
     * Set ReportRangeMessageContactOpenResult value
     * @param \ArrayType\ArrayOfWSContactOpen $reportRangeMessageContactOpenResult
     * @return \StructType\ReportRangeMessageContactOpenResponse
     */
    public function setReportRangeMessageContactOpenResult(\ArrayType\ArrayOfWSContactOpen $reportRangeMessageContactOpenResult = null)
    {
        $this->ReportRangeMessageContactOpenResult = $reportRangeMessageContactOpenResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportRangeMessageContactOpenResponse
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
