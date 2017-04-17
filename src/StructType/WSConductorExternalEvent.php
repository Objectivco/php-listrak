<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSConductorExternalEvent StructType
 * @subpackage Structs
 */
class WSConductorExternalEvent extends AbstractStructBase
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
     * The EventID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $EventID;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Status;
    /**
     * The ConversationCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ConversationCount;
    /**
     * The LastModifiedDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $LastModifiedDate;
    /**
     * The EventName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EventName;
    /**
     * Constructor method for WSConductorExternalEvent
     * @uses WSConductorExternalEvent::setListID()
     * @uses WSConductorExternalEvent::setEventID()
     * @uses WSConductorExternalEvent::setStatus()
     * @uses WSConductorExternalEvent::setConversationCount()
     * @uses WSConductorExternalEvent::setLastModifiedDate()
     * @uses WSConductorExternalEvent::setEventName()
     * @param int $listID
     * @param int $eventID
     * @param string $status
     * @param int $conversationCount
     * @param string $lastModifiedDate
     * @param string $eventName
     */
    public function __construct($listID = null, $eventID = null, $status = null, $conversationCount = null, $lastModifiedDate = null, $eventName = null)
    {
        $this
            ->setListID($listID)
            ->setEventID($eventID)
            ->setStatus($status)
            ->setConversationCount($conversationCount)
            ->setLastModifiedDate($lastModifiedDate)
            ->setEventName($eventName);
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
     * @return \StructType\WSConductorExternalEvent
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
     * Get EventID value
     * @return int
     */
    public function getEventID()
    {
        return $this->EventID;
    }
    /**
     * Set EventID value
     * @param int $eventID
     * @return \StructType\WSConductorExternalEvent
     */
    public function setEventID($eventID = null)
    {
        // validation for constraint: int
        if (!is_null($eventID) && !is_numeric($eventID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($eventID)), __LINE__);
        }
        $this->EventID = $eventID;
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
     * @uses \EnumType\ExternalEventStatus::valueIsValid()
     * @uses \EnumType\ExternalEventStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\WSConductorExternalEvent
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ExternalEventStatus::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \EnumType\ExternalEventStatus::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get ConversationCount value
     * @return int
     */
    public function getConversationCount()
    {
        return $this->ConversationCount;
    }
    /**
     * Set ConversationCount value
     * @param int $conversationCount
     * @return \StructType\WSConductorExternalEvent
     */
    public function setConversationCount($conversationCount = null)
    {
        // validation for constraint: int
        if (!is_null($conversationCount) && !is_numeric($conversationCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($conversationCount)), __LINE__);
        }
        $this->ConversationCount = $conversationCount;
        return $this;
    }
    /**
     * Get LastModifiedDate value
     * @return string
     */
    public function getLastModifiedDate()
    {
        return $this->LastModifiedDate;
    }
    /**
     * Set LastModifiedDate value
     * @param string $lastModifiedDate
     * @return \StructType\WSConductorExternalEvent
     */
    public function setLastModifiedDate($lastModifiedDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastModifiedDate) && !is_string($lastModifiedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastModifiedDate)), __LINE__);
        }
        $this->LastModifiedDate = $lastModifiedDate;
        return $this;
    }
    /**
     * Get EventName value
     * @return string|null
     */
    public function getEventName()
    {
        return $this->EventName;
    }
    /**
     * Set EventName value
     * @param string $eventName
     * @return \StructType\WSConductorExternalEvent
     */
    public function setEventName($eventName = null)
    {
        // validation for constraint: string
        if (!is_null($eventName) && !is_string($eventName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eventName)), __LINE__);
        }
        $this->EventName = $eventName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSConductorExternalEvent
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
