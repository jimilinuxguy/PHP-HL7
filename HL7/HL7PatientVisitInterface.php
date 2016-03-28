<?php

interface HL7PatientVisitInterface
{
    public function getSetId();
    public function getAdmittingProvider() ;
    public function getReferringProvider() ;
    public function getAttendingProvider() ;
    public function getConsultingProvider() ;
    public function getPatientAssignedLocation() ;
    public function getPatientPriorLocation();
    public function getAdmissionType() ;
    public function getPreAdmitNumber() ;
    public function getHospitalService() ;
    public function getVIPIndicator() ;
    public function getVisitNumber() ;
    public function getFinancialClass() ;
    public function getChargePriceIndicator() ;
    public function getCourtesyCode() ;
    public function getCreditRating() ;
    public function getContractCode() ;
    public function getContractEffectiveDate() ;
    public function getContractAmount() ;
    public function getContractPeriod() ;
    public function getInterestCode();
    public function getTransferToBadDebtCode() ;
    public function getTransferToBadDebtDate() ;
    public function getBadDebtAgencyCode() ;
    public function getBadDebtTransferAmount() ;
    public function getBadDebtRecoveryAmount() ;
    public function getDeleteAccountIndicator() ;
    public function getAccountDeleteDate() ;
    public function getDischargeDisposition() ;
    public function getDischargedToLocation() ;
    public function getDietType() ;
    public function getServicingFacility() ;
    public function getBedStatus() ;
    public function getAccountStatus() ;
    public function getPendingLocation() ;
    public function getPriorTemporaryLocation() ;
    public function getAdmitDateTime() ;
    public function getDischargeDateTime() ;
    public function getCurrentPatientBalance() ;
    public function getTotalCharges() ;
    public function getTotalAdjustments() ;
    public function getTotalPayments() ;
    public function getAlternateVisitId() ;
    public function getVisitIndicator() ;
    public function getOtherHealthcareProvider() ;
}