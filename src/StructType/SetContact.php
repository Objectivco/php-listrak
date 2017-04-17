<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetContact StructType
 * @subpackage Structs
 */
class SetContact extends AbstractStructBase
{
    /**
     * The WSContact
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSContact
     */
    public $WSContact;
    /**
     * The ProfileUpdateType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ProfileUpdateType;
    /**
     * The OverrideUnsubscribe
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $OverrideUnsubscribe;
    /**
     * The ExternalEventIDs
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExternalEventIDs;
    /**
     * Constructor method for SetContact
     * @uses SetContact::setWSContact()
     * @uses SetContact::setProfileUpdateType()
     * @uses SetContact::setOverrideUnsubscribe()
     * @uses SetContact::setExternalEventIDs()
     * @param \StructType\WSContact $wSContact
     * @param string $profileUpdateType
     * @param bool $overrideUnsubscribe
     * @param string $externalEventIDs
     */
    public function __construct(\StructType\WSContact $wSContact = null, $profileUpdateType = null, $overrideUnsubscribe = null, $externalEventIDs = null)
    {
        $this
            ->setWSContact($wSContact)
            ->setProfileUpdateType($profileUpdateType)
            ->setOverrideUnsubscribe($overrideUnsubscribe)
            ->setExternalEventIDs($externalEventIDs);
    }
    /**
     * Get WSContact value
     * @return \StructType\WSContact
     */
    public function getWSContact()
    {
        return $this->WSContact;
    }
    /**
     * Set WSContact value
     * @param \StructType\WSContact $wSContact
     * @return \StructType\SetContact
     */
    public function setWSContact(\StructType\WSContact $wSContact = null)
    {
        $this->WSContact = $wSContact;
        return $this;
    }
    /**
     * Get ProfileUpdateType value
     * @return string
     */
    public function getProfileUpdateType()
    {
        return $this->ProfileUpdateType;
    }
    /**
     * Set ProfileUpdateType value
     * @uses \EnumType\ImportProfileTypeEnum::valueIsValid()
     * @uses \EnumType\ImportProfileTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $profileUpdateType
     * @return \StructType\SetContact
     */
    public function setProfileUpdateType($profileUpdateType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ImportProfileTypeEnum::valueIsValid($profileUpdateType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $profileUpdateType, implode(', ', \EnumType\ImportProfileTypeEnum::getValidValues())), __LINE__);
        }
        $this->ProfileUpdateType = $profileUpdateType;
        return $this;
    }
    /**
     * Get OverrideUnsubscribe value
     * @return bool
     */
    public function getOverrideUnsubscribe()
    {
        return $this->OverrideUnsubscribe;
    }
    /**
     * Set OverrideUnsubscribe value
     * @param bool $overrideUnsubscribe
     * @return \StructType\SetContact
     */
    public function setOverrideUnsubscribe($overrideUnsubscribe = null)
    {
        $this->OverrideUnsubscribe = $overrideUnsubscribe;
        return $this;
    }
    /**
     * Get ExternalEventIDs value
     * @return string|null
     */
    public function getExternalEventIDs()
    {
        return $this->ExternalEventIDs;
    }
    /**
     * Set ExternalEventIDs value
     * @param string $externalEventIDs
     * @return \StructType\SetContact
     */
    public function setExternalEventIDs($externalEventIDs = null)
    {
        // validation for constraint: string
        if (!is_null($externalEventIDs) && !is_string($externalEventIDs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalEventIDs)), __LINE__);
        }
        $this->ExternalEventIDs = $externalEventIDs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SetContact
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
