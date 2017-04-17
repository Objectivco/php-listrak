<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetContactResponse StructType
 * @subpackage Structs
 */
class SetContactResponse extends AbstractStructBase
{
    /**
     * The SetContactResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SetContactResult;
    /**
     * Constructor method for SetContactResponse
     * @uses SetContactResponse::setSetContactResult()
     * @param string $setContactResult
     */
    public function __construct($setContactResult = null)
    {
        $this
            ->setSetContactResult($setContactResult);
    }
    /**
     * Get SetContactResult value
     * @return string
     */
    public function getSetContactResult()
    {
        return $this->SetContactResult;
    }
    /**
     * Set SetContactResult value
     * @uses \EnumType\SubscribeContactResult::valueIsValid()
     * @uses \EnumType\SubscribeContactResult::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $setContactResult
     * @return \StructType\SetContactResponse
     */
    public function setSetContactResult($setContactResult = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SubscribeContactResult::valueIsValid($setContactResult)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $setContactResult, implode(', ', \EnumType\SubscribeContactResult::getValidValues())), __LINE__);
        }
        $this->SetContactResult = $setContactResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SetContactResponse
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
