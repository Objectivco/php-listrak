<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSystemIDFromPublicID StructType
 * @subpackage Structs
 */
class GetSystemIDFromPublicID extends AbstractStructBase
{
    /**
     * The ObjectType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ObjectType;
    /**
     * The PublicID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PublicID;
    /**
     * Constructor method for GetSystemIDFromPublicID
     * @uses GetSystemIDFromPublicID::setObjectType()
     * @uses GetSystemIDFromPublicID::setPublicID()
     * @param string $objectType
     * @param string $publicID
     */
    public function __construct($objectType = null, $publicID = null)
    {
        $this
            ->setObjectType($objectType)
            ->setPublicID($publicID);
    }
    /**
     * Get ObjectType value
     * @return string
     */
    public function getObjectType()
    {
        return $this->ObjectType;
    }
    /**
     * Set ObjectType value
     * @uses \EnumType\WSObjectTypeEnum::valueIsValid()
     * @uses \EnumType\WSObjectTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $objectType
     * @return \StructType\GetSystemIDFromPublicID
     */
    public function setObjectType($objectType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\WSObjectTypeEnum::valueIsValid($objectType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $objectType, implode(', ', \EnumType\WSObjectTypeEnum::getValidValues())), __LINE__);
        }
        $this->ObjectType = $objectType;
        return $this;
    }
    /**
     * Get PublicID value
     * @return string|null
     */
    public function getPublicID()
    {
        return $this->PublicID;
    }
    /**
     * Set PublicID value
     * @param string $publicID
     * @return \StructType\GetSystemIDFromPublicID
     */
    public function setPublicID($publicID = null)
    {
        // validation for constraint: string
        if (!is_null($publicID) && !is_string($publicID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($publicID)), __LINE__);
        }
        $this->PublicID = $publicID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetSystemIDFromPublicID
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
