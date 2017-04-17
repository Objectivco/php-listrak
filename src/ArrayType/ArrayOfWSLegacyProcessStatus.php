<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSLegacyProcessStatus ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSLegacyProcessStatus extends AbstractStructArrayBase
{
    /**
     * The WSLegacyProcessStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSLegacyProcessStatus[]
     */
    public $WSLegacyProcessStatus;
    /**
     * Constructor method for ArrayOfWSLegacyProcessStatus
     * @uses ArrayOfWSLegacyProcessStatus::setWSLegacyProcessStatus()
     * @param \StructType\WSLegacyProcessStatus[] $wSLegacyProcessStatus
     */
    public function __construct(array $wSLegacyProcessStatus = array())
    {
        $this
            ->setWSLegacyProcessStatus($wSLegacyProcessStatus);
    }
    /**
     * Get WSLegacyProcessStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSLegacyProcessStatus[]|null
     */
    public function getWSLegacyProcessStatus()
    {
        return isset($this->WSLegacyProcessStatus) ? $this->WSLegacyProcessStatus : null;
    }
    /**
     * Set WSLegacyProcessStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSLegacyProcessStatus[] $wSLegacyProcessStatus
     * @return \ArrayType\ArrayOfWSLegacyProcessStatus
     */
    public function setWSLegacyProcessStatus(array $wSLegacyProcessStatus = array())
    {
        foreach ($wSLegacyProcessStatus as $arrayOfWSLegacyProcessStatusWSLegacyProcessStatusItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSLegacyProcessStatusWSLegacyProcessStatusItem instanceof \StructType\WSLegacyProcessStatus) {
                throw new \InvalidArgumentException(sprintf('The WSLegacyProcessStatus property can only contain items of \StructType\WSLegacyProcessStatus, "%s" given', is_object($arrayOfWSLegacyProcessStatusWSLegacyProcessStatusItem) ? get_class($arrayOfWSLegacyProcessStatusWSLegacyProcessStatusItem) : gettype($arrayOfWSLegacyProcessStatusWSLegacyProcessStatusItem)), __LINE__);
            }
        }
        if (is_null($wSLegacyProcessStatus) || (is_array($wSLegacyProcessStatus) && empty($wSLegacyProcessStatus))) {
            unset($this->WSLegacyProcessStatus);
        } else {
            $this->WSLegacyProcessStatus = $wSLegacyProcessStatus;
        }
        return $this;
    }
    /**
     * Add item to WSLegacyProcessStatus value
     * @throws \InvalidArgumentException
     * @param \StructType\WSLegacyProcessStatus $item
     * @return \ArrayType\ArrayOfWSLegacyProcessStatus
     */
    public function addToWSLegacyProcessStatus(\StructType\WSLegacyProcessStatus $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSLegacyProcessStatus) {
            throw new \InvalidArgumentException(sprintf('The WSLegacyProcessStatus property can only contain items of \StructType\WSLegacyProcessStatus, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSLegacyProcessStatus[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSLegacyProcessStatus|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSLegacyProcessStatus|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSLegacyProcessStatus|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSLegacyProcessStatus|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSLegacyProcessStatus|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSLegacyProcessStatus
     */
    public function getAttributeName()
    {
        return 'WSLegacyProcessStatus';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSLegacyProcessStatus
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
