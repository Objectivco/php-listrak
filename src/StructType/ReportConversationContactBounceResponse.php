<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportConversationContactBounceResponse StructType
 * @subpackage Structs
 */
class ReportConversationContactBounceResponse extends AbstractStructBase
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
     * The ReportConversationContactBounceResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSConversationContactBounce
     */
    public $ReportConversationContactBounceResult;
    /**
     * Constructor method for ReportConversationContactBounceResponse
     * @uses ReportConversationContactBounceResponse::setWSException()
     * @uses ReportConversationContactBounceResponse::setReportConversationContactBounceResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSConversationContactBounce $reportConversationContactBounceResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSConversationContactBounce $reportConversationContactBounceResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportConversationContactBounceResult($reportConversationContactBounceResult);
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
     * @return \StructType\ReportConversationContactBounceResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportConversationContactBounceResult value
     * @return \ArrayType\ArrayOfWSConversationContactBounce|null
     */
    public function getReportConversationContactBounceResult()
    {
        return $this->ReportConversationContactBounceResult;
    }
    /**
     * Set ReportConversationContactBounceResult value
     * @param \ArrayType\ArrayOfWSConversationContactBounce $reportConversationContactBounceResult
     * @return \StructType\ReportConversationContactBounceResponse
     */
    public function setReportConversationContactBounceResult(\ArrayType\ArrayOfWSConversationContactBounce $reportConversationContactBounceResult = null)
    {
        $this->ReportConversationContactBounceResult = $reportConversationContactBounceResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportConversationContactBounceResponse
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
