<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSContactClick ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSContactClick extends AbstractStructArrayBase
{
    /**
     * The WSContactClick
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSContactClick[]
     */
    public $WSContactClick;
    /**
     * Constructor method for ArrayOfWSContactClick
     * @uses ArrayOfWSContactClick::setWSContactClick()
     * @param \StructType\WSContactClick[] $wSContactClick
     */
    public function __construct(array $wSContactClick = array())
    {
        $this
            ->setWSContactClick($wSContactClick);
    }
    /**
     * Get WSContactClick value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSContactClick[]|null
     */
    public function getWSContactClick()
    {
        return isset($this->WSContactClick) ? $this->WSContactClick : null;
    }
    /**
     * Set WSContactClick value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSContactClick[] $wSContactClick
     * @return \ArrayType\ArrayOfWSContactClick
     */
    public function setWSContactClick(array $wSContactClick = array())
    {
        foreach ($wSContactClick as $arrayOfWSContactClickWSContactClickItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSContactClickWSContactClickItem instanceof \StructType\WSContactClick) {
                throw new \InvalidArgumentException(sprintf('The WSContactClick property can only contain items of \StructType\WSContactClick, "%s" given', is_object($arrayOfWSContactClickWSContactClickItem) ? get_class($arrayOfWSContactClickWSContactClickItem) : gettype($arrayOfWSContactClickWSContactClickItem)), __LINE__);
            }
        }
        if (is_null($wSContactClick) || (is_array($wSContactClick) && empty($wSContactClick))) {
            unset($this->WSContactClick);
        } else {
            $this->WSContactClick = $wSContactClick;
        }
        return $this;
    }
    /**
     * Add item to WSContactClick value
     * @throws \InvalidArgumentException
     * @param \StructType\WSContactClick $item
     * @return \ArrayType\ArrayOfWSContactClick
     */
    public function addToWSContactClick(\StructType\WSContactClick $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSContactClick) {
            throw new \InvalidArgumentException(sprintf('The WSContactClick property can only contain items of \StructType\WSContactClick, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSContactClick[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSContactClick|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSContactClick|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSContactClick|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSContactClick|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSContactClick|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSContactClick
     */
    public function getAttributeName()
    {
        return 'WSContactClick';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSContactClick
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
