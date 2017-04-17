<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSConversationContactOpen ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSConversationContactOpen extends AbstractStructArrayBase
{
    /**
     * The WSConversationContactOpen
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSConversationContactOpen[]
     */
    public $WSConversationContactOpen;
    /**
     * Constructor method for ArrayOfWSConversationContactOpen
     * @uses ArrayOfWSConversationContactOpen::setWSConversationContactOpen()
     * @param \StructType\WSConversationContactOpen[] $wSConversationContactOpen
     */
    public function __construct(array $wSConversationContactOpen = array())
    {
        $this
            ->setWSConversationContactOpen($wSConversationContactOpen);
    }
    /**
     * Get WSConversationContactOpen value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSConversationContactOpen[]|null
     */
    public function getWSConversationContactOpen()
    {
        return isset($this->WSConversationContactOpen) ? $this->WSConversationContactOpen : null;
    }
    /**
     * Set WSConversationContactOpen value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSConversationContactOpen[] $wSConversationContactOpen
     * @return \ArrayType\ArrayOfWSConversationContactOpen
     */
    public function setWSConversationContactOpen(array $wSConversationContactOpen = array())
    {
        foreach ($wSConversationContactOpen as $arrayOfWSConversationContactOpenWSConversationContactOpenItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSConversationContactOpenWSConversationContactOpenItem instanceof \StructType\WSConversationContactOpen) {
                throw new \InvalidArgumentException(sprintf('The WSConversationContactOpen property can only contain items of \StructType\WSConversationContactOpen, "%s" given', is_object($arrayOfWSConversationContactOpenWSConversationContactOpenItem) ? get_class($arrayOfWSConversationContactOpenWSConversationContactOpenItem) : gettype($arrayOfWSConversationContactOpenWSConversationContactOpenItem)), __LINE__);
            }
        }
        if (is_null($wSConversationContactOpen) || (is_array($wSConversationContactOpen) && empty($wSConversationContactOpen))) {
            unset($this->WSConversationContactOpen);
        } else {
            $this->WSConversationContactOpen = $wSConversationContactOpen;
        }
        return $this;
    }
    /**
     * Add item to WSConversationContactOpen value
     * @throws \InvalidArgumentException
     * @param \StructType\WSConversationContactOpen $item
     * @return \ArrayType\ArrayOfWSConversationContactOpen
     */
    public function addToWSConversationContactOpen(\StructType\WSConversationContactOpen $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSConversationContactOpen) {
            throw new \InvalidArgumentException(sprintf('The WSConversationContactOpen property can only contain items of \StructType\WSConversationContactOpen, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSConversationContactOpen[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSConversationContactOpen|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSConversationContactOpen|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSConversationContactOpen|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSConversationContactOpen|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSConversationContactOpen|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSConversationContactOpen
     */
    public function getAttributeName()
    {
        return 'WSConversationContactOpen';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSConversationContactOpen
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
