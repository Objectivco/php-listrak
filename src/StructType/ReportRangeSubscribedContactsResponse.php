<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportRangeSubscribedContactsResponse StructType
 * @subpackage Structs
 */
class ReportRangeSubscribedContactsResponse extends AbstractStructBase
{
    /**
     * The ReportRangeSubscribedContactsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSContactSubscriptionInfo
     */
    public $ReportRangeSubscribedContactsResult;
    /**
     * Constructor method for ReportRangeSubscribedContactsResponse
     * @uses ReportRangeSubscribedContactsResponse::setReportRangeSubscribedContactsResult()
     * @param \ArrayType\ArrayOfWSContactSubscriptionInfo $reportRangeSubscribedContactsResult
     */
    public function __construct(\ArrayType\ArrayOfWSContactSubscriptionInfo $reportRangeSubscribedContactsResult = null)
    {
        $this
            ->setReportRangeSubscribedContactsResult($reportRangeSubscribedContactsResult);
    }
    /**
     * Get ReportRangeSubscribedContactsResult value
     * @return \ArrayType\ArrayOfWSContactSubscriptionInfo|null
     */
    public function getReportRangeSubscribedContactsResult()
    {
        return $this->ReportRangeSubscribedContactsResult;
    }
    /**
     * Set ReportRangeSubscribedContactsResult value
     * @param \ArrayType\ArrayOfWSContactSubscriptionInfo $reportRangeSubscribedContactsResult
     * @return \StructType\ReportRangeSubscribedContactsResponse
     */
    public function setReportRangeSubscribedContactsResult(\ArrayType\ArrayOfWSContactSubscriptionInfo $reportRangeSubscribedContactsResult = null)
    {
        $this->ReportRangeSubscribedContactsResult = $reportRangeSubscribedContactsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportRangeSubscribedContactsResponse
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
