<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ScheduleSendListMessageWithProfileFilter StructType
 * @subpackage Structs
 */
class ScheduleSendListMessageWithProfileFilter extends AbstractStructBase
{
    /**
     * The WSMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSMessage
     */
    public $WSMessage;
    /**
     * The SendDateTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SendDateTime;
    /**
     * The ProfileFilter
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSProfileFilter
     */
    public $ProfileFilter;
    /**
     * Constructor method for ScheduleSendListMessageWithProfileFilter
     * @uses ScheduleSendListMessageWithProfileFilter::setWSMessage()
     * @uses ScheduleSendListMessageWithProfileFilter::setSendDateTime()
     * @uses ScheduleSendListMessageWithProfileFilter::setProfileFilter()
     * @param \StructType\WSMessage $wSMessage
     * @param string $sendDateTime
     * @param \ArrayType\ArrayOfWSProfileFilter $profileFilter
     */
    public function __construct(\StructType\WSMessage $wSMessage = null, $sendDateTime = null, \ArrayType\ArrayOfWSProfileFilter $profileFilter = null)
    {
        $this
            ->setWSMessage($wSMessage)
            ->setSendDateTime($sendDateTime)
            ->setProfileFilter($profileFilter);
    }
    /**
     * Get WSMessage value
     * @return \StructType\WSMessage
     */
    public function getWSMessage()
    {
        return $this->WSMessage;
    }
    /**
     * Set WSMessage value
     * @param \StructType\WSMessage $wSMessage
     * @return \StructType\ScheduleSendListMessageWithProfileFilter
     */
    public function setWSMessage(\StructType\WSMessage $wSMessage = null)
    {
        $this->WSMessage = $wSMessage;
        return $this;
    }
    /**
     * Get SendDateTime value
     * @return string
     */
    public function getSendDateTime()
    {
        return $this->SendDateTime;
    }
    /**
     * Set SendDateTime value
     * @param string $sendDateTime
     * @return \StructType\ScheduleSendListMessageWithProfileFilter
     */
    public function setSendDateTime($sendDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($sendDateTime) && !is_string($sendDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sendDateTime)), __LINE__);
        }
        $this->SendDateTime = $sendDateTime;
        return $this;
    }
    /**
     * Get ProfileFilter value
     * @return \ArrayType\ArrayOfWSProfileFilter|null
     */
    public function getProfileFilter()
    {
        return $this->ProfileFilter;
    }
    /**
     * Set ProfileFilter value
     * @param \ArrayType\ArrayOfWSProfileFilter $profileFilter
     * @return \StructType\ScheduleSendListMessageWithProfileFilter
     */
    public function setProfileFilter(\ArrayType\ArrayOfWSProfileFilter $profileFilter = null)
    {
        $this->ProfileFilter = $profileFilter;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ScheduleSendListMessageWithProfileFilter
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
