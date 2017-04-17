<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateContactListResponse StructType
 * @subpackage Structs
 */
class CreateContactListResponse extends AbstractStructBase
{
    /**
     * The WSContactList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSContactList
     */
    public $WSContactList;
    /**
     * Constructor method for CreateContactListResponse
     * @uses CreateContactListResponse::setWSContactList()
     * @param \StructType\WSContactList $wSContactList
     */
    public function __construct(\StructType\WSContactList $wSContactList = null)
    {
        $this
            ->setWSContactList($wSContactList);
    }
    /**
     * Get WSContactList value
     * @return \StructType\WSContactList
     */
    public function getWSContactList()
    {
        return $this->WSContactList;
    }
    /**
     * Set WSContactList value
     * @param \StructType\WSContactList $wSContactList
     * @return \StructType\CreateContactListResponse
     */
    public function setWSContactList(\StructType\WSContactList $wSContactList = null)
    {
        $this->WSContactList = $wSContactList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CreateContactListResponse
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
