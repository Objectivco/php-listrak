<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConductorGetConversations StructType
 * @subpackage Structs
 */
class ConductorGetConversations extends AbstractStructBase
{
    /**
     * The listID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $listID;
    /**
     * Constructor method for ConductorGetConversations
     * @uses ConductorGetConversations::setListID()
     * @param int $listID
     */
    public function __construct($listID = null)
    {
        $this
            ->setListID($listID);
    }
    /**
     * Get listID value
     * @return int
     */
    public function getListID()
    {
        return $this->listID;
    }
    /**
     * Set listID value
     * @param int $listID
     * @return \StructType\ConductorGetConversations
     */
    public function setListID($listID = null)
    {
        // validation for constraint: int
        if (!is_null($listID) && !is_numeric($listID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($listID)), __LINE__);
        }
        $this->listID = $listID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ConductorGetConversations
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
