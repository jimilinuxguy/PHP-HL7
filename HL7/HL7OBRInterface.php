<?php

interface HL7OBRInterface
{
    public function getSetID();
    public function getPlacerOrderNumber();
    public function getFillerOrderNumber();
    public function getUniversalServiceID();
    public function getPriority();
    public function getRequestedDateTime();
    public function getObservationDateTime();
    public function getObservationEndDateTime();
    public function getCollectionVolume();
    public function getCollectorIdentifier();
    public function getSpecimenActionCode();
    public function getDangerCode();
    public function getRelevantClinicalInfo();
    public function getSpecimenReceivedDateTime();
    public function getSpecimenSource();
    public function getOrderingProvider();
    public function getOrderCallbackPhoneNumber();
    public function getPlacerField1();
    public function getPlacerField2();
    public function getFillerField1();
    public function getFillerField2();
    public function getResultsRptStatusChngDateTime();
    public function getChargeToPractice();
    public function getDiagnosticServSectID();
    public function getResultStatus();
    public function getParentResult();
    public function getQuantityTiming();
    public function getResultCopiesToParent();
    public function getTransportationMode();
    public function getReasonForStudy();
    public function getPrincipalResultInterpreter();
    public function getAssistantResultInterpreter();
    public function getTechnician();
    public function getTranscriptionist();
    public function getScheduledDateTime();
    public function getNumberOfSampleContainers();
    public function getTransportLogisticsOfCollectedSample();
    public function getCollectorComment();
    public function getTransportArrangementResponsibility();
    public function getTransportArranged();
    public function getEscortRequired();
    public function getPlannedPatientTransportComment();
}