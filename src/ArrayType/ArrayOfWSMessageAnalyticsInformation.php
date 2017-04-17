<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSMessageAnalyticsInformation ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSMessageAnalyticsInformation extends AbstractStructArrayBase
{
    /**
     * The WSMessageAnalyticsInformation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSMessageAnalyticsInformation[]
     */
    public $WSMessageAnalyticsInformation;
    /**
     * Constructor method for ArrayOfWSMessageAnalyticsInformation
     * @uses ArrayOfWSMessageAnalyticsInformation::setWSMessageAnalyticsInformation()
     * @param \StructType\WSMessageAnalyticsInformation[] $wSMessageAnalyticsInformation
     */
    public function __construct(array $wSMessageAnalyticsInformation = array())
    {
        $this
            ->setWSMessageAnalyticsInformation($wSMessageAnalyticsInformation);
    }
    /**
     * Get WSMessageAnalyticsInformation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSMessageAnalyticsInformation[]|null
     */
    public function getWSMessageAnalyticsInformation()
    {
        return isset($this->WSMessageAnalyticsInformation) ? $this->WSMessageAnalyticsInformation : null;
    }
    /**
     * Set WSMessageAnalyticsInformation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSMessageAnalyticsInformation[] $wSMessageAnalyticsInformation
     * @return \ArrayType\ArrayOfWSMessageAnalyticsInformation
     */
    public function setWSMessageAnalyticsInformation(array $wSMessageAnalyticsInformation = array())
    {
        foreach ($wSMessageAnalyticsInformation as $arrayOfWSMessageAnalyticsInformationWSMessageAnalyticsInformationItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSMessageAnalyticsInformationWSMessageAnalyticsInformationItem instanceof \StructType\WSMessageAnalyticsInformation) {
                throw new \InvalidArgumentException(sprintf('The WSMessageAnalyticsInformation property can only contain items of \StructType\WSMessageAnalyticsInformation, "%s" given', is_object($arrayOfWSMessageAnalyticsInformationWSMessageAnalyticsInformationItem) ? get_class($arrayOfWSMessageAnalyticsInformationWSMessageAnalyticsInformationItem) : gettype($arrayOfWSMessageAnalyticsInformationWSMessageAnalyticsInformationItem)), __LINE__);
            }
        }
        if (is_null($wSMessageAnalyticsInformation) || (is_array($wSMessageAnalyticsInformation) && empty($wSMessageAnalyticsInformation))) {
            unset($this->WSMessageAnalyticsInformation);
        } else {
            $this->WSMessageAnalyticsInformation = $wSMessageAnalyticsInformation;
        }
        return $this;
    }
    /**
     * Add item to WSMessageAnalyticsInformation value
     * @throws \InvalidArgumentException
     * @param \StructType\WSMessageAnalyticsInformation $item
     * @return \ArrayType\ArrayOfWSMessageAnalyticsInformation
     */
    public function addToWSMessageAnalyticsInformation(\StructType\WSMessageAnalyticsInformation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSMessageAnalyticsInformation) {
            throw new \InvalidArgumentException(sprintf('The WSMessageAnalyticsInformation property can only contain items of \StructType\WSMessageAnalyticsInformation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSMessageAnalyticsInformation[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSMessageAnalyticsInformation|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSMessageAnalyticsInformation|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSMessageAnalyticsInformation|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSMessageAnalyticsInformation|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSMessageAnalyticsInformation|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSMessageAnalyticsInformation
     */
    public function getAttributeName()
    {
        return 'WSMessageAnalyticsInformation';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSMessageAnalyticsInformation
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
