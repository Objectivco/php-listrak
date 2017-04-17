<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSContactBounce StructType
 * @subpackage Structs
 */
class WSContactBounce extends AbstractStructBase
{
    /**
     * The BounceCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $BounceCount;
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
     * The BounceDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BounceDate;
    /**
     * Constructor method for WSContactBounce
     * @uses WSContactBounce::setBounceCount()
     * @uses WSContactBounce::setContactID()
     * @uses WSContactBounce::setEmailAddress()
     * @uses WSContactBounce::setBounceReason()
     * @uses WSContactBounce::setBounceDetail()
     * @uses WSContactBounce::setBounceDate()
     * @param int $bounceCount
     * @param string $contactID
     * @param string $emailAddress
     * @param string $bounceReason
     * @param string $bounceDetail
     * @param string $bounceDate
     */
    public function __construct($bounceCount = null, $contactID = null, $emailAddress = null, $bounceReason = null, $bounceDetail = null, $bounceDate = null)
    {
        $this
            ->setBounceCount($bounceCount)
            ->setContactID($contactID)
            ->setEmailAddress($emailAddress)
            ->setBounceReason($bounceReason)
            ->setBounceDetail($bounceDetail)
            ->setBounceDate($bounceDate);
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
     * @return \StructType\WSContactBounce
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
     * @return \StructType\WSContactBounce
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
     * @return \StructType\WSContactBounce
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
     * @return \StructType\WSContactBounce
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
     * @return \StructType\WSContactBounce
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
     * Get BounceDate value
     * @return string|null
     */
    public function getBounceDate()
    {
        return $this->BounceDate;
    }
    /**
     * Set BounceDate value
     * @param string $bounceDate
     * @return \StructType\WSContactBounce
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSContactBounce
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
