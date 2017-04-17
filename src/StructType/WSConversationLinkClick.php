<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSConversationLinkClick StructType
 * @subpackage Structs
 */
class WSConversationLinkClick extends AbstractStructBase
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
     * The LinkID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $LinkID;
    /**
     * The ClickCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ClickCount;
    /**
     * The ClickPercent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $ClickPercent;
    /**
     * The ClickerCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ClickerCount;
    /**
     * The SendCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SendCount;
    /**
     * The Subject
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * The LinkDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LinkDescription;
    /**
     * The LinkURL
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LinkURL;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * Constructor method for WSConversationLinkClick
     * @uses WSConversationLinkClick::setMsgID()
     * @uses WSConversationLinkClick::setLinkID()
     * @uses WSConversationLinkClick::setClickCount()
     * @uses WSConversationLinkClick::setClickPercent()
     * @uses WSConversationLinkClick::setClickerCount()
     * @uses WSConversationLinkClick::setSendCount()
     * @uses WSConversationLinkClick::setSubject()
     * @uses WSConversationLinkClick::setLinkDescription()
     * @uses WSConversationLinkClick::setLinkURL()
     * @uses WSConversationLinkClick::setType()
     * @param int $msgID
     * @param int $linkID
     * @param int $clickCount
     * @param float $clickPercent
     * @param int $clickerCount
     * @param int $sendCount
     * @param string $subject
     * @param string $linkDescription
     * @param string $linkURL
     * @param string $type
     */
    public function __construct($msgID = null, $linkID = null, $clickCount = null, $clickPercent = null, $clickerCount = null, $sendCount = null, $subject = null, $linkDescription = null, $linkURL = null, $type = null)
    {
        $this
            ->setMsgID($msgID)
            ->setLinkID($linkID)
            ->setClickCount($clickCount)
            ->setClickPercent($clickPercent)
            ->setClickerCount($clickerCount)
            ->setSendCount($sendCount)
            ->setSubject($subject)
            ->setLinkDescription($linkDescription)
            ->setLinkURL($linkURL)
            ->setType($type);
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
     * @return \StructType\WSConversationLinkClick
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
     * Get LinkID value
     * @return int
     */
    public function getLinkID()
    {
        return $this->LinkID;
    }
    /**
     * Set LinkID value
     * @param int $linkID
     * @return \StructType\WSConversationLinkClick
     */
    public function setLinkID($linkID = null)
    {
        // validation for constraint: int
        if (!is_null($linkID) && !is_numeric($linkID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($linkID)), __LINE__);
        }
        $this->LinkID = $linkID;
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
     * @return \StructType\WSConversationLinkClick
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
     * Get ClickPercent value
     * @return float
     */
    public function getClickPercent()
    {
        return $this->ClickPercent;
    }
    /**
     * Set ClickPercent value
     * @param float $clickPercent
     * @return \StructType\WSConversationLinkClick
     */
    public function setClickPercent($clickPercent = null)
    {
        $this->ClickPercent = $clickPercent;
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
     * @return \StructType\WSConversationLinkClick
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
     * @return \StructType\WSConversationLinkClick
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
     * @return \StructType\WSConversationLinkClick
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
     * Get LinkDescription value
     * @return string|null
     */
    public function getLinkDescription()
    {
        return $this->LinkDescription;
    }
    /**
     * Set LinkDescription value
     * @param string $linkDescription
     * @return \StructType\WSConversationLinkClick
     */
    public function setLinkDescription($linkDescription = null)
    {
        // validation for constraint: string
        if (!is_null($linkDescription) && !is_string($linkDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($linkDescription)), __LINE__);
        }
        $this->LinkDescription = $linkDescription;
        return $this;
    }
    /**
     * Get LinkURL value
     * @return string|null
     */
    public function getLinkURL()
    {
        return $this->LinkURL;
    }
    /**
     * Set LinkURL value
     * @param string $linkURL
     * @return \StructType\WSConversationLinkClick
     */
    public function setLinkURL($linkURL = null)
    {
        // validation for constraint: string
        if (!is_null($linkURL) && !is_string($linkURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($linkURL)), __LINE__);
        }
        $this->LinkURL = $linkURL;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \StructType\WSConversationLinkClick
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSConversationLinkClick
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
