<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateContactResponse StructType
 * @subpackage Structs
 */
class UpdateContactResponse extends AbstractStructBase
{
    /**
     * The UpdateContactResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $UpdateContactResult;
    /**
     * Constructor method for UpdateContactResponse
     * @uses UpdateContactResponse::setUpdateContactResult()
     * @param string $updateContactResult
     */
    public function __construct($updateContactResult = null)
    {
        $this
            ->setUpdateContactResult($updateContactResult);
    }
    /**
     * Get UpdateContactResult value
     * @return string
     */
    public function getUpdateContactResult()
    {
        return $this->UpdateContactResult;
    }
    /**
     * Set UpdateContactResult value
     * @uses \EnumType\SubscribeContactResult::valueIsValid()
     * @uses \EnumType\SubscribeContactResult::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $updateContactResult
     * @return \StructType\UpdateContactResponse
     */
    public function setUpdateContactResult($updateContactResult = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SubscribeContactResult::valueIsValid($updateContactResult)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $updateContactResult, implode(', ', \EnumType\SubscribeContactResult::getValidValues())), __LINE__);
        }
        $this->UpdateContactResult = $updateContactResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\UpdateContactResponse
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
