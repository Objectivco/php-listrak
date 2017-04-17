<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSConductorConversation StructType
 * @subpackage Structs
 */
class WSConductorConversation extends AbstractStructBase
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
     * The ListCampaignID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ListCampaignID;
    /**
     * The LastPublishedVersionID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $LastPublishedVersionID;
    /**
     * The WorkingVersionID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $WorkingVersionID;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Status;
    /**
     * The ExpirationDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $ExpirationDate;
    /**
     * The ConversationID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ConversationID;
    /**
     * The ConversationKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ConversationKey;
    /**
     * The CampaignName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CampaignName;
    /**
     * The ApplicationName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ApplicationName;
    /**
     * The NotificationFromName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NotificationFromName;
    /**
     * The NotificationFromAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NotificationFromAddress;
    /**
     * Constructor method for WSConductorConversation
     * @uses WSConductorConversation::setListID()
     * @uses WSConductorConversation::setListCampaignID()
     * @uses WSConductorConversation::setLastPublishedVersionID()
     * @uses WSConductorConversation::setWorkingVersionID()
     * @uses WSConductorConversation::setStatus()
     * @uses WSConductorConversation::setExpirationDate()
     * @uses WSConductorConversation::setConversationID()
     * @uses WSConductorConversation::setConversationKey()
     * @uses WSConductorConversation::setCampaignName()
     * @uses WSConductorConversation::setApplicationName()
     * @uses WSConductorConversation::setNotificationFromName()
     * @uses WSConductorConversation::setNotificationFromAddress()
     * @param int $listID
     * @param int $listCampaignID
     * @param int $lastPublishedVersionID
     * @param int $workingVersionID
     * @param string $status
     * @param string $expirationDate
     * @param int $conversationID
     * @param string $conversationKey
     * @param string $campaignName
     * @param string $applicationName
     * @param string $notificationFromName
     * @param string $notificationFromAddress
     */
    public function __construct($listID = null, $listCampaignID = null, $lastPublishedVersionID = null, $workingVersionID = null, $status = null, $expirationDate = null, $conversationID = null, $conversationKey = null, $campaignName = null, $applicationName = null, $notificationFromName = null, $notificationFromAddress = null)
    {
        $this
            ->setListID($listID)
            ->setListCampaignID($listCampaignID)
            ->setLastPublishedVersionID($lastPublishedVersionID)
            ->setWorkingVersionID($workingVersionID)
            ->setStatus($status)
            ->setExpirationDate($expirationDate)
            ->setConversationID($conversationID)
            ->setConversationKey($conversationKey)
            ->setCampaignName($campaignName)
            ->setApplicationName($applicationName)
            ->setNotificationFromName($notificationFromName)
            ->setNotificationFromAddress($notificationFromAddress);
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
     * @return \StructType\WSConductorConversation
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
     * Get ListCampaignID value
     * @return int
     */
    public function getListCampaignID()
    {
        return $this->ListCampaignID;
    }
    /**
     * Set ListCampaignID value
     * @param int $listCampaignID
     * @return \StructType\WSConductorConversation
     */
    public function setListCampaignID($listCampaignID = null)
    {
        // validation for constraint: int
        if (!is_null($listCampaignID) && !is_numeric($listCampaignID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($listCampaignID)), __LINE__);
        }
        $this->ListCampaignID = $listCampaignID;
        return $this;
    }
    /**
     * Get LastPublishedVersionID value
     * @return int
     */
    public function getLastPublishedVersionID()
    {
        return $this->LastPublishedVersionID;
    }
    /**
     * Set LastPublishedVersionID value
     * @param int $lastPublishedVersionID
     * @return \StructType\WSConductorConversation
     */
    public function setLastPublishedVersionID($lastPublishedVersionID = null)
    {
        // validation for constraint: int
        if (!is_null($lastPublishedVersionID) && !is_numeric($lastPublishedVersionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($lastPublishedVersionID)), __LINE__);
        }
        $this->LastPublishedVersionID = $lastPublishedVersionID;
        return $this;
    }
    /**
     * Get WorkingVersionID value
     * @return int
     */
    public function getWorkingVersionID()
    {
        return $this->WorkingVersionID;
    }
    /**
     * Set WorkingVersionID value
     * @param int $workingVersionID
     * @return \StructType\WSConductorConversation
     */
    public function setWorkingVersionID($workingVersionID = null)
    {
        // validation for constraint: int
        if (!is_null($workingVersionID) && !is_numeric($workingVersionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($workingVersionID)), __LINE__);
        }
        $this->WorkingVersionID = $workingVersionID;
        return $this;
    }
    /**
     * Get Status value
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\ConversationStatus::valueIsValid()
     * @uses \EnumType\ConversationStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\WSConductorConversation
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ConversationStatus::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \EnumType\ConversationStatus::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get ExpirationDate value
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param string $expirationDate
     * @return \StructType\WSConductorConversation
     */
    public function setExpirationDate($expirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expirationDate)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    /**
     * Get ConversationID value
     * @return int
     */
    public function getConversationID()
    {
        return $this->ConversationID;
    }
    /**
     * Set ConversationID value
     * @param int $conversationID
     * @return \StructType\WSConductorConversation
     */
    public function setConversationID($conversationID = null)
    {
        // validation for constraint: int
        if (!is_null($conversationID) && !is_numeric($conversationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($conversationID)), __LINE__);
        }
        $this->ConversationID = $conversationID;
        return $this;
    }
    /**
     * Get ConversationKey value
     * @return string|null
     */
    public function getConversationKey()
    {
        return $this->ConversationKey;
    }
    /**
     * Set ConversationKey value
     * @param string $conversationKey
     * @return \StructType\WSConductorConversation
     */
    public function setConversationKey($conversationKey = null)
    {
        // validation for constraint: string
        if (!is_null($conversationKey) && !is_string($conversationKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($conversationKey)), __LINE__);
        }
        $this->ConversationKey = $conversationKey;
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
     * @return \StructType\WSConductorConversation
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
     * Get ApplicationName value
     * @return string|null
     */
    public function getApplicationName()
    {
        return $this->ApplicationName;
    }
    /**
     * Set ApplicationName value
     * @param string $applicationName
     * @return \StructType\WSConductorConversation
     */
    public function setApplicationName($applicationName = null)
    {
        // validation for constraint: string
        if (!is_null($applicationName) && !is_string($applicationName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($applicationName)), __LINE__);
        }
        $this->ApplicationName = $applicationName;
        return $this;
    }
    /**
     * Get NotificationFromName value
     * @return string|null
     */
    public function getNotificationFromName()
    {
        return $this->NotificationFromName;
    }
    /**
     * Set NotificationFromName value
     * @param string $notificationFromName
     * @return \StructType\WSConductorConversation
     */
    public function setNotificationFromName($notificationFromName = null)
    {
        // validation for constraint: string
        if (!is_null($notificationFromName) && !is_string($notificationFromName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notificationFromName)), __LINE__);
        }
        $this->NotificationFromName = $notificationFromName;
        return $this;
    }
    /**
     * Get NotificationFromAddress value
     * @return string|null
     */
    public function getNotificationFromAddress()
    {
        return $this->NotificationFromAddress;
    }
    /**
     * Set NotificationFromAddress value
     * @param string $notificationFromAddress
     * @return \StructType\WSConductorConversation
     */
    public function setNotificationFromAddress($notificationFromAddress = null)
    {
        // validation for constraint: string
        if (!is_null($notificationFromAddress) && !is_string($notificationFromAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notificationFromAddress)), __LINE__);
        }
        $this->NotificationFromAddress = $notificationFromAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSConductorConversation
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
