<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportListImportHistoryResponse StructType
 * @subpackage Structs
 */
class ReportListImportHistoryResponse extends AbstractStructBase
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
     * The ReportListImportHistoryResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSImportHistory
     */
    public $ReportListImportHistoryResult;
    /**
     * Constructor method for ReportListImportHistoryResponse
     * @uses ReportListImportHistoryResponse::setWSException()
     * @uses ReportListImportHistoryResponse::setReportListImportHistoryResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSImportHistory $reportListImportHistoryResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSImportHistory $reportListImportHistoryResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportListImportHistoryResult($reportListImportHistoryResult);
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
     * @return \StructType\ReportListImportHistoryResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportListImportHistoryResult value
     * @return \ArrayType\ArrayOfWSImportHistory|null
     */
    public function getReportListImportHistoryResult()
    {
        return $this->ReportListImportHistoryResult;
    }
    /**
     * Set ReportListImportHistoryResult value
     * @param \ArrayType\ArrayOfWSImportHistory $reportListImportHistoryResult
     * @return \StructType\ReportListImportHistoryResponse
     */
    public function setReportListImportHistoryResult(\ArrayType\ArrayOfWSImportHistory $reportListImportHistoryResult = null)
    {
        $this->ReportListImportHistoryResult = $reportListImportHistoryResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportListImportHistoryResponse
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
