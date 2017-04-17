<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSImportHistory ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSImportHistory extends AbstractStructArrayBase
{
    /**
     * The WSImportHistory
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSImportHistory[]
     */
    public $WSImportHistory;
    /**
     * Constructor method for ArrayOfWSImportHistory
     * @uses ArrayOfWSImportHistory::setWSImportHistory()
     * @param \StructType\WSImportHistory[] $wSImportHistory
     */
    public function __construct(array $wSImportHistory = array())
    {
        $this
            ->setWSImportHistory($wSImportHistory);
    }
    /**
     * Get WSImportHistory value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSImportHistory[]|null
     */
    public function getWSImportHistory()
    {
        return isset($this->WSImportHistory) ? $this->WSImportHistory : null;
    }
    /**
     * Set WSImportHistory value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSImportHistory[] $wSImportHistory
     * @return \ArrayType\ArrayOfWSImportHistory
     */
    public function setWSImportHistory(array $wSImportHistory = array())
    {
        foreach ($wSImportHistory as $arrayOfWSImportHistoryWSImportHistoryItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSImportHistoryWSImportHistoryItem instanceof \StructType\WSImportHistory) {
                throw new \InvalidArgumentException(sprintf('The WSImportHistory property can only contain items of \StructType\WSImportHistory, "%s" given', is_object($arrayOfWSImportHistoryWSImportHistoryItem) ? get_class($arrayOfWSImportHistoryWSImportHistoryItem) : gettype($arrayOfWSImportHistoryWSImportHistoryItem)), __LINE__);
            }
        }
        if (is_null($wSImportHistory) || (is_array($wSImportHistory) && empty($wSImportHistory))) {
            unset($this->WSImportHistory);
        } else {
            $this->WSImportHistory = $wSImportHistory;
        }
        return $this;
    }
    /**
     * Add item to WSImportHistory value
     * @throws \InvalidArgumentException
     * @param \StructType\WSImportHistory $item
     * @return \ArrayType\ArrayOfWSImportHistory
     */
    public function addToWSImportHistory(\StructType\WSImportHistory $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSImportHistory) {
            throw new \InvalidArgumentException(sprintf('The WSImportHistory property can only contain items of \StructType\WSImportHistory, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSImportHistory[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSImportHistory|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSImportHistory|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSImportHistory|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSImportHistory|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSImportHistory|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSImportHistory
     */
    public function getAttributeName()
    {
        return 'WSImportHistory';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSImportHistory
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
