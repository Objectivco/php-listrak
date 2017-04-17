<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSContactHygieneInfo ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSContactHygieneInfo extends AbstractStructArrayBase
{
    /**
     * The WSContactHygieneInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSContactHygieneInfo[]
     */
    public $WSContactHygieneInfo;
    /**
     * Constructor method for ArrayOfWSContactHygieneInfo
     * @uses ArrayOfWSContactHygieneInfo::setWSContactHygieneInfo()
     * @param \StructType\WSContactHygieneInfo[] $wSContactHygieneInfo
     */
    public function __construct(array $wSContactHygieneInfo = array())
    {
        $this
            ->setWSContactHygieneInfo($wSContactHygieneInfo);
    }
    /**
     * Get WSContactHygieneInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSContactHygieneInfo[]|null
     */
    public function getWSContactHygieneInfo()
    {
        return isset($this->WSContactHygieneInfo) ? $this->WSContactHygieneInfo : null;
    }
    /**
     * Set WSContactHygieneInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSContactHygieneInfo[] $wSContactHygieneInfo
     * @return \ArrayType\ArrayOfWSContactHygieneInfo
     */
    public function setWSContactHygieneInfo(array $wSContactHygieneInfo = array())
    {
        foreach ($wSContactHygieneInfo as $arrayOfWSContactHygieneInfoWSContactHygieneInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSContactHygieneInfoWSContactHygieneInfoItem instanceof \StructType\WSContactHygieneInfo) {
                throw new \InvalidArgumentException(sprintf('The WSContactHygieneInfo property can only contain items of \StructType\WSContactHygieneInfo, "%s" given', is_object($arrayOfWSContactHygieneInfoWSContactHygieneInfoItem) ? get_class($arrayOfWSContactHygieneInfoWSContactHygieneInfoItem) : gettype($arrayOfWSContactHygieneInfoWSContactHygieneInfoItem)), __LINE__);
            }
        }
        if (is_null($wSContactHygieneInfo) || (is_array($wSContactHygieneInfo) && empty($wSContactHygieneInfo))) {
            unset($this->WSContactHygieneInfo);
        } else {
            $this->WSContactHygieneInfo = $wSContactHygieneInfo;
        }
        return $this;
    }
    /**
     * Add item to WSContactHygieneInfo value
     * @throws \InvalidArgumentException
     * @param \StructType\WSContactHygieneInfo $item
     * @return \ArrayType\ArrayOfWSContactHygieneInfo
     */
    public function addToWSContactHygieneInfo(\StructType\WSContactHygieneInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSContactHygieneInfo) {
            throw new \InvalidArgumentException(sprintf('The WSContactHygieneInfo property can only contain items of \StructType\WSContactHygieneInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSContactHygieneInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSContactHygieneInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSContactHygieneInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSContactHygieneInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSContactHygieneInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSContactHygieneInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSContactHygieneInfo
     */
    public function getAttributeName()
    {
        return 'WSContactHygieneInfo';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSContactHygieneInfo
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
