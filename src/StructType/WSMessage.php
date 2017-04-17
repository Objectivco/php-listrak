<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSMessage StructType
 * @subpackage Structs
 */
class WSMessage extends AbstractStructBase
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
     * The ListCampaignID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ListCampaignID;
    /**
     * The EnablePassalong
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $EnablePassalong;
    /**
     * The EnableTracking
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $EnableTracking;
    /**
     * The CharacterSetID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $CharacterSetID;
    /**
     * The ToName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ToName;
    /**
     * The ReplyEmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReplyEmailAddress;
    /**
     * The FromName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FromName;
    /**
     * The FromEmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FromEmailAddress;
    /**
     * The Subject
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * The HTMLBody
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $HTMLBody;
    /**
     * The TextBody
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TextBody;
    /**
     * The GoogleAnalyticsCampaignName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GoogleAnalyticsCampaignName;
    /**
     * The GoogleAnalyticsCampaignContent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GoogleAnalyticsCampaignContent;
    /**
     * Constructor method for WSMessage
     * @uses WSMessage::setListID()
     * @uses WSMessage::setListCampaignID()
     * @uses WSMessage::setEnablePassalong()
     * @uses WSMessage::setEnableTracking()
     * @uses WSMessage::setCharacterSetID()
     * @uses WSMessage::setToName()
     * @uses WSMessage::setReplyEmailAddress()
     * @uses WSMessage::setFromName()
     * @uses WSMessage::setFromEmailAddress()
     * @uses WSMessage::setSubject()
     * @uses WSMessage::setHTMLBody()
     * @uses WSMessage::setTextBody()
     * @uses WSMessage::setGoogleAnalyticsCampaignName()
     * @uses WSMessage::setGoogleAnalyticsCampaignContent()
     * @param int $listID
     * @param int $listCampaignID
     * @param bool $enablePassalong
     * @param bool $enableTracking
     * @param int $characterSetID
     * @param string $toName
     * @param string $replyEmailAddress
     * @param string $fromName
     * @param string $fromEmailAddress
     * @param string $subject
     * @param string $hTMLBody
     * @param string $textBody
     * @param string $googleAnalyticsCampaignName
     * @param string $googleAnalyticsCampaignContent
     */
    public function __construct($listID = null, $listCampaignID = null, $enablePassalong = null, $enableTracking = null, $characterSetID = null, $toName = null, $replyEmailAddress = null, $fromName = null, $fromEmailAddress = null, $subject = null, $hTMLBody = null, $textBody = null, $googleAnalyticsCampaignName = null, $googleAnalyticsCampaignContent = null)
    {
        $this
            ->setListID($listID)
            ->setListCampaignID($listCampaignID)
            ->setEnablePassalong($enablePassalong)
            ->setEnableTracking($enableTracking)
            ->setCharacterSetID($characterSetID)
            ->setToName($toName)
            ->setReplyEmailAddress($replyEmailAddress)
            ->setFromName($fromName)
            ->setFromEmailAddress($fromEmailAddress)
            ->setSubject($subject)
            ->setHTMLBody($hTMLBody)
            ->setTextBody($textBody)
            ->setGoogleAnalyticsCampaignName($googleAnalyticsCampaignName)
            ->setGoogleAnalyticsCampaignContent($googleAnalyticsCampaignContent);
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
     * @return \StructType\WSMessage
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
     * Get ListCampaignID value
     * @return int
     */
    public function getListCampaignID()
    {
        return $this->ListCampaignID;
    }
    /**
     * Set ListCampaignID value
     * @param int $listCampaignID
     * @return \StructType\WSMessage
     */
    public function setListCampaignID($listCampaignID = null)
    {
        // validation for constraint: int
        if (!is_null($listCampaignID) && !is_numeric($listCampaignID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($listCampaignID)), __LINE__);
        }
        $this->ListCampaignID = $listCampaignID;
        return $this;
    }
    /**
     * Get EnablePassalong value
     * @return bool
     */
    public function getEnablePassalong()
    {
        return $this->EnablePassalong;
    }
    /**
     * Set EnablePassalong value
     * @param bool $enablePassalong
     * @return \StructType\WSMessage
     */
    public function setEnablePassalong($enablePassalong = null)
    {
        $this->EnablePassalong = $enablePassalong;
        return $this;
    }
    /**
     * Get EnableTracking value
     * @return bool
     */
    public function getEnableTracking()
    {
        return $this->EnableTracking;
    }
    /**
     * Set EnableTracking value
     * @param bool $enableTracking
     * @return \StructType\WSMessage
     */
    public function setEnableTracking($enableTracking = null)
    {
        $this->EnableTracking = $enableTracking;
        return $this;
    }
    /**
     * Get CharacterSetID value
     * @return int
     */
    public function getCharacterSetID()
    {
        return $this->CharacterSetID;
    }
    /**
     * Set CharacterSetID value
     * @param int $characterSetID
     * @return \StructType\WSMessage
     */
    public function setCharacterSetID($characterSetID = null)
    {
        // validation for constraint: int
        if (!is_null($characterSetID) && !is_numeric($characterSetID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($characterSetID)), __LINE__);
        }
        $this->CharacterSetID = $characterSetID;
        return $this;
    }
    /**
     * Get ToName value
     * @return string|null
     */
    public function getToName()
    {
        return $this->ToName;
    }
    /**
     * Set ToName value
     * @param string $toName
     * @return \StructType\WSMessage
     */
    public function setToName($toName = null)
    {
        // validation for constraint: string
        if (!is_null($toName) && !is_string($toName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($toName)), __LINE__);
        }
        $this->ToName = $toName;
        return $this;
    }
    /**
     * Get ReplyEmailAddress value
     * @return string|null
     */
    public function getReplyEmailAddress()
    {
        return $this->ReplyEmailAddress;
    }
    /**
     * Set ReplyEmailAddress value
     * @param string $replyEmailAddress
     * @return \StructType\WSMessage
     */
    public function setReplyEmailAddress($replyEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($replyEmailAddress) && !is_string($replyEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($replyEmailAddress)), __LINE__);
        }
        $this->ReplyEmailAddress = $replyEmailAddress;
        return $this;
    }
    /**
     * Get FromName value
     * @return string|null
     */
    public function getFromName()
    {
        return $this->FromName;
    }
    /**
     * Set FromName value
     * @param string $fromName
     * @return \StructType\WSMessage
     */
    public function setFromName($fromName = null)
    {
        // validation for constraint: string
        if (!is_null($fromName) && !is_string($fromName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromName)), __LINE__);
        }
        $this->FromName = $fromName;
        return $this;
    }
    /**
     * Get FromEmailAddress value
     * @return string|null
     */
    public function getFromEmailAddress()
    {
        return $this->FromEmailAddress;
    }
    /**
     * Set FromEmailAddress value
     * @param string $fromEmailAddress
     * @return \StructType\WSMessage
     */
    public function setFromEmailAddress($fromEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($fromEmailAddress) && !is_string($fromEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromEmailAddress)), __LINE__);
        }
        $this->FromEmailAddress = $fromEmailAddress;
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
     * @return \StructType\WSMessage
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
     * Get HTMLBody value
     * @return string|null
     */
    public function getHTMLBody()
    {
        return $this->HTMLBody;
    }
    /**
     * Set HTMLBody value
     * @param string $hTMLBody
     * @return \StructType\WSMessage
     */
    public function setHTMLBody($hTMLBody = null)
    {
        // validation for constraint: string
        if (!is_null($hTMLBody) && !is_string($hTMLBody)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hTMLBody)), __LINE__);
        }
        $this->HTMLBody = $hTMLBody;
        return $this;
    }
    /**
     * Get TextBody value
     * @return string|null
     */
    public function getTextBody()
    {
        return $this->TextBody;
    }
    /**
     * Set TextBody value
     * @param string $textBody
     * @return \StructType\WSMessage
     */
    public function setTextBody($textBody = null)
    {
        // validation for constraint: string
        if (!is_null($textBody) && !is_string($textBody)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($textBody)), __LINE__);
        }
        $this->TextBody = $textBody;
        return $this;
    }
    /**
     * Get GoogleAnalyticsCampaignName value
     * @return string|null
     */
    public function getGoogleAnalyticsCampaignName()
    {
        return $this->GoogleAnalyticsCampaignName;
    }
    /**
     * Set GoogleAnalyticsCampaignName value
     * @param string $googleAnalyticsCampaignName
     * @return \StructType\WSMessage
     */
    public function setGoogleAnalyticsCampaignName($googleAnalyticsCampaignName = null)
    {
        // validation for constraint: string
        if (!is_null($googleAnalyticsCampaignName) && !is_string($googleAnalyticsCampaignName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($googleAnalyticsCampaignName)), __LINE__);
        }
        $this->GoogleAnalyticsCampaignName = $googleAnalyticsCampaignName;
        return $this;
    }
    /**
     * Get GoogleAnalyticsCampaignContent value
     * @return string|null
     */
    public function getGoogleAnalyticsCampaignContent()
    {
        return $this->GoogleAnalyticsCampaignContent;
    }
    /**
     * Set GoogleAnalyticsCampaignContent value
     * @param string $googleAnalyticsCampaignContent
     * @return \StructType\WSMessage
     */
    public function setGoogleAnalyticsCampaignContent($googleAnalyticsCampaignContent = null)
    {
        // validation for constraint: string
        if (!is_null($googleAnalyticsCampaignContent) && !is_string($googleAnalyticsCampaignContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($googleAnalyticsCampaignContent)), __LINE__);
        }
        $this->GoogleAnalyticsCampaignContent = $googleAnalyticsCampaignContent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSMessage
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
