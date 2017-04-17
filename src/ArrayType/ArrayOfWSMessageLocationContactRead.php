<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSMessageLocationContactRead ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSMessageLocationContactRead extends AbstractStructArrayBase
{
    /**
     * The WSMessageLocationContactRead
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSMessageLocationContactRead[]
     */
    public $WSMessageLocationContactRead;
    /**
     * Constructor method for ArrayOfWSMessageLocationContactRead
     * @uses ArrayOfWSMessageLocationContactRead::setWSMessageLocationContactRead()
     * @param \StructType\WSMessageLocationContactRead[] $wSMessageLocationContactRead
     */
    public function __construct(array $wSMessageLocationContactRead = array())
    {
        $this
            ->setWSMessageLocationContactRead($wSMessageLocationContactRead);
    }
    /**
     * Get WSMessageLocationContactRead value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSMessageLocationContactRead[]|null
     */
    public function getWSMessageLocationContactRead()
    {
        return isset($this->WSMessageLocationContactRead) ? $this->WSMessageLocationContactRead : null;
    }
    /**
     * Set WSMessageLocationContactRead value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSMessageLocationContactRead[] $wSMessageLocationContactRead
     * @return \ArrayType\ArrayOfWSMessageLocationContactRead
     */
    public function setWSMessageLocationContactRead(array $wSMessageLocationContactRead = array())
    {
        foreach ($wSMessageLocationContactRead as $arrayOfWSMessageLocationContactReadWSMessageLocationContactReadItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSMessageLocationContactReadWSMessageLocationContactReadItem instanceof \StructType\WSMessageLocationContactRead) {
                throw new \InvalidArgumentException(sprintf('The WSMessageLocationContactRead property can only contain items of \StructType\WSMessageLocationContactRead, "%s" given', is_object($arrayOfWSMessageLocationContactReadWSMessageLocationContactReadItem) ? get_class($arrayOfWSMessageLocationContactReadWSMessageLocationContactReadItem) : gettype($arrayOfWSMessageLocationContactReadWSMessageLocationContactReadItem)), __LINE__);
            }
        }
        if (is_null($wSMessageLocationContactRead) || (is_array($wSMessageLocationContactRead) && empty($wSMessageLocationContactRead))) {
            unset($this->WSMessageLocationContactRead);
        } else {
            $this->WSMessageLocationContactRead = $wSMessageLocationContactRead;
        }
        return $this;
    }
    /**
     * Add item to WSMessageLocationContactRead value
     * @throws \InvalidArgumentException
     * @param \StructType\WSMessageLocationContactRead $item
     * @return \ArrayType\ArrayOfWSMessageLocationContactRead
     */
    public function addToWSMessageLocationContactRead(\StructType\WSMessageLocationContactRead $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSMessageLocationContactRead) {
            throw new \InvalidArgumentException(sprintf('The WSMessageLocationContactRead property can only contain items of \StructType\WSMessageLocationContactRead, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSMessageLocationContactRead[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSMessageLocationContactRead|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSMessageLocationContactRead|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSMessageLocationContactRead|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSMessageLocationContactRead|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSMessageLocationContactRead|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSMessageLocationContactRead
     */
    public function getAttributeName()
    {
        return 'WSMessageLocationContactRead';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSMessageLocationContactRead
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
