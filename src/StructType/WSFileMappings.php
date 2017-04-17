<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSFileMappings StructType
 * @subpackage Structs
 */
class WSFileMappings extends AbstractStructBase
{
    /**
     * The AttributeID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $AttributeID;
    /**
     * The FileColumn
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $FileColumn;
    /**
     * The IsEmailAddressColumn
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsEmailAddressColumn;
    /**
     * The DefaultValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DefaultValue;
    /**
     * Constructor method for WSFileMappings
     * @uses WSFileMappings::setAttributeID()
     * @uses WSFileMappings::setFileColumn()
     * @uses WSFileMappings::setIsEmailAddressColumn()
     * @uses WSFileMappings::setDefaultValue()
     * @param int $attributeID
     * @param int $fileColumn
     * @param bool $isEmailAddressColumn
     * @param string $defaultValue
     */
    public function __construct($attributeID = null, $fileColumn = null, $isEmailAddressColumn = null, $defaultValue = null)
    {
        $this
            ->setAttributeID($attributeID)
            ->setFileColumn($fileColumn)
            ->setIsEmailAddressColumn($isEmailAddressColumn)
            ->setDefaultValue($defaultValue);
    }
    /**
     * Get AttributeID value
     * @return int
     */
    public function getAttributeID()
    {
        return $this->AttributeID;
    }
    /**
     * Set AttributeID value
     * @param int $attributeID
     * @return \StructType\WSFileMappings
     */
    public function setAttributeID($attributeID = null)
    {
        // validation for constraint: int
        if (!is_null($attributeID) && !is_numeric($attributeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($attributeID)), __LINE__);
        }
        $this->AttributeID = $attributeID;
        return $this;
    }
    /**
     * Get FileColumn value
     * @return int
     */
    public function getFileColumn()
    {
        return $this->FileColumn;
    }
    /**
     * Set FileColumn value
     * @param int $fileColumn
     * @return \StructType\WSFileMappings
     */
    public function setFileColumn($fileColumn = null)
    {
        // validation for constraint: int
        if (!is_null($fileColumn) && !is_numeric($fileColumn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($fileColumn)), __LINE__);
        }
        $this->FileColumn = $fileColumn;
        return $this;
    }
    /**
     * Get IsEmailAddressColumn value
     * @return bool
     */
    public function getIsEmailAddressColumn()
    {
        return $this->IsEmailAddressColumn;
    }
    /**
     * Set IsEmailAddressColumn value
     * @param bool $isEmailAddressColumn
     * @return \StructType\WSFileMappings
     */
    public function setIsEmailAddressColumn($isEmailAddressColumn = null)
    {
        $this->IsEmailAddressColumn = $isEmailAddressColumn;
        return $this;
    }
    /**
     * Get DefaultValue value
     * @return string|null
     */
    public function getDefaultValue()
    {
        return $this->DefaultValue;
    }
    /**
     * Set DefaultValue value
     * @param string $defaultValue
     * @return \StructType\WSFileMappings
     */
    public function setDefaultValue($defaultValue = null)
    {
        // validation for constraint: string
        if (!is_null($defaultValue) && !is_string($defaultValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($defaultValue)), __LINE__);
        }
        $this->DefaultValue = $defaultValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSFileMappings
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
