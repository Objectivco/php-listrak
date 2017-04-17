<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubscribeContactResponse StructType
 * @subpackage Structs
 */
class SubscribeContactResponse extends AbstractStructBase
{
    /**
     * The SubscribeContactResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SubscribeContactResult;
    /**
     * Constructor method for SubscribeContactResponse
     * @uses SubscribeContactResponse::setSubscribeContactResult()
     * @param string $subscribeContactResult
     */
    public function __construct($subscribeContactResult = null)
    {
        $this
            ->setSubscribeContactResult($subscribeContactResult);
    }
    /**
     * Get SubscribeContactResult value
     * @return string
     */
    public function getSubscribeContactResult()
    {
        return $this->SubscribeContactResult;
    }
    /**
     * Set SubscribeContactResult value
     * @uses \EnumType\SubscribeContactResult::valueIsValid()
     * @uses \EnumType\SubscribeContactResult::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $subscribeContactResult
     * @return \StructType\SubscribeContactResponse
     */
    public function setSubscribeContactResult($subscribeContactResult = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SubscribeContactResult::valueIsValid($subscribeContactResult)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $subscribeContactResult, implode(', ', \EnumType\SubscribeContactResult::getValidValues())), __LINE__);
        }
        $this->SubscribeContactResult = $subscribeContactResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SubscribeContactResponse
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
