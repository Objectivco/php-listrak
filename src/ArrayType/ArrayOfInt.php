<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInt ArrayType
 * @subpackage Arrays
 */
class ArrayOfInt extends AbstractStructArrayBase
{
    /**
     * The int
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $int;
    /**
     * Constructor method for ArrayOfInt
     * @uses ArrayOfInt::setInt()
     * @param int[] $int
     */
    public function __construct(array $int = array())
    {
        $this
            ->setInt($int);
    }
    /**
     * Get int value
     * @return int[]|null
     */
    public function getInt()
    {
        return $this->int;
    }
    /**
     * Set int value
     * @throws \InvalidArgumentException
     * @param int[] $int
     * @return \ArrayType\ArrayOfInt
     */
    public function setInt(array $int = array())
    {
        foreach ($int as $arrayOfIntIntItem) {
            // validation for constraint: itemType
            if (!is_numeric($arrayOfIntIntItem)) {
                throw new \InvalidArgumentException(sprintf('The int property can only contain items of int, "%s" given', is_object($arrayOfIntIntItem) ? get_class($arrayOfIntIntItem) : gettype($arrayOfIntIntItem)), __LINE__);
            }
        }
        $this->int = $int;
        return $this;
    }
    /**
     * Add item to int value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \ArrayType\ArrayOfInt
     */
    public function addToInt($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The int property can only contain items of int, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->int[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return int|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return int|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return int|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return int|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return int|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string int
     */
    public function getAttributeName()
    {
        return 'int';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfInt
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
