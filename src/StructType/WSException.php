<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSException StructType
 * @subpackage Structs
 */
class WSException extends AbstractStructBase
{
    /**
     * The DateTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $DateTime;
    /**
     * The SoapMethod
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SoapMethod;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * Constructor method for WSException
     * @uses WSException::setDateTime()
     * @uses WSException::setSoapMethod()
     * @uses WSException::setDescription()
     * @param string $dateTime
     * @param string $soapMethod
     * @param string $description
     */
    public function __construct($dateTime = null, $soapMethod = null, $description = null)
    {
        $this
            ->setDateTime($dateTime)
            ->setSoapMethod($soapMethod)
            ->setDescription($description);
    }
    /**
     * Get DateTime value
     * @return string
     */
    public function getDateTime()
    {
        return $this->DateTime;
    }
    /**
     * Set DateTime value
     * @param string $dateTime
     * @return \StructType\WSException
     */
    public function setDateTime($dateTime = null)
    {
        // validation for constraint: string
        if (!is_null($dateTime) && !is_string($dateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateTime)), __LINE__);
        }
        $this->DateTime = $dateTime;
        return $this;
    }
    /**
     * Get SoapMethod value
     * @return string|null
     */
    public function getSoapMethod()
    {
        return $this->SoapMethod;
    }
    /**
     * Set SoapMethod value
     * @param string $soapMethod
     * @return \StructType\WSException
     */
    public function setSoapMethod($soapMethod = null)
    {
        // validation for constraint: string
        if (!is_null($soapMethod) && !is_string($soapMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($soapMethod)), __LINE__);
        }
        $this->SoapMethod = $soapMethod;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\WSException
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSException
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
