<?php

$currentDir = getcwd();
require_once $currentDir.'/application/libraries/interfaces/HL7InsuranceInterface.php';
require_once $currentDir.'/application/libraries/interfaces/models/xpn/XPN.php';
require_once $currentDir.'/application/libraries/interfaces/models/xad/XAD.php';
require_once $currentDir.'/application/libraries/interfaces/models/ce/CE.php';

class IN1 implements HL7InsuranceInterface
{
    private $_insurance;

    public function __construct($insurance = null)
    {
        if (isset($insurance)) {
            $this->_insurance = $insurance;
        }
    }

    public function getSetId()
    {
        return (string)  $this->_insurance->{'IN1.1'}->{'IN1.1.1'};
    }

    public function getPlanId()
    {
        $codeElement = new CE($this->_insurance->{'IN1.2'}, 'IN1.2');

        return $codeElement;
    }

    public function getCompanyId()
    {
        $codeElement = new CE($this->_insurance->{'IN1.3'}, 'IN1.3');

        return $codeElement;
    }

    public function getCompanyName()
    {
        return (string) $this->_insurance->{'IN1.4'}->{'IN1.4.1'};
    }

    public function getCompanyAddress()
    {
        $address = new XAD($this->_insurance->{'IN1.5'}, 'IN1.5');

        return $address;
    }

    public function getCompanyContactPerson()
    {
        $named = new XPN($this->_insurance->{'IN1.6'}, 'IN1.6');

        return $named;
    }

    public function getCompanyPhoneNumber()
    {
        return (string) $this->_insurance->{'IN1.7'}->{'IN1.7.1'};
    }

    public function getCompanyGroupNumber()
    {
        return (string) $this->_insurance->{'IN1.8'}->{'IN1.8.1'};
    }

    public function getGroupName()
    {
        return (string) $this->_insurance->{'IN1.9'}->{'IN1.9.1'};
    }

    public function getInsuredGroupEmployerName()
    {
        return (string)  $this->_insurance->{'IN1.10'}->{'IN1.10.1'};
    }

    public function getInsuredGroupEmployerId()
    {
        return (string)  $this->_insurance->{'IN1.11'}->{'IN1.11.1'};
    }

    public function getPlanEffectiveDate()
    {
        return (string) $this->_insurance->{'IN1.12'}->{'IN1.12.1'};
    }

    public function getPlanExpirationDate()
    {
        return (string) $this->_insurance->{'IN1.13'}->{'IN1.13.1'};
    }

    public function getAuthorizationInformation()
    {
        return (string)  $this->_insurance->{'IN1.14'}->{'IN1.14.1'};
    }

    public function getPlanType()
    {
        return (string)  $this->_insurance->{'IN1.15'}->{'IN1.15.1'};
    }

    public function getNameOfInsured()
    {
        $named = new XPN($this->_insurance->{'IN1.16'}, 'IN1.16');

        return $named;
    }

    public function getInsuredRelationshipToPatient()
    {
        $codeElement = new CE($this->_insurance->{'IN1.17'}, 'IN1.17');

        return $codeElement;
    }

    public function getInsuredDateOfBirth()
    {
        return (string) $this->_insurance->{'IN1.18'}->{'IN1.18.1'};
    }

    public function getInsuredAddress()
    {
        $address = new XAD($this->_insurance->{'IN1.19'}, 'IN1.19');

        return $address;
    }

    public function getAssignmentOfBenefits()
    {
       return (string) $this->_insurance->{'IN1.20'}->{'IN1.20.1'};
    }

    public function getCoordinationOfBenefits()
    {
        return (string)  $this->_insurance->{'IN1.21'}->{'IN1.21.1'};
    }

    public function getCoordinationOfBenefitsPriority()
    {
        return (string)  $this->_insurance->{'IN1.22'}->{'IN1.22.1'};
    }

