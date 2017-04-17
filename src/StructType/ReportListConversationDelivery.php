<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportListConversationDelivery StructType
 * @subpackage Structs
 */
class ReportListConversationDelivery extends AbstractStructBase
{
    /**
     * The ListID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ListID;
    /**
     * The IncludeTerminated
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IncludeTerminated;
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
     * Constructor method for ReportListConversationDelivery
     * @uses ReportListConversationDelivery::setListID()
     * @uses ReportListConversationDelivery::setIncludeTerminated()
     * @uses ReportListConversationDelivery::setWSException()
     * @param int $listID
     * @param bool $includeTerminated
     * @param \StructType\WSException $wSException
     */
    public function __construct($listID = null, $includeTerminated = null, \StructType\WSException $wSException = null)
    {
        $this
            ->setListID($listID)
            ->setIncludeTerminated($includeTerminated)
            ->setWSException($wSException);
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
     * @return \StructType\ReportListConversationDelivery
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
     * Get IncludeTerminated value
     * @return bool
     */
    public function getIncludeTerminated()
    {
        return $this->IncludeTerminated;
    }
    /**
     * Set IncludeTerminated value
     * @param bool $includeTerminated
     * @return \StructType\ReportListConversationDelivery
     */
    public function setIncludeTerminated($includeTerminated = null)
    {
        $this->IncludeTerminated = $includeTerminated;
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
     * @return \StructType\ReportListConversationDelivery
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
     * @return \StructType\ReportListConversationDelivery
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
