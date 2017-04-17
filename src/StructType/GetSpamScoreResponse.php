<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSpamScoreResponse StructType
 * @subpackage Structs
 */
class GetSpamScoreResponse extends AbstractStructBase
{
    /**
     * The WSSpamScore
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSSpamScore
     */
    public $WSSpamScore;
    /**
     * Constructor method for GetSpamScoreResponse
     * @uses GetSpamScoreResponse::setWSSpamScore()
     * @param \StructType\WSSpamScore $wSSpamScore
     */
    public function __construct(\StructType\WSSpamScore $wSSpamScore = null)
    {
        $this
            ->setWSSpamScore($wSSpamScore);
    }
    /**
     * Get WSSpamScore value
     * @return \StructType\WSSpamScore
     */
    public function getWSSpamScore()
    {
        return $this->WSSpamScore;
    }
    /**
     * Set WSSpamScore value
     * @param \StructType\WSSpamScore $wSSpamScore
     * @return \StructType\GetSpamScoreResponse
     */
    public function setWSSpamScore(\StructType\WSSpamScore $wSSpamScore = null)
    {
        $this->WSSpamScore = $wSSpamScore;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetSpamScoreResponse
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
