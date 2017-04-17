<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSMessageActivity ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSMessageActivity extends AbstractStructArrayBase
{
    /**
     * The WSMessageActivity
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSMessageActivity[]
     */
    public $WSMessageActivity;
    /**
     * Constructor method for ArrayOfWSMessageActivity
     * @uses ArrayOfWSMessageActivity::setWSMessageActivity()
     * @param \StructType\WSMessageActivity[] $wSMessageActivity
     */
    public function __construct(array $wSMessageActivity = array())
    {
        $this
            ->setWSMessageActivity($wSMessageActivity);
    }
    /**
     * Get WSMessageActivity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSMessageActivity[]|null
     */
    public function getWSMessageActivity()
    {
        return isset($this->WSMessageActivity) ? $this->WSMessageActivity : null;
    }
    /**
     * Set WSMessageActivity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSMessageActivity[] $wSMessageActivity
     * @return \ArrayType\ArrayOfWSMessageActivity
     */
    public function setWSMessageActivity(array $wSMessageActivity = array())
    {
        foreach ($wSMessageActivity as $arrayOfWSMessageActivityWSMessageActivityItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSMessageActivityWSMessageActivityItem instanceof \StructType\WSMessageActivity) {
                throw new \InvalidArgumentException(sprintf('The WSMessageActivity property can only contain items of \StructType\WSMessageActivity, "%s" given', is_object($arrayOfWSMessageActivityWSMessageActivityItem) ? get_class($arrayOfWSMessageActivityWSMessageActivityItem) : gettype($arrayOfWSMessageActivityWSMessageActivityItem)), __LINE__);
            }
        }
        if (is_null($wSMessageActivity) || (is_array($wSMessageActivity) && empty($wSMessageActivity))) {
            unset($this->WSMessageActivity);
        } else {
            $this->WSMessageActivity = $wSMessageActivity;
        }
        return $this;
    }
    /**
     * Add item to WSMessageActivity value
     * @throws \InvalidArgumentException
     * @param \StructType\WSMessageActivity $item
     * @return \ArrayType\ArrayOfWSMessageActivity
     */
    public function addToWSMessageActivity(\StructType\WSMessageActivity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSMessageActivity) {
            throw new \InvalidArgumentException(sprintf('The WSMessageActivity property can only contain items of \StructType\WSMessageActivity, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSMessageActivity[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSMessageActivity|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSMessageActivity|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSMessageActivity|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSMessageActivity|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSMessageActivity|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSMessageActivity
     */
    public function getAttributeName()
    {
        return 'WSMessageActivity';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSMessageActivity
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
