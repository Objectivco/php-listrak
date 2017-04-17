<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportMessageLocationContactReadResponse StructType
 * @subpackage Structs
 */
class ReportMessageLocationContactReadResponse extends AbstractStructBase
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
     * The ReportMessageLocationContactReadResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSMessageLocationContactRead
     */
    public $ReportMessageLocationContactReadResult;
    /**
     * Constructor method for ReportMessageLocationContactReadResponse
     * @uses ReportMessageLocationContactReadResponse::setWSException()
     * @uses ReportMessageLocationContactReadResponse::setReportMessageLocationContactReadResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSMessageLocationContactRead $reportMessageLocationContactReadResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSMessageLocationContactRead $reportMessageLocationContactReadResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportMessageLocationContactReadResult($reportMessageLocationContactReadResult);
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
     * @return \StructType\ReportMessageLocationContactReadResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportMessageLocationContactReadResult value
     * @return \ArrayType\ArrayOfWSMessageLocationContactRead|null
     */
    public function getReportMessageLocationContactReadResult()
    {
        return $this->ReportMessageLocationContactReadResult;
    }
    /**
     * Set ReportMessageLocationContactReadResult value
     * @param \ArrayType\ArrayOfWSMessageLocationContactRead $reportMessageLocationContactReadResult
     * @return \StructType\ReportMessageLocationContactReadResponse
     */
    public function setReportMessageLocationContactReadResult(\ArrayType\ArrayOfWSMessageLocationContactRead $reportMessageLocationContactReadResult = null)
    {
        $this->ReportMessageLocationContactReadResult = $reportMessageLocationContactReadResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportMessageLocationContactReadResponse
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
