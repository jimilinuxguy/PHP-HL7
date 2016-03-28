<?php

interface HL7SPMInterface
{


    public function getSetId();
    public function getSpecimenCode();
    public function getSpecimenColletionMethod();
    public function getSpecimenBodyLocation();
    public function getSpecimenCollectionVolume();
    public function getSpecimenCollectionVolumeUnits();
    public function getSpecimenDescription();
    public function getSpecimenActionCode();
    public function getSpecimenActivityTime();
    public function getSpecimenAdditives();
    public function getSpecimenSourceSite();
    public function getSpecimenRole();
    public function getSpecimenRiskCode();

}