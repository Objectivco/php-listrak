<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSMessageLocationContactOpen StructType
 * @subpackage Structs
 */
class WSMessageLocationContactOpen extends AbstractStructBase
{
    /**
     * The MsgID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $MsgID;
    /**
     * The OpenDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $OpenDate;
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
     * The CountryName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CountryName;
    /**
     * The RegionName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RegionName;
    /**
     * Constructor method for WSMessageLocationContactOpen
     * @uses WSMessageLocationContactOpen::setMsgID()
     * @uses WSMessageLocationContactOpen::setOpenDate()
     * @uses WSMessageLocationContactOpen::setContactID()
     * @uses WSMessageLocationContactOpen::setEmailAddress()
     * @uses WSMessageLocationContactOpen::setCountryName()
     * @uses WSMessageLocationContactOpen::setRegionName()
     * @param int $msgID
     * @param string $openDate
     * @param string $contactID
     * @param string $emailAddress
     * @param string $countryName
     * @param string $regionName
     */
    public function __construct($msgID = null, $openDate = null, $contactID = null, $emailAddress = null, $countryName = null, $regionName = null)
    {
        $this
            ->setMsgID($msgID)
            ->setOpenDate($openDate)
            ->setContactID($contactID)
            ->setEmailAddress($emailAddress)
            ->setCountryName($countryName)
            ->setRegionName($regionName);
    }
    /**
     * Get MsgID value
     * @return int
     */
    public function getMsgID()
    {
        return $this->MsgID;
    }
    /**
     * Set MsgID value
     * @param int $msgID
     * @return \StructType\WSMessageLocationContactOpen
     */
    public function setMsgID($msgID = null)
    {
        // validation for constraint: int
        if (!is_null($msgID) && !is_numeric($msgID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($msgID)), __LINE__);
        }
        $this->MsgID = $msgID;
        return $this;
    }
    /**
     * Get OpenDate value
     * @return string
     */
    public function getOpenDate()
    {
        return $this->OpenDate;
    }
    /**
     * Set OpenDate value
     * @param string $openDate
     * @return \StructType\WSMessageLocationContactOpen
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
     * @return \StructType\WSMessageLocationContactOpen
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
     * @return \StructType\WSMessageLocationContactOpen
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
     * Get CountryName value
     * @return string|null
     */
    public function getCountryName()
    {
        return $this->CountryName;
    }
    /**
     * Set CountryName value
     * @param string $countryName
     * @return \StructType\WSMessageLocationContactOpen
     */
    public function setCountryName($countryName = null)
    {
        // validation for constraint: string
        if (!is_null($countryName) && !is_string($countryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryName)), __LINE__);
        }
        $this->CountryName = $countryName;
        return $this;
    }
    /**
     * Get RegionName value
     * @return string|null
     */
    public function getRegionName()
    {
        return $this->RegionName;
    }
    /**
     * Set RegionName value
     * @param string $regionName
     * @return \StructType\WSMessageLocationContactOpen
     */
    public function setRegionName($regionName = null)
    {
        // validation for constraint: string
        if (!is_null($regionName) && !is_string($regionName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($regionName)), __LINE__);
        }
        $this->RegionName = $regionName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSMessageLocationContactOpen
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
