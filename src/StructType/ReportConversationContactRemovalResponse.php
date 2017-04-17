<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportConversationContactRemovalResponse StructType
 * @subpackage Structs
 */
class ReportConversationContactRemovalResponse extends AbstractStructBase
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
     * The ReportConversationContactRemovalResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSConversationContactRemoval
     */
    public $ReportConversationContactRemovalResult;
    /**
     * Constructor method for ReportConversationContactRemovalResponse
     * @uses ReportConversationContactRemovalResponse::setWSException()
     * @uses ReportConversationContactRemovalResponse::setReportConversationContactRemovalResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSConversationContactRemoval $reportConversationContactRemovalResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSConversationContactRemoval $reportConversationContactRemovalResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportConversationContactRemovalResult($reportConversationContactRemovalResult);
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
     * @return \StructType\ReportConversationContactRemovalResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportConversationContactRemovalResult value
     * @return \ArrayType\ArrayOfWSConversationContactRemoval|null
     */
    public function getReportConversationContactRemovalResult()
    {
        return $this->ReportConversationContactRemovalResult;
    }
    /**
     * Set ReportConversationContactRemovalResult value
     * @param \ArrayType\ArrayOfWSConversationContactRemoval $reportConversationContactRemovalResult
     * @return \StructType\ReportConversationContactRemovalResponse
     */
    public function setReportConversationContactRemovalResult(\ArrayType\ArrayOfWSConversationContactRemoval $reportConversationContactRemovalResult = null)
    {
        $this->ReportConversationContactRemovalResult = $reportConversationContactRemovalResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportConversationContactRemovalResponse
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
