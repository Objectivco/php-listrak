<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendListMessageTestResponse StructType
 * @subpackage Structs
 */
class SendListMessageTestResponse extends AbstractStructBase
{
    /**
     * The SendListMessageTestResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SendListMessageTestResult;
    /**
     * Constructor method for SendListMessageTestResponse
     * @uses SendListMessageTestResponse::setSendListMessageTestResult()
     * @param int $sendListMessageTestResult
     */
    public function __construct($sendListMessageTestResult = null)
    {
        $this
            ->setSendListMessageTestResult($sendListMessageTestResult);
    }
    /**
     * Get SendListMessageTestResult value
     * @return int
     */
    public function getSendListMessageTestResult()
    {
        return $this->SendListMessageTestResult;
    }
    /**
     * Set SendListMessageTestResult value
     * @param int $sendListMessageTestResult
     * @return \StructType\SendListMessageTestResponse
     */
    public function setSendListMessageTestResult($sendListMessageTestResult = null)
    {
        // validation for constraint: int
        if (!is_null($sendListMessageTestResult) && !is_numeric($sendListMessageTestResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sendListMessageTestResult)), __LINE__);
        }
        $this->SendListMessageTestResult = $sendListMessageTestResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SendListMessageTestResponse
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
