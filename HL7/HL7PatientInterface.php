<?php

interface HL7PatientInterface
{


    public function getPatientSetId() ;

    public function getPatientExternalId() ;

    public function getPatientInternalId() ;


    public function getPatientAlternateId() ;


    public function getPatientName() ;

    public function getPatientMotherMaidenName() ;

    public function getPatientBirthdate() ;

    public function getPatientSex() ;

    public function getPatientAlias() ;



    public function getPatientRace() ;

    public function getPatientAddress() ;

    public function getPatientCountryCode() ;

    public function getPatientPhoneHome() ;

    public function getPatientPhoneBusiness() ;

    public function getPatientPrimaryLangauge() ;


    public function getPatientMaritalStatus() ;


    public function getPatientReligion() ;


    public function getPatientAccountNumber() ;

    public function getPatientSSN() ;

    public function getPatientDriverLicenseNumber() ;

    public function getPatientMotherIdentifier() ;

    public function getPatientEthnicGroup() ;

    public function getPatientBirthPlace() ;

    public function getPatientMultipleBirthIndicator() ;

    public function getPatientBirthOrder() ;


    public function getPatientCitizenship() ;


    public function getPatientVeteranStatus() ;

    public function getPatientNationality() ;

    public function getPatientDeathDateTime() ;

    public function getPatientDeathIndicator() ;

}