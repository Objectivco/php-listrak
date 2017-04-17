<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendSavedMessage StructType
 * @subpackage Structs
 */
class SendSavedMessage extends AbstractStructBase
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
     * Constructor method for SendSavedMessage
     * @uses SendSavedMessage::setSavedMsgID()
     * @param int $savedMsgID
     */
    public function __construct($savedMsgID = null)
    {
        $this
            ->setSavedMsgID($savedMsgID);
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
     * @return \StructType\SendSavedMessage
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SendSavedMessage
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
