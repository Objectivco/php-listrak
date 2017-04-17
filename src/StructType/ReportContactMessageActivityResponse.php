<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportContactMessageActivityResponse StructType
 * @subpackage Structs
 */
class ReportContactMessageActivityResponse extends AbstractStructBase
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
     * The ReportContactMessageActivityResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSContactMessageActivity
     */
    public $ReportContactMessageActivityResult;
    /**
     * Constructor method for ReportContactMessageActivityResponse
     * @uses ReportContactMessageActivityResponse::setWSException()
     * @uses ReportContactMessageActivityResponse::setReportContactMessageActivityResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSContactMessageActivity $reportContactMessageActivityResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSContactMessageActivity $reportContactMessageActivityResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportContactMessageActivityResult($reportContactMessageActivityResult);
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
     * @return \StructType\ReportContactMessageActivityResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportContactMessageActivityResult value
     * @return \ArrayType\ArrayOfWSContactMessageActivity|null
     */
    public function getReportContactMessageActivityResult()
    {
        return $this->ReportContactMessageActivityResult;
    }
    /**
     * Set ReportContactMessageActivityResult value
     * @param \ArrayType\ArrayOfWSContactMessageActivity $reportContactMessageActivityResult
     * @return \StructType\ReportContactMessageActivityResponse
     */
    public function setReportContactMessageActivityResult(\ArrayType\ArrayOfWSContactMessageActivity $reportContactMessageActivityResult = null)
    {
        $this->ReportContactMessageActivityResult = $reportContactMessageActivityResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportContactMessageActivityResponse
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
