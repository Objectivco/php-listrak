<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportListMessageActivityResponse StructType
 * @subpackage Structs
 */
class ReportListMessageActivityResponse extends AbstractStructBase
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
     * The ReportListMessageActivityResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSMessageActivity
     */
    public $ReportListMessageActivityResult;
    /**
     * Constructor method for ReportListMessageActivityResponse
     * @uses ReportListMessageActivityResponse::setWSException()
     * @uses ReportListMessageActivityResponse::setReportListMessageActivityResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSMessageActivity $reportListMessageActivityResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSMessageActivity $reportListMessageActivityResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportListMessageActivityResult($reportListMessageActivityResult);
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
     * @return \StructType\ReportListMessageActivityResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportListMessageActivityResult value
     * @return \ArrayType\ArrayOfWSMessageActivity|null
     */
    public function getReportListMessageActivityResult()
    {
        return $this->ReportListMessageActivityResult;
    }
    /**
     * Set ReportListMessageActivityResult value
     * @param \ArrayType\ArrayOfWSMessageActivity $reportListMessageActivityResult
     * @return \StructType\ReportListMessageActivityResponse
     */
    public function setReportListMessageActivityResult(\ArrayType\ArrayOfWSMessageActivity $reportListMessageActivityResult = null)
    {
        $this->ReportListMessageActivityResult = $reportListMessageActivityResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportListMessageActivityResponse
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
