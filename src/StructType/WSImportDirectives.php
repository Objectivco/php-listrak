<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSImportDirectives StructType
 * @subpackage Structs
 */
class WSImportDirectives extends AbstractStructBase
{
    /**
     * The ImportTypeEnum
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ImportTypeEnum;
    /**
     * The ImportProfileTypeEnum
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ImportProfileTypeEnum;
    /**
     * The HasColumnNames
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $HasColumnNames;
    /**
     * The FileName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FileName;
    /**
     * The FileDelimiter
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FileDelimiter;
    /**
     * The TextQualifier
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TextQualifier;
    /**
     * Constructor method for WSImportDirectives
     * @uses WSImportDirectives::setImportTypeEnum()
     * @uses WSImportDirectives::setImportProfileTypeEnum()
     * @uses WSImportDirectives::setHasColumnNames()
     * @uses WSImportDirectives::setFileName()
     * @uses WSImportDirectives::setFileDelimiter()
     * @uses WSImportDirectives::setTextQualifier()
     * @param string $importTypeEnum
     * @param string $importProfileTypeEnum
     * @param bool $hasColumnNames
     * @param string $fileName
     * @param string $fileDelimiter
     * @param string $textQualifier
     */
    public function __construct($importTypeEnum = null, $importProfileTypeEnum = null, $hasColumnNames = null, $fileName = null, $fileDelimiter = null, $textQualifier = null)
    {
        $this
            ->setImportTypeEnum($importTypeEnum)
            ->setImportProfileTypeEnum($importProfileTypeEnum)
            ->setHasColumnNames($hasColumnNames)
            ->setFileName($fileName)
            ->setFileDelimiter($fileDelimiter)
            ->setTextQualifier($textQualifier);
    }
    /**
     * Get ImportTypeEnum value
     * @return string
     */
    public function getImportTypeEnum()
    {
        return $this->ImportTypeEnum;
    }
    /**
     * Set ImportTypeEnum value
     * @uses \EnumType\ImportTypeEnum::valueIsValid()
     * @uses \EnumType\ImportTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $importTypeEnum
     * @return \StructType\WSImportDirectives
     */
    public function setImportTypeEnum($importTypeEnum = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ImportTypeEnum::valueIsValid($importTypeEnum)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $importTypeEnum, implode(', ', \EnumType\ImportTypeEnum::getValidValues())), __LINE__);
        }
        $this->ImportTypeEnum = $importTypeEnum;
        return $this;
    }
    /**
     * Get ImportProfileTypeEnum value
     * @return string
     */
    public function getImportProfileTypeEnum()
    {
        return $this->ImportProfileTypeEnum;
    }
    /**
     * Set ImportProfileTypeEnum value
     * @uses \EnumType\ImportProfileTypeEnum::valueIsValid()
     * @uses \EnumType\ImportProfileTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $importProfileTypeEnum
     * @return \StructType\WSImportDirectives
     */
    public function setImportProfileTypeEnum($importProfileTypeEnum = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ImportProfileTypeEnum::valueIsValid($importProfileTypeEnum)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $importProfileTypeEnum, implode(', ', \EnumType\ImportProfileTypeEnum::getValidValues())), __LINE__);
        }
        $this->ImportProfileTypeEnum = $importProfileTypeEnum;
        return $this;
    }
    /**
     * Get HasColumnNames value
     * @return bool
     */
    public function getHasColumnNames()
    {
        return $this->HasColumnNames;
    }
    /**
     * Set HasColumnNames value
     * @param bool $hasColumnNames
     * @return \StructType\WSImportDirectives
     */
    public function setHasColumnNames($hasColumnNames = null)
    {
        $this->HasColumnNames = $hasColumnNames;
        return $this;
    }
    /**
     * Get FileName value
     * @return string|null
     */
    public function getFileName()
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param string $fileName
     * @return \StructType\WSImportDirectives
     */
    public function setFileName($fileName = null)
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileName)), __LINE__);
        }
        $this->FileName = $fileName;
        return $this;
    }
    /**
     * Get FileDelimiter value
     * @return string|null
     */
    public function getFileDelimiter()
    {
        return $this->FileDelimiter;
    }
    /**
     * Set FileDelimiter value
     * @param string $fileDelimiter
     * @return \StructType\WSImportDirectives
     */
    public function setFileDelimiter($fileDelimiter = null)
    {
        // validation for constraint: string
        if (!is_null($fileDelimiter) && !is_string($fileDelimiter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileDelimiter)), __LINE__);
        }
        $this->FileDelimiter = $fileDelimiter;
        return $this;
    }
    /**
     * Get TextQualifier value
     * @return string|null
     */
    public function getTextQualifier()
    {
        return $this->TextQualifier;
    }
    /**
     * Set TextQualifier value
     * @param string $textQualifier
     * @return \StructType\WSImportDirectives
     */
    public function setTextQualifier($textQualifier = null)
    {
        // validation for constraint: string
        if (!is_null($textQualifier) && !is_string($textQualifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($textQualifier)), __LINE__);
        }
        $this->TextQualifier = $textQualifier;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSImportDirectives
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
