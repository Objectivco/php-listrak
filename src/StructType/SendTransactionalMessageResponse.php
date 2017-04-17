<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendTransactionalMessageResponse StructType
 * @subpackage Structs
 */
class SendTransactionalMessageResponse extends AbstractStructBase
{
    /**
     * The SendTransactionalMessageResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SendTransactionalMessageResult;
    /**
     * Constructor method for SendTransactionalMessageResponse
     * @uses SendTransactionalMessageResponse::setSendTransactionalMessageResult()
     * @param string $sendTransactionalMessageResult
     */
    public function __construct($sendTransactionalMessageResult = null)
    {
        $this
            ->setSendTransactionalMessageResult($sendTransactionalMessageResult);
    }
    /**
     * Get SendTransactionalMessageResult value
     * @return string
     */
    public function getSendTransactionalMessageResult()
    {
        return $this->SendTransactionalMessageResult;
    }
    /**
     * Set SendTransactionalMessageResult value
     * @uses \EnumType\SendTransactionalMessageToContactResult::valueIsValid()
     * @uses \EnumType\SendTransactionalMessageToContactResult::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sendTransactionalMessageResult
     * @return \StructType\SendTransactionalMessageResponse
     */
    public function setSendTransactionalMessageResult($sendTransactionalMessageResult = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SendTransactionalMessageToContactResult::valueIsValid($sendTransactionalMessageResult)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sendTransactionalMessageResult, implode(', ', \EnumType\SendTransactionalMessageToContactResult::getValidValues())), __LINE__);
        }
        $this->SendTransactionalMessageResult = $sendTransactionalMessageResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SendTransactionalMessageResponse
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
