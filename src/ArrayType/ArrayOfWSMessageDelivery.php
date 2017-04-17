<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSMessageDelivery ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSMessageDelivery extends AbstractStructArrayBase
{
    /**
     * The WSMessageDelivery
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSMessageDelivery[]
     */
    public $WSMessageDelivery;
    /**
     * Constructor method for ArrayOfWSMessageDelivery
     * @uses ArrayOfWSMessageDelivery::setWSMessageDelivery()
     * @param \StructType\WSMessageDelivery[] $wSMessageDelivery
     */
    public function __construct(array $wSMessageDelivery = array())
    {
        $this
            ->setWSMessageDelivery($wSMessageDelivery);
    }
    /**
     * Get WSMessageDelivery value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSMessageDelivery[]|null
     */
    public function getWSMessageDelivery()
    {
        return isset($this->WSMessageDelivery) ? $this->WSMessageDelivery : null;
    }
    /**
     * Set WSMessageDelivery value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSMessageDelivery[] $wSMessageDelivery
     * @return \ArrayType\ArrayOfWSMessageDelivery
     */
    public function setWSMessageDelivery(array $wSMessageDelivery = array())
    {
        foreach ($wSMessageDelivery as $arrayOfWSMessageDeliveryWSMessageDeliveryItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSMessageDeliveryWSMessageDeliveryItem instanceof \StructType\WSMessageDelivery) {
                throw new \InvalidArgumentException(sprintf('The WSMessageDelivery property can only contain items of \StructType\WSMessageDelivery, "%s" given', is_object($arrayOfWSMessageDeliveryWSMessageDeliveryItem) ? get_class($arrayOfWSMessageDeliveryWSMessageDeliveryItem) : gettype($arrayOfWSMessageDeliveryWSMessageDeliveryItem)), __LINE__);
            }
        }
        if (is_null($wSMessageDelivery) || (is_array($wSMessageDelivery) && empty($wSMessageDelivery))) {
            unset($this->WSMessageDelivery);
        } else {
            $this->WSMessageDelivery = $wSMessageDelivery;
        }
        return $this;
    }
    /**
     * Add item to WSMessageDelivery value
     * @throws \InvalidArgumentException
     * @param \StructType\WSMessageDelivery $item
     * @return \ArrayType\ArrayOfWSMessageDelivery
     */
    public function addToWSMessageDelivery(\StructType\WSMessageDelivery $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSMessageDelivery) {
            throw new \InvalidArgumentException(sprintf('The WSMessageDelivery property can only contain items of \StructType\WSMessageDelivery, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSMessageDelivery[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSMessageDelivery|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSMessageDelivery|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSMessageDelivery|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSMessageDelivery|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSMessageDelivery|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSMessageDelivery
     */
    public function getAttributeName()
    {
        return 'WSMessageDelivery';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSMessageDelivery
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
