<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportConversationLocationContactReadResponse StructType
 * @subpackage Structs
 */
class ReportConversationLocationContactReadResponse extends AbstractStructBase
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
     * The ReportConversationLocationContactReadResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSConversationLocationContactRead
     */
    public $ReportConversationLocationContactReadResult;
    /**
     * Constructor method for ReportConversationLocationContactReadResponse
     * @uses ReportConversationLocationContactReadResponse::setWSException()
     * @uses ReportConversationLocationContactReadResponse::setReportConversationLocationContactReadResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSConversationLocationContactRead $reportConversationLocationContactReadResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSConversationLocationContactRead $reportConversationLocationContactReadResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportConversationLocationContactReadResult($reportConversationLocationContactReadResult);
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
     * @return \StructType\ReportConversationLocationContactReadResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportConversationLocationContactReadResult value
     * @return \ArrayType\ArrayOfWSConversationLocationContactRead|null
     */
    public function getReportConversationLocationContactReadResult()
    {
        return $this->ReportConversationLocationContactReadResult;
    }
    /**
     * Set ReportConversationLocationContactReadResult value
     * @param \ArrayType\ArrayOfWSConversationLocationContactRead $reportConversationLocationContactReadResult
     * @return \StructType\ReportConversationLocationContactReadResponse
     */
    public function setReportConversationLocationContactReadResult(\ArrayType\ArrayOfWSConversationLocationContactRead $reportConversationLocationContactReadResult = null)
    {
        $this->ReportConversationLocationContactReadResult = $reportConversationLocationContactReadResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportConversationLocationContactReadResponse
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
