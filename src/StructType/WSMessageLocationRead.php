<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSMessageLocationRead StructType
 * @subpackage Structs
 */
class WSMessageLocationRead extends AbstractStructBase
{
    /**
     * The MsgID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $MsgID;
    /**
     * The CountryID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $CountryID;
    /**
     * The RegionID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $RegionID;
    /**
     * The ReadCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ReadCount;
    /**
     * The CountryName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CountryName;
    /**
     * The RegionName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RegionName;
    /**
     * Constructor method for WSMessageLocationRead
     * @uses WSMessageLocationRead::setMsgID()
     * @uses WSMessageLocationRead::setCountryID()
     * @uses WSMessageLocationRead::setRegionID()
     * @uses WSMessageLocationRead::setReadCount()
     * @uses WSMessageLocationRead::setCountryName()
     * @uses WSMessageLocationRead::setRegionName()
     * @param int $msgID
     * @param int $countryID
     * @param int $regionID
     * @param int $readCount
     * @param string $countryName
     * @param string $regionName
     */
    public function __construct($msgID = null, $countryID = null, $regionID = null, $readCount = null, $countryName = null, $regionName = null)
    {
        $this
            ->setMsgID($msgID)
            ->setCountryID($countryID)
            ->setRegionID($regionID)
            ->setReadCount($readCount)
            ->setCountryName($countryName)
            ->setRegionName($regionName);
    }
    /**
     * Get MsgID value
     * @return int
     */
    public function getMsgID()
    {
        return $this->MsgID;
    }
    /**
     * Set MsgID value
     * @param int $msgID
     * @return \StructType\WSMessageLocationRead
     */
    public function setMsgID($msgID = null)
    {
        // validation for constraint: int
        if (!is_null($msgID) && !is_numeric($msgID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($msgID)), __LINE__);
        }
        $this->MsgID = $msgID;
        return $this;
    }
    /**
     * Get CountryID value
     * @return int
     */
    public function getCountryID()
    {
        return $this->CountryID;
    }
    /**
     * Set CountryID value
     * @param int $countryID
     * @return \StructType\WSMessageLocationRead
     */
    public function setCountryID($countryID = null)
    {
        // validation for constraint: int
        if (!is_null($countryID) && !is_numeric($countryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($countryID)), __LINE__);
        }
        $this->CountryID = $countryID;
        return $this;
    }
    /**
     * Get RegionID value
     * @return int
     */
    public function getRegionID()
    {
        return $this->RegionID;
    }
    /**
     * Set RegionID value
     * @param int $regionID
     * @return \StructType\WSMessageLocationRead
     */
    public function setRegionID($regionID = null)
    {
        // validation for constraint: int
        if (!is_null($regionID) && !is_numeric($regionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($regionID)), __LINE__);
        }
        $this->RegionID = $regionID;
        return $this;
    }
    /**
     * Get ReadCount value
     * @return int
     */
    public function getReadCount()
    {
        return $this->ReadCount;
    }
    /**
     * Set ReadCount value
     * @param int $readCount
     * @return \StructType\WSMessageLocationRead
     */
    public function setReadCount($readCount = null)
    {
        // validation for constraint: int
        if (!is_null($readCount) && !is_numeric($readCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($readCount)), __LINE__);
        }
        $this->ReadCount = $readCount;
        return $this;
    }
    /**
     * Get CountryName value
     * @return string|null
     */
    public function getCountryName()
    {
        return $this->CountryName;
    }
    /**
     * Set CountryName value
     * @param string $countryName
     * @return \StructType\WSMessageLocationRead
     */
    public function setCountryName($countryName = null)
    {
        // validation for constraint: string
        if (!is_null($countryName) && !is_string($countryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryName)), __LINE__);
        }
        $this->CountryName = $countryName;
        return $this;
    }
    /**
     * Get RegionName value
     * @return string|null
     */
    public function getRegionName()
    {
        return $this->RegionName;
    }
    /**
     * Set RegionName value
     * @param string $regionName
     * @return \StructType\WSMessageLocationRead
     */
    public function setRegionName($regionName = null)
    {
        // validation for constraint: string
        if (!is_null($regionName) && !is_string($regionName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($regionName)), __LINE__);
        }
        $this->RegionName = $regionName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSMessageLocationRead
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
