<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateSubscribedContactAttributeWithOptions StructType
 * @subpackage Structs
 */
class UpdateSubscribedContactAttributeWithOptions extends AbstractStructBase
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
     * The WSUpdateSubcribedContactAttributeOptions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSUpdateSubcribedContactAttributeOptions
     */
    public $WSUpdateSubcribedContactAttributeOptions;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Value;
    /**
     * Constructor method for UpdateSubscribedContactAttributeWithOptions
     * @uses UpdateSubscribedContactAttributeWithOptions::setAttributeID()
     * @uses UpdateSubscribedContactAttributeWithOptions::setWSUpdateSubcribedContactAttributeOptions()
     * @uses UpdateSubscribedContactAttributeWithOptions::setValue()
     * @param int $attributeID
     * @param \StructType\WSUpdateSubcribedContactAttributeOptions $wSUpdateSubcribedContactAttributeOptions
     * @param string $value
     */
    public function __construct($attributeID = null, \StructType\WSUpdateSubcribedContactAttributeOptions $wSUpdateSubcribedContactAttributeOptions = null, $value = null)
    {
        $this
            ->setAttributeID($attributeID)
            ->setWSUpdateSubcribedContactAttributeOptions($wSUpdateSubcribedContactAttributeOptions)
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
     * @return \StructType\UpdateSubscribedContactAttributeWithOptions
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
     * Get WSUpdateSubcribedContactAttributeOptions value
     * @return \StructType\WSUpdateSubcribedContactAttributeOptions
     */
    public function getWSUpdateSubcribedContactAttributeOptions()
    {
        return $this->WSUpdateSubcribedContactAttributeOptions;
    }
    /**
     * Set WSUpdateSubcribedContactAttributeOptions value
     * @param \StructType\WSUpdateSubcribedContactAttributeOptions $wSUpdateSubcribedContactAttributeOptions
     * @return \StructType\UpdateSubscribedContactAttributeWithOptions
     */
    public function setWSUpdateSubcribedContactAttributeOptions(\StructType\WSUpdateSubcribedContactAttributeOptions $wSUpdateSubcribedContactAttributeOptions = null)
    {
        $this->WSUpdateSubcribedContactAttributeOptions = $wSUpdateSubcribedContactAttributeOptions;
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
     * @return \StructType\UpdateSubscribedContactAttributeWithOptions
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
     * @return \StructType\UpdateSubscribedContactAttributeWithOptions
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
