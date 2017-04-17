<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportConversationLocationContactOpen StructType
 * @subpackage Structs
 */
class ReportConversationLocationContactOpen extends AbstractStructBase
{
    /**
     * The ConversationID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ConversationID;
    /**
     * The GeoLocationID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $GeoLocationID;
    /**
     * The Page
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Page;
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
     * The WSException
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSException
     */
    public $WSException;
    /**
     * Constructor method for ReportConversationLocationContactOpen
     * @uses ReportConversationLocationContactOpen::setConversationID()
     * @uses ReportConversationLocationContactOpen::setGeoLocationID()
     * @uses ReportConversationLocationContactOpen::setPage()
     * @uses ReportConversationLocationContactOpen::setStartDate()
     * @uses ReportConversationLocationContactOpen::setEndDate()
     * @uses ReportConversationLocationContactOpen::setWSException()
     * @param int $conversationID
     * @param int $geoLocationID
     * @param int $page
     * @param string $startDate
     * @param string $endDate
     * @param \StructType\WSException $wSException
     */
    public function __construct($conversationID = null, $geoLocationID = null, $page = null, $startDate = null, $endDate = null, \StructType\WSException $wSException = null)
    {
        $this
            ->setConversationID($conversationID)
            ->setGeoLocationID($geoLocationID)
            ->setPage($page)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setWSException($wSException);
    }
    /**
     * Get ConversationID value
     * @return int
     */
    public function getConversationID()
    {
        return $this->ConversationID;
    }
    /**
     * Set ConversationID value
     * @param int $conversationID
     * @return \StructType\ReportConversationLocationContactOpen
     */
    public function setConversationID($conversationID = null)
    {
        // validation for constraint: int
        if (!is_null($conversationID) && !is_numeric($conversationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($conversationID)), __LINE__);
        }
        $this->ConversationID = $conversationID;
        return $this;
    }
    /**
     * Get GeoLocationID value
     * @return int
     */
    public function getGeoLocationID()
    {
        return $this->GeoLocationID;
    }
    /**
     * Set GeoLocationID value
     * @param int $geoLocationID
     * @return \StructType\ReportConversationLocationContactOpen
     */
    public function setGeoLocationID($geoLocationID = null)
    {
        // validation for constraint: int
        if (!is_null($geoLocationID) && !is_numeric($geoLocationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($geoLocationID)), __LINE__);
        }
        $this->GeoLocationID = $geoLocationID;
        return $this;
    }
    /**
     * Get Page value
     * @return int
     */
    public function getPage()
    {
        return $this->Page;
    }
    /**
     * Set Page value
     * @param int $page
     * @return \StructType\ReportConversationLocationContactOpen
     */
    public function setPage($page = null)
    {
        // validation for constraint: int
        if (!is_null($page) && !is_numeric($page)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($page)), __LINE__);
        }
        $this->Page = $page;
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
     * @return \StructType\ReportConversationLocationContactOpen
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
     * @return \StructType\ReportConversationLocationContactOpen
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
     * Get WSException value
     * @return \StructType\WSException
     */
    public function getWSException()
    {
        return $this->WSException;
    }
    /**
     * Set WSException value
     * @param \StructType\WSException $wSException
     * @return \StructType\ReportConversationLocationContactOpen
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportConversationLocationContactOpen
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
