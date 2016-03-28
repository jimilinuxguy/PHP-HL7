<?php

interface HL7RXEInterface
{
    public function getDoseFrequency();
    public function getCode();
    public function getProductForm();
    public function getAdminInstructions();
    public function getDoseQuantity();
    public function getDoseQuantityUnits();
    public function getRefillsTotal();
    public function getPrescribingProvider();
    public function getRefillsRemaining();
    public function getPharmacyInstructions();
    public function getStrength();
    public function getStrengthUnit();
    public function getPharmacyName();
    public function getPharmacyAddress();

}