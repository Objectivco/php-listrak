<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSConversationContactDelivery StructType
 * @subpackage Structs
 */
class WSConversationContactDelivery extends AbstractStructBase
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
     * The Subject
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EmailAddress;
    /**
     * Constructor method for WSConversationContactDelivery
     * @uses WSConversationContactDelivery::setMsgID()
     * @uses WSConversationContactDelivery::setContactID()
     * @uses WSConversationContactDelivery::setSendDate()
     * @uses WSConversationContactDelivery::setSubject()
     * @uses WSConversationContactDelivery::setEmailAddress()
     * @param int $msgID
     * @param int $contactID
     * @param string $sendDate
     * @param string $subject
     * @param string $emailAddress
     */
    public function __construct($msgID = null, $contactID = null, $sendDate = null, $subject = null, $emailAddress = null)
    {
        $this
            ->setMsgID($msgID)
            ->setContactID($contactID)
            ->setSendDate($sendDate)
            ->setSubject($subject)
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
     * @return \StructType\WSConversationContactDelivery
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
     * @return \StructType\WSConversationContactDelivery
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
     * @return \StructType\WSConversationContactDelivery
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
     * @return \StructType\WSConversationContactDelivery
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
     * @return \StructType\WSConversationContactDelivery
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
     * @return \StructType\WSConversationContactDelivery
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
