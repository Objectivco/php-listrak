<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSConversationActivity StructType
 * @subpackage Structs
 */
class WSConversationActivity extends AbstractStructBase
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
     * The ContactCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ContactCount;
    /**
     * The WaitingCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $WaitingCount;
    /**
     * The TerminatedCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $TerminatedCount;
    /**
     * The DeliverCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $DeliverCount;
    /**
     * The RemoveCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $RemoveCount;
    /**
     * The RemoveRate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $RemoveRate;
    /**
     * The OpenCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $OpenCount;
    /**
     * The OpenRate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $OpenRate;
    /**
     * The ReadCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ReadCount;
    /**
     * The ReadRate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $ReadRate;
    /**
     * The ClickCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ClickCount;
    /**
     * The OrderTotal
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $OrderTotal;
    /**
     * The ConversionCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ConversionCount;
    /**
     * The AverageOrderValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $AverageOrderValue;
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
     * Constructor method for WSConversationActivity
     * @uses WSConversationActivity::setListID()
     * @uses WSConversationActivity::setCampaignID()
     * @uses WSConversationActivity::setConversationID()
     * @uses WSConversationActivity::setPublishedDate()
     * @uses WSConversationActivity::setContactCount()
     * @uses WSConversationActivity::setWaitingCount()
     * @uses WSConversationActivity::setTerminatedCount()
     * @uses WSConversationActivity::setDeliverCount()
     * @uses WSConversationActivity::setRemoveCount()
     * @uses WSConversationActivity::setRemoveRate()
     * @uses WSConversationActivity::setOpenCount()
     * @uses WSConversationActivity::setOpenRate()
     * @uses WSConversationActivity::setReadCount()
     * @uses WSConversationActivity::setReadRate()
     * @uses WSConversationActivity::setClickCount()
     * @uses WSConversationActivity::setOrderTotal()
     * @uses WSConversationActivity::setConversionCount()
     * @uses WSConversationActivity::setAverageOrderValue()
     * @uses WSConversationActivity::setCampaignName()
     * @uses WSConversationActivity::setConversationName()
     * @param int $listID
     * @param int $campaignID
     * @param int $conversationID
     * @param string $publishedDate
     * @param int $contactCount
     * @param int $waitingCount
     * @param int $terminatedCount
     * @param int $deliverCount
     * @param int $removeCount
     * @param float $removeRate
     * @param int $openCount
     * @param float $openRate
     * @param int $readCount
     * @param float $readRate
     * @param int $clickCount
     * @param float $orderTotal
     * @param int $conversionCount
     * @param float $averageOrderValue
     * @param string $campaignName
     * @param string $conversationName
     */
    public function __construct($listID = null, $campaignID = null, $conversationID = null, $publishedDate = null, $contactCount = null, $waitingCount = null, $terminatedCount = null, $deliverCount = null, $removeCount = null, $removeRate = null, $openCount = null, $openRate = null, $readCount = null, $readRate = null, $clickCount = null, $orderTotal = null, $conversionCount = null, $averageOrderValue = null, $campaignName = null, $conversationName = null)
    {
        $this
            ->setListID($listID)
            ->setCampaignID($campaignID)
            ->setConversationID($conversationID)
            ->setPublishedDate($publishedDate)
            ->setContactCount($contactCount)
            ->setWaitingCount($waitingCount)
            ->setTerminatedCount($terminatedCount)
            ->setDeliverCount($deliverCount)
            ->setRemoveCount($removeCount)
            ->setRemoveRate($removeRate)
            ->setOpenCount($openCount)
            ->setOpenRate($openRate)
            ->setReadCount($readCount)
            ->setReadRate($readRate)
            ->setClickCount($clickCount)
            ->setOrderTotal($orderTotal)
            ->setConversionCount($conversionCount)
            ->setAverageOrderValue($averageOrderValue)
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
     * @return \StructType\WSConversationActivity
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
     * @return \StructType\WSConversationActivity
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
     * @return \StructType\WSConversationActivity
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
     * @return \StructType\WSConversationActivity
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
     * Get ContactCount value
     * @return int
     */
    public function getContactCount()
    {
        return $this->ContactCount;
    }
    /**
     * Set ContactCount value
     * @param int $contactCount
     * @return \StructType\WSConversationActivity
     */
    public function setContactCount($contactCount = null)
    {
        // validation for constraint: int
        if (!is_null($contactCount) && !is_numeric($contactCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($contactCount)), __LINE__);
        }
        $this->ContactCount = $contactCount;
        return $this;
    }
    /**
     * Get WaitingCount value
     * @return int
     */
    public function getWaitingCount()
    {
        return $this->WaitingCount;
    }
    /**
     * Set WaitingCount value
     * @param int $waitingCount
     * @return \StructType\WSConversationActivity
     */
    public function setWaitingCount($waitingCount = null)
    {
        // validation for constraint: int
        if (!is_null($waitingCount) && !is_numeric($waitingCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($waitingCount)), __LINE__);
        }
        $this->WaitingCount = $waitingCount;
        return $this;
    }
    /**
     * Get TerminatedCount value
     * @return int
     */
    public function getTerminatedCount()
    {
        return $this->TerminatedCount;
    }
    /**
     * Set TerminatedCount value
     * @param int $terminatedCount
     * @return \StructType\WSConversationActivity
     */
    public function setTerminatedCount($terminatedCount = null)
    {
        // validation for constraint: int
        if (!is_null($terminatedCount) && !is_numeric($terminatedCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($terminatedCount)), __LINE__);
        }
        $this->TerminatedCount = $terminatedCount;
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
     * @return \StructType\WSConversationActivity
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
     * Get RemoveCount value
     * @return int
     */
    public function getRemoveCount()
    {
        return $this->RemoveCount;
    }
    /**
     * Set RemoveCount value
     * @param int $removeCount
     * @return \StructType\WSConversationActivity
     */
    public function setRemoveCount($removeCount = null)
    {
        // validation for constraint: int
        if (!is_null($removeCount) && !is_numeric($removeCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($removeCount)), __LINE__);
        }
        $this->RemoveCount = $removeCount;
        return $this;
    }
    /**
     * Get RemoveRate value
     * @return float
     */
    public function getRemoveRate()
    {
        return $this->RemoveRate;
    }
    /**
     * Set RemoveRate value
     * @param float $removeRate
     * @return \StructType\WSConversationActivity
     */
    public function setRemoveRate($removeRate = null)
    {
        $this->RemoveRate = $removeRate;
        return $this;
    }
    /**
     * Get OpenCount value
     * @return int
     */
    public function getOpenCount()
    {
        return $this->OpenCount;
    }
    /**
     * Set OpenCount value
     * @param int $openCount
     * @return \StructType\WSConversationActivity
     */
    public function setOpenCount($openCount = null)
    {
        // validation for constraint: int
        if (!is_null($openCount) && !is_numeric($openCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($openCount)), __LINE__);
        }
        $this->OpenCount = $openCount;
        return $this;
    }
    /**
     * Get OpenRate value
     * @return float
     */
    public function getOpenRate()
    {
        return $this->OpenRate;
    }
    /**
     * Set OpenRate value
     * @param float $openRate
     * @return \StructType\WSConversationActivity
     */
    public function setOpenRate($openRate = null)
    {
        $this->OpenRate = $openRate;
        return $this;
    }
    /**
     * Get ReadCount value
     * @return int
     */
    public function getReadCount()
    {
        return $this->ReadCount;
    }
    /**
     * Set ReadCount value
     * @param int $readCount
     * @return \StructType\WSConversationActivity
     */
    public function setReadCount($readCount = null)
    {
        // validation for constraint: int
        if (!is_null($readCount) && !is_numeric($readCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($readCount)), __LINE__);
        }
        $this->ReadCount = $readCount;
        return $this;
    }
    /**
     * Get ReadRate value
     * @return float
     */
    public function getReadRate()
    {
        return $this->ReadRate;
    }
    /**
     * Set ReadRate value
     * @param float $readRate
     * @return \StructType\WSConversationActivity
     */
    public function setReadRate($readRate = null)
    {
        $this->ReadRate = $readRate;
        return $this;
    }
    /**
     * Get ClickCount value
     * @return int
     */
    public function getClickCount()
    {
        return $this->ClickCount;
    }
    /**
     * Set ClickCount value
     * @param int $clickCount
     * @return \StructType\WSConversationActivity
     */
    public function setClickCount($clickCount = null)
    {
        // validation for constraint: int
        if (!is_null($clickCount) && !is_numeric($clickCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($clickCount)), __LINE__);
        }
        $this->ClickCount = $clickCount;
        return $this;
    }
    /**
     * Get OrderTotal value
     * @return float
     */
    public function getOrderTotal()
    {
        return $this->OrderTotal;
    }
    /**
     * Set OrderTotal value
     * @param float $orderTotal
     * @return \StructType\WSConversationActivity
     */
    public function setOrderTotal($orderTotal = null)
    {
        $this->OrderTotal = $orderTotal;
        return $this;
    }
    /**
     * Get ConversionCount value
     * @return int
     */
    public function getConversionCount()
    {
        return $this->ConversionCount;
    }
    /**
     * Set ConversionCount value
     * @param int $conversionCount
     * @return \StructType\WSConversationActivity
     */
    public function setConversionCount($conversionCount = null)
    {
        // validation for constraint: int
        if (!is_null($conversionCount) && !is_numeric($conversionCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($conversionCount)), __LINE__);
        }
        $this->ConversionCount = $conversionCount;
        return $this;
    }
    /**
     * Get AverageOrderValue value
     * @return float
     */
    public function getAverageOrderValue()
    {
        return $this->AverageOrderValue;
    }
    /**
     * Set AverageOrderValue value
     * @param float $averageOrderValue
     * @return \StructType\WSConversationActivity
     */
    public function setAverageOrderValue($averageOrderValue = null)
    {
        $this->AverageOrderValue = $averageOrderValue;
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
     * @return \StructType\WSConversationActivity
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
     * @return \StructType\WSConversationActivity
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
     * @return \StructType\WSConversationActivity
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
