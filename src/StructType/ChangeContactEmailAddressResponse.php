<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChangeContactEmailAddressResponse StructType
 * @subpackage Structs
 */
class ChangeContactEmailAddressResponse extends AbstractStructBase
{
    /**
     * The ChangeContactEmailAddressResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ChangeContactEmailAddressResult;
    /**
     * Constructor method for ChangeContactEmailAddressResponse
     * @uses ChangeContactEmailAddressResponse::setChangeContactEmailAddressResult()
     * @param string $changeContactEmailAddressResult
     */
    public function __construct($changeContactEmailAddressResult = null)
    {
        $this
            ->setChangeContactEmailAddressResult($changeContactEmailAddressResult);
    }
    /**
     * Get ChangeContactEmailAddressResult value
     * @return string
     */
    public function getChangeContactEmailAddressResult()
    {
        return $this->ChangeContactEmailAddressResult;
    }
    /**
     * Set ChangeContactEmailAddressResult value
     * @uses \EnumType\ChangeContactEmailResult::valueIsValid()
     * @uses \EnumType\ChangeContactEmailResult::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $changeContactEmailAddressResult
     * @return \StructType\ChangeContactEmailAddressResponse
     */
    public function setChangeContactEmailAddressResult($changeContactEmailAddressResult = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ChangeContactEmailResult::valueIsValid($changeContactEmailAddressResult)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $changeContactEmailAddressResult, implode(', ', \EnumType\ChangeContactEmailResult::getValidValues())), __LINE__);
        }
        $this->ChangeContactEmailAddressResult = $changeContactEmailAddressResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ChangeContactEmailAddressResponse
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
