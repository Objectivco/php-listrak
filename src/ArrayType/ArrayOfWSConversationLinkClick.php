<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSConversationLinkClick ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSConversationLinkClick extends AbstractStructArrayBase
{
    /**
     * The WSConversationLinkClick
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSConversationLinkClick[]
     */
    public $WSConversationLinkClick;
    /**
     * Constructor method for ArrayOfWSConversationLinkClick
     * @uses ArrayOfWSConversationLinkClick::setWSConversationLinkClick()
     * @param \StructType\WSConversationLinkClick[] $wSConversationLinkClick
     */
    public function __construct(array $wSConversationLinkClick = array())
    {
        $this
            ->setWSConversationLinkClick($wSConversationLinkClick);
    }
    /**
     * Get WSConversationLinkClick value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSConversationLinkClick[]|null
     */
    public function getWSConversationLinkClick()
    {
        return isset($this->WSConversationLinkClick) ? $this->WSConversationLinkClick : null;
    }
    /**
     * Set WSConversationLinkClick value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSConversationLinkClick[] $wSConversationLinkClick
     * @return \ArrayType\ArrayOfWSConversationLinkClick
     */
    public function setWSConversationLinkClick(array $wSConversationLinkClick = array())
    {
        foreach ($wSConversationLinkClick as $arrayOfWSConversationLinkClickWSConversationLinkClickItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSConversationLinkClickWSConversationLinkClickItem instanceof \StructType\WSConversationLinkClick) {
                throw new \InvalidArgumentException(sprintf('The WSConversationLinkClick property can only contain items of \StructType\WSConversationLinkClick, "%s" given', is_object($arrayOfWSConversationLinkClickWSConversationLinkClickItem) ? get_class($arrayOfWSConversationLinkClickWSConversationLinkClickItem) : gettype($arrayOfWSConversationLinkClickWSConversationLinkClickItem)), __LINE__);
            }
        }
        if (is_null($wSConversationLinkClick) || (is_array($wSConversationLinkClick) && empty($wSConversationLinkClick))) {
            unset($this->WSConversationLinkClick);
        } else {
            $this->WSConversationLinkClick = $wSConversationLinkClick;
        }
        return $this;
    }
    /**
     * Add item to WSConversationLinkClick value
     * @throws \InvalidArgumentException
     * @param \StructType\WSConversationLinkClick $item
     * @return \ArrayType\ArrayOfWSConversationLinkClick
     */
    public function addToWSConversationLinkClick(\StructType\WSConversationLinkClick $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSConversationLinkClick) {
            throw new \InvalidArgumentException(sprintf('The WSConversationLinkClick property can only contain items of \StructType\WSConversationLinkClick, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSConversationLinkClick[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSConversationLinkClick|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSConversationLinkClick|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSConversationLinkClick|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSConversationLinkClick|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSConversationLinkClick|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSConversationLinkClick
     */
    public function getAttributeName()
    {
        return 'WSConversationLinkClick';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSConversationLinkClick
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
