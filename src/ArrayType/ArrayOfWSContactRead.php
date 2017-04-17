<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSContactRead ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSContactRead extends AbstractStructArrayBase
{
    /**
     * The WSContactRead
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSContactRead[]
     */
    public $WSContactRead;
    /**
     * Constructor method for ArrayOfWSContactRead
     * @uses ArrayOfWSContactRead::setWSContactRead()
     * @param \StructType\WSContactRead[] $wSContactRead
     */
    public function __construct(array $wSContactRead = array())
    {
        $this
            ->setWSContactRead($wSContactRead);
    }
    /**
     * Get WSContactRead value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSContactRead[]|null
     */
    public function getWSContactRead()
    {
        return isset($this->WSContactRead) ? $this->WSContactRead : null;
    }
    /**
     * Set WSContactRead value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSContactRead[] $wSContactRead
     * @return \ArrayType\ArrayOfWSContactRead
     */
    public function setWSContactRead(array $wSContactRead = array())
    {
        foreach ($wSContactRead as $arrayOfWSContactReadWSContactReadItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSContactReadWSContactReadItem instanceof \StructType\WSContactRead) {
                throw new \InvalidArgumentException(sprintf('The WSContactRead property can only contain items of \StructType\WSContactRead, "%s" given', is_object($arrayOfWSContactReadWSContactReadItem) ? get_class($arrayOfWSContactReadWSContactReadItem) : gettype($arrayOfWSContactReadWSContactReadItem)), __LINE__);
            }
        }
        if (is_null($wSContactRead) || (is_array($wSContactRead) && empty($wSContactRead))) {
            unset($this->WSContactRead);
        } else {
            $this->WSContactRead = $wSContactRead;
        }
        return $this;
    }
    /**
     * Add item to WSContactRead value
     * @throws \InvalidArgumentException
     * @param \StructType\WSContactRead $item
     * @return \ArrayType\ArrayOfWSContactRead
     */
    public function addToWSContactRead(\StructType\WSContactRead $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSContactRead) {
            throw new \InvalidArgumentException(sprintf('The WSContactRead property can only contain items of \StructType\WSContactRead, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSContactRead[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSContactRead|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSContactRead|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSContactRead|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSContactRead|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSContactRead|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSContactRead
     */
    public function getAttributeName()
    {
        return 'WSContactRead';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSContactRead
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
