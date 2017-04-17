<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSConversationContactRemoval StructType
 * @subpackage Structs
 */
class WSConversationContactRemoval extends AbstractStructBase
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
     * The AddDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AddDate;
    /**
     * The RemoveDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RemoveDate;
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
     * The RemoveMethod
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RemoveMethod;
    /**
     * Constructor method for WSConversationContactRemoval
     * @uses WSConversationContactRemoval::setMsgID()
     * @uses WSConversationContactRemoval::setContactID()
     * @uses WSConversationContactRemoval::setAddDate()
     * @uses WSConversationContactRemoval::setRemoveDate()
     * @uses WSConversationContactRemoval::setSubject()
     * @uses WSConversationContactRemoval::setEmailAddress()
     * @uses WSConversationContactRemoval::setRemoveMethod()
     * @param int $msgID
     * @param int $contactID
     * @param string $addDate
     * @param string $removeDate
     * @param string $subject
     * @param string $emailAddress
     * @param string $removeMethod
     */
    public function __construct($msgID = null, $contactID = null, $addDate = null, $removeDate = null, $subject = null, $emailAddress = null, $removeMethod = null)
    {
        $this
            ->setMsgID($msgID)
            ->setContactID($contactID)
            ->setAddDate($addDate)
            ->setRemoveDate($removeDate)
            ->setSubject($subject)
            ->setEmailAddress($emailAddress)
            ->setRemoveMethod($removeMethod);
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
     * @return \StructType\WSConversationContactRemoval
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
     * @return \StructType\WSConversationContactRemoval
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
     * Get AddDate value
     * @return string
     */
    public function getAddDate()
    {
        return $this->AddDate;
    }
    /**
     * Set AddDate value
     * @param string $addDate
     * @return \StructType\WSConversationContactRemoval
     */
    public function setAddDate($addDate = null)
    {
        // validation for constraint: string
        if (!is_null($addDate) && !is_string($addDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addDate)), __LINE__);
        }
        $this->AddDate = $addDate;
        return $this;
    }
    /**
     * Get RemoveDate value
     * @return string
     */
    public function getRemoveDate()
    {
        return $this->RemoveDate;
    }
    /**
     * Set RemoveDate value
     * @param string $removeDate
     * @return \StructType\WSConversationContactRemoval
     */
    public function setRemoveDate($removeDate = null)
    {
        // validation for constraint: string
        if (!is_null($removeDate) && !is_string($removeDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($removeDate)), __LINE__);
        }
        $this->RemoveDate = $removeDate;
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
     * @return \StructType\WSConversationContactRemoval
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
     * @return \StructType\WSConversationContactRemoval
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
     * Get RemoveMethod value
     * @return string|null
     */
    public function getRemoveMethod()
    {
        return $this->RemoveMethod;
    }
    /**
     * Set RemoveMethod value
     * @param string $removeMethod
     * @return \StructType\WSConversationContactRemoval
     */
    public function setRemoveMethod($removeMethod = null)
    {
        // validation for constraint: string
        if (!is_null($removeMethod) && !is_string($removeMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($removeMethod)), __LINE__);
        }
        $this->RemoveMethod = $removeMethod;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSConversationContactRemoval
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
