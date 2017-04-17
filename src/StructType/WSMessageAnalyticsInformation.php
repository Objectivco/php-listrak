<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSMessageAnalyticsInformation StructType
 * @subpackage Structs
 */
class WSMessageAnalyticsInformation extends AbstractStructBase
{
    /**
     * The CampaignID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $CampaignID;
    /**
     * The ListID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ListID;
    /**
     * The MsgID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $MsgID;
    /**
     * The SendDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SendDate;
    /**
     * The CampaignName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CampaignName;
    /**
     * The GoogleAnalyticsCampaignContent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GoogleAnalyticsCampaignContent;
    /**
     * The GoogleAnalyticsCampaignName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GoogleAnalyticsCampaignName;
    /**
     * The ListrakAnalyticsCampaignName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ListrakAnalyticsCampaignName;
    /**
     * The ListrakAnalyticsModuleName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ListrakAnalyticsModuleName;
    /**
     * The ListrakAnalyticsVersion
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ListrakAnalyticsVersion;
    /**
     * The Subject
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * Constructor method for WSMessageAnalyticsInformation
     * @uses WSMessageAnalyticsInformation::setCampaignID()
     * @uses WSMessageAnalyticsInformation::setListID()
     * @uses WSMessageAnalyticsInformation::setMsgID()
     * @uses WSMessageAnalyticsInformation::setSendDate()
     * @uses WSMessageAnalyticsInformation::setCampaignName()
     * @uses WSMessageAnalyticsInformation::setGoogleAnalyticsCampaignContent()
     * @uses WSMessageAnalyticsInformation::setGoogleAnalyticsCampaignName()
     * @uses WSMessageAnalyticsInformation::setListrakAnalyticsCampaignName()
     * @uses WSMessageAnalyticsInformation::setListrakAnalyticsModuleName()
     * @uses WSMessageAnalyticsInformation::setListrakAnalyticsVersion()
     * @uses WSMessageAnalyticsInformation::setSubject()
     * @param int $campaignID
     * @param int $listID
     * @param int $msgID
     * @param string $sendDate
     * @param string $campaignName
     * @param string $googleAnalyticsCampaignContent
     * @param string $googleAnalyticsCampaignName
     * @param string $listrakAnalyticsCampaignName
     * @param string $listrakAnalyticsModuleName
     * @param string $listrakAnalyticsVersion
     * @param string $subject
     */
    public function __construct($campaignID = null, $listID = null, $msgID = null, $sendDate = null, $campaignName = null, $googleAnalyticsCampaignContent = null, $googleAnalyticsCampaignName = null, $listrakAnalyticsCampaignName = null, $listrakAnalyticsModuleName = null, $listrakAnalyticsVersion = null, $subject = null)
    {
        $this
            ->setCampaignID($campaignID)
            ->setListID($listID)
            ->setMsgID($msgID)
            ->setSendDate($sendDate)
            ->setCampaignName($campaignName)
            ->setGoogleAnalyticsCampaignContent($googleAnalyticsCampaignContent)
            ->setGoogleAnalyticsCampaignName($googleAnalyticsCampaignName)
            ->setListrakAnalyticsCampaignName($listrakAnalyticsCampaignName)
            ->setListrakAnalyticsModuleName($listrakAnalyticsModuleName)
            ->setListrakAnalyticsVersion($listrakAnalyticsVersion)
            ->setSubject($subject);
    }
    /**
     * Get CampaignID value
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }
    /**
     * Set CampaignID value
     * @param int $campaignID
     * @return \StructType\WSMessageAnalyticsInformation
     */
    public function setCampaignID($campaignID = null)
    {
        // validation for constraint: int
        if (!is_null($campaignID) && !is_numeric($campaignID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($campaignID)), __LINE__);
        }
        $this->CampaignID = $campaignID;
        return $this;
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
     * @return \StructType\WSMessageAnalyticsInformation
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
     * @return \StructType\WSMessageAnalyticsInformation
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
     * @return \StructType\WSMessageAnalyticsInformation
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
     * Get CampaignName value
     * @return string|null
     */
    public function getCampaignName()
    {
        return $this->CampaignName;
    }
    /**
     * Set CampaignName value
     * @param string $campaignName
     * @return \StructType\WSMessageAnalyticsInformation
     */
    public function setCampaignName($campaignName = null)
    {
        // validation for constraint: string
        if (!is_null($campaignName) && !is_string($campaignName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($campaignName)), __LINE__);
        }
        $this->CampaignName = $campaignName;
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
     * @return \StructType\WSMessageAnalyticsInformation
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
     * @return \StructType\WSMessageAnalyticsInformation
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
     * Get ListrakAnalyticsCampaignName value
     * @return string|null
     */
    public function getListrakAnalyticsCampaignName()
    {
        return $this->ListrakAnalyticsCampaignName;
    }
    /**
     * Set ListrakAnalyticsCampaignName value
     * @param string $listrakAnalyticsCampaignName
     * @return \StructType\WSMessageAnalyticsInformation
     */
    public function setListrakAnalyticsCampaignName($listrakAnalyticsCampaignName = null)
    {
        // validation for constraint: string
        if (!is_null($listrakAnalyticsCampaignName) && !is_string($listrakAnalyticsCampaignName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listrakAnalyticsCampaignName)), __LINE__);
        }
        $this->ListrakAnalyticsCampaignName = $listrakAnalyticsCampaignName;
        return $this;
    }
    /**
     * Get ListrakAnalyticsModuleName value
     * @return string|null
     */
    public function getListrakAnalyticsModuleName()
    {
        return $this->ListrakAnalyticsModuleName;
    }
    /**
     * Set ListrakAnalyticsModuleName value
     * @param string $listrakAnalyticsModuleName
     * @return \StructType\WSMessageAnalyticsInformation
     */
    public function setListrakAnalyticsModuleName($listrakAnalyticsModuleName = null)
    {
        // validation for constraint: string
        if (!is_null($listrakAnalyticsModuleName) && !is_string($listrakAnalyticsModuleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listrakAnalyticsModuleName)), __LINE__);
        }
        $this->ListrakAnalyticsModuleName = $listrakAnalyticsModuleName;
        return $this;
    }
    /**
     * Get ListrakAnalyticsVersion value
     * @return string|null
     */
    public function getListrakAnalyticsVersion()
    {
        return $this->ListrakAnalyticsVersion;
    }
    /**
     * Set ListrakAnalyticsVersion value
     * @param string $listrakAnalyticsVersion
     * @return \StructType\WSMessageAnalyticsInformation
     */
    public function setListrakAnalyticsVersion($listrakAnalyticsVersion = null)
    {
        // validation for constraint: string
        if (!is_null($listrakAnalyticsVersion) && !is_string($listrakAnalyticsVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listrakAnalyticsVersion)), __LINE__);
        }
        $this->ListrakAnalyticsVersion = $listrakAnalyticsVersion;
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
     * @return \StructType\WSMessageAnalyticsInformation
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSMessageAnalyticsInformation
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
