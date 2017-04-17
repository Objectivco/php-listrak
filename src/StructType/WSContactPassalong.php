<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSContactPassalong StructType
 * @subpackage Structs
 */
class WSContactPassalong extends AbstractStructBase
{
    /**
     * The PassAlongDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PassAlongDate;
    /**
     * The FromName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FromName;
    /**
     * The FromEmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FromEmailAddress;
    /**
     * The FromContactID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FromContactID;
    /**
     * The ToName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ToName;
    /**
     * The ToEmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ToEmailAddress;
    /**
     * The ToContactID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ToContactID;
    /**
     * Constructor method for WSContactPassalong
     * @uses WSContactPassalong::setPassAlongDate()
     * @uses WSContactPassalong::setFromName()
     * @uses WSContactPassalong::setFromEmailAddress()
     * @uses WSContactPassalong::setFromContactID()
     * @uses WSContactPassalong::setToName()
     * @uses WSContactPassalong::setToEmailAddress()
     * @uses WSContactPassalong::setToContactID()
     * @param string $passAlongDate
     * @param string $fromName
     * @param string $fromEmailAddress
     * @param string $fromContactID
     * @param string $toName
     * @param string $toEmailAddress
     * @param string $toContactID
     */
    public function __construct($passAlongDate = null, $fromName = null, $fromEmailAddress = null, $fromContactID = null, $toName = null, $toEmailAddress = null, $toContactID = null)
    {
        $this
            ->setPassAlongDate($passAlongDate)
            ->setFromName($fromName)
            ->setFromEmailAddress($fromEmailAddress)
            ->setFromContactID($fromContactID)
            ->setToName($toName)
            ->setToEmailAddress($toEmailAddress)
            ->setToContactID($toContactID);
    }
    /**
     * Get PassAlongDate value
     * @return string|null
     */
    public function getPassAlongDate()
    {
        return $this->PassAlongDate;
    }
    /**
     * Set PassAlongDate value
     * @param string $passAlongDate
     * @return \StructType\WSContactPassalong
     */
    public function setPassAlongDate($passAlongDate = null)
    {
        // validation for constraint: string
        if (!is_null($passAlongDate) && !is_string($passAlongDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passAlongDate)), __LINE__);
        }
        $this->PassAlongDate = $passAlongDate;
        return $this;
    }
    /**
     * Get FromName value
     * @return string|null
     */
    public function getFromName()
    {
        return $this->FromName;
    }
    /**
     * Set FromName value
     * @param string $fromName
     * @return \StructType\WSContactPassalong
     */
    public function setFromName($fromName = null)
    {
        // validation for constraint: string
        if (!is_null($fromName) && !is_string($fromName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromName)), __LINE__);
        }
        $this->FromName = $fromName;
        return $this;
    }
    /**
     * Get FromEmailAddress value
     * @return string|null
     */
    public function getFromEmailAddress()
    {
        return $this->FromEmailAddress;
    }
    /**
     * Set FromEmailAddress value
     * @param string $fromEmailAddress
     * @return \StructType\WSContactPassalong
     */
    public function setFromEmailAddress($fromEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($fromEmailAddress) && !is_string($fromEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromEmailAddress)), __LINE__);
        }
        $this->FromEmailAddress = $fromEmailAddress;
        return $this;
    }
    /**
     * Get FromContactID value
     * @return string|null
     */
    public function getFromContactID()
    {
        return $this->FromContactID;
    }
    /**
     * Set FromContactID value
     * @param string $fromContactID
     * @return \StructType\WSContactPassalong
     */
    public function setFromContactID($fromContactID = null)
    {
        // validation for constraint: string
        if (!is_null($fromContactID) && !is_string($fromContactID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromContactID)), __LINE__);
        }
        $this->FromContactID = $fromContactID;
        return $this;
    }
    /**
     * Get ToName value
     * @return string|null
     */
    public function getToName()
    {
        return $this->ToName;
    }
    /**
     * Set ToName value
     * @param string $toName
     * @return \StructType\WSContactPassalong
     */
    public function setToName($toName = null)
    {
        // validation for constraint: string
        if (!is_null($toName) && !is_string($toName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($toName)), __LINE__);
        }
        $this->ToName = $toName;
        return $this;
    }
    /**
     * Get ToEmailAddress value
     * @return string|null
     */
    public function getToEmailAddress()
    {
        return $this->ToEmailAddress;
    }
    /**
     * Set ToEmailAddress value
     * @param string $toEmailAddress
     * @return \StructType\WSContactPassalong
     */
    public function setToEmailAddress($toEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($toEmailAddress) && !is_string($toEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($toEmailAddress)), __LINE__);
        }
        $this->ToEmailAddress = $toEmailAddress;
        return $this;
    }
    /**
     * Get ToContactID value
     * @return string|null
     */
    public function getToContactID()
    {
        return $this->ToContactID;
    }
    /**
     * Set ToContactID value
     * @param string $toContactID
     * @return \StructType\WSContactPassalong
     */
    public function setToContactID($toContactID = null)
    {
        // validation for constraint: string
        if (!is_null($toContactID) && !is_string($toContactID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($toContactID)), __LINE__);
        }
        $this->ToContactID = $toContactID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSContactPassalong
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
