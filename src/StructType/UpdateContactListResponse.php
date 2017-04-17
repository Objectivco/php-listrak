<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateContactListResponse StructType
 * @subpackage Structs
 */
class UpdateContactListResponse extends AbstractStructBase
{
    /**
     * The WSUpdateContactList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSUpdateContactList
     */
    public $WSUpdateContactList;
    /**
     * Constructor method for UpdateContactListResponse
     * @uses UpdateContactListResponse::setWSUpdateContactList()
     * @param \StructType\WSUpdateContactList $wSUpdateContactList
     */
    public function __construct(\StructType\WSUpdateContactList $wSUpdateContactList = null)
    {
        $this
            ->setWSUpdateContactList($wSUpdateContactList);
    }
    /**
     * Get WSUpdateContactList value
     * @return \StructType\WSUpdateContactList
     */
    public function getWSUpdateContactList()
    {
        return $this->WSUpdateContactList;
    }
    /**
     * Set WSUpdateContactList value
     * @param \StructType\WSUpdateContactList $wSUpdateContactList
     * @return \StructType\UpdateContactListResponse
     */
    public function setWSUpdateContactList(\StructType\WSUpdateContactList $wSUpdateContactList = null)
    {
        $this->WSUpdateContactList = $wSUpdateContactList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\UpdateContactListResponse
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
