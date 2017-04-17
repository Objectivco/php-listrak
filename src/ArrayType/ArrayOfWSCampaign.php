<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSCampaign ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSCampaign extends AbstractStructArrayBase
{
    /**
     * The WSCampaign
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSCampaign[]
     */
    public $WSCampaign;
    /**
     * Constructor method for ArrayOfWSCampaign
     * @uses ArrayOfWSCampaign::setWSCampaign()
     * @param \StructType\WSCampaign[] $wSCampaign
     */
    public function __construct(array $wSCampaign = array())
    {
        $this
            ->setWSCampaign($wSCampaign);
    }
    /**
     * Get WSCampaign value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSCampaign[]|null
     */
    public function getWSCampaign()
    {
        return isset($this->WSCampaign) ? $this->WSCampaign : null;
    }
    /**
     * Set WSCampaign value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSCampaign[] $wSCampaign
     * @return \ArrayType\ArrayOfWSCampaign
     */
    public function setWSCampaign(array $wSCampaign = array())
    {
        foreach ($wSCampaign as $arrayOfWSCampaignWSCampaignItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSCampaignWSCampaignItem instanceof \StructType\WSCampaign) {
                throw new \InvalidArgumentException(sprintf('The WSCampaign property can only contain items of \StructType\WSCampaign, "%s" given', is_object($arrayOfWSCampaignWSCampaignItem) ? get_class($arrayOfWSCampaignWSCampaignItem) : gettype($arrayOfWSCampaignWSCampaignItem)), __LINE__);
            }
        }
        if (is_null($wSCampaign) || (is_array($wSCampaign) && empty($wSCampaign))) {
            unset($this->WSCampaign);
        } else {
            $this->WSCampaign = $wSCampaign;
        }
        return $this;
    }
    /**
     * Add item to WSCampaign value
     * @throws \InvalidArgumentException
     * @param \StructType\WSCampaign $item
     * @return \ArrayType\ArrayOfWSCampaign
     */
    public function addToWSCampaign(\StructType\WSCampaign $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSCampaign) {
            throw new \InvalidArgumentException(sprintf('The WSCampaign property can only contain items of \StructType\WSCampaign, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSCampaign[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSCampaign|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSCampaign|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSCampaign|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSCampaign|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSCampaign|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSCampaign
     */
    public function getAttributeName()
    {
        return 'WSCampaign';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSCampaign
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
