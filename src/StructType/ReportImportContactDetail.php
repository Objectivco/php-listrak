<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportImportContactDetail StructType
 * @subpackage Structs
 */
class ReportImportContactDetail extends AbstractStructBase
{
    /**
     * The ImportFileID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ImportFileID;
    /**
     * The Page
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Page;
    /**
     * The ImportResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ImportResult;
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
     * Constructor method for ReportImportContactDetail
     * @uses ReportImportContactDetail::setImportFileID()
     * @uses ReportImportContactDetail::setPage()
     * @uses ReportImportContactDetail::setImportResult()
     * @uses ReportImportContactDetail::setWSException()
     * @param int $importFileID
     * @param int $page
     * @param string $importResult
     * @param \StructType\WSException $wSException
     */
    public function __construct($importFileID = null, $page = null, $importResult = null, \StructType\WSException $wSException = null)
    {
        $this
            ->setImportFileID($importFileID)
            ->setPage($page)
            ->setImportResult($importResult)
            ->setWSException($wSException);
    }
    /**
     * Get ImportFileID value
     * @return int
     */
    public function getImportFileID()
    {
        return $this->ImportFileID;
    }
    /**
     * Set ImportFileID value
     * @param int $importFileID
     * @return \StructType\ReportImportContactDetail
     */
    public function setImportFileID($importFileID = null)
    {
        // validation for constraint: int
        if (!is_null($importFileID) && !is_numeric($importFileID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($importFileID)), __LINE__);
        }
        $this->ImportFileID = $importFileID;
        return $this;
    }
    /**
     * Get Page value
     * @return int
     */
    public function getPage()
    {
        return $this->Page;
    }
    /**
     * Set Page value
     * @param int $page
     * @return \StructType\ReportImportContactDetail
     */
    public function setPage($page = null)
    {
        // validation for constraint: int
        if (!is_null($page) && !is_numeric($page)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($page)), __LINE__);
        }
        $this->Page = $page;
        return $this;
    }
    /**
     * Get ImportResult value
     * @return string
     */
    public function getImportResult()
    {
        return $this->ImportResult;
    }
    /**
     * Set ImportResult value
     * @uses \EnumType\WSImportResultEnum::valueIsValid()
     * @uses \EnumType\WSImportResultEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $importResult
     * @return \StructType\ReportImportContactDetail
     */
    public function setImportResult($importResult = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\WSImportResultEnum::valueIsValid($importResult)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $importResult, implode(', ', \EnumType\WSImportResultEnum::getValidValues())), __LINE__);
        }
        $this->ImportResult = $importResult;
        return $this;
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
     * @return \StructType\ReportImportContactDetail
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportImportContactDetail
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
