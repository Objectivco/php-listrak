<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSConversationLocationContactRead ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSConversationLocationContactRead extends AbstractStructArrayBase
{
    /**
     * The WSConversationLocationContactRead
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSConversationLocationContactRead[]
     */
    public $WSConversationLocationContactRead;
    /**
     * Constructor method for ArrayOfWSConversationLocationContactRead
     * @uses ArrayOfWSConversationLocationContactRead::setWSConversationLocationContactRead()
     * @param \StructType\WSConversationLocationContactRead[] $wSConversationLocationContactRead
     */
    public function __construct(array $wSConversationLocationContactRead = array())
    {
        $this
            ->setWSConversationLocationContactRead($wSConversationLocationContactRead);
    }
    /**
     * Get WSConversationLocationContactRead value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSConversationLocationContactRead[]|null
     */
    public function getWSConversationLocationContactRead()
    {
        return isset($this->WSConversationLocationContactRead) ? $this->WSConversationLocationContactRead : null;
    }
    /**
     * Set WSConversationLocationContactRead value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSConversationLocationContactRead[] $wSConversationLocationContactRead
     * @return \ArrayType\ArrayOfWSConversationLocationContactRead
     */
    public function setWSConversationLocationContactRead(array $wSConversationLocationContactRead = array())
    {
        foreach ($wSConversationLocationContactRead as $arrayOfWSConversationLocationContactReadWSConversationLocationContactReadItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSConversationLocationContactReadWSConversationLocationContactReadItem instanceof \StructType\WSConversationLocationContactRead) {
                throw new \InvalidArgumentException(sprintf('The WSConversationLocationContactRead property can only contain items of \StructType\WSConversationLocationContactRead, "%s" given', is_object($arrayOfWSConversationLocationContactReadWSConversationLocationContactReadItem) ? get_class($arrayOfWSConversationLocationContactReadWSConversationLocationContactReadItem) : gettype($arrayOfWSConversationLocationContactReadWSConversationLocationContactReadItem)), __LINE__);
            }
        }
        if (is_null($wSConversationLocationContactRead) || (is_array($wSConversationLocationContactRead) && empty($wSConversationLocationContactRead))) {
            unset($this->WSConversationLocationContactRead);
        } else {
            $this->WSConversationLocationContactRead = $wSConversationLocationContactRead;
        }
        return $this;
    }
    /**
     * Add item to WSConversationLocationContactRead value
     * @throws \InvalidArgumentException
     * @param \StructType\WSConversationLocationContactRead $item
     * @return \ArrayType\ArrayOfWSConversationLocationContactRead
     */
    public function addToWSConversationLocationContactRead(\StructType\WSConversationLocationContactRead $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSConversationLocationContactRead) {
            throw new \InvalidArgumentException(sprintf('The WSConversationLocationContactRead property can only contain items of \StructType\WSConversationLocationContactRead, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSConversationLocationContactRead[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSConversationLocationContactRead|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSConversationLocationContactRead|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSConversationLocationContactRead|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSConversationLocationContactRead|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSConversationLocationContactRead|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSConversationLocationContactRead
     */
    public function getAttributeName()
    {
        return 'WSConversationLocationContactRead';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSConversationLocationContactRead
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
