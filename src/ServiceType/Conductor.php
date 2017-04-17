<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Conductor ServiceType
 * @subpackage Services
 */
class Conductor extends AbstractSoapClientBase
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
     * Method to call the operation originally named
     * ConductorBulkLoadAndTriggerContacts
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Facilitates loading contact data via a import file stream to the specified list and triggering a event for each contact.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ConductorBulkLoadAndTriggerContacts $parameters
     * @return \StructType\ConductorBulkLoadAndTriggerContactsResponse|bool
     */
    public function ConductorBulkLoadAndTriggerContacts(\StructType\ConductorBulkLoadAndTriggerContacts $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ConductorBulkLoadAndTriggerContacts($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * ConductorBulkLoadAndTriggerContactsWithOptions
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
     * @param \StructType\ConductorBulkLoadAndTriggerContactsWithOptions $parameters
     * @return \StructType\ConductorBulkLoadAndTriggerContactsWithOptionsResponse|bool
     */
    public function ConductorBulkLoadAndTriggerContactsWithOptions(\StructType\ConductorBulkLoadAndTriggerContactsWithOptions $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ConductorBulkLoadAndTriggerContactsWithOptions($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ConductorGetExternalEvents
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Returns a collection of External Events defined for a list.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ConductorGetExternalEvents $parameters
     * @return \StructType\ConductorGetExternalEventsResponse|bool
     */
    public function ConductorGetExternalEvents(\StructType\ConductorGetExternalEvents $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ConductorGetExternalEvents($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ConductorGetConversations
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Returns a collection of conversations defined for a list.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ConductorGetConversations $parameters
     * @return \StructType\ConductorGetConversationsResponse|bool
     */
    public function ConductorGetConversations(\StructType\ConductorGetConversations $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ConductorGetConversations($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ConductorBulkLoadAndTriggerContactsResponse|\StructType\ConductorBulkLoadAndTriggerContactsWithOptionsResponse|\StructType\ConductorGetConversationsResponse|\StructType\ConductorGetExternalEventsResponse
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
