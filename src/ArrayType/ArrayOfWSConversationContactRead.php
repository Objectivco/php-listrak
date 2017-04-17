<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSConversationContactRead ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSConversationContactRead extends AbstractStructArrayBase
{
    /**
     * The WSConversationContactRead
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSConversationContactRead[]
     */
    public $WSConversationContactRead;
    /**
     * Constructor method for ArrayOfWSConversationContactRead
     * @uses ArrayOfWSConversationContactRead::setWSConversationContactRead()
     * @param \StructType\WSConversationContactRead[] $wSConversationContactRead
     */
    public function __construct(array $wSConversationContactRead = array())
    {
        $this
            ->setWSConversationContactRead($wSConversationContactRead);
    }
    /**
     * Get WSConversationContactRead value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSConversationContactRead[]|null
     */
    public function getWSConversationContactRead()
    {
        return isset($this->WSConversationContactRead) ? $this->WSConversationContactRead : null;
    }
    /**
     * Set WSConversationContactRead value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSConversationContactRead[] $wSConversationContactRead
     * @return \ArrayType\ArrayOfWSConversationContactRead
     */
    public function setWSConversationContactRead(array $wSConversationContactRead = array())
    {
        foreach ($wSConversationContactRead as $arrayOfWSConversationContactReadWSConversationContactReadItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSConversationContactReadWSConversationContactReadItem instanceof \StructType\WSConversationContactRead) {
                throw new \InvalidArgumentException(sprintf('The WSConversationContactRead property can only contain items of \StructType\WSConversationContactRead, "%s" given', is_object($arrayOfWSConversationContactReadWSConversationContactReadItem) ? get_class($arrayOfWSConversationContactReadWSConversationContactReadItem) : gettype($arrayOfWSConversationContactReadWSConversationContactReadItem)), __LINE__);
            }
        }
        if (is_null($wSConversationContactRead) || (is_array($wSConversationContactRead) && empty($wSConversationContactRead))) {
            unset($this->WSConversationContactRead);
        } else {
            $this->WSConversationContactRead = $wSConversationContactRead;
        }
        return $this;
    }
    /**
     * Add item to WSConversationContactRead value
     * @throws \InvalidArgumentException
     * @param \StructType\WSConversationContactRead $item
     * @return \ArrayType\ArrayOfWSConversationContactRead
     */
    public function addToWSConversationContactRead(\StructType\WSConversationContactRead $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSConversationContactRead) {
            throw new \InvalidArgumentException(sprintf('The WSConversationContactRead property can only contain items of \StructType\WSConversationContactRead, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSConversationContactRead[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSConversationContactRead|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSConversationContactRead|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSConversationContactRead|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSConversationContactRead|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSConversationContactRead|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSConversationContactRead
     */
    public function getAttributeName()
    {
        return 'WSConversationContactRead';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSConversationContactRead
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
