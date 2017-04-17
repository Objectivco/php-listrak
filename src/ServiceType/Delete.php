<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
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
     * DeleteGoogleTrackingDomainsFromList
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Deletes Google Tracking Domains from the specified list.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeleteGoogleTrackingDomainsFromList $parameters
     * @return \StructType\DeleteGoogleTrackingDomainsFromListResponse|bool
     */
    public function DeleteGoogleTrackingDomainsFromList(\StructType\DeleteGoogleTrackingDomainsFromList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->DeleteGoogleTrackingDomainsFromList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteContactList
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Deletes a contact list.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeleteContactList $parameters
     * @return \StructType\DeleteContactListResponse|bool
     */
    public function DeleteContactList(\StructType\DeleteContactList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->DeleteContactList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteProfileHeader
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Deletes a profile header.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeleteProfileHeader $parameters
     * @return \StructType\DeleteProfileHeaderResponse|bool
     */
    public function DeleteProfileHeader(\StructType\DeleteProfileHeader $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->DeleteProfileHeader($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteProfileAttribute
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Deletes a profile attribute.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeleteProfileAttribute $parameters
     * @return \StructType\DeleteProfileAttributeResponse|bool
     */
    public function DeleteProfileAttribute(\StructType\DeleteProfileAttribute $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->DeleteProfileAttribute($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\DeleteContactListResponse|\StructType\DeleteGoogleTrackingDomainsFromListResponse|\StructType\DeleteProfileAttributeResponse|\StructType\DeleteProfileHeaderResponse
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
