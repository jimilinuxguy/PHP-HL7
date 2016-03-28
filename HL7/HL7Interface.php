<?php

interface  HL7Interface
{
    public function getType();
    public function getPatient();
    public function getPatientVisit();
    public function getMSH();
    public function getROL();
    public function getDiagnosis();
    public function getPatientInsurance();
    public function getOBX();
    public function getNTE();
    public function getORC();
    public function getOBR();
    public function getSPM();
    public function getRXO();
    public function getRXE();
    public function getRXA();
    public function getPRB();
    public function getGT1();
}
