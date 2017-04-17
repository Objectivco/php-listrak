<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportMessageLocationClickResponse StructType
 * @subpackage Structs
 */
class ReportMessageLocationClickResponse extends AbstractStructBase
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
     * The ReportMessageLocationClickResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSMessageLocationClick
     */
    public $ReportMessageLocationClickResult;
    /**
     * Constructor method for ReportMessageLocationClickResponse
     * @uses ReportMessageLocationClickResponse::setWSException()
     * @uses ReportMessageLocationClickResponse::setReportMessageLocationClickResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSMessageLocationClick $reportMessageLocationClickResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSMessageLocationClick $reportMessageLocationClickResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportMessageLocationClickResult($reportMessageLocationClickResult);
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
     * @return \StructType\ReportMessageLocationClickResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportMessageLocationClickResult value
     * @return \ArrayType\ArrayOfWSMessageLocationClick|null
     */
    public function getReportMessageLocationClickResult()
    {
        return $this->ReportMessageLocationClickResult;
    }
    /**
     * Set ReportMessageLocationClickResult value
     * @param \ArrayType\ArrayOfWSMessageLocationClick $reportMessageLocationClickResult
     * @return \StructType\ReportMessageLocationClickResponse
     */
    public function setReportMessageLocationClickResult(\ArrayType\ArrayOfWSMessageLocationClick $reportMessageLocationClickResult = null)
    {
        $this->ReportMessageLocationClickResult = $reportMessageLocationClickResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportMessageLocationClickResponse
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
