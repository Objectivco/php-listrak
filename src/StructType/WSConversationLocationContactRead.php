<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSConversationLocationContactRead StructType
 * @subpackage Structs
 */
class WSConversationLocationContactRead extends AbstractStructBase
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
     * The ContactID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ContactID;
    /**
     * The ReadDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ReadDate;
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
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PostalCode;
    /**
     * Constructor method for WSConversationLocationContactRead
     * @uses WSConversationLocationContactRead::setMsgID()
     * @uses WSConversationLocationContactRead::setContactID()
     * @uses WSConversationLocationContactRead::setReadDate()
     * @uses WSConversationLocationContactRead::setEmailAddress()
     * @uses WSConversationLocationContactRead::setCountryName()
     * @uses WSConversationLocationContactRead::setRegionName()
     * @uses WSConversationLocationContactRead::setPostalCode()
     * @param int $msgID
     * @param int $contactID
     * @param string $readDate
     * @param string $emailAddress
     * @param string $countryName
     * @param string $regionName
     * @param string $postalCode
     */
    public function __construct($msgID = null, $contactID = null, $readDate = null, $emailAddress = null, $countryName = null, $regionName = null, $postalCode = null)
    {
        $this
            ->setMsgID($msgID)
            ->setContactID($contactID)
            ->setReadDate($readDate)
            ->setEmailAddress($emailAddress)
            ->setCountryName($countryName)
            ->setRegionName($regionName)
            ->setPostalCode($postalCode);
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
     * @return \StructType\WSConversationLocationContactRead
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
     * Get ContactID value
     * @return int
     */
    public function getContactID()
    {
        return $this->ContactID;
    }
    /**
     * Set ContactID value
     * @param int $contactID
     * @return \StructType\WSConversationLocationContactRead
     */
    public function setContactID($contactID = null)
    {
        // validation for constraint: int
        if (!is_null($contactID) && !is_numeric($contactID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($contactID)), __LINE__);
        }
        $this->ContactID = $contactID;
        return $this;
    }
    /**
     * Get ReadDate value
     * @return string
     */
    public function getReadDate()
    {
        return $this->ReadDate;
    }
    /**
     * Set ReadDate value
     * @param string $readDate
     * @return \StructType\WSConversationLocationContactRead
     */
    public function setReadDate($readDate = null)
    {
        // validation for constraint: string
        if (!is_null($readDate) && !is_string($readDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($readDate)), __LINE__);
        }
        $this->ReadDate = $readDate;
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
     * @return \StructType\WSConversationLocationContactRead
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
     * @return \StructType\WSConversationLocationContactRead
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
     * @return \StructType\WSConversationLocationContactRead
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
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \StructType\WSConversationLocationContactRead
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        $this->PostalCode = $postalCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSConversationLocationContactRead
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
