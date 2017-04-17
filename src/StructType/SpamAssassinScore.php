<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpamAssassinScore StructType
 * @subpackage Structs
 */
class SpamAssassinScore extends AbstractStructBase
{
    /**
     * The Points
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Points;
    /**
     * The Rule
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Rule;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * Constructor method for SpamAssassinScore
     * @uses SpamAssassinScore::setPoints()
     * @uses SpamAssassinScore::setRule()
     * @uses SpamAssassinScore::setDescription()
     * @param float $points
     * @param string $rule
     * @param string $description
     */
    public function __construct($points = null, $rule = null, $description = null)
    {
        $this
            ->setPoints($points)
            ->setRule($rule)
            ->setDescription($description);
    }
    /**
     * Get Points value
     * @return float
     */
    public function getPoints()
    {
        return $this->Points;
    }
    /**
     * Set Points value
     * @param float $points
     * @return \StructType\SpamAssassinScore
     */
    public function setPoints($points = null)
    {
        $this->Points = $points;
        return $this;
    }
    /**
     * Get Rule value
     * @return string|null
     */
    public function getRule()
    {
        return $this->Rule;
    }
    /**
     * Set Rule value
     * @param string $rule
     * @return \StructType\SpamAssassinScore
     */
    public function setRule($rule = null)
    {
        // validation for constraint: string
        if (!is_null($rule) && !is_string($rule)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rule)), __LINE__);
        }
        $this->Rule = $rule;
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
     * @return \StructType\SpamAssassinScore
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
     * @return \StructType\SpamAssassinScore
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
