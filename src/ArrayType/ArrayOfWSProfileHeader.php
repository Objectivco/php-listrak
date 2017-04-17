<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSProfileHeader ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSProfileHeader extends AbstractStructArrayBase
{
    /**
     * The WSProfileHeader
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSProfileHeader[]
     */
    public $WSProfileHeader;
    /**
     * Constructor method for ArrayOfWSProfileHeader
     * @uses ArrayOfWSProfileHeader::setWSProfileHeader()
     * @param \StructType\WSProfileHeader[] $wSProfileHeader
     */
    public function __construct(array $wSProfileHeader = array())
    {
        $this
            ->setWSProfileHeader($wSProfileHeader);
    }
    /**
     * Get WSProfileHeader value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSProfileHeader[]|null
     */
    public function getWSProfileHeader()
    {
        return isset($this->WSProfileHeader) ? $this->WSProfileHeader : null;
    }
    /**
     * Set WSProfileHeader value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSProfileHeader[] $wSProfileHeader
     * @return \ArrayType\ArrayOfWSProfileHeader
     */
    public function setWSProfileHeader(array $wSProfileHeader = array())
    {
        foreach ($wSProfileHeader as $arrayOfWSProfileHeaderWSProfileHeaderItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSProfileHeaderWSProfileHeaderItem instanceof \StructType\WSProfileHeader) {
                throw new \InvalidArgumentException(sprintf('The WSProfileHeader property can only contain items of \StructType\WSProfileHeader, "%s" given', is_object($arrayOfWSProfileHeaderWSProfileHeaderItem) ? get_class($arrayOfWSProfileHeaderWSProfileHeaderItem) : gettype($arrayOfWSProfileHeaderWSProfileHeaderItem)), __LINE__);
            }
        }
        if (is_null($wSProfileHeader) || (is_array($wSProfileHeader) && empty($wSProfileHeader))) {
            unset($this->WSProfileHeader);
        } else {
            $this->WSProfileHeader = $wSProfileHeader;
        }
        return $this;
    }
    /**
     * Add item to WSProfileHeader value
     * @throws \InvalidArgumentException
     * @param \StructType\WSProfileHeader $item
     * @return \ArrayType\ArrayOfWSProfileHeader
     */
    public function addToWSProfileHeader(\StructType\WSProfileHeader $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSProfileHeader) {
            throw new \InvalidArgumentException(sprintf('The WSProfileHeader property can only contain items of \StructType\WSProfileHeader, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSProfileHeader[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSProfileHeader|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSProfileHeader|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSProfileHeader|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSProfileHeader|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSProfileHeader|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSProfileHeader
     */
    public function getAttributeName()
    {
        return 'WSProfileHeader';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSProfileHeader
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
