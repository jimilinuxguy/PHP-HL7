<?php

$currentDir = getcwd();
require_once $currentDir.'/application/libraries/interfaces/HL7PatientVisitInterface.php';
require_once $currentDir.'/application/libraries/interfaces/models/xpn/XPN.php';
require_once $currentDir.'/application/libraries/interfaces/models/xad/XAD.php';
require_once $currentDir.'/application/libraries/interfaces/models/xcn/XCN.php';

require_once $currentDir.'/application/libraries/interfaces/models/ce/CE.php';

require_once $currentDir.'/application/libraries/interfaces/models/locations/Location.php';

class PV1 implements HL7PatientVisitInterface
{
        private $_visit;

        public function __construct($visit = null)
        {
            $this->_visit = $visit;
        }

        public function getSetId()
        {
            return (string) $this->_visit->{'PV1.1'}->{'PV1.1.1'};
        }

        public function getAdmittingProvider()
        {
                return array_map(function($item) { return new XCN($item,'PV1.17'); },$this->_visit->xpath('//PV1.17'));
        }

        public function getPatientPriorLocation()
        {
            $location = new Location($this->_visit->{'PV1.6'}, 'PV1.6');

            return $location;
        }

        public function getReferringProvider()
        {
            return array_map(function($item) { return new XCN($item,'PV1.8'); },$this->_visit->xpath('//PV1.8'));
        }

        public function getAttendingProvider()
        {
             return array_map(function($item) { return new XCN($item,'PV1.7'); },$this->_visit->xpath('//PV1.7'));
        }

        public function getConsultingProvider()
        {
            return array_map(function($item) { return new XCN($item,'PV1.9'); },$this->_visit->xpath('//PV1.9'));
        }

        public function getPatientAssignedLocation()
        {
            $location = new Location($this->_visit->{'PV1.3'}, 'PV1.3');

            return $location;
        }

        public function getAdmissionType()
        {
            $codeElement = new CE($this->_visit->{'PV1.4'}, 'PV1.4');

            return $codeElement;
        }

        public function getPreAdmitNumber()
        {
            return (string) $this->_visit->{'PV1.5'}->{'PV1.5.1'};
        }

        public function getHospitalService()
        {
            return (string) $this->_visit->{'PV1.10'}->{'PV1.10.1'};
        }

        public function getVIPIndicator()
        {
            return (string) $this->_visit->{'PV1.16'}->{'PV1.16.1'};
        }

        public function getVisitNumber()
        {
            return (string) $this->_visit->{'PV1.19'}->{'PV1.19.1'};
        }

        public function getFinancialClass()
        {
            return (string) $this->_visit->{'PV1.20'}->{'PV1.20.1'};
        }

        public function getChargePriceIndicator()
        {
            return (string) $this->_visit->{'PV1.21'}->{'PV1.21.1'};
        }

        public function getCourtesyCode()
        {
            return (string) $this->_visit->{'PV1.22'}->{'PV1.22.1'};
        }

        public function getCreditRating()
        {
            return (string) $this->_visit->{'PV1.23'}->{'PV1.23.1'};
        }

        public function getContractCode()
        {
            return (string) $this->_visit->{'PV1.24'}->{'PV1.24.1'};
        }

        public function getContractEffectiveDate()
        {
            return (string) $this->_visit->{'PV1.25'}->{'PV1.25.1'};
        }

        public function getContractAmount()
        {
            return (string) $this->_visit->{'PV1.26'}->{'PV1.26.1'};
        }

        public function getContractPeriod()
        {
            return (string) $this->_visit->{'PV1.27'}->{'PV1.27.1'};
        }
        public function getInterestCode()
        {
            return (string) $this->_visit->{'PV1.28'}->{'PV1.28.1'};
        }
        public function getTransferToBadDebtCode()
        {
            return (string) $this->_visit->{'PV1.29'}->{'PV1.29.1'};
        }
        public function getTransferToBadDebtDate()
        {
            return (string) $this->_visit->{'PV1.30'}->{'PV1.30.1'};
        }
        public function getBadDebtAgencyCode()
        {
            return (string) $this->_visit->{'PV1.31'}->{'PV1.31.1'};
        }
        public function getBadDebtTransferAmount()
        {
            return (string) $this->_visit->{'PV1.32'}->{'PV1.32.1'};
        }
        public function getBadDebtRecoveryAmount()
        {
            return (string) $this->_visit->{'PV1.33'}->{'PV1.33.1'};
        }
        public function getDeleteAccountIndicator()
        {
            return (string) $this->_visit->{'PV1.34'}->{'PV1.34.1'};
        }
        public function getAccountDeleteDate()
        {
            return (string) $this->_visit->{'PV1.35'}->{'PV1.35.1'};
        }
        public function getDischargeDisposition()
        {
            return (string) $this->_visit->{'PV1.36'}->{'PV1.36.1'};
        }
        public function getDischargedToLocation()
        {
            return (string) $this->_visit->{'PV1.37'}->{'PV1.37.1'};
        }
        public function getDietType()
        {
            return (string) $this->_visit->{'PV1.38'}->{'PV1.38.1'};
        }
        public function getServicingFacility()
        {
            return (string) $this->_visit->{'PV1.39'}->{'PV1.39.1'};
        }
        public function getBedStatus()
        {
            return (string) $this->_visit->{'PV1.40'}->{'PV1.40.1'};
        }
        public function getAccountStatus()
        {
            return (string) $this->_visit->{'PV1.41'}->{'PV1.41.1'};
        }
        public function getPendingLocation()
        {
            return (string) $this->_visit->{'PV1.42'}->{'PV1.42.1'};
        }
        public function getPriorTemporaryLocation()
        {
            return (string) $this->_visit->{'PV1.43'}->{'PV1.43.1'};
        }
        public function getAdmitDateTime()
        {
            return (string) $this->_visit->{'PV1.44'}->{'PV1.44.1'};
        }
        public function getDischargeDateTime()
        {
            return (string) $this->_visit->{'PV1.45'}->{'PV1.45.1'};
        }
        public function getCurrentPatientBalance()
        {
            return (string) $this->_visit->{'PV1.46'}->{'PV1.46.1'};
        }
        public function getTotalCharges()
        {
            return (string) $this->_visit->{'PV1.47'}->{'PV1.47.1'};
        }
        public function getTotalAdjustments()
        {
            return (string) $this->_visit->{'PV1.48'}->{'PV1.48.1'};
        }
        public function getTotalPayments()
        {
            return (string) $this->_visit->{'PV1.49'}->{'PV1.49.1'};
        }
        public function getAlternateVisitId()
        {
            return (string) $this->_visit->{'PV1.50'}->{'PV1.50.1'};
        }
        public function getVisitIndicator()
        {
            return (string) $this->_visit->{'PV1.51'}->{'PV1.51.1'};
        }
        public function getOtherHealthcareProvider()
        {
            return array_map(function($item) { return new XCN($item,'PV1.52'); },$this->_visit->xpath('//PV1.52'));        
        }
}
