<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportAdminContactFeedbackLoopResponse StructType
 * @subpackage Structs
 */
class ReportAdminContactFeedbackLoopResponse extends AbstractStructBase
{
    /**
     * The WSException
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSException
     */
    public $WSException;
    /**
     * The ReportAdminContactFeedbackLoopResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSFeedbackLoopListing
     */
    public $ReportAdminContactFeedbackLoopResult;
    /**
     * Constructor method for ReportAdminContactFeedbackLoopResponse
     * @uses ReportAdminContactFeedbackLoopResponse::setWSException()
     * @uses ReportAdminContactFeedbackLoopResponse::setReportAdminContactFeedbackLoopResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSFeedbackLoopListing $reportAdminContactFeedbackLoopResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSFeedbackLoopListing $reportAdminContactFeedbackLoopResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportAdminContactFeedbackLoopResult($reportAdminContactFeedbackLoopResult);
    }
    /**
     * Get WSException value
     * @return \StructType\WSException
     */
    public function getWSException()
    {
        return $this->WSException;
    }
    /**
     * Set WSException value
     * @param \StructType\WSException $wSException
     * @return \StructType\ReportAdminContactFeedbackLoopResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportAdminContactFeedbackLoopResult value
     * @return \ArrayType\ArrayOfWSFeedbackLoopListing|null
     */
    public function getReportAdminContactFeedbackLoopResult()
    {
        return $this->ReportAdminContactFeedbackLoopResult;
    }
    /**
     * Set ReportAdminContactFeedbackLoopResult value
     * @param \ArrayType\ArrayOfWSFeedbackLoopListing $reportAdminContactFeedbackLoopResult
     * @return \StructType\ReportAdminContactFeedbackLoopResponse
     */
    public function setReportAdminContactFeedbackLoopResult(\ArrayType\ArrayOfWSFeedbackLoopListing $reportAdminContactFeedbackLoopResult = null)
    {
        $this->ReportAdminContactFeedbackLoopResult = $reportAdminContactFeedbackLoopResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportAdminContactFeedbackLoopResponse
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
