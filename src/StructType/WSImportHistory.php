<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSImportHistory StructType
 * @subpackage Structs
 */
class WSImportHistory extends AbstractStructBase
{
    /**
     * The ImportFileID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ImportFileID;
    /**
     * The FileSize
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $FileSize;
    /**
     * The StartDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $StartDate;
    /**
     * The EndDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $EndDate;
    /**
     * The ProcessedCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ProcessedCount;
    /**
     * The InvalidEmailCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $InvalidEmailCount;
    /**
     * The SubscribedCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SubscribedCount;
    /**
     * The UnSubscribedCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $UnSubscribedCount;
    /**
     * The AlreadySubscribedCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $AlreadySubscribedCount;
    /**
     * The AlreadyUnsubscribedCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $AlreadyUnsubscribedCount;
    /**
     * The PreviouslyUnsubscribedCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $PreviouslyUnsubscribedCount;
    /**
     * The SuppressedCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SuppressedCount;
    /**
     * The BannedCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $BannedCount;
    /**
     * The SkippedCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SkippedCount;
    /**
     * The ImportSource
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ImportSource;
    /**
     * The ImportType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ImportType;
    /**
     * The ProfileImportType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProfileImportType;
    /**
     * The FileName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FileName;
    /**
     * Constructor method for WSImportHistory
     * @uses WSImportHistory::setImportFileID()
     * @uses WSImportHistory::setFileSize()
     * @uses WSImportHistory::setStartDate()
     * @uses WSImportHistory::setEndDate()
     * @uses WSImportHistory::setProcessedCount()
     * @uses WSImportHistory::setInvalidEmailCount()
     * @uses WSImportHistory::setSubscribedCount()
     * @uses WSImportHistory::setUnSubscribedCount()
     * @uses WSImportHistory::setAlreadySubscribedCount()
     * @uses WSImportHistory::setAlreadyUnsubscribedCount()
     * @uses WSImportHistory::setPreviouslyUnsubscribedCount()
     * @uses WSImportHistory::setSuppressedCount()
     * @uses WSImportHistory::setBannedCount()
     * @uses WSImportHistory::setSkippedCount()
     * @uses WSImportHistory::setImportSource()
     * @uses WSImportHistory::setImportType()
     * @uses WSImportHistory::setProfileImportType()
     * @uses WSImportHistory::setFileName()
     * @param int $importFileID
     * @param int $fileSize
     * @param string $startDate
     * @param string $endDate
     * @param int $processedCount
     * @param int $invalidEmailCount
     * @param int $subscribedCount
     * @param int $unSubscribedCount
     * @param int $alreadySubscribedCount
     * @param int $alreadyUnsubscribedCount
     * @param int $previouslyUnsubscribedCount
     * @param int $suppressedCount
     * @param int $bannedCount
     * @param int $skippedCount
     * @param string $importSource
     * @param string $importType
     * @param string $profileImportType
     * @param string $fileName
     */
    public function __construct($importFileID = null, $fileSize = null, $startDate = null, $endDate = null, $processedCount = null, $invalidEmailCount = null, $subscribedCount = null, $unSubscribedCount = null, $alreadySubscribedCount = null, $alreadyUnsubscribedCount = null, $previouslyUnsubscribedCount = null, $suppressedCount = null, $bannedCount = null, $skippedCount = null, $importSource = null, $importType = null, $profileImportType = null, $fileName = null)
    {
        $this
            ->setImportFileID($importFileID)
            ->setFileSize($fileSize)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setProcessedCount($processedCount)
            ->setInvalidEmailCount($invalidEmailCount)
            ->setSubscribedCount($subscribedCount)
            ->setUnSubscribedCount($unSubscribedCount)
            ->setAlreadySubscribedCount($alreadySubscribedCount)
            ->setAlreadyUnsubscribedCount($alreadyUnsubscribedCount)
            ->setPreviouslyUnsubscribedCount($previouslyUnsubscribedCount)
            ->setSuppressedCount($suppressedCount)
            ->setBannedCount($bannedCount)
            ->setSkippedCount($skippedCount)
            ->setImportSource($importSource)
            ->setImportType($importType)
            ->setProfileImportType($profileImportType)
            ->setFileName($fileName);
    }
    /**
     * Get ImportFileID value
     * @return int
     */
    public function getImportFileID()
    {
        return $this->ImportFileID;
    }
    /**
     * Set ImportFileID value
     * @param int $importFileID
     * @return \StructType\WSImportHistory
     */
    public function setImportFileID($importFileID = null)
    {
        // validation for constraint: int
        if (!is_null($importFileID) && !is_numeric($importFileID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($importFileID)), __LINE__);
        }
        $this->ImportFileID = $importFileID;
        return $this;
    }
    /**
     * Get FileSize value
     * @return int
     */
    public function getFileSize()
    {
        return $this->FileSize;
    }
    /**
     * Set FileSize value
     * @param int $fileSize
     * @return \StructType\WSImportHistory
     */
    public function setFileSize($fileSize = null)
    {
        // validation for constraint: int
        if (!is_null($fileSize) && !is_numeric($fileSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($fileSize)), __LINE__);
        }
        $this->FileSize = $fileSize;
        return $this;
    }
    /**
     * Get StartDate value
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \StructType\WSImportHistory
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        return $this;
    }
    /**
     * Get EndDate value
     * @return string
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \StructType\WSImportHistory
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        return $this;
    }
    /**
     * Get ProcessedCount value
     * @return int
     */
    public function getProcessedCount()
    {
        return $this->ProcessedCount;
    }
    /**
     * Set ProcessedCount value
     * @param int $processedCount
     * @return \StructType\WSImportHistory
     */
    public function setProcessedCount($processedCount = null)
    {
        // validation for constraint: int
        if (!is_null($processedCount) && !is_numeric($processedCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($processedCount)), __LINE__);
        }
        $this->ProcessedCount = $processedCount;
        return $this;
    }
    /**
     * Get InvalidEmailCount value
     * @return int
     */
    public function getInvalidEmailCount()
    {
        return $this->InvalidEmailCount;
    }
    /**
     * Set InvalidEmailCount value
     * @param int $invalidEmailCount
     * @return \StructType\WSImportHistory
     */
    public function setInvalidEmailCount($invalidEmailCount = null)
    {
        // validation for constraint: int
        if (!is_null($invalidEmailCount) && !is_numeric($invalidEmailCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($invalidEmailCount)), __LINE__);
        }
        $this->InvalidEmailCount = $invalidEmailCount;
        return $this;
    }
    /**
     * Get SubscribedCount value
     * @return int
     */
    public function getSubscribedCount()
    {
        return $this->SubscribedCount;
    }
    /**
     * Set SubscribedCount value
     * @param int $subscribedCount
     * @return \StructType\WSImportHistory
     */
    public function setSubscribedCount($subscribedCount = null)
    {
        // validation for constraint: int
        if (!is_null($subscribedCount) && !is_numeric($subscribedCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($subscribedCount)), __LINE__);
        }
        $this->SubscribedCount = $subscribedCount;
        return $this;
    }
    /**
     * Get UnSubscribedCount value
     * @return int
     */
    public function getUnSubscribedCount()
    {
        return $this->UnSubscribedCount;
    }
    /**
     * Set UnSubscribedCount value
     * @param int $unSubscribedCount
     * @return \StructType\WSImportHistory
     */
    public function setUnSubscribedCount($unSubscribedCount = null)
    {
        // validation for constraint: int
        if (!is_null($unSubscribedCount) && !is_numeric($unSubscribedCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($unSubscribedCount)), __LINE__);
        }
        $this->UnSubscribedCount = $unSubscribedCount;
        return $this;
    }
    /**
     * Get AlreadySubscribedCount value
     * @return int
     */
    public function getAlreadySubscribedCount()
    {
        return $this->AlreadySubscribedCount;
    }
    /**
     * Set AlreadySubscribedCount value
     * @param int $alreadySubscribedCount
     * @return \StructType\WSImportHistory
     */
    public function setAlreadySubscribedCount($alreadySubscribedCount = null)
    {
        // validation for constraint: int
        if (!is_null($alreadySubscribedCount) && !is_numeric($alreadySubscribedCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($alreadySubscribedCount)), __LINE__);
        }
        $this->AlreadySubscribedCount = $alreadySubscribedCount;
        return $this;
    }
    /**
     * Get AlreadyUnsubscribedCount value
     * @return int
     */
    public function getAlreadyUnsubscribedCount()
    {
        return $this->AlreadyUnsubscribedCount;
    }
    /**
     * Set AlreadyUnsubscribedCount value
     * @param int $alreadyUnsubscribedCount
     * @return \StructType\WSImportHistory
     */
    public function setAlreadyUnsubscribedCount($alreadyUnsubscribedCount = null)
    {
        // validation for constraint: int
        if (!is_null($alreadyUnsubscribedCount) && !is_numeric($alreadyUnsubscribedCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($alreadyUnsubscribedCount)), __LINE__);
        }
        $this->AlreadyUnsubscribedCount = $alreadyUnsubscribedCount;
        return $this;
    }
    /**
     * Get PreviouslyUnsubscribedCount value
     * @return int
     */
    public function getPreviouslyUnsubscribedCount()
    {
        return $this->PreviouslyUnsubscribedCount;
    }
    /**
     * Set PreviouslyUnsubscribedCount value
     * @param int $previouslyUnsubscribedCount
     * @return \StructType\WSImportHistory
     */
    public function setPreviouslyUnsubscribedCount($previouslyUnsubscribedCount = null)
    {
        // validation for constraint: int
        if (!is_null($previouslyUnsubscribedCount) && !is_numeric($previouslyUnsubscribedCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($previouslyUnsubscribedCount)), __LINE__);
        }
        $this->PreviouslyUnsubscribedCount = $previouslyUnsubscribedCount;
        return $this;
    }
    /**
     * Get SuppressedCount value
     * @return int
     */
    public function getSuppressedCount()
    {
        return $this->SuppressedCount;
    }
    /**
     * Set SuppressedCount value
     * @param int $suppressedCount
     * @return \StructType\WSImportHistory
     */
    public function setSuppressedCount($suppressedCount = null)
    {
        // validation for constraint: int
        if (!is_null($suppressedCount) && !is_numeric($suppressedCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($suppressedCount)), __LINE__);
        }
        $this->SuppressedCount = $suppressedCount;
        return $this;
    }
    /**
     * Get BannedCount value
     * @return int
     */
    public function getBannedCount()
    {
        return $this->BannedCount;
    }
    /**
     * Set BannedCount value
     * @param int $bannedCount
     * @return \StructType\WSImportHistory
     */
    public function setBannedCount($bannedCount = null)
    {
        // validation for constraint: int
        if (!is_null($bannedCount) && !is_numeric($bannedCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bannedCount)), __LINE__);
        }
        $this->BannedCount = $bannedCount;
        return $this;
    }
    /**
     * Get SkippedCount value
     * @return int
     */
    public function getSkippedCount()
    {
        return $this->SkippedCount;
    }
    /**
     * Set SkippedCount value
     * @param int $skippedCount
     * @return \StructType\WSImportHistory
     */
    public function setSkippedCount($skippedCount = null)
    {
        // validation for constraint: int
        if (!is_null($skippedCount) && !is_numeric($skippedCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($skippedCount)), __LINE__);
        }
        $this->SkippedCount = $skippedCount;
        return $this;
    }
    /**
     * Get ImportSource value
     * @return string|null
     */
    public function getImportSource()
    {
        return $this->ImportSource;
    }
    /**
     * Set ImportSource value
     * @param string $importSource
     * @return \StructType\WSImportHistory
     */
    public function setImportSource($importSource = null)
    {
        // validation for constraint: string
        if (!is_null($importSource) && !is_string($importSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($importSource)), __LINE__);
        }
        $this->ImportSource = $importSource;
        return $this;
    }
    /**
     * Get ImportType value
     * @return string|null
     */
    public function getImportType()
    {
        return $this->ImportType;
    }
    /**
     * Set ImportType value
     * @param string $importType
     * @return \StructType\WSImportHistory
     */
    public function setImportType($importType = null)
    {
        // validation for constraint: string
        if (!is_null($importType) && !is_string($importType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($importType)), __LINE__);
        }
        $this->ImportType = $importType;
        return $this;
    }
    /**
     * Get ProfileImportType value
     * @return string|null
     */
    public function getProfileImportType()
    {
        return $this->ProfileImportType;
    }
    /**
     * Set ProfileImportType value
     * @param string $profileImportType
     * @return \StructType\WSImportHistory
     */
    public function setProfileImportType($profileImportType = null)
    {
        // validation for constraint: string
        if (!is_null($profileImportType) && !is_string($profileImportType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($profileImportType)), __LINE__);
        }
        $this->ProfileImportType = $profileImportType;
        return $this;
    }
    /**
     * Get FileName value
     * @return string|null
     */
    public function getFileName()
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param string $fileName
     * @return \StructType\WSImportHistory
     */
    public function setFileName($fileName = null)
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileName)), __LINE__);
        }
        $this->FileName = $fileName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSImportHistory
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
