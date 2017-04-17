<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetContactByEmailKeyResponse StructType
 * @subpackage Structs
 */
class GetContactByEmailKeyResponse extends AbstractStructBase
{
    /**
     * The WSContact
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSContact
     */
    public $WSContact;
    /**
     * Constructor method for GetContactByEmailKeyResponse
     * @uses GetContactByEmailKeyResponse::setWSContact()
     * @param \StructType\WSContact $wSContact
     */
    public function __construct(\StructType\WSContact $wSContact = null)
    {
        $this
            ->setWSContact($wSContact);
    }
    /**
     * Get WSContact value
     * @return \StructType\WSContact
     */
    public function getWSContact()
    {
        return $this->WSContact;
    }
    /**
     * Set WSContact value
     * @param \StructType\WSContact $wSContact
     * @return \StructType\GetContactByEmailKeyResponse
     */
    public function setWSContact(\StructType\WSContact $wSContact = null)
    {
        $this->WSContact = $wSContact;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetContactByEmailKeyResponse
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
