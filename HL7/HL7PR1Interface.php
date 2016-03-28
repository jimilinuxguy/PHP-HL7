<?php

interface HL7PR1Interface
{

    public function getSetId();
    public function getCodeMethod();
    public function getCode();
    public function getDescription();
    public function getProcedureDateTime();
    public function getFunctionalType();
    public function getProcedureMinutes();
    public function getAnesthesiologist();
    public function getAnesthesiaCode();
    public function getAnesthesiaMinutes();
    public function getSurgeon();
    public function getProcedurePractitioner();
    public function getConsentCode();
    public function getProcedurePriority();
    public function getAssociatedDiagnosisCode();
}