<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubscribeFormPassThroughResponse StructType
 * @subpackage Structs
 */
class SubscribeFormPassThroughResponse extends AbstractStructBase
{
    /**
     * The SubscribeFormPassThroughResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SubscribeFormPassThroughResult;
    /**
     * Constructor method for SubscribeFormPassThroughResponse
     * @uses SubscribeFormPassThroughResponse::setSubscribeFormPassThroughResult()
     * @param string $subscribeFormPassThroughResult
     */
    public function __construct($subscribeFormPassThroughResult = null)
    {
        $this
            ->setSubscribeFormPassThroughResult($subscribeFormPassThroughResult);
    }
    /**
     * Get SubscribeFormPassThroughResult value
     * @return string
     */
    public function getSubscribeFormPassThroughResult()
    {
        return $this->SubscribeFormPassThroughResult;
    }
    /**
     * Set SubscribeFormPassThroughResult value
     * @uses \EnumType\SubscribeFormPassThroughResult::valueIsValid()
     * @uses \EnumType\SubscribeFormPassThroughResult::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $subscribeFormPassThroughResult
     * @return \StructType\SubscribeFormPassThroughResponse
     */
    public function setSubscribeFormPassThroughResult($subscribeFormPassThroughResult = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SubscribeFormPassThroughResult::valueIsValid($subscribeFormPassThroughResult)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $subscribeFormPassThroughResult, implode(', ', \EnumType\SubscribeFormPassThroughResult::getValidValues())), __LINE__);
        }
        $this->SubscribeFormPassThroughResult = $subscribeFormPassThroughResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SubscribeFormPassThroughResponse
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
