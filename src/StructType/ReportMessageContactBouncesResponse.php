<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportMessageContactBouncesResponse StructType
 * @subpackage Structs
 */
class ReportMessageContactBouncesResponse extends AbstractStructBase
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
     * The ReportMessageContactBouncesResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSContactBounce
     */
    public $ReportMessageContactBouncesResult;
    /**
     * Constructor method for ReportMessageContactBouncesResponse
     * @uses ReportMessageContactBouncesResponse::setWSException()
     * @uses ReportMessageContactBouncesResponse::setReportMessageContactBouncesResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSContactBounce $reportMessageContactBouncesResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSContactBounce $reportMessageContactBouncesResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportMessageContactBouncesResult($reportMessageContactBouncesResult);
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
     * @return \StructType\ReportMessageContactBouncesResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportMessageContactBouncesResult value
     * @return \ArrayType\ArrayOfWSContactBounce|null
     */
    public function getReportMessageContactBouncesResult()
    {
        return $this->ReportMessageContactBouncesResult;
    }
    /**
     * Set ReportMessageContactBouncesResult value
     * @param \ArrayType\ArrayOfWSContactBounce $reportMessageContactBouncesResult
     * @return \StructType\ReportMessageContactBouncesResponse
     */
    public function setReportMessageContactBouncesResult(\ArrayType\ArrayOfWSContactBounce $reportMessageContactBouncesResult = null)
    {
        $this->ReportMessageContactBouncesResult = $reportMessageContactBouncesResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportMessageContactBouncesResponse
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
