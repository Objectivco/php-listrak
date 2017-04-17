<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSMessageRecipient ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSMessageRecipient extends AbstractStructArrayBase
{
    /**
     * The WSMessageRecipient
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSMessageRecipient[]
     */
    public $WSMessageRecipient;
    /**
     * Constructor method for ArrayOfWSMessageRecipient
     * @uses ArrayOfWSMessageRecipient::setWSMessageRecipient()
     * @param \StructType\WSMessageRecipient[] $wSMessageRecipient
     */
    public function __construct(array $wSMessageRecipient = array())
    {
        $this
            ->setWSMessageRecipient($wSMessageRecipient);
    }
    /**
     * Get WSMessageRecipient value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSMessageRecipient[]|null
     */
    public function getWSMessageRecipient()
    {
        return isset($this->WSMessageRecipient) ? $this->WSMessageRecipient : null;
    }
    /**
     * Set WSMessageRecipient value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSMessageRecipient[] $wSMessageRecipient
     * @return \ArrayType\ArrayOfWSMessageRecipient
     */
    public function setWSMessageRecipient(array $wSMessageRecipient = array())
    {
        foreach ($wSMessageRecipient as $arrayOfWSMessageRecipientWSMessageRecipientItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSMessageRecipientWSMessageRecipientItem instanceof \StructType\WSMessageRecipient) {
                throw new \InvalidArgumentException(sprintf('The WSMessageRecipient property can only contain items of \StructType\WSMessageRecipient, "%s" given', is_object($arrayOfWSMessageRecipientWSMessageRecipientItem) ? get_class($arrayOfWSMessageRecipientWSMessageRecipientItem) : gettype($arrayOfWSMessageRecipientWSMessageRecipientItem)), __LINE__);
            }
        }
        if (is_null($wSMessageRecipient) || (is_array($wSMessageRecipient) && empty($wSMessageRecipient))) {
            unset($this->WSMessageRecipient);
        } else {
            $this->WSMessageRecipient = $wSMessageRecipient;
        }
        return $this;
    }
    /**
     * Add item to WSMessageRecipient value
     * @throws \InvalidArgumentException
     * @param \StructType\WSMessageRecipient $item
     * @return \ArrayType\ArrayOfWSMessageRecipient
     */
    public function addToWSMessageRecipient(\StructType\WSMessageRecipient $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSMessageRecipient) {
            throw new \InvalidArgumentException(sprintf('The WSMessageRecipient property can only contain items of \StructType\WSMessageRecipient, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSMessageRecipient[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSMessageRecipient|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSMessageRecipient|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSMessageRecipient|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSMessageRecipient|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSMessageRecipient|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSMessageRecipient
     */
    public function getAttributeName()
    {
        return 'WSMessageRecipient';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSMessageRecipient
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
