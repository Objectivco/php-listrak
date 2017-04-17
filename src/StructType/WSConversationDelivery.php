<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSConversationDelivery StructType
 * @subpackage Structs
 */
class WSConversationDelivery extends AbstractStructBase
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
     * The ConversationID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ConversationID;
    /**
     * The PublishedDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PublishedDate;
    /**
     * The SendCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SendCount;
    /**
     * The DeliverCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $DeliverCount;
    /**
     * The DeliverRate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $DeliverRate;
    /**
     * The BounceCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $BounceCount;
    /**
     * The BounceRate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $BounceRate;
    /**
     * The PassAlongCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $PassAlongCount;
    /**
     * The CampaignName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CampaignName;
    /**
     * The ConversationName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ConversationName;
    /**
     * Constructor method for WSConversationDelivery
     * @uses WSConversationDelivery::setListID()
     * @uses WSConversationDelivery::setCampaignID()
     * @uses WSConversationDelivery::setConversationID()
     * @uses WSConversationDelivery::setPublishedDate()
     * @uses WSConversationDelivery::setSendCount()
     * @uses WSConversationDelivery::setDeliverCount()
     * @uses WSConversationDelivery::setDeliverRate()
     * @uses WSConversationDelivery::setBounceCount()
     * @uses WSConversationDelivery::setBounceRate()
     * @uses WSConversationDelivery::setPassAlongCount()
     * @uses WSConversationDelivery::setCampaignName()
     * @uses WSConversationDelivery::setConversationName()
     * @param int $listID
     * @param int $campaignID
     * @param int $conversationID
     * @param string $publishedDate
     * @param int $sendCount
     * @param int $deliverCount
     * @param float $deliverRate
     * @param int $bounceCount
     * @param float $bounceRate
     * @param int $passAlongCount
     * @param string $campaignName
     * @param string $conversationName
     */
    public function __construct($listID = null, $campaignID = null, $conversationID = null, $publishedDate = null, $sendCount = null, $deliverCount = null, $deliverRate = null, $bounceCount = null, $bounceRate = null, $passAlongCount = null, $campaignName = null, $conversationName = null)
    {
        $this
            ->setListID($listID)
            ->setCampaignID($campaignID)
            ->setConversationID($conversationID)
            ->setPublishedDate($publishedDate)
            ->setSendCount($sendCount)
            ->setDeliverCount($deliverCount)
            ->setDeliverRate($deliverRate)
            ->setBounceCount($bounceCount)
            ->setBounceRate($bounceRate)
            ->setPassAlongCount($passAlongCount)
            ->setCampaignName($campaignName)
            ->setConversationName($conversationName);
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
     * @return \StructType\WSConversationDelivery
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
     * @return \StructType\WSConversationDelivery
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
     * @return \StructType\WSConversationDelivery
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
     * Get PublishedDate value
     * @return string
     */
    public function getPublishedDate()
    {
        return $this->PublishedDate;
    }
    /**
     * Set PublishedDate value
     * @param string $publishedDate
     * @return \StructType\WSConversationDelivery
     */
    public function setPublishedDate($publishedDate = null)
    {
        // validation for constraint: string
        if (!is_null($publishedDate) && !is_string($publishedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($publishedDate)), __LINE__);
        }
        $this->PublishedDate = $publishedDate;
        return $this;
    }
    /**
     * Get SendCount value
     * @return int
     */
    public function getSendCount()
    {
        return $this->SendCount;
    }
    /**
     * Set SendCount value
     * @param int $sendCount
     * @return \StructType\WSConversationDelivery
     */
    public function setSendCount($sendCount = null)
    {
        // validation for constraint: int
        if (!is_null($sendCount) && !is_numeric($sendCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sendCount)), __LINE__);
        }
        $this->SendCount = $sendCount;
        return $this;
    }
    /**
     * Get DeliverCount value
     * @return int
     */
    public function getDeliverCount()
    {
        return $this->DeliverCount;
    }
    /**
     * Set DeliverCount value
     * @param int $deliverCount
     * @return \StructType\WSConversationDelivery
     */
    public function setDeliverCount($deliverCount = null)
    {
        // validation for constraint: int
        if (!is_null($deliverCount) && !is_numeric($deliverCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($deliverCount)), __LINE__);
        }
        $this->DeliverCount = $deliverCount;
        return $this;
    }
    /**
     * Get DeliverRate value
     * @return float
     */
    public function getDeliverRate()
    {
        return $this->DeliverRate;
    }
    /**
     * Set DeliverRate value
     * @param float $deliverRate
     * @return \StructType\WSConversationDelivery
     */
    public function setDeliverRate($deliverRate = null)
    {
        $this->DeliverRate = $deliverRate;
        return $this;
    }
    /**
     * Get BounceCount value
     * @return int
     */
    public function getBounceCount()
    {
        return $this->BounceCount;
    }
    /**
     * Set BounceCount value
     * @param int $bounceCount
     * @return \StructType\WSConversationDelivery
     */
    public function setBounceCount($bounceCount = null)
    {
        // validation for constraint: int
        if (!is_null($bounceCount) && !is_numeric($bounceCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bounceCount)), __LINE__);
        }
        $this->BounceCount = $bounceCount;
        return $this;
    }
    /**
     * Get BounceRate value
     * @return float
     */
    public function getBounceRate()
    {
        return $this->BounceRate;
    }
    /**
     * Set BounceRate value
     * @param float $bounceRate
     * @return \StructType\WSConversationDelivery
     */
    public function setBounceRate($bounceRate = null)
    {
        $this->BounceRate = $bounceRate;
        return $this;
    }
    /**
     * Get PassAlongCount value
     * @return int
     */
    public function getPassAlongCount()
    {
        return $this->PassAlongCount;
    }
    /**
     * Set PassAlongCount value
     * @param int $passAlongCount
     * @return \StructType\WSConversationDelivery
     */
    public function setPassAlongCount($passAlongCount = null)
    {
        // validation for constraint: int
        if (!is_null($passAlongCount) && !is_numeric($passAlongCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($passAlongCount)), __LINE__);
        }
        $this->PassAlongCount = $passAlongCount;
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
     * @return \StructType\WSConversationDelivery
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
     * Get ConversationName value
     * @return string|null
     */
    public function getConversationName()
    {
        return $this->ConversationName;
    }
    /**
     * Set ConversationName value
     * @param string $conversationName
     * @return \StructType\WSConversationDelivery
     */
    public function setConversationName($conversationName = null)
    {
        // validation for constraint: string
        if (!is_null($conversationName) && !is_string($conversationName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($conversationName)), __LINE__);
        }
        $this->ConversationName = $conversationName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSConversationDelivery
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
