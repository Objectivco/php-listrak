<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteGoogleTrackingDomainsFromList StructType
 * @subpackage Structs
 */
class DeleteGoogleTrackingDomainsFromList extends AbstractStructBase
{
    /**
     * The ListID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ListID;
    /**
     * The GoogleTrackingDomains
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfString
     */
    public $GoogleTrackingDomains;
    /**
     * Constructor method for DeleteGoogleTrackingDomainsFromList
     * @uses DeleteGoogleTrackingDomainsFromList::setListID()
     * @uses DeleteGoogleTrackingDomainsFromList::setGoogleTrackingDomains()
     * @param int $listID
     * @param \ArrayType\ArrayOfString $googleTrackingDomains
     */
    public function __construct($listID = null, \ArrayType\ArrayOfString $googleTrackingDomains = null)
    {
        $this
            ->setListID($listID)
            ->setGoogleTrackingDomains($googleTrackingDomains);
    }
    /**
     * Get ListID value
     * @return int
     */
    public function getListID()
    {
        return $this->ListID;
    }
    /**
     * Set ListID value
     * @param int $listID
     * @return \StructType\DeleteGoogleTrackingDomainsFromList
     */
    public function setListID($listID = null)
    {
        // validation for constraint: int
        if (!is_null($listID) && !is_numeric($listID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($listID)), __LINE__);
        }
        $this->ListID = $listID;
        return $this;
    }
    /**
     * Get GoogleTrackingDomains value
     * @return \ArrayType\ArrayOfString|null
     */
    public function getGoogleTrackingDomains()
    {
        return $this->GoogleTrackingDomains;
    }
    /**
     * Set GoogleTrackingDomains value
     * @param \ArrayType\ArrayOfString $googleTrackingDomains
     * @return \StructType\DeleteGoogleTrackingDomainsFromList
     */
    public function setGoogleTrackingDomains(\ArrayType\ArrayOfString $googleTrackingDomains = null)
    {
        $this->GoogleTrackingDomains = $googleTrackingDomains;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DeleteGoogleTrackingDomainsFromList
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
