<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
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
     * Method to call the operation originally named GetProcessStatus
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Provides status information for asynchronous processes such as imports and dynamic profile updates that maybe running against a account.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetProcessStatus $parameters
     * @return \StructType\GetProcessStatusResponse|bool
     */
    public function GetProcessStatus(\StructType\GetProcessStatus $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetProcessStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMessageStatus
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Provides message status for deployments that maybe running against a account.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMessageStatus $parameters
     * @return \StructType\GetMessageStatusResponse|bool
     */
    public function GetMessageStatus(\StructType\GetMessageStatus $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetMessageStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetLegacyProcessStatus
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: [Deprecated: Please use GetProcessStatus.] Provides status information for asynchronous legacy processes such as the XML over HTTP "Send to List" and "Send to File" calls.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLegacyProcessStatus $parameters
     * @return \StructType\GetLegacyProcessStatusResponse|bool
     */
    public function GetLegacyProcessStatus(\StructType\GetLegacyProcessStatus $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetLegacyProcessStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAccountVmtaCollection
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of TCP/IP Pools that are assigned to a account.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAccountVmtaCollection $parameters
     * @return \StructType\GetAccountVmtaCollectionResponse|bool
     */
    public function GetAccountVmtaCollection(\StructType\GetAccountVmtaCollection $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetAccountVmtaCollection($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetContactList
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves the list settings for a standard contact list.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetContactList $parameters
     * @return \StructType\GetContactListResponse|bool
     */
    public function GetContactList(\StructType\GetContactList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetContactList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetContactListCollection
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of lists assigned to the user executing the request.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetContactListCollection $parameters
     * @return \StructType\GetContactListCollectionResponse|bool
     */
    public function GetContactListCollection(\StructType\GetContactListCollection $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetContactListCollection($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetProfileHeaderCollection
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of a list's profile headers.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetProfileHeaderCollection $parameters
     * @return \StructType\GetProfileHeaderCollectionResponse|bool
     */
    public function GetProfileHeaderCollection(\StructType\GetProfileHeaderCollection $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetProfileHeaderCollection($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetContact
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Returns a contact and corresponding profile information.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetContact $parameters
     * @return \StructType\GetContactResponse|bool
     */
    public function GetContact(\StructType\GetContact $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetContact($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetContactByEmailKey
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Returns a contact and corresponding profile information.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetContactByEmailKey $parameters
     * @return \StructType\GetContactByEmailKeyResponse|bool
     */
    public function GetContactByEmailKey(\StructType\GetContactByEmailKey $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetContactByEmailKey($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTransactionalMessageCollection
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of transactional messages for the specified list.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTransactionalMessageCollection $parameters
     * @return \StructType\GetTransactionalMessageCollectionResponse|bool
     */
    public function GetTransactionalMessageCollection(\StructType\GetTransactionalMessageCollection $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetTransactionalMessageCollection($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMessageAnalyticsInformation
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Provides message analytics information for messages that have been sent. This method has a limit of 2,500 messages per call as of 4/5/2016.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMessageAnalyticsInformation $parameters
     * @return \StructType\GetMessageAnalyticsInformationResponse|bool
     */
    public function GetMessageAnalyticsInformation(\StructType\GetMessageAnalyticsInformation $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetMessageAnalyticsInformation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSpamScore
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Provides SPAM Score information for a message and contact.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSpamScore $parameters
     * @return \StructType\GetSpamScoreResponse|bool
     */
    public function GetSpamScore(\StructType\GetSpamScore $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetSpamScore($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCampaignCollection
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of campaigns that are define for the supplied list.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCampaignCollection $parameters
     * @return \StructType\GetCampaignCollectionResponse|bool
     */
    public function GetCampaignCollection(\StructType\GetCampaignCollection $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetCampaignCollection($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCharacterSetCollection
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Retrieves a collection of character sets that are supported by Listrak.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCharacterSetCollection $parameters
     * @return \StructType\GetCharacterSetCollectionResponse|bool
     */
    public function GetCharacterSetCollection(\StructType\GetCharacterSetCollection $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetCharacterSetCollection($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSavedMessageCollection
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Returns a collection of saved messages found within the supplied list.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSavedMessageCollection $parameters
     * @return \StructType\GetSavedMessageCollectionResponse|bool
     */
    public function GetSavedMessageCollection(\StructType\GetSavedMessageCollection $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetSavedMessageCollection($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFilteredListCount
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Returns the number of contacts that match the supplied filter and list identifier.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetFilteredListCount $parameters
     * @return \StructType\GetFilteredListCountResponse|bool
     */
    public function GetFilteredListCount(\StructType\GetFilteredListCount $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetFilteredListCount($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSystemIDFromPublicID
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: WSUser
     * - SOAPHeaderNamespaces: http://webservices.listrak.com/v31/
     * - SOAPHeaderTypes: \StructType\WSUser
     * - SOAPHeaders: required
     * - documentation: Reverses public-facing ID values to integer-based ID values.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSystemIDFromPublicID $parameters
     * @return \StructType\GetSystemIDFromPublicIDResponse|bool
     */
    public function GetSystemIDFromPublicID(\StructType\GetSystemIDFromPublicID $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetSystemIDFromPublicID($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\GetAccountVmtaCollectionResponse|\StructType\GetCampaignCollectionResponse|\StructType\GetCharacterSetCollectionResponse|\StructType\GetContactByEmailKeyResponse|\StructType\GetContactListCollectionResponse|\StructType\GetContactListResponse|\StructType\GetContactResponse|\StructType\GetFilteredListCountResponse|\StructType\GetLegacyProcessStatusResponse|\StructType\GetMessageAnalyticsInformationResponse|\StructType\GetMessageStatusResponse|\StructType\GetProcessStatusResponse|\StructType\GetProfileHeaderCollectionResponse|\StructType\GetSavedMessageCollectionResponse|\StructType\GetSpamScoreResponse|\StructType\GetSystemIDFromPublicIDResponse|\StructType\GetTransactionalMessageCollectionResponse
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
