<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSImportContact ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSImportContact extends AbstractStructArrayBase
{
    /**
     * The WSImportContact
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WSImportContact[]
     */
    public $WSImportContact;
    /**
     * Constructor method for ArrayOfWSImportContact
     * @uses ArrayOfWSImportContact::setWSImportContact()
     * @param \StructType\WSImportContact[] $wSImportContact
     */
    public function __construct(array $wSImportContact = array())
    {
        $this
            ->setWSImportContact($wSImportContact);
    }
    /**
     * Get WSImportContact value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WSImportContact[]|null
     */
    public function getWSImportContact()
    {
        return isset($this->WSImportContact) ? $this->WSImportContact : null;
    }
    /**
     * Set WSImportContact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WSImportContact[] $wSImportContact
     * @return \ArrayType\ArrayOfWSImportContact
     */
    public function setWSImportContact(array $wSImportContact = array())
    {
        foreach ($wSImportContact as $arrayOfWSImportContactWSImportContactItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSImportContactWSImportContactItem instanceof \StructType\WSImportContact) {
                throw new \InvalidArgumentException(sprintf('The WSImportContact property can only contain items of \StructType\WSImportContact, "%s" given', is_object($arrayOfWSImportContactWSImportContactItem) ? get_class($arrayOfWSImportContactWSImportContactItem) : gettype($arrayOfWSImportContactWSImportContactItem)), __LINE__);
            }
        }
        if (is_null($wSImportContact) || (is_array($wSImportContact) && empty($wSImportContact))) {
            unset($this->WSImportContact);
        } else {
            $this->WSImportContact = $wSImportContact;
        }
        return $this;
    }
    /**
     * Add item to WSImportContact value
     * @throws \InvalidArgumentException
     * @param \StructType\WSImportContact $item
     * @return \ArrayType\ArrayOfWSImportContact
     */
    public function addToWSImportContact(\StructType\WSImportContact $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSImportContact) {
            throw new \InvalidArgumentException(sprintf('The WSImportContact property can only contain items of \StructType\WSImportContact, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSImportContact[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WSImportContact|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WSImportContact|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WSImportContact|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WSImportContact|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WSImportContact|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSImportContact
     */
    public function getAttributeName()
    {
        return 'WSImportContact';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWSImportContact
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
