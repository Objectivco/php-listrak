<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSMessageLink ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSMessageLink extends AbstractStructArrayBase
{
    /**
     * The WSMessageLink
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSMessageLink[]
     */
    public $WSMessageLink;
    /**
     * Constructor method for ArrayOfWSMessageLink
     * @uses ArrayOfWSMessageLink::setWSMessageLink()
     * @param \StructType\WSMessageLink[] $wSMessageLink
     */
    public function __construct(array $wSMessageLink = array())
    {
        $this
            ->setWSMessageLink($wSMessageLink);
    }
    /**
     * Get WSMessageLink value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSMessageLink[]|null
     */
    public function getWSMessageLink()
    {
        return isset($this->WSMessageLink) ? $this->WSMessageLink : null;
    }
    /**
     * Set WSMessageLink value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSMessageLink[] $wSMessageLink
     * @return \ArrayType\ArrayOfWSMessageLink
     */
    public function setWSMessageLink(array $wSMessageLink = array())
    {
        foreach ($wSMessageLink as $arrayOfWSMessageLinkWSMessageLinkItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSMessageLinkWSMessageLinkItem instanceof \StructType\WSMessageLink) {
                throw new \InvalidArgumentException(sprintf('The WSMessageLink property can only contain items of \StructType\WSMessageLink, "%s" given', is_object($arrayOfWSMessageLinkWSMessageLinkItem) ? get_class($arrayOfWSMessageLinkWSMessageLinkItem) : gettype($arrayOfWSMessageLinkWSMessageLinkItem)), __LINE__);
            }
        }
        if (is_null($wSMessageLink) || (is_array($wSMessageLink) && empty($wSMessageLink))) {
            unset($this->WSMessageLink);
        } else {
            $this->WSMessageLink = $wSMessageLink;
        }
        return $this;
    }
    /**
     * Add item to WSMessageLink value
     * @throws \InvalidArgumentException
     * @param \StructType\WSMessageLink $item
     * @return \ArrayType\ArrayOfWSMessageLink
     */
    public function addToWSMessageLink(\StructType\WSMessageLink $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSMessageLink) {
            throw new \InvalidArgumentException(sprintf('The WSMessageLink property can only contain items of \StructType\WSMessageLink, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSMessageLink[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSMessageLink|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSMessageLink|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSMessageLink|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSMessageLink|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSMessageLink|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSMessageLink
     */
    public function getAttributeName()
    {
        return 'WSMessageLink';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSMessageLink
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
