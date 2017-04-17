<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSpamScore StructType
 * @subpackage Structs
 */
class GetSpamScore extends AbstractStructBase
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
     * The TestEmail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TestEmail;
    /**
     * Constructor method for GetSpamScore
     * @uses GetSpamScore::setWSMessage()
     * @uses GetSpamScore::setTestEmail()
     * @param \StructType\WSMessage $wSMessage
     * @param string $testEmail
     */
    public function __construct(\StructType\WSMessage $wSMessage = null, $testEmail = null)
    {
        $this
            ->setWSMessage($wSMessage)
            ->setTestEmail($testEmail);
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
     * @return \StructType\GetSpamScore
     */
    public function setWSMessage(\StructType\WSMessage $wSMessage = null)
    {
        $this->WSMessage = $wSMessage;
        return $this;
    }
    /**
     * Get TestEmail value
     * @return string|null
     */
    public function getTestEmail()
    {
        return $this->TestEmail;
    }
    /**
     * Set TestEmail value
     * @param string $testEmail
     * @return \StructType\GetSpamScore
     */
    public function setTestEmail($testEmail = null)
    {
        // validation for constraint: string
        if (!is_null($testEmail) && !is_string($testEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($testEmail)), __LINE__);
        }
        $this->TestEmail = $testEmail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetSpamScore
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
