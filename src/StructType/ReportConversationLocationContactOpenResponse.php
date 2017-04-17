<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportConversationLocationContactOpenResponse StructType
 * @subpackage Structs
 */
class ReportConversationLocationContactOpenResponse extends AbstractStructBase
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
     * The ReportConversationLocationContactOpenResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSConversationLocationContactOpen
     */
    public $ReportConversationLocationContactOpenResult;
    /**
     * Constructor method for ReportConversationLocationContactOpenResponse
     * @uses ReportConversationLocationContactOpenResponse::setWSException()
     * @uses ReportConversationLocationContactOpenResponse::setReportConversationLocationContactOpenResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSConversationLocationContactOpen $reportConversationLocationContactOpenResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSConversationLocationContactOpen $reportConversationLocationContactOpenResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportConversationLocationContactOpenResult($reportConversationLocationContactOpenResult);
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
     * @return \StructType\ReportConversationLocationContactOpenResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportConversationLocationContactOpenResult value
     * @return \ArrayType\ArrayOfWSConversationLocationContactOpen|null
     */
    public function getReportConversationLocationContactOpenResult()
    {
        return $this->ReportConversationLocationContactOpenResult;
    }
    /**
     * Set ReportConversationLocationContactOpenResult value
     * @param \ArrayType\ArrayOfWSConversationLocationContactOpen $reportConversationLocationContactOpenResult
     * @return \StructType\ReportConversationLocationContactOpenResponse
     */
    public function setReportConversationLocationContactOpenResult(\ArrayType\ArrayOfWSConversationLocationContactOpen $reportConversationLocationContactOpenResult = null)
    {
        $this->ReportConversationLocationContactOpenResult = $reportConversationLocationContactOpenResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportConversationLocationContactOpenResponse
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
