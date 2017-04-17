<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnsubscribeContactResponse StructType
 * @subpackage Structs
 */
class UnsubscribeContactResponse extends AbstractStructBase
{
    /**
     * The UnsubscribeContactResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $UnsubscribeContactResult;
    /**
     * Constructor method for UnsubscribeContactResponse
     * @uses UnsubscribeContactResponse::setUnsubscribeContactResult()
     * @param string $unsubscribeContactResult
     */
    public function __construct($unsubscribeContactResult = null)
    {
        $this
            ->setUnsubscribeContactResult($unsubscribeContactResult);
    }
    /**
     * Get UnsubscribeContactResult value
     * @return string
     */
    public function getUnsubscribeContactResult()
    {
        return $this->UnsubscribeContactResult;
    }
    /**
     * Set UnsubscribeContactResult value
     * @uses \EnumType\UnsubscribeContactResult::valueIsValid()
     * @uses \EnumType\UnsubscribeContactResult::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $unsubscribeContactResult
     * @return \StructType\UnsubscribeContactResponse
     */
    public function setUnsubscribeContactResult($unsubscribeContactResult = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\UnsubscribeContactResult::valueIsValid($unsubscribeContactResult)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $unsubscribeContactResult, implode(', ', \EnumType\UnsubscribeContactResult::getValidValues())), __LINE__);
        }
        $this->UnsubscribeContactResult = $unsubscribeContactResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\UnsubscribeContactResponse
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
