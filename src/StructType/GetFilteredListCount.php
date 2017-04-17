<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFilteredListCount StructType
 * @subpackage Structs
 */
class GetFilteredListCount extends AbstractStructBase
{
    /**
     * The ListID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ListID;
    /**
     * The ProfileFilter
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSProfileFilter
     */
    public $ProfileFilter;
    /**
     * Constructor method for GetFilteredListCount
     * @uses GetFilteredListCount::setListID()
     * @uses GetFilteredListCount::setProfileFilter()
     * @param int $listID
     * @param \ArrayType\ArrayOfWSProfileFilter $profileFilter
     */
    public function __construct($listID = null, \ArrayType\ArrayOfWSProfileFilter $profileFilter = null)
    {
        $this
            ->setListID($listID)
            ->setProfileFilter($profileFilter);
    }
    /**
     * Get ListID value
     * @return int
     */
    public function getListID()
    {
        return $this->ListID;
    }
    /**
     * Set ListID value
     * @param int $listID
     * @return \StructType\GetFilteredListCount
     */
    public function setListID($listID = null)
    {
        // validation for constraint: int
        if (!is_null($listID) && !is_numeric($listID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($listID)), __LINE__);
        }
        $this->ListID = $listID;
        return $this;
    }
    /**
     * Get ProfileFilter value
     * @return \ArrayType\ArrayOfWSProfileFilter|null
     */
    public function getProfileFilter()
    {
        return $this->ProfileFilter;
    }
    /**
     * Set ProfileFilter value
     * @param \ArrayType\ArrayOfWSProfileFilter $profileFilter
     * @return \StructType\GetFilteredListCount
     */
    public function setProfileFilter(\ArrayType\ArrayOfWSProfileFilter $profileFilter = null)
    {
        $this->ProfileFilter = $profileFilter;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetFilteredListCount
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
