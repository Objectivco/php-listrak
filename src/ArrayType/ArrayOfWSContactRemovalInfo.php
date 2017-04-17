<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSContactRemovalInfo ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSContactRemovalInfo extends AbstractStructArrayBase
{
    /**
     * The WSContactRemovalInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSContactRemovalInfo[]
     */
    public $WSContactRemovalInfo;
    /**
     * Constructor method for ArrayOfWSContactRemovalInfo
     * @uses ArrayOfWSContactRemovalInfo::setWSContactRemovalInfo()
     * @param \StructType\WSContactRemovalInfo[] $wSContactRemovalInfo
     */
    public function __construct(array $wSContactRemovalInfo = array())
    {
        $this
            ->setWSContactRemovalInfo($wSContactRemovalInfo);
    }
    /**
     * Get WSContactRemovalInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSContactRemovalInfo[]|null
     */
    public function getWSContactRemovalInfo()
    {
        return isset($this->WSContactRemovalInfo) ? $this->WSContactRemovalInfo : null;
    }
    /**
     * Set WSContactRemovalInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSContactRemovalInfo[] $wSContactRemovalInfo
     * @return \ArrayType\ArrayOfWSContactRemovalInfo
     */
    public function setWSContactRemovalInfo(array $wSContactRemovalInfo = array())
    {
        foreach ($wSContactRemovalInfo as $arrayOfWSContactRemovalInfoWSContactRemovalInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSContactRemovalInfoWSContactRemovalInfoItem instanceof \StructType\WSContactRemovalInfo) {
                throw new \InvalidArgumentException(sprintf('The WSContactRemovalInfo property can only contain items of \StructType\WSContactRemovalInfo, "%s" given', is_object($arrayOfWSContactRemovalInfoWSContactRemovalInfoItem) ? get_class($arrayOfWSContactRemovalInfoWSContactRemovalInfoItem) : gettype($arrayOfWSContactRemovalInfoWSContactRemovalInfoItem)), __LINE__);
            }
        }
        if (is_null($wSContactRemovalInfo) || (is_array($wSContactRemovalInfo) && empty($wSContactRemovalInfo))) {
            unset($this->WSContactRemovalInfo);
        } else {
            $this->WSContactRemovalInfo = $wSContactRemovalInfo;
        }
        return $this;
    }
    /**
     * Add item to WSContactRemovalInfo value
     * @throws \InvalidArgumentException
     * @param \StructType\WSContactRemovalInfo $item
     * @return \ArrayType\ArrayOfWSContactRemovalInfo
     */
    public function addToWSContactRemovalInfo(\StructType\WSContactRemovalInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSContactRemovalInfo) {
            throw new \InvalidArgumentException(sprintf('The WSContactRemovalInfo property can only contain items of \StructType\WSContactRemovalInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSContactRemovalInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSContactRemovalInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSContactRemovalInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSContactRemovalInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSContactRemovalInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSContactRemovalInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSContactRemovalInfo
     */
    public function getAttributeName()
    {
        return 'WSContactRemovalInfo';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSContactRemovalInfo
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
