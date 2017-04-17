<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSContactLinkClick StructType
 * @subpackage Structs
 */
class WSContactLinkClick extends AbstractStructBase
{
    /**
     * The LinkID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $LinkID;
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
     * The LinkURL
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LinkURL;
    /**
     * The ClickDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ClickDate;
    /**
     * Constructor method for WSContactLinkClick
     * @uses WSContactLinkClick::setLinkID()
     * @uses WSContactLinkClick::setContactID()
     * @uses WSContactLinkClick::setEmailAddress()
     * @uses WSContactLinkClick::setLinkURL()
     * @uses WSContactLinkClick::setClickDate()
     * @param int $linkID
     * @param string $contactID
     * @param string $emailAddress
     * @param string $linkURL
     * @param string $clickDate
     */
    public function __construct($linkID = null, $contactID = null, $emailAddress = null, $linkURL = null, $clickDate = null)
    {
        $this
            ->setLinkID($linkID)
            ->setContactID($contactID)
            ->setEmailAddress($emailAddress)
            ->setLinkURL($linkURL)
            ->setClickDate($clickDate);
    }
    /**
     * Get LinkID value
     * @return int
     */
    public function getLinkID()
    {
        return $this->LinkID;
    }
    /**
     * Set LinkID value
     * @param int $linkID
     * @return \StructType\WSContactLinkClick
     */
    public function setLinkID($linkID = null)
    {
        // validation for constraint: int
        if (!is_null($linkID) && !is_numeric($linkID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($linkID)), __LINE__);
        }
        $this->LinkID = $linkID;
        return $this;
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
     * @return \StructType\WSContactLinkClick
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
     * @return \StructType\WSContactLinkClick
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
     * Get LinkURL value
     * @return string|null
     */
    public function getLinkURL()
    {
        return $this->LinkURL;
    }
    /**
     * Set LinkURL value
     * @param string $linkURL
     * @return \StructType\WSContactLinkClick
     */
    public function setLinkURL($linkURL = null)
    {
        // validation for constraint: string
        if (!is_null($linkURL) && !is_string($linkURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($linkURL)), __LINE__);
        }
        $this->LinkURL = $linkURL;
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
     * @return \StructType\WSContactLinkClick
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
     * @return \StructType\WSContactLinkClick
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
