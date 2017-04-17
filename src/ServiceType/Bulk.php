<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Bulk ServiceType
 * @subpackage Services
 */
class Bulk extends AbstractSoapClientBase
{
    /**
     * Sets the WSUser SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \StructType\WSUser $wSUser
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderWSUser(\StructType\WSUser $wSUser, $nameSpace = 'http://webservices.listrak.com/v31/', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'WSUser', $wSUser, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named BulkLoadContacts
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Facilitates loading contact data via a import file stream to the specified list.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\BulkLoadContacts $parameters
     * @return \StructType\BulkLoadContactsResponse|bool
     */
    public function BulkLoadContacts(\StructType\BulkLoadContacts $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->BulkLoadContacts($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named BulkLoadContactsWithOptions
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Facilitates loading contact data via a import file stream to the specified list with configurable options.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\BulkLoadContactsWithOptions $parameters
     * @return \StructType\BulkLoadContactsWithOptionsResponse|bool
     */
    public function BulkLoadContactsWithOptions(\StructType\BulkLoadContactsWithOptions $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->BulkLoadContactsWithOptions($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\BulkLoadContactsResponse|\StructType\BulkLoadContactsWithOptionsResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
