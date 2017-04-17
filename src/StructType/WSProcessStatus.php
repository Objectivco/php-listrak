<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSProcessStatus StructType
 * @subpackage Structs
 */
class WSProcessStatus extends AbstractStructBase
{
    /**
     * The ProcessID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ProcessID;
    /**
     * The ListID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ListID;
    /**
     * The ProcessStartTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ProcessStartTime;
    /**
     * The ProcessCompleteTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ProcessCompleteTime;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Status;
    /**
     * The ProcessName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProcessName;
    /**
     * Constructor method for WSProcessStatus
     * @uses WSProcessStatus::setProcessID()
     * @uses WSProcessStatus::setListID()
     * @uses WSProcessStatus::setProcessStartTime()
     * @uses WSProcessStatus::setProcessCompleteTime()
     * @uses WSProcessStatus::setStatus()
     * @uses WSProcessStatus::setProcessName()
     * @param int $processID
     * @param int $listID
     * @param string $processStartTime
     * @param string $processCompleteTime
     * @param string $status
     * @param string $processName
     */
    public function __construct($processID = null, $listID = null, $processStartTime = null, $processCompleteTime = null, $status = null, $processName = null)
    {
        $this
            ->setProcessID($processID)
            ->setListID($listID)
            ->setProcessStartTime($processStartTime)
            ->setProcessCompleteTime($processCompleteTime)
            ->setStatus($status)
            ->setProcessName($processName);
    }
    /**
     * Get ProcessID value
     * @return int
     */
    public function getProcessID()
    {
        return $this->ProcessID;
    }
    /**
     * Set ProcessID value
     * @param int $processID
     * @return \StructType\WSProcessStatus
     */
    public function setProcessID($processID = null)
    {
        // validation for constraint: int
        if (!is_null($processID) && !is_numeric($processID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($processID)), __LINE__);
        }
        $this->ProcessID = $processID;
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
     * @return \StructType\WSProcessStatus
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
     * Get ProcessStartTime value
     * @return string
     */
    public function getProcessStartTime()
    {
        return $this->ProcessStartTime;
    }
    /**
     * Set ProcessStartTime value
     * @param string $processStartTime
     * @return \StructType\WSProcessStatus
     */
    public function setProcessStartTime($processStartTime = null)
    {
        // validation for constraint: string
        if (!is_null($processStartTime) && !is_string($processStartTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($processStartTime)), __LINE__);
        }
        $this->ProcessStartTime = $processStartTime;
        return $this;
    }
    /**
     * Get ProcessCompleteTime value
     * @return string
     */
    public function getProcessCompleteTime()
    {
        return $this->ProcessCompleteTime;
    }
    /**
     * Set ProcessCompleteTime value
     * @param string $processCompleteTime
     * @return \StructType\WSProcessStatus
     */
    public function setProcessCompleteTime($processCompleteTime = null)
    {
        // validation for constraint: string
        if (!is_null($processCompleteTime) && !is_string($processCompleteTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($processCompleteTime)), __LINE__);
        }
        $this->ProcessCompleteTime = $processCompleteTime;
        return $this;
    }
    /**
     * Get Status value
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\StatusEnum::valueIsValid()
     * @uses \EnumType\StatusEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\WSProcessStatus
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\StatusEnum::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \EnumType\StatusEnum::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get ProcessName value
     * @return string|null
     */
    public function getProcessName()
    {
        return $this->ProcessName;
    }
    /**
     * Set ProcessName value
     * @param string $processName
     * @return \StructType\WSProcessStatus
     */
    public function setProcessName($processName = null)
    {
        // validation for constraint: string
        if (!is_null($processName) && !is_string($processName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($processName)), __LINE__);
        }
        $this->ProcessName = $processName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSProcessStatus
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
