<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSConversationContactDelivery ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSConversationContactDelivery extends AbstractStructArrayBase
{
    /**
     * The WSConversationContactDelivery
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSConversationContactDelivery[]
     */
    public $WSConversationContactDelivery;
    /**
     * Constructor method for ArrayOfWSConversationContactDelivery
     * @uses ArrayOfWSConversationContactDelivery::setWSConversationContactDelivery()
     * @param \StructType\WSConversationContactDelivery[] $wSConversationContactDelivery
     */
    public function __construct(array $wSConversationContactDelivery = array())
    {
        $this
            ->setWSConversationContactDelivery($wSConversationContactDelivery);
    }
    /**
     * Get WSConversationContactDelivery value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSConversationContactDelivery[]|null
     */
    public function getWSConversationContactDelivery()
    {
        return isset($this->WSConversationContactDelivery) ? $this->WSConversationContactDelivery : null;
    }
    /**
     * Set WSConversationContactDelivery value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSConversationContactDelivery[] $wSConversationContactDelivery
     * @return \ArrayType\ArrayOfWSConversationContactDelivery
     */
    public function setWSConversationContactDelivery(array $wSConversationContactDelivery = array())
    {
        foreach ($wSConversationContactDelivery as $arrayOfWSConversationContactDeliveryWSConversationContactDeliveryItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSConversationContactDeliveryWSConversationContactDeliveryItem instanceof \StructType\WSConversationContactDelivery) {
                throw new \InvalidArgumentException(sprintf('The WSConversationContactDelivery property can only contain items of \StructType\WSConversationContactDelivery, "%s" given', is_object($arrayOfWSConversationContactDeliveryWSConversationContactDeliveryItem) ? get_class($arrayOfWSConversationContactDeliveryWSConversationContactDeliveryItem) : gettype($arrayOfWSConversationContactDeliveryWSConversationContactDeliveryItem)), __LINE__);
            }
        }
        if (is_null($wSConversationContactDelivery) || (is_array($wSConversationContactDelivery) && empty($wSConversationContactDelivery))) {
            unset($this->WSConversationContactDelivery);
        } else {
            $this->WSConversationContactDelivery = $wSConversationContactDelivery;
        }
        return $this;
    }
    /**
     * Add item to WSConversationContactDelivery value
     * @throws \InvalidArgumentException
     * @param \StructType\WSConversationContactDelivery $item
     * @return \ArrayType\ArrayOfWSConversationContactDelivery
     */
    public function addToWSConversationContactDelivery(\StructType\WSConversationContactDelivery $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSConversationContactDelivery) {
            throw new \InvalidArgumentException(sprintf('The WSConversationContactDelivery property can only contain items of \StructType\WSConversationContactDelivery, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSConversationContactDelivery[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSConversationContactDelivery|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSConversationContactDelivery|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSConversationContactDelivery|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSConversationContactDelivery|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSConversationContactDelivery|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSConversationContactDelivery
     */
    public function getAttributeName()
    {
        return 'WSConversationContactDelivery';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSConversationContactDelivery
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
