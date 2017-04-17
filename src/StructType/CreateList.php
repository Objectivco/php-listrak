<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateList StructType
 * @subpackage Structs
 */
class CreateList extends AbstractStructBase
{
    /**
     * The WSList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSList
     */
    public $WSList;
    /**
     * The WSException
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSException
     */
    public $WSException;
    /**
     * Constructor method for CreateList
     * @uses CreateList::setWSList()
     * @uses CreateList::setWSException()
     * @param \StructType\WSList $wSList
     * @param \StructType\WSException $wSException
     */
    public function __construct(\StructType\WSList $wSList = null, \StructType\WSException $wSException = null)
    {
        $this
            ->setWSList($wSList)
            ->setWSException($wSException);
    }
    /**
     * Get WSList value
     * @return \StructType\WSList
     */
    public function getWSList()
    {
        return $this->WSList;
    }
    /**
     * Set WSList value
     * @param \StructType\WSList $wSList
     * @return \StructType\CreateList
     */
    public function setWSList(\StructType\WSList $wSList = null)
    {
        $this->WSList = $wSList;
        return $this;
    }
    /**
     * Get WSException value
     * @return \StructType\WSException
     */
    public function getWSException()
    {
        return $this->WSException;
    }
    /**
     * Set WSException value
     * @param \StructType\WSException $wSException
     * @return \StructType\CreateList
     */
    public function setWSException(\StructType\WSException $wSException = null)
    {
        $this->WSException = $wSException;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CreateList
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
