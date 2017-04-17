<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteContactListResponse StructType
 * @subpackage Structs
 */
class DeleteContactListResponse extends AbstractStructBase
{
    /**
     * The DeleteContactListResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $DeleteContactListResult;
    /**
     * Constructor method for DeleteContactListResponse
     * @uses DeleteContactListResponse::setDeleteContactListResult()
     * @param bool $deleteContactListResult
     */
    public function __construct($deleteContactListResult = null)
    {
        $this
            ->setDeleteContactListResult($deleteContactListResult);
    }
    /**
     * Get DeleteContactListResult value
     * @return bool
     */
    public function getDeleteContactListResult()
    {
        return $this->DeleteContactListResult;
    }
    /**
     * Set DeleteContactListResult value
     * @param bool $deleteContactListResult
     * @return \StructType\DeleteContactListResponse
     */
    public function setDeleteContactListResult($deleteContactListResult = null)
    {
        $this->DeleteContactListResult = $deleteContactListResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DeleteContactListResponse
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
