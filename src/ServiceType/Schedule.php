<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Schedule ServiceType
 * @subpackage Services
 */
class Schedule extends AbstractSoapClientBase
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
     * Method to call the operation originally named ScheduleSendListMessage
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Schedules the supplied message to be sent at a future time to the entire list and returns a newly assigned MsgID for this send request. All dates and times are relative to the EST time zone.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ScheduleSendListMessage $parameters
     * @return \StructType\ScheduleSendListMessageResponse|bool
     */
    public function ScheduleSendListMessage(\StructType\ScheduleSendListMessage $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ScheduleSendListMessage($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * ScheduleSendListMessageWithProfileFilter
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Schedules the supplied message to be sent at a future time and returns a newly assigned MsgID for this send request. All dates and times are relative to the EST time zone.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ScheduleSendListMessageWithProfileFilter $parameters
     * @return \StructType\ScheduleSendListMessageWithProfileFilterResponse|bool
     */
    public function ScheduleSendListMessageWithProfileFilter(\StructType\ScheduleSendListMessageWithProfileFilter $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ScheduleSendListMessageWithProfileFilter($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ScheduleSendListMessageResponse|\StructType\ScheduleSendListMessageWithProfileFilterResponse
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
