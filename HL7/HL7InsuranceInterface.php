<?php

interface HL7InsuranceInterface
{
        public function getSetId();

    public function getPlanId();

    public function getCompanyId();

    public function getCompanyName();

    public function getCompanyAddress();

    public function getCompanyContactPerson();

    public function getCompanyPhoneNumber();

    public function getCompanyGroupNumber();

    public function getGroupName();

    public function getInsuredGroupEmployerName();

    public function getInsuredGroupEmployerId();

    public function getPlanEffectiveDate();

    public function getPlanExpirationDate();

    public function getAuthorizationInformation();

    public function getPlanType();

    public function getNameOfInsured();

    public function getInsuredRelationshipToPatient();

    public function getInsuredDateOfBirth();

    public function getInsuredAddress();

    public function getAssignmentOfBenefits();

    public function getCoordinationOfBenefits();

    public function getCoordinationOfBenefitsPriority();

    public function getNoticeOfAdmissionFlag();

    public function getNoticeOfAdmissionDate();

    public function getReportOfEligibilityFlag();

    public function getReportOfEligibilityDate();

    public function getReleaseInformationCode();

    public function getPreAdmitCert();

    public function getVerificationDateTime();

    public function getVerificationBy();

    public function getTypeOfAgreementCode();

    public function getBillingStatus();

    public function getLifetimeReserveDays();

    public function getDelayBeforeLRDay();

    public function getCompanyPlanCode();

    public function getPolicyNumber();

    public function getPolicyDeductible();

    public function getPolicyLimitAmount();

    public function getPolicyLimitDays();

    public function getRoomRateSemiPrivate();

    public function getRoomRatePrivate();

    public function getInsuredEmploymentStatus();

    public function getInsuredSex();

    public function getInsuredEmployerAddress();

    public function getVerificationStatus();

    public function getPriorInsurancePlanId();

    public function getCoverageType();

    public function getHandicap();

    public function getInsuredIdNumber();
}
