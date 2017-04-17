<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Report ServiceType
 * @subpackage Services
 */
class Report extends AbstractSoapClientBase
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
     * Method to call the operation originally named ReportSubscribedContacts
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of contacts who are currently subscribed to the specified list.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportSubscribedContacts $parameters
     * @return \StructType\ReportSubscribedContactsResponse|bool
     */
    public function ReportSubscribedContacts(\StructType\ReportSubscribedContacts $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportSubscribedContacts($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportRangeSubscribedContacts
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of contacts who are currently subscribed to the specified list within the specified date range.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportRangeSubscribedContacts $parameters
     * @return \StructType\ReportRangeSubscribedContactsResponse|bool
     */
    public function ReportRangeSubscribedContacts(\StructType\ReportRangeSubscribedContacts $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportRangeSubscribedContacts($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportAdminContactFeedbackLoop
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of feedback loop listings for the specified date range. This report spans all lists that the API user can access.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportAdminContactFeedbackLoop $parameters
     * @return \StructType\ReportAdminContactFeedbackLoopResponse|bool
     */
    public function ReportAdminContactFeedbackLoop(\StructType\ReportAdminContactFeedbackLoop $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportAdminContactFeedbackLoop($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportMessageContactSent
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of contacts who were sent the specified message.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportMessageContactSent $parameters
     * @return \StructType\ReportMessageContactSentResponse|bool
     */
    public function ReportMessageContactSent(\StructType\ReportMessageContactSent $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportMessageContactSent($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportMessageContactOpen
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of contact opens for a message.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportMessageContactOpen $parameters
     * @return \StructType\ReportMessageContactOpenResponse|bool
     */
    public function ReportMessageContactOpen(\StructType\ReportMessageContactOpen $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportMessageContactOpen($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportRangeMessageContactOpen
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of contact opens for a message within the specified date range.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportRangeMessageContactOpen $parameters
     * @return \StructType\ReportRangeMessageContactOpenResponse|bool
     */
    public function ReportRangeMessageContactOpen(\StructType\ReportRangeMessageContactOpen $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportRangeMessageContactOpen($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportMessageContactRead
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of contact reads for a message.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportMessageContactRead $parameters
     * @return \StructType\ReportMessageContactReadResponse|bool
     */
    public function ReportMessageContactRead(\StructType\ReportMessageContactRead $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportMessageContactRead($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportRangeMessageContactRead
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of contact reads for a message within the specified date range.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportRangeMessageContactRead $parameters
     * @return \StructType\ReportRangeMessageContactReadResponse|bool
     */
    public function ReportRangeMessageContactRead(\StructType\ReportRangeMessageContactRead $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportRangeMessageContactRead($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportMessageContactClick
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of contact clicks for a message.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportMessageContactClick $parameters
     * @return \StructType\ReportMessageContactClickResponse|bool
     */
    public function ReportMessageContactClick(\StructType\ReportMessageContactClick $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportMessageContactClick($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportRangeMessageContactClick
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of contact clicks for a message within the specified date range.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportRangeMessageContactClick $parameters
     * @return \StructType\ReportRangeMessageContactClickResponse|bool
     */
    public function ReportRangeMessageContactClick(\StructType\ReportRangeMessageContactClick $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportRangeMessageContactClick($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportMessageContactPassalong
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of contact passalongs for a message.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportMessageContactPassalong $parameters
     * @return \StructType\ReportMessageContactPassalongResponse|bool
     */
    public function ReportMessageContactPassalong(\StructType\ReportMessageContactPassalong $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportMessageContactPassalong($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportRangeMessageContactPassalong
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of contact passalongs for a message within the specified date range.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportRangeMessageContactPassalong $parameters
     * @return \StructType\ReportRangeMessageContactPassalongResponse|bool
     */
    public function ReportRangeMessageContactPassalong(\StructType\ReportRangeMessageContactPassalong $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportRangeMessageContactPassalong($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportMessageContactBounces
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of contact bounces for a message.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportMessageContactBounces $parameters
     * @return \StructType\ReportMessageContactBouncesResponse|bool
     */
    public function ReportMessageContactBounces(\StructType\ReportMessageContactBounces $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportMessageContactBounces($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportRangeMessageContactBounces
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of contact bounces for a message within the specified date range.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportRangeMessageContactBounces $parameters
     * @return \StructType\ReportRangeMessageContactBouncesResponse|bool
     */
    public function ReportRangeMessageContactBounces(\StructType\ReportRangeMessageContactBounces $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportRangeMessageContactBounces($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportListMessageActivity
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of message statistics for a message sent to a list.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportListMessageActivity $parameters
     * @return \StructType\ReportListMessageActivityResponse|bool
     */
    public function ReportListMessageActivity(\StructType\ReportListMessageActivity $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportListMessageActivity($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportListMessageDelivery
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of message statistics for a message sent to a list.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportListMessageDelivery $parameters
     * @return \StructType\ReportListMessageDeliveryResponse|bool
     */
    public function ReportListMessageDelivery(\StructType\ReportListMessageDelivery $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportListMessageDelivery($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportListContactRemoval
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of all contacts whom requested to be removed from the supplied list.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportListContactRemoval $parameters
     * @return \StructType\ReportListContactRemovalResponse|bool
     */
    public function ReportListContactRemoval(\StructType\ReportListContactRemoval $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportListContactRemoval($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportRangeListContactRemoval
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of all contacts whom requested to be removed from the supplied list within the specified date range.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportRangeListContactRemoval $parameters
     * @return \StructType\ReportRangeListContactRemovalResponse|bool
     */
    public function ReportRangeListContactRemoval(\StructType\ReportRangeListContactRemoval $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportRangeListContactRemoval($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportListContactHygiene
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of all contacts whose addresses have been changed by list hygiene.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportListContactHygiene $parameters
     * @return \StructType\ReportListContactHygieneResponse|bool
     */
    public function ReportListContactHygiene(\StructType\ReportListContactHygiene $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportListContactHygiene($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportRangeListContactHygiene
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of all contacts whose addresses have been changed by list hygiene within the specified date range.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportRangeListContactHygiene $parameters
     * @return \StructType\ReportRangeListContactHygieneResponse|bool
     */
    public function ReportRangeListContactHygiene(\StructType\ReportRangeListContactHygiene $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportRangeListContactHygiene($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportMessageLinkClick
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of click statistics for links contained within a message.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportMessageLinkClick $parameters
     * @return \StructType\ReportMessageLinkClickResponse|bool
     */
    public function ReportMessageLinkClick(\StructType\ReportMessageLinkClick $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportMessageLinkClick($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportContactLinkClick
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of contacts and their click history for a link.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportContactLinkClick $parameters
     * @return \StructType\ReportContactLinkClickResponse|bool
     */
    public function ReportContactLinkClick(\StructType\ReportContactLinkClick $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportContactLinkClick($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportMessageLocationClick
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of geographical click location statistics for links contained within a message.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportMessageLocationClick $parameters
     * @return \StructType\ReportMessageLocationClickResponse|bool
     */
    public function ReportMessageLocationClick(\StructType\ReportMessageLocationClick $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportMessageLocationClick($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportMessageLocationOpen
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of geographical message open locations and statistics for a message.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportMessageLocationOpen $parameters
     * @return \StructType\ReportMessageLocationOpenResponse|bool
     */
    public function ReportMessageLocationOpen(\StructType\ReportMessageLocationOpen $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportMessageLocationOpen($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportMessageLocationRead
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of geographical message read locations and statistics for a message.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportMessageLocationRead $parameters
     * @return \StructType\ReportMessageLocationReadResponse|bool
     */
    public function ReportMessageLocationRead(\StructType\ReportMessageLocationRead $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportMessageLocationRead($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportMessageLocationContactClick
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of contacts who clicked within the supplied message and geographical location.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportMessageLocationContactClick $parameters
     * @return \StructType\ReportMessageLocationContactClickResponse|bool
     */
    public function ReportMessageLocationContactClick(\StructType\ReportMessageLocationContactClick $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportMessageLocationContactClick($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportMessageLocationContactOpen
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of contacts who opened the supplied message in the defined geographical location.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportMessageLocationContactOpen $parameters
     * @return \StructType\ReportMessageLocationContactOpenResponse|bool
     */
    public function ReportMessageLocationContactOpen(\StructType\ReportMessageLocationContactOpen $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportMessageLocationContactOpen($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportMessageLocationContactRead
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of contacts who read the supplied message in the defined geographical location.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportMessageLocationContactRead $parameters
     * @return \StructType\ReportMessageLocationContactReadResponse|bool
     */
    public function ReportMessageLocationContactRead(\StructType\ReportMessageLocationContactRead $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportMessageLocationContactRead($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportMessageContactActivity
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: [Deprecated] Retrieves a collection of contacts and their open, read and click statistics for the supplied message.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportMessageContactActivity $parameters
     * @return \StructType\ReportMessageContactActivityResponse|bool
     */
    public function ReportMessageContactActivity(\StructType\ReportMessageContactActivity $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportMessageContactActivity($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportRangeMessageContactRemoval
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of contacts whom requested to be removed from a list from the supplied message within the specified date range.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportRangeMessageContactRemoval $parameters
     * @return \StructType\ReportRangeMessageContactRemovalResponse|bool
     */
    public function ReportRangeMessageContactRemoval(\StructType\ReportRangeMessageContactRemoval $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportRangeMessageContactRemoval($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportMessageContactRemoval
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of contacts whom requested to be removed from a list from the supplied message.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportMessageContactRemoval $parameters
     * @return \StructType\ReportMessageContactRemovalResponse|bool
     */
    public function ReportMessageContactRemoval(\StructType\ReportMessageContactRemoval $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportMessageContactRemoval($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportContactMessageActivity
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a contact's message activity history for the define list.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportContactMessageActivity $parameters
     * @return \StructType\ReportContactMessageActivityResponse|bool
     */
    public function ReportContactMessageActivity(\StructType\ReportContactMessageActivity $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportContactMessageActivity($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportListImportHistory
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of import results for the specified list and date range.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportListImportHistory $parameters
     * @return \StructType\ReportListImportHistoryResponse|bool
     */
    public function ReportListImportHistory(\StructType\ReportListImportHistory $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportListImportHistory($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportImportContactDetail
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of import contacts for the specified import file.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportImportContactDetail $parameters
     * @return \StructType\ReportImportContactDetailResponse|bool
     */
    public function ReportImportContactDetail(\StructType\ReportImportContactDetail $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportImportContactDetail($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportListConversationActivity
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of conversation statistics for conversations active within a list.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportListConversationActivity $parameters
     * @return \StructType\ReportListConversationActivityResponse|bool
     */
    public function ReportListConversationActivity(\StructType\ReportListConversationActivity $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportListConversationActivity($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportListConversationDelivery
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of conversation statistics for conversations delivery info within a list.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportListConversationDelivery $parameters
     * @return \StructType\ReportListConversationDeliveryResponse|bool
     */
    public function ReportListConversationDelivery(\StructType\ReportListConversationDelivery $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportListConversationDelivery($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportConversationContactDelivery
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of conversation statistics for contacts who were sent messages by the specified conversation.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportConversationContactDelivery $parameters
     * @return \StructType\ReportConversationContactDeliveryResponse|bool
     */
    public function ReportConversationContactDelivery(\StructType\ReportConversationContactDelivery $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportConversationContactDelivery($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportConversationContactRemoval
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of conversation statistics for contacts who were removed during a specified conversation.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportConversationContactRemoval $parameters
     * @return \StructType\ReportConversationContactRemovalResponse|bool
     */
    public function ReportConversationContactRemoval(\StructType\ReportConversationContactRemoval $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportConversationContactRemoval($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportConversationContactOpen
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of conversation statistics for contacts who opened a message sent during a specified conversation.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportConversationContactOpen $parameters
     * @return \StructType\ReportConversationContactOpenResponse|bool
     */
    public function ReportConversationContactOpen(\StructType\ReportConversationContactOpen $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportConversationContactOpen($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportConversationContactRead
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of conversation statistics for contacts who read a message sent during a specified conversation.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportConversationContactRead $parameters
     * @return \StructType\ReportConversationContactReadResponse|bool
     */
    public function ReportConversationContactRead(\StructType\ReportConversationContactRead $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportConversationContactRead($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportConversationLinkClick
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of conversation statistics for contacts who clicked a link found in a message sent during a specified conversation.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportConversationLinkClick $parameters
     * @return \StructType\ReportConversationLinkClickResponse|bool
     */
    public function ReportConversationLinkClick(\StructType\ReportConversationLinkClick $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportConversationLinkClick($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReportConversationContactBounce
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of conversation statistics for contacts bounced from a message sent during a specified conversation.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportConversationContactBounce $parameters
     * @return \StructType\ReportConversationContactBounceResponse|bool
     */
    public function ReportConversationContactBounce(\StructType\ReportConversationContactBounce $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportConversationContactBounce($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * ReportConversationLocationContactOpen
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of geological statistics for contacts who opened a message sent during a specified conversation.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportConversationLocationContactOpen $parameters
     * @return \StructType\ReportConversationLocationContactOpenResponse|bool
     */
    public function ReportConversationLocationContactOpen(\StructType\ReportConversationLocationContactOpen $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportConversationLocationContactOpen($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * ReportConversationLocationContactRead
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of geological statistics for contacts who read a message sent during a specified conversation.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportConversationLocationContactRead $parameters
     * @return \StructType\ReportConversationLocationContactReadResponse|bool
     */
    public function ReportConversationLocationContactRead(\StructType\ReportConversationLocationContactRead $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportConversationLocationContactRead($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * ReportConversationLocationContactClick
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of geological statistics for contacts who clicked on a link found in a message sent during a specified conversation.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportConversationLocationContactClick $parameters
     * @return \StructType\ReportConversationLocationContactClickResponse|bool
     */
    public function ReportConversationLocationContactClick(\StructType\ReportConversationLocationContactClick $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ReportConversationLocationContactClick($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ReportAdminContactFeedbackLoopResponse|\StructType\ReportContactLinkClickResponse|\StructType\ReportContactMessageActivityResponse|\StructType\ReportConversationContactBounceResponse|\StructType\ReportConversationContactDeliveryResponse|\StructType\ReportConversationContactOpenResponse|\StructType\ReportConversationContactReadResponse|\StructType\ReportConversationContactRemovalResponse|\StructType\ReportConversationLinkClickResponse|\StructType\ReportConversationLocationContactClickResponse|\StructType\ReportConversationLocationContactOpenResponse|\StructType\ReportConversationLocationContactReadResponse|\StructType\ReportImportContactDetailResponse|\StructType\ReportListContactHygieneResponse|\StructType\ReportListContactRemovalResponse|\StructType\ReportListConversationActivityResponse|\StructType\ReportListConversationDeliveryResponse|\StructType\ReportListImportHistoryResponse|\StructType\ReportListMessageActivityResponse|\StructType\ReportListMessageDeliveryResponse|\StructType\ReportMessageContactActivityResponse|\StructType\ReportMessageContactBouncesResponse|\StructType\ReportMessageContactClickResponse|\StructType\ReportMessageContactOpenResponse|\StructType\ReportMessageContactPassalongResponse|\StructType\ReportMessageContactReadResponse|\StructType\ReportMessageContactRemovalResponse|\StructType\ReportMessageContactSentResponse|\StructType\ReportMessageLinkClickResponse|\StructType\ReportMessageLocationClickResponse|\StructType\ReportMessageLocationContactClickResponse|\StructType\ReportMessageLocationContactOpenResponse|\StructType\ReportMessageLocationContactReadResponse|\StructType\ReportMessageLocationOpenResponse|\StructType\ReportMessageLocationReadResponse|\StructType\ReportRangeListContactHygieneResponse|\StructType\ReportRangeListContactRemovalResponse|\StructType\ReportRangeMessageContactBouncesResponse|\StructType\ReportRangeMessageContactClickResponse|\StructType\ReportRangeMessageContactOpenResponse|\StructType\ReportRangeMessageContactPassalongResponse|\StructType\ReportRangeMessageContactReadResponse|\StructType\ReportRangeMessageContactRemovalResponse|\StructType\ReportRangeSubscribedContactsResponse|\StructType\ReportSubscribedContactsResponse
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
