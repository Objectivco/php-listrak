<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSContactLinkClick ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSContactLinkClick extends AbstractStructArrayBase
{
    /**
     * The WSContactLinkClick
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSContactLinkClick[]
     */
    public $WSContactLinkClick;
    /**
     * Constructor method for ArrayOfWSContactLinkClick
     * @uses ArrayOfWSContactLinkClick::setWSContactLinkClick()
     * @param \StructType\WSContactLinkClick[] $wSContactLinkClick
     */
    public function __construct(array $wSContactLinkClick = array())
    {
        $this
            ->setWSContactLinkClick($wSContactLinkClick);
    }
    /**
     * Get WSContactLinkClick value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSContactLinkClick[]|null
     */
    public function getWSContactLinkClick()
    {
        return isset($this->WSContactLinkClick) ? $this->WSContactLinkClick : null;
    }
    /**
     * Set WSContactLinkClick value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSContactLinkClick[] $wSContactLinkClick
     * @return \ArrayType\ArrayOfWSContactLinkClick
     */
    public function setWSContactLinkClick(array $wSContactLinkClick = array())
    {
        foreach ($wSContactLinkClick as $arrayOfWSContactLinkClickWSContactLinkClickItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSContactLinkClickWSContactLinkClickItem instanceof \StructType\WSContactLinkClick) {
                throw new \InvalidArgumentException(sprintf('The WSContactLinkClick property can only contain items of \StructType\WSContactLinkClick, "%s" given', is_object($arrayOfWSContactLinkClickWSContactLinkClickItem) ? get_class($arrayOfWSContactLinkClickWSContactLinkClickItem) : gettype($arrayOfWSContactLinkClickWSContactLinkClickItem)), __LINE__);
            }
        }
        if (is_null($wSContactLinkClick) || (is_array($wSContactLinkClick) && empty($wSContactLinkClick))) {
            unset($this->WSContactLinkClick);
        } else {
            $this->WSContactLinkClick = $wSContactLinkClick;
        }
        return $this;
    }
    /**
     * Add item to WSContactLinkClick value
     * @throws \InvalidArgumentException
     * @param \StructType\WSContactLinkClick $item
     * @return \ArrayType\ArrayOfWSContactLinkClick
     */
    public function addToWSContactLinkClick(\StructType\WSContactLinkClick $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSContactLinkClick) {
            throw new \InvalidArgumentException(sprintf('The WSContactLinkClick property can only contain items of \StructType\WSContactLinkClick, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSContactLinkClick[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSContactLinkClick|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSContactLinkClick|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSContactLinkClick|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSContactLinkClick|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSContactLinkClick|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSContactLinkClick
     */
    public function getAttributeName()
    {
        return 'WSContactLinkClick';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSContactLinkClick
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
