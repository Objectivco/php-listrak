<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSConversationLocationContactOpen ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSConversationLocationContactOpen extends AbstractStructArrayBase
{
    /**
     * The WSConversationLocationContactOpen
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSConversationLocationContactOpen[]
     */
    public $WSConversationLocationContactOpen;
    /**
     * Constructor method for ArrayOfWSConversationLocationContactOpen
     * @uses ArrayOfWSConversationLocationContactOpen::setWSConversationLocationContactOpen()
     * @param \StructType\WSConversationLocationContactOpen[] $wSConversationLocationContactOpen
     */
    public function __construct(array $wSConversationLocationContactOpen = array())
    {
        $this
            ->setWSConversationLocationContactOpen($wSConversationLocationContactOpen);
    }
    /**
     * Get WSConversationLocationContactOpen value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSConversationLocationContactOpen[]|null
     */
    public function getWSConversationLocationContactOpen()
    {
        return isset($this->WSConversationLocationContactOpen) ? $this->WSConversationLocationContactOpen : null;
    }
    /**
     * Set WSConversationLocationContactOpen value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSConversationLocationContactOpen[] $wSConversationLocationContactOpen
     * @return \ArrayType\ArrayOfWSConversationLocationContactOpen
     */
    public function setWSConversationLocationContactOpen(array $wSConversationLocationContactOpen = array())
    {
        foreach ($wSConversationLocationContactOpen as $arrayOfWSConversationLocationContactOpenWSConversationLocationContactOpenItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSConversationLocationContactOpenWSConversationLocationContactOpenItem instanceof \StructType\WSConversationLocationContactOpen) {
                throw new \InvalidArgumentException(sprintf('The WSConversationLocationContactOpen property can only contain items of \StructType\WSConversationLocationContactOpen, "%s" given', is_object($arrayOfWSConversationLocationContactOpenWSConversationLocationContactOpenItem) ? get_class($arrayOfWSConversationLocationContactOpenWSConversationLocationContactOpenItem) : gettype($arrayOfWSConversationLocationContactOpenWSConversationLocationContactOpenItem)), __LINE__);
            }
        }
        if (is_null($wSConversationLocationContactOpen) || (is_array($wSConversationLocationContactOpen) && empty($wSConversationLocationContactOpen))) {
            unset($this->WSConversationLocationContactOpen);
        } else {
            $this->WSConversationLocationContactOpen = $wSConversationLocationContactOpen;
        }
        return $this;
    }
    /**
     * Add item to WSConversationLocationContactOpen value
     * @throws \InvalidArgumentException
     * @param \StructType\WSConversationLocationContactOpen $item
     * @return \ArrayType\ArrayOfWSConversationLocationContactOpen
     */
    public function addToWSConversationLocationContactOpen(\StructType\WSConversationLocationContactOpen $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSConversationLocationContactOpen) {
            throw new \InvalidArgumentException(sprintf('The WSConversationLocationContactOpen property can only contain items of \StructType\WSConversationLocationContactOpen, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSConversationLocationContactOpen[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSConversationLocationContactOpen|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSConversationLocationContactOpen|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSConversationLocationContactOpen|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSConversationLocationContactOpen|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSConversationLocationContactOpen|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSConversationLocationContactOpen
     */
    public function getAttributeName()
    {
        return 'WSConversationLocationContactOpen';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSConversationLocationContactOpen
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
