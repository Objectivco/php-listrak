<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportSubscribedContactsResponse StructType
 * @subpackage Structs
 */
class ReportSubscribedContactsResponse extends AbstractStructBase
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
     * The ReportSubscribedContactsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSContactSubscriptionInfo
     */
    public $ReportSubscribedContactsResult;
    /**
     * Constructor method for ReportSubscribedContactsResponse
     * @uses ReportSubscribedContactsResponse::setWSException()
     * @uses ReportSubscribedContactsResponse::setReportSubscribedContactsResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSContactSubscriptionInfo $reportSubscribedContactsResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSContactSubscriptionInfo $reportSubscribedContactsResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportSubscribedContactsResult($reportSubscribedContactsResult);
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
     * @return \StructType\ReportSubscribedContactsResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportSubscribedContactsResult value
     * @return \ArrayType\ArrayOfWSContactSubscriptionInfo|null
     */
    public function getReportSubscribedContactsResult()
    {
        return $this->ReportSubscribedContactsResult;
    }
    /**
     * Set ReportSubscribedContactsResult value
     * @param \ArrayType\ArrayOfWSContactSubscriptionInfo $reportSubscribedContactsResult
     * @return \StructType\ReportSubscribedContactsResponse
     */
    public function setReportSubscribedContactsResult(\ArrayType\ArrayOfWSContactSubscriptionInfo $reportSubscribedContactsResult = null)
    {
        $this->ReportSubscribedContactsResult = $reportSubscribedContactsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportSubscribedContactsResponse
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
