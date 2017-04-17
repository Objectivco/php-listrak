<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportListContactHygieneResponse StructType
 * @subpackage Structs
 */
class ReportListContactHygieneResponse extends AbstractStructBase
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
     * The ReportListContactHygieneResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSContactHygieneInfo
     */
    public $ReportListContactHygieneResult;
    /**
     * Constructor method for ReportListContactHygieneResponse
     * @uses ReportListContactHygieneResponse::setWSException()
     * @uses ReportListContactHygieneResponse::setReportListContactHygieneResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSContactHygieneInfo $reportListContactHygieneResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSContactHygieneInfo $reportListContactHygieneResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportListContactHygieneResult($reportListContactHygieneResult);
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
     * @return \StructType\ReportListContactHygieneResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportListContactHygieneResult value
     * @return \ArrayType\ArrayOfWSContactHygieneInfo|null
     */
    public function getReportListContactHygieneResult()
    {
        return $this->ReportListContactHygieneResult;
    }
    /**
     * Set ReportListContactHygieneResult value
     * @param \ArrayType\ArrayOfWSContactHygieneInfo $reportListContactHygieneResult
     * @return \StructType\ReportListContactHygieneResponse
     */
    public function setReportListContactHygieneResult(\ArrayType\ArrayOfWSContactHygieneInfo $reportListContactHygieneResult = null)
    {
        $this->ReportListContactHygieneResult = $reportListContactHygieneResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportListContactHygieneResponse
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
