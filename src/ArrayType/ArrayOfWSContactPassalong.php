<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSContactPassalong ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSContactPassalong extends AbstractStructArrayBase
{
    /**
     * The WSContactPassalong
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSContactPassalong[]
     */
    public $WSContactPassalong;
    /**
     * Constructor method for ArrayOfWSContactPassalong
     * @uses ArrayOfWSContactPassalong::setWSContactPassalong()
     * @param \StructType\WSContactPassalong[] $wSContactPassalong
     */
    public function __construct(array $wSContactPassalong = array())
    {
        $this
            ->setWSContactPassalong($wSContactPassalong);
    }
    /**
     * Get WSContactPassalong value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSContactPassalong[]|null
     */
    public function getWSContactPassalong()
    {
        return isset($this->WSContactPassalong) ? $this->WSContactPassalong : null;
    }
    /**
     * Set WSContactPassalong value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSContactPassalong[] $wSContactPassalong
     * @return \ArrayType\ArrayOfWSContactPassalong
     */
    public function setWSContactPassalong(array $wSContactPassalong = array())
    {
        foreach ($wSContactPassalong as $arrayOfWSContactPassalongWSContactPassalongItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSContactPassalongWSContactPassalongItem instanceof \StructType\WSContactPassalong) {
                throw new \InvalidArgumentException(sprintf('The WSContactPassalong property can only contain items of \StructType\WSContactPassalong, "%s" given', is_object($arrayOfWSContactPassalongWSContactPassalongItem) ? get_class($arrayOfWSContactPassalongWSContactPassalongItem) : gettype($arrayOfWSContactPassalongWSContactPassalongItem)), __LINE__);
            }
        }
        if (is_null($wSContactPassalong) || (is_array($wSContactPassalong) && empty($wSContactPassalong))) {
            unset($this->WSContactPassalong);
        } else {
            $this->WSContactPassalong = $wSContactPassalong;
        }
        return $this;
    }
    /**
     * Add item to WSContactPassalong value
     * @throws \InvalidArgumentException
     * @param \StructType\WSContactPassalong $item
     * @return \ArrayType\ArrayOfWSContactPassalong
     */
    public function addToWSContactPassalong(\StructType\WSContactPassalong $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSContactPassalong) {
            throw new \InvalidArgumentException(sprintf('The WSContactPassalong property can only contain items of \StructType\WSContactPassalong, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSContactPassalong[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSContactPassalong|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSContactPassalong|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSContactPassalong|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSContactPassalong|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSContactPassalong|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSContactPassalong
     */
    public function getAttributeName()
    {
        return 'WSContactPassalong';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSContactPassalong
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
