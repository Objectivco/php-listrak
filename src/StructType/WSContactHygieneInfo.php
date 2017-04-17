<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSContactHygieneInfo StructType
 * @subpackage Structs
 */
class WSContactHygieneInfo extends AbstractStructBase
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
     * The OldEmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OldEmailAddress;
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EmailAddress;
    /**
     * The AddDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AddDate;
    /**
     * The HygieneDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $HygieneDate;
    /**
     * Constructor method for WSContactHygieneInfo
     * @uses WSContactHygieneInfo::setContactID()
     * @uses WSContactHygieneInfo::setOldEmailAddress()
     * @uses WSContactHygieneInfo::setEmailAddress()
     * @uses WSContactHygieneInfo::setAddDate()
     * @uses WSContactHygieneInfo::setHygieneDate()
     * @param string $contactID
     * @param string $oldEmailAddress
     * @param string $emailAddress
     * @param string $addDate
     * @param string $hygieneDate
     */
    public function __construct($contactID = null, $oldEmailAddress = null, $emailAddress = null, $addDate = null, $hygieneDate = null)
    {
        $this
            ->setContactID($contactID)
            ->setOldEmailAddress($oldEmailAddress)
            ->setEmailAddress($emailAddress)
            ->setAddDate($addDate)
            ->setHygieneDate($hygieneDate);
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
     * @return \StructType\WSContactHygieneInfo
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
     * Get OldEmailAddress value
     * @return string|null
     */
    public function getOldEmailAddress()
    {
        return $this->OldEmailAddress;
    }
    /**
     * Set OldEmailAddress value
     * @param string $oldEmailAddress
     * @return \StructType\WSContactHygieneInfo
     */
    public function setOldEmailAddress($oldEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($oldEmailAddress) && !is_string($oldEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($oldEmailAddress)), __LINE__);
        }
        $this->OldEmailAddress = $oldEmailAddress;
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
     * @return \StructType\WSContactHygieneInfo
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
     * Get AddDate value
     * @return string|null
     */
    public function getAddDate()
    {
        return $this->AddDate;
    }
    /**
     * Set AddDate value
     * @param string $addDate
     * @return \StructType\WSContactHygieneInfo
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
     * Get HygieneDate value
     * @return string|null
     */
    public function getHygieneDate()
    {
        return $this->HygieneDate;
    }
    /**
     * Set HygieneDate value
     * @param string $hygieneDate
     * @return \StructType\WSContactHygieneInfo
     */
    public function setHygieneDate($hygieneDate = null)
    {
        // validation for constraint: string
        if (!is_null($hygieneDate) && !is_string($hygieneDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hygieneDate)), __LINE__);
        }
        $this->HygieneDate = $hygieneDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSContactHygieneInfo
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
