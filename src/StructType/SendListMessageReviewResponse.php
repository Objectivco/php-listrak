<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendListMessageReviewResponse StructType
 * @subpackage Structs
 */
class SendListMessageReviewResponse extends AbstractStructBase
{
    /**
     * The SendListMessageReviewResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SendListMessageReviewResult;
    /**
     * Constructor method for SendListMessageReviewResponse
     * @uses SendListMessageReviewResponse::setSendListMessageReviewResult()
     * @param int $sendListMessageReviewResult
     */
    public function __construct($sendListMessageReviewResult = null)
    {
        $this
            ->setSendListMessageReviewResult($sendListMessageReviewResult);
    }
    /**
     * Get SendListMessageReviewResult value
     * @return int
     */
    public function getSendListMessageReviewResult()
    {
        return $this->SendListMessageReviewResult;
    }
    /**
     * Set SendListMessageReviewResult value
     * @param int $sendListMessageReviewResult
     * @return \StructType\SendListMessageReviewResponse
     */
    public function setSendListMessageReviewResult($sendListMessageReviewResult = null)
    {
        // validation for constraint: int
        if (!is_null($sendListMessageReviewResult) && !is_numeric($sendListMessageReviewResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sendListMessageReviewResult)), __LINE__);
        }
        $this->SendListMessageReviewResult = $sendListMessageReviewResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SendListMessageReviewResponse
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
