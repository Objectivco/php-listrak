<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportRangeListContactRemovalResponse StructType
 * @subpackage Structs
 */
class ReportRangeListContactRemovalResponse extends AbstractStructBase
{
    /**
     * The ReportRangeListContactRemovalResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSContactRemovalInfo
     */
    public $ReportRangeListContactRemovalResult;
    /**
     * Constructor method for ReportRangeListContactRemovalResponse
     * @uses ReportRangeListContactRemovalResponse::setReportRangeListContactRemovalResult()
     * @param \ArrayType\ArrayOfWSContactRemovalInfo $reportRangeListContactRemovalResult
     */
    public function __construct(\ArrayType\ArrayOfWSContactRemovalInfo $reportRangeListContactRemovalResult = null)
    {
        $this
            ->setReportRangeListContactRemovalResult($reportRangeListContactRemovalResult);
    }
    /**
     * Get ReportRangeListContactRemovalResult value
     * @return \ArrayType\ArrayOfWSContactRemovalInfo|null
     */
    public function getReportRangeListContactRemovalResult()
    {
        return $this->ReportRangeListContactRemovalResult;
    }
    /**
     * Set ReportRangeListContactRemovalResult value
     * @param \ArrayType\ArrayOfWSContactRemovalInfo $reportRangeListContactRemovalResult
     * @return \StructType\ReportRangeListContactRemovalResponse
     */
    public function setReportRangeListContactRemovalResult(\ArrayType\ArrayOfWSContactRemovalInfo $reportRangeListContactRemovalResult = null)
    {
        $this->ReportRangeListContactRemovalResult = $reportRangeListContactRemovalResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportRangeListContactRemovalResponse
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
