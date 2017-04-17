<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSFeedbackLoopListing ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSFeedbackLoopListing extends AbstractStructArrayBase
{
    /**
     * The WSFeedbackLoopListing
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSFeedbackLoopListing[]
     */
    public $WSFeedbackLoopListing;
    /**
     * Constructor method for ArrayOfWSFeedbackLoopListing
     * @uses ArrayOfWSFeedbackLoopListing::setWSFeedbackLoopListing()
     * @param \StructType\WSFeedbackLoopListing[] $wSFeedbackLoopListing
     */
    public function __construct(array $wSFeedbackLoopListing = array())
    {
        $this
            ->setWSFeedbackLoopListing($wSFeedbackLoopListing);
    }
    /**
     * Get WSFeedbackLoopListing value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSFeedbackLoopListing[]|null
     */
    public function getWSFeedbackLoopListing()
    {
        return isset($this->WSFeedbackLoopListing) ? $this->WSFeedbackLoopListing : null;
    }
    /**
     * Set WSFeedbackLoopListing value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSFeedbackLoopListing[] $wSFeedbackLoopListing
     * @return \ArrayType\ArrayOfWSFeedbackLoopListing
     */
    public function setWSFeedbackLoopListing(array $wSFeedbackLoopListing = array())
    {
        foreach ($wSFeedbackLoopListing as $arrayOfWSFeedbackLoopListingWSFeedbackLoopListingItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSFeedbackLoopListingWSFeedbackLoopListingItem instanceof \StructType\WSFeedbackLoopListing) {
                throw new \InvalidArgumentException(sprintf('The WSFeedbackLoopListing property can only contain items of \StructType\WSFeedbackLoopListing, "%s" given', is_object($arrayOfWSFeedbackLoopListingWSFeedbackLoopListingItem) ? get_class($arrayOfWSFeedbackLoopListingWSFeedbackLoopListingItem) : gettype($arrayOfWSFeedbackLoopListingWSFeedbackLoopListingItem)), __LINE__);
            }
        }
        if (is_null($wSFeedbackLoopListing) || (is_array($wSFeedbackLoopListing) && empty($wSFeedbackLoopListing))) {
            unset($this->WSFeedbackLoopListing);
        } else {
            $this->WSFeedbackLoopListing = $wSFeedbackLoopListing;
        }
        return $this;
    }
    /**
     * Add item to WSFeedbackLoopListing value
     * @throws \InvalidArgumentException
     * @param \StructType\WSFeedbackLoopListing $item
     * @return \ArrayType\ArrayOfWSFeedbackLoopListing
     */
    public function addToWSFeedbackLoopListing(\StructType\WSFeedbackLoopListing $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSFeedbackLoopListing) {
            throw new \InvalidArgumentException(sprintf('The WSFeedbackLoopListing property can only contain items of \StructType\WSFeedbackLoopListing, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSFeedbackLoopListing[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSFeedbackLoopListing|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSFeedbackLoopListing|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSFeedbackLoopListing|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSFeedbackLoopListing|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSFeedbackLoopListing|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSFeedbackLoopListing
     */
    public function getAttributeName()
    {
        return 'WSFeedbackLoopListing';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSFeedbackLoopListing
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
