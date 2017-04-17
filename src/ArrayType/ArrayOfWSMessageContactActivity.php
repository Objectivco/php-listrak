<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSMessageContactActivity ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSMessageContactActivity extends AbstractStructArrayBase
{
    /**
     * The WSMessageContactActivity
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSMessageContactActivity[]
     */
    public $WSMessageContactActivity;
    /**
     * Constructor method for ArrayOfWSMessageContactActivity
     * @uses ArrayOfWSMessageContactActivity::setWSMessageContactActivity()
     * @param \StructType\WSMessageContactActivity[] $wSMessageContactActivity
     */
    public function __construct(array $wSMessageContactActivity = array())
    {
        $this
            ->setWSMessageContactActivity($wSMessageContactActivity);
    }
    /**
     * Get WSMessageContactActivity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSMessageContactActivity[]|null
     */
    public function getWSMessageContactActivity()
    {
        return isset($this->WSMessageContactActivity) ? $this->WSMessageContactActivity : null;
    }
    /**
     * Set WSMessageContactActivity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSMessageContactActivity[] $wSMessageContactActivity
     * @return \ArrayType\ArrayOfWSMessageContactActivity
     */
    public function setWSMessageContactActivity(array $wSMessageContactActivity = array())
    {
        foreach ($wSMessageContactActivity as $arrayOfWSMessageContactActivityWSMessageContactActivityItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSMessageContactActivityWSMessageContactActivityItem instanceof \StructType\WSMessageContactActivity) {
                throw new \InvalidArgumentException(sprintf('The WSMessageContactActivity property can only contain items of \StructType\WSMessageContactActivity, "%s" given', is_object($arrayOfWSMessageContactActivityWSMessageContactActivityItem) ? get_class($arrayOfWSMessageContactActivityWSMessageContactActivityItem) : gettype($arrayOfWSMessageContactActivityWSMessageContactActivityItem)), __LINE__);
            }
        }
        if (is_null($wSMessageContactActivity) || (is_array($wSMessageContactActivity) && empty($wSMessageContactActivity))) {
            unset($this->WSMessageContactActivity);
        } else {
            $this->WSMessageContactActivity = $wSMessageContactActivity;
        }
        return $this;
    }
    /**
     * Add item to WSMessageContactActivity value
     * @throws \InvalidArgumentException
     * @param \StructType\WSMessageContactActivity $item
     * @return \ArrayType\ArrayOfWSMessageContactActivity
     */
    public function addToWSMessageContactActivity(\StructType\WSMessageContactActivity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSMessageContactActivity) {
            throw new \InvalidArgumentException(sprintf('The WSMessageContactActivity property can only contain items of \StructType\WSMessageContactActivity, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSMessageContactActivity[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSMessageContactActivity|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSMessageContactActivity|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSMessageContactActivity|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSMessageContactActivity|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSMessageContactActivity|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSMessageContactActivity
     */
    public function getAttributeName()
    {
        return 'WSMessageContactActivity';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSMessageContactActivity
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
