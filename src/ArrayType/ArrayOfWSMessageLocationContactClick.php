<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSMessageLocationContactClick ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSMessageLocationContactClick extends AbstractStructArrayBase
{
    /**
     * The WSMessageLocationContactClick
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSMessageLocationContactClick[]
     */
    public $WSMessageLocationContactClick;
    /**
     * Constructor method for ArrayOfWSMessageLocationContactClick
     * @uses ArrayOfWSMessageLocationContactClick::setWSMessageLocationContactClick()
     * @param \StructType\WSMessageLocationContactClick[] $wSMessageLocationContactClick
     */
    public function __construct(array $wSMessageLocationContactClick = array())
    {
        $this
            ->setWSMessageLocationContactClick($wSMessageLocationContactClick);
    }
    /**
     * Get WSMessageLocationContactClick value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSMessageLocationContactClick[]|null
     */
    public function getWSMessageLocationContactClick()
    {
        return isset($this->WSMessageLocationContactClick) ? $this->WSMessageLocationContactClick : null;
    }
    /**
     * Set WSMessageLocationContactClick value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSMessageLocationContactClick[] $wSMessageLocationContactClick
     * @return \ArrayType\ArrayOfWSMessageLocationContactClick
     */
    public function setWSMessageLocationContactClick(array $wSMessageLocationContactClick = array())
    {
        foreach ($wSMessageLocationContactClick as $arrayOfWSMessageLocationContactClickWSMessageLocationContactClickItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSMessageLocationContactClickWSMessageLocationContactClickItem instanceof \StructType\WSMessageLocationContactClick) {
                throw new \InvalidArgumentException(sprintf('The WSMessageLocationContactClick property can only contain items of \StructType\WSMessageLocationContactClick, "%s" given', is_object($arrayOfWSMessageLocationContactClickWSMessageLocationContactClickItem) ? get_class($arrayOfWSMessageLocationContactClickWSMessageLocationContactClickItem) : gettype($arrayOfWSMessageLocationContactClickWSMessageLocationContactClickItem)), __LINE__);
            }
        }
        if (is_null($wSMessageLocationContactClick) || (is_array($wSMessageLocationContactClick) && empty($wSMessageLocationContactClick))) {
            unset($this->WSMessageLocationContactClick);
        } else {
            $this->WSMessageLocationContactClick = $wSMessageLocationContactClick;
        }
        return $this;
    }
    /**
     * Add item to WSMessageLocationContactClick value
     * @throws \InvalidArgumentException
     * @param \StructType\WSMessageLocationContactClick $item
     * @return \ArrayType\ArrayOfWSMessageLocationContactClick
     */
    public function addToWSMessageLocationContactClick(\StructType\WSMessageLocationContactClick $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSMessageLocationContactClick) {
            throw new \InvalidArgumentException(sprintf('The WSMessageLocationContactClick property can only contain items of \StructType\WSMessageLocationContactClick, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSMessageLocationContactClick[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSMessageLocationContactClick|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSMessageLocationContactClick|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSMessageLocationContactClick|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSMessageLocationContactClick|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSMessageLocationContactClick|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSMessageLocationContactClick
     */
    public function getAttributeName()
    {
        return 'WSMessageLocationContactClick';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSMessageLocationContactClick
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
