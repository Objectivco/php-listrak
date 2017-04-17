<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSConversationContactBounce ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSConversationContactBounce extends AbstractStructArrayBase
{
    /**
     * The WSConversationContactBounce
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSConversationContactBounce[]
     */
    public $WSConversationContactBounce;
    /**
     * Constructor method for ArrayOfWSConversationContactBounce
     * @uses ArrayOfWSConversationContactBounce::setWSConversationContactBounce()
     * @param \StructType\WSConversationContactBounce[] $wSConversationContactBounce
     */
    public function __construct(array $wSConversationContactBounce = array())
    {
        $this
            ->setWSConversationContactBounce($wSConversationContactBounce);
    }
    /**
     * Get WSConversationContactBounce value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSConversationContactBounce[]|null
     */
    public function getWSConversationContactBounce()
    {
        return isset($this->WSConversationContactBounce) ? $this->WSConversationContactBounce : null;
    }
    /**
     * Set WSConversationContactBounce value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSConversationContactBounce[] $wSConversationContactBounce
     * @return \ArrayType\ArrayOfWSConversationContactBounce
     */
    public function setWSConversationContactBounce(array $wSConversationContactBounce = array())
    {
        foreach ($wSConversationContactBounce as $arrayOfWSConversationContactBounceWSConversationContactBounceItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSConversationContactBounceWSConversationContactBounceItem instanceof \StructType\WSConversationContactBounce) {
                throw new \InvalidArgumentException(sprintf('The WSConversationContactBounce property can only contain items of \StructType\WSConversationContactBounce, "%s" given', is_object($arrayOfWSConversationContactBounceWSConversationContactBounceItem) ? get_class($arrayOfWSConversationContactBounceWSConversationContactBounceItem) : gettype($arrayOfWSConversationContactBounceWSConversationContactBounceItem)), __LINE__);
            }
        }
        if (is_null($wSConversationContactBounce) || (is_array($wSConversationContactBounce) && empty($wSConversationContactBounce))) {
            unset($this->WSConversationContactBounce);
        } else {
            $this->WSConversationContactBounce = $wSConversationContactBounce;
        }
        return $this;
    }
    /**
     * Add item to WSConversationContactBounce value
     * @throws \InvalidArgumentException
     * @param \StructType\WSConversationContactBounce $item
     * @return \ArrayType\ArrayOfWSConversationContactBounce
     */
    public function addToWSConversationContactBounce(\StructType\WSConversationContactBounce $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSConversationContactBounce) {
            throw new \InvalidArgumentException(sprintf('The WSConversationContactBounce property can only contain items of \StructType\WSConversationContactBounce, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSConversationContactBounce[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSConversationContactBounce|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSConversationContactBounce|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSConversationContactBounce|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSConversationContactBounce|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSConversationContactBounce|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSConversationContactBounce
     */
    public function getAttributeName()
    {
        return 'WSConversationContactBounce';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSConversationContactBounce
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
