<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSContactSubscriptionInfo ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSContactSubscriptionInfo extends AbstractStructArrayBase
{
    /**
     * The WSContactSubscriptionInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSContactSubscriptionInfo[]
     */
    public $WSContactSubscriptionInfo;
    /**
     * Constructor method for ArrayOfWSContactSubscriptionInfo
     * @uses ArrayOfWSContactSubscriptionInfo::setWSContactSubscriptionInfo()
     * @param \StructType\WSContactSubscriptionInfo[] $wSContactSubscriptionInfo
     */
    public function __construct(array $wSContactSubscriptionInfo = array())
    {
        $this
            ->setWSContactSubscriptionInfo($wSContactSubscriptionInfo);
    }
    /**
     * Get WSContactSubscriptionInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSContactSubscriptionInfo[]|null
     */
    public function getWSContactSubscriptionInfo()
    {
        return isset($this->WSContactSubscriptionInfo) ? $this->WSContactSubscriptionInfo : null;
    }
    /**
     * Set WSContactSubscriptionInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSContactSubscriptionInfo[] $wSContactSubscriptionInfo
     * @return \ArrayType\ArrayOfWSContactSubscriptionInfo
     */
    public function setWSContactSubscriptionInfo(array $wSContactSubscriptionInfo = array())
    {
        foreach ($wSContactSubscriptionInfo as $arrayOfWSContactSubscriptionInfoWSContactSubscriptionInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSContactSubscriptionInfoWSContactSubscriptionInfoItem instanceof \StructType\WSContactSubscriptionInfo) {
                throw new \InvalidArgumentException(sprintf('The WSContactSubscriptionInfo property can only contain items of \StructType\WSContactSubscriptionInfo, "%s" given', is_object($arrayOfWSContactSubscriptionInfoWSContactSubscriptionInfoItem) ? get_class($arrayOfWSContactSubscriptionInfoWSContactSubscriptionInfoItem) : gettype($arrayOfWSContactSubscriptionInfoWSContactSubscriptionInfoItem)), __LINE__);
            }
        }
        if (is_null($wSContactSubscriptionInfo) || (is_array($wSContactSubscriptionInfo) && empty($wSContactSubscriptionInfo))) {
            unset($this->WSContactSubscriptionInfo);
        } else {
            $this->WSContactSubscriptionInfo = $wSContactSubscriptionInfo;
        }
        return $this;
    }
    /**
     * Add item to WSContactSubscriptionInfo value
     * @throws \InvalidArgumentException
     * @param \StructType\WSContactSubscriptionInfo $item
     * @return \ArrayType\ArrayOfWSContactSubscriptionInfo
     */
    public function addToWSContactSubscriptionInfo(\StructType\WSContactSubscriptionInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSContactSubscriptionInfo) {
            throw new \InvalidArgumentException(sprintf('The WSContactSubscriptionInfo property can only contain items of \StructType\WSContactSubscriptionInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSContactSubscriptionInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSContactSubscriptionInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSContactSubscriptionInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSContactSubscriptionInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSContactSubscriptionInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSContactSubscriptionInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSContactSubscriptionInfo
     */
    public function getAttributeName()
    {
        return 'WSContactSubscriptionInfo';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSContactSubscriptionInfo
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
