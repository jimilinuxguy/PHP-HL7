<?php

interface HL7TQ1Interface
{

    public function getId();
    public function getQuantity();
    public function getQuantityUnits();
    public function getDuration();
    public function getStartTime();
    public function getEndTime();
    public function getCondition();
    public function getInstruction();
    public function getOccurrenceDuration();
    public function getTotalOccurrences();

}