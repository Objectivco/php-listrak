<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnsubscribeContact StructType
 * @subpackage Structs
 */
class UnsubscribeContact extends AbstractStructBase
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
     * Constructor method for UnsubscribeContact
     * @uses UnsubscribeContact::setListID()
     * @uses UnsubscribeContact::setContactEmailAddress()
     * @param int $listID
     * @param string $contactEmailAddress
     */
    public function __construct($listID = null, $contactEmailAddress = null)
    {
        $this
            ->setListID($listID)
            ->setContactEmailAddress($contactEmailAddress);
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
     * @return \StructType\UnsubscribeContact
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
     * @return \StructType\UnsubscribeContact
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\UnsubscribeContact
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
