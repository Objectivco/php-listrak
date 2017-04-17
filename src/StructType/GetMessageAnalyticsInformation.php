<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMessageAnalyticsInformation StructType
 * @subpackage Structs
 */
class GetMessageAnalyticsInformation extends AbstractStructBase
{
    /**
     * The MsgIDs
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfInt
     */
    public $MsgIDs;
    /**
     * Constructor method for GetMessageAnalyticsInformation
     * @uses GetMessageAnalyticsInformation::setMsgIDs()
     * @param \ArrayType\ArrayOfInt $msgIDs
     */
    public function __construct(\ArrayType\ArrayOfInt $msgIDs = null)
    {
        $this
            ->setMsgIDs($msgIDs);
    }
    /**
     * Get MsgIDs value
     * @return \ArrayType\ArrayOfInt|null
     */
    public function getMsgIDs()
    {
        return $this->MsgIDs;
    }
    /**
     * Set MsgIDs value
     * @param \ArrayType\ArrayOfInt $msgIDs
     * @return \StructType\GetMessageAnalyticsInformation
     */
    public function setMsgIDs(\ArrayType\ArrayOfInt $msgIDs = null)
    {
        $this->MsgIDs = $msgIDs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetMessageAnalyticsInformation
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
