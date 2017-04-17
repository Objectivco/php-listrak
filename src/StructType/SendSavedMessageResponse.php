<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendSavedMessageResponse StructType
 * @subpackage Structs
 */
class SendSavedMessageResponse extends AbstractStructBase
{
    /**
     * The SendSavedMessageResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SendSavedMessageResult;
    /**
     * Constructor method for SendSavedMessageResponse
     * @uses SendSavedMessageResponse::setSendSavedMessageResult()
     * @param int $sendSavedMessageResult
     */
    public function __construct($sendSavedMessageResult = null)
    {
        $this
            ->setSendSavedMessageResult($sendSavedMessageResult);
    }
    /**
     * Get SendSavedMessageResult value
     * @return int
     */
    public function getSendSavedMessageResult()
    {
        return $this->SendSavedMessageResult;
    }
    /**
     * Set SendSavedMessageResult value
     * @param int $sendSavedMessageResult
     * @return \StructType\SendSavedMessageResponse
     */
    public function setSendSavedMessageResult($sendSavedMessageResult = null)
    {
        // validation for constraint: int
        if (!is_null($sendSavedMessageResult) && !is_numeric($sendSavedMessageResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sendSavedMessageResult)), __LINE__);
        }
        $this->SendSavedMessageResult = $sendSavedMessageResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SendSavedMessageResponse
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
