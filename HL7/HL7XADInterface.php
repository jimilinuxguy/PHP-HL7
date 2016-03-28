<?php

interface HL7XADInterface
{

    public function getStreet1();
    public function getStreet2();
    public function getLocality(); //City
    public function getRegion();
    public function getPostal();  // Zipcode
    public function getCountryCode();
    public function getCodeCode();
}