<?php
    
interface HL7PRBInterface
{

    public function getActivityTime();
    public function getCode();
    public function getId();
    public function getDiagnosedOn();
    public function getAnticipatedResolution();
    public function getEndTime();
    public function getProblemType();
    public function getStatusCode();
    public function getProblemStatus();
    public function getCertainty();
    public function getProbability();
    public function getPatientProblemAwareness();
    public function getPrognosis();
    public function getPatientPrognosisAwareness();
    public function getFamilyAwareness();
    public function getConfidentialityCode();
    public function getRecordingProvider();
    public function getDiagnosingProvider();

}