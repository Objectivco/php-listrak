<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSContactMessageActivity ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSContactMessageActivity extends AbstractStructArrayBase
{
    /**
     * The WSContactMessageActivity
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSContactMessageActivity[]
     */
    public $WSContactMessageActivity;
    /**
     * Constructor method for ArrayOfWSContactMessageActivity
     * @uses ArrayOfWSContactMessageActivity::setWSContactMessageActivity()
     * @param \StructType\WSContactMessageActivity[] $wSContactMessageActivity
     */
    public function __construct(array $wSContactMessageActivity = array())
    {
        $this
            ->setWSContactMessageActivity($wSContactMessageActivity);
    }
    /**
     * Get WSContactMessageActivity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSContactMessageActivity[]|null
     */
    public function getWSContactMessageActivity()
    {
        return isset($this->WSContactMessageActivity) ? $this->WSContactMessageActivity : null;
    }
    /**
     * Set WSContactMessageActivity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSContactMessageActivity[] $wSContactMessageActivity
     * @return \ArrayType\ArrayOfWSContactMessageActivity
     */
    public function setWSContactMessageActivity(array $wSContactMessageActivity = array())
    {
        foreach ($wSContactMessageActivity as $arrayOfWSContactMessageActivityWSContactMessageActivityItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSContactMessageActivityWSContactMessageActivityItem instanceof \StructType\WSContactMessageActivity) {
                throw new \InvalidArgumentException(sprintf('The WSContactMessageActivity property can only contain items of \StructType\WSContactMessageActivity, "%s" given', is_object($arrayOfWSContactMessageActivityWSContactMessageActivityItem) ? get_class($arrayOfWSContactMessageActivityWSContactMessageActivityItem) : gettype($arrayOfWSContactMessageActivityWSContactMessageActivityItem)), __LINE__);
            }
        }
        if (is_null($wSContactMessageActivity) || (is_array($wSContactMessageActivity) && empty($wSContactMessageActivity))) {
            unset($this->WSContactMessageActivity);
        } else {
            $this->WSContactMessageActivity = $wSContactMessageActivity;
        }
        return $this;
    }
    /**
     * Add item to WSContactMessageActivity value
     * @throws \InvalidArgumentException
     * @param \StructType\WSContactMessageActivity $item
     * @return \ArrayType\ArrayOfWSContactMessageActivity
     */
    public function addToWSContactMessageActivity(\StructType\WSContactMessageActivity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSContactMessageActivity) {
            throw new \InvalidArgumentException(sprintf('The WSContactMessageActivity property can only contain items of \StructType\WSContactMessageActivity, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSContactMessageActivity[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSContactMessageActivity|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSContactMessageActivity|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSContactMessageActivity|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSContactMessageActivity|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSContactMessageActivity|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSContactMessageActivity
     */
    public function getAttributeName()
    {
        return 'WSContactMessageActivity';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSContactMessageActivity
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
