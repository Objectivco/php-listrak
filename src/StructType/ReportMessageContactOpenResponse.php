<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportMessageContactOpenResponse StructType
 * @subpackage Structs
 */
class ReportMessageContactOpenResponse extends AbstractStructBase
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
     * The ReportMessageContactOpenResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSContactOpen
     */
    public $ReportMessageContactOpenResult;
    /**
     * Constructor method for ReportMessageContactOpenResponse
     * @uses ReportMessageContactOpenResponse::setWSException()
     * @uses ReportMessageContactOpenResponse::setReportMessageContactOpenResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSContactOpen $reportMessageContactOpenResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSContactOpen $reportMessageContactOpenResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportMessageContactOpenResult($reportMessageContactOpenResult);
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
     * @return \StructType\ReportMessageContactOpenResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportMessageContactOpenResult value
     * @return \ArrayType\ArrayOfWSContactOpen|null
     */
    public function getReportMessageContactOpenResult()
    {
        return $this->ReportMessageContactOpenResult;
    }
    /**
     * Set ReportMessageContactOpenResult value
     * @param \ArrayType\ArrayOfWSContactOpen $reportMessageContactOpenResult
     * @return \StructType\ReportMessageContactOpenResponse
     */
    public function setReportMessageContactOpenResult(\ArrayType\ArrayOfWSContactOpen $reportMessageContactOpenResult = null)
    {
        $this->ReportMessageContactOpenResult = $reportMessageContactOpenResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportMessageContactOpenResponse
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
