<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendListMessageTest StructType
 * @subpackage Structs
 */
class SendListMessageTest extends AbstractStructBase
{
    /**
     * The WSMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSMessage
     */
    public $WSMessage;
    /**
     * The TestEmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TestEmailAddress;
    /**
     * Constructor method for SendListMessageTest
     * @uses SendListMessageTest::setWSMessage()
     * @uses SendListMessageTest::setTestEmailAddress()
     * @param \StructType\WSMessage $wSMessage
     * @param string $testEmailAddress
     */
    public function __construct(\StructType\WSMessage $wSMessage = null, $testEmailAddress = null)
    {
        $this
            ->setWSMessage($wSMessage)
            ->setTestEmailAddress($testEmailAddress);
    }
    /**
     * Get WSMessage value
     * @return \StructType\WSMessage
     */
    public function getWSMessage()
    {
        return $this->WSMessage;
    }
    /**
     * Set WSMessage value
     * @param \StructType\WSMessage $wSMessage
     * @return \StructType\SendListMessageTest
     */
    public function setWSMessage(\StructType\WSMessage $wSMessage = null)
    {
        $this->WSMessage = $wSMessage;
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
     * @return \StructType\SendListMessageTest
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
     * @return \StructType\SendListMessageTest
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
