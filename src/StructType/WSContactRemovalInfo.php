<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSContactRemovalInfo StructType
 * @subpackage Structs
 */
class WSContactRemovalInfo extends AbstractStructBase
{
    /**
     * The AdditionDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AdditionDate;
    /**
     * The RemovalDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RemovalDate;
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
     * The RemovalMethod
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RemovalMethod;
    /**
     * Constructor method for WSContactRemovalInfo
     * @uses WSContactRemovalInfo::setAdditionDate()
     * @uses WSContactRemovalInfo::setRemovalDate()
     * @uses WSContactRemovalInfo::setContactID()
     * @uses WSContactRemovalInfo::setEmailAddress()
     * @uses WSContactRemovalInfo::setRemovalMethod()
     * @param string $additionDate
     * @param string $removalDate
     * @param string $contactID
     * @param string $emailAddress
     * @param string $removalMethod
     */
    public function __construct($additionDate = null, $removalDate = null, $contactID = null, $emailAddress = null, $removalMethod = null)
    {
        $this
            ->setAdditionDate($additionDate)
            ->setRemovalDate($removalDate)
            ->setContactID($contactID)
            ->setEmailAddress($emailAddress)
            ->setRemovalMethod($removalMethod);
    }
    /**
     * Get AdditionDate value
     * @return string
     */
    public function getAdditionDate()
    {
        return $this->AdditionDate;
    }
    /**
     * Set AdditionDate value
     * @param string $additionDate
     * @return \StructType\WSContactRemovalInfo
     */
    public function setAdditionDate($additionDate = null)
    {
        // validation for constraint: string
        if (!is_null($additionDate) && !is_string($additionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionDate)), __LINE__);
        }
        $this->AdditionDate = $additionDate;
        return $this;
    }
    /**
     * Get RemovalDate value
     * @return string
     */
    public function getRemovalDate()
    {
        return $this->RemovalDate;
    }
    /**
     * Set RemovalDate value
     * @param string $removalDate
     * @return \StructType\WSContactRemovalInfo
     */
    public function setRemovalDate($removalDate = null)
    {
        // validation for constraint: string
        if (!is_null($removalDate) && !is_string($removalDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($removalDate)), __LINE__);
        }
        $this->RemovalDate = $removalDate;
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
     * @return \StructType\WSContactRemovalInfo
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
     * @return \StructType\WSContactRemovalInfo
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
     * Get RemovalMethod value
     * @return string|null
     */
    public function getRemovalMethod()
    {
        return $this->RemovalMethod;
    }
    /**
     * Set RemovalMethod value
     * @param string $removalMethod
     * @return \StructType\WSContactRemovalInfo
     */
    public function setRemovalMethod($removalMethod = null)
    {
        // validation for constraint: string
        if (!is_null($removalMethod) && !is_string($removalMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($removalMethod)), __LINE__);
        }
        $this->RemovalMethod = $removalMethod;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSContactRemovalInfo
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
