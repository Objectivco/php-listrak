<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSConductorExternalEvent ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSConductorExternalEvent extends AbstractStructArrayBase
{
    /**
     * The WSConductorExternalEvent
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSConductorExternalEvent[]
     */
    public $WSConductorExternalEvent;
    /**
     * Constructor method for ArrayOfWSConductorExternalEvent
     * @uses ArrayOfWSConductorExternalEvent::setWSConductorExternalEvent()
     * @param \StructType\WSConductorExternalEvent[] $wSConductorExternalEvent
     */
    public function __construct(array $wSConductorExternalEvent = array())
    {
        $this
            ->setWSConductorExternalEvent($wSConductorExternalEvent);
    }
    /**
     * Get WSConductorExternalEvent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSConductorExternalEvent[]|null
     */
    public function getWSConductorExternalEvent()
    {
        return isset($this->WSConductorExternalEvent) ? $this->WSConductorExternalEvent : null;
    }
    /**
     * Set WSConductorExternalEvent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSConductorExternalEvent[] $wSConductorExternalEvent
     * @return \ArrayType\ArrayOfWSConductorExternalEvent
     */
    public function setWSConductorExternalEvent(array $wSConductorExternalEvent = array())
    {
        foreach ($wSConductorExternalEvent as $arrayOfWSConductorExternalEventWSConductorExternalEventItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSConductorExternalEventWSConductorExternalEventItem instanceof \StructType\WSConductorExternalEvent) {
                throw new \InvalidArgumentException(sprintf('The WSConductorExternalEvent property can only contain items of \StructType\WSConductorExternalEvent, "%s" given', is_object($arrayOfWSConductorExternalEventWSConductorExternalEventItem) ? get_class($arrayOfWSConductorExternalEventWSConductorExternalEventItem) : gettype($arrayOfWSConductorExternalEventWSConductorExternalEventItem)), __LINE__);
            }
        }
        if (is_null($wSConductorExternalEvent) || (is_array($wSConductorExternalEvent) && empty($wSConductorExternalEvent))) {
            unset($this->WSConductorExternalEvent);
        } else {
            $this->WSConductorExternalEvent = $wSConductorExternalEvent;
        }
        return $this;
    }
    /**
     * Add item to WSConductorExternalEvent value
     * @throws \InvalidArgumentException
     * @param \StructType\WSConductorExternalEvent $item
     * @return \ArrayType\ArrayOfWSConductorExternalEvent
     */
    public function addToWSConductorExternalEvent(\StructType\WSConductorExternalEvent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSConductorExternalEvent) {
            throw new \InvalidArgumentException(sprintf('The WSConductorExternalEvent property can only contain items of \StructType\WSConductorExternalEvent, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSConductorExternalEvent[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSConductorExternalEvent|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSConductorExternalEvent|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSConductorExternalEvent|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSConductorExternalEvent|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSConductorExternalEvent|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSConductorExternalEvent
     */
    public function getAttributeName()
    {
        return 'WSConductorExternalEvent';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSConductorExternalEvent
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
