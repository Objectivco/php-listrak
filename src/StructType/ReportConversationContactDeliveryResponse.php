<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportConversationContactDeliveryResponse StructType
 * @subpackage Structs
 */
class ReportConversationContactDeliveryResponse extends AbstractStructBase
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
     * The ReportConversationContactDeliveryResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSConversationContactDelivery
     */
    public $ReportConversationContactDeliveryResult;
    /**
     * Constructor method for ReportConversationContactDeliveryResponse
     * @uses ReportConversationContactDeliveryResponse::setWSException()
     * @uses ReportConversationContactDeliveryResponse::setReportConversationContactDeliveryResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSConversationContactDelivery $reportConversationContactDeliveryResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSConversationContactDelivery $reportConversationContactDeliveryResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportConversationContactDeliveryResult($reportConversationContactDeliveryResult);
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
     * @return \StructType\ReportConversationContactDeliveryResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportConversationContactDeliveryResult value
     * @return \ArrayType\ArrayOfWSConversationContactDelivery|null
     */
    public function getReportConversationContactDeliveryResult()
    {
        return $this->ReportConversationContactDeliveryResult;
    }
    /**
     * Set ReportConversationContactDeliveryResult value
     * @param \ArrayType\ArrayOfWSConversationContactDelivery $reportConversationContactDeliveryResult
     * @return \StructType\ReportConversationContactDeliveryResponse
     */
    public function setReportConversationContactDeliveryResult(\ArrayType\ArrayOfWSConversationContactDelivery $reportConversationContactDeliveryResult = null)
    {
        $this->ReportConversationContactDeliveryResult = $reportConversationContactDeliveryResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportConversationContactDeliveryResponse
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