    public function getNoticeOfAdmissionFlag()
    {
        return (string)  $this->_insurance->{'IN1.23'}->{'IN1.23.1'};
    }

    public function getNoticeOfAdmissionDate()
    {
        return (string)  $this->_insurance->{'IN1.24'}->{'IN1.24.1'};
    }

    public function getReportOfEligibilityFlag()
    {
        return (string)  $this->_insurance->{'IN1.25'}->{'IN1.25.1'};
    }

    public function getReportOfEligibilityDate()
    {
        return (string)  $this->_insurance->{'IN1.26'}->{'IN1.26.1'};
    }

    public function getReleaseInformationCode()
    {
        return (string)  $this->_insurance->{'IN1.27'}->{'IN1.27.1'};
    }

    public function getPreAdmitCert()
    {
        return (string)  $this->_insurance->{'IN1.28'}->{'IN1.28.1'};
    }

    public function getVerificationDateTime()
    {
        return (string)  $this->_insurance->{'IN1.29'}->{'IN1.29.1'};
    }

    public function getVerificationBy()
    {
        return (string)  $this->_insurance->{'IN1.30'}->{'IN1.30.1'};
    }

    public function getTypeOfAgreementCode()
    {
        return (string)  $this->_insurance->{'IN1.31'}->{'IN1.31.1'};
    }

    public function getBillingStatus()
    {
        return (string)  $this->_insurance->{'IN1.32'}->{'IN1.32.1'};
    }

    public function getLifetimeReserveDays()
    {
        return (string)  $this->_insurance->{'IN1.33'}->{'IN1.33.1'};
    }

    public function getDelayBeforeLRDay()
    {
        return (string)  $this->_insurance->{'IN1.34'}->{'IN1.34.1'};
    }

    public function getCompanyPlanCode()
    {
        return (string)  $this->_insurance->{'IN1.35'}->{'IN1.35.1'};
    }

    public function getPolicyNumber()
    {
        return (string)  (string) $this->_insurance->{'IN1.36'}->{'IN1.36.1'};
    }

    public function getPolicyDeductible()
    {
        return (string)  $this->_insurance->{'IN1.37'}->{'IN1.37.1'};
    }

    public function getPolicyLimitAmount()
    {
        return (string)  $this->_insurance->{'IN1.38'}->{'IN1.38.1'};
    }

    public function getPolicyLimitDays()
    {
        return (string)  $this->_insurance->{'IN1.39'}->{'IN1.39.1'};
    }

    public function getRoomRateSemiPrivate()
    {   
        return (string)  $this->_insurance->{'IN1.40'}->{'IN1.40.1'};
    }

    public function getRoomRatePrivate()
    {
        return (string)  $this->_insurance->{'IN1.41'}->{'IN1.41.1'};
    }

    public function getInsuredEmploymentStatus()
    {
        return (string)  $this->_insurance->{'IN1.42'}->{'IN1.42.1'};
    }

    public function getInsuredSex()
    {
        return (string)  $this->_insurance->{'IN1.43'}->{'IN1.43.1'};
    }

    public function getInsuredEmployerAddress()
    {
        $address = new XAD($this->_insurance->{'IN1.44'}, 'IN1.44');

        return $address;
    }

    public function getVerificationStatus()
    {
        return (string)  $this->_insurance->{'IN1.45'}->{'IN1.45.1'};
    }

    public function getPriorInsurancePlanId()
    {
        return (string)  $this->_insurance->{'IN1.46'}->{'IN1.46.1'};
    }

    public function getCoverageType()
    {
        return (string)  $this->_insurance->{'IN1.47'}->{'IN1.47.1'};
    }

    public function getHandicap()
    {
        return (string)  $this->_insurance->{'IN1.48'}->{'IN1.48.1'};
    }

    public function getInsuredIdNumber()
    {
        return (string)  $this->_insurance->{'IN1.49'}->{'IN1.49.1'};
    }
}
