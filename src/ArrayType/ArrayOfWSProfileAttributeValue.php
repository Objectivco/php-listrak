<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSProfileAttributeValue ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSProfileAttributeValue extends AbstractStructArrayBase
{
    /**
     * The WSProfileAttributeValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSProfileAttributeValue[]
     */
    public $WSProfileAttributeValue;
    /**
     * Constructor method for ArrayOfWSProfileAttributeValue
     * @uses ArrayOfWSProfileAttributeValue::setWSProfileAttributeValue()
     * @param \StructType\WSProfileAttributeValue[] $wSProfileAttributeValue
     */
    public function __construct(array $wSProfileAttributeValue = array())
    {
        $this
            ->setWSProfileAttributeValue($wSProfileAttributeValue);
    }
    /**
     * Get WSProfileAttributeValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSProfileAttributeValue[]|null
     */
    public function getWSProfileAttributeValue()
    {
        return isset($this->WSProfileAttributeValue) ? $this->WSProfileAttributeValue : null;
    }
    /**
     * Set WSProfileAttributeValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSProfileAttributeValue[] $wSProfileAttributeValue
     * @return \ArrayType\ArrayOfWSProfileAttributeValue
     */
    public function setWSProfileAttributeValue(array $wSProfileAttributeValue = array())
    {
        foreach ($wSProfileAttributeValue as $arrayOfWSProfileAttributeValueWSProfileAttributeValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSProfileAttributeValueWSProfileAttributeValueItem instanceof \StructType\WSProfileAttributeValue) {
                throw new \InvalidArgumentException(sprintf('The WSProfileAttributeValue property can only contain items of \StructType\WSProfileAttributeValue, "%s" given', is_object($arrayOfWSProfileAttributeValueWSProfileAttributeValueItem) ? get_class($arrayOfWSProfileAttributeValueWSProfileAttributeValueItem) : gettype($arrayOfWSProfileAttributeValueWSProfileAttributeValueItem)), __LINE__);
            }
        }
        if (is_null($wSProfileAttributeValue) || (is_array($wSProfileAttributeValue) && empty($wSProfileAttributeValue))) {
            unset($this->WSProfileAttributeValue);
        } else {
            $this->WSProfileAttributeValue = $wSProfileAttributeValue;
        }
        return $this;
    }
    /**
     * Add item to WSProfileAttributeValue value
     * @throws \InvalidArgumentException
     * @param \StructType\WSProfileAttributeValue $item
     * @return \ArrayType\ArrayOfWSProfileAttributeValue
     */
    public function addToWSProfileAttributeValue(\StructType\WSProfileAttributeValue $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSProfileAttributeValue) {
            throw new \InvalidArgumentException(sprintf('The WSProfileAttributeValue property can only contain items of \StructType\WSProfileAttributeValue, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSProfileAttributeValue[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSProfileAttributeValue|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSProfileAttributeValue|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSProfileAttributeValue|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSProfileAttributeValue|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSProfileAttributeValue|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSProfileAttributeValue
     */
    public function getAttributeName()
    {
        return 'WSProfileAttributeValue';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSProfileAttributeValue
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
