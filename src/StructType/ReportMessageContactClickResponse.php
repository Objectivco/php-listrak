<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportMessageContactClickResponse StructType
 * @subpackage Structs
 */
class ReportMessageContactClickResponse extends AbstractStructBase
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
     * The ReportMessageContactClickResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSContactClick
     */
    public $ReportMessageContactClickResult;
    /**
     * Constructor method for ReportMessageContactClickResponse
     * @uses ReportMessageContactClickResponse::setWSException()
     * @uses ReportMessageContactClickResponse::setReportMessageContactClickResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSContactClick $reportMessageContactClickResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSContactClick $reportMessageContactClickResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportMessageContactClickResult($reportMessageContactClickResult);
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
     * @return \StructType\ReportMessageContactClickResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportMessageContactClickResult value
     * @return \ArrayType\ArrayOfWSContactClick|null
     */
    public function getReportMessageContactClickResult()
    {
        return $this->ReportMessageContactClickResult;
    }
    /**
     * Set ReportMessageContactClickResult value
     * @param \ArrayType\ArrayOfWSContactClick $reportMessageContactClickResult
     * @return \StructType\ReportMessageContactClickResponse
     */
    public function setReportMessageContactClickResult(\ArrayType\ArrayOfWSContactClick $reportMessageContactClickResult = null)
    {
        $this->ReportMessageContactClickResult = $reportMessageContactClickResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportMessageContactClickResponse
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
