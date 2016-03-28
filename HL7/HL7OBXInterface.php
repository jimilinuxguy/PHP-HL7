<?php

interface HL7OBXInterface
{

    public function getSetId();
    public function getValueType();
    public function getObservationIdentifier();
    public function getObservationSubId();
    public function getObservationValue();
    public function getUnits();
    public function getReferenceRange();
    public function getAbnormalFlags();
    public function getProbability();
    public function getNatureOfAbnormalTest();
    public function getResultStatus();
    public function getDataLastObsNormalValues();
    public function getUserDefinedAccessChecks();
    public function getDateTimeOfObservation();
    public function getProducerId();
    public function getResponsibleObserver();
    public function getObservationMethod();

}