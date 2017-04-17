<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSMessageContactActivity StructType
 * @subpackage Structs
 */
class WSMessageContactActivity extends AbstractStructBase
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
     * The SendDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SendDate;
    /**
     * The Opened
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $Opened;
    /**
     * The Read
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $Read;
    /**
     * The ClickCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ClickCount;
    /**
     * The BounceCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $BounceCount;
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EmailAddress;
    /**
     * Constructor method for WSMessageContactActivity
     * @uses WSMessageContactActivity::setMsgID()
     * @uses WSMessageContactActivity::setContactID()
     * @uses WSMessageContactActivity::setSendDate()
     * @uses WSMessageContactActivity::setOpened()
     * @uses WSMessageContactActivity::setRead()
     * @uses WSMessageContactActivity::setClickCount()
     * @uses WSMessageContactActivity::setBounceCount()
     * @uses WSMessageContactActivity::setEmailAddress()
     * @param int $msgID
     * @param int $contactID
     * @param string $sendDate
     * @param bool $opened
     * @param bool $read
     * @param int $clickCount
     * @param int $bounceCount
     * @param string $emailAddress
     */
    public function __construct($msgID = null, $contactID = null, $sendDate = null, $opened = null, $read = null, $clickCount = null, $bounceCount = null, $emailAddress = null)
    {
        $this
            ->setMsgID($msgID)
            ->setContactID($contactID)
            ->setSendDate($sendDate)
            ->setOpened($opened)
            ->setRead($read)
            ->setClickCount($clickCount)
            ->setBounceCount($bounceCount)
            ->setEmailAddress($emailAddress);
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
     * @return \StructType\WSMessageContactActivity
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
     * @return \StructType\WSMessageContactActivity
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
     * @return \StructType\WSMessageContactActivity
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
     * Get Opened value
     * @return bool
     */
    public function getOpened()
    {
        return $this->Opened;
    }
    /**
     * Set Opened value
     * @param bool $opened
     * @return \StructType\WSMessageContactActivity
     */
    public function setOpened($opened = null)
    {
        $this->Opened = $opened;
        return $this;
    }
    /**
     * Get Read value
     * @return bool
     */
    public function getRead()
    {
        return $this->Read;
    }
    /**
     * Set Read value
     * @param bool $read
     * @return \StructType\WSMessageContactActivity
     */
    public function setRead($read = null)
    {
        $this->Read = $read;
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
     * @return \StructType\WSMessageContactActivity
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
     * @return \StructType\WSMessageContactActivity
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
     * @return \StructType\WSMessageContactActivity
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSMessageContactActivity
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
