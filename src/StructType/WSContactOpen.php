<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSContactOpen StructType
 * @subpackage Structs
 */
class WSContactOpen extends AbstractStructBase
{
    /**
     * The ContactID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ContactID;
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EmailAddress;
    /**
     * The OpenDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OpenDate;
    /**
     * Constructor method for WSContactOpen
     * @uses WSContactOpen::setContactID()
     * @uses WSContactOpen::setEmailAddress()
     * @uses WSContactOpen::setOpenDate()
     * @param string $contactID
     * @param string $emailAddress
     * @param string $openDate
     */
    public function __construct($contactID = null, $emailAddress = null, $openDate = null)
    {
        $this
            ->setContactID($contactID)
            ->setEmailAddress($emailAddress)
            ->setOpenDate($openDate);
    }
    /**
     * Get ContactID value
     * @return string|null
     */
    public function getContactID()
    {
        return $this->ContactID;
    }
    /**
     * Set ContactID value
     * @param string $contactID
     * @return \StructType\WSContactOpen
     */
    public function setContactID($contactID = null)
    {
        // validation for constraint: string
        if (!is_null($contactID) && !is_string($contactID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactID)), __LINE__);
        }
        $this->ContactID = $contactID;
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
     * @return \StructType\WSContactOpen
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
     * Get OpenDate value
     * @return string|null
     */
    public function getOpenDate()
    {
        return $this->OpenDate;
    }
    /**
     * Set OpenDate value
     * @param string $openDate
     * @return \StructType\WSContactOpen
     */
    public function setOpenDate($openDate = null)
    {
        // validation for constraint: string
        if (!is_null($openDate) && !is_string($openDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($openDate)), __LINE__);
        }
        $this->OpenDate = $openDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSContactOpen
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
