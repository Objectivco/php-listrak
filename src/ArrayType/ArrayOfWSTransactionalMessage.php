<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSTransactionalMessage ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSTransactionalMessage extends AbstractStructArrayBase
{
    /**
     * The WSTransactionalMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSTransactionalMessage[]
     */
    public $WSTransactionalMessage;
    /**
     * Constructor method for ArrayOfWSTransactionalMessage
     * @uses ArrayOfWSTransactionalMessage::setWSTransactionalMessage()
     * @param \StructType\WSTransactionalMessage[] $wSTransactionalMessage
     */
    public function __construct(array $wSTransactionalMessage = array())
    {
        $this
            ->setWSTransactionalMessage($wSTransactionalMessage);
    }
    /**
     * Get WSTransactionalMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSTransactionalMessage[]|null
     */
    public function getWSTransactionalMessage()
    {
        return isset($this->WSTransactionalMessage) ? $this->WSTransactionalMessage : null;
    }
    /**
     * Set WSTransactionalMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSTransactionalMessage[] $wSTransactionalMessage
     * @return \ArrayType\ArrayOfWSTransactionalMessage
     */
    public function setWSTransactionalMessage(array $wSTransactionalMessage = array())
    {
        foreach ($wSTransactionalMessage as $arrayOfWSTransactionalMessageWSTransactionalMessageItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSTransactionalMessageWSTransactionalMessageItem instanceof \StructType\WSTransactionalMessage) {
                throw new \InvalidArgumentException(sprintf('The WSTransactionalMessage property can only contain items of \StructType\WSTransactionalMessage, "%s" given', is_object($arrayOfWSTransactionalMessageWSTransactionalMessageItem) ? get_class($arrayOfWSTransactionalMessageWSTransactionalMessageItem) : gettype($arrayOfWSTransactionalMessageWSTransactionalMessageItem)), __LINE__);
            }
        }
        if (is_null($wSTransactionalMessage) || (is_array($wSTransactionalMessage) && empty($wSTransactionalMessage))) {
            unset($this->WSTransactionalMessage);
        } else {
            $this->WSTransactionalMessage = $wSTransactionalMessage;
        }
        return $this;
    }
    /**
     * Add item to WSTransactionalMessage value
     * @throws \InvalidArgumentException
     * @param \StructType\WSTransactionalMessage $item
     * @return \ArrayType\ArrayOfWSTransactionalMessage
     */
    public function addToWSTransactionalMessage(\StructType\WSTransactionalMessage $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSTransactionalMessage) {
            throw new \InvalidArgumentException(sprintf('The WSTransactionalMessage property can only contain items of \StructType\WSTransactionalMessage, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSTransactionalMessage[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSTransactionalMessage|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSTransactionalMessage|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSTransactionalMessage|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSTransactionalMessage|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSTransactionalMessage|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSTransactionalMessage
     */
    public function getAttributeName()
    {
        return 'WSTransactionalMessage';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSTransactionalMessage
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
