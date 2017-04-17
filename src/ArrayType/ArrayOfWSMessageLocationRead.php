<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSMessageLocationRead ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSMessageLocationRead extends AbstractStructArrayBase
{
    /**
     * The WSMessageLocationRead
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSMessageLocationRead[]
     */
    public $WSMessageLocationRead;
    /**
     * Constructor method for ArrayOfWSMessageLocationRead
     * @uses ArrayOfWSMessageLocationRead::setWSMessageLocationRead()
     * @param \StructType\WSMessageLocationRead[] $wSMessageLocationRead
     */
    public function __construct(array $wSMessageLocationRead = array())
    {
        $this
            ->setWSMessageLocationRead($wSMessageLocationRead);
    }
    /**
     * Get WSMessageLocationRead value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSMessageLocationRead[]|null
     */
    public function getWSMessageLocationRead()
    {
        return isset($this->WSMessageLocationRead) ? $this->WSMessageLocationRead : null;
    }
    /**
     * Set WSMessageLocationRead value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSMessageLocationRead[] $wSMessageLocationRead
     * @return \ArrayType\ArrayOfWSMessageLocationRead
     */
    public function setWSMessageLocationRead(array $wSMessageLocationRead = array())
    {
        foreach ($wSMessageLocationRead as $arrayOfWSMessageLocationReadWSMessageLocationReadItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSMessageLocationReadWSMessageLocationReadItem instanceof \StructType\WSMessageLocationRead) {
                throw new \InvalidArgumentException(sprintf('The WSMessageLocationRead property can only contain items of \StructType\WSMessageLocationRead, "%s" given', is_object($arrayOfWSMessageLocationReadWSMessageLocationReadItem) ? get_class($arrayOfWSMessageLocationReadWSMessageLocationReadItem) : gettype($arrayOfWSMessageLocationReadWSMessageLocationReadItem)), __LINE__);
            }
        }
        if (is_null($wSMessageLocationRead) || (is_array($wSMessageLocationRead) && empty($wSMessageLocationRead))) {
            unset($this->WSMessageLocationRead);
        } else {
            $this->WSMessageLocationRead = $wSMessageLocationRead;
        }
        return $this;
    }
    /**
     * Add item to WSMessageLocationRead value
     * @throws \InvalidArgumentException
     * @param \StructType\WSMessageLocationRead $item
     * @return \ArrayType\ArrayOfWSMessageLocationRead
     */
    public function addToWSMessageLocationRead(\StructType\WSMessageLocationRead $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSMessageLocationRead) {
            throw new \InvalidArgumentException(sprintf('The WSMessageLocationRead property can only contain items of \StructType\WSMessageLocationRead, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSMessageLocationRead[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSMessageLocationRead|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSMessageLocationRead|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSMessageLocationRead|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSMessageLocationRead|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSMessageLocationRead|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSMessageLocationRead
     */
    public function getAttributeName()
    {
        return 'WSMessageLocationRead';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSMessageLocationRead
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
