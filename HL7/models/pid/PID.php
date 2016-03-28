<?php
$currentDir = getcwd();
require_once($currentDir.'/application/libraries/interfaces/HL7PatientInterface.php');
require_once($currentDir.'/application/libraries/interfaces/models/xad/XAD.php');
require_once($currentDir.'/application/libraries/interfaces/models/xpn/XPN.php');
require_once($currentDir.'/application/libraries/interfaces/models/ce/CE.php');
require_once($currentDir.'/application/libraries/interfaces/models/cx/CX.php');

 class PID implements HL7PatientInterface
{

    private $_patient;

    public function __construct($patient = null)
    {

        if ($patient) {
            $this->_patient = $patient;
        } else {
           throw new Exception('Could not create patient class');
        }
    
    }
    
    public function getPatientSetId()
    {
        return (int) $this->_patient->{'PID.1'}->{'PID.1.1'};
    }
    
    public function getPatientExternalId()
    {
        return (string) $this->_patient->{'PID.2'}->{'PID.2.1'};
    }
    
    public function getPatientInternalId()
    {
        return (string) $this->_patient->{'PID.3'}->{'PID.3.1'};
    }

    public function getPatientAlternateId()
    {
        return (string) $this->_patient->{'PID.4'}->{'PID.4.1'};
    }

    public function getPatientName()
    {
        $name = new XPN($this->_patient->{'PID.5'}, 'PID.5');
        return $name;
    }
    public function getPatientMotherMaidenName()
    {
        $name = new XPN($this->_patient->{'PID.6'}, 'PID.6');
        return $name;
    }


    public function getPatientBirthdate()
    {
        $birthdate =  (string) $this->_patient->{'PID.7'}->{'PID.7.1'};
        if ( empty($birthdate) ) {
            $birthdate = date('Ymd');
        }
        return $birthdate;
    }
    
    public function getPatientSex()
    {
        $codeElement = new CE($this->_patient->{'PID.8'}, 'PID.8');
        return $codeElement;
    }

    public function getPatientAlias()
    {
        $name = new XPN($this->_patient->{'PID.9'}, 'PID.9');
        return $name;
    }


    public function getPatientRace()
    {
        $codeElement = new CE($this->_patient->{'PID.10'}, 'PID.10');
        return $codeElement;
    }
    
    public function getPatientAddress()
    {
        $addressArray = array();

        foreach($this->_patient->{'PID.11'} as $address) {
            $addressArray[] = new XAD($address, 'PID.11');
        }
        return $addressArray;
    }

    public function getPatientCountryCode()
    {
        return (string) $this->_patient->{'PID.12'}->{'PID.12.1'};
    }
    public function getPatientPhoneHome()
    {
        $phoneArray = array();
        foreach($this->_patient->{'PID.13'} as $phone) {
            $phoneArray[] = (string) $phone->{'PID.13.1'};
        }
        return $phoneArray;
    }
    public function getPatientPhoneBusiness()
    {
        $phoneArray = array();
        foreach($this->_patient->{'PID.14'} as $phone) {
            $phoneArray[] = (string) $phone->{'PID.14.1'};
        }
        return $phoneArray;
    }

    public function getPatientPrimaryLangauge()
    {
        $codeElement = new CE($this->_patient->{'PID.15'}, 'PID.15');
        return $codeElement;
    }

    public function getPatientMaritalStatus()
    {
        $codeElement = new CE($this->_patient->{'PID.16'}, 'PID.16');
        return $codeElement;
    }

    public function getPatientReligion()
    {
        $codeElement = new CE($this->_patient->{'PID.17'}, 'PID.17');
        return $codeElement;
    }

    public function getPatientAccountNumber()
    {
        return (string) $this->_patient->{'PID.18'}->{'PID.18.1'};
    }

    public function getPatientSSN()
    {
        return (string) $this->_patient->{'PID.19'}->{'PID.19.1'};
    }
    
    public function getPatientDriverLicenseNumber()
    {
        return (string) $this->_patient->{'PID.20'}->{'PID.20.1'};
    }
    
    public function getPatientMotherIdentifier()
    {
        $cx = new CX($this->_patient->{'PID.21'}, 'PID.21');
        return $cx;
    }

    public function getPatientEthnicGroup()
    {
        $codeElement = new CE($this->_patient->{'PID.22'}, 'PID.22');
        return $codeElement;
    }
    
    public function getPatientBirthPlace()
    {
        return (string) $this->_patient->{'PID.23'}->{'PID.23.1'};
    }


    public function getPatientMultipleBirthIndicator()
    {
        return (string) $this->_patient->{'PID.24'}->{'PID.24.1'};
    }

    public function getPatientBirthOrder()
    {
        return (string) $this->_patient->{'PID.25'}->{'PID.25.1'};
    }

    public function getPatientCitizenship()
    {
        $codeElement = new CE($this->_patient->{'PID.26'}, 'PID.26');
        return $codeElement;
    }

    public function getPatientVeteranStatus()
    {
        return (string) $this->_patient->{'PID.27'}->{'PID.27.1'};
    }

    public function getPatientNationality()
    {
        return (string) $this->_patient->{'PID.28'}->{'PID.28.1'};
    }

    public function getPatientDeathDateTime()
    {
        return (string) $this->_patient->{'PID.29'}->{'PID.29.1'};
    }

    public function getPatientDeathIndicator()
    {
        return (string) $this->_patient->{'PID.30'}->{'PID.30.1'};
    }
 }