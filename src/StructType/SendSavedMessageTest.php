<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendSavedMessageTest StructType
 * @subpackage Structs
 */
class SendSavedMessageTest extends AbstractStructBase
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
     * The TestEmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TestEmailAddress;
    /**
     * Constructor method for SendSavedMessageTest
     * @uses SendSavedMessageTest::setSavedMsgID()
     * @uses SendSavedMessageTest::setTestEmailAddress()
     * @param int $savedMsgID
     * @param string $testEmailAddress
     */
    public function __construct($savedMsgID = null, $testEmailAddress = null)
    {
        $this
            ->setSavedMsgID($savedMsgID)
            ->setTestEmailAddress($testEmailAddress);
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
     * @return \StructType\SendSavedMessageTest
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
     * Get TestEmailAddress value
     * @return string|null
     */
    public function getTestEmailAddress()
    {
        return $this->TestEmailAddress;
    }
    /**
     * Set TestEmailAddress value
     * @param string $testEmailAddress
     * @return \StructType\SendSavedMessageTest
     */
    public function setTestEmailAddress($testEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($testEmailAddress) && !is_string($testEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($testEmailAddress)), __LINE__);
        }
        $this->TestEmailAddress = $testEmailAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SendSavedMessageTest
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
