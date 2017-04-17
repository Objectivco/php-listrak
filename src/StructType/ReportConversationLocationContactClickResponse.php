<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportConversationLocationContactClickResponse StructType
 * @subpackage Structs
 */
class ReportConversationLocationContactClickResponse extends AbstractStructBase
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
     * The ReportConversationLocationContactClickResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSConversationLocationContactClick
     */
    public $ReportConversationLocationContactClickResult;
    /**
     * Constructor method for ReportConversationLocationContactClickResponse
     * @uses ReportConversationLocationContactClickResponse::setWSException()
     * @uses ReportConversationLocationContactClickResponse::setReportConversationLocationContactClickResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSConversationLocationContactClick $reportConversationLocationContactClickResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSConversationLocationContactClick $reportConversationLocationContactClickResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportConversationLocationContactClickResult($reportConversationLocationContactClickResult);
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
     * @return \StructType\ReportConversationLocationContactClickResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportConversationLocationContactClickResult value
     * @return \ArrayType\ArrayOfWSConversationLocationContactClick|null
     */
    public function getReportConversationLocationContactClickResult()
    {
        return $this->ReportConversationLocationContactClickResult;
    }
    /**
     * Set ReportConversationLocationContactClickResult value
     * @param \ArrayType\ArrayOfWSConversationLocationContactClick $reportConversationLocationContactClickResult
     * @return \StructType\ReportConversationLocationContactClickResponse
     */
    public function setReportConversationLocationContactClickResult(\ArrayType\ArrayOfWSConversationLocationContactClick $reportConversationLocationContactClickResult = null)
    {
        $this->ReportConversationLocationContactClickResult = $reportConversationLocationContactClickResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportConversationLocationContactClickResponse
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
