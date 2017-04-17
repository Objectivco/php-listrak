<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSCampaign StructType
 * @subpackage Structs
 */
class WSCampaign extends AbstractStructBase
{
    /**
     * The CampaignID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $CampaignID;
    /**
     * The ListID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ListID;
    /**
     * The MessageCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $MessageCount;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * Constructor method for WSCampaign
     * @uses WSCampaign::setCampaignID()
     * @uses WSCampaign::setListID()
     * @uses WSCampaign::setMessageCount()
     * @uses WSCampaign::setName()
     * @param int $campaignID
     * @param int $listID
     * @param int $messageCount
     * @param string $name
     */
    public function __construct($campaignID = null, $listID = null, $messageCount = null, $name = null)
    {
        $this
            ->setCampaignID($campaignID)
            ->setListID($listID)
            ->setMessageCount($messageCount)
            ->setName($name);
    }
    /**
     * Get CampaignID value
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }
    /**
     * Set CampaignID value
     * @param int $campaignID
     * @return \StructType\WSCampaign
     */
    public function setCampaignID($campaignID = null)
    {
        // validation for constraint: int
        if (!is_null($campaignID) && !is_numeric($campaignID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($campaignID)), __LINE__);
        }
        $this->CampaignID = $campaignID;
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
     * @return \StructType\WSCampaign
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
     * Get MessageCount value
     * @return int
     */
    public function getMessageCount()
    {
        return $this->MessageCount;
    }
    /**
     * Set MessageCount value
     * @param int $messageCount
     * @return \StructType\WSCampaign
     */
    public function setMessageCount($messageCount = null)
    {
        // validation for constraint: int
        if (!is_null($messageCount) && !is_numeric($messageCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($messageCount)), __LINE__);
        }
        $this->MessageCount = $messageCount;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\WSCampaign
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSCampaign
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
