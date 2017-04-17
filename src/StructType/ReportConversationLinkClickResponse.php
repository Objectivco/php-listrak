<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportConversationLinkClickResponse StructType
 * @subpackage Structs
 */
class ReportConversationLinkClickResponse extends AbstractStructBase
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
     * The ReportConversationLinkClickResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSConversationLinkClick
     */
    public $ReportConversationLinkClickResult;
    /**
     * Constructor method for ReportConversationLinkClickResponse
     * @uses ReportConversationLinkClickResponse::setWSException()
     * @uses ReportConversationLinkClickResponse::setReportConversationLinkClickResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSConversationLinkClick $reportConversationLinkClickResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSConversationLinkClick $reportConversationLinkClickResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportConversationLinkClickResult($reportConversationLinkClickResult);
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
     * @return \StructType\ReportConversationLinkClickResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportConversationLinkClickResult value
     * @return \ArrayType\ArrayOfWSConversationLinkClick|null
     */
    public function getReportConversationLinkClickResult()
    {
        return $this->ReportConversationLinkClickResult;
    }
    /**
     * Set ReportConversationLinkClickResult value
     * @param \ArrayType\ArrayOfWSConversationLinkClick $reportConversationLinkClickResult
     * @return \StructType\ReportConversationLinkClickResponse
     */
    public function setReportConversationLinkClickResult(\ArrayType\ArrayOfWSConversationLinkClick $reportConversationLinkClickResult = null)
    {
        $this->ReportConversationLinkClickResult = $reportConversationLinkClickResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportConversationLinkClickResponse
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
