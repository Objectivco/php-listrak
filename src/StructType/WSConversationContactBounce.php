<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSConversationContactBounce StructType
 * @subpackage Structs
 */
class WSConversationContactBounce extends AbstractStructBase
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
     * The BounceDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $BounceDate;
    /**
     * The BounceCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $BounceCount;
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
     * The BounceReason
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BounceReason;
    /**
     * The BounceDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BounceDetail;
    /**
     * Constructor method for WSConversationContactBounce
     * @uses WSConversationContactBounce::setMsgID()
     * @uses WSConversationContactBounce::setContactID()
     * @uses WSConversationContactBounce::setBounceDate()
     * @uses WSConversationContactBounce::setBounceCount()
     * @uses WSConversationContactBounce::setSubject()
     * @uses WSConversationContactBounce::setEmailAddress()
     * @uses WSConversationContactBounce::setBounceReason()
     * @uses WSConversationContactBounce::setBounceDetail()
     * @param int $msgID
     * @param int $contactID
     * @param string $bounceDate
     * @param int $bounceCount
     * @param string $subject
     * @param string $emailAddress
     * @param string $bounceReason
     * @param string $bounceDetail
     */
    public function __construct($msgID = null, $contactID = null, $bounceDate = null, $bounceCount = null, $subject = null, $emailAddress = null, $bounceReason = null, $bounceDetail = null)
    {
        $this
            ->setMsgID($msgID)
            ->setContactID($contactID)
            ->setBounceDate($bounceDate)
            ->setBounceCount($bounceCount)
            ->setSubject($subject)
            ->setEmailAddress($emailAddress)
            ->setBounceReason($bounceReason)
            ->setBounceDetail($bounceDetail);
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
     * @return \StructType\WSConversationContactBounce
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
     * @return \StructType\WSConversationContactBounce
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
     * Get BounceDate value
     * @return string
     */
    public function getBounceDate()
    {
        return $this->BounceDate;
    }
    /**
     * Set BounceDate value
     * @param string $bounceDate
     * @return \StructType\WSConversationContactBounce
     */
    public function setBounceDate($bounceDate = null)
    {
        // validation for constraint: string
        if (!is_null($bounceDate) && !is_string($bounceDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bounceDate)), __LINE__);
        }
        $this->BounceDate = $bounceDate;
        return $this;
    }
    /**
     * Get BounceCount value
     * @return int
     */
    public function getBounceCount()
    {
        return $this->BounceCount;
    }
    /**
     * Set BounceCount value
     * @param int $bounceCount
     * @return \StructType\WSConversationContactBounce
     */
    public function setBounceCount($bounceCount = null)
    {
        // validation for constraint: int
        if (!is_null($bounceCount) && !is_numeric($bounceCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bounceCount)), __LINE__);
        }
        $this->BounceCount = $bounceCount;
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
     * @return \StructType\WSConversationContactBounce
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
     * @return \StructType\WSConversationContactBounce
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
     * Get BounceReason value
     * @return string|null
     */
    public function getBounceReason()
    {
        return $this->BounceReason;
    }
    /**
     * Set BounceReason value
     * @param string $bounceReason
     * @return \StructType\WSConversationContactBounce
     */
    public function setBounceReason($bounceReason = null)
    {
        // validation for constraint: string
        if (!is_null($bounceReason) && !is_string($bounceReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bounceReason)), __LINE__);
        }
        $this->BounceReason = $bounceReason;
        return $this;
    }
    /**
     * Get BounceDetail value
     * @return string|null
     */
    public function getBounceDetail()
    {
        return $this->BounceDetail;
    }
    /**
     * Set BounceDetail value
     * @param string $bounceDetail
     * @return \StructType\WSConversationContactBounce
     */
    public function setBounceDetail($bounceDetail = null)
    {
        // validation for constraint: string
        if (!is_null($bounceDetail) && !is_string($bounceDetail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bounceDetail)), __LINE__);
        }
        $this->BounceDetail = $bounceDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSConversationContactBounce
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
