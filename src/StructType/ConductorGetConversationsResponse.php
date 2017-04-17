<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConductorGetConversationsResponse StructType
 * @subpackage Structs
 */
class ConductorGetConversationsResponse extends AbstractStructBase
{
    /**
     * The ConductorGetConversationsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSConductorConversation
     */
    public $ConductorGetConversationsResult;
    /**
     * Constructor method for ConductorGetConversationsResponse
     * @uses ConductorGetConversationsResponse::setConductorGetConversationsResult()
     * @param \ArrayType\ArrayOfWSConductorConversation $conductorGetConversationsResult
     */
    public function __construct(\ArrayType\ArrayOfWSConductorConversation $conductorGetConversationsResult = null)
    {
        $this
            ->setConductorGetConversationsResult($conductorGetConversationsResult);
    }
    /**
     * Get ConductorGetConversationsResult value
     * @return \ArrayType\ArrayOfWSConductorConversation|null
     */
    public function getConductorGetConversationsResult()
    {
        return $this->ConductorGetConversationsResult;
    }
    /**
     * Set ConductorGetConversationsResult value
     * @param \ArrayType\ArrayOfWSConductorConversation $conductorGetConversationsResult
     * @return \StructType\ConductorGetConversationsResponse
     */
    public function setConductorGetConversationsResult(\ArrayType\ArrayOfWSConductorConversation $conductorGetConversationsResult = null)
    {
        $this->ConductorGetConversationsResult = $conductorGetConversationsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ConductorGetConversationsResponse
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
