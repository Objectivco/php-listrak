<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendListMessageResponse StructType
 * @subpackage Structs
 */
class SendListMessageResponse extends AbstractStructBase
{
    /**
     * The SendListMessageResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SendListMessageResult;
    /**
     * Constructor method for SendListMessageResponse
     * @uses SendListMessageResponse::setSendListMessageResult()
     * @param int $sendListMessageResult
     */
    public function __construct($sendListMessageResult = null)
    {
        $this
            ->setSendListMessageResult($sendListMessageResult);
    }
    /**
     * Get SendListMessageResult value
     * @return int
     */
    public function getSendListMessageResult()
    {
        return $this->SendListMessageResult;
    }
    /**
     * Set SendListMessageResult value
     * @param int $sendListMessageResult
     * @return \StructType\SendListMessageResponse
     */
    public function setSendListMessageResult($sendListMessageResult = null)
    {
        // validation for constraint: int
        if (!is_null($sendListMessageResult) && !is_numeric($sendListMessageResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sendListMessageResult)), __LINE__);
        }
        $this->SendListMessageResult = $sendListMessageResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SendListMessageResponse
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
