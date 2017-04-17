<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChangeContactEmailAddress StructType
 * @subpackage Structs
 */
class ChangeContactEmailAddress extends AbstractStructBase
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
     * The ContactEmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ContactEmailAddress;
    /**
     * The NewContactEmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NewContactEmailAddress;
    /**
     * Constructor method for ChangeContactEmailAddress
     * @uses ChangeContactEmailAddress::setListID()
     * @uses ChangeContactEmailAddress::setContactEmailAddress()
     * @uses ChangeContactEmailAddress::setNewContactEmailAddress()
     * @param int $listID
     * @param string $contactEmailAddress
     * @param string $newContactEmailAddress
     */
    public function __construct($listID = null, $contactEmailAddress = null, $newContactEmailAddress = null)
    {
        $this
            ->setListID($listID)
            ->setContactEmailAddress($contactEmailAddress)
            ->setNewContactEmailAddress($newContactEmailAddress);
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
     * @return \StructType\ChangeContactEmailAddress
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
     * Get ContactEmailAddress value
     * @return string|null
     */
    public function getContactEmailAddress()
    {
        return $this->ContactEmailAddress;
    }
    /**
     * Set ContactEmailAddress value
     * @param string $contactEmailAddress
     * @return \StructType\ChangeContactEmailAddress
     */
    public function setContactEmailAddress($contactEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($contactEmailAddress) && !is_string($contactEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactEmailAddress)), __LINE__);
        }
        $this->ContactEmailAddress = $contactEmailAddress;
        return $this;
    }
    /**
     * Get NewContactEmailAddress value
     * @return string|null
     */
    public function getNewContactEmailAddress()
    {
        return $this->NewContactEmailAddress;
    }
    /**
     * Set NewContactEmailAddress value
     * @param string $newContactEmailAddress
     * @return \StructType\ChangeContactEmailAddress
     */
    public function setNewContactEmailAddress($newContactEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($newContactEmailAddress) && !is_string($newContactEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($newContactEmailAddress)), __LINE__);
        }
        $this->NewContactEmailAddress = $newContactEmailAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ChangeContactEmailAddress
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
