<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSContact StructType
 * @subpackage Structs
 */
class WSContact extends AbstractStructBase
{
    /**
     * The ListID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ListID;
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EmailAddress;
    /**
     * The ContactProfileAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\WSProfileAttributeValue[]
     */
    public $ContactProfileAttribute;
    /**
     * Constructor method for WSContact
     * @uses WSContact::setListID()
     * @uses WSContact::setEmailAddress()
     * @uses WSContact::setContactProfileAttribute()
     * @param int $listID
     * @param string $emailAddress
     * @param \StructType\WSProfileAttributeValue[] $contactProfileAttribute
     */
    public function __construct($listID = null, $emailAddress = null, array $contactProfileAttribute = array())
    {
        $this
            ->setListID($listID)
            ->setEmailAddress($emailAddress)
            ->setContactProfileAttribute($contactProfileAttribute);
    }
    /**
     * Get ListID value
     * @return int
     */
    public function getListID()
    {
        return $this->ListID;
    }
    /**
     * Set ListID value
     * @param int $listID
     * @return \StructType\WSContact
     */
    public function setListID($listID = null)
    {
        // validation for constraint: int
        if (!is_null($listID) && !is_numeric($listID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($listID)), __LINE__);
        }
        $this->ListID = $listID;
        return $this;
    }
    /**
     * Get EmailAddress value
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param string $emailAddress
     * @return \StructType\WSContact
     */
    public function setEmailAddress($emailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailAddress)), __LINE__);
        }
        $this->EmailAddress = $emailAddress;
        return $this;
    }
    /**
     * Get ContactProfileAttribute value
     * @return \StructType\WSProfileAttributeValue[]|null
     */
    public function getContactProfileAttribute()
    {
        return $this->ContactProfileAttribute;
    }
    /**
     * Set ContactProfileAttribute value
     * @throws \InvalidArgumentException
     * @param \StructType\WSProfileAttributeValue[] $contactProfileAttribute
     * @return \StructType\WSContact
     */
    public function setContactProfileAttribute(array $contactProfileAttribute = array())
    {
        foreach ($contactProfileAttribute as $wSContactContactProfileAttributeItem) {
            // validation for constraint: itemType
            if (!$wSContactContactProfileAttributeItem instanceof \StructType\WSProfileAttributeValue) {
                throw new \InvalidArgumentException(sprintf('The ContactProfileAttribute property can only contain items of \StructType\WSProfileAttributeValue, "%s" given', is_object($wSContactContactProfileAttributeItem) ? get_class($wSContactContactProfileAttributeItem) : gettype($wSContactContactProfileAttributeItem)), __LINE__);
            }
        }
        $this->ContactProfileAttribute = $contactProfileAttribute;
        return $this;
    }
    /**
     * Add item to ContactProfileAttribute value
     * @throws \InvalidArgumentException
     * @param \StructType\WSProfileAttributeValue $item
     * @return \StructType\WSContact
     */
    public function addToContactProfileAttribute(\StructType\WSProfileAttributeValue $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSProfileAttributeValue) {
            throw new \InvalidArgumentException(sprintf('The ContactProfileAttribute property can only contain items of \StructType\WSProfileAttributeValue, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ContactProfileAttribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSContact
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
