<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSSpamScore StructType
 * @subpackage Structs
 */
class WSSpamScore extends AbstractStructBase
{
    /**
     * The PointsReceived
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $PointsReceived;
    /**
     * The PointsRequired
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $PointsRequired;
    /**
     * The Scores
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\SpamAssassinScore[]
     */
    public $Scores;
    /**
     * Constructor method for WSSpamScore
     * @uses WSSpamScore::setPointsReceived()
     * @uses WSSpamScore::setPointsRequired()
     * @uses WSSpamScore::setScores()
     * @param float $pointsReceived
     * @param float $pointsRequired
     * @param \StructType\SpamAssassinScore[] $scores
     */
    public function __construct($pointsReceived = null, $pointsRequired = null, array $scores = array())
    {
        $this
            ->setPointsReceived($pointsReceived)
            ->setPointsRequired($pointsRequired)
            ->setScores($scores);
    }
    /**
     * Get PointsReceived value
     * @return float
     */
    public function getPointsReceived()
    {
        return $this->PointsReceived;
    }
    /**
     * Set PointsReceived value
     * @param float $pointsReceived
     * @return \StructType\WSSpamScore
     */
    public function setPointsReceived($pointsReceived = null)
    {
        $this->PointsReceived = $pointsReceived;
        return $this;
    }
    /**
     * Get PointsRequired value
     * @return float
     */
    public function getPointsRequired()
    {
        return $this->PointsRequired;
    }
    /**
     * Set PointsRequired value
     * @param float $pointsRequired
     * @return \StructType\WSSpamScore
     */
    public function setPointsRequired($pointsRequired = null)
    {
        $this->PointsRequired = $pointsRequired;
        return $this;
    }
    /**
     * Get Scores value
     * @return \StructType\SpamAssassinScore[]|null
     */
    public function getScores()
    {
        return $this->Scores;
    }
    /**
     * Set Scores value
     * @throws \InvalidArgumentException
     * @param \StructType\SpamAssassinScore[] $scores
     * @return \StructType\WSSpamScore
     */
    public function setScores(array $scores = array())
    {
        foreach ($scores as $wSSpamScoreScoresItem) {
            // validation for constraint: itemType
            if (!$wSSpamScoreScoresItem instanceof \StructType\SpamAssassinScore) {
                throw new \InvalidArgumentException(sprintf('The Scores property can only contain items of \StructType\SpamAssassinScore, "%s" given', is_object($wSSpamScoreScoresItem) ? get_class($wSSpamScoreScoresItem) : gettype($wSSpamScoreScoresItem)), __LINE__);
            }
        }
        $this->Scores = $scores;
        return $this;
    }
    /**
     * Add item to Scores value
     * @throws \InvalidArgumentException
     * @param \StructType\SpamAssassinScore $item
     * @return \StructType\WSSpamScore
     */
    public function addToScores(\StructType\SpamAssassinScore $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SpamAssassinScore) {
            throw new \InvalidArgumentException(sprintf('The Scores property can only contain items of \StructType\SpamAssassinScore, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Scores[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WSSpamScore
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
