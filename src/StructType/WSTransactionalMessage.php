<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSTransactionalMessage StructType
 * @subpackage Structs
 */
class WSTransactionalMessage extends AbstractStructBase
{
    /**
     * The TransactionalMsgID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $TransactionalMsgID;
    /**
     * The MessageName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MessageName;
    /**
     * Constructor method for WSTransactionalMessage
     * @uses WSTransactionalMessage::setTransactionalMsgID()
     * @uses WSTransactionalMessage::setMessageName()
     * @param int $transactionalMsgID
     * @param string $messageName
     */
    public function __construct($transactionalMsgID = null, $messageName = null)
    {
        $this
            ->setTransactionalMsgID($transactionalMsgID)
            ->setMessageName($messageName);
    }
    /**
     * Get TransactionalMsgID value
     * @return int
     */
    public function getTransactionalMsgID()
    {
        return $this->TransactionalMsgID;
    }
    /**
     * Set TransactionalMsgID value
     * @param int $transactionalMsgID
     * @return \StructType\WSTransactionalMessage
     */
    public function setTransactionalMsgID($transactionalMsgID = null)
    {
        // validation for constraint: int
        if (!is_null($transactionalMsgID) && !is_numeric($transactionalMsgID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($transactionalMsgID)), __LINE__);
        }
        $this->TransactionalMsgID = $transactionalMsgID;
        return $this;
    }
    /**
     * Get MessageName value
     * @return string|null
     */
    public function getMessageName()
    {
        return $this->MessageName;
    }
    /**
     * Set MessageName value
     * @param string $messageName
     * @return \StructType\WSTransactionalMessage
     */
    public function setMessageName($messageName = null)
    {
        // validation for constraint: string
        if (!is_null($messageName) && !is_string($messageName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($messageName)), __LINE__);
        }
        $this->MessageName = $messageName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSTransactionalMessage
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
