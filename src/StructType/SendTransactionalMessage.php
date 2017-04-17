<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendTransactionalMessage StructType
 * @subpackage Structs
 */
class SendTransactionalMessage extends AbstractStructBase
{
    /**
     * The TransactionalMsgID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $TransactionalMsgID;
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EmailAddress;
    /**
     * The ProfileData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSProfileAttributeValue
     */
    public $ProfileData;
    /**
     * Constructor method for SendTransactionalMessage
     * @uses SendTransactionalMessage::setTransactionalMsgID()
     * @uses SendTransactionalMessage::setEmailAddress()
     * @uses SendTransactionalMessage::setProfileData()
     * @param int $transactionalMsgID
     * @param string $emailAddress
     * @param \ArrayType\ArrayOfWSProfileAttributeValue $profileData
     */
    public function __construct($transactionalMsgID = null, $emailAddress = null, \ArrayType\ArrayOfWSProfileAttributeValue $profileData = null)
    {
        $this
            ->setTransactionalMsgID($transactionalMsgID)
            ->setEmailAddress($emailAddress)
            ->setProfileData($profileData);
    }
    /**
     * Get TransactionalMsgID value
     * @return int
     */
    public function getTransactionalMsgID()
    {
        return $this->TransactionalMsgID;
    }
    /**
     * Set TransactionalMsgID value
     * @param int $transactionalMsgID
     * @return \StructType\SendTransactionalMessage
     */
    public function setTransactionalMsgID($transactionalMsgID = null)
    {
        // validation for constraint: int
        if (!is_null($transactionalMsgID) && !is_numeric($transactionalMsgID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($transactionalMsgID)), __LINE__);
        }
        $this->TransactionalMsgID = $transactionalMsgID;
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
     * @return \StructType\SendTransactionalMessage
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
     * Get ProfileData value
     * @return \ArrayType\ArrayOfWSProfileAttributeValue|null
     */
    public function getProfileData()
    {
        return $this->ProfileData;
    }
    /**
     * Set ProfileData value
     * @param \ArrayType\ArrayOfWSProfileAttributeValue $profileData
     * @return \StructType\SendTransactionalMessage
     */
    public function setProfileData(\ArrayType\ArrayOfWSProfileAttributeValue $profileData = null)
    {
        $this->ProfileData = $profileData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SendTransactionalMessage
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
