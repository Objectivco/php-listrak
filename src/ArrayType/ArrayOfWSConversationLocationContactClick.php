<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSConversationLocationContactClick ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSConversationLocationContactClick extends AbstractStructArrayBase
{
    /**
     * The WSConversationLocationContactClick
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSConversationLocationContactClick[]
     */
    public $WSConversationLocationContactClick;
    /**
     * Constructor method for ArrayOfWSConversationLocationContactClick
     * @uses ArrayOfWSConversationLocationContactClick::setWSConversationLocationContactClick()
     * @param \StructType\WSConversationLocationContactClick[] $wSConversationLocationContactClick
     */
    public function __construct(array $wSConversationLocationContactClick = array())
    {
        $this
            ->setWSConversationLocationContactClick($wSConversationLocationContactClick);
    }
    /**
     * Get WSConversationLocationContactClick value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSConversationLocationContactClick[]|null
     */
    public function getWSConversationLocationContactClick()
    {
        return isset($this->WSConversationLocationContactClick) ? $this->WSConversationLocationContactClick : null;
    }
    /**
     * Set WSConversationLocationContactClick value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSConversationLocationContactClick[] $wSConversationLocationContactClick
     * @return \ArrayType\ArrayOfWSConversationLocationContactClick
     */
    public function setWSConversationLocationContactClick(array $wSConversationLocationContactClick = array())
    {
        foreach ($wSConversationLocationContactClick as $arrayOfWSConversationLocationContactClickWSConversationLocationContactClickItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSConversationLocationContactClickWSConversationLocationContactClickItem instanceof \StructType\WSConversationLocationContactClick) {
                throw new \InvalidArgumentException(sprintf('The WSConversationLocationContactClick property can only contain items of \StructType\WSConversationLocationContactClick, "%s" given', is_object($arrayOfWSConversationLocationContactClickWSConversationLocationContactClickItem) ? get_class($arrayOfWSConversationLocationContactClickWSConversationLocationContactClickItem) : gettype($arrayOfWSConversationLocationContactClickWSConversationLocationContactClickItem)), __LINE__);
            }
        }
        if (is_null($wSConversationLocationContactClick) || (is_array($wSConversationLocationContactClick) && empty($wSConversationLocationContactClick))) {
            unset($this->WSConversationLocationContactClick);
        } else {
            $this->WSConversationLocationContactClick = $wSConversationLocationContactClick;
        }
        return $this;
    }
    /**
     * Add item to WSConversationLocationContactClick value
     * @throws \InvalidArgumentException
     * @param \StructType\WSConversationLocationContactClick $item
     * @return \ArrayType\ArrayOfWSConversationLocationContactClick
     */
    public function addToWSConversationLocationContactClick(\StructType\WSConversationLocationContactClick $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSConversationLocationContactClick) {
            throw new \InvalidArgumentException(sprintf('The WSConversationLocationContactClick property can only contain items of \StructType\WSConversationLocationContactClick, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSConversationLocationContactClick[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSConversationLocationContactClick|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSConversationLocationContactClick|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSConversationLocationContactClick|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSConversationLocationContactClick|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSConversationLocationContactClick|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSConversationLocationContactClick
     */
    public function getAttributeName()
    {
        return 'WSConversationLocationContactClick';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSConversationLocationContactClick
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
