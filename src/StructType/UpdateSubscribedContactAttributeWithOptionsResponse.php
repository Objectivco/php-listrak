<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateSubscribedContactAttributeWithOptionsResponse
 * StructType
 * @subpackage Structs
 */
class UpdateSubscribedContactAttributeWithOptionsResponse extends AbstractStructBase
{
    /**
     * The UpdateSubscribedContactAttributeWithOptionsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $UpdateSubscribedContactAttributeWithOptionsResult;
    /**
     * Constructor method for UpdateSubscribedContactAttributeWithOptionsResponse
     * @uses UpdateSubscribedContactAttributeWithOptionsResponse::setUpdateSubscribedContactAttributeWithOptionsResult()
     * @param int $updateSubscribedContactAttributeWithOptionsResult
     */
    public function __construct($updateSubscribedContactAttributeWithOptionsResult = null)
    {
        $this
            ->setUpdateSubscribedContactAttributeWithOptionsResult($updateSubscribedContactAttributeWithOptionsResult);
    }
    /**
     * Get UpdateSubscribedContactAttributeWithOptionsResult value
     * @return int
     */
    public function getUpdateSubscribedContactAttributeWithOptionsResult()
    {
        return $this->UpdateSubscribedContactAttributeWithOptionsResult;
    }
    /**
     * Set UpdateSubscribedContactAttributeWithOptionsResult value
     * @param int $updateSubscribedContactAttributeWithOptionsResult
     * @return \StructType\UpdateSubscribedContactAttributeWithOptionsResponse
     */
    public function setUpdateSubscribedContactAttributeWithOptionsResult($updateSubscribedContactAttributeWithOptionsResult = null)
    {
        // validation for constraint: int
        if (!is_null($updateSubscribedContactAttributeWithOptionsResult) && !is_numeric($updateSubscribedContactAttributeWithOptionsResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($updateSubscribedContactAttributeWithOptionsResult)), __LINE__);
        }
        $this->UpdateSubscribedContactAttributeWithOptionsResult = $updateSubscribedContactAttributeWithOptionsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\UpdateSubscribedContactAttributeWithOptionsResponse
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
