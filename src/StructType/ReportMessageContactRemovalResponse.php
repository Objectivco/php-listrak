<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportMessageContactRemovalResponse StructType
 * @subpackage Structs
 */
class ReportMessageContactRemovalResponse extends AbstractStructBase
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
     * The ReportMessageContactRemovalResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSContactRemovalInfo
     */
    public $ReportMessageContactRemovalResult;
    /**
     * Constructor method for ReportMessageContactRemovalResponse
     * @uses ReportMessageContactRemovalResponse::setWSException()
     * @uses ReportMessageContactRemovalResponse::setReportMessageContactRemovalResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSContactRemovalInfo $reportMessageContactRemovalResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSContactRemovalInfo $reportMessageContactRemovalResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportMessageContactRemovalResult($reportMessageContactRemovalResult);
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
     * @return \StructType\ReportMessageContactRemovalResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportMessageContactRemovalResult value
     * @return \ArrayType\ArrayOfWSContactRemovalInfo|null
     */
    public function getReportMessageContactRemovalResult()
    {
        return $this->ReportMessageContactRemovalResult;
    }
    /**
     * Set ReportMessageContactRemovalResult value
     * @param \ArrayType\ArrayOfWSContactRemovalInfo $reportMessageContactRemovalResult
     * @return \StructType\ReportMessageContactRemovalResponse
     */
    public function setReportMessageContactRemovalResult(\ArrayType\ArrayOfWSContactRemovalInfo $reportMessageContactRemovalResult = null)
    {
        $this->ReportMessageContactRemovalResult = $reportMessageContactRemovalResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportMessageContactRemovalResponse
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
