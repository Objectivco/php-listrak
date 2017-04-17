<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportMessageContactReadResponse StructType
 * @subpackage Structs
 */
class ReportMessageContactReadResponse extends AbstractStructBase
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
     * The ReportMessageContactReadResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSContactRead
     */
    public $ReportMessageContactReadResult;
    /**
     * Constructor method for ReportMessageContactReadResponse
     * @uses ReportMessageContactReadResponse::setWSException()
     * @uses ReportMessageContactReadResponse::setReportMessageContactReadResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSContactRead $reportMessageContactReadResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSContactRead $reportMessageContactReadResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportMessageContactReadResult($reportMessageContactReadResult);
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
     * @return \StructType\ReportMessageContactReadResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportMessageContactReadResult value
     * @return \ArrayType\ArrayOfWSContactRead|null
     */
    public function getReportMessageContactReadResult()
    {
        return $this->ReportMessageContactReadResult;
    }
    /**
     * Set ReportMessageContactReadResult value
     * @param \ArrayType\ArrayOfWSContactRead $reportMessageContactReadResult
     * @return \StructType\ReportMessageContactReadResponse
     */
    public function setReportMessageContactReadResult(\ArrayType\ArrayOfWSContactRead $reportMessageContactReadResult = null)
    {
        $this->ReportMessageContactReadResult = $reportMessageContactReadResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportMessageContactReadResponse
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
