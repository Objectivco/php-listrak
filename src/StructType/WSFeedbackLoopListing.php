<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSFeedbackLoopListing StructType
 * @subpackage Structs
 */
class WSFeedbackLoopListing extends AbstractStructBase
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
     * The CampaignID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $CampaignID;
    /**
     * The MessageID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $MessageID;
    /**
     * The AbuseDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AbuseDate;
    /**
     * The ListName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ListName;
    /**
     * The CampaignName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CampaignName;
    /**
     * The MessageSubject
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MessageSubject;
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
     * The ISPName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ISPName;
    /**
     * Constructor method for WSFeedbackLoopListing
     * @uses WSFeedbackLoopListing::setListID()
     * @uses WSFeedbackLoopListing::setCampaignID()
     * @uses WSFeedbackLoopListing::setMessageID()
     * @uses WSFeedbackLoopListing::setAbuseDate()
     * @uses WSFeedbackLoopListing::setListName()
     * @uses WSFeedbackLoopListing::setCampaignName()
     * @uses WSFeedbackLoopListing::setMessageSubject()
     * @uses WSFeedbackLoopListing::setContactID()
     * @uses WSFeedbackLoopListing::setEmailAddress()
     * @uses WSFeedbackLoopListing::setISPName()
     * @param int $listID
     * @param int $campaignID
     * @param int $messageID
     * @param string $abuseDate
     * @param string $listName
     * @param string $campaignName
     * @param string $messageSubject
     * @param string $contactID
     * @param string $emailAddress
     * @param string $iSPName
     */
    public function __construct($listID = null, $campaignID = null, $messageID = null, $abuseDate = null, $listName = null, $campaignName = null, $messageSubject = null, $contactID = null, $emailAddress = null, $iSPName = null)
    {
        $this
            ->setListID($listID)
            ->setCampaignID($campaignID)
            ->setMessageID($messageID)
            ->setAbuseDate($abuseDate)
            ->setListName($listName)
            ->setCampaignName($campaignName)
            ->setMessageSubject($messageSubject)
            ->setContactID($contactID)
            ->setEmailAddress($emailAddress)
            ->setISPName($iSPName);
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
     * @return \StructType\WSFeedbackLoopListing
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
     * Get CampaignID value
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }
    /**
     * Set CampaignID value
     * @param int $campaignID
     * @return \StructType\WSFeedbackLoopListing
     */
    public function setCampaignID($campaignID = null)
    {
        // validation for constraint: int
        if (!is_null($campaignID) && !is_numeric($campaignID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($campaignID)), __LINE__);
        }
        $this->CampaignID = $campaignID;
        return $this;
    }
    /**
     * Get MessageID value
     * @return int
     */
    public function getMessageID()
    {
        return $this->MessageID;
    }
    /**
     * Set MessageID value
     * @param int $messageID
     * @return \StructType\WSFeedbackLoopListing
     */
    public function setMessageID($messageID = null)
    {
        // validation for constraint: int
        if (!is_null($messageID) && !is_numeric($messageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($messageID)), __LINE__);
        }
        $this->MessageID = $messageID;
        return $this;
    }
    /**
     * Get AbuseDate value
     * @return string
     */
    public function getAbuseDate()
    {
        return $this->AbuseDate;
    }
    /**
     * Set AbuseDate value
     * @param string $abuseDate
     * @return \StructType\WSFeedbackLoopListing
     */
    public function setAbuseDate($abuseDate = null)
    {
        // validation for constraint: string
        if (!is_null($abuseDate) && !is_string($abuseDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($abuseDate)), __LINE__);
        }
        $this->AbuseDate = $abuseDate;
        return $this;
    }
    /**
     * Get ListName value
     * @return string|null
     */
    public function getListName()
    {
        return $this->ListName;
    }
    /**
     * Set ListName value
     * @param string $listName
     * @return \StructType\WSFeedbackLoopListing
     */
    public function setListName($listName = null)
    {
        // validation for constraint: string
        if (!is_null($listName) && !is_string($listName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listName)), __LINE__);
        }
        $this->ListName = $listName;
        return $this;
    }
    /**
     * Get CampaignName value
     * @return string|null
     */
    public function getCampaignName()
    {
        return $this->CampaignName;
    }
    /**
     * Set CampaignName value
     * @param string $campaignName
     * @return \StructType\WSFeedbackLoopListing
     */
    public function setCampaignName($campaignName = null)
    {
        // validation for constraint: string
        if (!is_null($campaignName) && !is_string($campaignName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($campaignName)), __LINE__);
        }
        $this->CampaignName = $campaignName;
        return $this;
    }
    /**
     * Get MessageSubject value
     * @return string|null
     */
    public function getMessageSubject()
    {
        return $this->MessageSubject;
    }
    /**
     * Set MessageSubject value
     * @param string $messageSubject
     * @return \StructType\WSFeedbackLoopListing
     */
    public function setMessageSubject($messageSubject = null)
    {
        // validation for constraint: string
        if (!is_null($messageSubject) && !is_string($messageSubject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($messageSubject)), __LINE__);
        }
        $this->MessageSubject = $messageSubject;
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
     * @return \StructType\WSFeedbackLoopListing
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
     * @return \StructType\WSFeedbackLoopListing
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
     * Get ISPName value
     * @return string|null
     */
    public function getISPName()
    {
        return $this->ISPName;
    }
    /**
     * Set ISPName value
     * @param string $iSPName
     * @return \StructType\WSFeedbackLoopListing
     */
    public function setISPName($iSPName = null)
    {
        // validation for constraint: string
        if (!is_null($iSPName) && !is_string($iSPName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iSPName)), __LINE__);
        }
        $this->ISPName = $iSPName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSFeedbackLoopListing
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
