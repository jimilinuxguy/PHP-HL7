<?php

interface HL7RXOInterface
{

    public function getRequestedGiveCode();
    public function getRequestedGiveAmountMinimum();
    public function getRequestedGiveAmountMaximum();
    public function getRequestedGiveUnits();
    public function getRequestedDosageForm();
    public function getRequestedTreatmentInstructions();
    public function getProviderAdministrationInstruction();
    public function getDeliverToLocation();
    public function getAllowSubstitutions();
    public function getRequestedDispenseCode();
    public function getRequestedDispenseAmount();
    public function getRequestedDispenseUnits();
    public function getNumberOfRefills();
    public function getOrderingProviderDEANumber();
    public function getTreatmentProviderDEANumber();
    public function getNeedsHumanReview();
    public function getRequestedGivePerTimeUnit();
    public function getRequestedGiveStrength();
    public function getRequestedGiveStrengthUnits();
    public function getIndication();
    public function getRequestedGiveRateAmount();
    public function getRequestedGiveRateUnits();
}