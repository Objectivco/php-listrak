<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddGoogleTrackingDomainsToListResponse StructType
 * @subpackage Structs
 */
class AddGoogleTrackingDomainsToListResponse extends AbstractStructBase
{
    /**
     * The AddGoogleTrackingDomainsToListResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $AddGoogleTrackingDomainsToListResult;
    /**
     * Constructor method for AddGoogleTrackingDomainsToListResponse
     * @uses AddGoogleTrackingDomainsToListResponse::setAddGoogleTrackingDomainsToListResult()
     * @param bool $addGoogleTrackingDomainsToListResult
     */
    public function __construct($addGoogleTrackingDomainsToListResult = null)
    {
        $this
            ->setAddGoogleTrackingDomainsToListResult($addGoogleTrackingDomainsToListResult);
    }
    /**
     * Get AddGoogleTrackingDomainsToListResult value
     * @return bool
     */
    public function getAddGoogleTrackingDomainsToListResult()
    {
        return $this->AddGoogleTrackingDomainsToListResult;
    }
    /**
     * Set AddGoogleTrackingDomainsToListResult value
     * @param bool $addGoogleTrackingDomainsToListResult
     * @return \StructType\AddGoogleTrackingDomainsToListResponse
     */
    public function setAddGoogleTrackingDomainsToListResult($addGoogleTrackingDomainsToListResult = null)
    {
        $this->AddGoogleTrackingDomainsToListResult = $addGoogleTrackingDomainsToListResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AddGoogleTrackingDomainsToListResponse
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
