<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportMessageContactActivityResponse StructType
 * @subpackage Structs
 */
class ReportMessageContactActivityResponse extends AbstractStructBase
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
     * The ReportMessageContactActivityResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSMessageContactActivity
     */
    public $ReportMessageContactActivityResult;
    /**
     * Constructor method for ReportMessageContactActivityResponse
     * @uses ReportMessageContactActivityResponse::setWSException()
     * @uses ReportMessageContactActivityResponse::setReportMessageContactActivityResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSMessageContactActivity $reportMessageContactActivityResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSMessageContactActivity $reportMessageContactActivityResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportMessageContactActivityResult($reportMessageContactActivityResult);
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
     * @return \StructType\ReportMessageContactActivityResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportMessageContactActivityResult value
     * @return \ArrayType\ArrayOfWSMessageContactActivity|null
     */
    public function getReportMessageContactActivityResult()
    {
        return $this->ReportMessageContactActivityResult;
    }
    /**
     * Set ReportMessageContactActivityResult value
     * @param \ArrayType\ArrayOfWSMessageContactActivity $reportMessageContactActivityResult
     * @return \StructType\ReportMessageContactActivityResponse
     */
    public function setReportMessageContactActivityResult(\ArrayType\ArrayOfWSMessageContactActivity $reportMessageContactActivityResult = null)
    {
        $this->ReportMessageContactActivityResult = $reportMessageContactActivityResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportMessageContactActivityResponse
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
