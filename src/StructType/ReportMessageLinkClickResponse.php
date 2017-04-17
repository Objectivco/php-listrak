<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportMessageLinkClickResponse StructType
 * @subpackage Structs
 */
class ReportMessageLinkClickResponse extends AbstractStructBase
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
     * The ReportMessageLinkClickResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSMessageLink
     */
    public $ReportMessageLinkClickResult;
    /**
     * Constructor method for ReportMessageLinkClickResponse
     * @uses ReportMessageLinkClickResponse::setWSException()
     * @uses ReportMessageLinkClickResponse::setReportMessageLinkClickResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSMessageLink $reportMessageLinkClickResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSMessageLink $reportMessageLinkClickResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportMessageLinkClickResult($reportMessageLinkClickResult);
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
     * @return \StructType\ReportMessageLinkClickResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportMessageLinkClickResult value
     * @return \ArrayType\ArrayOfWSMessageLink|null
     */
    public function getReportMessageLinkClickResult()
    {
        return $this->ReportMessageLinkClickResult;
    }
    /**
     * Set ReportMessageLinkClickResult value
     * @param \ArrayType\ArrayOfWSMessageLink $reportMessageLinkClickResult
     * @return \StructType\ReportMessageLinkClickResponse
     */
    public function setReportMessageLinkClickResult(\ArrayType\ArrayOfWSMessageLink $reportMessageLinkClickResult = null)
    {
        $this->ReportMessageLinkClickResult = $reportMessageLinkClickResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportMessageLinkClickResponse
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
