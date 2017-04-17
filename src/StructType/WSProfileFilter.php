<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSProfileFilter StructType
 * @subpackage Structs
 */
class WSProfileFilter extends AbstractStructBase
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
     * The ProfileCompareType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ProfileCompareType;
    /**
     * The JoinType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $JoinType;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Value;
    /**
     * Constructor method for WSProfileFilter
     * @uses WSProfileFilter::setAttributeID()
     * @uses WSProfileFilter::setProfileCompareType()
     * @uses WSProfileFilter::setJoinType()
     * @uses WSProfileFilter::setValue()
     * @param int $attributeID
     * @param string $profileCompareType
     * @param string $joinType
     * @param string $value
     */
    public function __construct($attributeID = null, $profileCompareType = null, $joinType = null, $value = null)
    {
        $this
            ->setAttributeID($attributeID)
            ->setProfileCompareType($profileCompareType)
            ->setJoinType($joinType)
            ->setValue($value);
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
     * @return \StructType\WSProfileFilter
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
     * Get ProfileCompareType value
     * @return string
     */
    public function getProfileCompareType()
    {
        return $this->ProfileCompareType;
    }
    /**
     * Set ProfileCompareType value
     * @uses \EnumType\ProfileFitlerCompareTypes::valueIsValid()
     * @uses \EnumType\ProfileFitlerCompareTypes::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $profileCompareType
     * @return \StructType\WSProfileFilter
     */
    public function setProfileCompareType($profileCompareType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ProfileFitlerCompareTypes::valueIsValid($profileCompareType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $profileCompareType, implode(', ', \EnumType\ProfileFitlerCompareTypes::getValidValues())), __LINE__);
        }
        $this->ProfileCompareType = $profileCompareType;
        return $this;
    }
    /**
     * Get JoinType value
     * @return string
     */
    public function getJoinType()
    {
        return $this->JoinType;
    }
    /**
     * Set JoinType value
     * @uses \EnumType\JoinTypes::valueIsValid()
     * @uses \EnumType\JoinTypes::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $joinType
     * @return \StructType\WSProfileFilter
     */
    public function setJoinType($joinType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\JoinTypes::valueIsValid($joinType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $joinType, implode(', ', \EnumType\JoinTypes::getValidValues())), __LINE__);
        }
        $this->JoinType = $joinType;
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \StructType\WSProfileFilter
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSProfileFilter
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
