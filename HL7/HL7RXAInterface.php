<?php

interface HL7RXAInterface
{
    public function getStartTime();
    public function getEndTime();
    public function getCode();
    public function getDose();
    public function getAdministeringProvider();
    public function getAdministeredAtLocation();
    public function getLotNumber();
    public function getManufacturer();
    public function getStatusCode();
    public function getId();
}