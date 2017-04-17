<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendSavedMessageTestResponse StructType
 * @subpackage Structs
 */
class SendSavedMessageTestResponse extends AbstractStructBase
{
    /**
     * The SendSavedMessageTestResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SendSavedMessageTestResult;
    /**
     * Constructor method for SendSavedMessageTestResponse
     * @uses SendSavedMessageTestResponse::setSendSavedMessageTestResult()
     * @param int $sendSavedMessageTestResult
     */
    public function __construct($sendSavedMessageTestResult = null)
    {
        $this
            ->setSendSavedMessageTestResult($sendSavedMessageTestResult);
    }
    /**
     * Get SendSavedMessageTestResult value
     * @return int
     */
    public function getSendSavedMessageTestResult()
    {
        return $this->SendSavedMessageTestResult;
    }
    /**
     * Set SendSavedMessageTestResult value
     * @param int $sendSavedMessageTestResult
     * @return \StructType\SendSavedMessageTestResponse
     */
    public function setSendSavedMessageTestResult($sendSavedMessageTestResult = null)
    {
        // validation for constraint: int
        if (!is_null($sendSavedMessageTestResult) && !is_numeric($sendSavedMessageTestResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sendSavedMessageTestResult)), __LINE__);
        }
        $this->SendSavedMessageTestResult = $sendSavedMessageTestResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SendSavedMessageTestResponse
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
