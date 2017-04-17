<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSUpdateContactList StructType
 * @subpackage Structs
 */
class WSUpdateContactList extends AbstractStructBase
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
     * The BounceHandling
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $BounceHandling;
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
     * The VmtaID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $VmtaID;
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
     * The EnableRSS
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $EnableRSS;
    /**
     * The EnableGoogleAnalytics
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $EnableGoogleAnalytics;
    /**
     * The EnableInternationalization
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $EnableInternationalization;
    /**
     * The EnableDynamicContent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $EnableDynamicContent;
    /**
     * The EnableListRemoveHeader
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $EnableListRemoveHeader;
    /**
     * The DefaultMerchantID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $DefaultMerchantID;
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
     * Constructor method for WSUpdateContactList
     * @uses WSUpdateContactList::setListID()
     * @uses WSUpdateContactList::setEnableRemovalLink()
     * @uses WSUpdateContactList::setEnableBrowserLink()
     * @uses WSUpdateContactList::setBounceHandling()
     * @uses WSUpdateContactList::setEnableDoubleOptin()
     * @uses WSUpdateContactList::setEnableListHygiene()
     * @uses WSUpdateContactList::setVmtaID()
     * @uses WSUpdateContactList::setShowEmailList()
     * @uses WSUpdateContactList::setShowAdvancedPersonalization()
     * @uses WSUpdateContactList::setBounceUnsubscribeCount()
     * @uses WSUpdateContactList::setEnableRSS()
     * @uses WSUpdateContactList::setEnableGoogleAnalytics()
     * @uses WSUpdateContactList::setEnableInternationalization()
     * @uses WSUpdateContactList::setEnableDynamicContent()
     * @uses WSUpdateContactList::setEnableListRemoveHeader()
     * @uses WSUpdateContactList::setDefaultMerchantID()
     * @uses WSUpdateContactList::setListName()
     * @uses WSUpdateContactList::setFromName()
     * @uses WSUpdateContactList::setFromEmail()
     * @uses WSUpdateContactList::setDomainAliasLink()
     * @uses WSUpdateContactList::setDomainAliasEmail()
     * @param int $listID
     * @param bool $enableRemovalLink
     * @param bool $enableBrowserLink
     * @param string $bounceHandling
     * @param bool $enableDoubleOptin
     * @param bool $enableListHygiene
     * @param int $vmtaID
     * @param bool $showEmailList
     * @param bool $showAdvancedPersonalization
     * @param int $bounceUnsubscribeCount
     * @param bool $enableRSS
     * @param bool $enableGoogleAnalytics
     * @param bool $enableInternationalization
     * @param bool $enableDynamicContent
     * @param bool $enableListRemoveHeader
     * @param int $defaultMerchantID
     * @param string $listName
     * @param string $fromName
     * @param string $fromEmail
     * @param string $domainAliasLink
     * @param string $domainAliasEmail
     */
    public function __construct($listID = null, $enableRemovalLink = null, $enableBrowserLink = null, $bounceHandling = null, $enableDoubleOptin = null, $enableListHygiene = null, $vmtaID = null, $showEmailList = null, $showAdvancedPersonalization = null, $bounceUnsubscribeCount = null, $enableRSS = null, $enableGoogleAnalytics = null, $enableInternationalization = null, $enableDynamicContent = null, $enableListRemoveHeader = null, $defaultMerchantID = null, $listName = null, $fromName = null, $fromEmail = null, $domainAliasLink = null, $domainAliasEmail = null)
    {
        $this
            ->setListID($listID)
            ->setEnableRemovalLink($enableRemovalLink)
            ->setEnableBrowserLink($enableBrowserLink)
            ->setBounceHandling($bounceHandling)
            ->setEnableDoubleOptin($enableDoubleOptin)
            ->setEnableListHygiene($enableListHygiene)
            ->setVmtaID($vmtaID)
            ->setShowEmailList($showEmailList)
            ->setShowAdvancedPersonalization($showAdvancedPersonalization)
            ->setBounceUnsubscribeCount($bounceUnsubscribeCount)
            ->setEnableRSS($enableRSS)
            ->setEnableGoogleAnalytics($enableGoogleAnalytics)
            ->setEnableInternationalization($enableInternationalization)
            ->setEnableDynamicContent($enableDynamicContent)
            ->setEnableListRemoveHeader($enableListRemoveHeader)
            ->setDefaultMerchantID($defaultMerchantID)
            ->setListName($listName)
            ->setFromName($fromName)
            ->setFromEmail($fromEmail)
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
     * @return \StructType\WSUpdateContactList
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
     * @return \StructType\WSUpdateContactList
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
     * @return \StructType\WSUpdateContactList
     */
    public function setEnableBrowserLink($enableBrowserLink = null)
    {
        $this->EnableBrowserLink = $enableBrowserLink;
        return $this;
    }
    /**
     * Get BounceHandling value
     * @return string
     */
    public function getBounceHandling()
    {
        return $this->BounceHandling;
    }
    /**
     * Set BounceHandling value
     * @uses \EnumType\BounceHandlingSettings::valueIsValid()
     * @uses \EnumType\BounceHandlingSettings::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $bounceHandling
     * @return \StructType\WSUpdateContactList
     */
    public function setBounceHandling($bounceHandling = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BounceHandlingSettings::valueIsValid($bounceHandling)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $bounceHandling, implode(', ', \EnumType\BounceHandlingSettings::getValidValues())), __LINE__);
        }
        $this->BounceHandling = $bounceHandling;
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
     * @return \StructType\WSUpdateContactList
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
     * @return \StructType\WSUpdateContactList
     */
    public function setEnableListHygiene($enableListHygiene = null)
    {
        $this->EnableListHygiene = $enableListHygiene;
        return $this;
    }
    /**
     * Get VmtaID value
     * @return int
     */
    public function getVmtaID()
    {
        return $this->VmtaID;
    }
    /**
     * Set VmtaID value
     * @param int $vmtaID
     * @return \StructType\WSUpdateContactList
     */
    public function setVmtaID($vmtaID = null)
    {
        // validation for constraint: int
        if (!is_null($vmtaID) && !is_numeric($vmtaID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vmtaID)), __LINE__);
        }
        $this->VmtaID = $vmtaID;
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
     * @return \StructType\WSUpdateContactList
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
     * @return \StructType\WSUpdateContactList
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
     * @return \StructType\WSUpdateContactList
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
     * Get EnableRSS value
     * @return bool
     */
    public function getEnableRSS()
    {
        return $this->EnableRSS;
    }
    /**
     * Set EnableRSS value
     * @param bool $enableRSS
     * @return \StructType\WSUpdateContactList
     */
    public function setEnableRSS($enableRSS = null)
    {
        $this->EnableRSS = $enableRSS;
        return $this;
    }
    /**
     * Get EnableGoogleAnalytics value
     * @return bool
     */
    public function getEnableGoogleAnalytics()
    {
        return $this->EnableGoogleAnalytics;
    }
    /**
     * Set EnableGoogleAnalytics value
     * @param bool $enableGoogleAnalytics
     * @return \StructType\WSUpdateContactList
     */
    public function setEnableGoogleAnalytics($enableGoogleAnalytics = null)
    {
        $this->EnableGoogleAnalytics = $enableGoogleAnalytics;
        return $this;
    }
    /**
     * Get EnableInternationalization value
     * @return bool
     */
    public function getEnableInternationalization()
    {
        return $this->EnableInternationalization;
    }
    /**
     * Set EnableInternationalization value
     * @param bool $enableInternationalization
     * @return \StructType\WSUpdateContactList
     */
    public function setEnableInternationalization($enableInternationalization = null)
    {
        $this->EnableInternationalization = $enableInternationalization;
        return $this;
    }
    /**
     * Get EnableDynamicContent value
     * @return bool
     */
    public function getEnableDynamicContent()
    {
        return $this->EnableDynamicContent;
    }
    /**
     * Set EnableDynamicContent value
     * @param bool $enableDynamicContent
     * @return \StructType\WSUpdateContactList
     */
    public function setEnableDynamicContent($enableDynamicContent = null)
    {
        $this->EnableDynamicContent = $enableDynamicContent;
        return $this;
    }
    /**
     * Get EnableListRemoveHeader value
     * @return bool
     */
    public function getEnableListRemoveHeader()
    {
        return $this->EnableListRemoveHeader;
    }
    /**
     * Set EnableListRemoveHeader value
     * @param bool $enableListRemoveHeader
     * @return \StructType\WSUpdateContactList
     */
    public function setEnableListRemoveHeader($enableListRemoveHeader = null)
    {
        $this->EnableListRemoveHeader = $enableListRemoveHeader;
        return $this;
    }
    /**
     * Get DefaultMerchantID value
     * @return int
     */
    public function getDefaultMerchantID()
    {
        return $this->DefaultMerchantID;
    }
    /**
     * Set DefaultMerchantID value
     * @param int $defaultMerchantID
     * @return \StructType\WSUpdateContactList
     */
    public function setDefaultMerchantID($defaultMerchantID = null)
    {
        // validation for constraint: int
        if (!is_null($defaultMerchantID) && !is_numeric($defaultMerchantID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($defaultMerchantID)), __LINE__);
        }
        $this->DefaultMerchantID = $defaultMerchantID;
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
     * @return \StructType\WSUpdateContactList
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
     * @return \StructType\WSUpdateContactList
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
     * @return \StructType\WSUpdateContactList
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
     * @return \StructType\WSUpdateContactList
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
     * @return \StructType\WSUpdateContactList
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
     * @return \StructType\WSUpdateContactList
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
