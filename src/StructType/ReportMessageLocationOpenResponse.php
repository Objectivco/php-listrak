<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportMessageLocationOpenResponse StructType
 * @subpackage Structs
 */
class ReportMessageLocationOpenResponse extends AbstractStructBase
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
     * The ReportMessageLocationOpenResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSMessageLocationOpen
     */
    public $ReportMessageLocationOpenResult;
    /**
     * Constructor method for ReportMessageLocationOpenResponse
     * @uses ReportMessageLocationOpenResponse::setWSException()
     * @uses ReportMessageLocationOpenResponse::setReportMessageLocationOpenResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSMessageLocationOpen $reportMessageLocationOpenResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSMessageLocationOpen $reportMessageLocationOpenResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportMessageLocationOpenResult($reportMessageLocationOpenResult);
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
     * @return \StructType\ReportMessageLocationOpenResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportMessageLocationOpenResult value
     * @return \ArrayType\ArrayOfWSMessageLocationOpen|null
     */
    public function getReportMessageLocationOpenResult()
    {
        return $this->ReportMessageLocationOpenResult;
    }
    /**
     * Set ReportMessageLocationOpenResult value
     * @param \ArrayType\ArrayOfWSMessageLocationOpen $reportMessageLocationOpenResult
     * @return \StructType\ReportMessageLocationOpenResponse
     */
    public function setReportMessageLocationOpenResult(\ArrayType\ArrayOfWSMessageLocationOpen $reportMessageLocationOpenResult = null)
    {
        $this->ReportMessageLocationOpenResult = $reportMessageLocationOpenResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportMessageLocationOpenResponse
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
