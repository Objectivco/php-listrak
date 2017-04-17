<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportRangeListContactHygieneResponse StructType
 * @subpackage Structs
 */
class ReportRangeListContactHygieneResponse extends AbstractStructBase
{
    /**
     * The ReportRangeListContactHygieneResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSContactHygieneInfo
     */
    public $ReportRangeListContactHygieneResult;
    /**
     * Constructor method for ReportRangeListContactHygieneResponse
     * @uses ReportRangeListContactHygieneResponse::setReportRangeListContactHygieneResult()
     * @param \ArrayType\ArrayOfWSContactHygieneInfo $reportRangeListContactHygieneResult
     */
    public function __construct(\ArrayType\ArrayOfWSContactHygieneInfo $reportRangeListContactHygieneResult = null)
    {
        $this
            ->setReportRangeListContactHygieneResult($reportRangeListContactHygieneResult);
    }
    /**
     * Get ReportRangeListContactHygieneResult value
     * @return \ArrayType\ArrayOfWSContactHygieneInfo|null
     */
    public function getReportRangeListContactHygieneResult()
    {
        return $this->ReportRangeListContactHygieneResult;
    }
    /**
     * Set ReportRangeListContactHygieneResult value
     * @param \ArrayType\ArrayOfWSContactHygieneInfo $reportRangeListContactHygieneResult
     * @return \StructType\ReportRangeListContactHygieneResponse
     */
    public function setReportRangeListContactHygieneResult(\ArrayType\ArrayOfWSContactHygieneInfo $reportRangeListContactHygieneResult = null)
    {
        $this->ReportRangeListContactHygieneResult = $reportRangeListContactHygieneResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportRangeListContactHygieneResponse
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
