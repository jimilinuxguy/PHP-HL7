<?php

interface HL7MSHInterface
{

    public function getFieldSeparator();
    public function getEncodingCharacters();
    public function getSendingApplication();
    public function getSendingFacility();
    public function getReceivingApplication();
    public function getReceivingFacility();
    public function getDateTime();
    public function getSecurity();
    public function getMessageType();
    public function getControlId();
    public function getProcessingId();
    public function getVersionId();
    public function getSequenceNumber();
    public function getContinuationPointer();
    public function getAcceptAcknowledgmentType();
    public function getApplicationAcknowledgmentType();
    public function getCountryCode();
    public function getCharacterSet();
    public function getPrincipalLanguageOfMessage();

}