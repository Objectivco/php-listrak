<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSContactSubscriptionInfo StructType
 * @subpackage Structs
 */
class WSContactSubscriptionInfo extends AbstractStructBase
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
     * The AdditionMethod
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AdditionMethod;
    /**
     * Constructor method for WSContactSubscriptionInfo
     * @uses WSContactSubscriptionInfo::setAdditionDate()
     * @uses WSContactSubscriptionInfo::setContactID()
     * @uses WSContactSubscriptionInfo::setEmailAddress()
     * @uses WSContactSubscriptionInfo::setAdditionMethod()
     * @param string $additionDate
     * @param string $contactID
     * @param string $emailAddress
     * @param string $additionMethod
     */
    public function __construct($additionDate = null, $contactID = null, $emailAddress = null, $additionMethod = null)
    {
        $this
            ->setAdditionDate($additionDate)
            ->setContactID($contactID)
            ->setEmailAddress($emailAddress)
            ->setAdditionMethod($additionMethod);
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
     * @return \StructType\WSContactSubscriptionInfo
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
     * @return \StructType\WSContactSubscriptionInfo
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
     * @return \StructType\WSContactSubscriptionInfo
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
     * Get AdditionMethod value
     * @return string|null
     */
    public function getAdditionMethod()
    {
        return $this->AdditionMethod;
    }
    /**
     * Set AdditionMethod value
     * @param string $additionMethod
     * @return \StructType\WSContactSubscriptionInfo
     */
    public function setAdditionMethod($additionMethod = null)
    {
        // validation for constraint: string
        if (!is_null($additionMethod) && !is_string($additionMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionMethod)), __LINE__);
        }
        $this->AdditionMethod = $additionMethod;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSContactSubscriptionInfo
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
