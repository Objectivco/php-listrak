<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSMessageDelivery StructType
 * @subpackage Structs
 */
class WSMessageDelivery extends AbstractStructBase
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
     * The MsgID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $MsgID;
    /**
     * The SendDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SendDate;
    /**
     * The DeliverCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $DeliverCount;
    /**
     * The DeliverPercent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $DeliverPercent;
    /**
     * The BounceCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $BounceCount;
    /**
     * The BouncePercent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $BouncePercent;
    /**
     * The PassAlongCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $PassAlongCount;
    /**
     * The Subject
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * Constructor method for WSMessageDelivery
     * @uses WSMessageDelivery::setListID()
     * @uses WSMessageDelivery::setMsgID()
     * @uses WSMessageDelivery::setSendDate()
     * @uses WSMessageDelivery::setDeliverCount()
     * @uses WSMessageDelivery::setDeliverPercent()
     * @uses WSMessageDelivery::setBounceCount()
     * @uses WSMessageDelivery::setBouncePercent()
     * @uses WSMessageDelivery::setPassAlongCount()
     * @uses WSMessageDelivery::setSubject()
     * @param int $listID
     * @param int $msgID
     * @param string $sendDate
     * @param int $deliverCount
     * @param float $deliverPercent
     * @param int $bounceCount
     * @param float $bouncePercent
     * @param int $passAlongCount
     * @param string $subject
     */
    public function __construct($listID = null, $msgID = null, $sendDate = null, $deliverCount = null, $deliverPercent = null, $bounceCount = null, $bouncePercent = null, $passAlongCount = null, $subject = null)
    {
        $this
            ->setListID($listID)
            ->setMsgID($msgID)
            ->setSendDate($sendDate)
            ->setDeliverCount($deliverCount)
            ->setDeliverPercent($deliverPercent)
            ->setBounceCount($bounceCount)
            ->setBouncePercent($bouncePercent)
            ->setPassAlongCount($passAlongCount)
            ->setSubject($subject);
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
     * @return \StructType\WSMessageDelivery
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
     * @return \StructType\WSMessageDelivery
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
     * Get SendDate value
     * @return string
     */
    public function getSendDate()
    {
        return $this->SendDate;
    }
    /**
     * Set SendDate value
     * @param string $sendDate
     * @return \StructType\WSMessageDelivery
     */
    public function setSendDate($sendDate = null)
    {
        // validation for constraint: string
        if (!is_null($sendDate) && !is_string($sendDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sendDate)), __LINE__);
        }
        $this->SendDate = $sendDate;
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
     * @return \StructType\WSMessageDelivery
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
     * Get DeliverPercent value
     * @return float
     */
    public function getDeliverPercent()
    {
        return $this->DeliverPercent;
    }
    /**
     * Set DeliverPercent value
     * @param float $deliverPercent
     * @return \StructType\WSMessageDelivery
     */
    public function setDeliverPercent($deliverPercent = null)
    {
        $this->DeliverPercent = $deliverPercent;
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
     * @return \StructType\WSMessageDelivery
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
     * Get BouncePercent value
     * @return float
     */
    public function getBouncePercent()
    {
        return $this->BouncePercent;
    }
    /**
     * Set BouncePercent value
     * @param float $bouncePercent
     * @return \StructType\WSMessageDelivery
     */
    public function setBouncePercent($bouncePercent = null)
    {
        $this->BouncePercent = $bouncePercent;
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
     * @return \StructType\WSMessageDelivery
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
     * Get Subject value
     * @return string|null
     */
    public function getSubject()
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \StructType\WSMessageDelivery
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSMessageDelivery
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
