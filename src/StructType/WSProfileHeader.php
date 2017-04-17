<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSProfileHeader StructType
 * @subpackage Structs
 */
class WSProfileHeader extends AbstractStructBase
{
    /**
     * The HeaderID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $HeaderID;
    /**
     * The ListID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ListID;
    /**
     * The Position
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Position;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The WSProfileAttributes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\WSProfileAttribute[]
     */
    public $WSProfileAttributes;
    /**
     * Constructor method for WSProfileHeader
     * @uses WSProfileHeader::setHeaderID()
     * @uses WSProfileHeader::setListID()
     * @uses WSProfileHeader::setPosition()
     * @uses WSProfileHeader::setName()
     * @uses WSProfileHeader::setWSProfileAttributes()
     * @param int $headerID
     * @param int $listID
     * @param int $position
     * @param string $name
     * @param \StructType\WSProfileAttribute[] $wSProfileAttributes
     */
    public function __construct($headerID = null, $listID = null, $position = null, $name = null, array $wSProfileAttributes = array())
    {
        $this
            ->setHeaderID($headerID)
            ->setListID($listID)
            ->setPosition($position)
            ->setName($name)
            ->setWSProfileAttributes($wSProfileAttributes);
    }
    /**
     * Get HeaderID value
     * @return int
     */
    public function getHeaderID()
    {
        return $this->HeaderID;
    }
    /**
     * Set HeaderID value
     * @param int $headerID
     * @return \StructType\WSProfileHeader
     */
    public function setHeaderID($headerID = null)
    {
        // validation for constraint: int
        if (!is_null($headerID) && !is_numeric($headerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($headerID)), __LINE__);
        }
        $this->HeaderID = $headerID;
        return $this;
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
     * @return \StructType\WSProfileHeader
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
     * Get Position value
     * @return int
     */
    public function getPosition()
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param int $position
     * @return \StructType\WSProfileHeader
     */
    public function setPosition($position = null)
    {
        // validation for constraint: int
        if (!is_null($position) && !is_numeric($position)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($position)), __LINE__);
        }
        $this->Position = $position;
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
     * @return \StructType\WSProfileHeader
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
     * Get WSProfileAttributes value
     * @return \StructType\WSProfileAttribute[]|null
     */
    public function getWSProfileAttributes()
    {
        return $this->WSProfileAttributes;
    }
    /**
     * Set WSProfileAttributes value
     * @throws \InvalidArgumentException
     * @param \StructType\WSProfileAttribute[] $wSProfileAttributes
     * @return \StructType\WSProfileHeader
     */
    public function setWSProfileAttributes(array $wSProfileAttributes = array())
    {
        foreach ($wSProfileAttributes as $wSProfileHeaderWSProfileAttributesItem) {
            // validation for constraint: itemType
            if (!$wSProfileHeaderWSProfileAttributesItem instanceof \StructType\WSProfileAttribute) {
                throw new \InvalidArgumentException(sprintf('The WSProfileAttributes property can only contain items of \StructType\WSProfileAttribute, "%s" given', is_object($wSProfileHeaderWSProfileAttributesItem) ? get_class($wSProfileHeaderWSProfileAttributesItem) : gettype($wSProfileHeaderWSProfileAttributesItem)), __LINE__);
            }
        }
        $this->WSProfileAttributes = $wSProfileAttributes;
        return $this;
    }
    /**
     * Add item to WSProfileAttributes value
     * @throws \InvalidArgumentException
     * @param \StructType\WSProfileAttribute $item
     * @return \StructType\WSProfileHeader
     */
    public function addToWSProfileAttributes(\StructType\WSProfileAttribute $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WSProfileAttribute) {
            throw new \InvalidArgumentException(sprintf('The WSProfileAttributes property can only contain items of \StructType\WSProfileAttribute, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSProfileAttributes[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSProfileHeader
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
