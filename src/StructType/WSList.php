<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSList StructType
 * @subpackage Structs
 */
class WSList extends AbstractStructBase
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
     * The CreateDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CreateDate;
    /**
     * The EnableRemovalLink
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $EnableRemovalLink;
    /**
     * The EnableBrowserLink
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $EnableBrowserLink;
    /**
     * The bounceHandling
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $bounceHandling;
    /**
     * The EnableDoubleOptin
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $EnableDoubleOptin;
    /**
     * The EnableListHygiene
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $EnableListHygiene;
    /**
     * The ShowEmailList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $ShowEmailList;
    /**
     * The ShowAdvancedPersonalization
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $ShowAdvancedPersonalization;
    /**
     * The BounceUnsubscribeCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $BounceUnsubscribeCount;
    /**
     * The ListName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ListName;
    /**
     * The FromName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FromName;
    /**
     * The FromEmail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FromEmail;
    /**
     * The Vmta
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\WSVmta
     */
    public $Vmta;
    /**
     * The DomainAliasLink
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DomainAliasLink;
    /**
     * The DomainAliasEmail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DomainAliasEmail;
    /**
     * Constructor method for WSList
     * @uses WSList::setListID()
     * @uses WSList::setCreateDate()
     * @uses WSList::setEnableRemovalLink()
     * @uses WSList::setEnableBrowserLink()
     * @uses WSList::setBounceHandling()
     * @uses WSList::setEnableDoubleOptin()
     * @uses WSList::setEnableListHygiene()
     * @uses WSList::setShowEmailList()
     * @uses WSList::setShowAdvancedPersonalization()
     * @uses WSList::setBounceUnsubscribeCount()
     * @uses WSList::setListName()
     * @uses WSList::setFromName()
     * @uses WSList::setFromEmail()
     * @uses WSList::setVmta()
     * @uses WSList::setDomainAliasLink()
     * @uses WSList::setDomainAliasEmail()
     * @param int $listID
     * @param string $createDate
     * @param bool $enableRemovalLink
     * @param bool $enableBrowserLink
     * @param int $bounceHandling
     * @param bool $enableDoubleOptin
     * @param bool $enableListHygiene
     * @param bool $showEmailList
     * @param bool $showAdvancedPersonalization
     * @param int $bounceUnsubscribeCount
     * @param string $listName
     * @param string $fromName
     * @param string $fromEmail
     * @param \StructType\WSVmta $vmta
     * @param string $domainAliasLink
     * @param string $domainAliasEmail
     */
    public function __construct($listID = null, $createDate = null, $enableRemovalLink = null, $enableBrowserLink = null, $bounceHandling = null, $enableDoubleOptin = null, $enableListHygiene = null, $showEmailList = null, $showAdvancedPersonalization = null, $bounceUnsubscribeCount = null, $listName = null, $fromName = null, $fromEmail = null, \StructType\WSVmta $vmta = null, $domainAliasLink = null, $domainAliasEmail = null)
    {
        $this
            ->setListID($listID)
            ->setCreateDate($createDate)
            ->setEnableRemovalLink($enableRemovalLink)
            ->setEnableBrowserLink($enableBrowserLink)
            ->setBounceHandling($bounceHandling)
            ->setEnableDoubleOptin($enableDoubleOptin)
            ->setEnableListHygiene($enableListHygiene)
            ->setShowEmailList($showEmailList)
            ->setShowAdvancedPersonalization($showAdvancedPersonalization)
            ->setBounceUnsubscribeCount($bounceUnsubscribeCount)
            ->setListName($listName)
            ->setFromName($fromName)
            ->setFromEmail($fromEmail)
            ->setVmta($vmta)
            ->setDomainAliasLink($domainAliasLink)
            ->setDomainAliasEmail($domainAliasEmail);
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
     * @return \StructType\WSList
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
     * Get CreateDate value
     * @return string
     */
    public function getCreateDate()
    {
        return $this->CreateDate;
    }
    /**
     * Set CreateDate value
     * @param string $createDate
     * @return \StructType\WSList
     */
    public function setCreateDate($createDate = null)
    {
        // validation for constraint: string
        if (!is_null($createDate) && !is_string($createDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createDate)), __LINE__);
        }
        $this->CreateDate = $createDate;
        return $this;
    }
    /**
     * Get EnableRemovalLink value
     * @return bool
     */
    public function getEnableRemovalLink()
    {
        return $this->EnableRemovalLink;
    }
    /**
     * Set EnableRemovalLink value
     * @param bool $enableRemovalLink
     * @return \StructType\WSList
     */
    public function setEnableRemovalLink($enableRemovalLink = null)
    {
        $this->EnableRemovalLink = $enableRemovalLink;
        return $this;
    }
    /**
     * Get EnableBrowserLink value
     * @return bool
     */
    public function getEnableBrowserLink()
    {
        return $this->EnableBrowserLink;
    }
    /**
     * Set EnableBrowserLink value
     * @param bool $enableBrowserLink
     * @return \StructType\WSList
     */
    public function setEnableBrowserLink($enableBrowserLink = null)
    {
        $this->EnableBrowserLink = $enableBrowserLink;
        return $this;
    }
    /**
     * Get bounceHandling value
     * @return int
     */
    public function getBounceHandling()
    {
        return $this->bounceHandling;
    }
    /**
     * Set bounceHandling value
     * @param int $bounceHandling
     * @return \StructType\WSList
     */
    public function setBounceHandling($bounceHandling = null)
    {
        // validation for constraint: int
        if (!is_null($bounceHandling) && !is_numeric($bounceHandling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bounceHandling)), __LINE__);
        }
        $this->bounceHandling = $bounceHandling;
        return $this;
    }
    /**
     * Get EnableDoubleOptin value
     * @return bool
     */
    public function getEnableDoubleOptin()
    {
        return $this->EnableDoubleOptin;
    }
    /**
     * Set EnableDoubleOptin value
     * @param bool $enableDoubleOptin
     * @return \StructType\WSList
     */
    public function setEnableDoubleOptin($enableDoubleOptin = null)
    {
        $this->EnableDoubleOptin = $enableDoubleOptin;
        return $this;
    }
    /**
     * Get EnableListHygiene value
     * @return bool
     */
    public function getEnableListHygiene()
    {
        return $this->EnableListHygiene;
    }
    /**
     * Set EnableListHygiene value
     * @param bool $enableListHygiene
     * @return \StructType\WSList
     */
    public function setEnableListHygiene($enableListHygiene = null)
    {
        $this->EnableListHygiene = $enableListHygiene;
        return $this;
    }
    /**
     * Get ShowEmailList value
     * @return bool
     */
    public function getShowEmailList()
    {
        return $this->ShowEmailList;
    }
    /**
     * Set ShowEmailList value
     * @param bool $showEmailList
     * @return \StructType\WSList
     */
    public function setShowEmailList($showEmailList = null)
    {
        $this->ShowEmailList = $showEmailList;
        return $this;
    }
    /**
     * Get ShowAdvancedPersonalization value
     * @return bool
     */
    public function getShowAdvancedPersonalization()
    {
        return $this->ShowAdvancedPersonalization;
    }
    /**
     * Set ShowAdvancedPersonalization value
     * @param bool $showAdvancedPersonalization
     * @return \StructType\WSList
     */
    public function setShowAdvancedPersonalization($showAdvancedPersonalization = null)
    {
        $this->ShowAdvancedPersonalization = $showAdvancedPersonalization;
        return $this;
    }
    /**
     * Get BounceUnsubscribeCount value
     * @return int
     */
    public function getBounceUnsubscribeCount()
    {
        return $this->BounceUnsubscribeCount;
    }
    /**
     * Set BounceUnsubscribeCount value
     * @param int $bounceUnsubscribeCount
     * @return \StructType\WSList
     */
    public function setBounceUnsubscribeCount($bounceUnsubscribeCount = null)
    {
        // validation for constraint: int
        if (!is_null($bounceUnsubscribeCount) && !is_numeric($bounceUnsubscribeCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bounceUnsubscribeCount)), __LINE__);
        }
        $this->BounceUnsubscribeCount = $bounceUnsubscribeCount;
        return $this;
    }
    /**
     * Get ListName value
     * @return string|null
     */
    public function getListName()
    {
        return $this->ListName;
    }
    /**
     * Set ListName value
     * @param string $listName
     * @return \StructType\WSList
     */
    public function setListName($listName = null)
    {
        // validation for constraint: string
        if (!is_null($listName) && !is_string($listName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listName)), __LINE__);
        }
        $this->ListName = $listName;
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
     * @return \StructType\WSList
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
     * Get FromEmail value
     * @return string|null
     */
    public function getFromEmail()
    {
        return $this->FromEmail;
    }
    /**
     * Set FromEmail value
     * @param string $fromEmail
     * @return \StructType\WSList
     */
    public function setFromEmail($fromEmail = null)
    {
        // validation for constraint: string
        if (!is_null($fromEmail) && !is_string($fromEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromEmail)), __LINE__);
        }
        $this->FromEmail = $fromEmail;
        return $this;
    }
    /**
     * Get Vmta value
     * @return \StructType\WSVmta|null
     */
    public function getVmta()
    {
        return $this->Vmta;
    }
    /**
     * Set Vmta value
     * @param \StructType\WSVmta $vmta
     * @return \StructType\WSList
     */
    public function setVmta(\StructType\WSVmta $vmta = null)
    {
        $this->Vmta = $vmta;
        return $this;
    }
    /**
     * Get DomainAliasLink value
     * @return string|null
     */
    public function getDomainAliasLink()
    {
        return $this->DomainAliasLink;
    }
    /**
     * Set DomainAliasLink value
     * @param string $domainAliasLink
     * @return \StructType\WSList
     */
    public function setDomainAliasLink($domainAliasLink = null)
    {
        // validation for constraint: string
        if (!is_null($domainAliasLink) && !is_string($domainAliasLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domainAliasLink)), __LINE__);
        }
        $this->DomainAliasLink = $domainAliasLink;
        return $this;
    }
    /**
     * Get DomainAliasEmail value
     * @return string|null
     */
    public function getDomainAliasEmail()
    {
        return $this->DomainAliasEmail;
    }
    /**
     * Set DomainAliasEmail value
     * @param string $domainAliasEmail
     * @return \StructType\WSList
     */
    public function setDomainAliasEmail($domainAliasEmail = null)
    {
        // validation for constraint: string
        if (!is_null($domainAliasEmail) && !is_string($domainAliasEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domainAliasEmail)), __LINE__);
        }
        $this->DomainAliasEmail = $domainAliasEmail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSList
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
