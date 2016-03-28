<?php

interface HL7LocationInterface
{
//		public function run($configuration,$location);
     public function getPointOfCare();
    public function getRoom();
    public function getBed();
    public function getFacility();
    public function getStatus();
    public function getLocationType();
    public function getBuilding();
    public function getFloor();
    public function getDescription();
    public function getLocationIdentifier();
}
