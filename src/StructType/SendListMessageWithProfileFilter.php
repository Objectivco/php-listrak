<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendListMessageWithProfileFilter StructType
 * @subpackage Structs
 */
class SendListMessageWithProfileFilter extends AbstractStructBase
{
    /**
     * The WSMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSMessage
     */
    public $WSMessage;
    /**
     * The ProfileFilter
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSProfileFilter
     */
    public $ProfileFilter;
    /**
     * Constructor method for SendListMessageWithProfileFilter
     * @uses SendListMessageWithProfileFilter::setWSMessage()
     * @uses SendListMessageWithProfileFilter::setProfileFilter()
     * @param \StructType\WSMessage $wSMessage
     * @param \ArrayType\ArrayOfWSProfileFilter $profileFilter
     */
    public function __construct(\StructType\WSMessage $wSMessage = null, \ArrayType\ArrayOfWSProfileFilter $profileFilter = null)
    {
        $this
            ->setWSMessage($wSMessage)
            ->setProfileFilter($profileFilter);
    }
    /**
     * Get WSMessage value
     * @return \StructType\WSMessage
     */
    public function getWSMessage()
    {
        return $this->WSMessage;
    }
    /**
     * Set WSMessage value
     * @param \StructType\WSMessage $wSMessage
     * @return \StructType\SendListMessageWithProfileFilter
     */
    public function setWSMessage(\StructType\WSMessage $wSMessage = null)
    {
        $this->WSMessage = $wSMessage;
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
     * @return \StructType\SendListMessageWithProfileFilter
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
     * @return \StructType\SendListMessageWithProfileFilter
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
