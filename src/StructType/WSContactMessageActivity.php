<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSContactMessageActivity StructType
 * @subpackage Structs
 */
class WSContactMessageActivity extends AbstractStructBase
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
     * The IsOpen
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsOpen;
    /**
     * The IsRead
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsRead;
    /**
     * The IsClick
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsClick;
    /**
     * The ListName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ListName;
    /**
     * The Subject
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * Constructor method for WSContactMessageActivity
     * @uses WSContactMessageActivity::setListID()
     * @uses WSContactMessageActivity::setMsgID()
     * @uses WSContactMessageActivity::setIsOpen()
     * @uses WSContactMessageActivity::setIsRead()
     * @uses WSContactMessageActivity::setIsClick()
     * @uses WSContactMessageActivity::setListName()
     * @uses WSContactMessageActivity::setSubject()
     * @param int $listID
     * @param int $msgID
     * @param bool $isOpen
     * @param bool $isRead
     * @param bool $isClick
     * @param string $listName
     * @param string $subject
     */
    public function __construct($listID = null, $msgID = null, $isOpen = null, $isRead = null, $isClick = null, $listName = null, $subject = null)
    {
        $this
            ->setListID($listID)
            ->setMsgID($msgID)
            ->setIsOpen($isOpen)
            ->setIsRead($isRead)
            ->setIsClick($isClick)
            ->setListName($listName)
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
     * @return \StructType\WSContactMessageActivity
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
     * @return \StructType\WSContactMessageActivity
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
     * Get IsOpen value
     * @return bool
     */
    public function getIsOpen()
    {
        return $this->IsOpen;
    }
    /**
     * Set IsOpen value
     * @param bool $isOpen
     * @return \StructType\WSContactMessageActivity
     */
    public function setIsOpen($isOpen = null)
    {
        $this->IsOpen = $isOpen;
        return $this;
    }
    /**
     * Get IsRead value
     * @return bool
     */
    public function getIsRead()
    {
        return $this->IsRead;
    }
    /**
     * Set IsRead value
     * @param bool $isRead
     * @return \StructType\WSContactMessageActivity
     */
    public function setIsRead($isRead = null)
    {
        $this->IsRead = $isRead;
        return $this;
    }
    /**
     * Get IsClick value
     * @return bool
     */
    public function getIsClick()
    {
        return $this->IsClick;
    }
    /**
     * Set IsClick value
     * @param bool $isClick
     * @return \StructType\WSContactMessageActivity
     */
    public function setIsClick($isClick = null)
    {
        $this->IsClick = $isClick;
        return $this;
    }
    /**
     * Get ListName value
     * @return string|null
     */
    public function getListName()
    {
        return $this->ListName;
    }
    /**
     * Set ListName value
     * @param string $listName
     * @return \StructType\WSContactMessageActivity
     */
    public function setListName($listName = null)
    {
        // validation for constraint: string
        if (!is_null($listName) && !is_string($listName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listName)), __LINE__);
        }
        $this->ListName = $listName;
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
     * @return \StructType\WSContactMessageActivity
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
     * @return \StructType\WSContactMessageActivity
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
