<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSSavedMessage StructType
 * @subpackage Structs
 */
class WSSavedMessage extends AbstractStructBase
{
    /**
     * The SavedMsgID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SavedMsgID;
    /**
     * The CreateDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CreateDate;
    /**
     * The ModifiedDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ModifiedDate;
    /**
     * The SavedName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SavedName;
    /**
     * Constructor method for WSSavedMessage
     * @uses WSSavedMessage::setSavedMsgID()
     * @uses WSSavedMessage::setCreateDate()
     * @uses WSSavedMessage::setModifiedDate()
     * @uses WSSavedMessage::setSavedName()
     * @param int $savedMsgID
     * @param string $createDate
     * @param string $modifiedDate
     * @param string $savedName
     */
    public function __construct($savedMsgID = null, $createDate = null, $modifiedDate = null, $savedName = null)
    {
        $this
            ->setSavedMsgID($savedMsgID)
            ->setCreateDate($createDate)
            ->setModifiedDate($modifiedDate)
            ->setSavedName($savedName);
    }
    /**
     * Get SavedMsgID value
     * @return int
     */
    public function getSavedMsgID()
    {
        return $this->SavedMsgID;
    }
    /**
     * Set SavedMsgID value
     * @param int $savedMsgID
     * @return \StructType\WSSavedMessage
     */
    public function setSavedMsgID($savedMsgID = null)
    {
        // validation for constraint: int
        if (!is_null($savedMsgID) && !is_numeric($savedMsgID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($savedMsgID)), __LINE__);
        }
        $this->SavedMsgID = $savedMsgID;
        return $this;
    }
    /**
     * Get CreateDate value
     * @return string
     */
    public function getCreateDate()
    {
        return $this->CreateDate;
    }
    /**
     * Set CreateDate value
     * @param string $createDate
     * @return \StructType\WSSavedMessage
     */
    public function setCreateDate($createDate = null)
    {
        // validation for constraint: string
        if (!is_null($createDate) && !is_string($createDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createDate)), __LINE__);
        }
        $this->CreateDate = $createDate;
        return $this;
    }
    /**
     * Get ModifiedDate value
     * @return string
     */
    public function getModifiedDate()
    {
        return $this->ModifiedDate;
    }
    /**
     * Set ModifiedDate value
     * @param string $modifiedDate
     * @return \StructType\WSSavedMessage
     */
    public function setModifiedDate($modifiedDate = null)
    {
        // validation for constraint: string
        if (!is_null($modifiedDate) && !is_string($modifiedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modifiedDate)), __LINE__);
        }
        $this->ModifiedDate = $modifiedDate;
        return $this;
    }
    /**
     * Get SavedName value
     * @return string|null
     */
    public function getSavedName()
    {
        return $this->SavedName;
    }
    /**
     * Set SavedName value
     * @param string $savedName
     * @return \StructType\WSSavedMessage
     */
    public function setSavedName($savedName = null)
    {
        // validation for constraint: string
        if (!is_null($savedName) && !is_string($savedName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($savedName)), __LINE__);
        }
        $this->SavedName = $savedName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSSavedMessage
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
