<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSMessageLocationContactOpen ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSMessageLocationContactOpen extends AbstractStructArrayBase
{
    /**
     * The WSMessageLocationContactOpen
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSMessageLocationContactOpen[]
     */
    public $WSMessageLocationContactOpen;
    /**
     * Constructor method for ArrayOfWSMessageLocationContactOpen
     * @uses ArrayOfWSMessageLocationContactOpen::setWSMessageLocationContactOpen()
     * @param \StructType\WSMessageLocationContactOpen[] $wSMessageLocationContactOpen
     */
    public function __construct(array $wSMessageLocationContactOpen = array())
    {
        $this
            ->setWSMessageLocationContactOpen($wSMessageLocationContactOpen);
    }
    /**
     * Get WSMessageLocationContactOpen value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSMessageLocationContactOpen[]|null
     */
    public function getWSMessageLocationContactOpen()
    {
        return isset($this->WSMessageLocationContactOpen) ? $this->WSMessageLocationContactOpen : null;
    }
    /**
     * Set WSMessageLocationContactOpen value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSMessageLocationContactOpen[] $wSMessageLocationContactOpen
     * @return \ArrayType\ArrayOfWSMessageLocationContactOpen
     */
    public function setWSMessageLocationContactOpen(array $wSMessageLocationContactOpen = array())
    {
        foreach ($wSMessageLocationContactOpen as $arrayOfWSMessageLocationContactOpenWSMessageLocationContactOpenItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSMessageLocationContactOpenWSMessageLocationContactOpenItem instanceof \StructType\WSMessageLocationContactOpen) {
                throw new \InvalidArgumentException(sprintf('The WSMessageLocationContactOpen property can only contain items of \StructType\WSMessageLocationContactOpen, "%s" given', is_object($arrayOfWSMessageLocationContactOpenWSMessageLocationContactOpenItem) ? get_class($arrayOfWSMessageLocationContactOpenWSMessageLocationContactOpenItem) : gettype($arrayOfWSMessageLocationContactOpenWSMessageLocationContactOpenItem)), __LINE__);
            }
        }
        if (is_null($wSMessageLocationContactOpen) || (is_array($wSMessageLocationContactOpen) && empty($wSMessageLocationContactOpen))) {
            unset($this->WSMessageLocationContactOpen);
        } else {
            $this->WSMessageLocationContactOpen = $wSMessageLocationContactOpen;
        }
        return $this;
    }
    /**
     * Add item to WSMessageLocationContactOpen value
     * @throws \InvalidArgumentException
     * @param \StructType\WSMessageLocationContactOpen $item
     * @return \ArrayType\ArrayOfWSMessageLocationContactOpen
     */
    public function addToWSMessageLocationContactOpen(\StructType\WSMessageLocationContactOpen $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSMessageLocationContactOpen) {
            throw new \InvalidArgumentException(sprintf('The WSMessageLocationContactOpen property can only contain items of \StructType\WSMessageLocationContactOpen, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSMessageLocationContactOpen[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSMessageLocationContactOpen|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSMessageLocationContactOpen|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSMessageLocationContactOpen|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSMessageLocationContactOpen|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSMessageLocationContactOpen|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSMessageLocationContactOpen
     */
    public function getAttributeName()
    {
        return 'WSMessageLocationContactOpen';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSMessageLocationContactOpen
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
