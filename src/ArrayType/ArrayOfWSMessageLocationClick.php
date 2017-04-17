<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSMessageLocationClick ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSMessageLocationClick extends AbstractStructArrayBase
{
    /**
     * The WSMessageLocationClick
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSMessageLocationClick[]
     */
    public $WSMessageLocationClick;
    /**
     * Constructor method for ArrayOfWSMessageLocationClick
     * @uses ArrayOfWSMessageLocationClick::setWSMessageLocationClick()
     * @param \StructType\WSMessageLocationClick[] $wSMessageLocationClick
     */
    public function __construct(array $wSMessageLocationClick = array())
    {
        $this
            ->setWSMessageLocationClick($wSMessageLocationClick);
    }
    /**
     * Get WSMessageLocationClick value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSMessageLocationClick[]|null
     */
    public function getWSMessageLocationClick()
    {
        return isset($this->WSMessageLocationClick) ? $this->WSMessageLocationClick : null;
    }
    /**
     * Set WSMessageLocationClick value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSMessageLocationClick[] $wSMessageLocationClick
     * @return \ArrayType\ArrayOfWSMessageLocationClick
     */
    public function setWSMessageLocationClick(array $wSMessageLocationClick = array())
    {
        foreach ($wSMessageLocationClick as $arrayOfWSMessageLocationClickWSMessageLocationClickItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSMessageLocationClickWSMessageLocationClickItem instanceof \StructType\WSMessageLocationClick) {
                throw new \InvalidArgumentException(sprintf('The WSMessageLocationClick property can only contain items of \StructType\WSMessageLocationClick, "%s" given', is_object($arrayOfWSMessageLocationClickWSMessageLocationClickItem) ? get_class($arrayOfWSMessageLocationClickWSMessageLocationClickItem) : gettype($arrayOfWSMessageLocationClickWSMessageLocationClickItem)), __LINE__);
            }
        }
        if (is_null($wSMessageLocationClick) || (is_array($wSMessageLocationClick) && empty($wSMessageLocationClick))) {
            unset($this->WSMessageLocationClick);
        } else {
            $this->WSMessageLocationClick = $wSMessageLocationClick;
        }
        return $this;
    }
    /**
     * Add item to WSMessageLocationClick value
     * @throws \InvalidArgumentException
     * @param \StructType\WSMessageLocationClick $item
     * @return \ArrayType\ArrayOfWSMessageLocationClick
     */
    public function addToWSMessageLocationClick(\StructType\WSMessageLocationClick $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSMessageLocationClick) {
            throw new \InvalidArgumentException(sprintf('The WSMessageLocationClick property can only contain items of \StructType\WSMessageLocationClick, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSMessageLocationClick[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSMessageLocationClick|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSMessageLocationClick|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSMessageLocationClick|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSMessageLocationClick|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSMessageLocationClick|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSMessageLocationClick
     */
    public function getAttributeName()
    {
        return 'WSMessageLocationClick';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSMessageLocationClick
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
