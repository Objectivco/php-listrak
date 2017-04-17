<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSConductorConversation ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSConductorConversation extends AbstractStructArrayBase
{
    /**
     * The WSConductorConversation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSConductorConversation[]
     */
    public $WSConductorConversation;
    /**
     * Constructor method for ArrayOfWSConductorConversation
     * @uses ArrayOfWSConductorConversation::setWSConductorConversation()
     * @param \StructType\WSConductorConversation[] $wSConductorConversation
     */
    public function __construct(array $wSConductorConversation = array())
    {
        $this
            ->setWSConductorConversation($wSConductorConversation);
    }
    /**
     * Get WSConductorConversation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSConductorConversation[]|null
     */
    public function getWSConductorConversation()
    {
        return isset($this->WSConductorConversation) ? $this->WSConductorConversation : null;
    }
    /**
     * Set WSConductorConversation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSConductorConversation[] $wSConductorConversation
     * @return \ArrayType\ArrayOfWSConductorConversation
     */
    public function setWSConductorConversation(array $wSConductorConversation = array())
    {
        foreach ($wSConductorConversation as $arrayOfWSConductorConversationWSConductorConversationItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSConductorConversationWSConductorConversationItem instanceof \StructType\WSConductorConversation) {
                throw new \InvalidArgumentException(sprintf('The WSConductorConversation property can only contain items of \StructType\WSConductorConversation, "%s" given', is_object($arrayOfWSConductorConversationWSConductorConversationItem) ? get_class($arrayOfWSConductorConversationWSConductorConversationItem) : gettype($arrayOfWSConductorConversationWSConductorConversationItem)), __LINE__);
            }
        }
        if (is_null($wSConductorConversation) || (is_array($wSConductorConversation) && empty($wSConductorConversation))) {
            unset($this->WSConductorConversation);
        } else {
            $this->WSConductorConversation = $wSConductorConversation;
        }
        return $this;
    }
    /**
     * Add item to WSConductorConversation value
     * @throws \InvalidArgumentException
     * @param \StructType\WSConductorConversation $item
     * @return \ArrayType\ArrayOfWSConductorConversation
     */
    public function addToWSConductorConversation(\StructType\WSConductorConversation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSConductorConversation) {
            throw new \InvalidArgumentException(sprintf('The WSConductorConversation property can only contain items of \StructType\WSConductorConversation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSConductorConversation[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSConductorConversation|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSConductorConversation|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSConductorConversation|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSConductorConversation|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSConductorConversation|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSConductorConversation
     */
    public function getAttributeName()
    {
        return 'WSConductorConversation';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSConductorConversation
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
