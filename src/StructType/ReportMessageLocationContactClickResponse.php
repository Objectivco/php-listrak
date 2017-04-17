<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportMessageLocationContactClickResponse StructType
 * @subpackage Structs
 */
class ReportMessageLocationContactClickResponse extends AbstractStructBase
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
     * The ReportMessageLocationContactClickResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSMessageLocationContactClick
     */
    public $ReportMessageLocationContactClickResult;
    /**
     * Constructor method for ReportMessageLocationContactClickResponse
     * @uses ReportMessageLocationContactClickResponse::setWSException()
     * @uses ReportMessageLocationContactClickResponse::setReportMessageLocationContactClickResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSMessageLocationContactClick $reportMessageLocationContactClickResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSMessageLocationContactClick $reportMessageLocationContactClickResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportMessageLocationContactClickResult($reportMessageLocationContactClickResult);
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
     * @return \StructType\ReportMessageLocationContactClickResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportMessageLocationContactClickResult value
     * @return \ArrayType\ArrayOfWSMessageLocationContactClick|null
     */
    public function getReportMessageLocationContactClickResult()
    {
        return $this->ReportMessageLocationContactClickResult;
    }
    /**
     * Set ReportMessageLocationContactClickResult value
     * @param \ArrayType\ArrayOfWSMessageLocationContactClick $reportMessageLocationContactClickResult
     * @return \StructType\ReportMessageLocationContactClickResponse
     */
    public function setReportMessageLocationContactClickResult(\ArrayType\ArrayOfWSMessageLocationContactClick $reportMessageLocationContactClickResult = null)
    {
        $this->ReportMessageLocationContactClickResult = $reportMessageLocationContactClickResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportMessageLocationContactClickResponse
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
