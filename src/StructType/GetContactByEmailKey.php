<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetContactByEmailKey StructType
 * @subpackage Structs
 */
class GetContactByEmailKey extends AbstractStructBase
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
     * The EmailKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EmailKey;
    /**
     * Constructor method for GetContactByEmailKey
     * @uses GetContactByEmailKey::setListID()
     * @uses GetContactByEmailKey::setEmailKey()
     * @param int $listID
     * @param string $emailKey
     */
    public function __construct($listID = null, $emailKey = null)
    {
        $this
            ->setListID($listID)
            ->setEmailKey($emailKey);
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
     * @return \StructType\GetContactByEmailKey
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
     * Get EmailKey value
     * @return string|null
     */
    public function getEmailKey()
    {
        return $this->EmailKey;
    }
    /**
     * Set EmailKey value
     * @param string $emailKey
     * @return \StructType\GetContactByEmailKey
     */
    public function setEmailKey($emailKey = null)
    {
        // validation for constraint: string
        if (!is_null($emailKey) && !is_string($emailKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailKey)), __LINE__);
        }
        $this->EmailKey = $emailKey;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetContactByEmailKey
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
