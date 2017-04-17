<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportRangeMessageContactPassalongResponse StructType
 * @subpackage Structs
 */
class ReportRangeMessageContactPassalongResponse extends AbstractStructBase
{
    /**
     * The ReportRangeMessageContactPassalongResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSContactPassalong
     */
    public $ReportRangeMessageContactPassalongResult;
    /**
     * Constructor method for ReportRangeMessageContactPassalongResponse
     * @uses ReportRangeMessageContactPassalongResponse::setReportRangeMessageContactPassalongResult()
     * @param \ArrayType\ArrayOfWSContactPassalong $reportRangeMessageContactPassalongResult
     */
    public function __construct(\ArrayType\ArrayOfWSContactPassalong $reportRangeMessageContactPassalongResult = null)
    {
        $this
            ->setReportRangeMessageContactPassalongResult($reportRangeMessageContactPassalongResult);
    }
    /**
     * Get ReportRangeMessageContactPassalongResult value
     * @return \ArrayType\ArrayOfWSContactPassalong|null
     */
    public function getReportRangeMessageContactPassalongResult()
    {
        return $this->ReportRangeMessageContactPassalongResult;
    }
    /**
     * Set ReportRangeMessageContactPassalongResult value
     * @param \ArrayType\ArrayOfWSContactPassalong $reportRangeMessageContactPassalongResult
     * @return \StructType\ReportRangeMessageContactPassalongResponse
     */
    public function setReportRangeMessageContactPassalongResult(\ArrayType\ArrayOfWSContactPassalong $reportRangeMessageContactPassalongResult = null)
    {
        $this->ReportRangeMessageContactPassalongResult = $reportRangeMessageContactPassalongResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportRangeMessageContactPassalongResponse
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
