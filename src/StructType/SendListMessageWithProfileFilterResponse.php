<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendListMessageWithProfileFilterResponse StructType
 * @subpackage Structs
 */
class SendListMessageWithProfileFilterResponse extends AbstractStructBase
{
    /**
     * The SendListMessageWithProfileFilterResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SendListMessageWithProfileFilterResult;
    /**
     * Constructor method for SendListMessageWithProfileFilterResponse
     * @uses SendListMessageWithProfileFilterResponse::setSendListMessageWithProfileFilterResult()
     * @param int $sendListMessageWithProfileFilterResult
     */
    public function __construct($sendListMessageWithProfileFilterResult = null)
    {
        $this
            ->setSendListMessageWithProfileFilterResult($sendListMessageWithProfileFilterResult);
    }
    /**
     * Get SendListMessageWithProfileFilterResult value
     * @return int
     */
    public function getSendListMessageWithProfileFilterResult()
    {
        return $this->SendListMessageWithProfileFilterResult;
    }
    /**
     * Set SendListMessageWithProfileFilterResult value
     * @param int $sendListMessageWithProfileFilterResult
     * @return \StructType\SendListMessageWithProfileFilterResponse
     */
    public function setSendListMessageWithProfileFilterResult($sendListMessageWithProfileFilterResult = null)
    {
        // validation for constraint: int
        if (!is_null($sendListMessageWithProfileFilterResult) && !is_numeric($sendListMessageWithProfileFilterResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sendListMessageWithProfileFilterResult)), __LINE__);
        }
        $this->SendListMessageWithProfileFilterResult = $sendListMessageWithProfileFilterResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SendListMessageWithProfileFilterResponse
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
