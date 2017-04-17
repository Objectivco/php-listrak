<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSMessageActivity StructType
 * @subpackage Structs
 */
class WSMessageActivity extends AbstractStructBase
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
     * The RemoveCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $RemoveCount;
    /**
     * The RemovePercent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $RemovePercent;
    /**
     * The OpenCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $OpenCount;
    /**
     * The OpenPercent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $OpenPercent;
    /**
     * The ReadCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ReadCount;
    /**
     * The ReadPercent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $ReadPercent;
    /**
     * The ClickCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ClickCount;
    /**
     * The ClickerCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ClickerCount;
    /**
     * The RepeatClickerCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $RepeatClickerCount;
    /**
     * The NewClickerCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $NewClickerCount;
    /**
     * The ClickerPercent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $ClickerPercent;
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
     * The Subject
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * Constructor method for WSMessageActivity
     * @uses WSMessageActivity::setListID()
     * @uses WSMessageActivity::setMsgID()
     * @uses WSMessageActivity::setSendDate()
     * @uses WSMessageActivity::setDeliverCount()
     * @uses WSMessageActivity::setRemoveCount()
     * @uses WSMessageActivity::setRemovePercent()
     * @uses WSMessageActivity::setOpenCount()
     * @uses WSMessageActivity::setOpenPercent()
     * @uses WSMessageActivity::setReadCount()
     * @uses WSMessageActivity::setReadPercent()
     * @uses WSMessageActivity::setClickCount()
     * @uses WSMessageActivity::setClickerCount()
     * @uses WSMessageActivity::setRepeatClickerCount()
     * @uses WSMessageActivity::setNewClickerCount()
     * @uses WSMessageActivity::setClickerPercent()
     * @uses WSMessageActivity::setOrderTotal()
     * @uses WSMessageActivity::setConversionCount()
     * @uses WSMessageActivity::setAverageOrderValue()
     * @uses WSMessageActivity::setSubject()
     * @param int $listID
     * @param int $msgID
     * @param string $sendDate
     * @param int $deliverCount
     * @param int $removeCount
     * @param float $removePercent
     * @param int $openCount
     * @param float $openPercent
     * @param int $readCount
     * @param float $readPercent
     * @param int $clickCount
     * @param int $clickerCount
     * @param int $repeatClickerCount
     * @param int $newClickerCount
     * @param float $clickerPercent
     * @param float $orderTotal
     * @param int $conversionCount
     * @param float $averageOrderValue
     * @param string $subject
     */
    public function __construct($listID = null, $msgID = null, $sendDate = null, $deliverCount = null, $removeCount = null, $removePercent = null, $openCount = null, $openPercent = null, $readCount = null, $readPercent = null, $clickCount = null, $clickerCount = null, $repeatClickerCount = null, $newClickerCount = null, $clickerPercent = null, $orderTotal = null, $conversionCount = null, $averageOrderValue = null, $subject = null)
    {
        $this
            ->setListID($listID)
            ->setMsgID($msgID)
            ->setSendDate($sendDate)
            ->setDeliverCount($deliverCount)
            ->setRemoveCount($removeCount)
            ->setRemovePercent($removePercent)
            ->setOpenCount($openCount)
            ->setOpenPercent($openPercent)
            ->setReadCount($readCount)
            ->setReadPercent($readPercent)
            ->setClickCount($clickCount)
            ->setClickerCount($clickerCount)
            ->setRepeatClickerCount($repeatClickerCount)
            ->setNewClickerCount($newClickerCount)
            ->setClickerPercent($clickerPercent)
            ->setOrderTotal($orderTotal)
            ->setConversionCount($conversionCount)
            ->setAverageOrderValue($averageOrderValue)
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
     * @return \StructType\WSMessageActivity
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
     * @return \StructType\WSMessageActivity
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
     * @return \StructType\WSMessageActivity
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
     * @return \StructType\WSMessageActivity
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
     * @return \StructType\WSMessageActivity
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
     * Get RemovePercent value
     * @return float
     */
    public function getRemovePercent()
    {
        return $this->RemovePercent;
    }
    /**
     * Set RemovePercent value
     * @param float $removePercent
     * @return \StructType\WSMessageActivity
     */
    public function setRemovePercent($removePercent = null)
    {
        $this->RemovePercent = $removePercent;
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
     * @return \StructType\WSMessageActivity
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
     * Get OpenPercent value
     * @return float
     */
    public function getOpenPercent()
    {
        return $this->OpenPercent;
    }
    /**
     * Set OpenPercent value
     * @param float $openPercent
     * @return \StructType\WSMessageActivity
     */
    public function setOpenPercent($openPercent = null)
    {
        $this->OpenPercent = $openPercent;
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
     * @return \StructType\WSMessageActivity
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
     * Get ReadPercent value
     * @return float
     */
    public function getReadPercent()
    {
        return $this->ReadPercent;
    }
    /**
     * Set ReadPercent value
     * @param float $readPercent
     * @return \StructType\WSMessageActivity
     */
    public function setReadPercent($readPercent = null)
    {
        $this->ReadPercent = $readPercent;
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
     * @return \StructType\WSMessageActivity
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
     * Get ClickerCount value
     * @return int
     */
    public function getClickerCount()
    {
        return $this->ClickerCount;
    }
    /**
     * Set ClickerCount value
     * @param int $clickerCount
     * @return \StructType\WSMessageActivity
     */
    public function setClickerCount($clickerCount = null)
    {
        // validation for constraint: int
        if (!is_null($clickerCount) && !is_numeric($clickerCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($clickerCount)), __LINE__);
        }
        $this->ClickerCount = $clickerCount;
        return $this;
    }
    /**
     * Get RepeatClickerCount value
     * @return int
     */
    public function getRepeatClickerCount()
    {
        return $this->RepeatClickerCount;
    }
    /**
     * Set RepeatClickerCount value
     * @param int $repeatClickerCount
     * @return \StructType\WSMessageActivity
     */
    public function setRepeatClickerCount($repeatClickerCount = null)
    {
        // validation for constraint: int
        if (!is_null($repeatClickerCount) && !is_numeric($repeatClickerCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($repeatClickerCount)), __LINE__);
        }
        $this->RepeatClickerCount = $repeatClickerCount;
        return $this;
    }
    /**
     * Get NewClickerCount value
     * @return int
     */
    public function getNewClickerCount()
    {
        return $this->NewClickerCount;
    }
    /**
     * Set NewClickerCount value
     * @param int $newClickerCount
     * @return \StructType\WSMessageActivity
     */
    public function setNewClickerCount($newClickerCount = null)
    {
        // validation for constraint: int
        if (!is_null($newClickerCount) && !is_numeric($newClickerCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($newClickerCount)), __LINE__);
        }
        $this->NewClickerCount = $newClickerCount;
        return $this;
    }
    /**
     * Get ClickerPercent value
     * @return float
     */
    public function getClickerPercent()
    {
        return $this->ClickerPercent;
    }
    /**
     * Set ClickerPercent value
     * @param float $clickerPercent
     * @return \StructType\WSMessageActivity
     */
    public function setClickerPercent($clickerPercent = null)
    {
        $this->ClickerPercent = $clickerPercent;
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
     * @return \StructType\WSMessageActivity
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
     * @return \StructType\WSMessageActivity
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
     * @return \StructType\WSMessageActivity
     */
    public function setAverageOrderValue($averageOrderValue = null)
    {
        $this->AverageOrderValue = $averageOrderValue;
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
     * @return \StructType\WSMessageActivity
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
     * @return \StructType\WSMessageActivity
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
