<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportListMessageDeliveryResponse StructType
 * @subpackage Structs
 */
class ReportListMessageDeliveryResponse extends AbstractStructBase
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
     * The ReportListMessageDeliveryResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSMessageDelivery
     */
    public $ReportListMessageDeliveryResult;
    /**
     * Constructor method for ReportListMessageDeliveryResponse
     * @uses ReportListMessageDeliveryResponse::setWSException()
     * @uses ReportListMessageDeliveryResponse::setReportListMessageDeliveryResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSMessageDelivery $reportListMessageDeliveryResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSMessageDelivery $reportListMessageDeliveryResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportListMessageDeliveryResult($reportListMessageDeliveryResult);
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
     * @return \StructType\ReportListMessageDeliveryResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportListMessageDeliveryResult value
     * @return \ArrayType\ArrayOfWSMessageDelivery|null
     */
    public function getReportListMessageDeliveryResult()
    {
        return $this->ReportListMessageDeliveryResult;
    }
    /**
     * Set ReportListMessageDeliveryResult value
     * @param \ArrayType\ArrayOfWSMessageDelivery $reportListMessageDeliveryResult
     * @return \StructType\ReportListMessageDeliveryResponse
     */
    public function setReportListMessageDeliveryResult(\ArrayType\ArrayOfWSMessageDelivery $reportListMessageDeliveryResult = null)
    {
        $this->ReportListMessageDeliveryResult = $reportListMessageDeliveryResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportListMessageDeliveryResponse
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
