<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSConversationContactRemoval ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSConversationContactRemoval extends AbstractStructArrayBase
{
    /**
     * The WSConversationContactRemoval
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSConversationContactRemoval[]
     */
    public $WSConversationContactRemoval;
    /**
     * Constructor method for ArrayOfWSConversationContactRemoval
     * @uses ArrayOfWSConversationContactRemoval::setWSConversationContactRemoval()
     * @param \StructType\WSConversationContactRemoval[] $wSConversationContactRemoval
     */
    public function __construct(array $wSConversationContactRemoval = array())
    {
        $this
            ->setWSConversationContactRemoval($wSConversationContactRemoval);
    }
    /**
     * Get WSConversationContactRemoval value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSConversationContactRemoval[]|null
     */
    public function getWSConversationContactRemoval()
    {
        return isset($this->WSConversationContactRemoval) ? $this->WSConversationContactRemoval : null;
    }
    /**
     * Set WSConversationContactRemoval value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSConversationContactRemoval[] $wSConversationContactRemoval
     * @return \ArrayType\ArrayOfWSConversationContactRemoval
     */
    public function setWSConversationContactRemoval(array $wSConversationContactRemoval = array())
    {
        foreach ($wSConversationContactRemoval as $arrayOfWSConversationContactRemovalWSConversationContactRemovalItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSConversationContactRemovalWSConversationContactRemovalItem instanceof \StructType\WSConversationContactRemoval) {
                throw new \InvalidArgumentException(sprintf('The WSConversationContactRemoval property can only contain items of \StructType\WSConversationContactRemoval, "%s" given', is_object($arrayOfWSConversationContactRemovalWSConversationContactRemovalItem) ? get_class($arrayOfWSConversationContactRemovalWSConversationContactRemovalItem) : gettype($arrayOfWSConversationContactRemovalWSConversationContactRemovalItem)), __LINE__);
            }
        }
        if (is_null($wSConversationContactRemoval) || (is_array($wSConversationContactRemoval) && empty($wSConversationContactRemoval))) {
            unset($this->WSConversationContactRemoval);
        } else {
            $this->WSConversationContactRemoval = $wSConversationContactRemoval;
        }
        return $this;
    }
    /**
     * Add item to WSConversationContactRemoval value
     * @throws \InvalidArgumentException
     * @param \StructType\WSConversationContactRemoval $item
     * @return \ArrayType\ArrayOfWSConversationContactRemoval
     */
    public function addToWSConversationContactRemoval(\StructType\WSConversationContactRemoval $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSConversationContactRemoval) {
            throw new \InvalidArgumentException(sprintf('The WSConversationContactRemoval property can only contain items of \StructType\WSConversationContactRemoval, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSConversationContactRemoval[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSConversationContactRemoval|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSConversationContactRemoval|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSConversationContactRemoval|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSConversationContactRemoval|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSConversationContactRemoval|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSConversationContactRemoval
     */
    public function getAttributeName()
    {
        return 'WSConversationContactRemoval';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSConversationContactRemoval
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
