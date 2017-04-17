<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSCharacterSet StructType
 * @subpackage Structs
 */
class WSCharacterSet extends AbstractStructBase
{
    /**
     * The CharacterSetID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $CharacterSetID;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * Constructor method for WSCharacterSet
     * @uses WSCharacterSet::setCharacterSetID()
     * @uses WSCharacterSet::setName()
     * @param int $characterSetID
     * @param string $name
     */
    public function __construct($characterSetID = null, $name = null)
    {
        $this
            ->setCharacterSetID($characterSetID)
            ->setName($name);
    }
    /**
     * Get CharacterSetID value
     * @return int
     */
    public function getCharacterSetID()
    {
        return $this->CharacterSetID;
    }
    /**
     * Set CharacterSetID value
     * @param int $characterSetID
     * @return \StructType\WSCharacterSet
     */
    public function setCharacterSetID($characterSetID = null)
    {
        // validation for constraint: int
        if (!is_null($characterSetID) && !is_numeric($characterSetID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($characterSetID)), __LINE__);
        }
        $this->CharacterSetID = $characterSetID;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\WSCharacterSet
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSCharacterSet
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
