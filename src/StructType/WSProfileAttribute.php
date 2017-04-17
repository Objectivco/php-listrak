<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSProfileAttribute StructType
 * @subpackage Structs
 */
class WSProfileAttribute extends AbstractStructBase
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
     * The HeaderID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $HeaderID;
    /**
     * The DataType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DataType;
    /**
     * The MaxLength
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $MaxLength;
    /**
     * The Position
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Position;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * Constructor method for WSProfileAttribute
     * @uses WSProfileAttribute::setAttributeID()
     * @uses WSProfileAttribute::setHeaderID()
     * @uses WSProfileAttribute::setDataType()
     * @uses WSProfileAttribute::setMaxLength()
     * @uses WSProfileAttribute::setPosition()
     * @uses WSProfileAttribute::setName()
     * @param int $attributeID
     * @param int $headerID
     * @param string $dataType
     * @param int $maxLength
     * @param int $position
     * @param string $name
     */
    public function __construct($attributeID = null, $headerID = null, $dataType = null, $maxLength = null, $position = null, $name = null)
    {
        $this
            ->setAttributeID($attributeID)
            ->setHeaderID($headerID)
            ->setDataType($dataType)
            ->setMaxLength($maxLength)
            ->setPosition($position)
            ->setName($name);
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
     * @return \StructType\WSProfileAttribute
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
     * Get HeaderID value
     * @return int
     */
    public function getHeaderID()
    {
        return $this->HeaderID;
    }
    /**
     * Set HeaderID value
     * @param int $headerID
     * @return \StructType\WSProfileAttribute
     */
    public function setHeaderID($headerID = null)
    {
        // validation for constraint: int
        if (!is_null($headerID) && !is_numeric($headerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($headerID)), __LINE__);
        }
        $this->HeaderID = $headerID;
        return $this;
    }
    /**
     * Get DataType value
     * @return string
     */
    public function getDataType()
    {
        return $this->DataType;
    }
    /**
     * Set DataType value
     * @uses \EnumType\DataTypeSettings::valueIsValid()
     * @uses \EnumType\DataTypeSettings::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dataType
     * @return \StructType\WSProfileAttribute
     */
    public function setDataType($dataType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DataTypeSettings::valueIsValid($dataType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dataType, implode(', ', \EnumType\DataTypeSettings::getValidValues())), __LINE__);
        }
        $this->DataType = $dataType;
        return $this;
    }
    /**
     * Get MaxLength value
     * @return int
     */
    public function getMaxLength()
    {
        return $this->MaxLength;
    }
    /**
     * Set MaxLength value
     * @param int $maxLength
     * @return \StructType\WSProfileAttribute
     */
    public function setMaxLength($maxLength = null)
    {
        // validation for constraint: int
        if (!is_null($maxLength) && !is_numeric($maxLength)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxLength)), __LINE__);
        }
        $this->MaxLength = $maxLength;
        return $this;
    }
    /**
     * Get Position value
     * @return int
     */
    public function getPosition()
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param int $position
     * @return \StructType\WSProfileAttribute
     */
    public function setPosition($position = null)
    {
        // validation for constraint: int
        if (!is_null($position) && !is_numeric($position)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($position)), __LINE__);
        }
        $this->Position = $position;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\WSProfileAttribute
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSProfileAttribute
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
