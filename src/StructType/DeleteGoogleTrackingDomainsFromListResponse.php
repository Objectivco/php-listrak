<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteGoogleTrackingDomainsFromListResponse StructType
 * @subpackage Structs
 */
class DeleteGoogleTrackingDomainsFromListResponse extends AbstractStructBase
{
    /**
     * The DeleteGoogleTrackingDomainsFromListResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $DeleteGoogleTrackingDomainsFromListResult;
    /**
     * Constructor method for DeleteGoogleTrackingDomainsFromListResponse
     * @uses DeleteGoogleTrackingDomainsFromListResponse::setDeleteGoogleTrackingDomainsFromListResult()
     * @param bool $deleteGoogleTrackingDomainsFromListResult
     */
    public function __construct($deleteGoogleTrackingDomainsFromListResult = null)
    {
        $this
            ->setDeleteGoogleTrackingDomainsFromListResult($deleteGoogleTrackingDomainsFromListResult);
    }
    /**
     * Get DeleteGoogleTrackingDomainsFromListResult value
     * @return bool
     */
    public function getDeleteGoogleTrackingDomainsFromListResult()
    {
        return $this->DeleteGoogleTrackingDomainsFromListResult;
    }
    /**
     * Set DeleteGoogleTrackingDomainsFromListResult value
     * @param bool $deleteGoogleTrackingDomainsFromListResult
     * @return \StructType\DeleteGoogleTrackingDomainsFromListResponse
     */
    public function setDeleteGoogleTrackingDomainsFromListResult($deleteGoogleTrackingDomainsFromListResult = null)
    {
        $this->DeleteGoogleTrackingDomainsFromListResult = $deleteGoogleTrackingDomainsFromListResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DeleteGoogleTrackingDomainsFromListResponse
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
