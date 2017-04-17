<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportConversationContactOpenResponse StructType
 * @subpackage Structs
 */
class ReportConversationContactOpenResponse extends AbstractStructBase
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
     * The ReportConversationContactOpenResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSConversationContactOpen
     */
    public $ReportConversationContactOpenResult;
    /**
     * Constructor method for ReportConversationContactOpenResponse
     * @uses ReportConversationContactOpenResponse::setWSException()
     * @uses ReportConversationContactOpenResponse::setReportConversationContactOpenResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSConversationContactOpen $reportConversationContactOpenResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSConversationContactOpen $reportConversationContactOpenResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportConversationContactOpenResult($reportConversationContactOpenResult);
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
     * @return \StructType\ReportConversationContactOpenResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportConversationContactOpenResult value
     * @return \ArrayType\ArrayOfWSConversationContactOpen|null
     */
    public function getReportConversationContactOpenResult()
    {
        return $this->ReportConversationContactOpenResult;
    }
    /**
     * Set ReportConversationContactOpenResult value
     * @param \ArrayType\ArrayOfWSConversationContactOpen $reportConversationContactOpenResult
     * @return \StructType\ReportConversationContactOpenResponse
     */
    public function setReportConversationContactOpenResult(\ArrayType\ArrayOfWSConversationContactOpen $reportConversationContactOpenResult = null)
    {
        $this->ReportConversationContactOpenResult = $reportConversationContactOpenResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportConversationContactOpenResponse
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
