<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSTriggerFileMappings ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSTriggerFileMappings extends AbstractStructArrayBase
{
    /**
     * The WSTriggerFileMappings
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSTriggerFileMappings[]
     */
    public $WSTriggerFileMappings;
    /**
     * Constructor method for ArrayOfWSTriggerFileMappings
     * @uses ArrayOfWSTriggerFileMappings::setWSTriggerFileMappings()
     * @param \StructType\WSTriggerFileMappings[] $wSTriggerFileMappings
     */
    public function __construct(array $wSTriggerFileMappings = array())
    {
        $this
            ->setWSTriggerFileMappings($wSTriggerFileMappings);
    }
    /**
     * Get WSTriggerFileMappings value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSTriggerFileMappings[]|null
     */
    public function getWSTriggerFileMappings()
    {
        return isset($this->WSTriggerFileMappings) ? $this->WSTriggerFileMappings : null;
    }
    /**
     * Set WSTriggerFileMappings value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSTriggerFileMappings[] $wSTriggerFileMappings
     * @return \ArrayType\ArrayOfWSTriggerFileMappings
     */
    public function setWSTriggerFileMappings(array $wSTriggerFileMappings = array())
    {
        foreach ($wSTriggerFileMappings as $arrayOfWSTriggerFileMappingsWSTriggerFileMappingsItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSTriggerFileMappingsWSTriggerFileMappingsItem instanceof \StructType\WSTriggerFileMappings) {
                throw new \InvalidArgumentException(sprintf('The WSTriggerFileMappings property can only contain items of \StructType\WSTriggerFileMappings, "%s" given', is_object($arrayOfWSTriggerFileMappingsWSTriggerFileMappingsItem) ? get_class($arrayOfWSTriggerFileMappingsWSTriggerFileMappingsItem) : gettype($arrayOfWSTriggerFileMappingsWSTriggerFileMappingsItem)), __LINE__);
            }
        }
        if (is_null($wSTriggerFileMappings) || (is_array($wSTriggerFileMappings) && empty($wSTriggerFileMappings))) {
            unset($this->WSTriggerFileMappings);
        } else {
            $this->WSTriggerFileMappings = $wSTriggerFileMappings;
        }
        return $this;
    }
    /**
     * Add item to WSTriggerFileMappings value
     * @throws \InvalidArgumentException
     * @param \StructType\WSTriggerFileMappings $item
     * @return \ArrayType\ArrayOfWSTriggerFileMappings
     */
    public function addToWSTriggerFileMappings(\StructType\WSTriggerFileMappings $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSTriggerFileMappings) {
            throw new \InvalidArgumentException(sprintf('The WSTriggerFileMappings property can only contain items of \StructType\WSTriggerFileMappings, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSTriggerFileMappings[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSTriggerFileMappings|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSTriggerFileMappings|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSTriggerFileMappings|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSTriggerFileMappings|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSTriggerFileMappings|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSTriggerFileMappings
     */
    public function getAttributeName()
    {
        return 'WSTriggerFileMappings';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSTriggerFileMappings
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
