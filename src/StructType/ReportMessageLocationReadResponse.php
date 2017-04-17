<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportMessageLocationReadResponse StructType
 * @subpackage Structs
 */
class ReportMessageLocationReadResponse extends AbstractStructBase
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
     * The ReportMessageLocationReadResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSMessageLocationRead
     */
    public $ReportMessageLocationReadResult;
    /**
     * Constructor method for ReportMessageLocationReadResponse
     * @uses ReportMessageLocationReadResponse::setWSException()
     * @uses ReportMessageLocationReadResponse::setReportMessageLocationReadResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSMessageLocationRead $reportMessageLocationReadResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSMessageLocationRead $reportMessageLocationReadResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportMessageLocationReadResult($reportMessageLocationReadResult);
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
     * @return \StructType\ReportMessageLocationReadResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportMessageLocationReadResult value
     * @return \ArrayType\ArrayOfWSMessageLocationRead|null
     */
    public function getReportMessageLocationReadResult()
    {
        return $this->ReportMessageLocationReadResult;
    }
    /**
     * Set ReportMessageLocationReadResult value
     * @param \ArrayType\ArrayOfWSMessageLocationRead $reportMessageLocationReadResult
     * @return \StructType\ReportMessageLocationReadResponse
     */
    public function setReportMessageLocationReadResult(\ArrayType\ArrayOfWSMessageLocationRead $reportMessageLocationReadResult = null)
    {
        $this->ReportMessageLocationReadResult = $reportMessageLocationReadResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportMessageLocationReadResponse
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
