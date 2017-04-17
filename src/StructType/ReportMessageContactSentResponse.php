<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportMessageContactSentResponse StructType
 * @subpackage Structs
 */
class ReportMessageContactSentResponse extends AbstractStructBase
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
     * The ReportMessageContactSentResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSMessageRecipient
     */
    public $ReportMessageContactSentResult;
    /**
     * Constructor method for ReportMessageContactSentResponse
     * @uses ReportMessageContactSentResponse::setWSException()
     * @uses ReportMessageContactSentResponse::setReportMessageContactSentResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSMessageRecipient $reportMessageContactSentResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSMessageRecipient $reportMessageContactSentResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportMessageContactSentResult($reportMessageContactSentResult);
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
     * @return \StructType\ReportMessageContactSentResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportMessageContactSentResult value
     * @return \ArrayType\ArrayOfWSMessageRecipient|null
     */
    public function getReportMessageContactSentResult()
    {
        return $this->ReportMessageContactSentResult;
    }
    /**
     * Set ReportMessageContactSentResult value
     * @param \ArrayType\ArrayOfWSMessageRecipient $reportMessageContactSentResult
     * @return \StructType\ReportMessageContactSentResponse
     */
    public function setReportMessageContactSentResult(\ArrayType\ArrayOfWSMessageRecipient $reportMessageContactSentResult = null)
    {
        $this->ReportMessageContactSentResult = $reportMessageContactSentResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportMessageContactSentResponse
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
