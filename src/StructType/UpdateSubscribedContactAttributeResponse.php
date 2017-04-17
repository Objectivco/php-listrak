<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateSubscribedContactAttributeResponse StructType
 * @subpackage Structs
 */
class UpdateSubscribedContactAttributeResponse extends AbstractStructBase
{
    /**
     * The UpdateSubscribedContactAttributeResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $UpdateSubscribedContactAttributeResult;
    /**
     * Constructor method for UpdateSubscribedContactAttributeResponse
     * @uses UpdateSubscribedContactAttributeResponse::setUpdateSubscribedContactAttributeResult()
     * @param int $updateSubscribedContactAttributeResult
     */
    public function __construct($updateSubscribedContactAttributeResult = null)
    {
        $this
            ->setUpdateSubscribedContactAttributeResult($updateSubscribedContactAttributeResult);
    }
    /**
     * Get UpdateSubscribedContactAttributeResult value
     * @return int
     */
    public function getUpdateSubscribedContactAttributeResult()
    {
        return $this->UpdateSubscribedContactAttributeResult;
    }
    /**
     * Set UpdateSubscribedContactAttributeResult value
     * @param int $updateSubscribedContactAttributeResult
     * @return \StructType\UpdateSubscribedContactAttributeResponse
     */
    public function setUpdateSubscribedContactAttributeResult($updateSubscribedContactAttributeResult = null)
    {
        // validation for constraint: int
        if (!is_null($updateSubscribedContactAttributeResult) && !is_numeric($updateSubscribedContactAttributeResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($updateSubscribedContactAttributeResult)), __LINE__);
        }
        $this->UpdateSubscribedContactAttributeResult = $updateSubscribedContactAttributeResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\UpdateSubscribedContactAttributeResponse
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
