<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://webservices.listrak.com/v31/IntegrationService.asmx?WSDL',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://webservices.listrak.com/v31/IntegrationService.asmx?WSDL',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
);
/**
 * Samples for Bulk ServiceType
 */
$bulk = new \ServiceType\Bulk($options);
$bulk->setSoapHeaderWSUser(new \StructType\WSUser());
/**
 * Sample call for BulkLoadContacts operation/method
 */
if ($bulk->BulkLoadContacts(new \StructType\BulkLoadContacts()) !== false) {
    print_r($bulk->getResult());
} else {
    print_r($bulk->getLastError());
}
/**
 * Sample call for BulkLoadContactsWithOptions operation/method
 */
if ($bulk->BulkLoadContactsWithOptions(new \StructType\BulkLoadContactsWithOptions()) !== false) {
    print_r($bulk->getResult());
} else {
    print_r($bulk->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \ServiceType\Update($options);
$update->setSoapHeaderWSUser(new \StructType\WSUser());
/**
 * Sample call for UpdateSubscribedContactAttribute operation/method
 */
if ($update->UpdateSubscribedContactAttribute(new \StructType\UpdateSubscribedContactAttribute()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateSubscribedContactAttributeWithOptions operation/method
 */
if ($update->UpdateSubscribedContactAttributeWithOptions(new \StructType\UpdateSubscribedContactAttributeWithOptions()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateContactList operation/method
 */
if ($update->UpdateContactList(new \StructType\UpdateContactList()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateProfileHeader operation/method
 */
if ($update->UpdateProfileHeader(new \StructType\UpdateProfileHeader()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateProfileAttribute operation/method
 */
if ($update->UpdateProfileAttribute(new \StructType\UpdateProfileAttribute()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateContact operation/method
 */
if ($update->UpdateContact(new \StructType\UpdateContact()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\Get($options);
$get->setSoapHeaderWSUser(new \StructType\WSUser());
/**
 * Sample call for GetProcessStatus operation/method
 */
if ($get->GetProcessStatus(new \StructType\GetProcessStatus()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetMessageStatus operation/method
 */
if ($get->GetMessageStatus(new \StructType\GetMessageStatus()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetLegacyProcessStatus operation/method
 */
if ($get->GetLegacyProcessStatus(new \StructType\GetLegacyProcessStatus()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAccountVmtaCollection operation/method
 */
if ($get->GetAccountVmtaCollection(new \StructType\GetAccountVmtaCollection()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetContactList operation/method
 */
if ($get->GetContactList(new \StructType\GetContactList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetContactListCollection operation/method
 */
if ($get->GetContactListCollection(new \StructType\GetContactListCollection()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetProfileHeaderCollection operation/method
 */
if ($get->GetProfileHeaderCollection(new \StructType\GetProfileHeaderCollection()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetContact operation/method
 */
if ($get->GetContact(new \StructType\GetContact()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetContactByEmailKey operation/method
 */
if ($get->GetContactByEmailKey(new \StructType\GetContactByEmailKey()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTransactionalMessageCollection operation/method
 */
if ($get->GetTransactionalMessageCollection(new \StructType\GetTransactionalMessageCollection()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetMessageAnalyticsInformation operation/method
 */
if ($get->GetMessageAnalyticsInformation(new \StructType\GetMessageAnalyticsInformation()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSpamScore operation/method
 */
if ($get->GetSpamScore(new \StructType\GetSpamScore()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCampaignCollection operation/method
 */
if ($get->GetCampaignCollection(new \StructType\GetCampaignCollection()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCharacterSetCollection operation/method
 */
if ($get->GetCharacterSetCollection(new \StructType\GetCharacterSetCollection()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSavedMessageCollection operation/method
 */
if ($get->GetSavedMessageCollection(new \StructType\GetSavedMessageCollection()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetFilteredListCount operation/method
 */
if ($get->GetFilteredListCount(new \StructType\GetFilteredListCount()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSystemIDFromPublicID operation/method
 */
if ($get->GetSystemIDFromPublicID(new \StructType\GetSystemIDFromPublicID()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Conductor ServiceType
 */
$conductor = new \ServiceType\Conductor($options);
$conductor->setSoapHeaderWSUser(new \StructType\WSUser());
/**
 * Sample call for ConductorBulkLoadAndTriggerContacts operation/method
 */
if ($conductor->ConductorBulkLoadAndTriggerContacts(new \StructType\ConductorBulkLoadAndTriggerContacts()) !== false) {
    print_r($conductor->getResult());
} else {
    print_r($conductor->getLastError());
}
/**
 * Sample call for ConductorBulkLoadAndTriggerContactsWithOptions operation/method
 */
if ($conductor->ConductorBulkLoadAndTriggerContactsWithOptions(new \StructType\ConductorBulkLoadAndTriggerContactsWithOptions()) !== false) {
    print_r($conductor->getResult());
} else {
    print_r($conductor->getLastError());
}
/**
 * Sample call for ConductorGetExternalEvents operation/method
 */
if ($conductor->ConductorGetExternalEvents(new \StructType\ConductorGetExternalEvents()) !== false) {
    print_r($conductor->getResult());
} else {
    print_r($conductor->getLastError());
}
/**
 * Sample call for ConductorGetConversations operation/method
 */
if ($conductor->ConductorGetConversations(new \StructType\ConductorGetConversations()) !== false) {
    print_r($conductor->getResult());
} else {
    print_r($conductor->getLastError());
}
/**
 * Samples for Create ServiceType
 */
$create = new \ServiceType\Create($options);
$create->setSoapHeaderWSUser(new \StructType\WSUser());
/**
 * Sample call for CreateContactList operation/method
 */
if ($create->CreateContactList(new \StructType\CreateContactList()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateList operation/method
 */
if ($create->CreateList(new \StructType\CreateList()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateProfileHeader operation/method
 */
if ($create->CreateProfileHeader(new \StructType\CreateProfileHeader()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateProfileAttribute operation/method
 */
if ($create->CreateProfileAttribute(new \StructType\CreateProfileAttribute()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Add ServiceType
 */
$add = new \ServiceType\Add($options);
$add->setSoapHeaderWSUser(new \StructType\WSUser());
/**
 * Sample call for AddGoogleTrackingDomainsToList operation/method
 */
if ($add->AddGoogleTrackingDomainsToList(new \StructType\AddGoogleTrackingDomainsToList()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \ServiceType\Delete($options);
$delete->setSoapHeaderWSUser(new \StructType\WSUser());
/**
 * Sample call for DeleteGoogleTrackingDomainsFromList operation/method
 */
if ($delete->DeleteGoogleTrackingDomainsFromList(new \StructType\DeleteGoogleTrackingDomainsFromList()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteContactList operation/method
 */
if ($delete->DeleteContactList(new \StructType\DeleteContactList()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteProfileHeader operation/method
 */
if ($delete->DeleteProfileHeader(new \StructType\DeleteProfileHeader()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteProfileAttribute operation/method
 */
if ($delete->DeleteProfileAttribute(new \StructType\DeleteProfileAttribute()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Set ServiceType
 */
$set = new \ServiceType\Set($options);
$set->setSoapHeaderWSUser(new \StructType\WSUser());
/**
 * Sample call for SetContact operation/method
 */
if ($set->SetContact(new \StructType\SetContact()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Samples for Send ServiceType
 */
$send = new \ServiceType\Send($options);
$send->setSoapHeaderWSUser(new \StructType\WSUser());
/**
 * Sample call for SendTransactionalMessage operation/method
 */
if ($send->SendTransactionalMessage(new \StructType\SendTransactionalMessage()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for SendListMessage operation/method
 */
if ($send->SendListMessage(new \StructType\SendListMessage()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for SendListMessageWithProfileFilter operation/method
 */
if ($send->SendListMessageWithProfileFilter(new \StructType\SendListMessageWithProfileFilter()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for SendListMessageTest operation/method
 */
if ($send->SendListMessageTest(new \StructType\SendListMessageTest()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for SendListMessageReview operation/method
 */
if ($send->SendListMessageReview(new \StructType\SendListMessageReview()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for SendSavedMessage operation/method
 */
if ($send->SendSavedMessage(new \StructType\SendSavedMessage()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for SendSavedMessageTest operation/method
 */
if ($send->SendSavedMessageTest(new \StructType\SendSavedMessageTest()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Samples for Subscribe ServiceType
 */
$subscribe = new \ServiceType\Subscribe($options);
$subscribe->setSoapHeaderWSUser(new \StructType\WSUser());
/**
 * Sample call for SubscribeFormPassThrough operation/method
 */
if ($subscribe->SubscribeFormPassThrough(new \StructType\SubscribeFormPassThrough()) !== false) {
    print_r($subscribe->getResult());
} else {
    print_r($subscribe->getLastError());
}
/**
 * Sample call for SubscribeContact operation/method
 */
if ($subscribe->SubscribeContact(new \StructType\SubscribeContact()) !== false) {
    print_r($subscribe->getResult());
} else {
    print_r($subscribe->getLastError());
}
/**
 * Samples for Change ServiceType
 */
$change = new \ServiceType\Change($options);
$change->setSoapHeaderWSUser(new \StructType\WSUser());
/**
 * Sample call for ChangeContactEmailAddress operation/method
 */
if ($change->ChangeContactEmailAddress(new \StructType\ChangeContactEmailAddress()) !== false) {
    print_r($change->getResult());
} else {
    print_r($change->getLastError());
}
/**
 * Samples for Unsubscribe ServiceType
 */
$unsubscribe = new \ServiceType\Unsubscribe($options);
$unsubscribe->setSoapHeaderWSUser(new \StructType\WSUser());
/**
 * Sample call for UnsubscribeContact operation/method
 */
if ($unsubscribe->UnsubscribeContact(new \StructType\UnsubscribeContact()) !== false) {
    print_r($unsubscribe->getResult());
} else {
    print_r($unsubscribe->getLastError());
}
/**
 * Samples for Schedule ServiceType
 */
$schedule = new \ServiceType\Schedule($options);
$schedule->setSoapHeaderWSUser(new \StructType\WSUser());
/**
 * Sample call for ScheduleSendListMessage operation/method
 */
if ($schedule->ScheduleSendListMessage(new \StructType\ScheduleSendListMessage()) !== false) {
    print_r($schedule->getResult());
} else {
    print_r($schedule->getLastError());
}
/**
 * Sample call for ScheduleSendListMessageWithProfileFilter operation/method
 */
if ($schedule->ScheduleSendListMessageWithProfileFilter(new \StructType\ScheduleSendListMessageWithProfileFilter()) !== false) {
    print_r($schedule->getResult());
} else {
    print_r($schedule->getLastError());
}
/**
 * Samples for Report ServiceType
 */
$report = new \ServiceType\Report($options);
$report->setSoapHeaderWSUser(new \StructType\WSUser());
/**
 * Sample call for ReportSubscribedContacts operation/method
 */
if ($report->ReportSubscribedContacts(new \StructType\ReportSubscribedContacts()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportRangeSubscribedContacts operation/method
 */
if ($report->ReportRangeSubscribedContacts(new \StructType\ReportRangeSubscribedContacts()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportAdminContactFeedbackLoop operation/method
 */
if ($report->ReportAdminContactFeedbackLoop(new \StructType\ReportAdminContactFeedbackLoop()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportMessageContactSent operation/method
 */
if ($report->ReportMessageContactSent(new \StructType\ReportMessageContactSent()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportMessageContactOpen operation/method
 */
if ($report->ReportMessageContactOpen(new \StructType\ReportMessageContactOpen()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportRangeMessageContactOpen operation/method
 */
if ($report->ReportRangeMessageContactOpen(new \StructType\ReportRangeMessageContactOpen()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportMessageContactRead operation/method
 */
if ($report->ReportMessageContactRead(new \StructType\ReportMessageContactRead()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportRangeMessageContactRead operation/method
 */
if ($report->ReportRangeMessageContactRead(new \StructType\ReportRangeMessageContactRead()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportMessageContactClick operation/method
 */
if ($report->ReportMessageContactClick(new \StructType\ReportMessageContactClick()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportRangeMessageContactClick operation/method
 */
if ($report->ReportRangeMessageContactClick(new \StructType\ReportRangeMessageContactClick()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportMessageContactPassalong operation/method
 */
if ($report->ReportMessageContactPassalong(new \StructType\ReportMessageContactPassalong()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportRangeMessageContactPassalong operation/method
 */
if ($report->ReportRangeMessageContactPassalong(new \StructType\ReportRangeMessageContactPassalong()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportMessageContactBounces operation/method
 */
if ($report->ReportMessageContactBounces(new \StructType\ReportMessageContactBounces()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportRangeMessageContactBounces operation/method
 */
if ($report->ReportRangeMessageContactBounces(new \StructType\ReportRangeMessageContactBounces()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportListMessageActivity operation/method
 */
if ($report->ReportListMessageActivity(new \StructType\ReportListMessageActivity()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportListMessageDelivery operation/method
 */
if ($report->ReportListMessageDelivery(new \StructType\ReportListMessageDelivery()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportListContactRemoval operation/method
 */
if ($report->ReportListContactRemoval(new \StructType\ReportListContactRemoval()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportRangeListContactRemoval operation/method
 */
if ($report->ReportRangeListContactRemoval(new \StructType\ReportRangeListContactRemoval()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportListContactHygiene operation/method
 */
if ($report->ReportListContactHygiene(new \StructType\ReportListContactHygiene()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportRangeListContactHygiene operation/method
 */
if ($report->ReportRangeListContactHygiene(new \StructType\ReportRangeListContactHygiene()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportMessageLinkClick operation/method
 */
if ($report->ReportMessageLinkClick(new \StructType\ReportMessageLinkClick()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportContactLinkClick operation/method
 */
if ($report->ReportContactLinkClick(new \StructType\ReportContactLinkClick()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportMessageLocationClick operation/method
 */
if ($report->ReportMessageLocationClick(new \StructType\ReportMessageLocationClick()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportMessageLocationOpen operation/method
 */
if ($report->ReportMessageLocationOpen(new \StructType\ReportMessageLocationOpen()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportMessageLocationRead operation/method
 */
if ($report->ReportMessageLocationRead(new \StructType\ReportMessageLocationRead()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportMessageLocationContactClick operation/method
 */
if ($report->ReportMessageLocationContactClick(new \StructType\ReportMessageLocationContactClick()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportMessageLocationContactOpen operation/method
 */
if ($report->ReportMessageLocationContactOpen(new \StructType\ReportMessageLocationContactOpen()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportMessageLocationContactRead operation/method
 */
if ($report->ReportMessageLocationContactRead(new \StructType\ReportMessageLocationContactRead()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportMessageContactActivity operation/method
 */
if ($report->ReportMessageContactActivity(new \StructType\ReportMessageContactActivity()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportRangeMessageContactRemoval operation/method
 */
if ($report->ReportRangeMessageContactRemoval(new \StructType\ReportRangeMessageContactRemoval()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportMessageContactRemoval operation/method
 */
if ($report->ReportMessageContactRemoval(new \StructType\ReportMessageContactRemoval()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportContactMessageActivity operation/method
 */
if ($report->ReportContactMessageActivity(new \StructType\ReportContactMessageActivity()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportListImportHistory operation/method
 */
if ($report->ReportListImportHistory(new \StructType\ReportListImportHistory()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportImportContactDetail operation/method
 */
if ($report->ReportImportContactDetail(new \StructType\ReportImportContactDetail()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportListConversationActivity operation/method
 */
if ($report->ReportListConversationActivity(new \StructType\ReportListConversationActivity()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportListConversationDelivery operation/method
 */
if ($report->ReportListConversationDelivery(new \StructType\ReportListConversationDelivery()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportConversationContactDelivery operation/method
 */
if ($report->ReportConversationContactDelivery(new \StructType\ReportConversationContactDelivery()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportConversationContactRemoval operation/method
 */
if ($report->ReportConversationContactRemoval(new \StructType\ReportConversationContactRemoval()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportConversationContactOpen operation/method
 */
if ($report->ReportConversationContactOpen(new \StructType\ReportConversationContactOpen()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportConversationContactRead operation/method
 */
if ($report->ReportConversationContactRead(new \StructType\ReportConversationContactRead()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportConversationLinkClick operation/method
 */
if ($report->ReportConversationLinkClick(new \StructType\ReportConversationLinkClick()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportConversationContactBounce operation/method
 */
if ($report->ReportConversationContactBounce(new \StructType\ReportConversationContactBounce()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportConversationLocationContactOpen operation/method
 */
if ($report->ReportConversationLocationContactOpen(new \StructType\ReportConversationLocationContactOpen()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportConversationLocationContactRead operation/method
 */
if ($report->ReportConversationLocationContactRead(new \StructType\ReportConversationLocationContactRead()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Sample call for ReportConversationLocationContactClick operation/method
 */
if ($report->ReportConversationLocationContactClick(new \StructType\ReportConversationLocationContactClick()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
