<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportMessageLocationContactOpenResponse StructType
 * @subpackage Structs
 */
class ReportMessageLocationContactOpenResponse extends AbstractStructBase
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
     * The ReportMessageLocationContactOpenResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSMessageLocationContactOpen
     */
    public $ReportMessageLocationContactOpenResult;
    /**
     * Constructor method for ReportMessageLocationContactOpenResponse
     * @uses ReportMessageLocationContactOpenResponse::setWSException()
     * @uses ReportMessageLocationContactOpenResponse::setReportMessageLocationContactOpenResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSMessageLocationContactOpen $reportMessageLocationContactOpenResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSMessageLocationContactOpen $reportMessageLocationContactOpenResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportMessageLocationContactOpenResult($reportMessageLocationContactOpenResult);
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
     * @return \StructType\ReportMessageLocationContactOpenResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportMessageLocationContactOpenResult value
     * @return \ArrayType\ArrayOfWSMessageLocationContactOpen|null
     */
    public function getReportMessageLocationContactOpenResult()
    {
        return $this->ReportMessageLocationContactOpenResult;
    }
    /**
     * Set ReportMessageLocationContactOpenResult value
     * @param \ArrayType\ArrayOfWSMessageLocationContactOpen $reportMessageLocationContactOpenResult
     * @return \StructType\ReportMessageLocationContactOpenResponse
     */
    public function setReportMessageLocationContactOpenResult(\ArrayType\ArrayOfWSMessageLocationContactOpen $reportMessageLocationContactOpenResult = null)
    {
        $this->ReportMessageLocationContactOpenResult = $reportMessageLocationContactOpenResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportMessageLocationContactOpenResponse
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
