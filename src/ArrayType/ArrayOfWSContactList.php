<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSContactList ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSContactList extends AbstractStructArrayBase
{
    /**
     * The WSContactList
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSContactList[]
     */
    public $WSContactList;
    /**
     * Constructor method for ArrayOfWSContactList
     * @uses ArrayOfWSContactList::setWSContactList()
     * @param \StructType\WSContactList[] $wSContactList
     */
    public function __construct(array $wSContactList = array())
    {
        $this
            ->setWSContactList($wSContactList);
    }
    /**
     * Get WSContactList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSContactList[]|null
     */
    public function getWSContactList()
    {
        return isset($this->WSContactList) ? $this->WSContactList : null;
    }
    /**
     * Set WSContactList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSContactList[] $wSContactList
     * @return \ArrayType\ArrayOfWSContactList
     */
    public function setWSContactList(array $wSContactList = array())
    {
        foreach ($wSContactList as $arrayOfWSContactListWSContactListItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSContactListWSContactListItem instanceof \StructType\WSContactList) {
                throw new \InvalidArgumentException(sprintf('The WSContactList property can only contain items of \StructType\WSContactList, "%s" given', is_object($arrayOfWSContactListWSContactListItem) ? get_class($arrayOfWSContactListWSContactListItem) : gettype($arrayOfWSContactListWSContactListItem)), __LINE__);
            }
        }
        if (is_null($wSContactList) || (is_array($wSContactList) && empty($wSContactList))) {
            unset($this->WSContactList);
        } else {
            $this->WSContactList = $wSContactList;
        }
        return $this;
    }
    /**
     * Add item to WSContactList value
     * @throws \InvalidArgumentException
     * @param \StructType\WSContactList $item
     * @return \ArrayType\ArrayOfWSContactList
     */
    public function addToWSContactList(\StructType\WSContactList $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSContactList) {
            throw new \InvalidArgumentException(sprintf('The WSContactList property can only contain items of \StructType\WSContactList, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSContactList[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSContactList|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSContactList|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSContactList|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSContactList|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSContactList|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSContactList
     */
    public function getAttributeName()
    {
        return 'WSContactList';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSContactList
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
