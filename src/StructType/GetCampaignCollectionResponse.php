<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCampaignCollectionResponse StructType
 * @subpackage Structs
 */
class GetCampaignCollectionResponse extends AbstractStructBase
{
    /**
     * The GetCampaignCollectionResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWSCampaign
     */
    public $GetCampaignCollectionResult;
    /**
     * Constructor method for GetCampaignCollectionResponse
     * @uses GetCampaignCollectionResponse::setGetCampaignCollectionResult()
     * @param \ArrayType\ArrayOfWSCampaign $getCampaignCollectionResult
     */
    public function __construct(\ArrayType\ArrayOfWSCampaign $getCampaignCollectionResult = null)
    {
        $this
            ->setGetCampaignCollectionResult($getCampaignCollectionResult);
    }
    /**
     * Get GetCampaignCollectionResult value
     * @return \ArrayType\ArrayOfWSCampaign|null
     */
    public function getGetCampaignCollectionResult()
    {
        return $this->GetCampaignCollectionResult;
    }
    /**
     * Set GetCampaignCollectionResult value
     * @param \ArrayType\ArrayOfWSCampaign $getCampaignCollectionResult
     * @return \StructType\GetCampaignCollectionResponse
     */
    public function setGetCampaignCollectionResult(\ArrayType\ArrayOfWSCampaign $getCampaignCollectionResult = null)
    {
        $this->GetCampaignCollectionResult = $getCampaignCollectionResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetCampaignCollectionResponse
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
