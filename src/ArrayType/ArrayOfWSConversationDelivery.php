<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSConversationDelivery ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSConversationDelivery extends AbstractStructArrayBase
{
    /**
     * The WSConversationDelivery
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSConversationDelivery[]
     */
    public $WSConversationDelivery;
    /**
     * Constructor method for ArrayOfWSConversationDelivery
     * @uses ArrayOfWSConversationDelivery::setWSConversationDelivery()
     * @param \StructType\WSConversationDelivery[] $wSConversationDelivery
     */
    public function __construct(array $wSConversationDelivery = array())
    {
        $this
            ->setWSConversationDelivery($wSConversationDelivery);
    }
    /**
     * Get WSConversationDelivery value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSConversationDelivery[]|null
     */
    public function getWSConversationDelivery()
    {
        return isset($this->WSConversationDelivery) ? $this->WSConversationDelivery : null;
    }
    /**
     * Set WSConversationDelivery value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSConversationDelivery[] $wSConversationDelivery
     * @return \ArrayType\ArrayOfWSConversationDelivery
     */
    public function setWSConversationDelivery(array $wSConversationDelivery = array())
    {
        foreach ($wSConversationDelivery as $arrayOfWSConversationDeliveryWSConversationDeliveryItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSConversationDeliveryWSConversationDeliveryItem instanceof \StructType\WSConversationDelivery) {
                throw new \InvalidArgumentException(sprintf('The WSConversationDelivery property can only contain items of \StructType\WSConversationDelivery, "%s" given', is_object($arrayOfWSConversationDeliveryWSConversationDeliveryItem) ? get_class($arrayOfWSConversationDeliveryWSConversationDeliveryItem) : gettype($arrayOfWSConversationDeliveryWSConversationDeliveryItem)), __LINE__);
            }
        }
        if (is_null($wSConversationDelivery) || (is_array($wSConversationDelivery) && empty($wSConversationDelivery))) {
            unset($this->WSConversationDelivery);
        } else {
            $this->WSConversationDelivery = $wSConversationDelivery;
        }
        return $this;
    }
    /**
     * Add item to WSConversationDelivery value
     * @throws \InvalidArgumentException
     * @param \StructType\WSConversationDelivery $item
     * @return \ArrayType\ArrayOfWSConversationDelivery
     */
    public function addToWSConversationDelivery(\StructType\WSConversationDelivery $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSConversationDelivery) {
            throw new \InvalidArgumentException(sprintf('The WSConversationDelivery property can only contain items of \StructType\WSConversationDelivery, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSConversationDelivery[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSConversationDelivery|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSConversationDelivery|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSConversationDelivery|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSConversationDelivery|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSConversationDelivery|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSConversationDelivery
     */
    public function getAttributeName()
    {
        return 'WSConversationDelivery';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSConversationDelivery
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
