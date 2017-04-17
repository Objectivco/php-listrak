<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Set ServiceType
 * @subpackage Services
 */
class Set extends AbstractSoapClientBase
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
     * Method to call the operation originally named SetContact
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Attempts to subscribe or update a contact to the specified list with profile data and external events.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetContact $parameters
     * @return \StructType\SetContactResponse|bool
     */
    public function SetContact(\StructType\SetContact $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SetContact($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\SetContactResponse
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
