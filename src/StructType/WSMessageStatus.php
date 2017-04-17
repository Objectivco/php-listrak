<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSMessageStatus StructType
 * @subpackage Structs
 */
class WSMessageStatus extends AbstractStructBase
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
     * The DeliveryType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DeliveryType;
    /**
     * The MessageStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $MessageStatus;
    /**
     * The SentCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SentCount;
    /**
     * The StartTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $EndTime;
    /**
     * Constructor method for WSMessageStatus
     * @uses WSMessageStatus::setMsgID()
     * @uses WSMessageStatus::setDeliveryType()
     * @uses WSMessageStatus::setMessageStatus()
     * @uses WSMessageStatus::setSentCount()
     * @uses WSMessageStatus::setStartTime()
     * @uses WSMessageStatus::setEndTime()
     * @param int $msgID
     * @param string $deliveryType
     * @param string $messageStatus
     * @param int $sentCount
     * @param string $startTime
     * @param string $endTime
     */
    public function __construct($msgID = null, $deliveryType = null, $messageStatus = null, $sentCount = null, $startTime = null, $endTime = null)
    {
        $this
            ->setMsgID($msgID)
            ->setDeliveryType($deliveryType)
            ->setMessageStatus($messageStatus)
            ->setSentCount($sentCount)
            ->setStartTime($startTime)
            ->setEndTime($endTime);
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
     * @return \StructType\WSMessageStatus
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
     * Get DeliveryType value
     * @return string
     */
    public function getDeliveryType()
    {
        return $this->DeliveryType;
    }
    /**
     * Set DeliveryType value
     * @uses \EnumType\MessageDeliveryType::valueIsValid()
     * @uses \EnumType\MessageDeliveryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deliveryType
     * @return \StructType\WSMessageStatus
     */
    public function setDeliveryType($deliveryType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\MessageDeliveryType::valueIsValid($deliveryType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deliveryType, implode(', ', \EnumType\MessageDeliveryType::getValidValues())), __LINE__);
        }
        $this->DeliveryType = $deliveryType;
        return $this;
    }
    /**
     * Get MessageStatus value
     * @return string
     */
    public function getMessageStatus()
    {
        return $this->MessageStatus;
    }
    /**
     * Set MessageStatus value
     * @uses \EnumType\SentFlag::valueIsValid()
     * @uses \EnumType\SentFlag::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $messageStatus
     * @return \StructType\WSMessageStatus
     */
    public function setMessageStatus($messageStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SentFlag::valueIsValid($messageStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $messageStatus, implode(', ', \EnumType\SentFlag::getValidValues())), __LINE__);
        }
        $this->MessageStatus = $messageStatus;
        return $this;
    }
    /**
     * Get SentCount value
     * @return int
     */
    public function getSentCount()
    {
        return $this->SentCount;
    }
    /**
     * Set SentCount value
     * @param int $sentCount
     * @return \StructType\WSMessageStatus
     */
    public function setSentCount($sentCount = null)
    {
        // validation for constraint: int
        if (!is_null($sentCount) && !is_numeric($sentCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sentCount)), __LINE__);
        }
        $this->SentCount = $sentCount;
        return $this;
    }
    /**
     * Get StartTime value
     * @return string
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \StructType\WSMessageStatus
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return string
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \StructType\WSMessageStatus
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSMessageStatus
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
