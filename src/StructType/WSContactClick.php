<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSContactClick StructType
 * @subpackage Structs
 */
class WSContactClick extends AbstractStructBase
{
    /**
     * The ContactID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ContactID;
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EmailAddress;
    /**
     * The LinkDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LinkDescription;
    /**
     * The LinkUrl
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LinkUrl;
    /**
     * The ClickDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ClickDate;
    /**
     * Constructor method for WSContactClick
     * @uses WSContactClick::setContactID()
     * @uses WSContactClick::setEmailAddress()
     * @uses WSContactClick::setLinkDescription()
     * @uses WSContactClick::setLinkUrl()
     * @uses WSContactClick::setClickDate()
     * @param string $contactID
     * @param string $emailAddress
     * @param string $linkDescription
     * @param string $linkUrl
     * @param string $clickDate
     */
    public function __construct($contactID = null, $emailAddress = null, $linkDescription = null, $linkUrl = null, $clickDate = null)
    {
        $this
            ->setContactID($contactID)
            ->setEmailAddress($emailAddress)
            ->setLinkDescription($linkDescription)
            ->setLinkUrl($linkUrl)
            ->setClickDate($clickDate);
    }
    /**
     * Get ContactID value
     * @return string|null
     */
    public function getContactID()
    {
        return $this->ContactID;
    }
    /**
     * Set ContactID value
     * @param string $contactID
     * @return \StructType\WSContactClick
     */
    public function setContactID($contactID = null)
    {
        // validation for constraint: string
        if (!is_null($contactID) && !is_string($contactID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactID)), __LINE__);
        }
        $this->ContactID = $contactID;
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
     * @return \StructType\WSContactClick
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
     * Get LinkDescription value
     * @return string|null
     */
    public function getLinkDescription()
    {
        return $this->LinkDescription;
    }
    /**
     * Set LinkDescription value
     * @param string $linkDescription
     * @return \StructType\WSContactClick
     */
    public function setLinkDescription($linkDescription = null)
    {
        // validation for constraint: string
        if (!is_null($linkDescription) && !is_string($linkDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($linkDescription)), __LINE__);
        }
        $this->LinkDescription = $linkDescription;
        return $this;
    }
    /**
     * Get LinkUrl value
     * @return string|null
     */
    public function getLinkUrl()
    {
        return $this->LinkUrl;
    }
    /**
     * Set LinkUrl value
     * @param string $linkUrl
     * @return \StructType\WSContactClick
     */
    public function setLinkUrl($linkUrl = null)
    {
        // validation for constraint: string
        if (!is_null($linkUrl) && !is_string($linkUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($linkUrl)), __LINE__);
        }
        $this->LinkUrl = $linkUrl;
        return $this;
    }
    /**
     * Get ClickDate value
     * @return string|null
     */
    public function getClickDate()
    {
        return $this->ClickDate;
    }
    /**
     * Set ClickDate value
     * @param string $clickDate
     * @return \StructType\WSContactClick
     */
    public function setClickDate($clickDate = null)
    {
        // validation for constraint: string
        if (!is_null($clickDate) && !is_string($clickDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clickDate)), __LINE__);
        }
        $this->ClickDate = $clickDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSContactClick
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
