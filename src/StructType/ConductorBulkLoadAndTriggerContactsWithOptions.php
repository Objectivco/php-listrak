<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConductorBulkLoadAndTriggerContactsWithOptions StructType
 * @subpackage Structs
 */
class ConductorBulkLoadAndTriggerContactsWithOptions extends AbstractStructBase
{
    /**
     * The ListID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ListID;
    /**
     * The WSImportDirectives
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSImportDirectives
     */
    public $WSImportDirectives;
    /**
     * The WSConductorBulkLoadOptions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSConductorBulkLoadOptions
     */
    public $WSConductorBulkLoadOptions;
    /**
     * The TriggerFileMappings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSTriggerFileMappings
     */
    public $TriggerFileMappings;
    /**
     * The ImportFileStream
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ImportFileStream;
    /**
     * Constructor method for ConductorBulkLoadAndTriggerContactsWithOptions
     * @uses ConductorBulkLoadAndTriggerContactsWithOptions::setListID()
     * @uses ConductorBulkLoadAndTriggerContactsWithOptions::setWSImportDirectives()
     * @uses ConductorBulkLoadAndTriggerContactsWithOptions::setWSConductorBulkLoadOptions()
     * @uses ConductorBulkLoadAndTriggerContactsWithOptions::setTriggerFileMappings()
     * @uses ConductorBulkLoadAndTriggerContactsWithOptions::setImportFileStream()
     * @param int $listID
     * @param \StructType\WSImportDirectives $wSImportDirectives
     * @param \StructType\WSConductorBulkLoadOptions $wSConductorBulkLoadOptions
     * @param \ArrayType\ArrayOfWSTriggerFileMappings $triggerFileMappings
     * @param string $importFileStream
     */
    public function __construct($listID = null, \StructType\WSImportDirectives $wSImportDirectives = null, \StructType\WSConductorBulkLoadOptions $wSConductorBulkLoadOptions = null, \ArrayType\ArrayOfWSTriggerFileMappings $triggerFileMappings = null, $importFileStream = null)
    {
        $this
            ->setListID($listID)
            ->setWSImportDirectives($wSImportDirectives)
            ->setWSConductorBulkLoadOptions($wSConductorBulkLoadOptions)
            ->setTriggerFileMappings($triggerFileMappings)
            ->setImportFileStream($importFileStream);
    }
    /**
     * Get ListID value
     * @return int
     */
    public function getListID()
    {
        return $this->ListID;
    }
    /**
     * Set ListID value
     * @param int $listID
     * @return \StructType\ConductorBulkLoadAndTriggerContactsWithOptions
     */
    public function setListID($listID = null)
    {
        // validation for constraint: int
        if (!is_null($listID) && !is_numeric($listID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($listID)), __LINE__);
        }
        $this->ListID = $listID;
        return $this;
    }
    /**
     * Get WSImportDirectives value
     * @return \StructType\WSImportDirectives
     */
    public function getWSImportDirectives()
    {
        return $this->WSImportDirectives;
    }
    /**
     * Set WSImportDirectives value
     * @param \StructType\WSImportDirectives $wSImportDirectives
     * @return \StructType\ConductorBulkLoadAndTriggerContactsWithOptions
     */
    public function setWSImportDirectives(\StructType\WSImportDirectives $wSImportDirectives = null)
    {
        $this->WSImportDirectives = $wSImportDirectives;
        return $this;
    }
    /**
     * Get WSConductorBulkLoadOptions value
     * @return \StructType\WSConductorBulkLoadOptions
     */
    public function getWSConductorBulkLoadOptions()
    {
        return $this->WSConductorBulkLoadOptions;
    }
    /**
     * Set WSConductorBulkLoadOptions value
     * @param \StructType\WSConductorBulkLoadOptions $wSConductorBulkLoadOptions
     * @return \StructType\ConductorBulkLoadAndTriggerContactsWithOptions
     */
    public function setWSConductorBulkLoadOptions(\StructType\WSConductorBulkLoadOptions $wSConductorBulkLoadOptions = null)
    {
        $this->WSConductorBulkLoadOptions = $wSConductorBulkLoadOptions;
        return $this;
    }
    /**
     * Get TriggerFileMappings value
     * @return \ArrayType\ArrayOfWSTriggerFileMappings|null
     */
    public function getTriggerFileMappings()
    {
        return $this->TriggerFileMappings;
    }
    /**
     * Set TriggerFileMappings value
     * @param \ArrayType\ArrayOfWSTriggerFileMappings $triggerFileMappings
     * @return \StructType\ConductorBulkLoadAndTriggerContactsWithOptions
     */
    public function setTriggerFileMappings(\ArrayType\ArrayOfWSTriggerFileMappings $triggerFileMappings = null)
    {
        $this->TriggerFileMappings = $triggerFileMappings;
        return $this;
    }
    /**
     * Get ImportFileStream value
     * @return string|null
     */
    public function getImportFileStream()
    {
        return $this->ImportFileStream;
    }
    /**
     * Set ImportFileStream value
     * @param string $importFileStream
     * @return \StructType\ConductorBulkLoadAndTriggerContactsWithOptions
     */
    public function setImportFileStream($importFileStream = null)
    {
        // validation for constraint: string
        if (!is_null($importFileStream) && !is_string($importFileStream)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($importFileStream)), __LINE__);
        }
        $this->ImportFileStream = $importFileStream;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ConductorBulkLoadAndTriggerContactsWithOptions
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
