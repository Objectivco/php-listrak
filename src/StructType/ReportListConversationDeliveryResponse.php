<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportListConversationDeliveryResponse StructType
 * @subpackage Structs
 */
class ReportListConversationDeliveryResponse extends AbstractStructBase
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
     * The ReportListConversationDeliveryResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSConversationDelivery
     */
    public $ReportListConversationDeliveryResult;
    /**
     * Constructor method for ReportListConversationDeliveryResponse
     * @uses ReportListConversationDeliveryResponse::setWSException()
     * @uses ReportListConversationDeliveryResponse::setReportListConversationDeliveryResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSConversationDelivery $reportListConversationDeliveryResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSConversationDelivery $reportListConversationDeliveryResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportListConversationDeliveryResult($reportListConversationDeliveryResult);
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
     * @return \StructType\ReportListConversationDeliveryResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportListConversationDeliveryResult value
     * @return \ArrayType\ArrayOfWSConversationDelivery|null
     */
    public function getReportListConversationDeliveryResult()
    {
        return $this->ReportListConversationDeliveryResult;
    }
    /**
     * Set ReportListConversationDeliveryResult value
     * @param \ArrayType\ArrayOfWSConversationDelivery $reportListConversationDeliveryResult
     * @return \StructType\ReportListConversationDeliveryResponse
     */
    public function setReportListConversationDeliveryResult(\ArrayType\ArrayOfWSConversationDelivery $reportListConversationDeliveryResult = null)
    {
        $this->ReportListConversationDeliveryResult = $reportListConversationDeliveryResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportListConversationDeliveryResponse
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
