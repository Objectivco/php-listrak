<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportMessageContactPassalongResponse StructType
 * @subpackage Structs
 */
class ReportMessageContactPassalongResponse extends AbstractStructBase
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
     * The ReportMessageContactPassalongResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSContactPassalong
     */
    public $ReportMessageContactPassalongResult;
    /**
     * Constructor method for ReportMessageContactPassalongResponse
     * @uses ReportMessageContactPassalongResponse::setWSException()
     * @uses ReportMessageContactPassalongResponse::setReportMessageContactPassalongResult()
     * @param \StructType\WSException $wSException
     * @param \ArrayType\ArrayOfWSContactPassalong $reportMessageContactPassalongResult
     */
    public function __construct(\StructType\WSException $wSException = null, \ArrayType\ArrayOfWSContactPassalong $reportMessageContactPassalongResult = null)
    {
        $this
            ->setWSException($wSException)
            ->setReportMessageContactPassalongResult($reportMessageContactPassalongResult);
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
     * @return \StructType\ReportMessageContactPassalongResponse
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Get ReportMessageContactPassalongResult value
     * @return \ArrayType\ArrayOfWSContactPassalong|null
     */
    public function getReportMessageContactPassalongResult()
    {
        return $this->ReportMessageContactPassalongResult;
    }
    /**
     * Set ReportMessageContactPassalongResult value
     * @param \ArrayType\ArrayOfWSContactPassalong $reportMessageContactPassalongResult
     * @return \StructType\ReportMessageContactPassalongResponse
     */
    public function setReportMessageContactPassalongResult(\ArrayType\ArrayOfWSContactPassalong $reportMessageContactPassalongResult = null)
    {
        $this->ReportMessageContactPassalongResult = $reportMessageContactPassalongResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportMessageContactPassalongResponse
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
