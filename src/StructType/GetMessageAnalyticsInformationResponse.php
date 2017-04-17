<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMessageAnalyticsInformationResponse StructType
 * @subpackage Structs
 */
class GetMessageAnalyticsInformationResponse extends AbstractStructBase
{
    /**
     * The GetMessageAnalyticsInformationResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSMessageAnalyticsInformation
     */
    public $GetMessageAnalyticsInformationResult;
    /**
     * Constructor method for GetMessageAnalyticsInformationResponse
     * @uses GetMessageAnalyticsInformationResponse::setGetMessageAnalyticsInformationResult()
     * @param \ArrayType\ArrayOfWSMessageAnalyticsInformation $getMessageAnalyticsInformationResult
     */
    public function __construct(\ArrayType\ArrayOfWSMessageAnalyticsInformation $getMessageAnalyticsInformationResult = null)
    {
        $this
            ->setGetMessageAnalyticsInformationResult($getMessageAnalyticsInformationResult);
    }
    /**
     * Get GetMessageAnalyticsInformationResult value
     * @return \ArrayType\ArrayOfWSMessageAnalyticsInformation|null
     */
    public function getGetMessageAnalyticsInformationResult()
    {
        return $this->GetMessageAnalyticsInformationResult;
    }
    /**
     * Set GetMessageAnalyticsInformationResult value
     * @param \ArrayType\ArrayOfWSMessageAnalyticsInformation $getMessageAnalyticsInformationResult
     * @return \StructType\GetMessageAnalyticsInformationResponse
     */
    public function setGetMessageAnalyticsInformationResult(\ArrayType\ArrayOfWSMessageAnalyticsInformation $getMessageAnalyticsInformationResult = null)
    {
        $this->GetMessageAnalyticsInformationResult = $getMessageAnalyticsInformationResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetMessageAnalyticsInformationResponse
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
