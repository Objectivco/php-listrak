<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportImportContactDetailResponse StructType
 * @subpackage Structs
 */
class ReportImportContactDetailResponse extends AbstractStructBase
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
     * The ReportImportContactDetailResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSImportContact
     */
    public $ReportImportContactDetailResult;
    /**
     * Constructor method for ReportImportContactDetailResponse
     * @uses ReportImportContactDetailResponse::setWSException()
     * @uses ReportImportContactDetailResponse::setReportImportContactDetailResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSImportContact $reportImportContactDetailResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSImportContact $reportImportContactDetailResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportImportContactDetailResult($reportImportContactDetailResult);
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
     * @return \StructType\ReportImportContactDetailResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportImportContactDetailResult value
     * @return \ArrayType\ArrayOfWSImportContact|null
     */
    public function getReportImportContactDetailResult()
    {
        return $this->ReportImportContactDetailResult;
    }
    /**
     * Set ReportImportContactDetailResult value
     * @param \ArrayType\ArrayOfWSImportContact $reportImportContactDetailResult
     * @return \StructType\ReportImportContactDetailResponse
     */
    public function setReportImportContactDetailResult(\ArrayType\ArrayOfWSImportContact $reportImportContactDetailResult = null)
    {
        $this->ReportImportContactDetailResult = $reportImportContactDetailResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportImportContactDetailResponse
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
