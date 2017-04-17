<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportConversationContactReadResponse StructType
 * @subpackage Structs
 */
class ReportConversationContactReadResponse extends AbstractStructBase
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
     * The ReportConversationContactReadResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSConversationContactRead
     */
    public $ReportConversationContactReadResult;
    /**
     * Constructor method for ReportConversationContactReadResponse
     * @uses ReportConversationContactReadResponse::setWSException()
     * @uses ReportConversationContactReadResponse::setReportConversationContactReadResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSConversationContactRead $reportConversationContactReadResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSConversationContactRead $reportConversationContactReadResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportConversationContactReadResult($reportConversationContactReadResult);
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
     * @return \StructType\ReportConversationContactReadResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportConversationContactReadResult value
     * @return \ArrayType\ArrayOfWSConversationContactRead|null
     */
    public function getReportConversationContactReadResult()
    {
        return $this->ReportConversationContactReadResult;
    }
    /**
     * Set ReportConversationContactReadResult value
     * @param \ArrayType\ArrayOfWSConversationContactRead $reportConversationContactReadResult
     * @return \StructType\ReportConversationContactReadResponse
     */
    public function setReportConversationContactReadResult(\ArrayType\ArrayOfWSConversationContactRead $reportConversationContactReadResult = null)
    {
        $this->ReportConversationContactReadResult = $reportConversationContactReadResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportConversationContactReadResponse
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
