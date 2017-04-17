<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSMessageLink StructType
 * @subpackage Structs
 */
class WSMessageLink extends AbstractStructBase
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
     * The ClickerCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ClickerCount;
    /**
     * The ClickPercent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $ClickPercent;
    /**
     * The LinkURL
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LinkURL;
    /**
     * The LinkType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LinkType;
    /**
     * The LinkDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LinkDescription;
    /**
     * Constructor method for WSMessageLink
     * @uses WSMessageLink::setMsgID()
     * @uses WSMessageLink::setLinkID()
     * @uses WSMessageLink::setClickCount()
     * @uses WSMessageLink::setClickerCount()
     * @uses WSMessageLink::setClickPercent()
     * @uses WSMessageLink::setLinkURL()
     * @uses WSMessageLink::setLinkType()
     * @uses WSMessageLink::setLinkDescription()
     * @param int $msgID
     * @param int $linkID
     * @param int $clickCount
     * @param int $clickerCount
     * @param float $clickPercent
     * @param string $linkURL
     * @param string $linkType
     * @param string $linkDescription
     */
    public function __construct($msgID = null, $linkID = null, $clickCount = null, $clickerCount = null, $clickPercent = null, $linkURL = null, $linkType = null, $linkDescription = null)
    {
        $this
            ->setMsgID($msgID)
            ->setLinkID($linkID)
            ->setClickCount($clickCount)
            ->setClickerCount($clickerCount)
            ->setClickPercent($clickPercent)
            ->setLinkURL($linkURL)
            ->setLinkType($linkType)
            ->setLinkDescription($linkDescription);
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
     * @return \StructType\WSMessageLink
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
     * @return \StructType\WSMessageLink
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
     * @return \StructType\WSMessageLink
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
     * @return \StructType\WSMessageLink
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
     * @return \StructType\WSMessageLink
     */
    public function setClickPercent($clickPercent = null)
    {
        $this->ClickPercent = $clickPercent;
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
     * @return \StructType\WSMessageLink
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
     * Get LinkType value
     * @return string|null
     */
    public function getLinkType()
    {
        return $this->LinkType;
    }
    /**
     * Set LinkType value
     * @param string $linkType
     * @return \StructType\WSMessageLink
     */
    public function setLinkType($linkType = null)
    {
        // validation for constraint: string
        if (!is_null($linkType) && !is_string($linkType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($linkType)), __LINE__);
        }
        $this->LinkType = $linkType;
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
     * @return \StructType\WSMessageLink
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSMessageLink
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
