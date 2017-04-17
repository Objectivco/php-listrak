<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSContactOpen ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSContactOpen extends AbstractStructArrayBase
{
    /**
     * The WSContactOpen
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSContactOpen[]
     */
    public $WSContactOpen;
    /**
     * Constructor method for ArrayOfWSContactOpen
     * @uses ArrayOfWSContactOpen::setWSContactOpen()
     * @param \StructType\WSContactOpen[] $wSContactOpen
     */
    public function __construct(array $wSContactOpen = array())
    {
        $this
            ->setWSContactOpen($wSContactOpen);
    }
    /**
     * Get WSContactOpen value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSContactOpen[]|null
     */
    public function getWSContactOpen()
    {
        return isset($this->WSContactOpen) ? $this->WSContactOpen : null;
    }
    /**
     * Set WSContactOpen value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSContactOpen[] $wSContactOpen
     * @return \ArrayType\ArrayOfWSContactOpen
     */
    public function setWSContactOpen(array $wSContactOpen = array())
    {
        foreach ($wSContactOpen as $arrayOfWSContactOpenWSContactOpenItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSContactOpenWSContactOpenItem instanceof \StructType\WSContactOpen) {
                throw new \InvalidArgumentException(sprintf('The WSContactOpen property can only contain items of \StructType\WSContactOpen, "%s" given', is_object($arrayOfWSContactOpenWSContactOpenItem) ? get_class($arrayOfWSContactOpenWSContactOpenItem) : gettype($arrayOfWSContactOpenWSContactOpenItem)), __LINE__);
            }
        }
        if (is_null($wSContactOpen) || (is_array($wSContactOpen) && empty($wSContactOpen))) {
            unset($this->WSContactOpen);
        } else {
            $this->WSContactOpen = $wSContactOpen;
        }
        return $this;
    }
    /**
     * Add item to WSContactOpen value
     * @throws \InvalidArgumentException
     * @param \StructType\WSContactOpen $item
     * @return \ArrayType\ArrayOfWSContactOpen
     */
    public function addToWSContactOpen(\StructType\WSContactOpen $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSContactOpen) {
            throw new \InvalidArgumentException(sprintf('The WSContactOpen property can only contain items of \StructType\WSContactOpen, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSContactOpen[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSContactOpen|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSContactOpen|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSContactOpen|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSContactOpen|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSContactOpen|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSContactOpen
     */
    public function getAttributeName()
    {
        return 'WSContactOpen';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSContactOpen
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
