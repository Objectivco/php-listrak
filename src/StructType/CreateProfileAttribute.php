<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateProfileAttribute StructType
 * @subpackage Structs
 */
class CreateProfileAttribute extends AbstractStructBase
{
    /**
     * The WSProfileAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSProfileAttribute
     */
    public $WSProfileAttribute;
    /**
     * The WSException
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSException
     */
    public $WSException;
    /**
     * Constructor method for CreateProfileAttribute
     * @uses CreateProfileAttribute::setWSProfileAttribute()
     * @uses CreateProfileAttribute::setWSException()
     * @param \StructType\WSProfileAttribute $wSProfileAttribute
     * @param \StructType\WSException $wSException
     */
    public function __construct(\StructType\WSProfileAttribute $wSProfileAttribute = null, \StructType\WSException $wSException = null)
    {
        $this
            ->setWSProfileAttribute($wSProfileAttribute)
            ->setWSException($wSException);
    }
    /**
     * Get WSProfileAttribute value
     * @return \StructType\WSProfileAttribute
     */
    public function getWSProfileAttribute()
    {
        return $this->WSProfileAttribute;
    }
    /**
     * Set WSProfileAttribute value
     * @param \StructType\WSProfileAttribute $wSProfileAttribute
     * @return \StructType\CreateProfileAttribute
     */
    public function setWSProfileAttribute(\StructType\WSProfileAttribute $wSProfileAttribute = null)
    {
        $this->WSProfileAttribute = $wSProfileAttribute;
        return $this;
    }
    /**
     * Get WSException value
     * @return \StructType\WSException
     */
    public function getWSException()
    {
        return $this->WSException;
    }
    /**
     * Set WSException value
     * @param \StructType\WSException $wSException
     * @return \StructType\CreateProfileAttribute
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CreateProfileAttribute
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
