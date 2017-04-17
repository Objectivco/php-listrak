<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportContactLinkClickResponse StructType
 * @subpackage Structs
 */
class ReportContactLinkClickResponse extends AbstractStructBase
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
     * The ReportContactLinkClickResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSContactLinkClick
     */
    public $ReportContactLinkClickResult;
    /**
     * Constructor method for ReportContactLinkClickResponse
     * @uses ReportContactLinkClickResponse::setWSException()
     * @uses ReportContactLinkClickResponse::setReportContactLinkClickResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSContactLinkClick $reportContactLinkClickResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSContactLinkClick $reportContactLinkClickResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportContactLinkClickResult($reportContactLinkClickResult);
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
     * @return \StructType\ReportContactLinkClickResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportContactLinkClickResult value
     * @return \ArrayType\ArrayOfWSContactLinkClick|null
     */
    public function getReportContactLinkClickResult()
    {
        return $this->ReportContactLinkClickResult;
    }
    /**
     * Set ReportContactLinkClickResult value
     * @param \ArrayType\ArrayOfWSContactLinkClick $reportContactLinkClickResult
     * @return \StructType\ReportContactLinkClickResponse
     */
    public function setReportContactLinkClickResult(\ArrayType\ArrayOfWSContactLinkClick $reportContactLinkClickResult = null)
    {
        $this->ReportContactLinkClickResult = $reportContactLinkClickResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportContactLinkClickResponse
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
