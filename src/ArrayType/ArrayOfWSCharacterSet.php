<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSCharacterSet ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSCharacterSet extends AbstractStructArrayBase
{
    /**
     * The WSCharacterSet
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSCharacterSet[]
     */
    public $WSCharacterSet;
    /**
     * Constructor method for ArrayOfWSCharacterSet
     * @uses ArrayOfWSCharacterSet::setWSCharacterSet()
     * @param \StructType\WSCharacterSet[] $wSCharacterSet
     */
    public function __construct(array $wSCharacterSet = array())
    {
        $this
            ->setWSCharacterSet($wSCharacterSet);
    }
    /**
     * Get WSCharacterSet value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSCharacterSet[]|null
     */
    public function getWSCharacterSet()
    {
        return isset($this->WSCharacterSet) ? $this->WSCharacterSet : null;
    }
    /**
     * Set WSCharacterSet value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSCharacterSet[] $wSCharacterSet
     * @return \ArrayType\ArrayOfWSCharacterSet
     */
    public function setWSCharacterSet(array $wSCharacterSet = array())
    {
        foreach ($wSCharacterSet as $arrayOfWSCharacterSetWSCharacterSetItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSCharacterSetWSCharacterSetItem instanceof \StructType\WSCharacterSet) {
                throw new \InvalidArgumentException(sprintf('The WSCharacterSet property can only contain items of \StructType\WSCharacterSet, "%s" given', is_object($arrayOfWSCharacterSetWSCharacterSetItem) ? get_class($arrayOfWSCharacterSetWSCharacterSetItem) : gettype($arrayOfWSCharacterSetWSCharacterSetItem)), __LINE__);
            }
        }
        if (is_null($wSCharacterSet) || (is_array($wSCharacterSet) && empty($wSCharacterSet))) {
            unset($this->WSCharacterSet);
        } else {
            $this->WSCharacterSet = $wSCharacterSet;
        }
        return $this;
    }
    /**
     * Add item to WSCharacterSet value
     * @throws \InvalidArgumentException
     * @param \StructType\WSCharacterSet $item
     * @return \ArrayType\ArrayOfWSCharacterSet
     */
    public function addToWSCharacterSet(\StructType\WSCharacterSet $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSCharacterSet) {
            throw new \InvalidArgumentException(sprintf('The WSCharacterSet property can only contain items of \StructType\WSCharacterSet, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSCharacterSet[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSCharacterSet|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSCharacterSet|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSCharacterSet|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSCharacterSet|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSCharacterSet|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSCharacterSet
     */
    public function getAttributeName()
    {
        return 'WSCharacterSet';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSCharacterSet
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
