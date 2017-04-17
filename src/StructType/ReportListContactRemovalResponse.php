<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportListContactRemovalResponse StructType
 * @subpackage Structs
 */
class ReportListContactRemovalResponse extends AbstractStructBase
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
     * The ReportListContactRemovalResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSContactRemovalInfo
     */
    public $ReportListContactRemovalResult;
    /**
     * Constructor method for ReportListContactRemovalResponse
     * @uses ReportListContactRemovalResponse::setWSException()
     * @uses ReportListContactRemovalResponse::setReportListContactRemovalResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSContactRemovalInfo $reportListContactRemovalResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSContactRemovalInfo $reportListContactRemovalResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportListContactRemovalResult($reportListContactRemovalResult);
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
     * @return \StructType\ReportListContactRemovalResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportListContactRemovalResult value
     * @return \ArrayType\ArrayOfWSContactRemovalInfo|null
     */
    public function getReportListContactRemovalResult()
    {
        return $this->ReportListContactRemovalResult;
    }
    /**
     * Set ReportListContactRemovalResult value
     * @param \ArrayType\ArrayOfWSContactRemovalInfo $reportListContactRemovalResult
     * @return \StructType\ReportListContactRemovalResponse
     */
    public function setReportListContactRemovalResult(\ArrayType\ArrayOfWSContactRemovalInfo $reportListContactRemovalResult = null)
    {
        $this->ReportListContactRemovalResult = $reportListContactRemovalResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportListContactRemovalResponse
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
