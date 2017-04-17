<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSVmta ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSVmta extends AbstractStructArrayBase
{
    /**
     * The WSVmta
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSVmta[]
     */
    public $WSVmta;
    /**
     * Constructor method for ArrayOfWSVmta
     * @uses ArrayOfWSVmta::setWSVmta()
     * @param \StructType\WSVmta[] $wSVmta
     */
    public function __construct(array $wSVmta = array())
    {
        $this
            ->setWSVmta($wSVmta);
    }
    /**
     * Get WSVmta value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSVmta[]|null
     */
    public function getWSVmta()
    {
        return isset($this->WSVmta) ? $this->WSVmta : null;
    }
    /**
     * Set WSVmta value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSVmta[] $wSVmta
     * @return \ArrayType\ArrayOfWSVmta
     */
    public function setWSVmta(array $wSVmta = array())
    {
        foreach ($wSVmta as $arrayOfWSVmtaWSVmtaItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSVmtaWSVmtaItem instanceof \StructType\WSVmta) {
                throw new \InvalidArgumentException(sprintf('The WSVmta property can only contain items of \StructType\WSVmta, "%s" given', is_object($arrayOfWSVmtaWSVmtaItem) ? get_class($arrayOfWSVmtaWSVmtaItem) : gettype($arrayOfWSVmtaWSVmtaItem)), __LINE__);
            }
        }
        if (is_null($wSVmta) || (is_array($wSVmta) && empty($wSVmta))) {
            unset($this->WSVmta);
        } else {
            $this->WSVmta = $wSVmta;
        }
        return $this;
    }
    /**
     * Add item to WSVmta value
     * @throws \InvalidArgumentException
     * @param \StructType\WSVmta $item
     * @return \ArrayType\ArrayOfWSVmta
     */
    public function addToWSVmta(\StructType\WSVmta $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSVmta) {
            throw new \InvalidArgumentException(sprintf('The WSVmta property can only contain items of \StructType\WSVmta, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSVmta[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSVmta|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSVmta|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSVmta|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSVmta|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSVmta|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSVmta
     */
    public function getAttributeName()
    {
        return 'WSVmta';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSVmta
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
