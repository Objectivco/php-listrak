<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ScheduleSendListMessageResponse StructType
 * @subpackage Structs
 */
class ScheduleSendListMessageResponse extends AbstractStructBase
{
    /**
     * The ScheduleSendListMessageResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ScheduleSendListMessageResult;
    /**
     * The SendDateTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SendDateTime;
    /**
     * Constructor method for ScheduleSendListMessageResponse
     * @uses ScheduleSendListMessageResponse::setScheduleSendListMessageResult()
     * @uses ScheduleSendListMessageResponse::setSendDateTime()
     * @param int $scheduleSendListMessageResult
     * @param string $sendDateTime
     */
    public function __construct($scheduleSendListMessageResult = null, $sendDateTime = null)
    {
        $this
            ->setScheduleSendListMessageResult($scheduleSendListMessageResult)
            ->setSendDateTime($sendDateTime);
    }
    /**
     * Get ScheduleSendListMessageResult value
     * @return int
     */
    public function getScheduleSendListMessageResult()
    {
        return $this->ScheduleSendListMessageResult;
    }
    /**
     * Set ScheduleSendListMessageResult value
     * @param int $scheduleSendListMessageResult
     * @return \StructType\ScheduleSendListMessageResponse
     */
    public function setScheduleSendListMessageResult($scheduleSendListMessageResult = null)
    {
        // validation for constraint: int
        if (!is_null($scheduleSendListMessageResult) && !is_numeric($scheduleSendListMessageResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($scheduleSendListMessageResult)), __LINE__);
        }
        $this->ScheduleSendListMessageResult = $scheduleSendListMessageResult;
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
     * @return \StructType\ScheduleSendListMessageResponse
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
     * @return \StructType\ScheduleSendListMessageResponse
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
