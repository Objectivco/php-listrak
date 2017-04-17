<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSLegacyProcessStatus StructType
 * @subpackage Structs
 */
class WSLegacyProcessStatus extends AbstractStructBase
{
    /**
     * The StatusID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $StatusID;
    /**
     * The ListID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ListID;
    /**
     * The CurrentStep
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $CurrentStep;
    /**
     * The MaxStep
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $MaxStep;
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
     * The ProcessType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProcessType;
    /**
     * Constructor method for WSLegacyProcessStatus
     * @uses WSLegacyProcessStatus::setStatusID()
     * @uses WSLegacyProcessStatus::setListID()
     * @uses WSLegacyProcessStatus::setCurrentStep()
     * @uses WSLegacyProcessStatus::setMaxStep()
     * @uses WSLegacyProcessStatus::setProcessStartTime()
     * @uses WSLegacyProcessStatus::setProcessCompleteTime()
     * @uses WSLegacyProcessStatus::setProcessType()
     * @param int $statusID
     * @param int $listID
     * @param int $currentStep
     * @param int $maxStep
     * @param string $processStartTime
     * @param string $processCompleteTime
     * @param string $processType
     */
    public function __construct($statusID = null, $listID = null, $currentStep = null, $maxStep = null, $processStartTime = null, $processCompleteTime = null, $processType = null)
    {
        $this
            ->setStatusID($statusID)
            ->setListID($listID)
            ->setCurrentStep($currentStep)
            ->setMaxStep($maxStep)
            ->setProcessStartTime($processStartTime)
            ->setProcessCompleteTime($processCompleteTime)
            ->setProcessType($processType);
    }
    /**
     * Get StatusID value
     * @return int
     */
    public function getStatusID()
    {
        return $this->StatusID;
    }
    /**
     * Set StatusID value
     * @param int $statusID
     * @return \StructType\WSLegacyProcessStatus
     */
    public function setStatusID($statusID = null)
    {
        // validation for constraint: int
        if (!is_null($statusID) && !is_numeric($statusID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($statusID)), __LINE__);
        }
        $this->StatusID = $statusID;
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
     * @return \StructType\WSLegacyProcessStatus
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
     * Get CurrentStep value
     * @return int
     */
    public function getCurrentStep()
    {
        return $this->CurrentStep;
    }
    /**
     * Set CurrentStep value
     * @param int $currentStep
     * @return \StructType\WSLegacyProcessStatus
     */
    public function setCurrentStep($currentStep = null)
    {
        // validation for constraint: int
        if (!is_null($currentStep) && !is_numeric($currentStep)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($currentStep)), __LINE__);
        }
        $this->CurrentStep = $currentStep;
        return $this;
    }
    /**
     * Get MaxStep value
     * @return int
     */
    public function getMaxStep()
    {
        return $this->MaxStep;
    }
    /**
     * Set MaxStep value
     * @param int $maxStep
     * @return \StructType\WSLegacyProcessStatus
     */
    public function setMaxStep($maxStep = null)
    {
        // validation for constraint: int
        if (!is_null($maxStep) && !is_numeric($maxStep)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxStep)), __LINE__);
        }
        $this->MaxStep = $maxStep;
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
     * @return \StructType\WSLegacyProcessStatus
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
     * @return \StructType\WSLegacyProcessStatus
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
     * Get ProcessType value
     * @return string|null
     */
    public function getProcessType()
    {
        return $this->ProcessType;
    }
    /**
     * Set ProcessType value
     * @param string $processType
     * @return \StructType\WSLegacyProcessStatus
     */
    public function setProcessType($processType = null)
    {
        // validation for constraint: string
        if (!is_null($processType) && !is_string($processType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($processType)), __LINE__);
        }
        $this->ProcessType = $processType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSLegacyProcessStatus
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
