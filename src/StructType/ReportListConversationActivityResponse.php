<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportListConversationActivityResponse StructType
 * @subpackage Structs
 */
class ReportListConversationActivityResponse extends AbstractStructBase
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
     * The ReportListConversationActivityResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSConversationActivity
     */
    public $ReportListConversationActivityResult;
    /**
     * Constructor method for ReportListConversationActivityResponse
     * @uses ReportListConversationActivityResponse::setWSException()
     * @uses ReportListConversationActivityResponse::setReportListConversationActivityResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSConversationActivity $reportListConversationActivityResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSConversationActivity $reportListConversationActivityResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportListConversationActivityResult($reportListConversationActivityResult);
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
     * @return \StructType\ReportListConversationActivityResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportListConversationActivityResult value
     * @return \ArrayType\ArrayOfWSConversationActivity|null
     */
    public function getReportListConversationActivityResult()
    {
        return $this->ReportListConversationActivityResult;
    }
    /**
     * Set ReportListConversationActivityResult value
     * @param \ArrayType\ArrayOfWSConversationActivity $reportListConversationActivityResult
     * @return \StructType\ReportListConversationActivityResponse
     */
    public function setReportListConversationActivityResult(\ArrayType\ArrayOfWSConversationActivity $reportListConversationActivityResult = null)
    {
        $this->ReportListConversationActivityResult = $reportListConversationActivityResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportListConversationActivityResponse
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
