<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ScheduleSendListMessageWithProfileFilterResponse
 * StructType
 * @subpackage Structs
 */
class ScheduleSendListMessageWithProfileFilterResponse extends AbstractStructBase
{
    /**
     * The ScheduleSendListMessageWithProfileFilterResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ScheduleSendListMessageWithProfileFilterResult;
    /**
     * The SendDateTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SendDateTime;
    /**
     * Constructor method for ScheduleSendListMessageWithProfileFilterResponse
     * @uses ScheduleSendListMessageWithProfileFilterResponse::setScheduleSendListMessageWithProfileFilterResult()
     * @uses ScheduleSendListMessageWithProfileFilterResponse::setSendDateTime()
     * @param int $scheduleSendListMessageWithProfileFilterResult
     * @param string $sendDateTime
     */
    public function __construct($scheduleSendListMessageWithProfileFilterResult = null, $sendDateTime = null)
    {
        $this
            ->setScheduleSendListMessageWithProfileFilterResult($scheduleSendListMessageWithProfileFilterResult)
            ->setSendDateTime($sendDateTime);
    }
    /**
     * Get ScheduleSendListMessageWithProfileFilterResult value
     * @return int
     */
    public function getScheduleSendListMessageWithProfileFilterResult()
    {
        return $this->ScheduleSendListMessageWithProfileFilterResult;
    }
    /**
     * Set ScheduleSendListMessageWithProfileFilterResult value
     * @param int $scheduleSendListMessageWithProfileFilterResult
     * @return \StructType\ScheduleSendListMessageWithProfileFilterResponse
     */
    public function setScheduleSendListMessageWithProfileFilterResult($scheduleSendListMessageWithProfileFilterResult = null)
    {
        // validation for constraint: int
        if (!is_null($scheduleSendListMessageWithProfileFilterResult) && !is_numeric($scheduleSendListMessageWithProfileFilterResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($scheduleSendListMessageWithProfileFilterResult)), __LINE__);
        }
        $this->ScheduleSendListMessageWithProfileFilterResult = $scheduleSendListMessageWithProfileFilterResult;
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
     * @return \StructType\ScheduleSendListMessageWithProfileFilterResponse
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ScheduleSendListMessageWithProfileFilterResponse
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
